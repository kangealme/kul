<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menus = [
            [
                'name' => 'Dashboard',
                'desc' => 'Menu Dashboard untuk admin'
            ],
            [
                'name' => 'Pengguna',
                'desc' => 'Menu Pengguna untuk admin'
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
