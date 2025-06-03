<?php

namespace App\Controllers;

class Esteemed extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('esteemed');
        echo view('footer');
    }
}
