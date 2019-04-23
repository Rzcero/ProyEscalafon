<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class ModulosController extends Controller
{
    
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function editar($id)
    {   
        $persona = Persona::find($id);
        return view('modulos.inicio', compact('persona'));
    
    }


}
