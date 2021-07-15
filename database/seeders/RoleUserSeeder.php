<?php

namespace Database\Seeders;

use App\Models\Role_User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role_users = [
            [
                'role_id' => '1',
                'user_id' => '1',
                'desc' => 'user 1 admin dengan role admin',
            ],
            [
                'role_id' => '2',
                'user_id' => '2',
                'desc' => 'user 2  dengan role approval',
            ],
            [
                'role_id' => '3',
                'user_id' => '3',
                'desc' => 'user 3  dengan role validator',
            ],
            [
                'role_id' => '4',
                'user_id' => '4',
                'desc' => 'user 4  dengan role operator',
            ],
        ];

        foreach ($role_users as $role_user) {
            Role_User::create($role_user);
        }
    }
}
