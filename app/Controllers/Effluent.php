<?php

namespace App\Controllers;

class Effluent extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('effluent');
        echo view('footer');
    }
}
