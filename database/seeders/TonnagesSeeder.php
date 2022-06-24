<?php

namespace Database\Seeders;

use App\Models\Tonnages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TonnagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tonnages::factory()
            ->count(7)
            ->create();
    }
}
