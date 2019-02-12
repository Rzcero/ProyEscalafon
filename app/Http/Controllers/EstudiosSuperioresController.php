<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\EstudioSuperior;

class EstudiosSuperioresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $nivel=NivelEstudio::all();  // se hizo para pruebas
        return view("EstudiosBasicos.create",compact("nivel"));
        //return view("EstudiosSuperiores.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EstudiosSuperiores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $estudiosuperior=new EstudioSuperior;


        $estudio_superior->id_nivel=$request->id_nivel;
        $estudio_superior->id_estado=$request->id_estado;
        $estudio_superior->id_modalidad=$request->id_modalidad;
        $estudio_superior->ciclo=$request->ciclo;
        $estudio_superior->centro_estudios=$request->centro_estudios;
        $estudio_superior->id_tipo_grado=$request->id_tipo_grado;
       
        /*
        $estudio_superior->ie_secundaria=$request->ie_secundaria;
        $estudio_superior->anio_egreso_secundaria=$request->anio_egreso_secundaria;
        $estudio_superior->pais_secundaria=$request->pais_secundaria;
        $estudio_superior->ubi_secundaria=$request->ubi_secundaria;
        $estudio_superior->dep_secundaria=$request->dep_secundaria;
        $estudio_superior->prov_secundaria=$request->prov_secundaria;
        $estudio_superior->dist_secundaria=$request->dist_secundaria;*/
      $estudiobasico-> save();

        /*protected $fillable = ["id_estudios_sup",
    "id_nivel",
    "id_estado",
    "id_modalidad",
    "ciclo",
    "centro_estudios",
    "id_tipo_grado",
    "carrera",
    "detall_grado",
    "fecha_consejo",
    "fecha_emision",
    "num_registro",
    "entidad",
    "pdf",
    "id_persona"];*/


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
