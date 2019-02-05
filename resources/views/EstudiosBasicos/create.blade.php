@extends('layouts.plantilla')
@extends("../layouts2.plantilla3")
@section ("cabecera")
@section("contenido")

<form method="post" action="/escalafon/ProyEscalafon/public/EstudiosBasicos">

    <div class="container">
        <div class="card-group">
            <!-- Tarjeta 1 -->
            <div class="card">
                <!-- Cuerpo de la tarjeta 1 -->
                <div class="card-body">
                                    
                    <!--  Inicio contenedor del Formulario -->
                    <div class="container1 px-0" id="tabla1">
                        
                        
                        <!-- Inicio Formulario -->
                        <form id="formulario1">
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
                                                    <input type="text" name="dist_primaria"" class="form-control form-control-sm"  id="dist_primaria" placeholder="NO DEFINIDO">
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
                                            <select id="pais_secundaria" class="form-control form-control-sm">
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
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                        <!-- Fin Formulario -->








                                {{csrf_field()}}
    <input type="submit" name="enviar" value="enviar">

</form>