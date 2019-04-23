<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    protected $table = "nacionalidad";
    protected $primaryKey = "id_persona";
    protected $fillable = ["id_persona","id_tipo_nac"];

    public function tiponacionalidad(){

        return $this->belongsTo("App\TipoNacionalidad","id_tipo_nac","id_tipo_nac");

    }

}
