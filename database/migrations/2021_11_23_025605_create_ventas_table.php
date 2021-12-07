<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID de la venta');
            $table->unsignedMediumInteger('vendedor_id')->comment('ID del usuario vendedor');
            $table->unsignedMediumInteger('cliente_id')->comment('ID del usuario cliente');
            $table->unsignedMediumInteger('direccion_id')->comment('ID de la dirección del cliente');
            $table->dateTime('fecha_hora')->comment('Fecha/hora de la venta');
            $table->decimal('total', 10, 2)->comment('Total de la venta');
            $table->enum('metodo_pago', ['Efectivo', 'Cheque', 'Transferencia', 'Celular', 'Tarjea de débito', 'Tarjeta de crédito', 'Pagaré'])->comment('Método de pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}

