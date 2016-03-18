<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 15.03.16
 * Time: 09:25
 */
Class User
{
//    public $public = "public";
//    protected $protected = "protected";
//    private $private = "private";

    private $id = 33;
    private $username;
    private $email;
    private $password;

    public static $minPassLength = 5;

    public function __construct()
    {
        echo "class is used";

    }

    public function register()
    {
        echo "You are registered";
    }

    public function login($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->auth_user();
    }

    public function auth_user()
    {
        echo $this->username . " is now logged in";
        echo $this->id;
    }

    public function __destruct()
    {
        echo "destructor called";
        foreach ($this as $key => $value) {
            echo $key." - ".$value;
        }
    }

    public static function validatePassword($password)
    {
        if (strlen($password) >= self::$minPassLength) {
            echo "PAssword ok";
        }
    }
}