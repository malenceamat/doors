<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
           'address' => 'г. Москва, ул. Калужская, 80, офис 315',
           'number' => '+7 (123) 444-55-66',
           'email' => 'info@sitename.com',
           'work_time' => 'Пн - Пт: c 8.00 - 19.00 Сб - Вс: c 9.00 - 15.00',
        ]);
    }
}
