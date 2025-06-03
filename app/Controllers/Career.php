<?php

namespace App\Controllers;

class Career extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('career');
        echo view('footer');
    }
}
