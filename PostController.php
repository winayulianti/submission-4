<?php

namespace App\Http\Controllers;

use App\Models\Post; //load Post model

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('post'));
    }
}
