<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno_Maestro extends Model
{
    protected $table='alumno_maestro';
    protected $fillable=['alumno_id', 'maestro_id'];
}
