<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Idioma;
use App\TipoIdioma;
use App\Habiente;
use App\TipoDocIdentidad;
use App\EstadoCivil;
use App\TipoVia;
use App\TipoZona;


class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datos_personales.crear');
//        $idiomas = Idioma::all();
//        return view('datos_personales.index', compact('idiomas'));
        
    }
    
    //Para mostrarlo en el select de Tipo de Documento de Identidad
    public function listarTipoDocIdentidad()
    {
        
        $tipodocidentidad = TipoDocIdentidad::all();
        
        $matriz = array();
        
        foreach($tipodocidentidad as $tipoidentidad){
        
            $matriz[] = array('id' => $tipoidentidad->id_tipo_doc,
                              'nombre' => $tipoidentidad->denominacion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }
    
    //Para mostrarlo en el select de Estado civil
    public function listarEstadoCivil()
    {
        
        $estados = EstadoCivil::all();
        
        $matriz = array();
        
        foreach($estados as $estado){
        
            $matriz[] = array('id' => $estado->id_estado_civil,
                              'nombre' => $estado->denominacion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }
    
    //Para mostrarlo en el select de Tipo Via
    public function listarTipoVia()
    {
        
        $vias = TipoVia::all();
        
        $matriz = array();
        
        foreach($vias as $via){
        
            $matriz[] = array('id' => $via->id_tipo_via,
                              'nombre' => $via->denominacion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }
    
    //Para mostrarlo en el select de Tipo Zona
    public function listarTipoZona()
    {
        
        $zonas = TipoZona::all();
        
        $matriz = array();
        
        foreach($zonas as $zona){
        
            $matriz[] = array('id' => $zona->id_tipo_zona,
                              'nombre' => $zona->denominacion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }
    
    public function listarIdiomas()
    {
        
        $idiomas = Idioma::all();
        
        $matriz = array();
        
        foreach($idiomas as $idioma){
        
            $matriz[] = array('idioma' => $idioma->tipoidioma->nombre,
                              'dominio' => $idioma->dominio);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }
    
    //Para mostrarlo en el Modal
    public function listarTipoIdiomas()
    {
        
        $tipoidiomas = TipoIdioma::all();
        
        $matriz = array();
        
        foreach($tipoidiomas as $tipoidioma){
        
            $matriz[] = array('id' => $tipoidioma->id_tipo_idioma,
                              'idioma' => $tipoidioma->nombre);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    public function listarHabientes()
    {
        
        $habientes = Habiente::all();
        
        $matriz = array();
        
        foreach($habientes as $habiente){
        
            $matriz[] = array('parentesco' => $habiente->parentesco->denominacion,
                              'numDoc' => $habiente->num_doc_identidad,
                              'apellidoPaterno' => $habiente->ape_paterno,
                              'apellidoMaterno' => $habiente->ape_materno,
                              'nombres' => $habiente->nombres,
                              'fechaNacim' => $habiente->fecha_nacimiento);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datos_personales.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->ajax()){
            
            //Persona::create($request->all());
            $persona = new Persona;
            $persona->id_tipo_doc = $request->tipoDocIdent;
            $persona->num_doc_identidad = $request->numDocIdent;
            $persona->ape_paterno = $request->apellPaterno;
            $persona->ape_materno = $request->apellMaterno;
            $persona->nombres = $request->nombres;
            $persona->sexo = $request->sexo;
            $persona->fecha_nacimiento = $request->fecha;
            $persona->id_estado_civil = $request->estadoCivil;
            $persona->id_tipo_via = $request->via;
            $persona->id_tipo_zona = $request->zona;
            $persona->direccion = $request->direccion;
                        
            $persona->save();
            
//            return response()->json([
//                "mensaje" => $request->all()
//            ]);
            
        }
        // return view('datos_personales.insertar');
//        $persona = new Persona;
//
//        $persona->num_doc_identidad = $request->num_docIdentidad;
//        $persona->ape_paterno = $request->apellidoPaterno;
//        $persona->ape_materno = $request->apellidoMaterno;
//        $persona->nombres = $request->nomb;
//
//        $persona->save();
    
    }
    
    public function agregarIdioma(Request $request)
    {
        
        if($request->ajax()){
            
            $idioma = new Idioma;
            $idioma->entidad = $request->centro;
                        
            $idioma->save();
            
        }
     
    }
    
    
    public function storeIdioma(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $idiomas = Idioma::findOrFail($id);
//        return view("datos_personales.show",compact($idiomas));
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
//        return view('datos_personales.actualizar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        return view('datos_personales.eliminar');
    }
}
