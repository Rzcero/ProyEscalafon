<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenciaVacacion extends Model
{
    protected $table = "licencias_vacaciones";
    protected $primaryKey = "id_lic";
    protected $fillable = ["id_lic",
    "id_tipo_mov",
    "detalle",
    "id_tipo_documento",
    "numero",
    "pdf_archivo",
    "fecha_emision",
    "fecha_inicio",
    "fecha_termino",
    "dias_utiles",
    "id_persona"];
}
