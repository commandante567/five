<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();

        User::create([
            'email' => 'egor.semenof@yandex.ru',
            'password' => Hash::make('admin'),
            'name' => 'Borskiy',
        ]);
    }
}