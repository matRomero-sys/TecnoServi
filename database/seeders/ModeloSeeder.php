<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelos = [
            [
                'nombre' => 'Hilux',
                'marca_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => '12',
                'marca_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Fiesta',
                'marca_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('modelos')->insert($modelos);
    }
}
