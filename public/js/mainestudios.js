$(document).ready(function() 
   {


    mostrarOtrosEstudios();
    mostrarProduccionIntelectual();
    mostrarEstudiosSuperiores();

// tabla de estudios basicos
 $("#formularioestudiosbasicos").submit(function(e){
                
        var dato = $("#ie_primaria").val();  // # se recepcionan de create.blade -> formulario
        var dato2 = $("#anio_egreso_primaria").val();
        var dato3 = $("#pais_primaria").val();  // # se recepcionan de create.blade -> formulario
        var dato4 = $("#ubi_primaria").val();
        var dato5= $("#dep_primaria").val();  // # se recepcionan de create.blade -> formulario
        var dato6 = $("#prov_primaria").val();
        var dato7 = $("#dist_primaria").val();  // # se recepcionan de create.blade -> formulario
        var dato8 = $("#ie_secundaria").val();
        var dato9 = $("#anio_egreso_secundaria").val();  // # se recepcionan de create.blade -> formulario
        var dato10 = $("#pais_secundaria").val();
        var dato11 = $("#ubi_secundaria").val();  // # se recepcionan de create.blade -> formulario
        var dato12 = $("#dep_secundaria").val();
        var dato13 = $("#prov_secundaria").val();  // # se recepcionan de create.blade -> formulario
        var dato14 = $("#dist_secundaria").val();




        var route = "/ProyEscalafon/public/Estudios";
        var token = $("#token_est_bas").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: {
                ie_primaria: dato,
                anio_egreso_primaria: dato2,
                pais_primaria: dato3,
                ubi_primaria: dato4,
                dep_primaria: dato5,
                prov_primaria: dato6,
                dist_primaria: dato7,
                ie_secundaria: dato8,
                anio_egreso_secundaria: dato9,
                pais_secundaria: dato10,
                ubi_secundaria: dato11,
                dep_secundaria: dato12,
                prov_secundaria: dato13,
                dist_secundaria: dato14



            }
            
        });         
        
        e.preventDefault();
    
    });



//MODAL AGREGAR NUEVO otros estudios -> es para cambiar el boton verde a azul y el titulo
  // paso 1  



    $('#agregar_otro_estudio').click(function(){

//alert("hora loca");
        $("#formulariootrosestudios").trigger('reset');
        cambiartitulo_otros_estudios('Agregar Otros Estudios');
        $(".btn_otros_estudios").html('<span><i class="far fa-save"></i></span> Guardar');
        $(".btn_otros_estudios").addClass('btn-primary');
        $(".btn_otros_estudios").removeClass('btn-success');
        $(".btn_otros_estudios").addClass('guardar');
        $(".btn_otros_estudios").removeClass('actualizar');

    });




// tabla de otros estudios
//$("#guardarOtrosEstudios").click(function(e){
      $(".modal-footer").on('click', '.guardar', function(){
                
        var dato = $("#tipo_estudios").val();  // # se recepcionan de create.blade -> formulario
        var dato2 = $("#nom_estudios").val();
        var dato3 = $("#participacion").val();  // # se recepcionan de create.blade -> formulario
        var dato4 = $("#centro_estudio").val();
        var dato5= $("#tipo_doc").val();  // # se recepcionan de create.blade -> formulario
        var dato6 = $("#fech_inicio_otros_estudios").val();
        var dato7 = $("#fech_termino_otros_estudios").val();  // # se recepcionan de create.blade -> formulario
        var dato8 = $("#horas").val();
        var dato9 = $("#creditos").val();  // # se recepcionan de create.blade -> formulario
       

/*
console.log(dato);  para ver por consola los datos que estas recibiendo
console.log(dato2);*/
        var route = "/ProyEscalafon/public/guardar_otros_estudios";
        var token = $("#token_otr_est").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: {
                id_tipo_estudio: dato,
                nombre_estudio: dato2,
                participacion: dato3,
                centro_estudio: dato4,
                id_tipo_documento: dato5,
                 fecha_inicio: dato6,
                fecha_termino: dato7,
                num_horas: dato8,
                num_creditos: dato9
              


            }, //paso2 se modifica

            success: function(respuesta){

mostrarOtrosEstudios();

// 
$("#formulariootrosestudios").trigger('reset');

}
            
        });         
        
      
    

    });


 /*   //botones tipo ratio del formulario 1
    $("#formularioestudiossuperiores :radio").click(function(){
        
        //dato3 = $(this).val();
            console.log(dato3);
    });*/

