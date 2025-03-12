<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisoAdmin = Permission::create(['name' => 'crear-categorias']);
        $roleAdmin = Role::create(["name" => "administrador"]);

        $permisoEmpleado = Permission::create(['name' => 'crear-productos']);
        $roleEmpleado = Role::create(["name" => "empleado"]);

        $permisoCliente = Permission::create(['name' => 'agregar-carrito']);
        $roleCliente = Role::create(["name" => "cliente"]);

        $roleAdmin->givePermissionTo($permisoAdmin);
        $roleEmpleado->givePermissionTo($permisoEmpleado);
        $roleCliente->givePermissionTo($permisoCliente);

        $user = User::create([
            'name'=> 'JULIAN DAZA',
            'email'=> 'julian@gmail.com',
            'password'=> bcrypt('11111111')
        ]);
        $user->assignRole($roleAdmin);

        $user = User::create([
            'name'=> 'GOMEZ',
            'email'=> 'gomez@gmail.com',
            'password'=> bcrypt('11111111')
        ]);
        $user->assignRole($roleEmpleado);

        $user = User::create([
            'name'=> 'JUAN',
            'email'=> 'juan@gmail.com',
            'password'=> bcrypt('11111111')
        ]);
        $user->assignRole($roleCliente);

    }
}
