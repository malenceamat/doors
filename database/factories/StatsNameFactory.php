<?php

namespace Database\Factories;

use App\Models\StatsName;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatsNameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = StatsName::class;
    public function definition()
    {

        return [

        ];
    }
    public function createName()
    {
        $availableNames = [
            'price',
            'height',
            'width',
            'thickness',
            'compound',
            'opening_direction',
        ];

        foreach ($availableNames as $name) {
            StatsName::create(['name' => $name]);
        }
    }
}
