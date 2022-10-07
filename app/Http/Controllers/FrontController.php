<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact');
    }
}
