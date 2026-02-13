<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Peupler la base de données de l'application
     */
    public function run(): void
    {
        $this->call(RoleAndPermissionsSeeder::class);
    }
}
