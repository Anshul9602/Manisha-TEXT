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
    
        public function annual_report(){
            echo view('header'); 
            echo view('annual_report');
            echo view('footer');   
        }    
        public function annual_return(){
            echo view('header'); 
            echo view('annual_return');
            echo view('footer');   
        }    
     
     
}
