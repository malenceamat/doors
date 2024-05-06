<?php

namespace Database\Seeders;

use App\Models\EntityItem;
use App\Models\Items;
use Illuminate\Database\Seeder;

class EntityItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Items::all();

        // Для каждого товара создаем от 1 до 5 вариантов (entity_items)
        $items->each(function ($item) {
            $item->entity()->saveMany(
                EntityItem::factory(rand(1, 5))->make()
            );
        });
    }
}
