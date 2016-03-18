<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 17:28
 */

 ?>
<div class="panel panel-default">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
            <a class="btn btn-danger" href="<?php echo ROOT_PATH;?>">Cancel</a>
        </form>
    </div>
</div>