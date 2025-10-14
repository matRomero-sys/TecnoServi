<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    use HasRoles;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('empleados')->insert([
            [
                'dni' => 10123123,
                'nombre' => 'matias',
                'fecha_ingreso' => '2020-03-15',
                'rol' => 'jefe',
                'cantidad_tareas' => 25,
                'rendimiento' => 80,
                'activo' => true,
                'id_grupo_trabajo' => 1,
                'password' => Hash::make('12341234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 20123123,
                'nombre' => 'candela',
                'fecha_ingreso' => '2021-07-10',
                'rol' => 'admin',
                'cantidad_tareas' => 15,
                'rendimiento' => 90,
                'activo' => true,
                'id_grupo_trabajo' => 1,
                'password' => Hash::make('12345123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => 30123123,
                'nombre' => 'Carlos López',
                'fecha_ingreso' => '2019-11-05',
                'rol' => 'Supervisor',
                'cantidad_tareas' => 30,
                'rendimiento' => 85,
                'activo' => true,
                'id_grupo_trabajo' => 2,
                'password' => Hash::make('12345123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],        
        ]);

        $jefe = Empleado::where('dni', 10123123)->first();
        $admin = Empleado::where('dni', 20123123)->first();
        $jefe->assignRole('jefe');
        $admin->assignRole('admin');   
    }
}
