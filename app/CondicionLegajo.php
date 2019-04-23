<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondicionLegajo extends Model
{
    protected $table = "condicion_legajo";
    protected $primaryKey = "id_condi_leg";
    protected $fillable = ["id_condi_leg",
                           "nombre"];
    
    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_condi_leg','id_condi_leg');

    }
     
}
