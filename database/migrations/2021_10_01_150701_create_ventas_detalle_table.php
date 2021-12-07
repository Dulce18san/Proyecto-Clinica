<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_detalle', function (Blueprint $table) {
            $table->unsignedMediumInteger('venta_id')->comment('ID de la venta');
            $table->unsignedMediumInteger('producto_id')->comment('ID del producto');
            $table->decimal('precio_unitario', 10, 2)->comment('Precio unitario');
            $table->unsignedMediumInteger('cantidad')->comment('Cantidad');
            $table->decimal('subtotal', 10, 2)->comment('Subtotal');
            $table->decimal('iva', 10, 2)->comment('IVA');
            $table->index('venta_id', 'idx_venta_id');
            $table->index('producto_id', 'idx_producto_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas_detalle');
    }
}
