<?php

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
        $admin = Role::create([
            'name' => 'admin',
            'permission' => [
                'create-customer' => true,
                'update-customer' => true,
            ]
        ]);
        $user = Role::create([
            'name' => 'User',
            'permission' => [
                'create-customer' => true,
            ]
        ]);
    }
}
