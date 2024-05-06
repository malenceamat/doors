<?php

namespace Database\Seeders;

use App\Models\EntityItem;
use App\Models\StatsName;
use App\Models\StatsValue;
use Illuminate\Database\Seeder;

class ItemsStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entity = EntityItem::all();
        $stats_name = StatsName::all();

        $entity->each(function ($entityItem) use ($stats_name) {
            // Для каждого stat_name создаем запись в items_stats
            foreach ($stats_name as $statName) {
                $stats_value = StatsValue::inRandomOrder()->first();
                $entityItem->items_stats()->create([
                    'stats_name_id' => $statName->id,
                    'stats_value_id' => $stats_value->id
                ]);
            }
        });
    }
}
