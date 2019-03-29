$(document).ready(function() 
   {


    mostrarOtrosEstudios();
    mostrarProduccionIntelectual();

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

// tabla de otros estudios
$("#guardarOtrosEstudios").click(function(e){
                
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


// tabla de produccion intelectual
$("#guardarProduccionIntelectual").click(function(e){
                
        var dato = $("#tipomedio").val();  // # se recepcionan de create.blade -> formulario
        var dato2 = $("#medio").val();
        var dato3 = $("#nom_publicacion").val();  // # se recepcionan de create.blade -> formulario
        var dato4 = $("#fech_publicacion").val();
        
       


console.log(dato);  
console.log(dato2);
console.log(dato3);

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

console.log(respuesta);

let registro = '';

respuesta.forEach(obj_json =>{
obj_json.forEach(obj_json =>{
registro += `<tr>
<td>${obj_json.tipo}</td>  
<td>${obj_json.denominacion}</td>
<td>${obj_json.hora}</td>
<td>${obj_json.credito}</td>

<td>

<button class='ver_otros_estudios btn btn-warning' data-toggle="modal" data-target="#modalIdioma2" value='${obj_json.id}' title='Ver'><span><i class="fas fa-eye"></i></span></button>

<button class='update_otros_estudios btn btn-success' data-toggle="modal" data-target="#modalOtrosEstudios" value='${obj_json.id}' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>

<button class='elim_otros_estudios btn btn-danger' data-toggle="modal" data-target="#modalIdioma3" value='${obj_json.id}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
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

console.log(respuesta);

let registro = '';

respuesta.forEach(obj_json =>{
obj_json.forEach(obj_json =>{
registro += `<tr>
<td>${obj_json.medio}</td>  
<td>${obj_json.nombre_publicacion}</td>
<td>${obj_json.anio}</td>


<td>
<button class='elim_estSuperior btn btn-danger'>Borrar</button>
</td>
</tr>`

});
});

// console.log(registro);
$("#pro_intelec").html(registro); // se jala del create  <tbody id=otros_estudios></tbody>

}

});

}





// para oculatr alguno select del formulario de estudios superiores 29/03/2019

$("#no_concluido").click(function(){

var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

//alert(btn_radio);
if(btn_radio == "no concluidos"){



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
if(btn_radio == "concluidos"){



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
if(btn_radio == "egresado"){



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







        

   })




