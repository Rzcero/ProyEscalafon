@extends('layouts.plantilla')

@section('zona_js')
  <script src="{{ url('js/mainestudios.js') }}"></script>
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
                <div class="container px-0">
                    
                  <!-- Inicio Formulario -->
                  <form id="formularioestudiosbasicos" action="{{route('updateEstudiosBasicos', $persona->id_persona)}}" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" id="token_est_bas" value="{{ csrf_token() }}">

                    <input type="hidden" id="myID" name="myID" value="{{ $persona->id_persona}}">

                    <!--  Titulo  -->
                    <div class="form-row my-2">
                      <div class="col">
                        <div class="card">
                          <div class="card-body p-0">
                            <div class="form-row">
                              <div class="col-2">
                                <div class="form-group mb-0">
                                  <span class="info-box-icon bg-warning">II</span>
                                </div>
                              </div>

                              <div class="col-10 bg-secondary">
                                <div class="form-group m-1">
                                  <h5 class="my-2"><label class="m-auto"> Situación Académica</label></h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- fin Titulo -->

                    <!--  I.E. Primaria  -->
                    <div class="form-row my-1">
                      <div class="col">
                        <div class="card">
                          <div class="card-header p-0 text-center">
                              I.E. Estudios Primarios
                          </div>

                          <div class="card-body p-1">
                            <input type="text" name="ie_primaria" class="form-control form-control-sm" id="ie_primaria" placeholder="Institución Educativa Primaria" value="@if($estudios_basicos) {{ $estudios_basicos->ie_primaria }} @endif">
                          </div>
                        </div>
                      </div>

                      <!-- Subir PDF primaria -->
                      <div class="col-2">
                        <div class="card">
                          <div class="card-body p-0">
                            <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_pdfPrimaria' title="Subir PDF Secundaria"><i class="far fa-file-pdf"></i></button>

                            <input type="file" id="pdf_primaria" name="pdf_primaria" style="display:none;" />
                          </div>
                        </div>
                      </div>
                      <!-- Fin PDF -->
                        
                      <div class="col-3">
                        <div class="card">
                          <div class="card-header p-0 text-center">Año de Egreso</div>

                          <div class="card-body p-1">
                            <input type="text" name="anio_egreso_primaria" class="form-control form-control-sm" id="anio_egreso_primaria" placeholder="ej: 1990" value="@if($estudios_basicos) {{ $estudios_basicos->anio_egreso_primaria }} @endif">
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!--   I.E. Secundaria         -->
                    <div class="form-row my-2">
                      <div class="col">
                        <div class="card">
                          <div class="card-header p-0 text-center">I.E. Estudios Secundarios</div>

                          <div class="card-body p-1">
                            <input type="text" name="ie_secundaria" class="form-control form-control-sm" id="ie_secundaria" placeholder="Institución Educativa Secundaria" value="@if($estudios_basicos) {{ $estudios_basicos->ie_secundaria }} @endif">
                          </div>
                        </div>
                      </div>

                      <!-- Subir PDF secundaria -->
                      <div class="col-2">
                        <div class="card">
                          <div class="card-body p-0">

                            <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_pdfSecundaria' title="Subir PDF Secundaria"><i class="far fa-file-pdf"></i></button>

                            <input type="file" id="pdf_secundaria" name="pdf_secundaria" style="display:none;" />
                          </div>

                        </div>
                      </div>
                      <!-- Fin PDF -->
                        
                      <div class="col-3">
                        <div class="card">
                          <div class="card-header p-0 text-center">Año de Egreso</div>

                          <div class="card-body p-1">
                            <input type="text" name="anio_egreso_secundaria" class="form-control form-control-sm" id="anio_egreso_secundaria" placeholder="ej: 1990" value="@if($estudios_basicos) {{ $estudios_basicos->anio_egreso_secundaria }} @endif">
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-row my-2">
                      <div class="col">
                        <button type="submit" id="enviar" name="enviar" class="btn btn-primary info-box-icon" title="Guardar"><i class="far fa-save"></i></button>
                      </div>
                    </div>
                        
                  </form>
                  <!-- Fin Formulario -->
                               
                  <!--  Inicio Estudios Superiores  -->
                  <div class="form-row my-2">
                    <div class="col px-0">  
                      <div class="card">
                        <div class="card-header p-0 text-center">
                          Estudios Superiores
                        </div>

                        <div class="card-body p-1">
                          <div id="div_tabla_estudios_superiores">
                            <table class="table table-bordered table-sm">
                              <thead>
                                <tr>
                                  <td>Grado</td>
                                  <td>Centro de Estudios</td>
                                  <td>Nivel</td>
                                  <td width="144px">Opciones</td>
                                </tr>
                              </thead>
                              <tbody id="est_superiores"></tbody>
                            </table>
                          </div>

                          <caption>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEstudiosSuperiores" id="agregar_estudios_superiores">
                              Nuevo <span><i class="fas fa-plus"></i></span>
                            </button>
                          </caption>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  Fin Estudios Superiores  -->
                </div>
                <!-- Fin del Contenedor -->
              </div>
              <!-- Fin del Cuerpo Tarjeta 1 -->

              <!-- Inicio Footer -->
              <div class="card-footer">
                <div class="form-row my-2">
                  <div class="col-1">
                    <a href="{{route('datos.show',$persona->id_persona)}}" class="btn btn-primary" title="Modulo I"><span><i class="fas fa-arrow-left"></i></span></a>
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
                  <!--  Inicio contenedor -->
                  <div class="container px-0">
                    <!--  Inicio Otros Estudios  -->
                    <div class="form-row my-2">
                      <div class="col px-0">   
                        <div class="card">
                          <div class="card-header p-0 text-center">
                            Otros Estudios
                          </div>

                          <div class="card-body p-1">
                            <div id="div_tabla_otros_estudios">
                              <table class="table table-bordered table-sm">
                                <thead>
                                  <tr>
                                    <td>Tipo</td>
                                    <td>Denominación</td>
                                    <td>Horas</td>
                                    <td>Creditos</td>
                                    <td width="144px">Opciones</td>
                                  </tr>
                                </thead>
                                <tbody id=otros_estudios></tbody>
                              </table>
                            </div>
                            <caption>
                              <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modalOtrosEstudios" id="agregar_otro_estudio">
                                Nuevo <span><i class="fas fa-plus"></i></span>
                              </button>
                            </caption>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--  Fin Otros Estudios  -->

                    <!--  Produccion Intelectual y Cultural  -->
                    <div class="form-row my-2">
                      <div class="col px-0">   
                        <div class="card">
                          <div class="card-header p-0 text-center">
                            Producción Intelectual y Cultural
                          </div>

                          <div class="card-body p-1">
                            <div id="div_produccion_intelectual">

                              <table class="table table-bordered table-sm">
                                <thead>
                                  <tr>
                                    <td>Medio</td>
                                    <td>Nombre de la Publicación</td>
                                    <td>Año</td>
                                    <td width="144px">Opciones</td>
                                  </tr>
                                </thead>
                                <tbody id="pro_intelec"></tbody>
                              </table>
                            </div>

                            <caption>
                              <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modalProduccionIntelectual" id="agregar_produccion_intelectual">
                                Nuevo <span><i class="fas fa-plus"></i></span>
                              </button>
                            </caption>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!--  Fin Produccion Intelectual  -->

                    <!-- boton salir -->
                    <div class="form-row my-2">
                      <div class="col-9">
                        
                      </div>
                      
                      <div class="col-3">
                        <a href="{{route('administLegajo')}}" class="btn btn-danger info-box-icon" title="Salir" style="width:100px; font-size:20px;"><span>Salir <i class="fas fa-door-open"></i></span></a>
                      </div>
                    </div> 
                    <!-- fin boton salir -->

                  </div>
                  <!--  fin contenedor -->
              </div>
              <!-- Fin Cuerpo Tarjeta 2 -->

              <!-- Inicio Footer -->
              <div class="card-footer py-1">
                <div class="form-row my-2">
                  <div class="col-11">

                  </div>
                  <div class="col-1">  
                  
                    <a href="{{route('Estudios.show',$persona->id_persona)}}" class="btn btn-primary" title="Modulo III"><span><i class="fas fa-arrow-right"></i></span></a>
                                          
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
  @include('layouts.botones')
  <!-- fin de la columna -->

