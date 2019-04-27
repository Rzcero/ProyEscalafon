<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumentoPrincipal extends Model
{
    protected $table = "tipo_documento_principal";
    protected $primaryKey = "id_tipo_docPrincipal";
    protected $fillable = ["id_tipo_docPrincipal",
                           "denominacion"];
    
    //Relacion 1 a muchos con la tabla cargos_desempeniados
    public function cargo_desempeniado(){

        return $this->hasMany('App\CargoDesempeniado','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }

    //Relacion 1 a muchos con la tabla demeritos
    public function demerito(){

        return $this->hasMany('App\Demerito','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }

    //Relacion 1 a muchos con la tabla meritos
    public function merito(){

        return $this->hasMany('App\Merito','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }

    //Relacion 1 a muchos con la tabla pagos
    public function pago(){

        return $this->hasMany('App\Pago','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }

    //Relacion 1 a muchos con la tabla experiencia_laboral
    public function experiencia_laboral(){

        return $this->hasMany('App\ExperienciaLaboral','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }

    //Relacion 1 a muchos con la tabla licencia_vacaciones
    public function licencia_vacacion(){

        return $this->hasMany('App\LicenciaVacacion','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }

    //Relacion 1 a muchos con la tabla tiempo_servicio
    public function tiempo_servicio(){

        return $this->hasMany('App\TiempoServicio','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }

    //Relacion 1 a muchos con la tabla otros_documentos
    public function otro_documento(){

        return $this->hasMany('App\OtroDocumento','id_tipo_docPrincipal','id_tipo_docPrincipal');

    }
     
}