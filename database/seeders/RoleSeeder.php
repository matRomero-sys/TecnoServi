<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'ver registros', 'guard_name' => 'empleados']);
        Permission::create(['name' => 'crear registros', 'guard_name' => 'empleados']);
        Permission::create(['name' => 'editar registros', 'guard_name' => 'empleados']);
        Permission::create(['name' => 'borrar registros', 'guard_name' => 'empleados']);

        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'empleados',
        ]);
        $empleado = Role::create([
            'name' => 'empleado',
            'guard_name' => 'empleados',
        ]);
        $cliente = Role::create(['name' => 'cliente']);
    
        $admin->givePermissionTo(Permission::all());
        $empleado->givePermissionTo(['ver registros']);
    }

    
}
