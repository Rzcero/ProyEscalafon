@extends('layouts.plantilla')

@section('zona_css')
    <link rel="stylesheet" href="{{ url('css/fuente.css') }}">
@endsection

@section('zona_js')
    
@endsection

@section('contenedor')

    <div class="container">
        <!-- Inicio Tarjeta 1 -->
        <div class="card" style="width: 50rem;">
            <!-- Inicio Cuerpo Tarjeta 1 -->
            <div class="card-body">
                                
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
                                <!-- Inicio Formulario -->
                                <form id="formularioModal1" action="" method="POST" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    {{-- @csrf --}}

                                    <div class="form-row my-1">
                                        <div class="col-8">  
                                            <div class="form-group mb-1">
                                                <div class="form-row my-1">
                                                    <div class="col-4">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_legajo">Tipo de Legajo:</label>
                                                            <select id="t_legajo" name="t_legajo" class="form-control form-control-sm" disabled>
                                                                <option value="{{$persona->id_tipo_legajo}}">{{$persona->tipolegajo->nombre}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_personal">Tipo de Personal:</label>
                                                            <select id="t_personal" name="t_personal" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col" id="x1">  
                                                        <div class="form-group mb-1">
                                                            <label for="selec_condicion">Condición:</label>
                                                            <select id="selec_condicion" name="selec_condicion" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col" id="x2">  
                                                        <div class="form-group mb-1">
                                                            <label for="r_laboral">Regimen Laboral:</label>
                                                            <select id="r_laboral" name="r_laboral" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                 
                                                <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_docIdent">Tipo Doc. Identidad:</label>
                                                            <select id="t_docIdent" name="t_docIdent" class="form-control form-control-sm" disabled>
                                                                <option value="{{ $persona->id_tipo_doc }}">{{ $persona->tipodoc_identidad->denominacion }}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="n_doc">Nº Doc.:</label>
                                                            <input type="text" class="form-control form-control-sm" id="n_doc" name="n_doc" placeholder="" value="{{ $persona->num_doc_identidad }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4">  
                                            <div class="form-group mb-1">
                                                <img width="150px" height="150px" src="{{url('/images/')}}/{{$persona->foto}}" alt="imagen">
                                            </div>
                                        </div>
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
                                                            <input type="text" class="form-control form-control-sm" id="ape_pat" name="ape_pat" placeholder="" value="{{$persona->ape_paterno}}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <input type="text" class="form-control form-control-sm" id="ape_mat" name="ape_mat" placeholder="" value="{{ $persona->ape_materno }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="nomb">Nombres:</label>
                                                            <input type="text" class="form-control form-control-sm" id="nomb" name="nomb" placeholder="" value="{{ $persona->nombres }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 m-auto ">  
                                            
                                            <div class="form-row my-4">
                                                <a href="{{route('datos.show',$persona->id_persona)}}" class="btn btn-primary m-auto info-box-icon" title="Ingresar"><span><i class="fas fa-book-open"></i></span></a>
                                               <!-- <button type="submit" class="btn btn-primary m-auto info-box-icon" title="Ingresar"><span><i class="fas fa-book-open"></i></span></button> -->
                                            </div>
                                            <div class="form-row mt-4">
                                               <!-- <button type="button" class="btn btn-danger m-auto info-box-icon" data-dismiss="modal" title="Salir"><i class="far fa-window-close"></i></button> -->
                                               <a href="{{route('administLegajo')}}" class="btn btn-danger m-auto info-box-icon" data-dismiss="modal" title="Salir"><span><i class="far fa-window-close"></i></span></a>
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
                                <!-- Inicio Formulario -->
                                <form id="formularioModal1" action="{{ url('administracionLegajo') }}" method="POST" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    {{-- @csrf --}}

                                    <div class="form-row my-1">
                                        <div class="col-8">  
                                            <div class="form-group mb-1">
                                                <div class="form-row my-1">
                                                    <div class="col-4">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_legajo">Tipo de Legajo:</label>
                                                            <select id="t_legajo" name="t_legajo" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="t_personal">Tipo de Personal:</label>
                                                            <select id="t_personal" name="t_personal" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col" id="x1">  
                                                        <div class="form-group mb-1">
                                                            <label for="selec_condicion">Condición:</label>
                                                            <select id="selec_condicion" name="selec_condicion" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col" id="x2">  
                                                        <div class="form-group mb-1">
                                                            <label for="r_laboral">Regimen Laboral:</label>
                                                            <select id="r_laboral" name="r_laboral" class="form-control form-control-sm">
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                 
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
                                                            <input type="text" class="form-control form-control-sm" id="n_doc" name="n_doc" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4">  
                                            <div class="form-group mb-1">
                                                <label for="foto_trabajador">Imagen:</label>
                                                <input type="file" id="foto_trabajador" name="foto_trabajador" placeholder="">
                                            </div>
                                        </div>
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
                                                            <input type="text" class="form-control form-control-sm" id="ape_pat" name="ape_pat" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <input type="text" class="form-control form-control-sm" id="ape_mat" name="ape_mat" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row my-1">
                                                    <div class="col">  
                                                        <div class="form-group mb-1">
                                                            <label for="nomb">Nombres:</label>
                                                            <input type="text" class="form-control form-control-sm" id="nomb" name="nomb" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 m-auto ">  
                                            
                                            <div class="form-row my-4">
                                               <button type="submit" class="btn btn_idioma btn-primary m-auto">Guardar</button>
                                            </div>
                                            <div class="form-row mt-4">
                                               <button type="button" class="btn btn-secondary m-auto" data-dismiss="modal">Cancelar</button> 
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