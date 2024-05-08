<?php

namespace Database\Factories;

use App\Models\StatsValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatsValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = StatsValue::class;

    public function definition()
    {
        static $order = 0;

        $types = [
            'price' => $this->faker->numberBetween(500,5000),
            'price_dealer' => $this->faker->numberBetween(500,5000),
            'image' => $this->faker->imageUrl(),
            'height' => $this->faker->numberBetween(100,300),
            'width' => $this->faker->numberBetween(50,200),
            'thickness' => $this->faker->numberBetween(500,250),
            'compound' => $this->faker->word(),
            'opening_direction' => $this->faker->word()
        ];

        $type = array_keys($types)[$order++ % count($types)];
        $value = $types[$type];

        return [
            'value' => $value
        ];
    }
}
