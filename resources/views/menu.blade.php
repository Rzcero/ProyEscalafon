@extends('layouts.plantilla')
        
@section('contenedor')
  <div class="container">
    <div class="col-md-6 mx-auto pt-5">
      <!-- Info Boxes Style 2 -->
      <a href="#">
        <div class="info-box mb-3">
          
          <span class="info-box-icon bg-warning"><i class="fas fa-address-book"></i></span>
          
          <div class="info-box-content">
            <span class="info-box-text">Fichas Personales</span>
          </div>
          
          <!-- /.info-box-content -->
        </div>
      </a>
      <!-- /.info-box -->

      <a href="{{url('legajosPersonales')}}">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success"><i class="fas fa-folder-open"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Legajos Personales</span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </a>
      <!-- /.info-box -->

      <a href="#">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger"><i class="fas fa-file-signature"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Reportes y Operaciones</span>
            <!-- <span class="info-box-number">114,381</span> -->
          </div>
          <!-- /.info-box-content -->
        </div>
      </a>
      <!-- /.info-box -->
      
      <a href="#">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-info"><i class="fas fa-tools"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Utilidades de la App</span>
            <!-- <span class="info-box-number">163,921</span> -->
          </div>
          <!-- /.info-box-content -->
        </div>
      </a>
      <!-- /.info-box -->
      
    </div>
    <!-- /.col -->
  </div>
@endsection