// tabla de estudios superiores
//$("#guardarEstudiosSuperiores").click(function(e){
                $(".modal-footer").on('click', '.guardar', function(){

        var dato = $("#nivel_estudio").val();  // # se recepcionan de create.blade -> formulario
      // var dato3 = 1;
       var dato3 = $("#formularioestudiossuperiores input[name='estado']:checked").val();

        var dato4 = $("#modalidad").val();  // # se recepcionan de create.blade -> formulario
        var dato5 = $("#centro_estudio_superior").val();
        var dato6= $("#grado").val();  // # se recepcionan de create.blade -> formulario
        var dato7 = $("#carrera").val();
        var dato8 = $("#detalle").val();  // # se recepcionan de create.blade -> formulario
        var dato9 = $("#fech_consejo").val();
        var dato10 = $("#fech_emision").val();  // # se recepcionan de create.blade -> formulario
       var dato11 = $("#num_reg_titulo").val(); 
       var dato12 = $("#EntidadRegist").val(); 
         var dato13 = $("#nro_colegiatura").val(); 
         var dato14 = $("#nom_colegio").val(); 


//console.log(dato);  para ver por consola los datos que estas recibiendo
//console.log(dato2);
        var route = "/ProyEscalafon/public/guardar_estudios_superiores";
        var token = $("#token_est_sup").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: {
                id_nivel: dato,
           
                id_estado: dato3,
                id_modalidad: dato4,
                centro_estudios: dato5,
                 id_tipo_grado: dato6,
                carrera: dato7,
                detall_grado: dato8,
                fecha_consejo: dato9,
                fecha_emision: dato10,
                num_registro: dato11,
                entidad: dato12,
                num_colegiatura:dato13,
                nom_colegio:dato14

               
              


            }, //paso2 se modifica

         success: function(respuesta){

mostrarEstudiosSuperiores();


$("#formularioestudiossuperiores").trigger('reset');


}

 //e.preventDefault();
            
        });         

    });




// tabla de produccion intelectual
 $(".modal-footer").on('click', '.guardar', function(){
//$("#guardarProduccionIntelectual").click(function(e){
                
        var dato = $("#tipomedio").val();  // # se recepcionan de create.blade -> formulario
        var dato2 = $("#medio").val();
        var dato3 = $("#nom_publicacion").val();  // # se recepcionan de create.blade -> formulario
        var dato4 = $("#fech_publicacion").val();
        
       


//console.log(dato);  
//console.log(dato2);
//console.log(dato3);

        var route = "/ProyEscalafon/public/guardar_produccion_intelectual";
        var token = $("#token_pro_int").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: {
                id_tipo_medio: dato,
                id_medio: dato2,
                nombre: dato3,
                fecha_publicacion: dato4
                

            },

         //paso2 se modifica

            success: function(respuesta){

mostrarProduccionIntelectual();

// 
$("#formularioproduccionintelectual").trigger('reset');

}
            
        });         
        
        //e.preventDefault(); // para no llevar a otra pagina etiquetas tipo submit y <a> ya no se usa porque se imprime en el formulario para que se vea
    
    });




//Para llenar el Select de listar nivel
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listarnivel',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_nivel}'>${obj_json.nombre_nivel}</option>`

                });
            });
            
            $("#nivel_estudio").append(registro);
            
        }
   });


    //Para llenar el Select de listar modalidad
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listarmodalidad',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_modalidad}'>${obj_json.nombre_modalidad}</option>`

                });
            });
            
            $("#modalidad").append(registro);
            
        }
   });

        //Para llenar el Select de listar tipo de estudio
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listartipoestudios',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_tipo_estudio}'>${obj_json.denominacion}</option>` // jala el id_tipo_estudio}

                });
            });
            
            $("#tipo_estudios").append(registro);
            
        }
   });
        
         

                //Para llenar el Select de listar tipo de documento
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listartipodocumentos',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_tipo_documento}'>${obj_json.denominacion}</option>`

                });
            });
            
            $("#tipo_doc").append(registro);
            
        }
   });


               //Para llenar el Select de listar tipo de grado
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listartipogrados',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            console.log(respuesta);
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_grado}'>${obj_json.tipogrado}</option>`

                });
            });
            
            $("#grado").append(registro);
            

        }
   });

      $.ajax({
        
        url: '/ProyEscalafon/public/listartipomedio',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_tipo_medio}'>${obj_json.descripcion}</option>`

                });
            });
            
            $("#tipomedio").append(registro);
            
        }
   });

            $.ajax({
        
        url: '/ProyEscalafon/public/listarmedio',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_medio}'>${obj_json.descripcion}</option>`

                });
            });
            
            $("#medio").append(registro);
            
        }
   });
        
       //para mostrar otros estudios en el formulario
