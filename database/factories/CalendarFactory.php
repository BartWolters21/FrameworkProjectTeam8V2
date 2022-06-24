<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendar>
 */
class CalendarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'day' => $this->faker->numberBetween(1, 31),
            'month' => $this->faker->numberBetween(1, 12),
            'type' => $this->faker->slug(1),
            'information' => $this->faker->text(200),
            'time' => $this->faker->time('H:i:s', 'now')
        ];
    }
}
