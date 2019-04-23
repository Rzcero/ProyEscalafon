@extends('layouts.plantilla')

@section('titulo')
    Estudios 
@endsection

@section('contenedor')




<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
   
        <option value="" disabled selected > -----tipo---
        @foreach($esbasico as $estudiobasico)
        </option>
         <option>
        {{$estudiobasico->ie_primaria}}   
         </option>                         
        @endforeach

   
    
  </select>
</div>





    @endsection