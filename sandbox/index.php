<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
require_once 'classes/Database.php';

$database = new Database;


$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if (isset($post['delete'])) {
    $id = $post['delete_id'];
    $database->query("DELETE FROM posts WHERE id=:id");
    $database->bind(':id', $id);

    $database->execute();
    if ($database->lastInsertId()) {
        echo "gelöscht";
    }
}
if (isset($post['add'])) {
    if (!empty($post['id'])) $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];

    if (!empty($id)) {
        $database->query("UPDATE posts SET title=:title,body=:body WHERE id =:id");
        $database->bind(':id', $id);
    } else {
        $database->query("INSERT INTO posts (title, body) VALUES (:title, :body)");
    }
    $database->bind(':title', $title);
    $database->bind(':body', $body);


    $database->execute();
    if ($database->lastInsertId()) {
        echo '<p>Post added</p>';
    }

}
$database->query("SELECT * FROM posts");
$database->bind(':id', 1);
$rows = $database->resultset();

?>
<h1>Posts</h1>
<div>
    <?php
    foreach ($rows as $row):
        ?>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="delete_id" value='<?php echo $row['id']; ?>'>
            <input type="submit" name="delete" value="delete">
        </form>
        <?php
        echo '<h3>' . $row['title'] . '</h3>';
        echo '<p>' . $row['body'] . '</p>';

    endforeach;
    ?>
</div>

<h1>Add Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>ID</label>
    <input type="text" name="id" placeholder="ID"><br>
    <label>Title</label><br>
    <input type="text" name="title" placeholder="Add a title..."><br>
    <label>Post Body</label><br>
    <textarea name="body"></textarea><br>
    <input type="submit" name="add" value="submit">
</form>
