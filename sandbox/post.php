<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 15.03.16
 * Time: 10:29
 */
class Post
{
    private $name;

    public function __set($name, $value)
    {
        echo "setting " . $name . " to " . "$value";
        $this->name = $value;
    }

    public function __get($name)
    {
//       echo "<br>getter: ".$this->name;
        echo "--" . isset($$name);
    }

    public function __isset($name)
    {
        echo "is " . $name . $this->name;
        if (isset($this->name)) {
            echo "gibt es!";

        };
    }

    public static function saghallo()
    {
       echo "hallo von ".__CLASS__;
    }

    public static function huhu()
    {

        static::saghallo();
    }
}

class UnderPost extends Post
{
    public static function saghallo()
    {
     echo "....... von ".__CLASS__;
    }



}