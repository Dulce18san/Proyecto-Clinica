<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            //primer prudcto
            ['producto' => 'Pomada'
            , 'existencias' => '3'
            , 'precio_unitario' => '200'
            , 'fotografia' => 'pomada.jpg'
            , 'descripcion' => 'Pomada para el dolor de cabeza'
            , 'tasa_iva' => '16'
            , 'estatus' => 'Activo'],
            //segundo producto
            ['producto' => 'Venda'
            , 'existencias' => '4'
            , 'precio_unitario' => '300'
            , 'fotografia' => 'venda.jpg'
            , 'descripcion' => 'Venda de curación'
            , 'tasa_iva' => '16'
            , 'estatus' => 'Activo']
        ]);
    }
}
