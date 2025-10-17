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
        // PERMISOS DE cliente (admin y jefe)
        
        Permission::create(['guard_name' => 'empleados', 'name' => 'vehiculo.index']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'vehiculo.show']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'vehiculo.create']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'vehiculo.store']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'vehiculo.edit']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'vehiculo.update']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'vehiculo.destroy']);
        
        

        // PERMISOS DE EMPLEADO (admin y jefe)

        Permission::create(['guard_name' => 'empleados', 'name' => 'empleado.index']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'empleado.show']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'empleado.create']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'empleado.store']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'empleado.edit']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'empleado.update']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'empleado.destroy']);

        // PERMISOS DE GRUPO DE TRABAJO (admin y jefe)

        Permission::create(['guard_name' => 'empleados', 'name' => 'grupo_trabajo.index']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'grupo_trabajo.show']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'grupo_trabajo.create']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'grupo_trabajo.store']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'grupo_trabajo.edit']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'grupo_trabajo.update']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'grupo_trabajo.destroy']);


        // PERMISOS DE CLIENTE
        Permission::create(['guard_name' => 'empleados', 'name' => 'cliente.index']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'cliente.show']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'cliente.create']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'cliente.store']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'cliente.edit']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'cliente.update']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'cliente.destroy']);

        Permission::create(['name' => 'cliente.show']);
        Permission::create(['name' => 'cliente.edit']);
        Permission::create(['name' => 'cliente.update']);
        Permission::create(['name' => 'cliente.destroy']);


        // PERMISOS DE ORDEN DE TRABAJO

        Permission::create(['guard_name' => 'empleados', 'name' => 'orden_trabajo.index']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'orden_trabajo.show']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'orden_trabajo.create']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'orden_trabajo.store']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'orden_trabajo.edit']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'orden_trabajo.update']);
        Permission::create(['guard_name' => 'empleados', 'name' => 'orden_trabajo.destroy']);

        // 4. Clientes

        Permission::create(['name' => 'orden_trabajo.show']);
        Permission::create(['name' => 'orden_trabajo.create']);
        Permission::create(['name' => 'orden_trabajo.store']);
        Permission::create(['name' => 'orden_trabajo.edit']);
        Permission::create(['name' => 'orden_trabajo.update']);
        Permission::create(['name' => 'orden_trabajo.destroy']);
        


         $permisos_admin = ['vehiculo.index', 'vehiculo.show', 'vehiculo.create', 'vehiculo.store', 'vehiculo.edit', 'vehiculo.update', 'vehiculo.destroy',
                            'empleado.index', 'empleado.show', 'empleado.create', 'empleado.store', 'empleado.edit', 'empleado.update', 'empleado.destroy',
                            'grupo_trabajo.index', 'grupo_trabajo.show', 'grupo_trabajo.create', 'grupo_trabajo.store', 'grupo_trabajo.edit', 'grupo_trabajo.update', 'grupo_trabajo.destroy',
                            'cliente.index', 'cliente.show',
                            'orden_trabajo.index', 'orden_trabajo.show', 'orden_trabajo.create', 'orden_trabajo.store', 'orden_trabajo.update', 'orden_trabajo.update', 'orden_trabajo.destroy',
        ];

        $permisos_empleado = ['orden_trabajo.index', 'orden_trabajo.show'];

        $permisos_cliente = ['cliente.show', 'cliente.edit', 'cliente.update', 'cliente.destroy',
                            'orden_trabajo.show', 'orden_trabajo.create', 'orden_trabajo.store', 'orden_trabajo.edit', 'orden_trabajo.update', 'orden_trabajo.destroy',
                        ];

        // ROLES

        $jefe =     Role::create(['guard_name' => 'empleados', 'name' => 'jefe']);
        $admin =    Role::create(['guard_name' => 'empleados', 'name' => 'administrador']);
        $empleado = Role::create(['guard_name' => 'empleados', 'name' => 'empleado']);
        $cliente =  Role::create(['name' => 'cliente']);
    
        // PERMISOS A ROLES

        $jefe->givePermissionTo(Permission::where('guard_name', 'empleados')->get());
        $admin->givePermissionTo($permisos_admin);
        $empleado->givePermissionTo($permisos_empleado);
        $cliente->givePermissionTo($permisos_cliente);
    }

    
}
