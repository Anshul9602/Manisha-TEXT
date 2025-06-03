<?php

namespace App\Controllers;

class Ourstory extends BaseController
{
    public function index()
    {
        return view('header')
        . view('ourstory')
        . view('footer');   
     }
}