<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            CategoriesSeeder::class,
            StatsValueSeeder::class,
            StatsNameSeeder::class,
            ItemsSeeder::class,
            EntityItemSeeder::class,
            ItemsStatsSeeder::class,
            ItemsStatsSeeder::class,
            PayDeliverySeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            NewsSeeder::class
        ]);
    }
}
