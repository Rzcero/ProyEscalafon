<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $table = "tramites";
    protected $primaryKey = "id_tramite";
    protected $fillable = ["id_tramite",
    "num_expediente",
    "fecha_ingreso",
    "fecha_salida",
    "nombre",
    "asunto",
    "pdf_tramite"];
}
