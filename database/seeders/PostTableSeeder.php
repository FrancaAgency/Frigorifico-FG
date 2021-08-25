<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        foreach ($categories as $key => $c) 
        {
            for ($i=1; $i <=20 ; $i++) 
            { 
                Post::create
                ([
                    'title' => "Post $i $key",
                    'url_clean' => "post-$i-$key",
                    'content' => "Introduction Laravel provides a variety of helpful tools and assertions to make it easier to test your database driven applications. In addition, Laravel model factories and seeders make it painless to create test database records using your application's Eloquent models and relationships. We'll discuss all of these powerful features in the following documentation. Resetting The Database After Each Test Before proceeding much further, let's discuss how to reset your database after each of your tests so that data from a previous test does not interfere with subsequent tests. Laravel's included Illuminate\Foundation\Testing\RefreshDatabase trait will take care of this for you. Simply use the trait on your test class:",
                    'posted' => "yes",
                    'category_id' => $c->id,
                ]);
            }
        }
    }
}

