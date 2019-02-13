@extends('layouts.plantilla')

@section('contenedor')
    <div class="container">
        <div class="card-group">
            <!-- Tarjeta 1 -->
            <div class="card">
                <!-- Cuerpo de la tarjeta 1 -->
                <div class="card-body">
                                    
                    <!--  Inicio contenedor del Formulario -->
                    <div class="container px-0" id="tabla1">
                        
                        <!-- Inicio Formulario -->
                        <form id="formulario1">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            {{csrf_field()}}
                            <!--  Titulo  -->
                            <div class="form-row my-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            <h4>Datos Personales del Servidor y Familiares</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin Titulo -->

                            <!--  D.N.I  -->
                            <div class="form-row my-1">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">Tipo de Documento</div>

                                        <div class="card-body p-1">
                                            <select id="pais_primaria" class="form-control form-control-sm">
                                                <option selected>--Selecciona--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            N°
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" class="form-control form-control-sm" id="num_docIdentidad" name="num_docIdentidad" placeholder="" value="">
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
                                
                            </div>
                            <!-- fin D.N.I  -->

                            <!--  Apellidos  -->
                            <div class="form-row my-1">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Apellido Paterno
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" class="form-control form-control-sm" id="apellidoPaterno" name="apellidoPaterno" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Apellido Materno
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" class="form-control form-control-sm" id="apellidoMaterno" name="apellidoMaterno" placeholder="" value="">
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

                                    </div>
                                </div>
                                <!-- Fin Bloque Imagen -->
                                
                                <!-- Inicio Segundo Bloque  --> 
                                <div class="col">
                                    <!--  Nombres  -->
                                    <div class="form-row my-1">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header p-0 text-center">
                                                    Nombres
                                                </div>

                                                <div class="card-body p-1">
                                                    <input type="text" class="form-control form-control-sm" id="nomb" name="nomb" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin Nombres  -->
                                    
                                    <!--  Inicio Sexo, Fecha Nacimiento, Estado Civil  -->
                                    <div class="form-row my-1">
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-header p-0 text-center">
                                                    Sexo
                                                </div>

                                                <div class="card-body p-1">
                                                    
                                                        <fieldset class="form-group mb-1">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="estado" id="concluido" value="masculino">
                                                                <label class="form-check-label" for="concluido">M</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="estado" id="no_concluido" value="femenino">
                                                                <label class="form-check-label" for="no_concluido">F</label>
                                                            </div>
                                                        </fieldset>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header p-0 text-center">
                                                    Fecha Nacim.
                                                </div>

                                                <div class="card-body p-1">
                                                    <input type="text" class="form-control form-control-sm" id="ie_primaria" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header p-0 text-center">
                                                    Estado Civil
                                                </div>
                                                <div class="card-body p-1">
                                                    <select id="pais_primaria" class="form-control form-control-sm">
                                                        <option selected>--Selecciona--</option>
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
                                                    <select id="pais_primaria" class="form-control form-control-sm">
                                                        <option selected>--Selecciona--</option>
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
                                                    <select id="pais_primaria" class="form-control form-control-sm">
                                                        <option selected>--Selecciona--</option>
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
                                            <input type="text" class="form-control form-control-sm" id="ie_primaria" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                            <!-- fin Direccion  -->

                            <!-- Pais Residencia -->
                            <div class="form-row my-1">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">País de Residencia</div>

                                        <div class="card-body p-1">
                                            <select id="pais_primaria" class="form-control form-control-sm">
                                                <option selected>--Selecciona--</option>
                                                <option>PERU</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Ubigeo Residencia
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" class="form-control form-control-sm" id="ubi_primaria" placeholder="000000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="card">

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
                                                    <input type="text" class="form-control form-control-sm" id="dep_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control form-control-sm"  id="prov_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control form-control-sm"  id="dist_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  fin  -->

                            <!-- Pais de Nacimiento -->
                            <div class="form-row my-1">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">País de Nacimiento</div>

                                        <div class="card-body p-1">
                                            <select id="pais_primaria" class="form-control form-control-sm">
                                                <option selected>--Selecciona--</option>
                                                <option>PERU</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Ubigeo Nacimiento
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" class="form-control form-control-sm" id="ubi_primaria" placeholder="000000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="card">

                                    </div>
                                </div>
                            </div>
                            <!-- fin Pais de Nacimiento-->
                            
                            <!-- Departamento/Provincia/Distrito de Residencia -->
                            <div class="form-row my-1">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Departamento / Provincia / Distrito de Nacimiento
                                        </div>

                                        <div class="card-body p-1">
                                            <div class="form-row">
                                                <div class="col">
                                                    <input type="text" class="form-control form-control-sm" id="dep_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control form-control-sm"  id="prov_primaria" placeholder="NO DEFINIDO">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control form-control-sm"  id="dist_primaria" placeholder="NO DEFINIDO">
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
                                            <input type="text" class="form-control form-control-sm" id="ie_primaria" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Telf. Movil
                                        </div>

                                        <div class="card-body p-1">
                                            <input type="text" class="form-control form-control-sm" id="ie_primaria" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-header p-0 text-center">
                                            Correo Electrónico
                                        </div>
                                        
                                        <div class="card-body p-1">
                                            <input type="text" class="form-control form-control-sm" id="ie_primaria" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin Tel. Fijo, Tel. Movil y correo  -->
                            
                            <button type="submit" id="regi" class="btn btn-primary">Registrar</button>

                        </form>
                        <!-- Fin Formulario -->
                        
                    </div>
                    <!-- Fin del Contenedor del Formulario -->
                    
                </div>
                <!-- Fin del Cuerpo Tarjeta 1 -->
            </div>
            <!-- Fin Tarjeta 1 -->
            
            <!-- Inicio Tarjeta 2 -->
            <div class="card">
                <!-- Inicio Cuerpo Tarjeta 2 -->
                <div class="card-body">
                    
                    <!--  Inicio contenedor Idiomas  -->
                    <div class="container my-3 px-0">
                                                
                        <div class="card">
                            <div class="card-header p-0 text-center">
                                Idiomas
                            </div>

                            <div class="card-body p-1">
                                <div id="div_tabla2">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <td>Idioma</td>
                                                <td>Dominio</td>
                                                <td>Opciones</td>
                                            </tr>
                                        </thead>
                                        <tbody id="otros"></tbody>
                                    </table>
                                </div>
                                <caption>
                                    <button class="btn btn-primary"  data-toggle="modal" data-target="#modalIdioma">
                                        Agregar Nuevo <span><i class="material-icons">add</i></span>
                                    </button>
                                </caption>
                            </div>
                        </div>
                        
                    </div>
                    <!--  Fin Idiomas  -->
                    
                    <!--  Inicio Derecho Habientes  -->
                    <div class="container my-3 px-0">
                                                
                        <div class="card">
                            <div class="card-header p-0 text-center">
                            Derecho Habientes
                            </div>

                            <div class="card-body p-1">
                                <div id="div_tabla2">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                            <td>Parentesco</td>
                                            <td>N° Doc.</td>
                                            <td>Apellidos y Nombres</td>
                                            <td>F. Nacim.</td>
                                            </tr>
                                        </thead>
                                        <tbody id=otros_habientes></tbody>
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
                    <!--  Fin Derecho Habientes  -->

                </div>
                <!-- Fin Cuerpo Tarjeta 2 -->
            </div>
            <!-- Fin Tarjeta 2 -->
          
        </div>
    
    </div>
    
    <!-- Modal para Idioma nuevos -->
