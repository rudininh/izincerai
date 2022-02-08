<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;




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

Route::get('/posts', [PostsController::class, 'index']);


Route::get('posts/{post:slug}', [PostsController::class, 'show']);
