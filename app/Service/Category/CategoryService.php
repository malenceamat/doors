<?php

namespace App\Service\Category;

use App\Models\Category;

class CategoryService
{

    public function getCategories()
    {
        return Category::with('parent', 'items')->get();
    }
    public function getCurrentCategory(string $name): ?Category
    {
        return Category::with('sub_category', 'items')->where('name', $name)->first();
    }
}
