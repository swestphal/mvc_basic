<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 17:05
 */
class PostModel extends Model
{

    public function Index()
    {
        $this->query('SELECT * FROM posts ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add()
    {
        //sanitize _POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
            //insert to mysql
            $this->query('INSERT INTO posts (title, body, user_id) VALUES (:title, :body, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);

            //todo: change user_id to current user;
            $this->bind('user_id', 1);

//            $this->bind('user_id', $post['user_id']);

            $this->execute();

            if ($this->lastInsertId()) {
                header('Location: ' . ROOT_URL . 'posts');
            }
        }

    }
}