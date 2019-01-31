<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = "docente";
    protected $primaryKey = "id_persona";
    protected $fillable = ["id_persona","id_categ_doc","id_regimen"];

}
