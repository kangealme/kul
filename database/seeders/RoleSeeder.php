<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $roles = [
            [
                'name' => 'admin',
                'desc' => 'administrator sistem'
            ],
            [
                'name' => 'verifikator',
                'desc' => 'verifikator sistem '
            ],
            [
                'name' => 'approval',
                'desc' => 'approval sistem '
            ],
            [
                'name' => 'operator',
                'desc' => 'operator sistem '
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
