<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->paginate('6');
        return view('blog.posts')->with('posts', $posts);
    }

    public function show($id){
        $post = Post::find($id);
        return view('blog.post_view')->with('post', $post);
    }
}
