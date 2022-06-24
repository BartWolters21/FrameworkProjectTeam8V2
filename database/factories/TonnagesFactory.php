<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tonnages>
 */
class TonnagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=>$this->faker->asciify('*'),
            'code'=>$this->faker->bothify('###??#'),
            'output_metres'=>$this->faker->numberBetween(100, 7000),
            'output_tones'=>$this->faker->numberBetween(10, 700),
        ];
    }
}
