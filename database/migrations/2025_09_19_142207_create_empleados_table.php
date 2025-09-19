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
            $table->id('dni');
            $table->string('nombre');
            $table->date('fecha_ingreso');
            $table->string('rol');
            $table->integer('tareas');
            $table->integer('rendimiento');
            $table->unSignedBigInteger('id_cuenta');
            $table->boolean('activo');
            $table->unSignedBigInteger('id_grupo_trabajo');

            $table  ->foreign('id_cuenta')
                    ->references('id')
                    ->on('cuentas'); 

            $table  ->foreign('id_grupo_trabajo')
                    ->references('id')
                    ->on('grupo_de_trabajos'); 

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
