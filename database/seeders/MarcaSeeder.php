<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $marcas = [
            [
                'nombre' => 'Toyota',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Renault',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ford',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('marcas')->insert($marcas);
    }   
    
}
