<?php

namespace App\Controllers;

class Blog1 extends BaseController
{
    public function index()
    {
        return view('header')
        . view('blog-s')
        . view('footer');   
     }
}