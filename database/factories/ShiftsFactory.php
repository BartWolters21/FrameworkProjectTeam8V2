<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shifts>
 */
class ShiftsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'shift'=>$this->faker->name(),
            'output_metres'=>$this->faker->randomNumber(8, 7000),
            'output_tones'=>$this->faker->numberBetween(10, 700),
            'availability'=>$this->faker->numberBetween(10, 100),
            'performance'=>$this->faker->numberBetween(10, 100),
            'quality'=>$this->faker->numberBetween(10, 100),
        ];
    }
}
