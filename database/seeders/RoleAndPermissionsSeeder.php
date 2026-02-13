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
        // Liste des permissions
        $permissions = [
            'view-users',
            'create-users',
            'edit-users',
            'delete-users',

            'view-projects',
            'create-projects',
            'edit-projects',
            'delete-projects',
        ];

        //Création des permissions
        foreach ($permissions as $permission){
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        //Création des rôles
        $adminRole = Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);
        $employeeRole = Role::firstOrCreate(['name' => 'Employee', 'guard_name' => 'web']);

        // Attribution des permissions
        $adminRole->syncPermissions($permissions);
        $employeeRole->syncPermissions(['view-projects', 'create-projects', 'edit-projects']);
    }
}