function mostrarOtrosEstudios(){   //paso1 se crea mostrar y se coloca al inicio
$.ajax({
url: '/ProyEscalafon/public/listarotrosestudios',
type: 'GET',
success: function(respuesta){
//console.log(respuesta);
let registro = '';

respuesta.forEach(obj_json =>{
obj_json.forEach(obj_json =>{
registro += `<tr>
<td>${obj_json.tipo}</td>  
<td>${obj_json.denominacion}</td>
<td>${obj_json.hora}</td>
<td>${obj_json.credito}</td>

<td>

<button class='ver_otros_estudios btn btn-warning' data-toggle="modal" data-target="#modal_ver_otros_esudios" value='${obj_json.id_otro_estudio}' title='Ver'><span><i class="fas fa-eye"></i></span></button>
<button class='update_otros_estudios btn btn-success' data-toggle="modal" data-target="#modalOtrosEstudios" value='${obj_json.id_otro_estudio}' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>
<button class='elim_otros_estudios btn btn-danger' data-toggle="modal" data-target="#modal_eliminar_otros_estudios" value='${obj_json.id_otro_estudio}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
</td>
</tr>`

});
});

// console.log(registro);
$("#otros_estudios").html(registro); // se jala del create  <tbody id=otros_estudios></tbody>
}
});
}



//para mostrar produccion intelectual   
function mostrarProduccionIntelectual(){
$.ajax({
url: '/ProyEscalafon/public/listarproduccion',
type: 'GET',
success: function(respuesta){

//console.log(respuesta);

let registro = '';

respuesta.forEach(obj_json =>{
obj_json.forEach(obj_json =>{
registro += `<tr>
<td>${obj_json.medio}</td>  
<td>${obj_json.nombre_publicacion}</td>
<td>${obj_json.anio}</td>


<td>
<button class='ver_produccion_intelectual btn btn-warning' data-toggle="modal" data-target="#modal_ver_produccion_intelectual" value='${obj_json.id_prod_intele}' title='Ver'><span><i class="fas fa-eye"></i></span></button>

<button class='update_produccion_intelectual btn btn-success' data-toggle="modal" data-target="#modalProduccionIntelectual" value='${obj_json.id_prod_intele}' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>

<button class='elim_produccion_intelectual btn btn-danger' data-toggle="modal" data-target="#modal_eliminar_produccion_intelectual" value='${obj_json.id_prod_intele}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
</td>
</tr>`

});
});

// console.log(registro);
$("#pro_intelec").html(registro); // se jala del create  <tbody id=otros_estudios></tbody>

}

});

}





function mostrarEstudiosSuperiores(){

$.ajax({

url: '/ProyEscalafon/public/listarestudiossuperiores',
type: 'GET',
success: function(respuesta){

console.log(respuesta);

let registro = '';

respuesta.forEach(obj_json =>{
obj_json.forEach(obj_json =>{
registro += `<tr>
<td>${obj_json.tipo}</td>  
<td>${obj_json.centro_estudios}</td>
<td>${obj_json.nivel}</td>


<td>
<button class='ver_estudios_superiores btn btn-warning' data-toggle="modal" data-target="#modalIdioma2" value='${obj_json.id_estudios_sup}' title='Ver'><span><i class="fas fa-eye"></i></span></button>
<button class='update_estudios_superiores btn btn-success' data-toggle="modal" data-target="#modalEstudiosSuperiores" value='${obj_json.id_estudios_sup}' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>
<button class='elim_estudios_superiores btn btn-danger' data-toggle="modal" data-target="#modalIdioma3" value='${obj_json.id_estudios_sup}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
</td>
</tr>`

});
});

// console.log(registro);
$("#est_superiores").html(registro); // se jala del create  <tbody id=otros_estudios></tbody>

}

});

}





