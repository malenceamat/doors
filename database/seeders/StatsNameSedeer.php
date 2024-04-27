<?php

namespace Database\Seeders;

use App\Models\StatsName;
use Illuminate\Database\Seeder;

class StatsNameSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatsName::factory()->createName();
    }
}
