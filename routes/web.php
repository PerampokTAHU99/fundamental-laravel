<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Theo Fahrizal Syam",
        "email" => "theofahrizals@gmail.com",
        "image" => "me.jpg",
        'active' => 'about',

    ]);
});


Route::get('/blog', [PostController::class,'index']);

//pages single post
Route::get('posts/{post:slug}', [PostController::class,'show']);

//categories 
Route::get('/categories', function () {
    return  view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// //category by click
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category :  $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category','author')
//     ]);         
// });

// //user post by click
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author :  $author->name",
//         'active' => 'authors',
//         'posts' => $author->posts->load('category','author')
//     ]);         
// });