<!--    Estoy en create-->
    <div class="modal fade" id="modalIdioma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Idioma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                           
                    <!--     *************       -->
                    <div class="container px-3">
                        <!-- Inicio Formulario -->
                        <form id="formularioModal1">
                            <!--    -->
                            {{csrf_field()}}
                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="tipo_idioma">Idioma:</label>
                                        <select id="tipo_idioma" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="col pb-0">
                                    <label for="">Dominio del Idioma:</label>
                                    
                                    <fieldset class="form-group mb-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dominio" id="basico" value="basico">
                                            <label class="form-check-label" for="basico">Básico</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dominio" id="intermedio" value="intermedio">
                                            <label class="form-check-label" for="intermedio">Intermedio</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dominio" id="avanzado" value="avanzado">
                                            <label class="form-check-label" for="avanzado">Avanzado</label>
                                        </div>
                                        
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dominio" id="lengua_materna" value="lengua materna">
                                            <label class="form-check-label" for="lengua_materna">Lengua Materna</label>
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
                                            <option selected>--Selecciona--</option>
                                            <option>PERU</option>
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
                    <button type="button" class="btn btn-primary" id="guardarNuevoIdioma" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal para Derecho Habientes nuevos -->
    
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
                        <form id="formularioModal2">
                            <!--    -->
                            <div class="form-row my-2">
                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="tipo_estudios">Tipo de Estudios:</label>
                                        <select id="tipo_estudios" class="form-control form-control-sm">
                                            <option selected>--Selecciona--</option>
                                            <option>PERU</option>
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
                                            <option>PERU</option>
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
                                        <input type="date" class="form-control form-control-sm" id="fech_inicio" placeholder="">
                                    </div>
                                </div>

                                <div class="col">  
                                    <div class="form-group mb-1">
                                        <label for="fech_termino">Fecha de Termino:</label>
                                        <input type="date" class="form-control form-control-sm" id="fech_termino" placeholder="">                             
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
                    <button type="button" class="btn btn-primary" id="guardarnuevo" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
           
        </div>
        
    </div>
    
@endsection