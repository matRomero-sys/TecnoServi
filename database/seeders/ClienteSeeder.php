<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'dni' => 'activo',
                'nombre' => 'ABC123',
                'direccion' => 'Itaembe Miní',
                'tipo_cliente' => 'basico',
                'contacto' => '3764111222',
                'password' => '12341234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 'activo',
                'nombre' => 'CDE123',
                'direccion' => 'B° Los Lapachos',
                'tipo_cliente' => 'premium',
                'contacto' => '3764123412',
                'password' => '12121212',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 'inactivo',
                'nombre' => 'FGH123',
                'direccion' => 'B° Malvinas',
                'tipo_cliente' => 'basico',
                'contacto' => '3755998899',
                'password' => '15915915',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
