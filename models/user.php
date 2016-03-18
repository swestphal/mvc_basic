<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 17:05
 */
class UserModel extends Model
{

    public function register()
    {
        //sanitize _POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);


        if ($post['submit']) {
            //insert to mysql
            $this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);

            $this->execute();

            if ($this->lastInsertId()) {
                header('Location: ' . ROOT_URL . 'posts');
            }
        }
    }

    public function login()
    {

        //sanitize _POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);


        if ($post['submit']) {

            //insert to mysql
            $this->query('SELECT id, name, email FROM users WHERE name =:name');
            $this->bind(':name', $post['name']);
//            $this->bind(':password', $password);

            $this->execute();

            $current_user = $this->resultSingle();

            if ($current_user) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $current_user['id'],
                    "name" => $current_user['name'],
                    "email" => $current_user['email']);
                header('Location: ' . ROOT_URL . 'posts');
            } else Messages::setMessage("Incorrect Login", "error");
        }
        return;
    }

    public function logout()
    {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        Messages::setMessage("You are logged out!");
        header('Location: '. ROOT_URL);
    }
}