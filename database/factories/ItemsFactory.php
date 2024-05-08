<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Items::class;
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => Category::factory(),
            'id_1c' => $this->faker->numberBetween(1,10),
            'description' => $this->faker->text(),
            'is_popular' => $this->faker->numberBetween(0,1),
            'is_stock' => $this->faker->numberBetween(0,1),
            'is_new_items' => $this->faker->numberBetween(0,1),
            'is_active' => $this->faker->numberBetween(0,1),
        ];
    }
}
