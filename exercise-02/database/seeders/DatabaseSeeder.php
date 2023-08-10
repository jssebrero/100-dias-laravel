<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // crear 40 usuarios
        \App\Models\User::factory(40)->hasProfile()->create();

        // crear 60 tags
        $tags = \App\Models\Tag::factory(60)->create();

        // crear 400 publicaciones
        \App\Models\Post::factory(400)
        ->hasComments(4) //Crear 4 comentarios
        ->create()
        ->each(function($post) use ($tags) {
            $post->tags()->attach($tags->random(rand(2,4)));
        });

        // crear 200 publicaciones
        \App\Models\Video::factory(200)
        ->hasComments(3) //Crear 4 comentarios
        ->create()
        ->each(function($video) use ($tags) {
            $video->tags()->attach($tags->random(rand(2,4)));
        });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
