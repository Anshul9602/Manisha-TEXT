<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('header')
        . view('about')
        . view('footer');   
     }
}
