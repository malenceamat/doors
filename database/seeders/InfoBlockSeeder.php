<?php

namespace Database\Seeders;

use App\Models\InfoBlock;
use Illuminate\Database\Seeder;

class InfoBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InfoBlock::create([
            'image' => 'image/1info.svg',
            'title' => 'Бесплатная доставка',
            'subtitle' => 'При заказе от 3000 ₽'
        ]);

        InfoBlock::create([
            'image' => 'image/2info.svg',
            'title' => 'Бесплатный возврат',
            'subtitle' => 'В течение 30 дней'
        ]);

        InfoBlock::create([
            'image' => 'image/3info.svg',
            'title' => '100% Безопасная Оплата',
            'subtitle' => 'Ваши платежи в безопасности'
        ]);

        InfoBlock::create([
            'image' => 'image/4info.svg',
            'title' => 'Техподдержка 24/7',
            'subtitle' => 'Мы на связи 24 часа в сутки'
        ]);
    }
}
