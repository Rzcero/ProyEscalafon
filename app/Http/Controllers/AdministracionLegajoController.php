<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePersonasRequest;
use App\Persona;
use App\TipoLegajo;
use App\TipoPersonal;
use App\CondicionLegajo;
use App\Administrativo;
use App\CategoriaAdministrativo;
use App\Condicion;
use App\Docente;
use App\CategoriaDocente;
use App\Regimen;

class AdministracionLegajoController extends Controller
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
    public function admLegajo(Request $request)
    {
        //return view('administLegajo');
        $personas = Persona::orderBy('id_persona','DESC')->paginate(4);
        return view('administLegajo', compact('personas'));
    }

    //Metodo hace una busqueda por tipo de legajo
    public function busquedaPorTipoLegajo(Request $request) {

        $tipo = $request->get('t_legajo');
        
        $personas = Persona::orderBy('id_persona','DESC')->tiplegajo($tipo)->get();

        $matriz = array();
        
        foreach($personas as $persona){
        
             $matriz[] = array('t' => $persona->tipodoc_identidad->abreviatura,
                               'n' => $persona->num_doc_identidad,
                               'apePaterno' => $persona->ape_paterno,
                               'apeMaterno' => $persona->ape_materno,
                               'nomb' => $persona->nombres,
                               'tipopersonal' => $persona->tipopersonal->nombre,
                               'tipoLegajo' => $persona->tipolegajo->nombre);
        
        }
            
        return response()->json([
              
             $matriz
             
        ]);

    }

    //Metodo hace una busqueda por tipo de legajo
    public function busquedaPorPersonalCondicion(Request $request) {

        $tipoPers = $request->get('pers');
        $cond = $request->get('condi');
        
        $personas = Persona::orderBy('id_persona','DESC')->tipopersonal($tipoPers)->condicionlegajo($cond)->get();

        $matriz = array();
        
        foreach($personas as $persona){
        
             $matriz[] = array('t' => $persona->tipodoc_identidad->abreviatura,
                               'n' => $persona->num_doc_identidad,
                               'apePaterno' => $persona->ape_paterno,
                               'apeMaterno' => $persona->ape_materno,
                               'nomb' => $persona->nombres,
                               'tipopersonal' => $persona->tipo_personal->nombre,
                               'tipoLegajo' => $persona->tipolegajo->nombre);
        
        }
            
        return response()->json([
              
             $matriz
             
        ]);

    }

    //Metodo hace una busqueda por nombres
    public function busquedaPorNombres(Request $request) {

        $apellidoPaterno = $request->get('paterno');
        $apellidoMaterno = $request->get('materno');
        $nombres = $request->get('nombres');

        $personas = Persona::orderBy('id_persona','DESC')->paterno($apellidoPaterno)->materno($apellidoMaterno)->nombres($nombres)->get();

        $matriz = array();
        
        foreach($personas as $persona){
        
             $matriz[] = array('t' => $persona->tipodoc_identidad->abreviatura,
                               'n' => $persona->num_doc_identidad,
                               'apePaterno' => $persona->ape_paterno,
                               'apeMaterno' => $persona->ape_materno,
                               'nomb' => $persona->nombres,
                               'tipopersonal' => $persona->tipopersonal->nombre,
                               'tipoLegajo' => $persona->tipolegajo->nombre);
        
        }
            
        return response()->json([
              
             $matriz
             
        ]);

    }

    //Metodo hace una busqueda por documento de identidad
    public function busquedaPorDocIdentidad(Request $request) {

        $tipoDoc = $request->get('docIdentidad');
        $numero = $request->get('numero');

        $personas = Persona::orderBy('id_persona','DESC')->documentoidentidad($tipoDoc)->numero($numero)->get();
        
        $matriz = array();
        
        foreach($personas as $persona){
        
             $matriz[] = array('t' => $persona->tipodoc_identidad->abreviatura,
                               'n' => $persona->num_doc_identidad,
                               'apePaterno' => $persona->ape_paterno,
                               'apeMaterno' => $persona->ape_materno,
                               'nomb' => $persona->nombres,
                               'tipopersonal' => $persona->tipopersonal->nombre,
                               'tipoLegajo' => $persona->tipolegajo->nombre);
        
        }
            
        return response()->json([
              
             $matriz
             
        ]);
        
    }

    //Para mostrarlo en el select de Tipo de Legajo
    public function listarTipoLegajo()
    {
        
        $tipoLegajos = TipoLegajo::all();
        
        $matriz = array();
        
        foreach($tipoLegajos as $tipolegajo){
        
            $matriz[] = array('id' => $tipolegajo->id_tipo_legajo,
                              'nombre' => $tipolegajo->nombre);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para mostrarlo en el select de tipo de personal
    public function listarTipoPersonal()
    {
        
        $tiposPersonales = TipoPersonal::all();
        
        $matriz = array();
        
        foreach($tiposPersonales as $tipoPersonal){
        
            $matriz[] = array('id' => $tipoPersonal->id_tipo_personal,
                              'nombre' => $tipoPersonal->nombre);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para mostrarlo en el select de condicion de legajo
    public function listarCondicionLegajo()
    {
        
        $condicion = CondicionLegajo::all();
        
        $matriz = array();
        
        foreach($condicion as $condi){
        
            $matriz[] = array('id' => $condi->id_condi_leg,
                              'nombre' => $condi->nombre);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para mostrarlo en el select de condicion del administrativo
    public function listarCondicion()
    {
        
        $condicion = Condicion::all();
        
        $matriz = array();
        
        foreach($condicion as $condi){
        
            $matriz[] = array('id' => $condi->id_condicion,
                              'nombre' => $condi->descripcion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para mostrarlo en el select de grupo ocupacional(categoria) del administrativo
    public function listarGrupo()
    {
        
        $grupos = CategoriaAdministrativo::all();
        
        $matriz = array();
        
        foreach($grupos as $grupo){
        
            $matriz[] = array('id' => $grupo->id_categ_admi,
                              'nombre' => $grupo->descripcion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para mostrarlo en el select de categoria del docente
    public function listarCategoria()
    {
        
        $categorias = CategoriaDocente::all();
        
        $matriz = array();
        
        foreach($categorias as $categoria){
        
            $matriz[] = array('id' => $categoria->id_categ_doc,
                              'nombre' => $categoria->descripcion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //Para mostrarlo en el select de Regimen del docente
    public function listarRegimen()
    {
        
        $regimen = Regimen::all();
        
        $matriz = array();
          
        foreach($regimen as $regi){
        
            $matriz[] = array('id' => $regi->id_regimen,
                              'nombre' => $regi->descripcion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePersonasRequest $request)
    {
        // return $request->file('foto_trabajador');
        // if($request->ajax()){
            
        //     //Persona::create($request->all());
        $persona = new Persona;

        //si del formulario estamos recibiendo un archivo

        if ($request->hasFile('foto_trabajador')) {
            
            $ruta_temporal = $request->file('foto_trabajador');

            $nombre_foto = time().$ruta_temporal->getClientOriginalName();

            //muevo la foto de la ruta temporal hacia la carpeta public del servidor
            $ruta_temporal->move(public_path().'/images/',$nombre_foto);

            $persona->foto = $nombre_foto;
            
        }

        $persona->id_tipo_doc = $request->t_docIdent;
        $persona->num_doc_identidad = $request->n_doc;
        $persona->ape_paterno = $request->ape_pat;
        $persona->ape_materno = $request->ape_mat;
        $persona->nombres = $request->nomb;
        $persona->id_tipo_personal = $request->t_personal;
        $persona->id_tipo_legajo = $request->t_legajo;
                                
        $persona->save();
        
        if ($request->t_personal == 1) {
            
            //busco a la persona por el numero de documento de identidad
            $adminis = Persona::where('num_doc_identidad',$request->n_doc)->get();
            $id_personal = $adminis[0]->id_persona;
            
            //luego creo al docente
            $administrativo = new Administrativo();

            $administrativo->id_persona = $id_personal;
            $administrativo->id_categ_admi = $request->selec_grupo;
            $administrativo->id_condicion = $request->selec_condi;
            $administrativo->save();

        } elseif($request->t_personal == 2) {
            
            $docen = Persona::where('num_doc_identidad',$request->n_doc)->get();
            $id_personal = $docen[0]->id_persona;

            $docente = new Docente;

            $docente->id_persona = $id_personal;
            $docente->id_categ_doc = $request->selec_categ;
            $docente->id_regimen = $request->r_laboral;
            $docente->save();

        }
        


        //return redirect()->route('administLegajo');
           return response()->json([
               "mensaje" => "Personal creado con exito"
           ]);
            
        // }
    }


}