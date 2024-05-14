<?php

namespace Database\Seeders;

use App\Models\StatsName;
use Illuminate\Database\Seeder;

class StatsNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatsName::create([
            'stats_names' => 'price'
        ]);

        StatsName::create([
            'stats_names' => 'price_dealer'
        ]);

        StatsName::create([
            'stats_names' => 'image'
        ]);

        StatsName::create([
            'stats_names' => 'image_path'
        ]);

        StatsName::create([
            'stats_names' => 'height'
        ]);

        StatsName::create([
            'stats_names' => 'width'
        ]);

        StatsName::create([
            'stats_names' => 'thickness'
        ]);

        StatsName::create([
            'stats_names' => 'compound'
        ]);

        StatsName::create([
            'stats_names' => 'opening_direction'
        ]);
    }
}
