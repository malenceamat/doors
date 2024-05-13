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
        $entities = EntityItem::all();
        $stats_names = StatsName::all();
        $stats_values = StatsValue::all();

        foreach ($entities as $entity) {
            // Счетчик для перебора stats_values
            $valueIndex = 0;

            foreach ($stats_names as $stat_name) {
                // Получаем stats_value по индексу
                $stats_value = $stats_values[$valueIndex];

                $entity->items_stats()->create([
                    'stats_name_id' => $stat_name->id,
                    'stats_value_id' => $stats_value->id
                ]);

                // Увеличиваем счетчик и сбрасываем его при достижении конца
                $valueIndex++;
                if ($valueIndex >= count($stats_values)) {
                    $valueIndex = 0;
                }
            }
        }
    }
}
