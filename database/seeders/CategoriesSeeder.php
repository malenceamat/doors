<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::factory(5)->create();

        Category::factory()->count(5)->create()->each(function ($category) {
            $category->parent()->associate(Category::inRandomOrder()->first());
            $category->save();
        });
    }
}
