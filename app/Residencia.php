<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residencia extends Model
{
    protected $table = "residencia";
    protected $primaryKey = "id_persona";
    protected $fillable = ["id_persona",
    "id_dpto","id_prov","id_dist"];

    public function departamento(){

        return $this->belongsTo("App\Departamento","id_dpto","id_dpto");

    }

    public function provincia(){

        return $this->belongsTo("App\Provincia","id_prov","id_prov");

    }

    public function distrito(){

        return $this->belongsTo("App\Distrito","id_dist","id_dist");

    }

}
