<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@zmfood.eu',
            'password' => bcrypt('zmfoodeu'),
            'role_id' => '1'
        ]);

        User::create([
            'name' => 'Manager',
            'email' => 'manager@zmfood.eu',
            'password' => bcrypt('zmfoodmanager'),
            'role_id' => '2'
        ]);
    }
}
