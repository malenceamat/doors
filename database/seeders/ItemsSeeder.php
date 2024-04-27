<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Items;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            Items::factory(5)->create([
                'category_id' => $category->id, // Используем ID существующей категории
            ]);
        }

        Items::factory()->configure();
    }
}
