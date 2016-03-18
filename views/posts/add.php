<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 17:27
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">New Post</div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <label>Post Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label>Post Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
            <a class="btn btn-danger" href="<?php echo ROOT_PATH;?>">Cancel</a>
        </form>
    </div>
</div>

