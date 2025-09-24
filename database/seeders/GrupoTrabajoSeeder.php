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
                'patente_vehiculo' => 'ALU45',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'inactivo',
                'patente_vehiculo' => 'GHI789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'activo',
                'patente_vehiculo' => 'JKL012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'pendiente',
                'patente_vehiculo' => 'MNO345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'activo',
                'patente_vehiculo' => 'PQR678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'inactivo',
                'patente_vehiculo' => 'STU901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'activo',
                'patente_vehiculo' => 'VWX234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'pendiente',
                'patente_vehiculo' => 'YZA567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado' => 'activo',
                'patente_vehiculo' => 'BCD890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
