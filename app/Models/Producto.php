<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; //le digo de forma explicita el nombre de la tabla

    public $timestamps = false; //con esto el digo que no tiene timestamps
    
    protected $fillable = [
         'producto',
         'existencias',
         'precio_unitario',
         'fotografia',
         'descripcion',
         'tasa_iva',
         'estatus'
    ];  //le digo que hay campos rellenables
}
