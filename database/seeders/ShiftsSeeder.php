<?php

namespace Database\Seeders;

use App\Models\Shifts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shifts = [
            [
                'shift' => 'Morning'

            ],
            [
                'shift' => 'Afternoon'
            ],
            [
                'shift' => 'Night'
            ]
        ];

        foreach ($shifts as $shift) {
            Shifts::create($shift);
        }
    }
}
