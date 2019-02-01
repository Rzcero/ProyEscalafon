<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipo_documento";
    protected $primaryKey = "id_tipo_documento";
    protected $fillable = ["id_tipo_documento","denominacion"];

    //Relacion 1 a Muchos con la tabla otros_estudios
    public function otroestudio(){

        return $this->hasMany('App\OtroEstudio','id_tipo_documento','id_tipo_documento');

    }

    //  1 tipo_documento puede estar contenido en muchos idiomas
    public function idioma(){

        return $this->hasMany("App\Idioma","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede tener muchos pagos
    public function pagos(){

        return $this->hasMany("App\Pago","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede estar contenido en muchas experiencias laborales
    public function experiencia_laboral(){

        return $this->hasMany("App\ExperienciaLaboral","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede estar contenido en muchos cargos desempeniados
    public function cargo_desempeniado(){

        return $this->hasMany("App\CargoDesempeniado","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede estar contenido en varios meritos
     public function merito(){

        return $this->hasMany("App\Merito","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede estar contenido en varios demeritos
     public function demerito(){

        return $this->hasMany("App\Demerito","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede estar contenido en varias tablas tipo licencias_vacaciones
     public function licencia_vacacion(){

        return $this->hasMany("App\LicenciaVacacion","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede estar contenido en varias tablas otros documentos
    public function otro_documento(){

        return $this->hasMany("App\OtroDocumento","id_tipo_documento","id_tipo_documento");

    }

    //  1 tipo_documento puede estar contenido en varias tablas tiempo servicio
    public function tiemposervicio(){

        return $this->hasMany("App\TiempoServicio","id_tipo_documento","id_tipo_documento");

    }

}
