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
       $create = Category::factory(4)->create();

        Category::factory()->count(4)->create()->each(function ($category) use ($create) {
            $category->parent()->associate($create->random());
            $category->save();
        });
    }
}
