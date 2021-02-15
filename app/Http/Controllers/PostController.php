<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }
}
