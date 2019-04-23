@extends('layouts.plantilla')

@section('zona_css')
    <link rel="stylesheet" href=" {{url('css/fuente.css')}}">
@endsection

@section('zona_js')
    <script src=" {{url('js/main_adminLegajo.js')}}"></script>
@endsection

@section('contenedor')
    <div class="container">
        <!-- Inicio Tarjeta 1 -->
        <div class="card">
            <!-- Inicio Cuerpo Tarjeta 1 -->
            <div class="card-body">
                
                <div class="form-group row">
                    <!-- <label for="tipo_legajo" class="col-sm-2 col-form-label">Tipo de Legajo:</label> -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="busqueda" id="busq_tipoLegajo" value="option1">
                        <label for="busq_tipoLegajo">
                            Tipo de Legajo:
                        </label>
                    </div>


                    <div class="col-sm-2">
                        <select id="tipo_legajo" class="form-control form-control-sm">
                             
                        </select>
                    </div>
                </div>
                
                
                <!--  Inicio contenedor de Busqueda  -->
                <div class="container my-3 px-0">
                    <div class="form-row my-2">
                        <div class="col">
                            <!-- Inicio Card -->                       
                            <div class="card">
                                <!-- Cuerpo del card -->
                                <div class="card-body p-1">

                                    <!-- Inicio tipo de legajo -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="busqueda" id="busq_servCond" value="option2" checked>
                                        <label for="busq_servCond">
                                            Tipo Personal y Condición:
                                        </label>
                                    </div>
                                    <!-- Fin tipo legajo -->
                                    
                                    <!-- Inicio tipo y numero de doc. identidad -->
                                    <div class="form-row my-2">
                                        <div class="col-4">  
                                            <div class="form-group mb-1">
                                                <select id="tip_personal" class="form-control form-control-sm">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-4">  
                                            <div class="form-group mb-1">
                                                <select id="condicion" class="form-control form-control-sm">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Fin tipo y nro de doc. identidad -->

                                    <!-- Inicio tipo de legajo -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="busqueda" id="busq_docIdentidad" value="option2" checked>
                                        <label for="busq_docIdentidad">
                                            Tipo y N° de Documento de Identidad:
                                        </label>
                                    </div>
                                    <!-- Fin tipo legajo -->
                                    
                                    <!-- Inicio tipo y numero de doc. identidad -->
                                    <div class="form-row my-2">
                                        <div class="col-3">  
                                            <div class="form-group mb-1">
                                                <select id="tipo_doc" class="form-control form-control-sm">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-2">  
                                            <div class="form-group mb-1">
                                                <input type="text" class="form-control form-control-sm" id="numero" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin tipo y nro de doc. identidad -->
                                    
                                    <!-- Inicio Apellidos y Nombres -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="busqueda" id="busq_nombres" value="option3">
                                        <label for="busq_nombres">
                                            Apellidos y Nombres:
                                        </label>
                                    </div>

                                    <div class="form-row my-2">
                                        <div class="col-3">  
                                            <div class="form-group mb-1">
                                                <input type="text" class="form-control form-control-sm" id="paterno" placeholder="apellido paterno">
                                            </div>
                                        </div>
                                        <div class="col-3">  
                                            <div class="form-group mb-1">
                                                <input type="text" class="form-control form-control-sm" id="materno" placeholder="apellido materno">
                                            </div>
                                        </div>
                                        <div class="col-4">  
                                            <div class="form-group mb-1">
                                                <input type="text" class="form-control form-control-sm" id="nombres" placeholder="nombres">
                                            </div>
                                        </div>
                                        <div class="col-2">  
                                            <div class="form-group mb-1">
                                                <a href="{{ url('administLegajo') }}" class="btn btn-outline-info btn-sm">Todos</a> 
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Fin Apellidos y Nombres -->

                                    <form action="/ProyEscalafon/public/eliminarIdioma/:IDIOMA_ID" method="post" id="form_deleteIdioma">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token3" id="token3" value="{{ csrf_token() }}">
                                    </form>

                                    <form action="/ProyEscalafon/public/datos/:IDIOMA_ID" method="post" id="form_updateIdioma">
                                        <input type="hidden" name="_method2" value="PUT">
                                        <input type="hidden" name="_token4" id="token4" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                                <!-- Fin cuerpo del card -->
                            </div>
                        <!-- Fin card -->
                        </div>

                        <div class="col-1">
                            <div class="row">
                                <div class="col">
                                    <div class="botonera">
                                        <button type="button" class='btn_busqueda btn btn-primary btn-lg rounded-circle rounded-lg' title='Buscar'><span><i class="fas fa-search"></i></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col mt-5">
                                    <a href="{{route('legajosPersonales')}}">
                                    <div class="mt-5">
                                        <button type="button" class='btn_salir btn btn-danger btn-lg rounded-circle rounded-lg' title='Menu'><span><i class="fas fa-home"></i></span></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--  Fin de Busquedas  -->
                
                <!--  Inicio del contenedor Tabla de Legajos  -->
                <div class="container my-3 px-0">
                                            
                    <div class="card">
                        <div class="card-header p-0 text-center">
                            Legajos
                        </div>

                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <td>T. Doc.</td>
                                            <td>Número</td>
                                            <td>Ape Paterno</td>
                                            <td>Ape Materno</td>
                                            <td>Nombres</td>
                                            <td>Tipo Personal</td>
                                            <td>Tipo Legajo</td>
                                            <td width="100px">Opciones</td>
                                        </tr>
                                    </thead>
                                    <tbody id="lista_personas">
                                        
                                        @foreach($personas as $persona)
                                            
                                            <tr>
                                                <td>{{ $persona->tipodoc_identidad->abreviatura }}</td>
                                                <td>{{ $persona->num_doc_identidad }}</td>
                                                <td>{{ $persona->ape_paterno }}</td>
                                                <td>{{ $persona->ape_materno }}</td>
                                                <td>{{ $persona->nombres }}</td>
                                                <td>{{ $persona->tipopersonal->nombre }}</td>
                                                <td>{{ $persona->tipolegajo->nombre }}</td>
                                                <td>
                                                    <div class="">
                                                        <a href="{{route('moduloinicio.editar',$persona->id_persona)}}" class="btn btn-success" title='Modificar'><span><i class="fas fa-pencil-alt"></i></span></a>
                                                        <!--<button type="button" class='update_parentesco btn btn-success' title='Modificar'><span><i class="fas fa-pencil-alt"></i></span></button> -->
                                                                                                        
                                                        <button type="button" class='delete_parentesco btn btn-danger' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                                    </div>
                                                </td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $personas->render() }}
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--  Fin contenedor de tabla de legajos  -->
                
                <caption>
                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modalLegajoPortada">
                        Nuevo Personal <span><i class="fas fa-plus"></i></span>
                    </button>
                </caption>
                
            </div>
            <!-- Fin Cuerpo Tarjeta 1 -->

        </div>
        <!-- Fin Tarjeta 1 -->
    </div>

    <!-- Modal para CREAR TRABAJADORES -->
    <div class="modal fade" id="modalLegajoPortada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelPortada" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header py-2">
                    <h5 class="modal-title" id="exampleModalLabelPortada"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body py-0 pl-5">
                    <!--     *************       -->
                    <div class="container px-3 py-1 border shadow bg-white rounded">
                        
                        <div class="form-row my-1">
                            <div class="col">  
                                <div class="form-group mb-1">
                                    
                                    <img src="{{url('img/logo_unprg.png')}}" alt="" class="shadow bg-white rounded">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-row my-1">
                            <div class="col">  
                                <div class="form-group fuente_personalizada text-center">
                                    LEGAJO PERSONAL
                                </div>
                            </div>
                        </div>
                        
                        <!-- Inicio de la Card -->
                        <div class="card">
                            <!-- Inicio de Card body -->
                            <div class="card-body py-0">
                                <div id="notific"></div>
                                <!-- Inicio Formulario -->
                                <form id="formularioModalPersona" action="{{ url('administracionLegajo') }}" method="POST" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    {{-- @csrf --}}

                                    <div class="form-row my-1">
                                        <div class="col-9">  
                                            <div class="form-group mb-1">
                                                <div class="form-row my-1">
                                                    <div class="col">
                                                        <div class="alert alert-primary msj_exito" role="alert" style="display:none">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row my-1">
                                                    <div class="col-4">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_legajo">Tipo de Legajo:</label>
                                                            <select id="t_legajo" name="t_legajo" class="form-control form-control-sm">
                                                                <!-- <option value=""></option> -->
                                                            </select>

                                                            <!-- @if ($errors->has('t_legajo'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('t_legajo') }}</strong>
                                                                </span>
                                                            @endif -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_personal">Tipo de Personal:</label>
                                                            <select id="t_personal" name="t_personal" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Administrativos -->
                                                    <div class="col" id="adm_grupo">  
                                                        <div class="form-group mb-1">
                                                            <label for="selec_grupo">Grupo Ocupacional:</label>
                                                            <select id="selec_grupo" name="selec_grupo" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col" id="adm_condi">  
                                                        <div class="form-group mb-1">
                                                            <label for="selec_condi">Condición:</label>
                                                            <select id="selec_condi" name="selec_condi" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Docentes -->
                                                    <div class="col" id="doc_cate">  
                                                        <div class="form-group mb-1">
                                                            <label for="selec_categ">Categoría:</label>
                                                            <select id="selec_categ" name="selec_categ" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col" id="doc_reg">  
                                                        <div class="form-group mb-1">
                                                            <label for="r_laboral">Regimen:</label>
                                                            <select id="r_laboral" name="r_laboral" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> 
                                                 
                                                <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_docIdent">Tipo Doc. Identidad:</label>
                                                            <select id="t_docIdent" name="t_docIdent" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="n_doc">Nº Doc.:</label>
                                                            <input type="text" class="form-control form-control-sm {{ $errors->has('n_doc') ? ' is-invalid' : '' }}" id="n_doc" name="n_doc" placeholder="">
                                                            
                                                            @if ($errors->has('n_doc'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('n_doc') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Subida de Imagen -->
                                        <div class="col-3">  
                                            <div class="form-group mb-1">
                                              
                                                <!-- <img src="images/default.gif" class="mx-4" width="150px" height="150px"/>  -->
                                                <button type="button" class="btn btn-success m-auto info-box-icon" id='image_input' title="Subir Imagen"><i class="far fa-image"></i></button>

                                                <input type="file" id="foto_trabajador" name="foto_trabajador" style="display:none;"/>
                                            </div>
                                        </div>
                                        <!-- Fin de Imagen -->
                                    </div>
                                    
                                    <div class="form-row my-1">
                                        <div class="col-10">  
                                            <div class="form-group mb-1">
                                                <div class="form-row">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="">Apellidos:</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <input type="text" class="form-control form-control-sm {{ $errors->has('ape_pat') ? ' is-invalid' : '' }}" id="ape_pat" name="ape_pat" placeholder="">

                                                            @if ($errors->has('ape_pat'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('ape_pat') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <input type="text" class="form-control form-control-sm {{ $errors->has('ape_mat') ? ' is-invalid' : '' }}" id="ape_mat" name="ape_mat" placeholder="">

                                                            @if ($errors->has('ape_mat'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('ape_mat') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="nomb">Nombres:</label>
                                                            <input type="text" class="form-control form-control-sm {{ $errors->has('nomb') ? ' is-invalid' : '' }}" id="nomb" name="nomb" placeholder="">

                                                            @if ($errors->has('nomb'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nomb') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 m-auto ">  
                                            
                                            <div class="form-row my-4">
                                               <button type="submit" class="btn btn_crearPersona btn-primary m-auto info-box-icon" title="Guardar"><i class="far fa-save"></i></button>
                                            </div>
                                            <div class="form-row mt-4">
                                               <button type="button" class="btn btn-danger m-auto info-box-icon" data-dismiss="modal" title="Cerrar"><i class="far fa-window-close"></i></button> 
                                            </div>  
                                        </div>
                                    </div>
                                    
                                    <div class="form-row my-1">

                                        <div class="col-4 mx-auto">  
                                            <div class="form-group mb-1">
                                                <label for="ambiente">Ambiente:</label>
                                                <input type="text" class="form-control form-control-sm" id="ambiente" name="ambiente" placeholder="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-4 mx-auto">  
                                            <div class="form-group mb-1">
                                                <label for="estante">Estante:</label>
                                                <input type="text" class="form-control form-control-sm" id="estante" name="estante" placeholder="">
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                            <!-- Fin card body -->

                            <!-- Inicio del Card footer -->
                            <!-- <div class="card-footer py-0">
                                
                                <div class="form-row my-1">

                                    <div class="col-4 mx-auto">  
                                        <div class="form-group mb-1">
                                            <label for="ambiente">Ambiente:</label>
                                            <input type="text" class="form-control form-control-sm" id="ambiente" name="ambiente" placeholder="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-4 mx-auto">  
                                        <div class="form-group mb-1">
                                            <label for="estante">Estante:</label>
                                            <input type="text" class="form-control form-control-sm" id="estante" name="estante" placeholder="">
                                        </div>
                                    </div>

                                </div>

                            </div> -->
                            <!-- Fin del Card footer -->
                        </div>
                        <!-- Fin de la Card -->
                    </div>
                         
                    <!--   ********************    -->
                                         
                </div>
                <!-- <div class="modal-footer py-1">
                    <button type="button" class="btn btn_idioma btn-primary" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div> -->
            </div>
        </div>
    </div>

@endsection