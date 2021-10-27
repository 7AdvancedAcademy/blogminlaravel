<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view('welcome', ['posts' => $posts]);
    }

    public function article($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('article', ['post' => $post]);
    }
}
