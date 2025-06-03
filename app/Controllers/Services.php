<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('services');
        echo view('footer');
    }
}
