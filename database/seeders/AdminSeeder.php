<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('p1uwekl864'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'administrator@example.com',
            'password' => bcrypt('rqlqnool52'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('d6ax7p434p'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'administrator@gmail.com',
            'password' => bcrypt('eik4nr1maw'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'new_admin@example.com',
            'password' => bcrypt('7wnckrtgu4'),
            'role' => 'admin'
        ]);
    }
}
