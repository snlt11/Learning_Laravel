<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->text,
            'longText'=>$this->faker->paragraph,
            'price'=>$this->faker->rand(100,2000),
            'status'=>$this->faker->boolean
        ];
    }
}
