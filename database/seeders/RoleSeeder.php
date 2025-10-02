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
        // PERMISOS DE VEHICULO (admin y jefe)
        
        Permission::create(['guard_name' => 'empleados', 'name' => 'ver vehiculos']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'registrar vehiculos']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'editar vehiculos']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'borrar vehiculos']);

        // PERMISOS DE EMPLEADO (admin y jefe)

        Permission::create(['guard_name' => 'empleados', 'name' => 'ver empleados']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'registrar empleados']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'editar empleados']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'borrar empleados']);

        // PERMISOS DE GRUPO DE TRABAJO (admin y jefe)

        Permission::create(['guard_name' => 'empleados', 'name' => 'ver grupo_trabajos']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'registrar grupo_trabajos']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'editar grupo_trabajos']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'borrar grupo_trabajos']);


        // PERMISOS DE CLIENTE

        // 1. admin, jefe

        Permission::create(['guard_name' => 'empleados', 'name' => 'ver clientes']);
        
        // 2. Jefe, cliente

        Permission::create(['guard_name' => 'empleados', 'name' => 'registrar clientes']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'editar clientes']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'borrar clientes']);

        Permission::create(['name' => 'registrar clientes']);
        Permission::create(['name' => 'editar clientes']);
        Permission::create(['name' => 'borrar clientes']);

        // PERMISOS DE ORDEN DE TRABAJO

        // 1. empleados, admin, jefe

        Permission::create(['guard_name' => 'empleados', 'name' => 'ver orden_trabajos']);

        // 2. Admin, jefe

        Permission::create(['guard_name' => 'empleados', 'name' => 'editar orden_trabajos']);

        // 3. Jefe
        Permission::create(['guard_name' => 'empleados', 'name' => 'registrar orden_trabajos']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'borrar orden_trabajos']);


        // 4. Clientes

        Permission::create(['name' => 'ver orden_trabajos']);
        Permission::create(['name' => 'registrar orden_trabajos']);
        Permission::create(['name' => 'editar orden_trabajos']);
        Permission::create(['name' => 'borrar orden_trabajos']);


         $permisos_admin = ['ver vehiculos', 'registrar vehiculos', 'editar vehiculos', 'borrar vehiculos',
                            'ver empleados', 'registrar empleados', 'editar empleados', 'borrar empleados',
                            'ver grupo_trabajos', 'registrar grupo_trabajos', 'editar grupo_trabajos', 'borrar grupo_trabajos',
                            'ver clientes', 'ver orden_trabajos', 'editar orden_trabajos'];

        $permisos_empleado = 'ver orden_trabajos';

        $permisos_cliente = ['registrar clientes', 'editar clientes', 'borrar clientes',
                            'ver orden_trabajos', 'registrar orden_trabajos', 'editar orden_trabajos', 'borrar orden_trabajos'];

        // ROLES

        $jefe =     Role::create(['guard_name' => 'empleados', 'name' => 'jefe']);
        $admin =    Role::create(['guard_name' => 'empleados', 'name' => 'admin']);
        $empleado = Role::create(['guard_name' => 'empleados', 'name' => 'empleado']);
        $cliente =  Role::create(['name' => 'cliente']);
    
        // PERMISOS A ROLES

        $jefe->givePermissionTo(Permission::where('guard_name', 'empleados')->get());
        $admin->givePermissionTo($permisos_admin);
        $empleado->givePermissionTo($permisos_empleado);
        $cliente->givePermissionTo($permisos_cliente);
    }

    
}
