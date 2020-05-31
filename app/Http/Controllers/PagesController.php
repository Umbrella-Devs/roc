<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

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
        return view('join');
    }
    public function donate(){
        return view('donate');
    }

    public function gallery(){
        $images = Gallery::orderBy('created_at', 'desc')->paginate('18');
        return view('gallery')->with('images', $images);
    }


}
