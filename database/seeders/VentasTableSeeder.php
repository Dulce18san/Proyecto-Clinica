<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
            [
                  'vendedor_id' => '1'
                , 'cliente_id' => '2'
                , 'direccion_id' => '2'
                , 'fecha_hora' => '2020-01-01 07:20'
                , 'total' => '200'
                , 'metodo_pago' => 'Efectivo'
            ],
            [
                'vendedor_id' => '2'
              , 'cliente_id' => '3'
              , 'direccion_id' => '4'
              , 'fecha_hora' => '2020-01-10 06:30'
              , 'total' => '300'
              , 'metodo_pago' => 'Cheque'
          ],
            ]); 
    }
}