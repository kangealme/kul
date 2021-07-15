<?php

namespace Database\Seeders;

use App\Models\Submenu_User;
use Illuminate\Database\Seeder;

class SubmenuUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $submenu_users = [
            [
                'menu_id' => '1',
                'submenu_id' => '1',
                'user_id' => '1',
                'desc' => 'user 1 admin dengan menu 1 dashboard dan sub menu 1 dasboard 1',
            ],
            [
                'menu_id' => '1',
                'submenu_id' => '2',
                'user_id' => '1',
                'desc' => 'user 1 admin dengan menu 1 dashboard dan sub menu 1 dasboard 2',
            ],
            [
                'menu_id' => '2',
                'submenu_id' => '1',
                'user_id' => '1',
                'desc' => 'user 1 admin dengan menu 2 Pengguna dan sub menu 1 Tambah Pengguna',
            ],
            [
                'menu_id' => '2',
                'submenu_id' => '2',
                'user_id' => '1',
                'desc' => 'user 1 admin dengan menu 2 Pengguna dan sub menu 2 Daftar Pengguna',
            ],
        ];

        foreach ($submenu_users as $submenu_user) {
            Submenu_User::create($submenu_user);
        }
    }
}
