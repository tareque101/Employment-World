<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //this method will show the homepage
    public function index(){

        return view('front.home');
       
    }
}
