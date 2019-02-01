<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table = "parentesco";
    protected $primaryKey = "id_parentesco";
    protected $fillable = ["id_parentesco","denominacion"];

    //Relacion 1 a Muchos con la tabla habiente
    public function habiente(){

        return $this->hasMany('App\Habiente','id_parentesco','id_parentesco');

    }

}
