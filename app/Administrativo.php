<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    protected $table = "administrativo";
    protected $primaryKey = "id_persona";
    protected $fillable = ["id_persona",
    "id_categ_admi","id_condicion"];
}
