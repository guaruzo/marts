<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $table='maestros';
    protected $fillable=['nom', 'dir', 'tel'];





}
