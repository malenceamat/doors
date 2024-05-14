<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Items;
use Illuminate\Database\Seeder;
use function Symfony\Component\Translation\t;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Items::create([
            'name' => 'Дверь входная металлическая Стройгост',
            'category_id' => 5,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь входная металлическая Isoterma',
            'category_id' => 6,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь входная металлическая',
            'category_id' => 7,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь входная металлическая Плющ',
            'category_id' => 8,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Входная дверь с коробом',
            'category_id' => 9,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь межкомнатная остеклённая Ницца',
            'category_id' => 10,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь межкомнатная Helli1',
            'category_id' => 10,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь межкомнатная Helli2',
            'category_id' => 11,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь межкомнатная Дюплекс1',
            'category_id' => 12,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Комплект дверной коробки',
            'category_id' => 14,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Комплект наличников Artens',
            'category_id' => 15,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Добор дверной коробки Дэлия',
            'category_id' => 16,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь балкон',
            'category_id' => 4,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь для сауны, 69х189 см, цвет матовая бронза',
            'category_id' => 4,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Арка Artens «Стелла» цвет венге',
            'category_id' => 4,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Дверь ПВХ Стиль 84x205 см, цвет состаренный дуб',
            'category_id' => 4,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Комплект фурнитуры Artens TWINS 240',
            'category_id' => 4,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);

        Items::create([
            'name' => 'Козырёк K1, 1200x950 мм',
            'category_id' => 4,
            'id_1c' => '1',
            'description' => 'Описание',
            'is_popular' => true,
            'is_stock' => true,
            'is_new_items' => true,
            'is_active' => true
        ]);
    }
}
