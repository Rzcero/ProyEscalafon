<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEstudio extends Model
{
    protected $table = "estado_estudios";
    protected $primaryKey = "id_estado";
    protected $fillable = ["id_estado","nombre"];
}
