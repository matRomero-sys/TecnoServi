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
        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('estado');
            $table->string('motivo_inacabado')->nullable();
            $table->unsignedBigInteger('id_grupo_trabajo')->nullable();
            $table->integer('id_cliente');

            $table->foreign('id_grupo_trabajo')
                    ->references('id')
                    ->on('grupo_trabajos');

            $table->foreign('id_cliente')
                    ->references('dni')
                    ->on('clientes');

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
        Schema::dropIfExists('orden_trabajos');
    }
};
