<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::create([
            'id' => 1,
            'name' => 'Иван Иванов',
            'email' => 'ivan@mail.ru',
            'password' => md5('1234'),
            'api_token' => '1111'
        ]);

        \App\Product::create([
            'id' => 1,
            'name' => 'Бутылка',
            'properties' => '...'
        ]);

        \App\Product::create([
            'id' => 2,
            'name' => 'Гвоздь',
            'properties' => '...'
        ]);

        \App\Part::create([
            'id' => 1,
            'name' => 'Крышка',
            'number' => 1,
            'product_id' => 1
        ]);

        \App\Part::create([
            'id' => 2,
            'name' => 'Корпус',
            'number' => 2,
            'product_id' => 1
        ]);

        \App\Part::create([
            'id' => 3,
            'name' => 'Наклейка',
            'number' => 3,
            'product_id' => 1
        ]);

        \App\PersonProduct::create([
            'id' => 1,
            'user_id' => 1,
            'product_id' => 1
        ]);
    }
}
