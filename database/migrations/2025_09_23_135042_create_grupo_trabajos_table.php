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
        Schema::create('grupo_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('patente_vehiculo');

            $table->foreign('patente_vehiculo')
                    ->references('patente')
                    ->on('vehiculos');

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
        Schema::dropIfExists('grupo_trabajos');
    }
};
