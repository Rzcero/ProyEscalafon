$(document).ready(function() 
   {


 $("#formularioestudiosbasicos").submit(function(e){
                
        var dato = $("#ie_primaria").val();  // # se recepcionan de create.blade -> formulario
        var dato2 = $("#anio_egreso_primaria").val();

        var route = "/ProyEscalafon/public/Estudios";
        var token = $("#token").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: {
                ie_primaria: dato,
                anio_egreso_primaria: dato2
            }
            
        });         
        
        e.preventDefault();
    
    });





//Para llenar el Select de nivel de estudios
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listarnivel',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id}'>${obj_json.nombre_nivel}</option>`

                });
            });
            
            $("#nivel_estudio").append(registro);
            
        }
   });
         

   })




