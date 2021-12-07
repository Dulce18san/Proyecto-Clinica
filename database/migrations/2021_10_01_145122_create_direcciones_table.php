<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID de la dirección');
            $table->unsignedMediumInteger('usuario_id')->comment('ID del usuario');
            $table->unsignedSmallInteger('estado_id')->comment('ID del estado');
            $table->unsignedSmallInteger('municipio_id')->comment('ID del municipio');
            $table->string('colonia', 45)->comment('Colonia');
            $table->string('calle', 45)->comment('Calle');
            $table->string('numero_exterior', 10)->comment('Número exterior');
            $table->string('numero_interior', 10)->comment('Número interior');
            $table->string('codigo_postal', 10)->comment('Código postal');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
