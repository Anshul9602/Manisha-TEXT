<?php

namespace App\Controllers;

class Ferrous extends BaseController
{
    public function index()
    {
        return view('header')
        . view('ferrous')
        . view('footer');   
     }
}
