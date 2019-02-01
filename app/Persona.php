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

    //Relacion 1 a 1 con la tabla administrativo
    public function administrativo(){

        return $this->hasOne('App/Administrativo','id_persona','id_persona');

    }

    //Relacion 1 a 1 con la tabla docente
    public function docente(){

        return $this->hasOne('App/Docente','id_persona','id_persona');

    }

    //Relacion 1 a Muchos con la tabla subsidio_fallecimiento_sepelio
    public function subsidiofallecimientosepelio(){

        return $this->hasMany('App\SubsidioFallecimientoSepelio','id_persona','id_persona');

    }

    //Relacion 1 a Muchos con la tabla informes
    public function informe(){

        return $this->hasMany('App\Informe','id_persona','id_persona');

    }

    //Relacion 1 a Muchos con la tabla habiente
    public function habiente(){

        return $this->hasMany('App\Habiente','id_persona','id_persona');

    }

    //Relacion 1 a Muchos con la tabla estudios_superiores
    public function estudiosuperior(){

        return $this->hasMany('App\EstudioSuperior','id_persona','id_persona');

    }

    //Relacion 1 a 1 con la tabla estudios_basicos
    public function estudiobasico(){

        return $this->hasOne('App/EstudioBasico','id_persona','id_persona');

    }

    //Relacion 1 a Muchos con la tabla otros_estudios
    public function otroestudio(){

        return $this->hasMany('App\OtroEstudio','id_persona','id_persona');

    }

}
