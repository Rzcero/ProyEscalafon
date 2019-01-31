<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleado";
    protected $primaryKey = "id_persona";
    protected $fillable = ["id_persona",
    "usuario",
    "contrasena",
    "id_tipo_emp"];

    //Relacion 1 a 1 con la tabla empleado
    //FOREIGN KEY(id_persona) REFERENCES PERSONA(id_persona),
    public function persona(){

        return $this->belongsTo("App\Persona","id_persona","id_persona");

    }
}
