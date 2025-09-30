<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('index');
        echo view('footer');
    }

    public function annual_report()
    {
        echo view('header');
        echo view('annual_report');
        echo view('footer');
    }
    public function annual_return()
    {
        echo view('header');
        echo view('annual_return');
        echo view('footer');
    }

    public function corporate(){
        echo view('header');    
        echo view('cor');
        echo view('footer');
    }
    public function Stock_exchange(){
        echo view('header');    
        echo view('stock');
        echo view('footer');
    }
    public function Company(){
        echo view('header');    
        echo view('company');
        echo view('footer');
    }

}
