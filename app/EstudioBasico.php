<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudioBasico extends Model
{
    protected $table = "estudios_basicos";
    protected $primaryKey = "id_estudios_bas";
    protected $fillable = ["id_estudios_bas","ie_primaria",
    "anio_egreso_primaria",
    "pdf_primaria",
    "pais_primaria",
    "ubi_primaria",
    "dep_primaria",
    "prov_primaria",
    "dist_primaria",
    "ie_secundaria",
    "anio_egreso_secundaria",
    "pdf_secundaria",
    "pais_secundaria",
    "ubi_secundaria",
    "dep_secundaria",
    "prov_secundaria",
    "dist_secundaria",
    "id_persona"];
}
