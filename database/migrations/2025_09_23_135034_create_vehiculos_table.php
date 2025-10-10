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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('patente')->primary();
            $table->string('img')->nullable();
            $table->unsignedBigInteger('modelo_id');
            $table->date('vencimiento_vtv');
            $table->integer('estado_neumaticos');
            $table->string('mantenimiento');
            $table->boolean('is_active')->default(1);

            $table->foreign('modelo_id')
                    ->references('id')
                    ->on('modelos');
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
        Schema::dropIfExists('vehiculos');
    }
};
