<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = fake()->sentence();
        return [
            'titulo' => $titulo,
            'slug' => strtolower(
                str_replace(' ','-',$titulo)
            ),
            'cuerpo' => fake()->text(),
            //'tipo' => ['pagina','publicacion'] Asignado desde el seed
        ];
    }
}
