<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIdioma extends Model
{
    protected $table = "tipo_idioma";
    protected $primaryKey = "id_tipo_idioma";
    protected $fillable = ["id_tipo_idioma",
                           "nombre"];
    
	//Relacion 1 a muchos con la tabla Idioma    
    public function idioma(){

        return $this->hasMany('App\Idioma','id_tipo_idioma','id_tipo_idioma');

    }
     
}
