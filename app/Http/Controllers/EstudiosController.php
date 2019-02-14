<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelEstudio;
use App\EstudioBasico;
use App\EstudioSuperior;
use App\OtroEstudio;



class EstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Estudios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function listarnivel(){
            
         $niveles = NivelEstudio::all();
        
        $matriz = array();
        
        foreach($niveles as $nivelestudio){
        
            $matriz[] = array('id_nivel' => $nivelestudio->id_nivel,  // 'id_nivel' -> se puede coloar diferente al nombre de la tabla 
                              'nombre_nivel' => $nivelestudio->nombre);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
}

    public function store(Request $request)
    {

            if($request->ajax()){
           
           //Persona::create($request->all());
           $estudio_basico = new EstudioBasico;
           $estudio_basico->ie_primaria = $request->ie_primaria;
           $estudio_basico->anio_egreso_primaria = $request->anio_egreso_primaria;
           
           $estudio_basico->save();
           
//            return response()->json([
//                "mensaje" => $request->all()
//            ]);
           
       }


            /* $estudiobasico=new EstudioBasico;

        $estudiobasico->ie_primaria=$request->ie_primaria;
        $estudiobasico->anio_egreso_primaria=$request->anio_egreso_primaria;
        $estudiobasico->pais_primaria=$request->pais_primaria;
        $estudiobasico->ubi_primaria=$request->ubi_primaria;
        $estudiobasico->dep_primaria=$request->dep_primaria;
        $estudiobasico->prov_primaria=$request->prov_primaria;
        $estudiobasico->dist_primaria=$request->dist_primaria;
        
        $estudiobasico->ie_secundaria=$request->ie_secundaria;
        $estudiobasico->anio_egreso_secundaria=$request->anio_egreso_secundaria;
        $estudiobasico->pais_secundaria=$request->pais_secundaria;
        $estudiobasico->ubi_secundaria=$request->ubi_secundaria;
        $estudiobasico->dep_secundaria=$request->dep_secundaria;
        $estudiobasico->prov_secundaria=$request->prov_secundaria;
        $estudiobasico->dist_secundaria=$request->dist_secundaria;
      $estudiobasico-> save();*/
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
