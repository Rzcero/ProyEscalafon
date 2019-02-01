<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaRegimen extends Model
{
    protected $table = "categoria_regimen";
    protected $primaryKey = "id_categ_reg";
    protected $fillable = ["id_categ_reg",
    "id_persona",
    "num_resolucion",
    "detalle",
    "id_categ_doc",
    "id_regimen",
    "fecha_emision",
    "fecha_inicio",
    "pdf_categ_reg"];

    //  1 categoria_regimen puede estar contenido en muchos contratos
     public function contrato(){

        return $this->hasMany("App\Contrato","id_contrato","id_contrato");

    }
}