// para oculatr alguno select del formulario de estudios superiores 29/03/2019

$("#no_concluido").click(function(){

var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

//alert(btn_radio);
if(btn_radio == "2"){



$("#archivo_grado_titulo").attr("hidden",true);
$("#lblarchivo_grado_titulo").attr("hidden",true);

$("#grado").attr("hidden",true);
$("#lblgrado").attr("hidden",true);

$("#lbldetalle").attr("hidden",true);
$("#detalle").attr("hidden",true);

$("#fech_consejo").attr("hidden",true);
$("#lblfech_consejo").attr("hidden",true);

$("#lblfech_emision").attr("hidden",true);
$("#fech_emision").attr("hidden",true);
//$("#nom_reg_titulo").text("");
$("#lblnum_reg_titulo").attr("hidden",true);
$("#num_reg_titulo").attr("hidden",true);

$("#lblnom_colegio").attr("hidden",true);
$("#nom_colegio").attr("hidden",true);

$("#lblnro_colegiatura").attr("hidden",true);
$("#nro_colegiatura").attr("hidden",true);

$("#lblEntidadRegist").attr("hidden",true);
$("#EntidadRegist").attr("hidden",true);

} 

});

$("#concluido").click(function(){

var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

//alert(btn_radio);
if(btn_radio == "1"){



$("#archivo_grado_titulo").attr("hidden",false);
$("#lblarchivo_grado_titulo").attr("hidden",false);

$("#grado").attr("hidden",false);
$("#lblgrado").attr("hidden",false);

$("#lbldetalle").attr("hidden",false);
$("#detalle").attr("hidden",false);

$("#fech_consejo").attr("hidden",false);
$("#lblfech_consejo").attr("hidden",false);

$("#lblfech_emision").attr("hidden",false);
$("#fech_emision").attr("hidden",false);
//$("#nom_reg_titulo").text("");
$("#lblnum_reg_titulo").attr("hidden",false);
$("#num_reg_titulo").attr("hidden",false);

$("#lblnom_colegio").attr("hidden",false);
$("#nom_colegio").attr("hidden",false);

$("#lblnro_colegiatura").attr("hidden",false);
$("#nro_colegiatura").attr("hidden",false);

$("#lblEntidadRegist").attr("hidden",false);
$("#EntidadRegist").attr("hidden",false);
} 

});

$("#egresado").click(function(){

var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

//alert(btn_radio);
if(btn_radio == "3"){



$("#archivo_grado_titulo").attr("hidden",true);
$("#lblarchivo_grado_titulo").attr("hidden",true);

$("#grado").attr("hidden",true);
$("#lblgrado").attr("hidden",true);

$("#lbldetalle").attr("hidden",true);
$("#detalle").attr("hidden",true);

$("#fech_consejo").attr("hidden",true);
$("#lblfech_consejo").attr("hidden",true);

$("#lblfech_emision").attr("hidden",true);
$("#fech_emision").attr("hidden",true);
//$("#nom_reg_titulo").text("");
$("#lblnum_reg_titulo").attr("hidden",true);
$("#num_reg_titulo").attr("hidden",true);

$("#lblnom_colegio").attr("hidden",true);
$("#nom_colegio").attr("hidden",true);

$("#lblnro_colegiatura").attr("hidden",true);
$("#nro_colegiatura").attr("hidden",true);

$("#lblEntidadRegist").attr("hidden",true);
$("#EntidadRegist").attr("hidden",true);


} 


});







/*OTROS ESTUDIOS*/




