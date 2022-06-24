<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ShiftsSeeder::class,
            TonnagesSeeder::class,
            CalendarSeeder::class,
            StoppersSeeder::class,
            RecordSeeder::class,
            GraphSeeder::class,
        ]);
    }
}
