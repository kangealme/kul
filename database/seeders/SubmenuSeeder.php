<?php

namespace Database\Seeders;

use App\Models\Submenu;
use Illuminate\Database\Seeder;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $submenus = [
            [
                'name' => 'Dashboard 1',
                'menu_id' => '1',
                'desc' => 'Menu Dashboard jenis dashboard 1',
            ],
            [
                'name' => 'Dashboard 2',
                'menu_id' => '1',
                'desc' => 'Menu Dashboard jenis dashboard 2',
            ],
            [
                'name' => 'Tambah Penguna',
                'menu_id' => '2',
                'desc' => 'Menu Tambah Pengguna',
            ],
            [
                'name' => 'Daftar Penguna',
                'menu_id' => '2',
                'desc' => 'Menu Daftar Pengguna',
            ],
        ];

        foreach ($submenus as $submenu) {
            Submenu::create($submenu);
        }
    }
}
