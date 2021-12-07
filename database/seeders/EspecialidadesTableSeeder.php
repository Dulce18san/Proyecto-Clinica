<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('especialidades')->insert([
        ['especialidad' => 'Acupuntura']
        , ['especialidad' => 'Quiropráctica']
    ]);
    }
}
