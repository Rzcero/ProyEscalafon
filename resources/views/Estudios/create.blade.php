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
                                                <option selected>--Selecciona--</option>
                                                <option>PERU</option>
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
                                                <option selected>--Selecciona--</option>
                                                <option>PERU</option>
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
                        
                        
                    <!--  Inicio contenedor Estudios Superiores  -->
                    <div class="container my-3 px-0" id="tabla2">
                         
                        <div class="card">
                            <div class="card-header p-0 text-center">
                                Estudios Superiores
                            </div>

                            <div class="card-body p-1">
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

                                <caption>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#modalEstudiosSuperiores">
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
                                <div id="div_tabla2">
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
                                        <tbody id=otros></tbody>
                                    </table>
                                </div>
                                <caption>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#modalOtrosEstudios">
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
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <td>Medio</td>
                                            <td>Nombre de la Publicación</td>
                                            <td>Año</td>
                                            <td>Opciones</td>
                                        </tr>
                                    </thead>
                                    <tbody id=pro_intelec></tbody>
                                </table>
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
    
    <div class="modal fade" id="modalEstudiosSuperiores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h5 class="modal-title" id="exampleModalLabel">Estudios Superiores</h5>
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
                            <!--  I.E. Primaria  -->
                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nivel_estudio">Nivel de Estudio:</label>
                                        <select id="nivel_estudio" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col pb-0">
                                    <fieldset class="form-group mb-1">

                                        <legend class="col-form-label">Estado de los Estudios:</legend>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="estado" id="concluido" value="concluidos">
                                            <label class="form-check-label" for="concluido">Concluidos</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="estado" id="no_concluido" value="no concluidos">
                                            <label class="form-check-label" for="no_concluido">No Concluidos</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="estado" id="egresado" value="egresado">
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
                                            <option selected>--Selecciona--</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-2">  
                                    <div class="form-group mb-1">
                                        <label for="ciclo">Ciclo:</label>
                                        <input type="text" class="form-control form-control-sm" id="ciclo" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="centro_estudio">Centro de Estudios:</label>
                                        <select id="centro_estudio_superior" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                            <option>PERU</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="grado">Mención del Grado o Título:</label>
                                        <select id="grado" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                            <option>PERU</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="carrera">Carrera:</label>
                                        <select id="carrera" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                            <option>PERU</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="archivo_grado_titulo">PDF</label>
                                        <input type="file" class="form-control-file" id="archivo_grado_titulo">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="detalle">Detalle del Título:</label>
                                        <input type="text" class="form-control form-control-sm" id="detalle" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="fech_consejo">Fecha de Consejo:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_consejo" placeholder="">
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="fech_emision">Fecha de Emisión:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_emision" placeholder="">                             
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="num_reg_titulo">Número de Registro del Título:</label>
                                        <input type="text" class="form-control form-control-sm" id="num_reg_titulo" placeholder="">
                                    </div>
                                </div>

                            </div>

                            <div class="form-row my-2">

                                <div class="col">
                                    <div class="form-group mb-1">
                                        <label for="EntidadRegist">Entidad del Registro del Título:</label>
                                        <select id="EntidadRegist" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                            <option>PERU</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nro_colegiatura">Número de Colegiatura:</label>
                                        <input type="text" class="form-control form-control-sm" id="nro_colegiatura" placeholder="">                            
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="nom_colegio">Nombre del Colegio:</label>
                                        <input type="text" class="form-control form-control-sm" id="nom_colegio" placeholder="">
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                         
                    <!--   ********************    -->
                                         
                </div>
                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-primary" id="guardarnuevo" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal para Otros Estudios nuevos -->
    
    <div class="modal fade" id="modalOtrosEstudios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h5 class="modal-title" id="exampleModalLabel">Otros Estudios</h5>
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

                            <!--    -->
                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="tipo_estudios">Tipo de Estudios:</label>
                                        <select id="tipo_estudios" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                            
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
                                            <option selected>--Selecciona--</option>
                                            
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
                    <button type="button" class="btn btn-primary" id="guardarOtrosEstudios" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>



    @endsection
