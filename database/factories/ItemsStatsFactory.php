<?php

namespace Database\Factories;

use App\Models\StatsName;
use App\Models\StatsValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemsStatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stats_name_id' => StatsName::factory(),
            'stats_value_id' => StatsValue::factory()
        ];
    }
}
