<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 17.03.16
 * Time: 13:28
 */
class Messages
{
    public static function setMessage($text, $type="success")
    {
        if ($type == 'error') {
            $_SESSION['errorMsg'] = $text;
        } else {
            $_SESSION['successMsg'] = $text;
        }
    }


    public static function displayMessage()
    {
        if (isset($_SESSION['errorMsg'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['errorMsg'] . '</div>';
            unset($_SESSION['errorMsg']);
        }
        if (isset($_SESSION['successMsg'])) {
            echo '<div class="alert alert-success">' . $_SESSION['successMsg'] . '</div>';
            unset($_SESSION['successMsg']);
        }
    }
}
