<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidades', function (Blueprint $table) {
            $table->smallIncrements('id')->comment('ID'); //Aqui se creo el id de la tabla especialidades con el tipo de datos smallIncrements debido a quer son pocas especialidades
            $table->string('especialidad', 45)->comment('Especialidad'); //campo para guardar el nombre de la especialidad
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialidades');
    }
}
