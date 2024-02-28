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
            'title' => $this->faker->lastName,
            'user_id' => random_int($min = 1, $max = 10),
            'content' => $this->faker->text,
            'likes' => $this->faker->numberBetween($min = 10, $max = 100),
        ];
    }
}
