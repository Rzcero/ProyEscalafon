<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaDocente extends Model
{
    protected $table = "categoria_docente";
    protected $primaryKey = "id_categ_doc";
    protected $fillable = ["id_categ_doc",
    "descripcion"];


    //  1 categoria_docente puede estar contenida en muchas categoria_regimen
     public function categoria_regimen(){
        return $this->hasMany("App\CategoriaRegimen","id_categ_doc","id_categ_doc");

    }
     //  1 categoria_docente puede estar contenida en muchos contratos
     public function contrato(){
        return $this->hasMany("App\Contrato","id_categ_doc","id_categ_doc");

    }
    
}
