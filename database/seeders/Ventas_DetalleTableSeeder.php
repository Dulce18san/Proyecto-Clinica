<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ventas_DetalleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas_detalle')->insert([
            [
                  'venta_id' => 4
                , 'producto_id' => '1'
                , 'precio_unitario' => '200'
                , 'cantidad' => '1'
                , 'subtotal' => '200'
                , 'iva' => '16'
           ]
           ,[
                'venta_id' => 3
                , 'producto_id' => '2'
                , 'precio_unitario' => '300'
                , 'cantidad' => '2'
                , 'subtotal' => '400'
                , 'iva' => '16'

            ]
        ]);
    }
}
