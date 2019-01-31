<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEstudio extends Model
{
    protected $table = "tipo_estudios";
    protected $primaryKey = "id_tipo_estudio";
    protected $fillable = ["id_tipo_estudio","denominacion"];
}
