<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtroEstudio extends Model
{
    protected $table = "otros_estudios";
    protected $primaryKey = "id_otro_estudio";
    protected $fillable = ["id_otro_estudio",
    "id_tipo_estudio",
    "nombre_estudio",
    "centro_estudio",
    "participacion",
    "fecha_inicio",
    "fecha_termino",
    "num_horas",
    "num_creditos",
    "id_persona",
    "id_tipo_documento",
    "pdf_estudio"];
}
