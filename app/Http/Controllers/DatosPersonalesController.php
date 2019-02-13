<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosPersonalesController extends Controller
{
    public function index() {
        return "hola";
//        return view('datos_personales.crear');
    }

    public function create() {
        return view('datos_personales.crear');
    }

    public function insert() {
        return view('datos_personales.insertar');
    }

    public function update() {
        return view('datos_personales.actualizar');
    }

    public function delete() {
        return view('datos_personales.eliminar');
    }
}
