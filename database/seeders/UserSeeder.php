<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            [
                'name' => 'Muhammad Bahrul Ilmi',
                'username' => 'kangealme',
                'email' => 'kangealme@gmail.com',
                'phone' => '081259484666',
                'address' => 'Jl. Abusono No. 41',
                'is_active' => '1',
                'photo' => 'kangealme.png',
                'password' => Hash::make('miracle85'),
            ],
            [
                'name' => 'Doddy Kuswosno',
                'username' => 'dodi',
                'email' => 'dodi@gmail.com',
                'phone' => '081',
                'address' => 'Bojonegoro',
                'is_active' => '1',
                'photo' => 'default.png',
                'password' => Hash::make('miracle85'),
            ],
            [
                'name' => 'Friez Sando Winanrno Ivan',
                'username' => 'friez',
                'email' => 'friez@gmail.com',
                'phone' => '081',
                'address' => 'Nganjuk',
                'is_active' => '0',
                'photo' => 'default.png',
                'password' => Hash::make('miracle85'),
            ],
            [
                'name' => 'Canggih Satriatama',
                'username' => 'canggih',
                'email' => 'canggih@gmail.com',
                'phone' => '081',
                'address' => 'Kediri',
                'is_active' => '0',
                'photo' => 'default.png',
                'password' => Hash::make('miracle85'),
            ],
            [
                'name' => 'Muhammad qoyyim Faddly',
                'username' => 'qoyyim',
                'email' => 'qoyyim@gmail.com',
                'phone' => '081',
                'address' => 'Nganjuk',
                'is_active' => '1',
                'photo' => 'default.png',
                'password' => Hash::make('miracle85'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
