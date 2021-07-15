<?php

namespace Database\Seeders;

use App\Models\Menu_User;
use Illuminate\Database\Seeder;

class MenuUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\
        $menu_users = [
            [
                'menu_id' => '1',
                'user_id' => '1',
                'desc' => 'User 1 admin dengan menu dashboard',
            ],
            [
                'menu_id' => '2',
                'user_id' => '1',
                'desc' => 'User 1 admin dengan menu pengguna',
            ],
        ];

        foreach ($menu_users as $menu_user) {
            Menu_User::create($menu_user);
        }
    }
}
