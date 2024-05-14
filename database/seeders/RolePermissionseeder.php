<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ownerRole = Role::create([
            'name' => 'owner',
        ]);

        $buyerRole = Role::create([
            'name' => 'buyer',
        ]);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        $user = User::create([
            'name' => 'super',
            'email' => 'super@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'superadmin',
        ]);



        $user->assignRole($ownerRole);
    }
}
