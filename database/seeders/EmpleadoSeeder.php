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
                'id_cuenta' => 1,
                'id_grupo_trabajo' => 1,
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
                'id_cuenta' => 2,
                'id_grupo_trabajo' => 1,
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
                'id_cuenta' => 3,
                'id_grupo_trabajo' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40444555,
                'nombre' => 'Ana Torres',
                'fecha_ingreso' => '2022-01-20',
                'rol' => 'Técnico',
                'cantidad_tareas' => 20,
                'rendimiento' => 75,
                'activo' => true,
                'id_cuenta' => 4,
                'id_grupo_trabajo' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40555666,
                'nombre' => 'Diego Fernández',
                'fecha_ingreso' => '2018-09-12',
                'rol' => 'Chofer',
                'cantidad_tareas' => 40,
                'rendimiento' => 88,
                'activo' => true,
                'id_cuenta' => 5,
                'id_grupo_trabajo' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40666777,
                'nombre' => 'Lucía Martínez',
                'fecha_ingreso' => '2021-04-01',
                'rol' => 'Administrativo',
                'cantidad_tareas' => 18,
                'rendimiento' => 92,
                'activo' => true,
                'id_cuenta' => 6,
                'id_grupo_trabajo' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40777888,
                'nombre' => 'Martín Silva',
                'fecha_ingreso' => '2017-06-25',
                'rol' => 'Supervisor',
                'cantidad_tareas' => 35,
                'rendimiento' => 83,
                'activo' => false,
                'id_cuenta' => 7,
                'id_grupo_trabajo' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40888999,
                'nombre' => 'Sofía Díaz',
                'fecha_ingreso' => '2020-08-18',
                'rol' => 'Técnico',
                'cantidad_tareas' => 22,
                'rendimiento' => 79,
                'activo' => true,
                'id_cuenta' => 8,
                'id_grupo_trabajo' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 40999000,
                'nombre' => 'Pedro Ramírez',
                'fecha_ingreso' => '2016-12-30',
                'rol' => 'Chofer',
                'cantidad_tareas' => 50,
                'rendimiento' => 87,
                'activo' => true,
                'id_cuenta' => 9,
                'id_grupo_trabajo' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 41000111,
                'nombre' => 'Valentina Ruiz',
                'fecha_ingreso' => '2023-02-14',
                'rol' => 'Administrativo',
                'cantidad_tareas' => 12,
                'rendimiento' => 95,
                'activo' => true,
                'id_cuenta' => 10,
                'id_grupo_trabajo' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
