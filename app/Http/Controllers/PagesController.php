<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }
        
    public function projects(){
        return view('projects');
    }
    public function about_us(){
        return view('about_us');
    }
    public function home(){
        return view('home');
    }
    public function blog(){
        return view('blog');
    }
    public function activities(){
        return view('activities');
    }
    public function join_us(){
        return view('projects');
    }
    public function donate(){
        return view('donate');
    }


}