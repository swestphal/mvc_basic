<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 16.03.16
 * Time: 14:08
 */
Class Home extends Controller
{
    protected function Index()
    {
        // get data
        $viewmodel = new HomeModel();

        //get view
        $this->ReturnView($viewmodel->Index(),true);
    }
}