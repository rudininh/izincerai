<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostsController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' .  $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' .  $author->name;
        }
        return view('posts', [
        "title" => "All Posts" . $title,
        "active" => "posts",
        "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()

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
