<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 8)),
            'slug' => $this->faker->slug(),
            'category_id' => mt_rand(1, 4),
            'author_id' => mt_rand(1, 10),
            'excerpt' => $this->faker->paragraph(),
            //'body' => "<p>" . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . "</p>"
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>{$p}</p>")
                ->implode(''),
        ];
    }
}
