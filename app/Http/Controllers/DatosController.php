<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Idioma;
use App\TipoIdioma;
use App\TipoDocumento;
use App\Habiente;
use App\TipoDocIdentidad;
use App\EstadoCivil;
use App\TipoVia;
use App\TipoZona;
use App\Departamento;
use App\Provincia;
use App\Distrito;



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
        
    }
    
    //para listar Ubigeo
    public function listarDepartamentoUbigeo()
    {
        
        $departamentos = Departamento::all();
        
        $matriz = array();
        
        foreach($departamentos as $departamento){
        
            $matriz[] = array('id' => $departamento->id_dpto,
                              'nombre' => $departamento->nom_dpto);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
        
    }
    
    public function listarProvinciaUbigeo(Request $request)
    {
        
        $provincias = Provincia::where('id_dpto',$request->idDpto)->get();
        
        $matriz = array();
        
        foreach($provincias as $provincia){
        
            $matriz[] = array('id' => $provincia->id_prov,
                              'nombre' => $provincia->nom_prov,
                              'ubi' => $provincia->departamento->ubi_dpto);
        
        }
              
        return response()->json([
              
            $matriz
             
        ]);
        
    }
    
    public function listarDistritoUbigeo(Request $request)
    {
        
        $distritos = Distrito::where('id_prov',$request->idProv)->get();
        
        $matriz = array();
        
        foreach($distritos as $distrito){
        
            $matriz[] = array('id' => $distrito->id_dist,
                              'nombre' => $distrito->nom_dist,
                              'ubi' => $distrito->provincia->ubi_prov);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
        
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
        
            $matriz[] = array('id' => $idioma->id_idioma,
                              'idioma' => $idioma->tipoidioma->nombre,
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

    //Para mostrarlo en el Modal
    public function listarTipoDocumento()
    {
        
        $tipodocumentos = TipoDocumento::all();
        
        $matriz = array();
        
        foreach($tipodocumentos as $tipodocumento){
        
            $matriz[] = array('id' => $tipodocumento->id_tipo_documento,
                              'tipoDoc' => $tipodocumento->denominacion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }








    //Para editar el Modal Idioma
    public function editarIdioma(Request $request)
    {
        
        $editarIdiomas = Idioma::where('id_idioma',$request->id)->get();
        
        $matriz = array();
        
        foreach($editarIdiomas as $editarIdioma){
        
            $matriz[] = array('id' => $editarIdioma->id_idioma,
                              'idioma' => $editarIdioma->id_tipo_idioma,
                              'dominio' => $editarIdioma->dominio,
                              'entidad' => $editarIdioma->entidad,
                              'tipo_documento' => $editarIdioma->id_tipo_documento,
                              'horas' => $editarIdioma->num_horas,
                              'creditos' => $editarIdioma->num_creditos);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para Ver los Idiomas al pulsar el boton ver
    public function verIdioma(Request $request)
    {
        
        $verIdioma = Idioma::where('id_idioma',$request->id)->get();
        
        $matriz = array();
        
        foreach($verIdioma as $ver){
        
            $matriz[] = array('idioma' => $ver->tipoidioma->nombre,
                              'dominio' => $ver->dominio,
                              'entidad' => $ver->entidad,
                              'tipo_documento' => $ver->tipodocumento->denominacion,
                              'horas' => $ver->num_horas,
                              'creditos' => $ver->num_creditos);
        
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
            $idioma->id_tipo_idioma = $request->idioma;
            $idioma->dominio = $request->dominio;
            $idioma->entidad = $request->centro;
            $idioma->id_tipo_documento = $request->tipo_documento;
            $idioma->num_horas = $request->horas;
            $idioma->num_creditos = $request->creditos;
                        
            $idioma->save();
            
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
        
        if($request->ajax()){

            $idioma = Idioma::find($id);
            $idioma->update($request->all());
            
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
            
    public function destroyIdioma(Request $request, $id)
    {
                
        if($request->ajax()){
            
            $borrar_idioma = Idioma::find($id);
            $borrar_idioma->delete();
            
            return response()->json([

            ]);
            
        }
    }
    
    public function destroy($id)
    {
//        return view('datos_personales.eliminar');
    }
}
