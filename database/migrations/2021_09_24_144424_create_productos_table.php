<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID');
            $table->string('producto', 45)->comment('Nombre del producto');
            $table->unsignedSmallInteger('existencias')->comment('Existencias del producto');
            $table->decimal('precio_unitario', 10, 2)->comment('Precio unitario');
            $table->string('fotografia', 45)->comment('Fotografía del producto');
            $table->tinyText('descripcion')->comment('Descripción del producto');
            $table->decimal('tasa_iva', 10, 2)->comment('Tasa IVA');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('Estatus del producto');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
