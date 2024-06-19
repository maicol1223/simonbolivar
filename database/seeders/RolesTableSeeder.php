<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el rol de administrador si no existe
        if (!Role::where('name', 'Administrador')->exists()) {
            Role::create(['name' => 'Administrador']);
        }
        // Crear el rol de administrador si no existe
        if (!Role::where('name', 'Auxiliar')->exists()) {
            Role::create(['name' => 'Auxiliar']);
        }
    }
}