function cambiartitulo_otros_estudios(titulo){

    $("#exampleModalLabelOtrosEstudios").text(titulo)  // buscar el <h5 id="exampleModalLabelOtrosEstudios y cambiar tambien en aria-labelledby="exampleModalLabelOtrosEstudios"
}


    //PARA ACTUALIZAR EL MODAL otros estudios
        //para mostrar los datos en el modal -> RECUPERAR LOS DATOS DE LA BASE DE DATOS
    $(document).on('click','.update_otros_estudios',function(e){
        
        cambiartitulo_otros_estudios('Actualizar Otros Estudios'); //cambiamos el ititulo y creamos una funcion
        $(".btn_otros_estudios").html('<span><i class="far fa-edit"></i></span>Actualizar'); // vamod al modal del create de otros estudios y creamos el btn_otros estudios

        $(".btn_otros_estudios").addClass('btn-success');
        $(".btn_otros_estudios").removeClass('btn-primary');
        $(".btn_otros_estudios").addClass('actualizar');
        $(".btn_otros_estudios").removeClass('guardar');

//primero creamos un campo oculto del identificador de la tabla otros estudios
//segundo le colocamos el id en el conroler, luego en los botones y lo comprobamos con console.log si es que da el numero del boton
//tercero crear una ruta en web
        var id_OtroEstudio = $(this).val();
        console.log(id_OtroEstudio);
        var ruta = "/ProyEscalafon/public/editar_modal_otros_estudios";
        var token1 = $("#token_otr_est").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token1},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_OtroEstudio // se jala (var id_OtroEstudio = $(this).val();) luego se envia al controlador
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
               // cuarto creamos la funcion en el controlador  editar_modal_otros_estudios, luego 
               // quinto ir a create y crear un campo oculto       


                        $('#id_OT_ES').val(obj_json.id);  // lo creamos en el create
                        $('#tipo_estudios').val(obj_json.tipoestudio);
                        $('#nom_estudios').val(obj_json.nombreestudio);
                        $('#centro_estudio').val(obj_json.centroestudio);
                        $('#participacion').val(obj_json.participacion); 
                        $('#fech_inicio_otros_estudios').val(obj_json.fechainicio);
                        $('#fech_termino_otros_estudios').val(obj_json.fechatermino);
                        $('#horas').val(obj_json.numerohoras);
                        $('#creditos').val(obj_json.numerocreditos);
                        $('#tipo_doc').val(obj_json.tipodocumento);
                       
/*
                        if (obj_json.dominio == 'basico') {
                            $('#basico').prop('checked',true);
                        } else if (obj_json.dominio == 'intermedio') {
                            $('#intermedio').prop('checked',true);
                        } else if (obj_json.dominio == 'avanzado') {
                            $('#avanzado').prop('checked',true);
                        } else if (obj_json.dominio == 'lengua materna') {
                            $('#lengua_materna').prop('checked',true);
                        } else{
                            $('#basico').prop('checked',true);
                        }*/
                        
                    });
                });
            
            }
            
        });
                
    });   
    
        //Para actualizar los datos de otros estudios ->UPDATE
    $(".modal-footer").on('click', '.actualizar', function(){

        var id = $('#id_OT_ES').val();
        var formulario = $('#form_updateotrosestudios');
        var ruta = formulario.attr('action').replace(':OTRO_ESTUDIO_ID',id);
        var token4 = $("#token4").val();
               
        var dato = $("#tipo_estudio").val();
       // var btn_radio = $("#formularioModal1 input[name='dominio']:checked").val();
        var dato2 = $("#nom_estudios").val();
        var dato3 = $('#participacion').val();
        var dato4 = $('#centro_estudio').val();
        var dato5 = $('#tipo_doc').val();
        var dato6 = $('#fech_inicio_otros_estudios').val();
         var dato7 = $('#fech_termino_otros_estudios').val();
         var dato8 = $('#horas').val();
         var dato9 = $('#creditos').val();
        
      //  console.log(dato);
        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token4},
            type: 'PUT',
            dataType: 'json',
            data: {
                
                  id_tipo_estudio: dato,
                nombre_estudio: dato2,
                participacion: dato3,
                centro_estudio: dato4,
                id_tipo_documento: dato5,
                 fecha_inicio: dato6,
                fecha_termino: dato7,
                num_horas: dato8,
                num_creditos: dato9
                
            },
            success: function(respuesta){
                                                
                mostrarOtrosEstudios();
                //mostrarHabientes();
                                
                $("#formularioModal1").trigger('reset');
                
            }
            
        });

    });




    //PARA VER OTROS ESTUDIOS
    $(document).on('click','.ver_otros_estudios',function(){
        
        var id_otro_estudio2 = $(this).val();
       // console.log(id_otro_estudio2 );
        var ruta = "/ProyEscalafon/public/ver_otros_estudios";
        var token3 = $("#token3").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_otro_estudio2
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        
                        $('#tipo_estudios2').val(obj_json.tipoestudio);
                        $('#nom_estudios2').val(obj_json.nombreestudio);
                        $('#centro_estudio2').val(obj_json.centroestudio);
                        $('#participacion2').val(obj_json.participacion);
                        $('#fech_inicio_otros_estudios2').val(obj_json.fechainicio);
                        $('#fech_termino_otros_estudios2').val(obj_json.fechatermino); 
                        $('#horas2').val(obj_json.numerohoras);
                        $('#creditos2').val(obj_json.numerocreditos); 
                        $('#tipo_doc2').val(obj_json.tipodocumento);

                    });
                });
            
            }
            
        });
        
    });

