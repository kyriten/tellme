<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions User
        $createUser = Permission::create(['name' => 'create-user']);
        $editUser = Permission::create(['name' => 'edit-user']);
        $deleteUser = Permission::create(['name' => 'delete-user']);

        // Find role admin
        $findAdmin = Role::findByName('admin');

        // Give permission to role admin
        $findAdmin->givePermissionTo($editUser);
    }
}
