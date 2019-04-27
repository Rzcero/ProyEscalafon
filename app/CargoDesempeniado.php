<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoDesempeniado extends Model
{
    protected $table = "cargos_desempeniados";
    protected $primaryKey = "id_cargos_desempeniado";
    protected $fillable = ["id_cargos_desempeniado",
    "id_persona",
    "id_tipo_docPrincipal",
    "num_documento",
    "motivo",
    "lugar_servicio",
    "fecha_emision_documento",
    "pdf_cargos_desempeñados"];

    public function tipodocumentoprincipal(){

        return $this->belongsTo("App\TipoDocumentoPrincipal","id_tipo_docPrincipal","id_tipo_docPrincipal");

    }
}
