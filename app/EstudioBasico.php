<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudioBasico extends Model
{
    protected $table = "estudios_basicos";
    protected $primaryKey = "id_persona";
    protected $fillable = ["id_persona","ie_primaria",
    "anio_egreso_primaria",
    "pdf_primaria",
    "ie_secundaria",
    "anio_egreso_secundaria",
    "pdf_secundaria"];
}
