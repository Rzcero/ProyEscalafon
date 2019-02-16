<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelEstudio;
use App\EstudioBasico;
use App\EstudioSuperior;
use App\OtroEstudio;
use App\Modalidad;
use App\TipoEstudio;
use App\TipoDocumento;

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

 public function listarmodalidad(){
            
         $modalidades = Modalidad::all();
        
        $matriz = array();
        
        foreach($modalidades as $modalidad){
        
            $matriz[] = array('id_modalidad' => $modalidad->id_modalidad,  // 'id_modalidad' -> se puede coloar diferente al nombre de la tabla 
                              'nombre_modalidad' => $modalidad->nombre);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
}

public function listartipoestudios(){
            
         $tiposestudios = TipoEstudio::all();
        
        $matriz = array();
        
        foreach($tiposestudios as $tipoestudio){
        
            $matriz[] = array('id_tipo_estudio' => $tipoestudio->id_tipo_estudio,  // 'id_modalidad' -> se puede coloar diferente al nombre de la tabla -> jala a mainestudios id_tipo_estudio
                              'denominacion' => $tipoestudio->denominacion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
}

public function listartipodocumentos(){
            
         $tipodocumentos = TipoDocumento::all();
        
        $matriz = array();
        
        foreach($tipodocumentos as $tipodocumento){
        
            $matriz[] = array('id_tipo_documento' => $tipodocumento->id_tipo_documento,  // 'id_modalidad' -> se puede coloar diferente al nombre de la tabla 
                              'denominacion' => $tipodocumento->denominacion);
        
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
        $estudio_basico->pais_primaria=$request->pais_primaria;
        $estudio_basico->ubi_primaria=$request->ubi_primaria;
        $estudio_basico->dep_primaria=$request->dep_primaria;
        $estudio_basico->prov_primaria=$request->prov_primaria;
        $estudio_basico->dist_primaria=$request->dist_primaria;
        
        $estudio_basico->ie_secundaria=$request->ie_secundaria;
        $estudio_basico->anio_egreso_secundaria=$request->anio_egreso_secundaria;
        $estudio_basico->pais_secundaria=$request->pais_secundaria;
        $estudio_basico->ubi_secundaria=$request->ubi_secundaria;
        $estudio_basico->dep_secundaria=$request->dep_secundaria;
        $estudio_basico->prov_secundaria=$request->prov_secundaria;
        $estudio_basico->dist_secundaria=$request->dist_secundaria;
           
           $estudio_basico->save();
           
//            return response()->json([
//                "mensaje" => $request->all()
//            ]);
           
       }

    }

     public function guardar_otros_estudios(Request $request){


 if($request->ajax()){
           
           
        $otros_estudio = new OtroEstudio;
        $otros_estudio->id_tipo_estudio = $request->id_tipo_estudio;
        $otros_estudio->nombre_estudio = $request->nombre_estudio;
        $otros_estudio->participacion=$request->participacion;
        $otros_estudio->centro_estudio=$request->centro_estudio;
        $otros_estudio->id_tipo_documento=$request->id_tipo_documento;
        $otros_estudio->fecha_inicio=$request->fecha_inicio;
        $otros_estudio->fecha_termino=$request->fecha_termino;
        $otros_estudio->num_horas=$request->num_horas;
        $otros_estudio->num_creditos=$request->num_creditos;

           
           $otros_estudio->save();
           
           
       }

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
