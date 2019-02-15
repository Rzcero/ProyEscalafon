// JavaScript Document

$(document).ready(function(){
    
    mostrarIdiomas();
    mostrarHabientes();
    
    
    //botones tipo ratio del formulario 1
    $("#formulario1 :radio").click(function(){
        
        dato6 = $(this).val();
                
    });
        
    $("#formulario1").submit(function(e){
        
        var dato = $("#tipoDocIdentidad").val();
        var dato2 = $("#num_docIdentidad").val();
        var dato3 = $("#apellidoPaterno").val();
        var dato4 = $("#apellidoMaterno").val();
        var dato5 = $("#nomb").val();
        var dato7 = $("#fech_nac").val();
        var dato8 = $("#est_civil").val();
        var dato9 = $("#via").val();
        var dato10 = $("#zona").val();
        var dato11 = $("#direc").val();
        
        
        console.log(dato7);
        var route = "/ProyEscalafon/public/datos";
        var token = $("#token").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: {
                tipoDocIdent: dato,
                numDocIdent: dato2,
                apellPaterno: dato3,
                apellMaterno: dato4,
                nombres: dato5,
                sexo: dato6,
                fecha: dato7,
                estadoCivil: dato8,
                via: dato9,
                zona: dato10,
                direccion: dato11
            }
            
        });         
        
        e.preventDefault();
    
    });
    
    //Para llenar el Select de tipo de Documento de Identidad
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listarTipoDocIdentidad',
        type: 'GET',
        success: function(respuesta){
            console.log(respuesta);                       
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

                });
            });
            
            $("#tipoDocIdentidad").append(registro);
            
        }
        
    });
    
    //Para llenar el Select de Estado Civil
    $.ajax({
        
        url: '/ProyEscalafon/public/listarEstadoCivil',
        type: 'GET',
        success: function(respuesta){
            console.log(respuesta);                       
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

                });
            });
            
            $("#est_civil").append(registro);
            
        }
        
    });
    
    //Para llenar el Select de Tipo de Via
    $.ajax({
        
        url: '/ProyEscalafon/public/listarTipoVia',
        type: 'GET',
        success: function(respuesta){
            console.log(respuesta);                       
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

                });
            });
            
            $("#via").append(registro);
            
        }
        
    });
    
    //Para llenar el Select de Tipo de Zona
    $.ajax({
        
        url: '/ProyEscalafon/public/listarTipoZona',
        type: 'GET',
        success: function(respuesta){
            console.log(respuesta);                       
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

                });
            });
            
            $("#zona").append(registro);
            
        }
        
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
            console.log(respuesta);                        
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.idioma}</option>`

                });
            });
            
            $("#tipo_idioma").append(registro);
            
        }
        
    });
    
    
    //MODAL AGREGAR NUEVO IDIOMA
    
    $("#guardarNuevoIdioma").click(function(e){
        
        var dato = $("#centroEstudio").val();
        
        console.log(dato);
        
        var route = "/ProyEscalafon/public/agregarIdioma";
        var token2 = $("#token2").val();
        
        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token2},
            type: 'POST',
            dataType: 'json',
            data: {
                
                centro: dato
                
            }
            
        });         
        
        e.preventDefault();
    
    });

})
