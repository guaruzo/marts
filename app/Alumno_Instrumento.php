<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno_Instrumento extends Model
{
    protected $table='alumno_instrumento';
    protected $fillable=['alumno_id', 'instrumento_id'];
}
