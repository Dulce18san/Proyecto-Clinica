<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            EspecialidadesTableSeeder::class,
            ProductosTableSeeder::class,
            EstadosTableSeeder::class,
            MunicipiosTableSeeder::class,
            UsersTableSeeder::class,
            DireccionesTableSeeder::class,
            Ventas_DetalleTableSeeder::class,
            VentasTableSeeder::class,

//citas no lleva, porque solo se crea seeder para los que manejan catalogos y citas se maneja desde la programacion 


        ]);
    
}
}