<?php

namespace App\Controllers;

class Design extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('design');
        echo view('footer');
    }
}
