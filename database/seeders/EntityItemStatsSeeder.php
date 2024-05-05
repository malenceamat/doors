<?php

namespace Database\Seeders;

use App\Models\EntityItem;
use App\Models\ItemsStats;
use Illuminate\Database\Seeder;

class EntityItemStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entityItems = EntityItem::all();

        foreach ($entityItems as $entityItem) {
            // Определяем количество записей для каждого entityItem
            $numStats = rand(3, 10); // Случайное число от 3 до 10

            for ($i = 0; $i < $numStats; $i++) {
                ItemsStats::factory()->create([
                    'entity_item_id' => $entityItem->id,
                ]);
            }
        }
    }
}
