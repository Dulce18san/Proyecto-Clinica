<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;
//use App\Models\Especialidad;

class Especialidad extends Model
{
    use HasFactory;
    
    protected $table = 'especialidades'; //le digo de forma explicita el nombre de la tabla

    public $timestamps = false; //con esto el digo que no tiene timestamps
    protected $fillable = [
        'especialidad'];  //le digo que hay campos rellenables
}
