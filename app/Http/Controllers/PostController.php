<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function Laravel\Prompts\search;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title" => "All Posts",
            "active" => "blog",
            "posts" => Post::latest()->filter(request(['search','category','users']))->get()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
