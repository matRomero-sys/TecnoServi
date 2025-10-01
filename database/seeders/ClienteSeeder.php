<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
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
                'dni' => 'activo',
                'patente_vehiculo' => 'ABC123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 'activo',
                'patente_vehiculo' => 'CDE123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 'inactivo',
                'patente_vehiculo' => 'FGH123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
