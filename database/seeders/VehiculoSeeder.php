<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiculos = [
            [
                'patente' => 'ABC123',
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'vencimiento_vtv' => '2026-03-10',
                'estado_neumaticos' => 80,
                'mantenimiento' => 'Completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'DEF456',
                'marca' => 'Ford',
                'modelo' => 'Focus',
                'vencimiento_vtv' => '2025-12-20',
                'estado_neumaticos' => 60,
                'mantenimiento' => 'Básico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'GHI789',
                'marca' => 'Chevrolet',
                'modelo' => 'Cruze',
                'vencimiento_vtv' => '2026-01-15',
                'estado_neumaticos' => 90,
                'mantenimiento' => 'Completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'JKL012',
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'vencimiento_vtv' => '2025-11-05',
                'estado_neumaticos' => 70,
                'mantenimiento' => 'Básico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'MNO345',
                'marca' => 'Nissan',
                'modelo' => 'Sentra',
                'vencimiento_vtv' => '2026-04-18',
                'estado_neumaticos' => 85,
                'mantenimiento' => 'Completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'PQR678',
                'marca' => 'Volkswagen',
                'modelo' => 'Golf',
                'vencimiento_vtv' => '2025-09-30',
                'estado_neumaticos' => 75,
                'mantenimiento' => 'Básico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'STU901',
                'marca' => 'Hyundai',
                'modelo' => 'Elantra',
                'vencimiento_vtv' => '2026-02-12',
                'estado_neumaticos' => 65,
                'mantenimiento' => 'Completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'VWX234',
                'marca' => 'Kia',
                'modelo' => 'Rio',
                'vencimiento_vtv' => '2025-10-25',
                'estado_neumaticos' => 50,
                'mantenimiento' => 'Básico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'YZA567',
                'marca' => 'Renault',
                'modelo' => 'Fluence',
                'vencimiento_vtv' => '2026-05-07',
                'estado_neumaticos' => 95,
                'mantenimiento' => 'Completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'BCD890',
                'marca' => 'Peugeot',
                'modelo' => '208',
                'vencimiento_vtv' => '2025-08-15',
                'estado_neumaticos' => 60,
                'mantenimiento' => 'Básico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('vehiculos')->insert($vehiculos);
    }
}
