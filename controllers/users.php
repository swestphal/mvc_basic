<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 14:08
 */
Class Users extends Controller
{
    protected function register()
    {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->register(),true);
    }

    protected function login()
    {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->login(), true);
    }

    protected function logout()
    {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->logout(),true);
    }

}