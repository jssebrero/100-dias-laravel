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
        \App\Models\Post::factory(36)->create();

        //paginas
        \App\Models\Post::factory()->create(['titulo' => 'Example', 'slug' => 'example', 'tipo' => 'pagina']);
        \App\Models\Post::factory()->create(['titulo' => 'Feature', 'slug' => 'feature', 'tipo' => 'pagina']);
        \App\Models\Post::factory()->create(['titulo' => 'Overview', 'slug' => 'overview', 'tipo' => 'pagina']);
        \App\Models\Post::factory()->create(['titulo' => 'About', 'slug' => 'about', 'tipo' => 'pagina']);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
