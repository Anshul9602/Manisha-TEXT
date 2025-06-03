<?php

namespace App\Controllers;

class Green extends BaseController
{
    public function index()
    {
        return view('header')
        . view('green')
        . view('footer');   
     }
}