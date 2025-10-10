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
                'id_marca' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => '12',
                'id_marca' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Fiesta',
                'id_marca' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('modelos')->insert($modelos);
    }
}
