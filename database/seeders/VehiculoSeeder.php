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
                'modelo_id' => 1,
                'vencimiento_vtv' => '2026-03-10',
                'estado_neumaticos' => 80,
                'mantenimiento' => 'Completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'CDE123',
                'modelo_id' => 2,
                'vencimiento_vtv' => '2025-12-20',
                'estado_neumaticos' => 60,
                'mantenimiento' => 'Básico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patente' => 'FGH123',
                'modelo_id' => 3,
                'vencimiento_vtv' => '2026-01-15',
                'estado_neumaticos' => 90,
                'mantenimiento' => 'Completo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('vehiculos')->insert($vehiculos);
    }
}
