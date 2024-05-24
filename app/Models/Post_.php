<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    static $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Theo Fahrizal Syam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quaerat dicta sapiente tempore distinctio minus provident blanditiis perspiciatis sint assumenda quasi ullam laborum, quos amet pariatur iure fugiat alias repellat eius dolor. Voluptatem asperiores facere, incidunt corporis explicabo eos soluta molestias accusantium dicta alias fuga rerum. Beatae eos totam modi sequi quia eligendi. Et excepturi recusandae, dolores, sit consequatur architecto soluta quod provident tempora alias temporibus, cumque dignissimos doloremque culpa dicta! Voluptate amet esse impedit at magnam itaque ea eos."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Taufik Ismail",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aliquid a possimus suscipit ut id voluptatem, harum quis neque cum consequuntur voluptatibus odio labore adipisci porro, distinctio officia quod consequatur, tenetur dolorem deleniti fugiat ad? Obcaecati et temporibus totam harum quam aut minus magni laboriosam nemo, quo accusamus eos impedit ipsum repellat, provident atque delectus ab dolorum. Exercitationem ut error neque mollitia quas repudiandae necessitatibus at fuga porro deleniti, repellendus ea, temporibus cumque numquam!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
