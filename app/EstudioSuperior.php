<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudioSuperior extends Model
{
    protected $table = "estudios_superiores";
    protected $primaryKey = "id_estudios_sup";
    protected $fillable = ["id_estudios_sup",
    "id_nivel",
    "id_estado",
    "id_modalidad",
    "ciclo",
    "centro_estudios",
    "id_tipo_grado",
    "carrera",
    "detall_grado",
    "fecha_consejo",
    "fecha_emision",
    "num_registro",
    "entidad",
    "pdf",
    "id_persona"];

     public function nivel_estudio(){

        return $this->belogsTo('App\NivelEstudio','id_nivel','id_nivel');

    }

    public function estudiosuperior(){

        return $this->belogsTo('App\EstudioSuperior','id_modalidad','id_modalidad');

    }

     public function tipo_estudio(){

        return $this->belogsTo('App\TipoEstudio','id_tipo_estudio','id_tipo_estudio');

    }

    public function otroestudio(){

        return $this->belogsTo('App\OtroEstudio','id_tipo_documento','id_tipo_documento');

    }

    public function tipo_grado(){
        return $this->belogsTo('App\TipoGrado','id_tipo_grado','id_tipo_grado');

    }
}
