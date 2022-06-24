<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Graph>
 */
class GraphFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'availability' => $this->faker->numberBetween(0, 100),
            'performance' => $this->faker->numberBetween(0, 100),
            'quality' => $this->faker->numberBetween(0, 100),
            'OEE' => $this->faker->numberBetween(0, 100),
        ];
    }
}
