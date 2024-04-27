<?php

namespace Database\Seeders;

use App\Models\StatsValue;
use Illuminate\Database\Seeder;

class StatsValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatsValue::factory()->createValue();
    }
}