@endsection

@section('modales')
    <!-- Modal para Estudios Superiores nuevos -->
    <div class="modal fade" id="modalEstudiosSuperiores" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_estu_supe" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h5 class="modal-title" id="cerrar_modal_estu_supe">Estudios Superiores</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                           
                    <!--     *************       -->
                    <div class="container px-3">
                      <!-- Inicio Formulario -->
                      <form id="formularioestudiossuperiores">

                        <input type="hidden" name="_token" id="token_est_sup" value="{{ csrf_token() }}">

                        <div class="form-row my-2">
                          <div class="col"> 
                            <div class="form-group mb-1">
                              <input type="hidden" id="id_ESTU_SUPE">
                            </div>
                          </div>
                        </div>

                        <div class="form-row mt-2">
                          <div class="col">
                              <div class="alert alert-primary msj_exitoEstSuperior" role="alert" style="display:none">
                              </div>
                          </div>
                        </div>
                      
                        <div class="form-row my-2">
                          <div class="col">  
                            <div class="form-group mb-1">
                              <label for="nivel_estudio">Nivel de Estudio:</label>
                              <select id="nivel_estudio" name="nivel_estudio" class="form-control form-control-sm">
                                  
                              </select>
                            </div>
                          </div>

                          <div class="col pb-0">
                            <fieldset class="form-group mb-1">

                              <legend class="col-form-label">Estado de los Estudios:</legend>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estado" id="concluido" value="1" checked>
                                <label class="form-check-label" for="concluido">Concluidos</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estado" id="no_concluido" value="2">
                                <label class="form-check-label" for="no_concluido">No Concluidos</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estado" id="egresado" value="3">
                                <label class="form-check-label" for="egresado">Egresado</label>
                              </div>

                            </fieldset>
                          </div>
                        </div>

                        <div class="form-row my-2">
                          <div class="col">  
                            <div class="form-group mb-1">
                              <label for="modalidad">Modalidad:</label>
                              <select id="modalidad" name="modalidad" class="form-control form-control-sm">
                                    
                              </select>
                            </div>
                          </div>
                            
                        </div>

                        <div class="form-row my-2">
                          <div class="col">  
                            <div class="form-group mb-1">

                              <label for="centro_estudio">Centro de Estudios:</label>
                              <input type="text" class="form-control form-control-sm" id="centro_estudio_superior" name="centro_estudio_superior" placeholder="">
                              
                            </div>
                          </div>
                        </div>

                        <div class="form-row my-2">
                          <div class="col">  
                            <div class="form-group mb-1">
                              <label for="grado">Mención del Grado o Título:</label>
                              <select id="grado" name="grado" class="form-control form-control-sm">
                                  
                              </select>
                            </div>
                          </div>

                          <div class="col">  
                            <div class="form-group mb-1">
                              <label for="carrera">Carrera:</label>
                              <input type="text" class="form-control form-control-sm" id="carrera" name="carrera" placeholder="">
                            </div>
                          </div>

                          <div class="col-2 my-auto">
                            <div class="form-group mb-1">
                              <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_pdfEstudioSuperior' title="Subir PDF de Estudio"><i class="far fa-file-pdf"></i></button>

                              <input type="file" id="pdf_estudioSuperior" name="pdf_estudioSuperior" style="display:none;" />
                            </div>
                          </div>
                          
                        </div>

                        <div class="form-row my-2">
                          <div class="col">
                            <div class="form-group mb-1">
                              <label for="detalle"id="lbldetalle">Detalle del Título:</label>
                              <input type="text" class="form-control form-control-sm" id="detalle" name="detalle" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="form-row my-2">

                          <div class="col">
                            <div class="form-group mb-1">
                              <label for="fech_consejo" id="lblfech_consejo">Fecha de Consejo:</label>
                              <input type="date" class="form-control form-control-sm" id="fech_consejo" name="fech_consejo" placeholder="">
                            </div>
                          </div>

                          <div class="col">
                            <div class="form-group mb-1">
                              <label for="fech_emision" id="lblfech_emision">Fecha de Emisión:</label>
                              <input type="date" class="form-control form-control-sm" id="fech_emision" name="fech_emision" placeholder="">
                            </div>
                          </div>

                          <div class="col">  
                            <div class="form-group mb-1">
                              <label for="num_reg_titulo" id="lblnum_reg_titulo">Número de Registro del Título:</label>
                              <input type="text" class="form-control form-control-sm" id="num_reg_titulo" name="num_reg_titulo" placeholder="">
                            </div>
                          </div>

                        </div>

                        <div class="form-row my-2">

                          <div class="col">
                            <div class="form-group mb-1">
                                <label for="EntidadRegist" id="lblEntidadRegist"">Entidad del Registro del Título:</label>
                                <input type="text" class="form-control form-control-sm" id="EntidadRegist" name="EntidadRegist" placeholder="">
                            </div>
                          </div>

                          <div class="col">  
                            <div class="form-group mb-1">
                              <label for="nro_colegiatura" id="lblnro_colegiatura">Número de Colegiatura:</label>
                              <input type="text" class="form-control form-control-sm" id="nro_colegiatura" name="nro_colegiatura" placeholder="">                            
                            </div>
                          </div>

                          <div class="col">  
                            <div class="form-group mb-1">
                              <label for="nom_colegio" id="lblnom_colegio">Nombre del Colegio:</label>
                              <input type="text" class="form-control form-control-sm" id="nom_colegio" name="nom_colegio" placeholder="">
                            </div>
                          </div>

                        </div>

                      </form>
                    </div>
                         
                    <!--   ********************    -->
                                   
                </div>

                <div class="modal-footer py-1">
                   
                    <button type="button" class="btn btn_estudios_superiores btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
        </div>
    </div>
   
    <!-- Modal para VER estudios superiores 18/04/2019 -->
    <div class="modal fade" id="modal_ver_estudios_superiores" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_estudios_superiores" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="cerrar_modal_estudios_superiores">Ver Estudios uperiores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            
              <div class="modal-body">
                <form id="formVerEstSuperior">
                  <div class="col">
                    <div class="form-group row mb-1">
                      <div class="col-6">
                        <label for="nivel_estudio2" class="col-sm-12 col-form-label">Nivel de Estudio:</label>
                      </div>

                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="nivel_estudio2" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-1">
                      <div class="col-6">
                        <label for="estado2" class="col-sm-12 col-form-label">Estado de Estudio:</label>
                      </div>
                      
                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="estado2" value="">
                      </div>
                    </div>
                    
                    <div class="form-group row mb-1">
                      <div class="col-6">
                        <label for="modalidad2" class="col-sm-12 col-form-label">Modalidad:</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="modalidad2" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-1">
                      <div class="col-6">
                        <label for="centro_estudio2" class="col-sm-12 col-form-label">Centro de Estudios:</label>
                      </div>

                      <div class="col-sm-6">
                        <textarea readonly class="form-control-plaintext" id="centro_estudio2" cols="30" rows="2" value=""></textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-1" id="men_gra">
                      <div class="col-6">
                        <label for="grado2" class="col-sm-12 col-form-label">Mencion de Grado o Titulo:</label>
                      </div>

                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="grado2" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-1">
                      <div class="col-6">
                        <label for="carrera2" class="col-sm-12 col-form-label">Carrera:</label>
                      </div>

                      <div class="col-sm-6">
                        <textarea readonly class="form-control-plaintext" id="carrera2" cols="30" rows="2" value=""></textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-1" id="det_titu">
                      <div class="col-6">
                        <label for="detalle2" class="col-sm-12 col-form-label">Detalle del Título:</label>
                      </div>

                      <div class="col-sm-6">
                        <textarea readonly class="form-control-plaintext" id="detalle2" cols="30" rows="2" value=""></textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-1" id="f_con">
                      <div class="col-6">
                        <label for="fech_consejo2" class="col-sm-12 col-form-label">Fecha de Consejo:</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="fech_consejo2" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-1" id="f_emi">
                      <div class="col-6">
                        <label for="fech_emision2" class="col-sm-12 col-form-label">Fecha de Emisión:</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="fech_emision2" value="">
                      </div>
                    </div>
                                                          
                    <div class="form-group row mb-1" id="num_reg">
                      <div class="col-6">
                        <label for="num_reg_titulo2" class="col-sm-12 col-form-label">Número de Registro del Título:</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="num_reg_titulo2" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-1" id="ent_reg">
                      <div class="col-6">
                        <label for="EntidadRegist2" class="col-sm-12 col-form-label">Entidad del Registro del Título:</label>
                      </div>

                      <div class="col-sm-6">
                        <textarea readonly class="form-control-plaintext" id="EntidadRegist2" cols="30" rows="2" value=""></textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-1" id="n_coleg">
                      <div class="col-6">
                        <label for="nro_colegiatura2" class="col-sm-12 col-form-label">Número de Colegiatura:</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext" id="nro_colegiatura2" value="">
                      </div>
                    </div>

                    <div class="form-group row mb-1" id="nom_col">
                      <div class="col-6">
                        <label for="nom_colegio2" class="col-sm-12 col-form-label">Nombre del Colegio:</label>
                      </div>
                      <div class="col-sm-6">
                        <textarea readonly class="form-control-plaintext" id="nom_colegio2" cols="30" rows="2" value=""></textarea>
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
    <!-- Fin del Modal ver estudios superiores -->

    <!--   al final del modal lo colocamos de estudios superiores   -->
    <form action="/ProyEscalafon/public/destroyEstudiosSuperiores/:ESTUDIO_SUPERIOR_ID" method="post" id="form_deleteestudiossuperiores">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token9" id="token9" value="{{ csrf_token() }}">
    </form>  

    <form action="/ProyEscalafon/public/updateEstudiosSuperiores/:ESTUDIO_SUPERIOR_ID" method="post" id="form_updateestudiossuperiores">
        <input type="hidden" name="_method2" value="PUT">
        <input type="hidden" name="_token12" id="token12" value="{{ csrf_token() }}">
    </form>
    <!--   al final del modal lo colocamos de estudios superiores -->

    <!-- incio de Modal para eliminar estudios superiores 18/04/2019 -->
    <div class="modal fade" id="modal_eliminar_estudios_superiores" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_estudios_superiores2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cerrar_modal_estudios_superiores2">Eliminar Estudios Superiores</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">

                    <div class="form-group mb-1">
                        <input type="hidden" id="id_modal_eliminar_superiores">
                    </div>

                    <div class="form-group row">
                        <h5>¿Estas seguro de eliminar este registro?</h5>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn_eliminarEstudioSuperior btn-danger" data-dismiss="modal"><span><i class="fas fa-trash"></i></spna> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal para Otros Estudios nuevos -->
    
    <div class="modal fade" id="modalOtrosEstudios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelOtrosEstudios" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h5 class="modal-title" id="exampleModalLabelOtrosEstudios">Otros Estudios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                           
                    <!--     *************       -->
                    <div class="container px-3">
                        <!-- Inicio Formulario -->
                        <form id="formulariootrosestudios">
                            <input type="hidden" name="_token" id="token_otr_est" value="{{ csrf_token() }}">

                            <div class="form-row my-2">
                                <div class="col"> 
                                    <div class="form-group mb-1">
                                        <input type="hidden" id="id_OT_ES">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row mt-2">
                                <div class="col">
                                    <div class="alert alert-primary msj_exitoOtroEstudio" role="alert" style="display:none">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="tipo_estudios">Tipo de Estudios:</label>
                                        <select id="tipo_estudios" name="tipo_estudios" class="form-control form-control-sm">
                                            
                                        </select>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nom_estudios">Nombre de los Estudios:</label>
                                        <textarea class="form-control" id="nom_estudios" name="nom_estudios" cols="4" rows="3"></textarea>
                                    </div>
                                </div>
                                                                
                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="participacion">Participación:</label>
                                        <input type="text" class="form-control form-control-sm" id="participacion" name="participacion" placeholder="">
                                    </div>
                                </div>
                                                            
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="centro_estudio">Centro de Estudios:</label>
                                        <input type="text" class="form-control form-control-sm" id="centro_estudio" name="centro_estudio" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="tipo_doc">Tipo de Documento:</label>
                                        <select id="tipo_doc" name="tipo_doc" class="form-control form-control-sm">
                                             
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-3 my-auto">
                                    <div class="form-group mb-1">

                                        <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_pdfOtroEstudio' title="Subir PDF de Estudios"><i class="far fa-file-pdf"></i></button>

                                        <input type="file" id="pdf_otroEstudio" name="pdf_otroEstudio" style="display:none;" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row my-2">

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="fech_inicio">Fecha de Inicio:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_inicio_otros_estudios" name="fech_inicio_otros_estudios" placeholder="">
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="fech_termino">Fecha de Termino:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_termino_otros_estudios" name="fech_termino_otros_estudios" placeholder="">                             
                                    </div>
                                </div>

                            </div>
                            
                            <div class="form-row my-2">

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="horas">Horas:</label>
                                        <input type="text" class="form-control form-control-sm" id="horas" name="horas" value="0" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="creditos">Créditos:</label>
                                        <input type="text" class="form-control form-control-sm" id="creditos" name="creditos" value="0" placeholder="">
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                    <!--   ********************    -->
                </div>

                <div class="modal-footer py-1">
                    <button type="button" class="btn btn_otros_estudios btn-primary"></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!--   al final del modal lo colocamos de otros estudios    -->
    <form action="/ProyEscalafon/public/destroyOTrosEStudios/:OTRO_ESTUDIO_ID" method="post" id="form_deleteotrosestudios">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token3" id="token3" value="{{ csrf_token() }}">
    </form>  

    <form action="/ProyEscalafon/public/updateOtrosEstudios/:OTRO_ESTUDIO_ID" method="post" id="form_updateotrosestudios">
        <input type="hidden" name="_method2" value="PUT">
        <input type="hidden" name="_token4" id="token4" value="{{ csrf_token() }}">
    </form>
    <!--   al final del modal lo colocamos de otros estudios  -->

    <!-- Modal para ver otros estudios 06/04/2019 -->
    <div class="modal fade" id="modal_ver_otros_esudios" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_otros_estudios" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cerrar_modal_otros_estudios">Ver Otros Estudios</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            
          <div class="modal-body">
            <form id="formVerOtrosEstudios"> 
              <div class="col">
                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="tipo_idiomaM2" class="col-sm-12 col-form-label">Tipo de Estudios:</label>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="tipo_estudios2" value="">
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="nom_estudios2" class="col-sm-12 col-form-label">Nombre de los Estudios:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <textarea readonly class="form-control-plaintext" id="nom_estudios2" cols="30" rows="2" value=""></textarea>
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="participacion2" class="col-sm-12 col-form-label">Participación:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="participacion2" value="">
                  </div>
                </div>
                
                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="centro_estudio2" class="col-sm-12 col-form-label">Centro de Estudios:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <textarea readonly class="form-control-plaintext" id="centro_estudio2" cols="30" rows="2" value=""></textarea>
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="tipo_doc2" class="col-sm-12 col-form-label">Tipo de Documento:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="tipo_doc2" value="">
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="fech_inicio_otros_estudios2" class="col-sm-12 col-form-label">Fecha de Inicio:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="fech_inicio_otros_estudios2" value="">
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="fech_termino_otros_estudios2" class="col-sm-12 col-form-label">Fecha de Termino:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="fech_termino_otros_estudios2" value="">
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="horas2" class="col-sm-12 col-form-label">Horas:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="horas2" value="">
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="creditos2" class="col-sm-12 col-form-label">Creditos:</label>
                  </div>
                  
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="creditos2" value="">
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
    <!-- Fin del Modal ver otros estudios -->

    <!-- incio de Modal para eliminar otros estudios 06/04/2019 -->
    <div class="modal fade" id="modal_eliminar_otros_estudios" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_otros_estudios2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cerrar_modal_otros_estudios2">Eliminar Otros Estudios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">

                  <div class="form-group mb-1">
                    <input type="hidden" id="id_modal_eliminar_otros">
                  </div>

                  <div class="form-group row">
                    <h5>¿Estas seguro de eliminar este registro?</h5>
                  </div>

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn_eliminarOtrosEstudios btn-danger" data-dismiss="modal"><span><i class="fas fa-trash"></i></spna> Eliminar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del Modal ver otros estudios -->

    <!-- Modal para Produccion intelectual -->
    <div class="modal fade" id="modalProduccionIntelectual" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_prod_intel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h5 class="modal-title" id="cerrar_modal_prod_intel">Produccion Intelectual</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                           
                    <!--     *************       -->
                    <div class="container px-2">
                        <!-- Inicio Formulario -->
                        <form id="formularioproduccionintelectual">

                          <input type="hidden" name="_token" id="token_pro_int" value="{{ csrf_token() }}">

                          <div class="form-row my-2">
                            <div class="col"> 
                              <div class="form-group mb-1">
                                <input type="hidden" id="id_PROD_INTEL">
                              </div>
                            </div>
                          </div>

                          <div class="form-row mt-2">
                            <div class="col">
                                <div class="alert alert-primary msj_exitoProdIntelec" role="alert" style="display:none">
                                </div>
                            </div>
                          </div>

                          <div class="form-row my-1">
                            <div class="col-6">  
                              <div class="form-group mb-1">
                                <label for="tipomedio">Tipo de Medio:</label>
                                <select id="tipomedio" name="tipomedio" class="form-control form-control-sm">
                                    
                                </select>
                              </div>
                            </div>
                            <!-- Medio escrito -->
                            <div class="col" id="m_escrito" style="display:none;">  
                              <div class="form-group mb-1">
                                <label for="medio_escrito">Medio:</label>
                                <select id="medio_escrito" name="medio_escrito" class="form-control form-control-sm">
                                    
                                </select>
                              </div>
                            </div>
                              
                            <!-- Medio Multimedia -->
                            <div class="col" id="m_multimedia" style="display:none;">  
                              <div class="form-group mb-1">
                                <label for="medio_multimedia">Medio:</label>
                                <select id="medio_multimedia" name="medio_multimedia" class="form-control form-control-sm">
                                    
                                </select>
                              </div>
                            </div>
                              
                          </div> 
                          
                          <div class="form-row my-2">
                            <div class="col">  
                              <div class="form-group mb-1">
                                <label for="nom_publicacion">Nombre de la Publicación:</label>
                                <input type="text" class="form-control form-control-sm" id="nom_publicacion" name="nom_publicacion" placeholder="">
                              </div>
                            </div>
                          </div>
                            
                          <div class="form-row my-2">

                            <div class="col">
                              <div class="form-group mb-1">
                                <label for="fech_publicacion">Fecha de Publicación:</label>
                                <input type="date" class="form-control form-control-sm" id="fech_publicacion" placeholder="">
                              </div>
                            </div>

                            <!-- Subir PDF de doc identidad -->
                            <div class="col-2 my-auto">
                                <div class="card">
                                    <div class="card-body p-0">

                                        <button type="button" class="btn btn-success m-auto info-box-icon" id='btn_pdf_prodIntelectual' title="Subir PDF de Producción Intelectual"><i class="far fa-file-pdf"></i></button>

                                        <input type="file" id="pdf_prodIntelectual" name="pdf_prodIntelectual" style="display:none;" />
                                    </div>

                                </div>
                            </div>
                            <!-- Fin PDF -->

                          </div>
                        
                        </form>
                    </div>
                         
                    <!--   ********************    -->
                                         
                </div>
                <div class="modal-footer py-1">
                  <button type="button" class="btn btn_produccion_intelectual btn-primary">Guardar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!--   al final del modal lo colocamos de produccion intelectual    -->
    <form action="/ProyEscalafon/public/destroyProduccionIntelectual/:PRODUCCION_INTELECTUAL_ID" method="post" id="form_deleteproduccionintelectual">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token6" id="token6" value="{{ csrf_token() }}">
    </form>  

    <form action="/ProyEscalafon/public/updateProduccionIntelectual/:PRODUCCION_INTELECTUAL_ID" method="post" id="form_updateproduccionintelectual">
        <input type="hidden" name="_method2" value="PUT">
        <input type="hidden" name="_token8" id="token8" value="{{ csrf_token() }}">
    </form>
    <!--   al final del modal lo colocamos de produccion intelectual  -->

    <!-- Modal para VER produccion intelectual 14/04/2019 -->
    <div class="modal fade" id="modal_ver_produccion_intelectual" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_prod_intel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="cerrar_modal_prod_intel">Ver Produccion Intelectual</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
      
          <div class="modal-body">
            <form id="formVerProducIntelectual"> 
              <div class="col">
                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="tipomedio2" class="col-sm-12 col-form-label">Tipo de Medio:</label>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="tipomedio2" value="">
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="medio2" class="col-sm-12 col-form-label">Medio:</label>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="medio2" value="">
                  </div>
                </div>
                
                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="nom_publicacion2" class="col-sm-12 col-form-label">Nombre:</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="nom_publicacion2" value="">
                  </div>
                </div>

                <div class="form-group row mb-1">
                  <div class="col-6">
                    <label for="fech_publicacion2" class="col-sm-12 col-form-label">Fecha de Publicacion:</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" readonly class="form-control-plaintext" id="fech_publicacion2" value="">
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
    <!-- Fin del Modal ver Produccion Intelectual-->

    <!-- incio de Modal para eliminar produccion intelectual 11/04/2019 -->
    <div class="modal fade" id="modal_eliminar_produccion_intelectual" tabindex="-1" role="dialog" aria-labelledby="cerrar_modal_produccion_intelectual2" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cerrar_modal_produccion_intelectual2">Eliminar Produccion Intelectual</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      
          <div class="modal-body">

            <div class="form-group mb-1">
              <input type="hidden" id="id_modal_eliminar_produccion">
            </div>

            <div class="form-group row">
              <h5>¿Estas seguro de eliminar este registro?</h5>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn_eliminarProduccionIntelectual btn-danger" data-dismiss="modal"><span><i class="fas fa-trash"></i></spna> Eliminar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal ver otros estudios -->

@endsection
