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
            'name' => $this->faker->word(),
        ];
    }
}
