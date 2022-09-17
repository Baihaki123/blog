<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post) // param pertama nama model, kedua variable post dari route binding 
    {
        return view('post', [
            "title" => "single post",
            "post" => $post
        ]);
    }
}
