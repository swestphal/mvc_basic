<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 14:08
 */
Class Posts extends Controller
{
    protected function Index()
    {

        $viewmodel = new PostModel();
        $this->ReturnView($viewmodel->Index(), true);
    }

    protected function add()
    {
        if (!isset($_SESSION['logged_in'])) {
            header('Location: ' . ROOT_URL . 'posts');
        } else {
            $viewmodel = new PostModel();
            $this->ReturnView($viewmodel->add(), true);
        }
    }



}