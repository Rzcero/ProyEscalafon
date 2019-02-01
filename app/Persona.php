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
    //  1 persona puede tener muchos idiomas
     public function idioma(){
        
        return $this->hasMany('App\Idioma','id_persona','id_persona');

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
   
    //  1 persona puede estar contenido en muchos categoria_regimen
     public function categoria_regimen(){

        return $this->hasMany("App\CategoriaRegimen","id_persona","id_persona");

    }
    //  1 persona puede estar contenido en muchos contratos
     public function contrato(){

        return $this->hasMany("App\Contrato","id_persona","id_persona");

    }

    //  1 persona puede tener en muchos pagos
     public function pagos(){

        return $this->hasMany("App\Pago","id_persona","id_persona");

    }

    //  1 persona puede tener en muchas experiencias laborales
     public function experiencia_laboral(){

        return $this->hasMany("App\ExperienciaLaboral","id_persona","id_persona");

    }

    //  1 persona puede tener en cargos desempeniados
     public function cargos_desempeniado(){

        return $this->hasMany("App\CargosDesempeniado","id_persona","id_persona");

    }

    //  1 persona puede tener muchos meritos
     public function merito(){

        return $this->hasMany("App\Merito","id_persona","id_persona");

    }

    //  1 persona puede tener muchos demeritos
     public function demerito(){

        return $this->hasMany("App\Demerito","id_persona","id_persona");

    }

     //  1 persona puede tener muchos licencias_vacaciones
     public function licencia_vacacion(){

        return $this->hasMany("App\LicenciaVacacion","id_persona","id_persona");

    }

       //  1 persona puede tener muchas partidas_defuncion
     public function partida_defuncion(){

        return $this->hasMany("App\PartidaDefuncion","id_persona","id_persona");

    }

    //  1 persona puede tener muchas tiempos de servicios
     public function tiempo_servicio(){

        return $this->hasMany("App\TiempoServicio","id_persona","id_persona");

    }

    //  1 persona puede tener muchas declaraciones juradas
     public function declaracion_jurada(){

        return $this->hasMany("App\DeclaracionJurada","id_persona","id_persona");

    }

    //  1 persona puede estar contenido en varias tablas otros documentos
     public function otro_documento(){

        return $this->hasMany("App\OtroDocumento","id_persona","id_persona");

    }

    //  1 persona puede tener varias producciones intelectuales
     public function produccion_intelectual(){

        return $this->hasMany("App\ProduccionIntelectual","id_persona","id_persona");

    }
}
