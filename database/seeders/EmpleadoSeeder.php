<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('empleados')->insert([
            [
                'dni' => 40111222,
                'nombre' => 'Juan Pérez',
                'fecha_ingreso' => '2020-03-15',
                'rol' => 'Técnico',
                'cantidad_tareas' => 25,
                'rendimiento' => 80,
                'activo' => true,
                'id_grupo_trabajo' => 1,
                'password' => '12312312',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40222333,
                'nombre' => 'María Gómez',
                'fecha_ingreso' => '2021-07-10',
                'rol' => 'Administrativo',
                'cantidad_tareas' => 15,
                'rendimiento' => 90,
                'activo' => true,
                'id_grupo_trabajo' => 1,
                'password' => '12341234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40333444,
                'nombre' => 'Carlos López',
                'fecha_ingreso' => '2019-11-05',
                'rol' => 'Supervisor',
                'cantidad_tareas' => 30,
                'rendimiento' => 85,
                'activo' => true,
                'id_grupo_trabajo' => 2,
                'password' => '12345123',
                'created_at' => now(),
                'updated_at' => now(),
            ],        
        ]);
    }
}
