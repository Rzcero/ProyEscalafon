<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiempoServicio extends Model
{
    protected $table = "tiempo_servicios";
    protected $primaryKey = "id_tiempo_serv";
    protected $fillable = ["id_tiempo_serv",
    "id_persona",
    "id_tipo_documento",
    "detalle",
    "fecha_emision date",
    "mes_servicio",
    "dias_servicio",
    "pdf_tiempo_serv"];
}
