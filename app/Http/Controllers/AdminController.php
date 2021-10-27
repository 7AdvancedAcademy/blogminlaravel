<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function welcome()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.welcome', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $post = new Post();
        $post->title = $request->title;
        if ($request->hasFile('cover')) {

            $file = $request->file('cover');
            $name = str_replace($file->getClientOriginalName(), ' ', '_');
            $fs_name = $name . time() . "." . $file->extension();

            $file->move(public_path('uploads/posts/'), $fs_name);

            $post->img = $fs_name;
        }
        $post->content = $request->content;
        $post->save();

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.welcome', ['posts' => $posts]);
    }
}
