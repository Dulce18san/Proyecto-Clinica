<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID del usuario');
            $table->unsignedSmallInteger('especialidad_id')->comment('ID de especialidad');
            $table->string('name', 45)->comment('Nombre del usuario');
            $table->string('primer_apellido', 45)->comment('Primer apellido del usuario');
            $table->string('segundo_apellido', 45)->nullable()->comment('Segundo apellido del usuario');
            $table->enum('sexo', ['Femenino', 'Masculino', 'Prefiere no decirlo'])->comment('Sexo del usuario');
            $table->date('fecha_nacimiento')->comment('Fecha de nacimiento del usuario');
            $table->string('numero_celular', 15)->comment('Número de celular del usuario');
            $table->string('numero_fijo', 15)->nullable()->comment('Número telefónico fijo del usuario');
            $table->string('numero_trabajo', 15)->nullable()->comment('Número telefónico trabajo del usuario');
            $table->string('email')->unique()->comment('Correo del usuario');
            $table->timestamp('email_verified_at')->nullable()->comment('Verificación del usuario');
            $table->string('rfc', 15)->nullable()->comment('RFC del usuario');
            $table->string('cedula_profesional', 20)->nullable()->comment('Cédula profesional del usuario');
            $table->decimal('costo_consulta', 10, 2)->comment('Costo de la consulta para los médicos');
            $table->string('password', 100)->comment('Contraseña del usuario');
            $table->enum('perfil', ['Administrador', 'Médico', 'Recepción', 'Paciente', 'Ventas'])->comment('Perfil del usuario');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('Estatus');
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('especialidad_id')->references('id')->on('especialidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
