<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "persona";
    protected $primaryKey = "id_persona";
    protected $fillable = ["id_persona",
    "num_doc_identidad",
    "ape_paterno",
    "ape_materno",
    "nombres",
    "sexo",
    "fecha_nacimiento",
    "direccion",
    "celular",
    "telefono",
    "email",
    "id_tipo_doc",
    "id_estado_civil",
    "id_tipo_via",
    "id_tipo_zona",
    "pdf_partida_nacimiento"];
    
    //Relacion 1 a 1 con la tabla empleado
    //FOREIGN KEY(id_persona) REFERENCES PERSONA(id_persona),
    public function empleado(){

        return $this->hasOne("App\Empleado","id_persona","id_persona");

    }

}