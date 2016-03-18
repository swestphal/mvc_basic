<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 13:27
 */

session_start();

require_once('config.php');

require_once('classes/Bootstrap.php');
require_once('classes/Controller.php');
require_once('classes/Model.php');
require_once('classes/Messages.php');

require_once('controllers/home.php');
require_once('controllers/posts.php');
require_once('controllers/users.php');

require_once('models/home.php');
require_once('models/post.php');
require_once('models/user.php');



$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}