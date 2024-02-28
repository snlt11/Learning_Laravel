<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "country_id"=>random_int($min=1, $max=4),
            "email" => $this->faker->email,
            "phone" => $this->faker->e164PhoneNumber,
            "password" => $this->faker->password
        ];
    }
}
