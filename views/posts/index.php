<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 17:27
 */; ?>
<div>
<?php if (isset($_SESSION['logged_in'])) : ?>
    <a class="btn btn-success btn-post" href="<?php echo ROOT_PATH; ?>posts/add">Post something</a>
<?php endif;?>
    <?php foreach ($viewmodel as $item): ?>
    <div class="well">
        <h3><?php echo $item['title']; ?>
        </h3>
        <small><?php echo $item['create_date'];?></small>
        <hr>
        <p><?php echo $item['body'];?></p>
        <br/>

    </div>
    <?php endforeach;?>
</div>