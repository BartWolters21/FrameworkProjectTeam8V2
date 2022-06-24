<?php

namespace Database\Seeders;

use App\Models\Stoppers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoppersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stoppers::factory()
            ->count(60)
            ->create();
    }
}
