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
                'dni' => '40123123',
                'nombre' => 'Matias',
                'direccion' => 'Itaembe Miní',
                'tipo_cliente' => 'basico',
                'contacto' => '3764111222',
                'password' => '12341234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '50123123',
                'nombre' => 'Pepe',
                'direccion' => 'B° Los Lapachos',
                'tipo_cliente' => 'premium',
                'contacto' => '3764123412',
                'password' => '12121212',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '60123123',
                'nombre' => 'Candelu',
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
