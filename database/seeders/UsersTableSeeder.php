<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuarios con roles asignados
        $this->createUserWithRole('Diego', 'admin@example.com', 'administrador');
        $this->createUserWithRole('Carlos', 'carlos@example.com', 'auxiliar');
        $this->createUserWithRole('Maicol', 'maicol@example.com', 'auxiliar');
        $this->createUserWithRole('Victor', 'victor@example.com', 'auxiliar');
    }

    protected function createUserWithRole($name, $email, $role)
    {
        // Buscar el rol por nombre
        $roleModel = Role::where('name', ucfirst($role))->first();

        // Si el rol no existe, crea uno nuevo
        if (!$roleModel) {
            $roleModel = Role::create(['name' => ucfirst($role)]);
        }

        // Crear el usuario
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt('12345678'), // Cambiar 'password' por la contraseña deseada
        ]);

        // Asignar el rol al usuario
        $user->assignRole($roleModel);
    }
}
