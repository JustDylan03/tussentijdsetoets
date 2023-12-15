<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Maak 10 posts aan
        $posts = Post::factory(10)->create();

        // Voor elke post, voeg tussen 0 en 5 comments toe
        $posts->each(function ($post) {
            $numComments = rand(0, 5);
            \App\Models\Comment::factory($numComments)->create(['post_id' => $post->id]);
        });
    }
}

