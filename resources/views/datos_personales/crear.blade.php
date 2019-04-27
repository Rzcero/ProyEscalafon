@extends('layouts.plantilla')

@section('zona_js')
<script src="{{ url('js/main.js') }}"></script>
@endsection

@section('contenedor')

<div class="col pr-0">
  <!-- Inicio del contenedor -->
  <div class="container">
    <div class="row">
      <div class="col px-0">
        <div class="card-group">
          <!-- Tarjeta 1 -->
          <div class="card">
            <!-- Cuerpo de la tarjeta 1 -->
            <div class="card-body">

              <!--  Inicio contenedor del Formulario -->
              <div class="container px-0" id="tabla1">

                <!-- Inicio Formulario -->
                <form id="formulario1" action="{{ route('updatePersona', $persona->id_persona ) }}" method="POST" enctype="multipart/form-data">

                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                  <input type="hidden" id="myID" name="myID" value="{{ $persona->id_persona}}">

                  <!--  Titulo  -->
                  <div class="form-row my-2">
                    <div class="col">
                      <div class="card">
                        <div class="card-body p-0">
                          <div class="form-row">
                            <div class="col-2">
                              <div class="form-group mb-0">
                                <span class="info-box-icon bg-warning">I</span>
                              </div>
                            </div>

                            <div class="col-10 bg-secondary">
                              <div class="form-group m-1">
                                <h5 class="my-2"><label class="m-auto"> Datos Personales del Servidor y Familiares</label></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- fin Titulo -->

                  <!--  D.N.I y PDF -->
                  <div class="form-row my-1">
                    <div class="col">
                      <div class="card">
                        <div class="card-header p-0 text-center">Tipo de Documento</div>

                        <div class="card-body p-1">
                          <select id="tipoDocIdentidad" name="tipoDocIdentidad" class="form-control form-control-sm {{ $errors->has('tipoDocIdentidad') ? ' is-invalid' : '' }}">
                          
                            @if(!$errors->has('tipoDocIdentidad'))

                              @foreach ($tipo_docIdentidad as $tipo_docIdent)
                                <option value="{{$tipo_docIdent->id_tipo_doc}}" @if($tipo_docIdent->id_tipo_doc == $persona->id_tipo_doc) selected @endif>{{$tipo_docIdent->denominacion}}</option>
                              @endforeach

                            @else

                              @foreach ($tipo_docIdentidad as $tipo_docIdent)
                                <option value="{{$tipo_docIdent->id_tipo_doc}}">{{$tipo_docIdent->denominacion}}</option>
                              @endforeach
                                
                            @endif
                          </select>

                          @if ($errors->has('tipoDocIdentidad'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('tipoDocIdentidad') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          N°
                        </div>

                        <div class="card-body p-1">
                          <input type="text" class="form-control form-control-sm {{ $errors->has('num_docIdentidad') ? ' is-invalid' : '' }}" id="num_docIdentidad" name="num_docIdentidad" placeholder="" value="@if(!$errors->has('num_docIdentidad') && !$errors->has('tipoDocIdentidad')) {{ $persona->num_doc_identidad }} @endif" @if($errors->has('tipoDocIdentidad')) disabled @endif>

                          @if ($errors->has('num_docIdentidad'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('num_docIdentidad') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>

                    <!-- Subir PDF de doc identidad -->
                    <div class="col-2">
                      <div class="card">
                        <div class="card-body p-0">

                          <button type="button" class="btn btn-success m-auto info-box-icon" id='pdf_identidad' title="Subir PDF de Doc. Identidad"><i class="far fa-file-pdf"></i></button>

                          <input type="file" id="pdf_doc_ident" name="pdf_doc_ident" style="display:none;" />
                        </div>

                      </div>
                    </div>
                    <!-- Fin PDF -->

                  </div>
                  <!-- fin D.N.I Y PDF  -->

                  <!--  Apellidos  -->
                  <div class="form-row my-1">
                    <div class="col">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Apellido Paterno
                        </div>

                        <div class="card-body p-1">
                          <input type="text" class="form-control form-control-sm {{ $errors->has('apellidoPaterno') ? ' is-invalid' : '' }}" id="apellidoPaterno" name="apellidoPaterno" placeholder="" value="@if(!$errors->has('apellidoPaterno')) {{ $persona->ape_paterno }} @endif">

                          @if ($errors->has('apellidoPaterno'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('apellidoPaterno') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Apellido Materno
                        </div>

                        <div class="card-body p-1">
                          <input type="text" class="form-control form-control-sm {{ $errors->has('apellidoMaterno') ? ' is-invalid' : '' }}" id="apellidoMaterno" name="apellidoMaterno" placeholder="" value="@if(!$errors->has('apellidoMaterno')) {{ $persona->ape_materno }} @endif">

                          @if ($errors->has('apellidoMaterno'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('apellidoMaterno') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- fin Apellido  -->

                  <!-- Bloque de dos columnas  -->
                  <div class="form-row my-1">
                    <!-- Inicio Bloque Imagen -->
                    <div class="col-3">
                      <div class="card">
                        <img width="120px" height="158px" src="{{url('/images/')}}/{{$persona->foto}}" alt="imagen">

                        <button type="button" class="btn btn-success m-auto info-box-icon" id='up_foto' title="Actualizar Foto"><i class="fas fa-camera"></i></button>
                        <input type="file" id="foto_persona" name="foto_persona" style="display:none;">

                      </div>
                    </div>
                    <!-- Fin Bloque Imagen -->

                    <!-- Inicio Segundo Bloque  -->
                    <div class="col">
                      <!--  Nombres , sexo  -->
                      <div class="form-row my-1">
                        <div class="col">
                          <div class="card">
                            <div class="card-header p-0 text-center">
                              Nombres
                            </div>

                            <div class="card-body p-1">
                              <input type="text" class="form-control form-control-sm {{ $errors->has('nomb') ? ' is-invalid' : '' }}"
                                id="nomb" name="nomb" placeholder="" value="@if(!$errors->has('nomb')) {{ $persona->nombres }} @endif">

                              @if ($errors->has('nomb'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('nomb') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>

                        <div class="col-3.5">
                          <div class="card">
                            <div class="card-header p-0 text-center">
                              Sexo
                            </div>

                            <div class="card-body p-1">
                              <fieldset class="form-group mb-1">
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="genero" id="masc" value="masculino" @if($persona->sexo == 'masculino') checked @endif>
                                  <label class="form-check-label" for="masc">M</label>
                                </div>

                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="genero" id="fem" value="femenino" @if($persona->sexo == 'femenino') checked @endif>
                                  <label class="form-check-label" for="fem">F</label>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- fin Nombres, sexo  -->

                      <!--  Inicio Fecha Nacimiento, Estado Civil  -->
                      <div class="form-row my-1">
                        <div class="col">
                          <div class="card">
                            <div class="card-header p-0 text-center">
                              Fecha Nacim.
                            </div>

                            <div class="card-body p-1">
                              <input type="date" class="form-control form-control-sm" id="fech_nac" name="fech_nac" value="{{$persona->fecha_nacimiento}}">
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card">
                            <div class="card-header p-0 text-center">
                              Estado Civil
                            </div>
                            <div class="card-body p-1">
                              <select id="est_civil" name="est_civil" class="form-control form-control-sm">
                                
                                @foreach ($estado_civil as $est_civil)
                                  <option value="{{$est_civil->id_estado_civil}}" @if($est_civil->id_estado_civil == $persona->id_estado_civil) selected @endif>{{$est_civil->denominacion}}</option>
                                @endforeach

                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- fin Sexo, Fecha Nacimiento, Estado Civil  -->

                      <!--  Inicio Tipo de Vía, Tipo de Zona  -->
                      <div class="form-row my-1">
                        <div class="col">
                          <div class="card">
                            <div class="card-header p-0 text-center">
                              Tipo de Vía
                            </div>
                            <div class="card-body p-1">
                              <select id="via" name="via" class="form-control form-control-sm">
                                
                                @foreach ($tipo_vias as $tipo_via)
                                  <option value="{{$tipo_via->id_tipo_via}}" @if($tipo_via->id_tipo_via == $persona->id_tipo_via) selected @endif>{{$tipo_via->denominacion}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="card">
                            <div class="card-header p-0 text-center">
                              Tipo de Zona
                            </div>
                            <div class="card-body p-1">
                              <select id="zona" name="zona" class="form-control form-control-sm">
                                
                                @foreach ($tipo_zonas as $tipo_zona)
                                  <option value="{{$tipo_zona->id_tipo_zona}}" @if($tipo_zona->id_tipo_zona == $persona->id_tipo_zona) selected @endif>{{$tipo_zona->denominacion}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- fin Tipo de Vía, Tipo de Zona  -->
                    </div>
                    <!-- Fin Segundo Bloque  -->
                  </div>
                  <!-- Fin Bloque de dos columnas  -->

                  <!--  Direccion  -->
                  <div class="form-row my-1">
                    <div class="col">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Dirección
                        </div>

                        <div class="card-body p-1">
                          <input type="text" class="form-control form-control-sm" id="direc" name="direc" placeholder="" value="{{$persona->direccion}}">
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- fin Direccion  -->

                  <!-- Pais Residencia -->
                  <div class="form-row my-1">
                    <div class="col">
                      <div class="card">
                        <div class="card-header p-0 text-center">Nacionalidad</div>

                        <div class="card-body p-1">
                          <select id="nacionalidad" name="nacionalidad" class="form-control form-control-sm">
                            
                            @foreach ($tipo_nacionalidad as $tipo_nacionali)
                              <option value="{{$tipo_nacionali->id_tipo_nac}}" @if($nacionalidad) @if($nacionalidad->id_tipo_nac == $tipo_nacionali->id_tipo_nac) selected @endif
                              @endif>{{$tipo_nacionali->denominacion}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="card">

                        <button type="button" class="btn btn-success m-auto info-box-icon" id='pdf_partida' title="Subir PDF de Partida Nacimiento"><i class="far fa-file-pdf"></i></button>

                        <input type="file" id="pdf_partidaNac" name="pdf_partidaNac" style="display:none;" />
                      </div>
                    </div>
                  </div>
                  <!-- fin Pais de Residencia-->

                  <!-- Departamento/Provincia/Distrito de Residencia -->
                  <div class="form-row my-1">
                    <div class="col">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Departamento / Provincia / Distrito de Residencia
                        </div>

                        <div class="card-body p-1">
                          <div class="form-row">
                            <div class="col">
                              <select id="dpto" name="dpto" class="form-control form-control-sm" @if($nacionalidad) @if($nacionalidad->id_tipo_nac != 2) disabled @endif @else disabled @endif>
                                <option value=""></option>

                                @foreach ($departamentos as $departamento)
                                  <option value="{{$departamento->id_dpto}}" @if($residencia) @if($residencia->id_dpto == $departamento->id_dpto) selected @endif @endif>{{$departamento->nom_dpto}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col">
                              <select id="provinc" name="provinc" class="form-control form-control-sm" @if($nacionalidad) @if($nacionalidad->id_tipo_nac != 2) disabled @endif @else disabled @endif>

                                @if($residencia)
                                <option value=""></option>

                                @foreach ($provincias as $provincia)
                                  <option value="{{$provincia->id_prov}}" @if($residencia) @if($residencia->id_prov == $provincia->id_prov) selected @endif @endif>{{$provincia->nom_prov}}</option>
                                @endforeach
                                @endif
                              </select>
                            </div>
                            <div class="col">
                              <select id="distri" name="distri" class="form-control form-control-sm" @if($nacionalidad) @if($nacionalidad->id_tipo_nac != 2) disabled @endif @else disabled @endif>

                                @if($residencia)
                                  <option value=""></option>

                                  @foreach ($distritos as $distrito)
                                    <option value="{{$distrito->id_dist}}" @if($residencia) @if($residencia->id_dist == $distrito->id_dist) selected @endif @endif>{{$distrito->nom_dist}}</option>
                                  @endforeach
                                @endif
                              </select>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!--  fin  -->

                  <!--  Inicio Tel. Fijo, Tel. Movil y correo  -->
                  <div class="form-row my-1">
                    <div class="col-3">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Telf. Fijo
                        </div>

                        <div class="card-body p-1">
                          <input type="text" class="form-control form-control-sm" id="fijo" name="fijo" placeholder="" value="{{$persona->telefono}}">
                        </div>
                      </div>
                    </div>

                    <div class="col-3">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Telf. Movil
                        </div>

                        <div class="card-body p-1">
                          <input type="text" class="form-control form-control-sm" id="celular" name="celular" placeholder="" value="{{$persona->celular}}">
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Correo Electrónico
                        </div>

                        <div class="card-body p-1">
                          <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="" value="{{$persona->email}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- fin Tel. Fijo, Tel. Movil y correo  -->
                  
                  <div class="form-row my-2">
                    <div class="col">
                      <button type="submit" id="regi" class="btn btn-primary info-box-icon" title="Guardar"><i class="far fa-save"></i></button>
                    </div>
                  </div>

                </form>
                <!-- Fin Formulario -->

              </div>
              <!-- Fin del Contenedor del Formulario -->

            </div>
            <!-- Fin del Cuerpo Tarjeta 1 -->
            <!-- Inicio Footer -->
            <div class="card-footer">
              <div class="form-row my-2">
                <div class="col-1">
                  <a href="{{route('moduloinicio.editar',$persona->id_persona)}}" class="btn btn-primary" title="Atras"><span><i class="fas fa-arrow-left"></i></span></a>
                    <!-- <button type="submit" class="btn btn-primary m-auto info-box-icon" title="Ingresar"><span><i class="fas fa-book-open"></i></span></button> -->
                </div>
                <div class="col-11">  
                    
                </div>
              </div>
            </div>
            <!-- fin footer -->
          </div>
          <!-- Fin Tarjeta 1 -->

          <!-- Inicio Tarjeta 2 -->
          <div class="card">
            <!-- Inicio Cuerpo Tarjeta 2 -->
            <div class="card-body">
              <!-- Inicio contenedor -->
              <div  class="container px-0">
                <!--  Inicio Idiomas  -->
                <div class="form-row my-2">
                <!-- <div class="container my-3 px-0 bg-danger"> -->
                  <div class="col px-0">
                    <div class="card">
                      <div class="card-header p-0 text-center">
                        Idiomas
                      </div>

                      <div class="card-body p-1">
                        <div id="">
                          <table class="table table-bordered table-sm">
                            <thead>
                              <tr>
                                <td>Idioma</td>
                                <td>Dominio</td>
                                <td width="144px">Opciones</td>
                              </tr>
                            </thead>
                            <tbody id="registroIdiomas">

                            </tbody>
                          </table>
                        </div>
                        <caption>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIdioma" id="agregarNuevoIdioma">
                            Nuevo <span><i class="fas fa-plus"></i></span>
                          </button>
                        </caption>

                        <form action="/ProyEscalafon/public/eliminarIdioma/:IDIOMA_ID" method="post" id="form_deleteIdioma">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token3" id="token3" value="{{ csrf_token() }}">
                        </form>

                        <form action="/ProyEscalafon/public/datos/:IDIOMA_ID" method="post" id="form_updateIdioma">
                          <input type="hidden" name="_method2" value="PUT">
                          <input type="hidden" name="_token4" id="token4" value="{{ csrf_token() }}">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  Fin Idiomas  -->

                <!--  Inicio Derecho Habientes  -->
                <div class="form-row my-2">
                <!-- <div class="container my-3 px-0 bg-dark"> -->
                  <div class="col px-0">
                    <div class="card">
                      <div class="card-header p-0 text-center">
                        Derecho Habientes
                      </div>

                      <div class="card-body p-1">
                        <div id="div_tabla3">
                          <table class="table table-bordered table-sm">
                            <thead>
                              <tr>
                                <td>Parentesco</td>
                                <td>N° Doc.</td>
                                <td>Apellidos y Nombres</td>
                                <td>F. Nacim.</td>
                                <td width="144px">Opciones</td>
                              </tr>
                            </thead>
                            <tbody id="otros_habientes">

                            </tbody>
                          </table>
                        </div>
                        <caption>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalHabiente" id="agregarNuevoHabiente">
                            Nuevo <span><i class="fas fa-plus"></i></span>
                          </button>
                        </caption>

                        <form action="/ProyEscalafon/public/eliminarHabiente/:HABIENTE_ID" method="post" id="form_deleteHabiente">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token5" id="token5" value="{{ csrf_token() }}">
                        </form>

                        <form action="/ProyEscalafon/public/updateHabiente/:HABIENTE_ID" method="post" id="form_updateHabiente">
                          <input type="hidden" name="_method2" value="PUT">
                          <input type="hidden" name="_token6" id="token6" value="{{ csrf_token() }}">
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
                <!--  Fin Derecho Habientes  -->
                
                <!--  Titulo  -->
                <div class="form-row my-2 bg-secondary">
                  <div class="col px-0  text-center">
                    
                    <h5 class="my-1"><label class="m-auto"> Situación Laboral</label></h5>
                                          
                  </div>
                </div>
                <!-- fin Titulo -->

                <!--  Inicio Situacion Laboral  -->
                <div class="form-row my-2">
                
                  <div class="col px-0">
                    <!-- Inicio formulario2 -->
                    <form id="formulario2" action="{{ route('updateSituacionLaboral', $persona->id_persona ) }}" method="POST">

                      <input type="hidden" name="_method" value="PUT">
                      <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">  

                      <div class="form-row my-1">
                        <div class="col">
                          <div class="card">
                            <div class="card-header p-0 text-center">
                              Tipo Personal
                            </div>

                            <div class="card-body p-1">
                              <select id="t_personal" name="t_personal" class="form-control form-control-sm {{ $errors->has('t_personal') ? ' is-invalid' : '' }}">
                                @if(!$errors->has('t_personal'))  
                                  @foreach($tipo_personal as $tipo_pers)
                                    <option value="{{$tipo_pers->id_tipo_personal}}" @if($persona->id_tipo_personal == $tipo_pers->id_tipo_personal) selected @endif>{{$tipo_pers->nombre}}</option>
                                  @endforeach
                                @else
                                  @foreach($tipo_personal as $tipo_pers)
                                    <option value="{{$tipo_pers->id_tipo_personal}}">{{$tipo_pers->nombre}}</option>
                                  @endforeach
                                @endif
                              </select>

                              @if ($errors->has('t_personal'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('t_personal') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-8">
                          
                          <div class="form-row">
                            <!-- Inicio grupo ocupacional -->
                            <div class="col" id="adm1">
                              <div class="card">
                                <div class="card-header p-0 text-center">
                                  @if($persona->id_tipo_personal == 2) G. Ocupacional @elseif($persona->id_tipo_personal == 3) Categoria @endif
                                </div>
                                
                                <div class="card-body p-1">
                                  <select id="selec1" name="selec1" class="form-control form-control-sm {{ $errors->has('selec1') ? ' is-invalid' : '' }}">
                                    @if(!$errors->has('selec1'))

                                      @if($persona->id_tipo_personal == 2)
                                        @foreach($categorias_administrativo as $cat_adm)
                                          <option value="{{$cat_adm->id_categ_admi}}" @if($persona->administrativo->id_categ_admi == $cat_adm->id_categ_admi) selected @endif>{{$cat_adm->descripcion}}</option>
                                        @endforeach
                                      @elseif($persona->id_tipo_personal == 3)
                                        @foreach($categorias_docente as $cat_doc)
                                          <option value="{{$cat_doc->id_categ_doc}}" @if($persona->docente->id_categ_doc == $cat_doc->id_categ_doc) selected @endif>{{$cat_doc->descripcion}}</option>
                                        @endforeach
                                      @endif
                                      
                                    @else

                                      @if($persona->id_tipo_personal == 2)
                                        @foreach($categorias_administrativo as $cat_adm)
                                          <option value="{{$cat_adm->id_categ_admi}}">{{$cat_adm->descripcion}}</option>
                                        @endforeach
                                      @elseif($persona->id_tipo_personal == 3)
                                        @foreach($categorias_docente as $cat_doc)
                                          <option value="{{$cat_doc->id_categ_doc}}">{{$cat_doc->descripcion}}</option>
                                        @endforeach
                                      @endif

                                    @endif
                                  </select>

                                  @if ($errors->has('selec1'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('selec1') }}</strong>
                                    </span>
                                  @endif
                                </div>
                              </div>
                            </div>
                            <!-- fin grupo -->

                            <!-- Condicion -->
                            <div class="col" id="adm2">
                              <div class="card">
                                <div class="card-header p-0 text-center">
                                @if($persona->id_tipo_personal == 2) Condición @elseif($persona->id_tipo_personal == 3) Regimen @endif
                                </div>
                                
                                <div class="card-body p-1">
                                  <select id="selec2" name="selec2" class="form-control form-control-sm {{ $errors->has('selec2') ? ' is-invalid' : '' }}">
                                  @if(!$errors->has('selec2'))

                                    @if($persona->id_tipo_personal == 2)
                                      @foreach($condicion_administrativo as $cond_adm)
                                        <option value="{{$cond_adm->id_condicion}}" @if($persona->administrativo->id_condicion == $cond_adm->id_condicion) selected @endif>{{$cond_adm->descripcion}}</option>
                                      @endforeach
                                    @elseif($persona->id_tipo_personal == 3)
                                      @foreach($regimen_docente as $reg_doc)
                                        <option value="{{$reg_doc->id_regimen}}" @if($persona->docente->id_regimen == $reg_doc->id_regimen) selected @endif>{{$reg_doc->descripcion}}</option>
                                      @endforeach
                                    @endif

                                  @else

                                    @if($persona->id_tipo_personal == 2)
                                        @foreach($condicion_administrativo as $cond_adm)
                                          <option value="{{$cond_adm->id_condicion}}">{{$cond_adm->descripcion}}</option>
                                        @endforeach
                                      @elseif($persona->id_tipo_personal == 3)
                                        @foreach($regimen_docente as $reg_doc)
                                          <option value="{{$reg_doc->id_regimen}}">{{$reg_doc->descripcion}}</option>
                                        @endforeach
                                      @endif
                                  @endif
                                  </select>

                                  @if ($errors->has('selec2'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('selec2') }}</strong>
                                    </span>
                                  @endif
                                </div>
                              </div>
                            </div>
                            <!-- Fin condicion -->
                          </div>
                        
                        </div>
                      </div>

                      <div class="form-row my-2">
                        <div class="col">
                          <button type="submit" id="regist" class="btn btn-primary info-box-icon" title="Guardar"><i class="far fa-save"></i></button>
                        </div>
                      </div>
                      
                    </form>
                    <!-- fin formulario2 -->
                  </div>
                </div>
                <!-- fin Situacion Laboral  -->

                <!-- boton salir -->
                <div class="form-row my-2">
                  <div class="col-10"></div>
                  <div class="col-2">
                    <!-- <button type="submit" id="regist" class="btn btn-primary info-box-icon" title="Guardar"><i class="far fa-save"></i></button> -->
                    <a href="{{route('administLegajo')}}" class="btn btn-danger info-box-icon" title="Salir"><span><i class="fas fa-door-open"></i></span></a>
                  </div>
                </div> 
                <!-- fin boton salir -->

              </div>
              <!-- fin de contenedor -->
            </div>
            <!-- Fin Cuerpo Tarjeta 2 -->

            <!-- Inicio Footer -->
            <div class="card-footer py-1">
              <div class="form-row my-2">
                <div class="col-11"></div>
                <div class="col-1">  
                 
                  <a href="{{route('administLegajo',$persona->id_persona)}}" class="btn btn-primary" title="Siguiente Modulo"><span><i class="fas fa-arrow-right"></i></span></a>
                  <!-- <button type="submit" class="btn btn-primary m-auto info-box-icon" title="Ingresar"><span><i class="fas fa-book-open"></i></span></button> -->
                    
                </div>
              </div>
            </div>
            <!-- fin footer -->
          </div>
          <!-- Fin Tarjeta 2 -->
        </div>
      </div>

    </div>
  </div>
  <!-- Fin del contenedor -->
</div>
<!-- fin de la columna -->

<!-- Inicio de la columna para botones de los modulos -->
<div class="col-1 px-0" style="max-width:4%">
  <!-- inicio del contenedor -->
  <div class="container">
    <div class="row">
      <div class="col px-0">
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>I</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>II</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>III</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>IV</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>V</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>VI</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>VII</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>VIII</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>IX</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>X</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>XI</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>XII</span></button>
        </div>
        <div class="my-2">
          <button class='btn btn-secondary' value='' style="width: 42px"><span>XIII</span></button>
        </div>
      </div>

    </div>
  </div>
  <!-- fin del contenedor -->
</div>
<!-- fin de la columna -->
@endsection

@section('modales')
<div class="row">
  <!-- Modal para Idioma nuevos -->
  <div class="modal fade" id="modalIdioma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelIdioma" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header py-2">
          <h5 class="modal-title" id="exampleModalLabelIdioma"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body py-0">

          <!--     *************       -->
          <div class="container px-3">
            <!-- Inicio Formulario -->
            <form id="formularioModal1">
              <input type="hidden" name="_token2" id="token2" value="{{ csrf_token() }}">

              <div class="form-row my-2">
                <div class="col">
                  <div class="form-group mb-1">
                    <input type="hidden" id="id_idioma">
                  </div>
                </div>
              </div>

              <div class="form-row my-2">
                <div class="col">
                  <div class="form-group mb-1">
                    <label for="tipo_idioma">Idioma:</label>
                    <select id="tipo_idioma" class="form-control form-control-sm">

                    </select>
                  </div>
                </div>
              </div>

              <div class="form-row my-2">
                <div class="col pb-0">
                  <label for="">Dominio del Idioma:</label>

                  <fieldset class="form-group mb-1">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dominio" id="ninguno"
                        value="ninguno" checked>
                      <label class="form-check-label" for="ninguno">Ninguno</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dominio" id='basico' value="basico">
                      <label class="form-check-label" for="basico">Básico</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dominio" id='intermedio' value="intermedio">
                      <label class="form-check-label" for="intermedio">Intermedio</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="dominio" id="avanzado" value="avanzado">
                      <label class="form-check-label" for="avanzado">Avanzado</label>
                    </div>
                  </fieldset>
                </div>

              </div>

              <div class="form-row my-2">
                <div class="col">
                  <div class="form-group mb-1">
                    <label for="centroEstudio">Centro de Estudios:</label>
                    <input type="text" class="form-control form-control-sm" id="centroEstudio" placeholder="">
                  </div>
                </div>
              </div>

              <div class="form-row my-2">
                <div class="col">
                  <div class="form-group mb-1">
                    <label for="tipo_doc">Tipo de Documento:</label>
                    <select id="tipo_doc" class="form-control form-control-sm">

                    </select>
                  </div>
                </div>

                <div class="col-2 my-auto">
                  <div class="form-group mb-1">

                    <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_pdfIdioma' title="Subir PDF de Idioma"><i class="far fa-file-pdf"></i></button>

                    <input type="file" id="pdf_Idioma" name="pdf_Idioma" style="display:none;" />
                  </div>
                </div>
                
              </div>

              <div class="form-row my-2">

                <div class="col">
                  <div class="form-group mb-1">
                    <label for="horas">Horas:</label>
                    <input type="text" class="form-control form-control-sm" id="horas" placeholder="">
                  </div>
                </div>

                <div class="col">
                  <div class="form-group mb-1">
                    <label for="creditos">Créditos:</label>
                    <input type="text" class="form-control form-control-sm" id="creditos" placeholder="">
                  </div>
                </div>

              </div>

            </form>
          </div>

          <!--   ********************    -->

        </div>
        <div class="modal-footer py-1">
          <button type="button" class="btn btn_idioma btn-primary" data-dismiss="modal"></button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para ver idiomas -->
  <div class="modal fade" id="modalIdioma2" tabindex="-1" role="dialog" aria-labelledby="exampleModalIdioma2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalIdioma2">Ver Idioma</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <div class="form-group row">
            <label for="tipo_idiomaM2" class="col-sm-3 col-form-label">Idioma:</label>
            <div class="col-sm-9">
              <input type="text" readonly class="form-control-plaintext" id="tipo_idiomaM2" value="">
            </div>
          </div>

          <div class="form-group row">
            <label for="dominioM2" class="col-sm-3 col-form-label">Dominio:</label>
            <div class="col-sm-9">
              <input type="text" readonly class="form-control-plaintext" id="dominioM2" value="">
            </div>
          </div>

          <div class="form-group row">
            <label for="centroEstudioM2" class="col-sm-3 col-form-label">Entidad:</label>
            <div class="col-sm-9">
              <input type="text" readonly class="form-control-plaintext" id="centroEstudioM2" value="">
            </div>
          </div>

          <div class="form-group row">
            <label for="tipo_docM2" class="col-sm-4 col-form-label">Tipo Documento:</label>
            <div class="col-sm-8">
              <input type="text" readonly class="form-control-plaintext" id="tipo_docM2" value="">
            </div>
          </div>

          <div class="form-group row">
            <label for="horasM2" class="col-sm-3 col-form-label">Horas:</label>
            <div class="col-sm-9">
              <input type="text" readonly class="form-control-plaintext" id="horasM2" value="">
            </div>
          </div>

          <div class="form-group row">
            <label for="creditosM2" class="col-sm-3 col-form-label">Creditos:</label>
            <div class="col-sm-9">
              <input type="text" readonly class="form-control-plaintext" id="creditosM2" value="">
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin del Modal ver idioma -->

  <!-- Modal para Eliminar idiomas -->
  <div class="modal fade" id="modalIdioma3" tabindex="-1" role="dialog" aria-labelledby="exampleModalIdioma3" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalIdioma3">Eliminar Idioma</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <div class="form-group mb-1">
            <input type="hidden" id="id_modal2">
          </div>

          <div class="form-group row">
            <h5>¿Estas seguro de eliminar este registro?</h5>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn_eliminarIdioma btn-danger" data-dismiss="modal"><span><i class="fas fa-trash"></i></spna> Eliminar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modal eliminar idioma -->

  <!-- Modal para Derecho Habientes nuevos -->

  <div class="modal fade" id="modalHabiente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelNuevoHabiente" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header py-2">
          <h5 class="modal-title" id="exampleModalLabelNuevoHabiente"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body py-0">

          <!--     *************       -->
          <div class="container px-3">
            <!-- Inicio Formulario -->
            <form id="formularioModal2">
              
              <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
              
              <!--  Campo hidden  -->
              <div class="form-row my-2">
                <div class="col">
                  <div class="form-group mb-1">
                    <input type="hidden" id="id_habiente">
                  </div>
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col">
                    <div class="alert alert-primary msj_exitoHabiente" role="alert" style="display:none">
                    </div>
                </div>
              </div>

              <div class="form-row mb-2">
                <div class="col">
                  <div class="form-group mb-1">
                    <label for="parentesco">Parentesco:</label>
                    <select id="parentesco" name="parentesco" class="form-control form-control-sm">

                    </select>
                  </div>
                </div>

                <div class="col">
                  <div class="form-group mb-1">
                                        
                  </div>
                </div>

              </div>

              <div class="form-row my-2">
                
                <div class="col">
                  <div class="form-group mb-1">
                    <label for="n_partida">N° de Partida de Nacimiento:</label>
                    <input type="text" class="form-control form-control-sm" id="n_partida" name="n_partida" placeholder="">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group mb-1">
                    <label for="fech_emision">Fecha de Emisión:</label>
                    <input type="date" class="form-control form-control-sm" id="fech_emision" name="fech_emision" placeholder="">
                  </div>
                </div>

                <div class="col-2 my-auto">
                  <div class="form-group mb-1">

                    <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_partidaHabiente' title="Subir PDF de Partida Nacimiento"><i class="far fa-file-pdf"></i></button>

                    <input type="file" id="pdf_partidaNacHab" name="pdf_partidaNacHab" style="display:none;" />
                  </div>
                </div>

              </div>

              <div class="form-row my-2">
                <div class="col">
                  <div class="form-group mb-1">
                    <label for="expedida">Expedida por:</label>
                    <input type="text" class="form-control form-control-sm" id="expedida" name="expedida" placeholder="Por ejem: Municipalidad de Chiclayo">
                  </div>
                </div>
              </div>

              <div class="form-row my-2">
                <div class="col">
                  <div class="form-row mb-1">
                    <label for="tipoDocIdent">Tipo y N° de Documento de Identidad:</label>
                  </div>
                  <div class="form-row mb-1">
                    <div class="col">
                      <select id="tipoDocIdent" name="tipoDocIdent" class="form-control form-control-sm">
                        
                      </select>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control form-control-sm" id="numero" name="numero" placeholder="">
                    </div>
                  </div>
                  
                </div>
                
                <div class="col-2 my-auto">
                  <div class="form-group mb-1">

                    <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_docIdent' title="Subir PDF del Doc. Identidad"><i class="far fa-file-pdf"></i></button>

                    <input type="file" id="pdf_docIdentHab" name="pdf_docIdentHab" style="display:none;" />
                  </div>
                </div>
              </div>

              <div class="form-row my-2">

                <div class="col">

                  <div class="form-row">
                    <label for="creditos">Apellidos y Nombres:</label>
                  </div>

                  <div class="form-row">
                    <div class="col">

                      <div class="form-row">
                        <div class="col">
                          <input type="text" class="form-control form-control-sm" id="ape_pater" name="ape_pater" placeholder="">
                        </div>

                        <div class="col">
                          <input type="text" class="form-control form-control-sm" id="ape_mater" name="ape_mater" placeholder="">
                        </div>
                      </div>

                      <div class="form-row mt-2">
                        <div class="col">
                          <input type="text" class="form-control form-control-sm" id="nombres" name="nombres" placeholder="">
                        </div>
                      </div>

                    </div>
                  </div>

                </div>

              </div>

              <div class="form-row my-2">

                <div class="col">
                  <div class="form-group mb-1">
                    <label for="fech_naci">Fecha Nacimiento:</label>
                    <input type="date" class="form-control form-control-sm" id="fech_naci" name="fech_naci" placeholder="">
                  </div>
                </div>

                <div class="col">
                  <div class="form-group mb-1">
                    <label for="fech_termino">Sexo:</label>
                    <fieldset class="form-group mb-1">
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="generoHab" id="mascHab" value="masculino">
                        <label class="form-check-label" for="mascHab">M</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="generoHab" id="femHab" value="femenino">
                        <label class="form-check-label" for="femHab">F</label>
                      </div>
                    </fieldset>
                  </div>
                </div>

              </div>

            </form>
          </div>

          <!--   ********************    -->

        </div>
        <div class="modal-footer py-1">
          <button type="button" class="btn btn_habiente btn-primary"></button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>

    </div>

  </div>

  <!-- Modal para ver HABIENTE -->
  <div class="modal fade" id="modalHabiente2" tabindex="-1" role="dialog" aria-labelledby="exampleModalHabiente2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalHabiente2">Ver Habiente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form id="formVerHabiente">
          <div class="col">
            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="parentescoM2" class="col-sm-12 col-form-label">Parentesco:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="parentescoM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="partNacM2" class="col-sm-12 col-form-label">N° de Partida Nacimiento:</label> 
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="partNacM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="fechEmisionM2" class="col-sm-12 col-form-label">Fecha de Emisión:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="fechEmisionM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="expedidaM2" class="col-sm-12 col-form-label">Expedida por:</label>
              </div>
              
              <div class="col-sm-6">
                <textarea readonly class="form-control-plaintext" id="expedidaM2" cols="30" rows="2" value=""></textarea>
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="docIdentM2" class="col-sm-12 col-form-label">Tipo Doc. Identidad:</label>
              </div>
              
              <div class="col-sm-6">
                <textarea readonly class="form-control-plaintext" id="docIdentM2" cols="30" rows="2" value=""></textarea>
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="nroDocIdentM2" class="col-sm-12 col-form-label">N° Doc.:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="nroDocIdentM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="apeParernoM2" class="col-sm-12 col-form-label">Apell. Paterno:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="apeParernoM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="apeMaternoM2" class="col-sm-12 col-form-label">Apell. Materno:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="apeMaternoM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="nombresM2" class="col-sm-12 col-form-label">Nombres:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="nombresM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="fechNacimientoM2" class="col-sm-12 col-form-label">Fecha Nacimiento:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="fechNacimientoM2" value="">
              </div>
            </div>

            <div class="form-group row mb-1">
              <div class="col-6">
                <label for="sexoM2" class="col-sm-12 col-form-label">Sexo:</label>
              </div>
              
              <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="sexoM2" value="">
              </div>
            </div>
          </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin del Modal ver idioma -->

  <!-- Modal para Eliminar HABIENTE -->
  <div class="modal fade" id="modalHabiente3" tabindex="-1" role="dialog" aria-labelledby="exampleModalHabiente3" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalHabiente3">Eliminar Habiente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="form-group mb-1">
              <input type="hidden" id="id_modalDelete">
            </div>

            <div class="form-group row">
              <h5>¿Estas seguro de eliminar este registro?</h5>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn_eliminarHabiente btn-danger" data-dismiss="modal"><span><i class="fas fa-trash"></i></spna> Eliminar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Fin Modal eliminar idioma -->


@endsection