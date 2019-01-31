<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEmpleado extends Model
{
    protected $table = "tipo_empleado";
    protected $primaryKey = "id_tipo_emp";
    protected $fillable = ["id_tipo_emp","nombre_tipo_emp"];

    //Relacion 1 a muchos con la tabla empleado
    public function empleado(){

        return $this->hasMany('App\Empleado','id_tipo_emp','id_tipo_emp');

    }
}
