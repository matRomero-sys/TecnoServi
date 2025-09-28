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
        // Permission::create(['name' => 'ver registros']);
        // Permission::create(['name' => 'crear registros']);
        // Permission::create(['name' => 'editar registros']);
        // Permission::create(['name' => 'borrar registros']);


        // $admin = Role::create(['name' => 'admin']);
        // $empleado = Role::create(['name' => 'empleado']);
        $cliente = Role::create(['name' => 'cliente']);
    
        // $admin->givePermissionTo(Permission::all());
        // $empleado->givePermissionTo(['ver registros']);
    }

    
}