//PARA ELIMINAR  OTROS ESTUDIOS

    $(document).on('click','.elim_otros_estudios',function(){
 
        var id = $(this).val();
        $('#id_modal_eliminar_otros').val(id);
      
    });

    $('.btn_eliminarOtrosEstudios').click(function(){
        
        var id = $('#id_modal_eliminar_otros').val();
        var formulario = $('#form_deleteotrosestudios');
        var ruta = formulario.attr('action').replace(':OTRO_ESTUDIO_ID',id);
         
        var token3 = $("#token3").val();
        var datos = formulario.serialize();
             console.log(datos);                
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarOtrosEstudios();
               // mostrarHabientes();

            }
            
        });
        
    });



/*PRODUCCION INTELECTUAL*/





function cambiartitulo_prod_intel(titulo2){

    $("#cerrar_modal_prod_intel").text(titulo2)  
}

    $(document).on('click','.update_produccion_intelectual',function(e){
        
        cambiartitulo_prod_intel('Actualizar Produccion Intelectual'); //cambiamos el ititulo y creamos una funcion
        $(".btn_produccion_intelectual").html('<span><i class="far fa-edit"></i></span>Actualizar'); // vamod al modal del create de otros estudios y creamos el btn_otros estudios

        $(".btn_estudios_superiores").addClass('btn-success');
        $(".btn_produccion_intelectual").removeClass('btn-primary');
        $(".btn_produccion_intelectual").addClass('actualizar2');
        $(".btn_produccion_intelectual").removeClass('guardar');

//primero creamos un campo oculto del identificador de la tabla otros estudios
//segundo le colocamos el id en el conroler, luego en los botones y lo comprobamos con console.log si es que da el numero del boton
//tercero crear una ruta en web
        var id_ProduccionIntelectual = $(this).val();
        console.log(id_ProduccionIntelectual);
        var ruta = "/ProyEscalafon/public/editar_modal_prod_intel";
        var token1 = $("#token_pro_int").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token1},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_ProduccionIntelectual // se jala (var id_ProduccionIntelectual = $(this).val();) luego se envia al controlador
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
               // cuarto creamos la funcion en el controlador  editar_modal_otros_estudios, luego 
               // quinto ir a create y crear un campo oculto       


                        $('#id_PROD_INTEL').val(obj_json.id);  // lo creamos en el create
                        $('#tipomedio').val(obj_json.idtipomedio);
                        $('#medio').val(obj_json.idmedio);
                        $('#nom_publicacion').val(obj_json.nombre);
                        $('#fech_publicacion').val(obj_json.fechapublica); 
/*
                        if (obj_json.dominio == 'basico') {
                            $('#basico').prop('checked',true);
                        } else if (obj_json.dominio == 'intermedio') {
                            $('#intermedio').prop('checked',true);
                        } else if (obj_json.dominio == 'avanzado') {
                            $('#avanzado').prop('checked',true);
                        } else if (obj_json.dominio == 'lengua materna') {
                            $('#lengua_materna').prop('checked',true);
                        } else{
                            $('#basico').prop('checked',true);
                        }*/
                        
                    });
                });
            
            }
            
        });
                });  
  
    


        //Para actualizar los datos de  produccion intelectual ->UPDATE
    $(".modal-footer").on('click', '.actualizar2', function(){

        var id = $('#id_PROD_INTEL').val();
        var formulario = $('#form_updateproduccionintelectual');
        var ruta = formulario.attr('action').replace(':PRODUCCION_INTELECTUAL_ID',id);
        var token4 = $("#token8").val();
               
      //  var dato = $("#tipo_estudio").val();
       // var btn_radio = $("#formularioModal1 input[name='dominio']:checked").val();
        var dato2= $("#tipomedio").val();
        var dato3 = $('#medio').val();
        var dato4 = $('#nom_publicacion').val();
        var dato5 = $('#fech_publicacion').val();
     
       // console.log(dato3);
        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token4},
            type: 'PUT',
            dataType: 'json',
            data: {
                
                  
                id_tipo_medio: dato2,
                id_medio: dato3,
                nombre: dato4,
                fecha_publicacion: dato5
                
                
            },
            success: function(respuesta){
                                                
                mostrarProduccionIntelectual();
                //mostrarHabientes();
                                
                $("#formularioproduccionintelectual").trigger('reset');
                
            }
            
        });

    });

        $('#agregar_produccion_intelectual').click(function(){

//alert("hora loca");
        $("#formularioproduccionintelectual").trigger('reset');
        cambiartitulo_prod_intel('Produccion Intelectual');
        $(".btn_produccion_intelectual").html('<span><i class="far fa-save"></i></span> Guardar');
        $(".btn_produccion_intelectual").addClass('btn-primary');
        $(".btn_produccion_intelectual").removeClass('btn-success');
        $(".btn_produccion_intelectual").addClass('guardar');
        $(".btn_produccion_intelectual").removeClass('actualizar2');

    });
