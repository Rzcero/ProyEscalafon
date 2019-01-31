<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudioSuperior extends Model
{
    protected $table = "estudios_superiores";
    protected $primaryKey = "id_estudios_sup";
    protected $fillable = ["id_estudios_sup",
    "id_nivel",
    "id_estado",
    "id_modalidad",
    "ciclo",
    "centro_estudios",
    "id_tipo_grado",
    "carrera",
    "detall_grado",
    "fecha_consejo",
    "fecha_emision",
    "num_registro",
    "entidad",
    "pdf",
    "id_persona"];
}
