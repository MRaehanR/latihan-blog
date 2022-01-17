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
            'title' => $this->faker->sentence(mt_rand(3, 10)),
            'excerpt' => $this->faker->paragraph(mt_rand(10, 15)),
            'body' => $this->faker->paragraph(mt_rand(3, 100)),
            'slug' => $this->faker->unique()->slug,
            'author' => $this->faker->name,    
            'category_id' => $this->faker->numberBetween(1, 10),  
            'user_id' => $this->faker->numberBetween(1, 10),  
        ];
    }
}
