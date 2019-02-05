<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\EstudioBasico;

class EstudiosBasicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {
        return ("");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EstudiosBasicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return view('EstudiosBasicos.insert');
 
        $estudiobasico=new EstudioBasico;

        $estudiobasico->ie_primaria=$request->post('ie_primaria');
        $estudiobasico->anio_egreso_primaria=$request->anio_egreso_primaria;
        $estudiobasico->pais_primaria=$request->pais_primaria;
        $estudiobasico->ubi_primaria=$request->ubi_primaria;
        $estudiobasico->dep_primaria=$request->dep_primaria;
        $estudiobasico->prov_primaria=$request->prov_primaria;
        $estudiobasico->dist_primaria=$request->dist_primaria;
        
        $estudiobasico->ie_secundaria=$request->anio_egreso_secundaria;
        $estudiobasico->anio_egreso_secundaria=$request->anio_egreso_secundaria;
        $estudiobasico->pais_primaria=$request->pais_psecundaria;
        $estudiobasico->ubi_secundaria=$request->ubi_secundaria;
        $estudiobasico->dep_secundaria=$request->dep_secundaria;
        $estudiobasico->prov_secundaria=$request->prov_secundaria;
        $estudiobasico->dist_secundaria=$request->dist_secundaria;
      $estudiobasico-> save();

        /*
            class EstudioBasico extends Model
{


ie_primaria VARCHAR(100),
anio_egreso_primaria INT,
pdf_primaria VARCHAR(45),
pais_primaria VARCHAR(45),
ubi_primaria VARCHAR(45),
dep_primaria VARCHAR(45),
prov_primaria VARCHAR(45),
dist_primaria VARCHAR(45),

ie_secundaria VARCHAR(100),
anio_egreso_secundaria INT,
pdf_secundaria VARCHAR(45),
pais_secundaria VARCHAR(45),
ubi_secundaria VARCHAR(45),
dep_secundaria VARCHAR(45),
prov_secundaria VARCHAR(45),
dist_secundaria VARCHAR(45),

        */
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
         return view('EstudiosBasicos.update');
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
         return view('EstudiosBasicos.delete');
    }
}
