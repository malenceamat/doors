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
            'stats_names' => 'Высота'
        ]);

        StatsName::create([
            'stats_names' => 'Ширина'
        ]);

        StatsName::create([
            'stats_names' => 'Толщина'
        ]);

        StatsName::create([
            'stats_names' => 'Материал'
        ]);

        StatsName::create([
            'stats_names' => 'Направление_открывания'
        ]);
    }
}
