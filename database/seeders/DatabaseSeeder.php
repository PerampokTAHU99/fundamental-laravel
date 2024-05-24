<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //    'name' => 'Theo Fahrizal Syam',
        //    'email' => 'theofahrizals@gmail.com',
        //    'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();
        
        Category::create([
           'name' => 'Personal',
           'slug' => 'personal'
        ]);

        Category::create([
           'name' => 'Web Programming',
           'slug' => 'web-programming'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint porro pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint porro recusandae rerum perspiciatis nesciunt officiis enim dignissimos quae? Iusto nostrum a fugiat, obcaecati eum incidunt esse minima enim similique. Atque veritatis impedit, ipsum omnis dolorum facilis ex aliquam aut harum nulla quo! Ab sit sed, vitae ducimus quam iste molestiae!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur libero atque, voluptate soluta voluptatem quidem eos exercitationem optio ducimus. Earum eveniet quas accusamus nesciunt eos ea doloremque alias aliquid, minima repellat, distinctio at. Voluptates tempora illum, repudiandae fugit quae iure provident esse temporibus id laborum minus hic vitae fuga possimus quasi voluptatibus amet exercitationem nobis voluptate eum excepturi, saepe delectus labore assumenda. Omnis animi, recusandae sunt tempora voluptate accusamus consectetur debitis maxime unde, doloremque delectus, quasi facere. At molestias quas numquam enim delectus, quam dolore quia magnam sint minima esse earum repudiandae eveniet qui repellendus reiciendis nesciunt. A quod magni maxime iusto enim, excepturi vel quo amet eos. Culpa earum distinctio voluptatibus delectus quaerat quis eius enim optio atque ipsam officia doloribus modi repudiandae fuga magni, quibusdam cumque eos hic labore ipsum non, ratione quos numquam eaque. Minima ratione aut nobis ullam iste, ipsum facilis sint eum placeat, impedit nostrum?</p>'
        // ]);

    }
}
