@extends('layouts.plantilla')
 
@section('contenedor')
  <div class="container">
    
    <div class="row py-3">
      <div class="col-4"></div>
      <div class="col">
        <!--  Titulo  -->
        <div class="form-row my-2 bg-secondary">
          <div class="col px-0  text-center">
            
            <h5 class="my-2"><label class="m-auto">Legajos Personales</label></h5>
                                  
          </div>
        </div>
        <!-- fin Titulo -->
      </div>
      <div class="col-4"></div>
    </div>

    <div class="row">
      <div class="col-3"></div>
      <div class="col">
        <!-- Info Boxes Style 2 -->
        <a href="administLegajo">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success"><i class="fas fa-clipboard-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Administracion de Legajos</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>
      <div class="col-3"></div>
    </div>

    <div class="row">
      <div class="col-3"></div>
      <div class="col">
        <a href="#">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger"><i class="fas fa-sync"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Movimiento de Legajos</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>
      <div class="col-3"></div>
    </div>

    <div class="row">
      <div class="col">&nbsp;</div>
    </div>

    <div class="row">
      <div class="col-3"></div>
      <div class="col">
        <div class="row">
          <div class="col-6">
            <a href="{{route('menu')}}">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary"><i class="fas fa-arrow-left"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Menú Principal</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </a>
          </div>
          <div class="col-6"></div>
        </div>
      </div>
      <div class="col-3"></div>
    </div>
    
    <!-- /.col -->
  </div>
@endsection
