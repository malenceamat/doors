<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Items;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Входные двери',
            'id_1c' => '84394900',
            'parent_id' => null
        ]);

        Category::create([
            'name' => 'Межкомнатные двери',
            'id_1c' => '84394912',
            'parent_id' => null
        ]);

        Category::create([
            'name' => 'Дверные коробки, наличники и доборы',
            'id_1c' => '84394934',
            'parent_id' => null
        ]);

        Category::create([
            'name' => 'Прочее',
            'id_1c' => '84394965',
            'parent_id' => null
        ]);

        Category::create([
            'name' => 'Для квартиры',
            'id_1c' => '84394901',
            'parent_id' => 1
        ]);

        Category::create([
            'name' => 'Для дома',
            'id_1c' => '84394902',
            'parent_id' => 1
        ]);

        Category::create([
            'name' => 'Технические',
            'id_1c' => '84394903',
            'parent_id' => 1
        ]);

        Category::create([
            'name' => 'Металлические',
            'id_1c' => '84394904',
            'parent_id' => 1
        ]);

        Category::create([
            'name' => 'Деревянные',
            'id_1c' => '84394905',
            'parent_id' => 1
        ]);

        Category::create([
            'name' => 'Из массива',
            'id_1c' => '84394906',
            'parent_id' => 2
        ]);

        Category::create([
            'name' => 'Шпонированные',
            'id_1c' => '84394907',
            'parent_id' => 2
        ]);

        Category::create([
            'name' => 'Для ванной',
            'id_1c' => '84394908',
            'parent_id' => 2
        ]);

        Category::create([
            'name' => 'Двери со стеклами',
            'id_1c' => '84394909',
            'parent_id' => 2
        ]);

        Category::create([
            'name' => 'Дверные коробки',
            'id_1c' => '84394910',
            'parent_id' => 3
        ]);

        Category::create([
            'name' => 'Наличники дверные',
            'id_1c' => '84394911',
            'parent_id' => 3
        ]);

        Category::create([
            'name' => 'Доборы',
            'id_1c' => '84394913',
            'parent_id' => 3
        ]);
    }
}
