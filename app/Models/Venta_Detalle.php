<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta_Detalle extends Model
{
    use HasFactory;
    protected $table = 'ventas_detalle';
    public $timestamps = false;
    
    protected $fillable =  [
       'venta_id' 
     , 'producto_id' 
     , 'precio_unitario' 
     , 'cantidad' 
     , 'subtotal' 
     , 'iva' 
        ];
    }
