<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
