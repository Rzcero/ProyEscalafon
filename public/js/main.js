// JavaScript Document

$(document).ready(function(){
    
    mostrarIdiomas();
    mostrarHabientes();
    
    
    //botones tipo ratio del formulario 1
    $("#formulario1 :radio").click(function(){
        
        dato6 = $(this).val();
            
    });
    
    //Para llenar los select de ubigeo
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listarDepartamentoUbigeo',
        type: 'GET',
        success: function(respuesta){
                                
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

                });
            });
            
            $("#depart").html(registro);
            
            
        }
        
    });
    
    $("#depart").change(function(){
        
        var dato = $("#depart").val();
        
        var route = "/ProyEscalafon/public/listarProvinciaUbigeo";
        
        $.ajax({
            
            url: route,
        
            type: 'GET',
            dataType: 'json',
            data: {
                
                    idDpto: dato
                
                  },
            success: function(respuesta){
                                    
                let registro = '';
                var ubigeoDpto = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`
                        ubigeoDpto = `${obj_json.ubi}`
                        
                    });
                });

                $("#provinc").html(registro);
                $("#codigo").attr("value",ubigeoDpto);
                
            }
            
        });
        
    });
    
    $("#provinc").change(function(){
        
        var dato = $("#provinc").val();
        
        var route = "/ProyEscalafon/public/listarDistritoUbigeo";
        
        $.ajax({
            
            url: route,
        
            type: 'GET',
            dataType: 'json',
            data: {
                
                    idProv: dato
                
                  },
            success: function(respuesta){
                                   
                let registro = '';
                var ubigeoDpto = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`
                        ubigeoProv = `${obj_json.ubi}`

                    });
                });

                $("#distri").html(registro);
                $("#codigo").attr("value",ubigeoProv);
            
        }
            
        });
        
    });
    
    $("#distri").change(function(){
        
        var dato = $("#distri").val();
        var route = "/ProyEscalafon/public/listarDistritoUbigeo";
        
        $.ajax({
            
            url: route,
            type: 'GET',
            dataType: 'json',
            data: {
                
                    idProv: dato
                
                  },
            success: function(respuesta){
                                    
                let registro = '';
                var ubigeoDpto = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`
                        ubigeoProv = `${obj_json.ubi}`

                    });
                });

                $("#distri").html(registro);
                $("#codigo").attr("value",ubigeoProv);
            
        }
            
        });
        
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
            
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                                        <td>${obj_json.idioma}</td>
                                        <td>${obj_json.dominio}</td>

                                        <td>

                                            <button class='ver_idioma btn btn-warning' data-toggle="modal" data-target="#modalIdioma2" value='${obj_json.id}' title='Ver'><span><i class="fas fa-eye"></i></span></button>

                                            <button class='update_idioma btn btn-success' data-toggle="modal" data-target="#modalIdioma" value='${obj_json.id}' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>

                                            <button class='delete_idioma btn btn-danger' data-toggle="modal" data-target="#modalIdioma3" value='${obj_json.id}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                            
                                        </td>
                                     </tr>`

                    });
                });
                
                $("#registroIdiomas").html(registro);  
            
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

    //Para llenar el Select de tipo de Documento
        
    $.ajax({
        
        url: '/ProyEscalafon/public/listarTipoDocumento',
        type: 'GET',
        success: function(respuesta){
                                    
            let registro = '';
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                    registro += `<option value='${obj_json.id}'>${obj_json.tipoDoc}</option>`

                });
            });
            
            $("#tipo_doc").append(registro);
            
        }
        
    });
    
    function cambiarTitulo(titulo){

        $('#exampleModalLabelIdioma').text(titulo);

    }

    //MODAL AGREGAR NUEVO IDIOMA
    
    $('#agregarNuevoIdioma').click(function(){

        $("#formularioModal1").trigger('reset');
        cambiarTitulo('Agregar Idioma');
        $(".btn_idioma").html('<span><i class="far fa-save"></i></span> Guardar');
        $(".btn_idioma").addClass('btn-primary');
        $(".btn_idioma").removeClass('btn-success');
        $(".btn_idioma").addClass('guardar');
        $(".btn_idioma").removeClass('actualizar');

    });
    
    $(".modal-footer").on('click', '.guardar', function(){

        var dato = $("#tipo_idioma").val();
        var btn_radio = $("#formularioModal1 input[name='dominio']:checked").val();
        var dato3 = $("#centroEstudio").val();
        var dato4 = $('#tipo_doc').val();
        var dato5 = $('#horas').val();
        var dato6 = $('#creditos').val();

        var ruta = "/ProyEscalafon/public/agregarIdioma";
        var token2 = $("#token2").val();
        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token2},
            type: 'POST',
            dataType: 'json',
            data: {
                
                idioma: dato,
                dominio: btn_radio,
                centro: dato3,
                tipo_documento: dato4,
                horas: dato5,
                creditos: dato6
                
            },
            success: function(respuesta){
                                                
                mostrarIdiomas();
                mostrarHabientes();
                                
                $("#formularioModal1").trigger('reset');
                
            }
            
        });

    });
    
    //PARA ACTUALIZAR EL MODAL IDIOMA
        //para mostrar los datos en el modal
    $(document).on('click','.update_idioma',function(e){
        
        cambiarTitulo('Actualizar Idioma');
        $(".btn_idioma").html('<span><i class="far fa-edit"></i></span>Actualizar');

        $(".btn_idioma").addClass('btn-success');
        $(".btn_idioma").removeClass('btn-primary');
        $(".btn_idioma").addClass('actualizar');
        $(".btn_idioma").removeClass('guardar');

        var id_Idioma = $(this).val();
        var ruta = "/ProyEscalafon/public/editarIdioma";
        var token3 = $("#token3").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_Idioma
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        
                        $('#id_idioma').val(obj_json.id);
                        $('#tipo_idioma').val(obj_json.idioma);
                        $('#centroEstudio').val(obj_json.entidad);
                        $('#tipo_doc').val(obj_json.tipo_documento);
                        $('#horas').val(obj_json.horas); 
                        $('#creditos').val(obj_json.creditos);

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
                        }
                        
                    });
                });
            
            }
            
        });
                
    });   
    
        //Para actualizar los datos de Idiomas
    $(".modal-footer").on('click', '.actualizar', function(){

        var id = $('#id_idioma').val();
        var formulario = $('#form_updateIdioma');
        var ruta = formulario.attr('action').replace(':IDIOMA_ID',id);
        var token4 = $("#token4").val();
               
        var dato = $("#tipo_idioma").val();
        var btn_radio = $("#formularioModal1 input[name='dominio']:checked").val();
        var dato2 = $("#centroEstudio").val();
        var dato3 = $('#tipo_doc').val();
        var dato4 = $('#horas').val();
        var dato5 = $('#creditos').val();
        
        console.log(dato);
        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token4},
            type: 'PUT',
            dataType: 'json',
            data: {
                
                id_tipo_idioma: dato,
                dominio: btn_radio,
                entidad: dato2,
                id_tipo_documento: dato3,
                num_horas: dato4,
                num_creditos: dato5
                
            },
            success: function(respuesta){
                                                
                mostrarIdiomas();
                mostrarHabientes();
                                
                $("#formularioModal1").trigger('reset');
                
            }
            
        });

    });
    
    //PARA ELIMINAR UN IDIOMA

    $(document).on('click','.delete_idioma',function(){
 
        var id = $(this).val();
        $('#id_modal2').val(id);
        
    });

    $('.btn_eliminarIdioma').click(function(){
        
        var id = $('#id_modal2').val();
        var formulario = $('#form_deleteIdioma');
        var ruta = formulario.attr('action').replace(':IDIOMA_ID',id);
        
        var token3 = $("#token3").val();
        var datos = formulario.serialize();
                            
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarIdiomas();
                mostrarHabientes();

            }
            
        });
        
    });

    //PARA VER UN IDIOMA
    $(document).on('click','.ver_idioma',function(){
        
        var id_Idioma = $(this).val();
        var ruta = "/ProyEscalafon/public/verIdioma";
        var token3 = $("#token3").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_Idioma
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        
                        $('#tipo_idiomaM2').val(obj_json.idioma);
                        $('#dominioM2').val(obj_json.dominio);
                        $('#centroEstudioM2').val(obj_json.entidad);
                        $('#tipo_docM2').val(obj_json.tipo_documento);
                        $('#horasM2').val(obj_json.horas); 
                        $('#creditosM2').val(obj_json.creditos);
                        
                    });
                });
            
            }
            
        });
        
    });

    //para mostrar Habientes
    function mostrarHabientes(){
                
        $.ajax({

            url: '/ProyEscalafon/public/listarHabientes',
            type: 'GET',
            success: function(respuesta){
                
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                                        <td>${obj_json.parentesco}</td>
                                        <td>${obj_json.numDoc}</td>
                                        <td>${obj_json.apellidoPaterno} ${obj_json.apellidoMaterno} ${obj_json.nombres}</td>
                                        <td>${obj_json.fechaNacim}</td>

                                        <td>
                                            <button class='ver_parentesco btn btn-warning' title='Ver'><span><i class="fas fa-eye"></i></span></button>

                                            <button class='update_parentesco btn btn-success' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>
                                            
                                            <button class='delete_parentesco btn btn-danger' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                        </td>
                                     </tr>`

                    });
                });

                $("#otros_habientes").html(registro);  
            
            }

        });
    }  
    

});
