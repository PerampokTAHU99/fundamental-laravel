<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

use function Laravel\Prompts\search;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in '.$category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = ' by '.$author->name;
        }
        return view('posts',[
            "title" => "All Posts" .$title,
            "active" => "blog",
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)
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
