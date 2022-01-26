<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
         "title" => "Home"
    ]);
   
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rudini",
        "email" => "rudiin.norhabibi@gmail.com",
        "img" => "img/suami.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Rudini",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dicta soluta quidem consequatur at delectus commodi omnis impedit et culpa nulla sunt excepturi necessitatibus unde, facilis aliquid, sed exercitationem? Animi!"
    ],
    [
        "title" => "Judul Post Keduas",
        "slug" => "judul-post-kedua",
        "author" => "Nor",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aperiam officiis modi deleniti velit? Eaque consequuntur quae culpa architecto numquam voluptas ab voluptates at quasi quidem nemo velit officia animi aliquam, laboriosam magni quos doloremque eligendi distinctio consequatur neque deleniti enim? Culpa eveniet reiciendis voluptates, quidem ipsum maiores doloremque velit nemo necessitatibus. Consectetur at praesentium excepturi sapiente qui suscipit dicta nobis, est in. Facere, quis voluptatum. Qui vero eum aliquam aperiam, nobis officia aliquid asperiores corporis voluptatum nulla nihil expedita odit ab harum vel possimus illum, enim sequi similique quae! Illo sit dolores id minus veniam animi, inventore provident quo.",
    ]
    ];

    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('posts}', function () {

    return view('post', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);

});


Route::get('posts/{slug}', function($slug) {

   $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Rudini",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dicta soluta quidem consequatur at delectus commodi omnis impedit et culpa nulla sunt excepturi necessitatibus unde, facilis aliquid, sed exercitationem? Animi!"
    ],
    [
        "title" => "Judul Post Keduas",
        "slug" => "judul-post-kedua",
        "author" => "Nor",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aperiam officiis modi deleniti velit? Eaque consequuntur quae culpa architecto numquam voluptas ab voluptates at quasi quidem nemo velit officia animi aliquam, laboriosam magni quos doloremque eligendi distinctio consequatur neque deleniti enim? Culpa eveniet reiciendis voluptates, quidem ipsum maiores doloremque velit nemo necessitatibus. Consectetur at praesentium excepturi sapiente qui suscipit dicta nobis, est in. Facere, quis voluptatum. Qui vero eum aliquam aperiam, nobis officia aliquid asperiores corporis voluptatum nulla nihil expedita odit ab harum vel possimus illum, enim sequi similique quae! Illo sit dolores id minus veniam animi, inventore provident quo.",
    ]
    ];

        
    $new_post=[];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);

});
