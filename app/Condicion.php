<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = "condicion";
    protected $primaryKey = "id_condicion";
    protected $fillable = ["id_condicion",
    "descripcion"];

    //Relacion 1 a Muchos con la tabla administrativo
    public function administrativo(){

        return $this->hasMany('App/Administrativo','id_condicion','id_condicion');

    }
    
}
