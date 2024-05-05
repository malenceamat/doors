<?php

namespace Database\Factories;

use App\Models\EntityItem;
use App\Models\Items;
use App\Models\ItemsStats;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntityItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = EntityItem::class;
    public function definition()
    {
        return [
            'item_id' => Items::factory()
        ];
    }
}
