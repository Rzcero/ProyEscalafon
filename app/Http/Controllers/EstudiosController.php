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
use App\TipoMedio;
use App\Medio;
use App\ProduccionIntelectual;
use App\TipoGrado;

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

public function listartipomedio(){
            
         $tipomedios = TipoMedio::all();
        
        $matriz = array();
        
        foreach($tipomedios as $tipomedio){
        
            $matriz[] = array('id_tipo_medio' => $tipomedio->id_tipo_medio,  // 
                              'descripcion' => $tipomedio->descripcion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
}

  //Para mostrarlo en el Modal tipogrado
    public function listartipogrados()
    {
        
        $tipogrados= TipoGrado::all();
        
        $matriz = array();
        
        foreach($tipogrados as $tipogrado){
        
            $matriz[] = array('id_grado' => $tipogrado->id_tipo_grado,
                              'tipogrado' => $tipogrado->nombre);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }


public function listarmedio(){
            
         $medios = Medio::all();
        
        $matriz = array();
        
        foreach($medios as $medio){
        
            $matriz[] = array('id_medio' => $medio->id_medio,  //
                              'descripcion' => $medio->descripcion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
}

public function listarotrosestudios(){

$listar_otros_estudios = OtroEstudio::all();

 $matriz = array();
        
        foreach($listar_otros_estudios as $lista_otro_estudio){
        
            $matriz[] = array('id_otro_estudio'=> $lista_otro_estudio->id_otro_estudio,
                                'tipo' => $lista_otro_estudio->tipootroestudio->denominacion ,  //  tipo, denominacion,horas,creditos,  // opciones
                              'denominacion' => $lista_otro_estudio->nombre_estudio,
                             'hora' => $lista_otro_estudio->num_horas,
                             'credito' => $lista_otro_estudio->num_creditos
                         );
        }
        return response()->json([
              
            $matriz
             
        ]);

}



public function listarestudiossuperiores(){

$listar_estudios_superiores = EstudioSuperior::all();

 $matriz = array();
        
        foreach($listar_estudios_superiores as $lista_estudio_superior){
        
            $matriz[] = array('id_estudios_sup' => $lista_estudio_superior->id_estudios_sup, 
                              'tipo' => $lista_estudio_superior->tipo_grado->nombre , //  tipo, denominacion,horas,creditos,  // opciones
                              'centro_estudios' => $lista_estudio_superior->centro_estudios,
                              'nivel' => $lista_estudio_superior->nivel_estudio->nombre
                         );
        }
        return response()->json([
            $matriz
        ]);

}


public function listarproduccion(){
$listar_producciones = ProduccionIntelectual::all();
 $matriz = array();
        
        foreach($listar_producciones as $listar_produccion){
        
            $matriz[] = array('id_prod_intele' => $listar_produccion->id_prod_intele, 
                              'medio' => $listar_produccion->medio_produccion_intelectual->descripcion, //  estos 3 se mandan a mainestudios
                              'nombre_publicacion' => $listar_produccion->nombre,
                             'anio' => $listar_produccion->fecha_publicacion
                         );
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

 public function guardar_estudios_superiores(Request $request){ // despues del @


 if($request->ajax()){
           
           
        $estudio_superior = new EstudioSuperior;
        $estudio_superior->id_nivel = $request->id_nivel;   //  $estudio_superior->id_nivel(base) = $request->id_nivel(main);
        $estudio_superior->id_estado = $request->id_estado;
        $estudio_superior->id_modalidad=$request->id_modalidad;
        //$estudio_superior->ciclo=$request->ciclo;
        $estudio_superior->centro_estudios=$request->centro_estudios;
        $estudio_superior->id_tipo_grado=$request->id_tipo_grado;
        $estudio_superior->carrera=$request->carrera;
        $estudio_superior->detall_grado=$request->detall_grado;
        $estudio_superior->fecha_consejo=$request->fecha_consejo;
        $estudio_superior->fecha_emision=$request->fecha_emision;
        $estudio_superior->num_registro=$request->num_registro;
        $estudio_superior->entidad=$request->entidad;
        $estudio_superior->num_colegiatura=$request->num_colegiatura;
        $estudio_superior->nom_colegio=$request->nom_colegio;



           $estudio_superior->save();
           return response()->json(["mensaje"=>"creado"]);
           
           
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
           return response()->json(["mensaje"=>"creado"]);
           
           
       }

     }



        public function guardar_produccion_intelectual(Request $request){

 if($request->ajax()){    
        $produccion_intelectual = new ProduccionIntelectual;
        $produccion_intelectual->id_tipo_medio = $request->id_tipo_medio;
        $produccion_intelectual->id_medio = $request->id_medio;
        $produccion_intelectual->nombre=$request->nombre;
        $produccion_intelectual->fecha_publicacion=$request->fecha_publicacion;
        
           $produccion_intelectual->save();
            return response()->json(["mensaje"=>"creado"]);
           
           
       }

     }

// public function editar_modal_est_sup(Request $request){
//        }

        public function editar_modal_prod_intel(Request $request){

//return $request->all();
            $editarmodal_prod_intel = ProduccionIntelectual::where('id_prod_intele',$request->id)->get();  //id d ela base de datos(id_prod_intele)
            $matriz = array();

          foreach($editarmodal_prod_intel as $editar_prod_intel){
        
            $matriz[] = array('id' => $editar_prod_intel->id_prod_intele, //id_otro_estudio -> se trae de la base de datos
                              'idtipomedio' => $editar_prod_intel->id_tipo_medio,
                              'idmedio' => $editar_prod_intel->id_medio,
                              'nombre' => $editar_prod_intel->nombre,
                              'fechapublica' => $editar_prod_intel->fecha_publicacion
                         
                          );
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
        }



     public function editar_modal_otros_estudios(Request $request){
        $editarmodal_otros_estudios = OtroEstudio::where('id_otro_estudio',$request->id)->get();  //id d ela base de datos(id_otro_estudio)
        $matriz = array();
        
        foreach($editarmodal_otros_estudios as $editarmodal_otro_Estudio){
        
            $matriz[] = array('id' => $editarmodal_otro_Estudio->id_otro_estudio, //id_otro_estudio -> se trae de la base de datos
                              'tipoestudio' => $editarmodal_otro_Estudio->id_tipo_estudio,
                              'nombreestudio' => $editarmodal_otro_Estudio->nombre_estudio,
                              'centroestudio' => $editarmodal_otro_Estudio->centro_estudio,
                              'participacion' => $editarmodal_otro_Estudio->participacion,
                              'fechainicio' => $editarmodal_otro_Estudio->fecha_inicio,
                              'fechatermino' => $editarmodal_otro_Estudio->fecha_termino,
                              'numerohoras' => $editarmodal_otro_Estudio->num_horas,
                              'numerocreditos' => $editarmodal_otro_Estudio->num_creditos,
                              'tipodocumento' => $editarmodal_otro_Estudio->id_tipo_documento
                              
                          );
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }


     public function editar_modal_estu_supe(Request $request){
        $editarmodal_est_supe = EstudioSuperior::where('id_estudios_sup',$request->id)->get();  //id d ela base de datos(id_otro_estudio)
        $matriz = array();
        
        foreach($editarmodal_est_supe as $editarmodal_superiores){
        
            $matriz[] = array('id' => $editarmodal_superiores->id_estudios_sup, //id_otro_estudio -> se trae de la base de datos
                              'tiponivel' => $editarmodal_superiores->id_nivel,
                              'tipoestado' => $editarmodal_superiores->id_estado,
                              'modalidad' => $editarmodal_superiores->id_modalidad,
                              //'participacion' => $editarmodal_superiores->ciclo,
                              'centroestudio' => $editarmodal_superiores->centro_estudios,
                              'tipogrado' => $editarmodal_superiores->id_tipo_grado,
                              'carrera' => $editarmodal_superiores->carrera,
                              'detallegrado' => $editarmodal_superiores->detall_grado,
                              'fechaconsejo' => $editarmodal_superiores->fecha_consejo,
                              'fechaemision' => $editarmodal_superiores->fecha_emision,
                              'numeroregistro' => $editarmodal_superiores->num_registro,
                              'entidad' => $editarmodal_superiores->entidad,
                              'numerocolegiatura' => $editarmodal_superiores->num_colegiatura,
                              'nombrecolegio' => $editarmodal_superiores->nom_colegio

                              
                          );
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }


    //Para Ver Otros Estudios  al pulsar el boton ver
    public function ver_otros_estudios(Request $request)
    {
        
        $verOtrosEstudios = OtroEstudio::where('id_otro_estudio',$request->id)->get(); // id lo jala de la base de datos
        
        $matriz = array();
        
        foreach($verOtrosEstudios as $verOtroEstudio){
        
            $matriz[] = array('tipoestudio' => $verOtroEstudio->tipootroestudio->denominacion,
                              'nombreestudio' => $verOtroEstudio->nombre_estudio,
                              'centroestudio' => $verOtroEstudio->centro_estudio,
                              'participacion' => $verOtroEstudio->participacion,
                              'fechainicio' => $verOtroEstudio->fecha_inicio,
                              'fechatermino' => $verOtroEstudio->fecha_termino,
                              'numerohoras' => $verOtroEstudio->num_horas,
                              'numerocreditos' => $verOtroEstudio->num_creditos,
                              'tipodocumento' => $verOtroEstudio->tipootrodocumento->denominacion);
        

        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }


//Para Ver Produccion intelectual  al pulsar el boton ver
    public function ver_produccion_intelecual(Request $request)
    {
        $verProInt = ProduccionIntelectual::where('id_prod_intele',$request->id)->get(); // id lo jala de la base de datos
        
        $matriz = array();
        
        foreach($verProInt as $verProduccion){
        
            $matriz[] = array('tipomedio' => $verProduccion->produccion_intelectual1->descripcion,             
                               'medio' => $verProduccion->medio_produccion_intelectual->descripcion,
                              'nombre' => $verProduccion->nombre,
                              'fechapu' => $verProduccion->fecha_publicacion);
        

        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para Ver Estudio Superior  al pulsar el boton ver
    public function ver_EstudiosSuperiores(Request $request)
    {
        $verEstudSuperior = EstudioSuperior::where('id_estudios_sup',$request->id)->get(); // id lo jala de la base de datos
        
        $matriz = array();
        
        foreach($verEstudSuperior as $verSuperior){
        
            $matriz[] = array('tiponivel' => $verSuperior->nivel_estudio->nombre,
                              'tiposestado' => $verSuperior->tipo_estado->denominacion,             
                               'modalidad' => $verSuperior->modalidad->nombre,
                              'centroestudio' => $verSuperior->centro_estudios,
                              'tipogrado' => $verSuperior->tipo_grado->nombre,
                              'carrera' => $verSuperior->carrera,
                              'detallegrado' => $verSuperior->detall_grado,
                              'fechaconsejo' => $verSuperior->fecha_consejo,
                              'fechaemision' => $verSuperior->fecha_emision,
                              'numeroregistro' => $verSuperior->num_registro,
                              'entidad' => $verSuperior->entidad,
                              'numerocolegiatura' => $verSuperior->num_colegiatura,
                              'nombrecolegio' => $verSuperior->nom_colegio);

        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }



    public function destroyOTrosEStudios(Request $request, $id)
    {
                
        if($request->ajax()){
            
            $borrar_otro_estudio = OtroEstudio::find($id);
            $borrar_otro_estudio->delete();
            
            return response()->json([

            ]);
            
        }
    }

     public function destroyProduccionIntelectual(Request $request, $id)
    {
                
        if($request->ajax()){
            
            $borrar_Produccion = ProduccionIntelectual::find($id);
            $borrar_Produccion->delete();
            
            return response()->json([

            ]);
            
        }
    }

      public function destroyEstudiosSuperiores(Request $request, $id)
    {
                
        if($request->ajax()){
            
            $borrar_EstuSuperior = EstudioSuperior::find($id);
            $borrar_EstuSuperior->delete();
            
            return response()->json([

            ]);
            
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
        //se utilizar par acualizar

        if($request->ajax()){

        $otros_estudio = OtroEstudio::find($id);
        $otros_estudio->update($request->all());

            return response()->json([

]);

}
    }


public function updateProduccionIntelectual(Request $request, $id)
    {
        //se utilizar par acualizar

        if($request->ajax()){

        $prod_inte = ProduccionIntelectual::find($id);
        $prod_inte->update($request->all());

            return response()->json([

]);

}
    }


    public function updateEstudiosSuperiores(Request $request, $id)
    {
        //se utilizar par acualizar
//return $request->all()
        if($request->ajax()){

        $est_supe = EstudioSuperior::find($id);
        $est_supe->update($request->all());

            return response()->json([

]);

}
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
