<?php

namespace Database\Seeders;

use App\Models\Partners;
use Illuminate\Database\Seeder;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partners::create([
            'image' => 'image/brand1.jpg'
        ]);

        Partners::create([
            'image' => 'image/brand2.jpg'
        ]);

        Partners::create([
            'image' => 'image/brand3.jpg'
        ]);

        Partners::create([
            'image' => 'image/brand4.jpg'
        ]);

        Partners::create([
            'image' => 'image/brand5.jpg'
        ]);

        Partners::create([
            'image' => 'image/brand6.jpg'
        ]);

        Partners::create([
            'image' => 'image/brand7.jpg'
        ]);
    }
}
