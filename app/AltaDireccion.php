<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AltaDireccion extends Model
{
    protected $table = "alta_direccion";
    protected $primaryKey = "id_facultad";
    protected $fillable = ["id_facultad","nombre"];

     public function contrato(){

        return $this->hasMany("App\AltaDireccion","id_facultad","id_facultad");

    }
}
