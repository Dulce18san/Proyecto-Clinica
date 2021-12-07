<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direcciones')->insert([
            [
                'usuario_id' => 4
                , 'estado_id' => 15
                , 'municipio_id' => 771
                , 'colonia' => 'Centro'
                , 'calle' => '20 de noviembre'
                , 'numero_exterior' => '151'
                , 'numero_interior' => ''
                , 'codigo_postal' => '52044'
            ]
        ]);
    }
}