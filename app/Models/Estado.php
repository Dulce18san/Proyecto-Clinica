<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';
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
