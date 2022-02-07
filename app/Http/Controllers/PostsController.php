<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
        ]);
    }

    public function show($id)
    {
        return view('post', [
        "title" => "Single Post",
        "post" => Post::find($id)
        ]);
    }
}
