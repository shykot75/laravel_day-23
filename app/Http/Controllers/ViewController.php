<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function index(){
        return view('home');
    }

    public function bitm(){
        return view('bitm');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
