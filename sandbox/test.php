<?php
spl_autoload_register(function($class_name){
echo $class_name;
include $class_name.'.php';})?>


<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php echo "-" . $assoc["Mary"]; ?>
<?php echo "-" . count($assoc); ?>
<?php var_dump($assoc); ?>
<br>
<?php array_pop($assoc); ?>
<?php echo "-" . $assoc["Mary"]; ?>
<?php echo "-" . count($assoc); ?>
<?php var_dump($assoc); ?>

<?php

$user = new User();
echo $user->public;
echo $user->protected;

echo $user->private;


$user->login("brad","clematis");
$post = new Post;
echo "<br/>";
 $post->name="marie";
echo "<br/>".$post->name;
$user::validatePassword("dfdu");
$underpos = new UnderPost();
$underpos->huhu();
?>
</body>
</html>