<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_empleados')->insert([
            [
                'nombre' => 'Administrador',
            ],
            [
                'nombre' => 'Jefe',
            ],
            [
                'nombre' => 'Técnico',
            ]
        ]);
    }
}
