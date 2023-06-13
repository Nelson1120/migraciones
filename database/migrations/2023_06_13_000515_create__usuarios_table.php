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
        Schema::create('_usuarios', function (Blueprint $table) {
            $table->string('id',10)->nullable(false);
            $table->string('nombre',10)->nullable(false);
            $table->string('telefono',100)->nullable(false);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_usuarios');
    }
};
