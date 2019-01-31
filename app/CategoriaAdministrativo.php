<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaAdministrativo extends Model
{
    protected $table = "categoria_administrativo";
    protected $primaryKey = "id_categ_admi";
    protected $fillable = ["id_categ_admi",
    "descripcion"];
}
