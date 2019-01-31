<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    protected $table = "experiencia_laboral";
    protected $primaryKey = "id_experiencia";
    protected $fillable = ["id_experiencia",
    "id_persona",
    "id_tipo_documento",
    "nombre_entidad",
    "cargo_desempeñado",
    "fecha_inicio",
    "fecha_termino",
    "fecha_emision",
    "pdf_experiencia"];
}
