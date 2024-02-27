<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subject = ['PHP', 'Nodejs', 'Laravel'];
        return [
            'post_id' => $this->faker->numberBetween($min=1, $max=5),
            'subject' => $subject[random_int($min=0,$max=2)],
            'content' => $this->faker->text,
            'is_active' => $this->faker->boolean()
        ];
    }
}
