<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupo_trabajos')->insert([
            [
                'estado' => 'activo',
                'patente_vehiculo' => 'ABC123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'activo',
                'patente_vehiculo' => 'CDE123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'inactivo',
                'patente_vehiculo' => 'FGH123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
