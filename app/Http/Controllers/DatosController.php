<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatePersonasRequest;
use App\Http\Requests\CreateHabientesRequest;
use App\Http\Requests\UpdateHabientesRequest;
use App\Http\Requests\UpdateSitLaboralRequest;
use App\Persona;
use App\TipoPersonal;
use App\Idioma;
use App\TipoIdioma;
use App\TipoDocumento;
use App\Habiente;
use App\TipoDocIdentidad;
use App\Parentesco;
use App\EstadoCivil;
use App\TipoVia;
use App\TipoZona;
use App\Departamento;
use App\Provincia;
use App\Distrito;
use App\Nacionalidad;
use App\TipoNacionalidad;
use App\Residencia;
use App\Administrativo;
use App\CategoriaAdministrativo;
use App\Condicion;
use App\Docente;
use App\CategoriaDocente;
use App\Regimen;


class DatosController extends Controller
{

    public function __construct(){

      $this->middleware('auth');

    }

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
        
        $provincias = Provincia::where('id_dpto',$request->idDpto)->get();  //esto devuelve una coleccion
        
        $matriz = array();
        
        foreach($provincias as $provincia){
        
            $matriz[] = array('id' => $provincia->id_prov,
                              'nombre' => $provincia->nom_prov);
        
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
                              'nombre' => $distrito->nom_dist);
        
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

