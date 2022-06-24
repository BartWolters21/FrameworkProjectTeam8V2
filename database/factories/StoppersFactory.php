<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stoppers>
 */
class StoppersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->words(3, true),
            'duration' => $this->faker->numberBetween(0, 10). 'u' . $this->faker->numberBetween(0, 10). 'm',
            'frequency' => $this->faker->randomNumber(),
            'average' => $this->faker->numberBetween(0, 10). 'u' . $this->faker->numberBetween(0, 10). 'm',
            'comments' => $this->faker->text(400)
        ];
    }
}
