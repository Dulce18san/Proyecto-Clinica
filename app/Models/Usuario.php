<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;


    protected $table = 'users';
    public $timestamps = false;
    protected $fillable =  [
        'especialidad_id'
        , 'name'
        , 'primer_apellido'
        , 'segundo_apellido'
        , 'sexo'
        , 'fecha_nacimiento'
        , 'numero_celular'
        , 'numero_fijo'
        , 'numero_trabajo'
        , 'email'
        , 'rfc'
        , 'cedula_profesional'
        , 'costo_consulta'
        , 'password'
        , 'perfil'
        , 'estatus'
    ];
    
    public static function reglas_validacion() {
        return [
            'especialidad_id' => 'required|integer|min:0'
            , 'name' => 'required|max:45'
            , 'primer_apellido' => 'required|max:45'
            , 'segundo_apellido' => 'bail|nullable'
            , 'sexo' => 'required|in:Femenino,Masculino,Prefiere no decirlo'
            , 'fecha_nacimiento' => 'required|date_format:Y-m-d'
            , 'numero_celular' => 'required|max:15'
            , 'numero_fijo' => 'bail|nullable|max:15'
            , 'numero_trabajo' => 'bail|nullable|max:15'
            , 'email' => 'required|email'
            , 'rfc' => 'bail|nullable|max:15'
            , 'cedula_profesional' => 'bail|nullable|max:20'
            , 'costo_consulta' => 'required|numeric|min:0'
            , 'password' => 'required|min:8'
            , 'perfil' => 'required|in:Administrador,Médico,Recepción,Paciente,Ventas'
            , 'estatus' => 'required|in:Activo,Inactivo'
        ];
    }
}