    //Para mostrarlo en el select de Tipo de Documento de Identidad
    public function listarParentesco()
    {
        
        $parentescos = Parentesco::all();
        
        $matriz = array();
        
        foreach($parentescos as $parentesco){
        
            $matriz[] = array('id' => $parentesco->id_parentesco,
                              'nombre' => $parentesco->denominacion);
        
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

    //Para mostrarlo en el select de Nacionalidad
    public function listarNacionalidad()
    {
        
        $nacionalidad = Nacionalidad::all();
        
        $matriz = array();
        
        foreach($nacionalidad as $nacionali){
        
            $matriz[] = array('id' => $nacionali->id_nacionalidad,
                              'nombre' => $nacionali->denominacion);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }
    
    public function listarIdiomas(Request $request)
    {
        if($request->ajax()){
        
            $idiomas = Idioma::where('id_persona',$request->id)->get();
            
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

    public function agregarIdioma(Request $request)
    {
        
        if($request->ajax()){
            
            $idioma = new Idioma;

            if ($request->hasFile('pdf_Idioma')) {
            
                $ruta_tempIdioma = $request->file('pdf_Idioma');
    
                $nombre_pdf_Idioma = time().$ruta_tempIdioma->getClientOriginalName();
    
                //muevo la foto de la ruta temporal hacia la carpeta public del servidor
                $ruta_tempIdioma->move(public_path().'/images/',$nombre_pdf_Idioma);
    
                $idioma->pdf_idioma_persona = $nombre_pdf_Idioma;
                
            }

            $idioma->id_persona = $request->miID;
            $idioma->id_tipo_idioma = $request->tipo_idioma;
            $idioma->dominio = $request->dominio;
            $idioma->entidad = $request->centroEstudio;
            $idioma->id_tipo_documento = $request->tipo_doc;
            $idioma->num_horas = $request->horas;
            $idioma->num_creditos = $request->creditos;
                        
            $idioma->save();
            
            return response()->json([

            ]);
            
        }
            
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('datos_personales.crear');
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
            /*$persona = new Persona;
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
                        
            $persona->save();*/
            
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
    
    public function listarHabientes(Request $request)
    {
        if($request->ajax()){
        
            $habientes = Habiente::where('id_persona',$request->id)->get();
                        
            $matriz = array();
            
            foreach($habientes as $habiente){
            
                $matriz[] = array('id' => $habiente->id_habiente,
                                'parentesco' => $habiente->parentesco->denominacion,
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
    }
    
    public function agregarHabiente(CreateHabientesRequest $request)
    {
        
        if($request->ajax()){
            // return $request->all();
            $habiente = new Habiente;

            if ($request->hasFile('pdf_partidaNacHab')) {
            
                $ruta_temporal1 = $request->file('pdf_partidaNacHab');
    
                $nombre_pdf_partNac = time().$ruta_temporal1->getClientOriginalName();
    
                //muevo la foto de la ruta temporal hacia la carpeta public del servidor
                $ruta_temporal1->move(public_path().'/images/',$nombre_pdf_partNac);
    
                $habiente->pdf_dni = $nombre_pdf_partNac;
                
            }

            if ($request->hasFile('pdf_docIdentHab')) {
            
                $ruta_temporal2 = $request->file('pdf_docIdentHab');
    
                $nombre_pdf_docIdent = time().$ruta_temporal2->getClientOriginalName();
    
                //muevo la foto de la ruta temporal hacia la carpeta public del servidor
                $ruta_temporal2->move(public_path().'/images/',$nombre_pdf_docIdent);
    
                $habiente->pdf_partida_nacimiento = $nombre_pdf_docIdent;
                
            }
            
            $habiente->id_persona = $request->miID;
            $habiente->id_parentesco = $request->parentesco;
            $habiente->nro_partida_nacimiento = $request->n_partida;
            $habiente->fecha_emision = $request->fech_emision;
            $habiente->expedida = $request->expedida;
            $habiente->id_tipo_doc = $request->tipoDocIdent;

            if ($request->tipoDocIdent != 1) {
                if ($request->numero && $request->tipoDocIdent) {
                    $habiente->num_doc_identidad = $request->numero; 
                }
            } else{
                $habiente->num_doc_identidad = ''; 
            }
            
            
            $habiente->ape_paterno = $request->ape_pater;
            $habiente->ape_materno = $request->ape_mater;
            $habiente->nombres = $request->nombres;
            $habiente->fecha_nacimiento = $request->fech_naci;
            $habiente->sexo = $request->generoHab;

            $habiente->save();
            
            return response()->json([
                "mensaje"=>"Habiente creado con exito"
            ]);
            
        }
            
    }

    //Para editar el Modal Idioma
    public function editarHabiente(Request $request)
    {
        
        $habientes = Habiente::where('id_habiente',$request->id)->get();
        
        $matriz = array();
        
        foreach($habientes as $habiente){
        
            $matriz[] = array('id' => $habiente->id_habiente,
                            'parentesco' => $habiente->id_parentesco,
                            'nroPartNac' => $habiente->nro_partida_nacimiento,
                            'fechEmision' => $habiente->fecha_emision,
                            'expedida' => $habiente->expedida,
                            'idTipoDoc' => $habiente->id_tipo_doc,
                            'numDoc' => $habiente->num_doc_identidad,
                            'apellidoPaterno' => $habiente->ape_paterno,
                            'apellidoMaterno' => $habiente->ape_materno,
                            'nombres' => $habiente->nombres,
                            'fechaNacim' => $habiente->fecha_nacimiento,
                            'sexo' => $habiente->sexo);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //PUT PARA ACTUALIZAR UN HABIENTE
    public function updateHabiente(UpdateHabientesRequest $request, $id)
    {
        if($request->ajax()){
            // return $request->all();
            $habiente = Habiente::find($id);

            //si del formulario estamos recibiendo un archivo pdf de partida de nacimiento
        
            if ($request->hasFile('pdf_partidaNacHab')) {
                
                $ruta_temporal = $request->file('pdf_partidaNacHab');

                $up_nombre_pdf_partNac = time().$ruta_temporal->getClientOriginalName();

                //muevo la foto de la ruta temporal hacia la carpeta public del servidor
                $ruta_temporal->move(public_path().'/images/',$up_nombre_pdf_partNac);

                $habiente->pdf_partida_nacimiento = $up_nombre_pdf_partNac;
                
            }

            //si del formulario estamos recibiendo un archivo PDF de doc. identidad
            
            if ($request->hasFile('pdf_docIdentHab')) {
                
                $ruta_temporal2 = $request->file('pdf_docIdentHab');

                $up_nombre_pdfIdentHab = time().$ruta_temporal2->getClientOriginalName();

                //muevo el PDF de la ruta temporal hacia la carpeta public del servidor
                $ruta_temporal2->move(public_path().'/images/',$up_nombre_pdfIdentHab);

                $habiente->pdf_dni = $up_nombre_pdfIdentHab;
                
            }
        
            $habiente->id_parentesco = $request->parentesco;
            $habiente->nro_partida_nacimiento = $request->n_partida;
            $habiente->fecha_emision = $request->fech_emision;
            $habiente->expedida = $request->expedida;
            $habiente->id_tipo_doc = $request->tipoDocIdent;
            $habiente->num_doc_identidad = $request->numero;
            $habiente->ape_paterno = $request->ape_pater;
            $habiente->ape_materno = $request->ape_mater;
            $habiente->nombres = $request->nombres;
            $habiente->fecha_nacimiento = $request->fech_naci;
            $habiente->sexo = $request->generoHab;
                                                    
            $habiente->save();
            
            return response()->json([
                "mensaje"=>"Habiente actualizado con exito"
            ]);

        // return back();
        //return back()->with('mensaje','Personal actualizado con exito');
        
        //return redirect()->route('administLegajo');
        //    return response()->json([
        //        "mensaje" => "Personal Actualizado con exito"
        //    ]);
            
        }

    }

    //Para Ver los Habientes al pulsar el boton ver
    public function verHabiente(Request $request)
    {
        
        $verHabiente = Habiente::where('id_habiente',$request->id)->get();
        // return $verHabiente;
        $matriz = array();
        
        foreach($verHabiente as $verHab){
        
            $matriz[] = array('parentesco' => $verHab->parentesco->denominacion,
                              'nroPartNac' => $verHab->nro_partida_nacimiento,
                              'fechEmi' => $verHab->fecha_emision,
                              'expedida' => $verHab->expedida,
                              'docIdent' => $verHab->tipoDocIdentidad->denominacion,
                              'nroDocIdent' => $verHab->num_doc_identidad,
                              'apePater' => $verHab->ape_paterno,
                              'apeMater' => $verHab->ape_materno,
                              'nomb' => $verHab->nombres,
                              'fechNac' => $verHab->fecha_nacimiento,
                              'sexo' => $verHab->sexo);
        
        }
        
        return response()->json([
              
            $matriz
             
        ]);
    }

    //PARA ELIMINAR UN HABIENTE
    public function destroyHabiente(Request $request, $id)
    {
                
        if($request->ajax()){
            
            $borrar_habiente = Habiente::find($id);
            $borrar_habiente->delete();
            
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
        $persona = Persona::find($id);
        $tipo_personal = TipoPersonal::all();
        $estado_civil = EstadoCivil::all();
        $tipo_vias = TipoVia::all();
        $tipo_zonas = TipoZona::all();
        $nacionalidad = Nacionalidad::find($id);
        $tipo_nacionalidad = TipoNacionalidad::all();
        $tipo_docIdentidad = TipoDocIdentidad::all();
        $departamentos = Departamento::all();
        $residencia = Residencia::find($id);

        $categorias_administrativo = CategoriaAdministrativo::all();
        $condicion_administrativo = Condicion::all();
        $categorias_docente = CategoriaDocente::all();
        $regimen_docente = Regimen::all();

        if ($residencia) {  //para poder mostrar en la vista
            $provincias = Provincia::where('id_dpto',$residencia->id_dpto)->get();
            $distritos = Distrito::where('id_prov',$residencia->id_prov)->get();
        }
       
        return view('datos_personales.crear', compact('persona','tipo_personal','estado_civil','tipo_vias','tipo_zonas','nacionalidad','tipo_nacionalidad','tipo_docIdentidad','departamentos','provincias','distritos','residencia','categorias_administrativo','condicion_administrativo','categorias_docente','regimen_docente'));
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
    
    //PUT PARA ACTUALIZAR PERSONA
    public function updatePersona(UpdatePersonasRequest $request, $id)
    {
        // if($request->ajax()){
            
        //     //Persona::create($request->all());
        $persona = Persona::find($id);

        //si del formulario estamos recibiendo un archivo
        
        if ($request->hasFile('foto_persona')) {
            
            $ruta_temporal = $request->file('foto_persona');

            $nombre_foto = time().$ruta_temporal->getClientOriginalName();

            //muevo la foto de la ruta temporal hacia la carpeta public del servidor
            $ruta_temporal->move(public_path().'/images/',$nombre_foto);

            $persona->foto = $nombre_foto;
            
        }

        //si del formulario estamos recibiendo un archivo PDF de doc. identidad
        
        if ($request->hasFile('pdf_doc_ident')) {
            
            $ruta_temporal2 = $request->file('pdf_doc_ident');

            $nombre_pdfIdentidad = time().$ruta_temporal2->getClientOriginalName();

            //muevo el PDF de la ruta temporal hacia la carpeta public del servidor
            $ruta_temporal2->move(public_path().'/images/',$nombre_pdfIdentidad);

            $persona->pdf_doc_identidad = $nombre_pdfIdentidad;
            
        }

        //si del formulario estamos recibiendo un archivo PDF de Partida Nacimiento
        
        if ($request->hasFile('pdf_partidaNac')) {
            
            $ruta_temporal3 = $request->file('pdf_partidaNac');

            $nombre_pdfPartidaNac = time().$ruta_temporal3->getClientOriginalName();

            //muevo el PDF de la ruta temporal hacia la carpeta public del servidor
            $ruta_temporal3->move(public_path().'/images/',$nombre_pdfPartidaNac);

            $persona->pdf_partida_nacimiento = $nombre_pdfPartidaNac;
            
        }
        
        $persona->id_tipo_doc = $request->tipoDocIdentidad;
        $persona->num_doc_identidad = $request->num_docIdentidad;
        $persona->ape_paterno = $request->apellidoPaterno;
        $persona->ape_materno = $request->apellidoMaterno;
        $persona->nombres = $request->nomb;
        $persona->sexo = $request->genero;
        $persona->fecha_nacimiento = $request->fech_nac;
        $persona->direccion = $request->direc;
        $persona->id_estado_civil = $request->est_civil;
        $persona->id_tipo_via = $request->via;
        $persona->id_tipo_zona = $request->zona;
        $persona->telefono = $request->fijo;
        $persona->celular = $request->celular;
        $persona->email = $request->email;
                                                
        $persona->save();
        
        //LOGICA PARA CREAR UNA NACIONALIDAD    
        //si NO existe una nacionalidad con el id de esta persona
        if (!Nacionalidad::find($id)) {

            //y eliges una nacionalidad q es diferente a 0
            if ($request->nacionalidad != 0) {
             
                //entonces crea una nacionalidad para esta persona
                $createNacionalidad = new Nacionalidad;

                $createNacionalidad->id_persona = $id;
                $createNacionalidad->id_tipo_nac = $request->nacionalidad;

                $createNacionalidad->save();
           
            }

        } else {
                        
            //caso contrario si ya EXISTE una nacionalidad (peruana o extranjera) en la base y quieres 
            //actualizar la nacionalidad q ya existe
            if ($request->nacionalidad != 0) {
               
                // la actualiza
                $updateNacionalidad = Nacionalidad::find($id);
                
                $updateNacionalidad->id_persona = $id;
                $updateNacionalidad->id_tipo_nac = $request->nacionalidad;

                $updateNacionalidad->save();                

            } else {

                //caso contrario elimina a la nacionalidad de esa persona
                $borrarNacionalidad = Nacionalidad::find($id);
                $borrarNacionalidad->delete();

            }

        }
        
        //LOGICA PARA CREAR UNA Residencia   
        //si NO existe una residencia con el id de esta persona en la base
        if (!Residencia::find($id)) {

            //siempre y cuando la nacionalidad sea peruana
            if ($request->nacionalidad == 1) {
                
                //se crea la residencia siempre y cuando hayas escojido un dpto
                if ($request->dpto) {
                    
                    $residencia = new Residencia();

                    $residencia->id_persona = $id;
                    $residencia->id_dpto = $request->dpto;
                    $residencia->id_prov = $request->provinc;
                    $residencia->id_dist = $request->distri;

                    $residencia->save();

                }
                
            }

        } else {
            
            //caso contrario si ya tienes una residencia en la base y quieres 
            //guardar una residencia de nacionalidad peruana q ya existe
            if ($request->nacionalidad == 1) {
                                
                // escoje un dpto y se actualiza
                if ($request->dpto) {
                    $updateResidencia = Residencia::find($id);
                    
                    $updateResidencia->id_persona = $id;
                    $updateResidencia->id_dpto = $request->dpto;
                    $updateResidencia->id_prov = $request->provinc;
                    $updateResidencia->id_dist = $request->distri;

                    $updateResidencia->save();
                }

            } else {

                //caso contrario elimina a la residencia de esa persona
                $borrarResidencia = Residencia::find($id);
                $borrarResidencia->delete();

            }

        }

        return back();
        //return back()->with('mensaje','Personal actualizado con exito');
        
        //return redirect()->route('administLegajo');
        //    return response()->json([
        //        "mensaje" => "Personal Actualizado con exito"
        //    ]);
            
        // }

    }

    public function updateSituacionLaboral(UpdateSitLaboralRequest $request, $id)
    {
        if ($request->t_personal == 2) {
            //SI NO EXISTE un administrativo en la base con ese id de la persona
            if (!Administrativo::find($id)) {
                
                //si no existe un docente
                if (!Docente::find($id)) {
                        
                    //actualiza el tipo de personal a administrativo
                    $persona = Persona::find($id);
                    $persona->id_tipo_personal = $request->t_personal;
                    $persona->save();
                   
                    //luego crea el administrativo en la base
                    $createAdministrativo = new Administrativo();

                    $createAdministrativo->id_persona = $id;
                    $createAdministrativo->id_categ_admi = $request->selec1;
                    $createAdministrativo->id_condicion = $request->selec2;

                    $createAdministrativo->save();
                    
                } else{

                    //borra al docente con ese id
                    $borrarDocente = Docente::find($id);
                    $borrarDocente->delete();

                    //actualiza el tipo de personal a administrativo
                    $persona = Persona::find($id);
                    $persona->id_tipo_personal = $request->t_personal;
                    $persona->save();

                    //crea al admnistrativo
                    $createAdministrativo = new Administrativo();

                    $createAdministrativo->id_persona = $id;
                    $createAdministrativo->id_categ_admi = $request->selec1;
                    $createAdministrativo->id_condicion = $request->selec2;

                    $createAdministrativo->save(); 
    
                }
                 
            } else {
                
                //caso contrario si EXISTE el administrativo 
                //se actualiza
                $updateAdministrativo = Administrativo::find($id);
                
                $updateAdministrativo->id_categ_admi = $request->selec1;
                $updateAdministrativo->id_condicion = $request->selec2;

                $updateAdministrativo->save();                
    
            }

        } else{

            if ($request->t_personal == 3) {
                
                //SI NO EXISTE un docente en la base con ese id de la persona
                if (!Docente::find($id)) {
                    
                    //si no existe un administrativo
                    if (!Administrativo::find($id)) {
                        
                        //actualiza el tipo de personal a docente
                        $persona = Persona::find($id);
                        $persona->id_tipo_personal = $request->t_personal;
                        $persona->save();

                       //y luego crea al docente
                        $createDocente = new Docente();

                        $createDocente->id_persona = $id;
                        $createDocente->id_categ_doc = $request->selec1;
                        $createDocente->id_regimen = $request->selec2;

                        $createDocente->save(); 
                    } else{
                        //borra al administrativo
                        $borrarAdministrativo = Administrativo::find($id);
                        $borrarAdministrativo->delete();

                        //actualiza el tipo de personal a docente
                        $persona = Persona::find($id);
                        $persona->id_tipo_personal = $request->t_personal;
                        $persona->save();

                        //crea al docente
                        $createDocente = new Docente();

                        $createDocente->id_persona = $id;
                        $createDocente->id_categ_doc = $request->selec1;
                        $createDocente->id_regimen = $request->selec2;

                        $createDocente->save(); 
        
                    }
                    
                } else {
                    
                    //caso contrario si EXISTE el docente se actualiza
                    $updateDocente = Docente::find($id);
                    
                    $updateDocente->id_categ_doc = $request->selec1;
                    $updateDocente->id_regimen = $request->selec2;
    
                    $updateDocente->save();                
        
                }
            }    
         
        }

        return back();

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
            //encuentro al usuario
            $idioma = Idioma::find($id);
            //luego actualizo
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
