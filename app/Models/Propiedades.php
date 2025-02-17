<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    protected $fillable = ['nombre', 'direccion', 'id_agente', 'id_categoria'];
}
