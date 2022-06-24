<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Maintenance',
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'duration' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
