<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 17:12
 */

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="../assets/css/styles.css" rel="stylesheet" media="all">
</head>
<body>
<nav class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo(ROOT_URL); ?>">Home</a></li>
                <li><a href="<?php echo(ROOT_URL); ?>posts">Posts</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!--                <li class="dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--                    <ul class="dropdown-menu">-->
                <!--                        <li><a href="#">Action</a></li>-->
                <!--                        <li><a href="#">Another action</a></li>-->
                <!--                        <li><a href="#">Something else here</a></li>-->
                <!--                        <li role="separator" class="divider"></li>-->
                <!--                        <li class="dropdown-header">Nav header</li>-->
                <!--                        <li><a href="#">Separated link</a></li>-->
                <!--                        <li><a href="#">One more separated link</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            </ul>
            <!--            <form class="navbar-form navbar-right">-->
            <!--                <div class="form-group">-->
            <!--                    <input type="text" placeholder="Email" class="form-control">-->
            <!--                </div>-->
            <!--                <div class="form-group">-->
            <!--                    <input type="password" placeholder="Password" class="form-control">-->
            <!--                </div>-->
            <!--                <button type="submit" class="btn btn-success">Sign in</button>-->
            <!--            </form>-->

            <ul class="nav navbar-nav navbar-right">

                <?php if (!isset($_SESSION['logged_in'])): ?>
                    <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>

                <?php else: ; ?>
                    <li><a>Hi <?php echo $_SESSION['user_data']['name']; ?>, you are logged in!</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
                <?php endif; ?>
            </ul>

        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div class="container">
    <div class="row">
        <?php echo Messages::displayMessage(); ?>
        <?php require_once($view); ?>
    </div>
</div>
</body>
</html>
