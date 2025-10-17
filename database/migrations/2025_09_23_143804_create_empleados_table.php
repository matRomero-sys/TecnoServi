<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('dni')->primary();
            $table->string('nombre');
            $table->string('img')->nullable();
            $table->date('fecha_ingreso');
            $table->unsignedBigInteger('rol_id');
            $table->integer('cantidad_tareas');
            $table->integer('rendimiento')->nullable();
            $table->boolean('activo');
            $table->unsignedBigInteger('id_grupo_trabajo');
            
            $table->foreign('rol_id')
                    ->references('id')
                    ->on('roles_empleados');

            $table->foreign('id_grupo_trabajo')
                    ->references('id')
                    ->on('grupo_trabajos');
            
            $table->string('password');
            $table->boolean('is_active')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};