<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\EntityItem;
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
            'price' => $this->faker->numberBetween(500,5000),
            'image' => $this->faker->imageUrl(),
            'is_popular' => $this->faker->numberBetween(0,1),
            'is_stock' => $this->faker->numberBetween(0,1),
            'is_new_items' => $this->faker->numberBetween(0,1),
            'is_active' => $this->faker->numberBetween(0,1),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Items $item) {
            $numEntityItems = $this->faker->randomElement([1, rand(2, 5)]); // 1 или случайное число от 2 до 5
            EntityItem::factory()->count($numEntityItems)->create(['item_id' => $item->id]);
        });
    }

}
