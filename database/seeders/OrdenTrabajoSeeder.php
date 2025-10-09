<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orden_trabajos')->insert([
            [
                'descripcion' => 'reconexion',
                'estado' => 'solicitado',
                'motivo_inacabado' => null,
                'id_grupo_trabajo' => null,
                'id_cliente' => 40123123,
            ],
            [
                'descripcion' => 'instalacion',
                'estado' => 'cancelado',
                'motivo_inacabado' => 'no habia ganas',
                'id_grupo_trabajo' => 1,
                'id_cliente' => 50123123,
            ],
            [
                'descripcion' => 'desconexion',
                'estado' => 'en proceso',
                'motivo_inacabado' => null,
                'id_grupo_trabajo' => 2,
                'id_cliente' => 60123123, 
            ]
        ]);
    }
}
