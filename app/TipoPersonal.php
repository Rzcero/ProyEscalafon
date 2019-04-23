<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPersonal extends Model
{
    protected $table = "tipo_personal";
    protected $primaryKey = "id_tipo_personal";
    protected $fillable = ["id_tipo_personal",
                           "nombre"];
    
    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_tipo_personal','id_tipo_personal');

    }
     
}