<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts', [
        "title" => "All Posts",
        "active" => "posts",
        // "posts" => Post::all()
        "posts" => Post::latest()->get()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
        "title" => "Single Post",
        "active" => "posts",
        "post" => $post
        ]);
    }
}
