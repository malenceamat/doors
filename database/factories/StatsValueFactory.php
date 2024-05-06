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
            'price' => $this->faker->randomNumber(),
            'height' => $this->faker->randomNumber(),
            'width' => $this->faker->randomNumber(),
            'thickness' => $this->faker->randomNumber(),
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
