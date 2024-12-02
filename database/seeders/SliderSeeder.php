<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title' => 'Интернет-магазин дверей',
            'subtitle' => 'Двери и не только',
            'image' => 'image/slider1.jpg',
            'button_text' => 'Просмотреть',
            'type' => 'multiple'
        ]);

        Slider::create([
            'title' => 'Интернет магазин',
            'subtitle' => 'Магазин дверей и не только',
            'image' => 'image/slider2.jpg',
            'button_text' => 'Узнать подробнее',
            'type' => 'multiple'
        ]);

        Slider::create([
            'title' => 'Онлайн магазин',
            'subtitle' => 'Покупать здесь',
            'image' => 'image/slider3.jpg',
            'button_text' => 'Купить',
            'type' => 'solo'
        ]);
    }
}
