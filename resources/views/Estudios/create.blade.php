@extends('layouts.plantilla')

@section('titulo')
    Estudios 
@endsection

@section('contenedor')



    <div class="container">
        <div class="card-group">
            <!-- Tarjeta 1 -->
            <div class="card">
                <!-- Cuerpo de la tarjeta 1 -->
                <div class="card-body">
                                    
                    <!--  Inicio contenedor del Formulario -->
                    <div class="container1 px-0" id="tabla1">
                        
                        
                        <!-- Inicio Formulario -->
                        <form id="formularioestudiosbasicos">
                             <input type="hidden" name="_token" id="token_est_bas" value="{{ csrf_token() }}">
                            <!--  I.E. Primaria  -->



                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            I.E. Estudios Primarios
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" name="ie_primaria" class="form-control form-control-sm" id="ie_primaria" placeholder="Institución Educativa Primaria" value="IE.SAN JOSE">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-2">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <button class="btn btn-primary btn-block text-center">pdf</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">Año de Egreso</div>

                                        <div class="card-body p-1">
                                            <input type="text" name="anio_egreso_primaria" class="form-control form-control-sm" id="anio_egreso_primaria" placeholder="ej: 1990">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin I.E. Primaria  -->

                            <!-- Pais y Ubigeo de la I.E. Primaria -->
                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">País de la I.E. Primaria</div>

                                        <div class="card-body p-1">
                                            <select id="pais_primaria" name="pais_primaria" class="form-control form-control-sm">
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Ubigeo de la I.E.
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" name="ubi_primaria" class="form-control form-control-sm" id="ubi_primaria" placeholder="000000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="card">

                                    </div>
                                </div>
                            </div>
                            <!-- fin -->

                            <!-- Departamento/Provincia/Distrito I.E. Primaria -->
                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Departamento / Provincia / Distrito de I.E.
                                        </div>

                                        <div class="card-body p-1">
                                            <div class="form-row">
                                                <div class="col">
                                                    <input type="text" name="dep_primaria" class="form-control form-control-sm" id="dep_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="prov_primaria" class="form-control form-control-sm"  id="prov_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="dist_primaria" class="form-control form-control-sm"  id="dist_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  fin  -->

                            <!--   I.E. Secundaria         -->
                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">I.E. Estudios Secundarios</div>

                                        <div class="card-body p-1">
                                            <input type="text" name="ie_secundaria" class="form-control form-control-sm" id="ie_secundaria" placeholder="Institución Educativa Secundaria">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <button class="btn btn-primary btn-block text-center">pdf</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">Año de Egreso</div>

                                        <div class="card-body p-1">
                                            <input type="text" name="anio_egreso_secundaria" class="form-control form-control-sm" id="anio_egreso_secundaria" placeholder="ej: 1990">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin I.E. Secundaria  -->

                            <!--   Pais  y Ubigeo de la I.E. Secundaria         -->
                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">País de la I.E.</div>

                                        <div class="card-body p-1">
                                            <select id="pais_secundaria" class="form-control form-control-sm" name="pais_secundaria">
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Ubigeo de la I.E.
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" name="ubi_secundaria" class="form-control form-control-sm" id="ubi_secundaria" placeholder="000000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="card">

                                    </div>
                                </div>
                            </div>
                            <!-- fin -->

                            <!-- Departamento/Provincia/Distrito I.E. Secundaria -->
                            <div class="form-row my-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Departamento / Provincia / Distrito de I.E. Secundaria
                                        </div>

                                        <div class="card-body p-1">
                                            <div class="form-row">
                                                <div class="col">
                                                    <input type="text" name="dep_secundaria" class="form-control form-control-sm" id="dep_secundaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="prov_secundaria" class="form-control form-control-sm"  id="prov_secundaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="dist_secundaria" class="form-control form-control-sm"  id="dist_secundaria" placeholder="NO DEFINIDO">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  fin  -->
                            <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
                                                      
     
                        </form>
                        <!-- Fin Formulario -->

                        </div>
                    <!-- Fin del Contenedor del Formulario -->
                        
                        
                    <!--  Inicio contenedor Estudios f  -->
                    <div class="container my-3 px-0" id="tabla2">
                         
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
                                            <td>Opciones</td>
                                        </tr>
                                    </thead>
                                    <tbody id="est_superiores"></tbody>
                                </table>
                            </div>

                                <caption>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#modalEstudiosSuperiores" id="agregar_estudios_superiores">
                                        Agregar Nuevo <span><i class="material-icons">add</i></span>
                                    </button>
                                </caption>
                            </div>
                        </div>
  
                    </div>
                    <!--  Fin Estudios Superiores  -->
                    
                </div>
                <!-- Fin del Cuerpo Tarjeta 1 -->
            </div>
            <!-- Fin Tarjeta 1 -->
            
            <!-- Inicio Tarjeta 2 -->
            <div class="card">
                <!-- Inicio Cuerpo Tarjeta 2 -->
                <div class="card-body">
                    
                    <!--  Inicio contenedor Otros Estudios  -->
                    <div class="container my-3 px-0">
                                                
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
                                                <td>Opciones</td>
                                            </tr>
                                        </thead>
                                        <tbody id=otros_estudios></tbody>
                                    </table>
                                </div>
                                <caption>
                                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modalOtrosEstudios" id="agregar_otro_estudio">
                                        Agregar Nuevo <span><i class="material-icons">add</i></span>
                                    </button>
                                </caption>
                            </div>
                        </div>
                        
                    </div>
                    <!--  Fin Otros Estudios  -->
                    
                    <!--  Produccion Intelectual y Cultural  -->
                    <div class="container my-3 px-0">
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
                                            <td>Opciones</td>
                                        </tr>
                                    </thead>
                                    <tbody id="pro_intelec"></tbody>
                                </table>
                            </div>

                            <caption>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#modalProduccionIntelectual" id="agregar_produccion_intelectual">
                                        Agregar Nuevo <span><i class="material-icons">add</i></span>
                                    </button>

                                </caption>


                             </div>
                        </div>
                    </div>

                    <!--  Fin Produccion Intelectual  -->
                </div>
                <!-- Fin Cuerpo Tarjeta 2 -->
            </div>
            <!-- Fin Tarjeta 2 -->
          
        </div>
    
    </div>




    
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

                            <!--    -->
                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nivel_estudio">Nivel de Estudio:</label>
                                        <select id="nivel_estudio" class="form-control form-control-sm">
                                            
                                           
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
                                        <select id="modalidad" class="form-control form-control-sm">
                                            
                                            
                                        </select>
                                    </div>
                                </div>
            <!--
                                <div class="col-2">  ELIMINAMOS EL CICLO 27/03/2019
                                    <div class="form-group mb-1">
                                        <label for="ciclo">Ciclo:</label>
                                        <input type="text" class="form-control form-control-sm" id="ciclo" placeholder="">
                                    </div>
                                </div> -->
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="centro_estudio">Centro de Estudios:</label>
                                        <input type="text" class="form-control form-control-sm" id="centro_estudio_superior" placeholder="">
                                        
                                      <!--  <select id="centro_estudio_superior" class="form-control form-control-sm"> 
                                          
                                        </select>-->
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="grado" id="lblgrado">Mención del Grado o Título:</label>
                                        <select id="grado" class="form-control form-control-sm">
                                           
                                        </select>
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="carrera">Carrera:</label>
                                        <input type="text" class="form-control form-control-sm" id="carrera" placeholder="">
                                         
                                       <!-- <select id="carrera" class="form-control form-control-sm">
                                          
                                        </select>-->
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="archivo_grado_titulo" id="lblarchivo_grado_titulo">PDF</label>
                                        <input type="file" class="form-control-file" id="archivo_grado_titulo">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="detalle"id="lbldetalle">Detalle del Título:</label>
                                        <input type="text" class="form-control form-control-sm" id="detalle" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="fech_consejo" id="lblfech_consejo">Fecha de Consejo:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_consejo" placeholder="">
                                    </div>
                                </div>

                                    <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="fech_emision" id="lblfech_emision">Fecha de Emisión:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_emision" placeholder="">
                                    </div>
                                </div>


                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="num_reg_titulo" id="lblnum_reg_titulo">Número de Registro del Título:</label>
                                        <input type="text" class="form-control form-control-sm" id="num_reg_titulo" placeholder="">
                                    </div>
                                </div>

                            </div>

                            <div class="form-row my-2">

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="EntidadRegist" id="lblEntidadRegist"">Entidad del Registro del Título:</label>
                                        <input type="text" class="form-control form-control-sm" id="EntidadRegist" placeholder="">
                                       
                                   <!--     <select id="EntidadRegist" class="form-control form-control-sm"> 
                                            
                                        </select>-->
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nro_colegiatura" id="lblnro_colegiatura">Número de Colegiatura:</label>
                                        <input type="text" class="form-control form-control-sm" id="nro_colegiatura" placeholder="">                            
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nom_colegio" id="lblnom_colegio">Nombre del Colegio:</label>
                                        <input type="text" class="form-control form-control-sm" id="nom_colegio" placeholder="">
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                         
                    <!--   ********************    -->
                                         
                </div>
                <div class="modal-footer py-1">
                   <!--  <button type="button" class="btn btn-primary" id="guardarEstudiosSuperiores" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button> -->
                    <button type="button" class="btn btn_estudios_superiores btn-primary"  data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>




                </div>
            </div>
        </div>
    </div>
    
     <!--   al final del modal lo colocamos de estudios superiores   -->

      <form action="/ProyEscalafon/public/destroyOTrosEStudios/:ESTUDIO_SUPERIOR_ID" method="post" id="form_deleteestudiossuperiores">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token9" id="token9" value="{{ csrf_token() }}">
                                    </form>  

                                    <form action="/ProyEscalafon/public/updateEstudiosSuperiores/:ESTUDIO_SUPERIOR_ID" method="post" id="form_updateestudiossuperiores">
                                        <input type="hidden" name="_method2" value="PUT">
                                        <input type="hidden" name="_token12" id="token12" value="{{ csrf_token() }}">
                                    </form>

                                     

 <!--   al final del modal lo colocamos de estudios superiores -->


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

                            <!--    -->
                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="tipo_estudios">Tipo de Estudios:</label>
                                        <select id="tipo_estudios" class="form-control form-control-sm">
                                          
                                            
                                        </select>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nom_estudios">Nombre de los Estudios:</label>
                                        <textarea class="form-control" id="nom_estudios" cols="4" rows="3"></textarea>
                                    </div>
                                </div>
                                                                
                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="participacion">Participación:</label>
                                        <input type="text" class="form-control form-control-sm" id="participacion" placeholder="">
                                    </div>
                                </div>
                                                            
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="centro_estudio">Centro de Estudios:</label>
                                        <input type="text" class="form-control form-control-sm" id="centro_estudio" placeholder="">
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
                                
                                <div class="col-5">
                                    <div class="form-group mb-1">
                                        <label for="pdf_otros_estudios">PDF</label>
                                        <input type="file" class="form-control-file" id="pdf_otros_estudios">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row my-2">

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="fech_inicio">Fecha de Inicio:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_inicio_otros_estudios" placeholder="">
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="fech_termino">Fecha de Termino:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_termino_otros_estudios" placeholder="">                             
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
                    <button type="button" class="btn btn_otros_estudios btn-primary"  data-dismiss="modal">Guardar</button>
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

                                    <form action="/ProyEscalafon/public/Estudios/:OTRO_ESTUDIO_ID" method="post" id="form_updateotrosestudios">
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
            
            <div class="form-group row">
                <label for="tipo_idiomaM2" class="col-sm-3 col-form-label">Tipo de Estudios:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="tipo_estudios2" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="dominioM2" class="col-sm-3 col-form-label">Nombre de los Estudios:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="nom_estudios2" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="centroEstudioM2" class="col-sm-3 col-form-label">Participación:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="participacion2" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="tipo_docM2" class="col-sm-4 col-form-label">Centro de Estudios:</label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="centro_estudio2" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="horasM2" class="col-sm-3 col-form-label">Tipo de Documento:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="tipo_doc2" value="">
                </div>
            </div>


            <div class="form-group row">
                <label for="creditosM2" class="col-sm-3 col-form-label">Fecha de Inicio:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="fech_inicio_otros_estudios2" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="creditosM2" class="col-sm-3 col-form-label">Fecha de Termino:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="fech_termino_otros_estudios2" value="">
                </div>
            </div>


            <div class="form-group row">
                <label for="creditosM2" class="col-sm-3 col-form-label">Horas:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="horas2" value="">
                </div>
            </div>

                                        
            <div class="form-group row">
                <label for="creditosM2" class="col-sm-3 col-form-label">Creditos:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="creditos2" value="">
                </div>
            </div>

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

                            
                            



                            <!--    -->

                               <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="tipomedio">Tipo de Medio:</label>
                                        <select id="tipomedio" class="form-control form-control-sm">
                                           
                                           
                                        </select>
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="medio">Medio:</label>
                                        <select id="medio" class="form-control form-control-sm">
                                            
                                           
                                        </select>
                                    </div>
                                </div>

                            </div>



                       <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nom_publicacion">Nombre de la Publicación:</label>
                                        <input type="text" class="form-control form-control-sm" id="nom_publicacion" placeholder="">
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

                                <div class="col-5">
                                    <div class="form-group mb-1">
                                        <label for="pdf_otros_estudios">PDF</label>
                                        <input type="file" class="form-control-file" id="pdf_otros_estudios">
                                    </div>
                                </div>

                            </div>
                            
                     

                        </form>
                    </div>
                         
                    <!--   ********************    -->
                                         
                </div>
                <div class="modal-footer py-1">
                <!-- <button type="button" class="btn btn-primary" id="guardarProduccionIntelectual" data-dismiss="modal">Guardar</button>-->
                    <button type="button" class="btn btn_produccion_intelectual btn-primary"  data-dismiss="modal">Guardar</button>
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
            
            <div class="form-group row">
                <label for="tipomedio2" class="col-sm-3 col-form-label">Tipo de Medio:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="tipomedio2" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="medio2" class="col-sm-3 col-form-label">Medio:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="medio2" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="nom_publicacion2" class="col-sm-3 col-form-label">Nombre:</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="nom_publicacion2" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="fech_publicacion2" class="col-sm-4 col-form-label">Fecha de Publicacion:</label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="fech_publicacion2" value="">
                </div>
            </div>


        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>



  <!-- Fin del Modal ver Produccion Intelectual-->



 <!--   al final del modal lo colocamos de produccion intelectual  -->


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
