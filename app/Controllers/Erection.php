<?php

namespace App\Controllers;

class Erection extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('erection');
        echo view('footer');
    }
}
