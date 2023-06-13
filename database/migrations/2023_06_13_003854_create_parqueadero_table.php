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
        Schema::create('parqueadero', function (Blueprint $table) {
            $table->string('idusuario',10)->nullable(false);
            $table->string('idplaca',10)->nullable(false);
            $table->foreign('idusuario')->references('id')->on('_usuarios');
            $table->foreign('idplaca')->references('placa')->on('automovil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parqueadero');
    }
};
