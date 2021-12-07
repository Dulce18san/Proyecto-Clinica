<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $table = 'citas';
    public $timestamps = false;
    protected $fillable =  [
        'id'
        , 'especialista_id'
        , 'paciente_id'
        , 'recepcionista_id'
        , 'especialidad_id'
        , 'fecha_hora'
        , 'costo_consulta'
        , 'estatus'
    ];
}
