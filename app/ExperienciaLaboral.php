<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    protected $table = "experiencia_laboral";
    protected $primaryKey = "id_experiencia";
    protected $fillable = ["id_experiencia",
    "id_persona",
    "id_tipo_docPrincipal",
    "nombre_entidad",
    "cargo_desempeñado",
    "fecha_inicio",
    "fecha_termino",
    "fecha_emision",
    "pdf_experiencia"];

    public function tipodocumentoprincipal(){

        return $this->belongsTo("App\TipoDocumentoPrincipal","id_tipo_docPrincipal","id_tipo_docPrincipal");

    }

}
