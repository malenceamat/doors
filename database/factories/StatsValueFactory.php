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
        return [
            'name' => $this->faker->word(),
        ];
    }
}
