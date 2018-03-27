<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno_Horario extends Model
{
    protected $table='alumno_horario';
    protected $fillable=['alumno_id', 'horario_id'];
}
