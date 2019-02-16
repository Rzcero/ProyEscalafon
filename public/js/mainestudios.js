$(document).ready(function() 
   {

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
              

            }
            
        });         
        
        e.preventDefault();
    
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
                

            }
            
        });         
        
        e.preventDefault();
    
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
        
        
        

   })




