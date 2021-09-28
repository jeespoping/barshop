<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
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
        User::truncate();
        Product::truncate();

        User::create([
            'name' => 'admin@gmail.com',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10)
        ]);

        Product::create([
           'name' => 'Aguila Original',
           'description' => 'Con un porcentaje de alcohol de 4,7 %, la negra es una cerveza amable, de cuerpo ligero y un color de intensidad media',
            'price' => 2500
        ]);
    }
}
