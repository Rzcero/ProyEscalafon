// JavaScript Document

$(document).ready(function(){
    
    mostrarIdiomas();
    mostrarHabientes();
    
    $("#formulario1").submit(function(e){
                
        var dato = $("#apellidoPaterno").val();
        var dato2 = $("#apellidoMaterno").val();
        var route = "/ProyEscalafon/public/datos";
        var token = $("#token").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: {
                apellPaterno: dato,
                apellMaterno: dato2
            }
            
        });         
        
        e.preventDefault();
    
    });
    
    //para mostrar idiomas
    function mostrarIdiomas(){
        
        
        $.ajax({

            url: '/ProyEscalafon/public/listarIdiomas',
            type: 'GET',
            success: function(respuesta){
                
                console.log(respuesta);

                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                                        <td>${obj_json.idioma}</td>
                                        <td>${obj_json.dominio}</td>

                                        <td>
                                            <button class='elim_estSuperior btn btn-danger'>Borrar</button>
                                        </td>
                                     </tr>`

                    });
                });
                
//                console.log(registro);
                $("#otros").html(registro);  
            
            }

        });
    
    }

    //para mostrar Habientes
    function mostrarHabientes(){
        
        
        $.ajax({

            url: '/ProyEscalafon/public/listarHabientes',
            type: 'GET',
            success: function(respuesta){
                
                console.log(respuesta);

                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                                        <td>${obj_json.parentesco}</td>
                                        <td>${obj_json.numDoc}</td>
                                        <td>${obj_json.apellidoPaterno} ${obj_json.apellidoMaterno} ${obj_json.nombres}</td>
                                        <td>${obj_json.fechaNacim}</td>

                                        <td>
                                            <button class='elim_estSuperior btn btn-danger'>Borrar</button>
                                        </td>
                                     </tr>`

                    });
                });
                
//                console.log(registro);
                $("#otros_habientes").html(registro);  
            
            }

        });
    }  
    
    //Para llenar el Select de tipo de Idioma
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listarTipoIdioma',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.idioma}</option>`

                });
            });
            
            $("#tipo_idioma").append(registro);
            
        }
        
    });

})
