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
    "id_tipo_docPrincipal",
    "numero",
    "pdf_archivo",
    "fecha_emision",
    "fecha_inicio",
    "fecha_termino",
    "dias_utiles",
    "id_persona"];

    public function tipodocumentoprincipal(){

        return $this->belongsTo("App\TipoDocumentoPrincipal","id_tipo_docPrincipal","id_tipo_docPrincipal");

    }

}