//PARA VER PRODUCCION INTELECTUAL
    $(document).on('click','.ver_produccion_intelectual',function(){
        
        var id_prod_intele2 = $(this).val();
       // console.log(id_otro_estudio2 );
        var ruta = "/ProyEscalafon/public/ver_produccion_intelecual";
        var token3 = $("#token6").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_prod_intele2
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        
                        $('#tipomedio2').val(obj_json.tipomedio);
                        $('#medio2').val(obj_json.medio);
                        $('#nom_publicacion2').val(obj_json.nombre);
                        $('#fech_publicacion2').val(obj_json.fechapu);
                       

                    });
                });
            
            }
            
        });
        
    });

   

//PARA ELIMINAR produccion intelectual

    $(document).on('click','.elim_produccion_intelectual',function(){
 
        var id = $(this).val();
        $('#id_modal_eliminar_produccion').val(id);
      
    });

    $('.btn_eliminarProduccionIntelectual').click(function(){
        
        var id = $('#id_modal_eliminar_produccion').val();
        var formulario = $('#form_deleteproduccionintelectual');
        var ruta = formulario.attr('action').replace(':PRODUCCION_INTELECTUAL_ID',id);
         
        var token3 = $("#token6").val();
        var datos = formulario.serialize();
             console.log(datos);                
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarProduccionIntelectual();
               // mostrarHabientes();

            }
            
        });
        
    });


/*ESTUDIOS SUPERIORES*/

