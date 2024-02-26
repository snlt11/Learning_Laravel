<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => $this->faker->unique()->numberBetween($min = 1, $max = 10),
            "address" => $this->faker->address,
            "avatar" => $this->faker->url,
            "is_active" => $this->faker->boolean()
        ];
    }
}
