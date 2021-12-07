<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'especialidad_id' => 0
                , 'name' => 'Administrador'
                , 'primer_apellido' => 'Administrador'
                , 'segundo_apellido' => 'Administrador'
                , 'sexo' => 'Masculino'
                , 'fecha_nacimiento' => '2020-01-01'
                , 'numero_celular' => '123456789'
                , 'numero_fijo' => null
                , 'numero_trabajo' => null
                , 'email' => 'administrador@dominio.com'
                , 'email_verified_at' => null
                , 'rfc' => null
                , 'cedula_profesional' => null
                , 'costo_consulta' => 0
                , 'password' => Hash::make('123456789')
                , 'perfil' => 'Administrador'
                , 'created_at' => '2021-09-30 11:16'
                , 'updated_at' => '2021-09-30 11:16'
            ]
            , [
                'especialidad_id' => 1
                , 'name' => 'Dulce'
                , 'primer_apellido' => 'Zapata'
                , 'segundo_apellido' => 'González'
                , 'sexo' => 'Femenino'
                , 'fecha_nacimiento' => '2020-01-01'
                , 'numero_celular' => '123456789'
                , 'numero_fijo' => null
                , 'numero_trabajo' => null
                , 'email' => 'dulce@dominio.com'
                , 'email_verified_at' => null
                , 'rfc' => 'ZAGD200101ABC'
                , 'cedula_profesional' => '123456789'
                , 'costo_consulta' => 300
                , 'password' => Hash::make('123456789')
                , 'perfil' => 'Médico'
                , 'created_at' => '2021-09-30 11:16'
                , 'updated_at' => '2021-09-30 11:16'
            ]
            , [
                'especialidad_id' => 2
                , 'name' => 'María'
                , 'primer_apellido' => 'Zapata'
                , 'segundo_apellido' => 'González'
                , 'sexo' => 'Femenino'
                , 'fecha_nacimiento' => '2020-01-01'
                , 'numero_celular' => '123456789'
                , 'numero_fijo' => null
                , 'numero_trabajo' => null
                , 'email' => 'maria@dominio.com'
                , 'email_verified_at' => null
                , 'rfc' => 'ZAGM200101ABC'
                , 'cedula_profesional' => '987654321'
                , 'costo_consulta' => 300
                , 'password' => Hash::make('123456789')
                , 'perfil' => 'Médico'
                , 'created_at' => '2021-09-30 11:16'
                , 'updated_at' => '2021-09-30 11:16'
            ]
            , [
                'especialidad_id' => 0
                , 'name' => 'Mayte'
                , 'primer_apellido' => 'Estrada'
                , 'segundo_apellido' => 'Pérez'
                , 'sexo' => 'Femenino'
                , 'fecha_nacimiento' => '2021-02-14'
                , 'numero_celular' => '123456789'
                , 'numero_fijo' => null
                , 'numero_trabajo' => null
                , 'email' => 'mayte@gmail.com'
                , 'email_verified_at' => null
                , 'rfc' => 'ESPM210214ABC'
                , 'cedula_profesional' => null
                , 'costo_consulta' => 0
                , 'password' => Hash::make('123456789')
                , 'perfil' => 'Paciente'
                , 'created_at' => '2021-09-30 11:16'
                , 'updated_at' => '2021-09-30 11:16'
            ]
        ]);
    }
}