function cambiartitulo_est_supe(titulo3){

    $("#cerrar_modal_estu_supe").text(titulo3)  
}
    $(document).on('click','.update_estudios_superiores',function(e){
        cambiartitulo_est_supe('Actualizar Estudios Superiores'); //cambiamos el ititulo y creamos una funcion
        $(".btn_estudios_superiores").html('<span><i class="far fa-edit"></i></span>Actualizar'); // vamod al modal del create de otros estudios y creamos el btn_otros estudios

        $(".btn_estudios_superiores").addClass('btn-success');
        $(".btn_estudios_superiores").removeClass('btn-primary');
        $(".btn_estudios_superiores").addClass('actualizar3');
        $(".btn_estudios_superiores").removeClass('guardar');

//primero creamos un campo oculto del identificador de la tabla otros estudios
//segundo le colocamos el id en el conroler, luego en los botones y lo comprobamos con console.log si es que da el numero del boton
//tercero crear una ruta en web
        var id_EstudiosSuperiores = $(this).val();
        console.log(id_EstudiosSuperiores);
        var ruta = "/ProyEscalafon/public/editar_modal_estu_supe";
        var token1 = $("#token_est_sup").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token1},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_EstudiosSuperiores // se jala (var id_ProduccionIntelectual = $(this).val();) luego se envia al controlador
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
               // cuarto creamos la funcion en el controlador  editar_modal_otros_estudios, luego 
               // quinto ir a create y crear un campo oculto       

/*aquivoy 15/04/2019*/
                        $('#id_ESTU_SUPE').val(obj_json.id);  // lo creamos en el create
                        $('#nivel_estudio').val(obj_json.tiponivel);
                        $('#estado').val(obj_json.tipoestado);
                        $('#modalidad').val(obj_json.modalidad);
                        $('#centro_estudio_superior').val(obj_json.centroestudio); 
                        $('#grado').val(obj_json.tipogrado);
                        $('#carrera').val(obj_json.carrera);
                        $('#detalle').val(obj_json.detallegrado);
                        $('#fech_consejo').val(obj_json.fechaconsejo);
                        $('#fech_emision').val(obj_json.fechaemision);
                        $('#num_reg_titulo').val(obj_json.numeroregistro);
                        $('#EntidadRegist').val(obj_json.entidad);
                        $('#nro_colegiatura').val(obj_json.numerocolegiatura);
                        $('#nom_colegio').val(obj_json.nombrecolegio);

                        if (obj_json.tipoestado == 1) {
                            $('#concluido').prop('checked',true);
                        } else if (obj_json.tipoestado == 2) {
                            $('#no_concluido').prop('checked',true);
                        } else if (obj_json.tipoestado == 3) {
                            $('#egresado').prop('checked',true);
                        } else{
                            $('#concluido').prop('checked',true);
                        }
                        
                    });
                });
            
            }
            
        });
                });  


    //Para actualizar los datos estudios superiores ->UPDATE
    $(".modal-footer").on('click', '.actualizar3', function(){

        var id = $('#id_ESTU_SUPE').val();
        var formulario = $('#form_updateestudiossuperiores');
        var ruta = formulario.attr('action').replace(':ESTUDIO_SUPERIOR_ID',id);
        var token4 = $("#token12").val();
               
      //  var dato = $("#tipo_estudio").val();
       
        
                        var dato =$('#nivel_estudio').val();
                        //var dato2 = $('#estado').val();
                        var dato2 = $("#formularioestudiossuperiores input[name='estado']:checked").val();
                        var dato3 = $('#modalidad').val();
                        var dato4 = $('#centro_estudio_superior').val();
                        var dato5 = $('#grado').val();
                        var dato6 = $('#carrera').val();
                        var dato7 = $('#detalle').val();
                        var dato8 = $('#fech_consejo').val();
                        var dato9 = $('#fech_emision').val();
                        var dato10 = $('#num_reg_titulo').val();
                        var dato11 = $('#EntidadRegist').val();
                        var dato20 = $('#nro_colegiatura').val();
                        var dato21 = $('#nom_colegio').val();


        console.log(dato7);
        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token4},
            type: 'PUT',
            dataType: 'json',
            data: {
                
                  //  tiponivel, tipoestado -> se va n al controlee
                id_nivel: dato,
                id_estado: dato2,
                id_modalidad: dato3,
                centro_estudios: dato4,
                id_tipo_grado: dato5,
                carrera: dato6,
                detall_grado: dato7,
                fecha_consejo: dato8,
                fecha_emision: dato9,
                num_registro: dato10,
                entidad: dato11,
                num_colegiatura: dato20,
                nom_colegio: dato21
                

            },
            success: function(respuesta){
                                                
                mostrarEstudiosSuperiores();
                //mostrarHabientes();
                                
                $("#formularioestudiossuperiores").trigger('reset');
                
            }
            
        });

    });

        $('#agregar_estudios_superiores').click(function(){

//alert("hora loca");|
        $("#formularioestudiossuperiores").trigger('reset');
        cambiartitulo_est_supe('Estudios Superiores');
        $(".btn_estudios_superiores").html('<span><i class="far fa-save"></i></span> Guardar');
        $(".btn_estudios_superiores").addClass('btn-primary');
        $(".btn_estudios_superiores").removeClass('btn-success');
        $(".btn_estudios_superiores").addClass('guardar');
        $(".btn_estudios_superiores").removeClass('actualizar3');

    });


        

   })




