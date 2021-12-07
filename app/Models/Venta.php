<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'ventas';
    public $timestamps = false;
    
    protected $fillable =  [
        'vendedor_id'
        , 'cliente_id'
        , 'direccion_id'
        , 'fecha_hora'
        , 'total'
        , 'metodo_pago'
    ];
    }
