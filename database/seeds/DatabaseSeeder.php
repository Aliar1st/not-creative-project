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

        \App\Product::create([
            'id' => 4,
            'name' => 'Крышка',
            'properties' => '...'
        ]);

        \App\Product::create([
            'id' => 5,
            'name' => 'Корпус',
            'properties' => '...'
        ]);

        \App\Product::create([
            'id' => 3,
            'name' => 'Наклейка',
            'properties' => '...'
        ]);

        \App\Part::create([
            'id' => 1,
            'number' => 1,
            'parent_product_id' => 1,
            'child_product_id' => 3,
        ]);

        \App\Part::create([
            'id' => 2,
            'number' => 2,
            'parent_product_id' => 1,
            'child_product_id' => 4,
        ]);

        \App\Part::create([
            'id' => 3,
            'number' => 3,
            'parent_product_id' => 1,
            'child_product_id' => 5,
        ]);

        \App\PersonProduct::create([
            'id' => 1,
            'user_id' => 1,
            'product_id' => 1
        ]);
    }
}
