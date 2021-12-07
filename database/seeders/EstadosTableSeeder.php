<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            ['estado'=> 'Aguascalientes']
          , ['estado'=> 'Baja California']
          , ['estado'=> 'Baja California Sur']
          , ['estado'=> 'Chiapas']
          , ['estado'=> 'Chihuahua']
          , ['estado'=> 'Ciudad de México']
          , ['estado'=> 'Coahuila']
          , ['estado'=> 'Colima']
          , ['estado'=> 'Durango']
          , ['estado'=> 'Guanajuato']
          , ['estado'=> 'Guerrero']
          , ['estado'=> 'Hidalgo']
          , ['estado'=> 'Jalisco']
          , ['estado'=> 'Estado de México']
          , ['estado'=> 'Michoacán']
          , ['estado'=> 'Morelos']
          , ['estado'=> 'Nayarit']
          , ['estado'=> 'Nuevo León']
          , ['estado'=> 'Oaxaca']
          , ['estado'=> 'Puebla']
          , ['estado'=> 'Querétaro']
          , ['estado'=> 'Quitana Roo']
          , ['estado'=> 'San Luis Potosí']
          , ['estado'=> 'Sinaloa']
          , ['estado'=> 'Sonora']
          , ['estado'=> 'Tabasco']
          , ['estado'=> 'Tamaulipas']
          , ['estado'=> 'Tlaxcala']
          , ['estado'=> 'Veracruz']
          , ['estado'=> 'Yucatán']
          , ['estado'=> 'Zacatecas']
        ]);
            
    }
}
