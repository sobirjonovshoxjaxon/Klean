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
        return [
            
            'title' => fake()->sentence(),
            'image' => 'post-photos/spark.jpg',
            'short_content' => fake()->sentence(15),
            'content' => fake()->paragraphs(15,true),
            'user_id' => 1,
            'category_id' => rand(1,5),
        ];
    }
}
