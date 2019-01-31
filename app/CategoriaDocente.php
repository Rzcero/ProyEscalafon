<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaDocente extends Model
{
    protected $table = "categoria_docente";
    protected $primaryKey = "id_categ_doc";
    protected $fillable = ["id_categ_doc",
    "descripcion"];
}
