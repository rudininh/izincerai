<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;





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
         "title" => "Home",
         "active" => "home"

    ]);
   
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Rudini",
        "email" => "rudiin.norhabibi@gmail.com",
        "img" => "img/suami.jpg"
    ]);
});

Route::get('/posts', [PostsController::class, 'index']);


Route::get('/posts/{post:slug}', [PostsController::class, 'show']);

Route::get('/categories', function(){
return view('categories',[
    'title' => 'Post Categories',
    'active' => 'categories',
    'categories' => Category::all()
]);

});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);
