<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Idioma;
use App\TipoIdioma;
use App\Habiente;


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
            $persona->ape_paterno = $request->apellPaterno;
            $persona->ape_materno = $request->apellMaterno;
            
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
