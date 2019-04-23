<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = "provincias";
    protected $primaryKey = "id_prov";
    protected $fillable = ["id_prov",
                           "id_dpto",
                           "nom_prov"];
    
    public function residencia(){

        return $this->hasMany('App\Residencia','id_prov','id_prov');

    }

    public function departamento(){

        return $this->belongsTo('App\Departamento', 'id_dpto', 'id_dpto');

    }
    
    public function distrito(){

        return $this->hasMany('App\Distrito','id_prov','id_prov');

    }
    
}
