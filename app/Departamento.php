<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "departamentos";
    protected $primaryKey = "id_dpto";
    protected $fillable = ["id_dpto",
                           "nom_dpto"];
    
    public function residencia(){

        return $this->hasMany('App\Residencia','id_dpto','id_dpto');

    }

    public function provincia(){

        return $this->hasMany('App\Provincia','id_dpto','id_dpto');

    }
    
}
