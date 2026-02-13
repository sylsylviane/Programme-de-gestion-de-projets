<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionsSeeder extends Seeder
{
    /**
     * Exécuter les seeders pour les rôles et les permissions.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'view-projects']);
        Permission::create(['name' => 'create-projects']);
        Permission::create(['name' => 'edit-projects']);
        Permission::create(['name' => 'delete-projects']);

        $adminRole = Role::create(['name' => 'admin']);
        $employeeRole = Role::create(['name' => 'employee']);

        $adminRole->givePermissionTo(Permission::all());
        $employeeRole->givePermissionTo(['view-projects', 'create-projects', 'edit-projects']);
    }
}
