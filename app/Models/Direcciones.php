<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    use HasFactory;
    protected $table = 'direcciones';
    public $timestamps = false;
    protected $fillable =  
    [
    'usuario_id' 
    , 'estado_id' 
    , 'municipio_id'
    , 'colonia' 
    , 'calle' 
    , 'numero_exterior' 
    , 'numero_interior' 
    , 'codigo_postal' 
];
}
