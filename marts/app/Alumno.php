<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumnos';
    protected $fillable=['nom', 'dir', 'tel'];


public function instrumentos()
{
	return $this->belongsToMany(Instrumento::Class);
}

public function horarios()
{
	return $this->belongsToMany(Horario::Class);
}


}