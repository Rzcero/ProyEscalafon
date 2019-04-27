<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiempoServicio extends Model
{
    protected $table = "tiempo_servicios";
    protected $primaryKey = "id_tiempo_serv";
    protected $fillable = ["id_tiempo_serv",
    "id_persona",
    "id_tipo_docPrincipal",
    "detalle",
    "fecha_emision date",
    "mes_servicio",
    "dias_servicio",
    "pdf_tiempo_serv"];

    public function tipodocumentoprincipal(){

        return $this->belongsTo("App\TipoDocumentoPrincipal","id_tipo_docPrincipal","id_tipo_docPrincipal");

    }

}
