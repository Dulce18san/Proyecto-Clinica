<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID de la cita');
            $table->unsignedMediumInteger('especialista_id')->comment('ID del usuario especialista');
            $table->unsignedMediumInteger('paciente_id')->comment('ID del usuario paciente');
            $table->unsignedMediumInteger('recepcionista_id')->comment('ID del usuario recepcionista');
            $table->unsignedSmallInteger('especialidad_id')->comment('ID de la especialidad');
            $table->dateTime('fecha_hora')->comment('Fecha/hora de la cita');
            $table->decimal('costo_consulta', 10, 2)->comment('Costo de la consulta');
            $table->enum('estatus', ['Agendada', 'Confirmada', 'Cancelada', 'Realizada'])->comment('Estatus de la cita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
