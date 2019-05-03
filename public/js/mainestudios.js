$(document).ready(function() {

    var myIDpersona = $('#myID').val();

    mostrarOtrosEstudios();
    mostrarProduccionIntelectual();
    mostrarEstudiosSuperiores();

    $('#btn_pdfPrimaria').on('click', function(){
        $('#pdf_primaria').trigger('click');
    });

    $('#btn_pdfSecundaria').on('click', function(){
        $('#pdf_secundaria').trigger('click');
    });

    //funcion para eliminar los mensajes de error de los select
    function eliminaMsjError(ident){
            
        if ($("select[name='" + ident + "'] .is-invalid")) {
                        
            $("select[name='" + ident + "']").removeClass('is-invalid');
            $("select[name='" + ident + "']").next().remove();
            
        }

    }

    //funcion para eliminar los mensajes de error de los input
    function eliminaMsjErrorInput(ident){
            
        if ($("input[name='" + ident + "'] .is-invalid")) {
                        
            $("input[name='" + ident + "']").removeClass('is-invalid');
            $("input[name='" + ident + "']").next().remove();
            
        }

    }

    //MODAL AGREGAR NUEVO otros estudios -> es para cambiar el boton verde a azul y el titulo

    //elimina los errores sel select Tipo de Estudios
    $('#tipo_estudios').change(function(){

        var valor1 = 'tipo_estudios';
                
        eliminaMsjError(valor1);

    });

    //elimina los errores sel select Tipo de Documento
    $('#tipo_doc').change(function(){

        var valor1 = 'tipo_doc';
                
        eliminaMsjError(valor1);

    });

    //para el boton de subir pdf otros estudios
    $('#btn_pdfOtroEstudio').on('click', function(){
        $('#pdf_otroEstudio').trigger('click');
    });

    // paso 1  

    $('#agregar_otro_estudio').click(function(){

        //para eliminar los mensajes de error al momento de darle click al boton agregar_otro_estudio
        if ($('.msg_errorOtroEstudio')) {
			$('.msg_errorOtroEstudio').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

        if ($('.msj_exitoOtroEstudio')) {
            $('.msj_exitoOtroEstudio').css('display','none');
        }

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
        
        //Elimina los mensajes de error cuando le das click al boton guardar

        if ($('.msg_errorOtroEstudio')) {
			$('.msg_errorOtroEstudio').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }
        
        var ruta = "/ProyEscalafon/public/guardar_otros_estudios";
        var token = $("#token_otr_est").val();
        
        var formData = new FormData();

        formData.append('miID',myIDpersona);
        formData.append('tipo_estudios',$("#tipo_estudios").val());
        formData.append('nom_estudios',$("#nom_estudios").val());
        formData.append('participacion',$("#participacion").val());
        formData.append('pdf_otroEstudio',$('input[name=pdf_otroEstudio]')[0].files[0]);
        formData.append('centro_estudio',$("#centro_estudio").val());
        formData.append('tipo_doc',$("#tipo_doc").val());
        formData.append('fech_inicio_otros_estudios',$("#fech_inicio_otros_estudios").val());
        formData.append('fech_termino_otros_estudios',$("#fech_termino_otros_estudios").val());
        formData.append('horas',$("#horas").val());
        formData.append('creditos',$("#creditos").val());

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: formData,
            cache: false,
            contentType: false,
            processData: false, 
            //paso2 se modifica
            success: function(respuesta){

                $('.msj_exitoOtroEstudio').html(respuesta.mensaje);
                $('.msj_exitoOtroEstudio').css('display','block');

                $("#formulariootrosestudios").trigger('reset');

                mostrarOtrosEstudios();

            },
            error: function(respuesta){

                $('.msj_exitoOtroEstudio').css('display','none');

                $.each(respuesta.responseJSON.errors, function(index, val){
                    
                    $('select[name=' + index + ']').addClass('is-invalid');
					
                    $('select[name=' + index + ']').after(`<span class='msg_errorOtroEstudio invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                    $('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorOtroEstudio invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                });

            }
            
        });         
    
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
                                    
            let registro = "<option value=''></option>";
            
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
                                    
            let registro = "<option value=''></option>";
            
            respuesta.forEach(obj_json =>{
                obj_json.forEach(obj_json => {

                  
                    registro += `<option value='${obj_json.id_tipo_documento}'>${obj_json.denominacion}</option>`

                });
            });
            
            $("#tipo_doc").append(registro);
            
        }
   });

    //Para llenar el Select de listar tipo de grado
    function listarTipoGrados(){ 
        $.ajax({
            
            url: '/ProyEscalafon/public/listartipogrados',
            type: 'GET',
            success: function(respuesta){
                                        
                let registro = '';
                
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {
                    
                        registro += `<option value='${obj_json.id_grado}'>${obj_json.tipogrado}</option>`

                    });
                });
                
                $("#grado").html(registro);
    
            }
        });
    }

    function selectTipoMedio(identificador){

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

               identificador.append(registro);

            }
        });
    }

    function selectMedioEscrito(identificador){

        $.ajax({
            
            url: '/ProyEscalafon/public/listarmedioescrito',
            type: 'GET',
            success: function(respuesta){
                                    
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        
                        registro += `<option value='${obj_json.id}'>${obj_json.denominacion}</option>`

                    });
                });

               identificador.html(registro);

            }
        });
    }

    function selectMedioMultimedia(identificador){

        $.ajax({
            
            url: '/ProyEscalafon/public/listarmediomultimedia',
            type: 'GET',
            success: function(respuesta){
                                    
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        
                        registro += `<option value='${obj_json.id}'>${obj_json.denominacion}</option>`

                    });
                });

               identificador.html(registro);

            }
        });
    }
            
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

        var ruta = '/ProyEscalafon/public/listarproduccion';
        $.ajax({

            url: ruta,
            type: 'GET',
            dataType: 'json',
            data: {

                id: myIDpersona
                
            },
            success: function(respuesta){

                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                                        <td>${obj_json.medioEscrito}${obj_json.medioMultimedia}</td>  
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
        
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                                        <td>${obj_json.tipo}</td>  
                                        <td>${obj_json.centro_estudios}</td>
                                        <td>${obj_json.nivel}</td>
                                        <td>
                                            <button class='ver_estudios_superiores btn btn-warning' data-toggle="modal" data-target="#modal_ver_estudios_superiores" value='${obj_json.id_estudios_sup}' title='Ver'><span><i class="fas fa-eye"></i></span></button>
                                            <button class='update_estudios_superiores btn btn-success' data-toggle="modal" data-target="#modalEstudiosSuperiores" value='${obj_json.id_estudios_sup}' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>
                                            <button class='elim_estudios_superiores btn btn-danger' data-toggle="modal" data-target="#modal_eliminar_estudios_superiores" value='${obj_json.id_estudios_sup}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
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

    // $("#no_concluido").click(function(){

    //     var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

    //     //alert(btn_radio);
    //     if(btn_radio == "2"){

    //         $("#archivo_grado_titulo").attr("hidden",true);
    //         $("#lblarchivo_grado_titulo").attr("hidden",true);

    //         $("#grado").attr("hidden",true);
    //         $("#lblgrado").attr("hidden",true);

    //         $("#lbldetalle").attr("hidden",true);
    //         $("#detalle").attr("hidden",true);

    //         $("#fech_consejo").attr("hidden",true);
    //         $("#lblfech_consejo").attr("hidden",true);

    //         $("#lblfech_emision").attr("hidden",true);
    //         $("#fech_emision").attr("hidden",true);
    //         //$("#nom_reg_titulo").text("");
    //         $("#lblnum_reg_titulo").attr("hidden",true);
    //         $("#num_reg_titulo").attr("hidden",true);

    //         $("#lblnom_colegio").attr("hidden",true);
    //         $("#nom_colegio").attr("hidden",true);

    //         $("#lblnro_colegiatura").attr("hidden",true);
    //         $("#nro_colegiatura").attr("hidden",true);

    //         $("#lblEntidadRegist").attr("hidden",true);
    //         $("#EntidadRegist").attr("hidden",true);

    //     } 

    // });

    // $("#concluido").click(function(){

    //     var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

    //     //alert(btn_radio);
    //     if(btn_radio == "1"){

    //         $("#archivo_grado_titulo").attr("hidden",false);
    //         $("#lblarchivo_grado_titulo").attr("hidden",false);

    //         $("#grado").attr("hidden",false);
    //         $("#lblgrado").attr("hidden",false);

    //         $("#lbldetalle").attr("hidden",false);
    //         $("#detalle").attr("hidden",false);

    //         $("#fech_consejo").attr("hidden",false);
    //         $("#lblfech_consejo").attr("hidden",false);

    //         $("#lblfech_emision").attr("hidden",false);
    //         $("#fech_emision").attr("hidden",false);
    //         //$("#nom_reg_titulo").text("");
    //         $("#lblnum_reg_titulo").attr("hidden",false);
    //         $("#num_reg_titulo").attr("hidden",false);

    //         $("#lblnom_colegio").attr("hidden",false);
    //         $("#nom_colegio").attr("hidden",false);

    //         $("#lblnro_colegiatura").attr("hidden",false);
    //         $("#nro_colegiatura").attr("hidden",false);

    //         $("#lblEntidadRegist").attr("hidden",false);
    //         $("#EntidadRegist").attr("hidden",false);
    //     } 

    // });

    // $("#egresado").click(function(){

    //     var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

    //     //alert(btn_radio);
    //     if(btn_radio == "3"){

    //         $("#archivo_grado_titulo").attr("hidden",true);
    //         $("#lblarchivo_grado_titulo").attr("hidden",true);

    //         $("#grado").attr("hidden",true);
    //         $("#lblgrado").attr("hidden",true);

    //         $("#lbldetalle").attr("hidden",true);
    //         $("#detalle").attr("hidden",true);

    //         $("#fech_consejo").attr("hidden",true);
    //         $("#lblfech_consejo").attr("hidden",true);

    //         $("#lblfech_emision").attr("hidden",true);
    //         $("#fech_emision").attr("hidden",true);
    //         //$("#nom_reg_titulo").text("");
    //         $("#lblnum_reg_titulo").attr("hidden",true);
    //         $("#num_reg_titulo").attr("hidden",true);

    //         $("#lblnom_colegio").attr("hidden",true);
    //         $("#nom_colegio").attr("hidden",true);

    //         $("#lblnro_colegiatura").attr("hidden",true);
    //         $("#nro_colegiatura").attr("hidden",true);

    //         $("#lblEntidadRegist").attr("hidden",true);
    //         $("#EntidadRegist").attr("hidden",true);

    //     } 

    // });

    /*OTROS ESTUDIOS               */

    function cambiartitulo_otros_estudios(titulo){

        $("#exampleModalLabelOtrosEstudios").text(titulo)  // buscar el <h5 id="exampleModalLabelOtrosEstudios y cambiar tambien en aria-labelledby="exampleModalLabelOtrosEstudios"
    }

    //PARA ACTUALIZAR EL MODAL otros estudios
    //para mostrar los datos en el modal -> RECUPERAR LOS DATOS DE LA BASE DE DATOS
    $(document).on('click','.update_otros_estudios',function(e){

        $("#formulariootrosestudios").trigger('reset');

        //si hay mensaje de error
        if ($('.msg_errorOtroEstudio')) {
            //entonces elimina la clase del error
			$('.msg_errorOtroEstudio').remove();
        }
        
        //si hay input en rojo con error
        if ($('.is-invalid')) {
            //entonces remueve la clase del error
            $('.is-invalid').removeClass('is-invalid');
        }

        //si hay un mensaje de exito
        if ($('.msj_exitoOtroEstudio')) {
            //entonces ocultalo
            $('.msj_exitoOtroEstudio').css('display','none');
        }
        
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
                        
                    });
                });
            
            }
            
        });
                
    });   
    
    //Para actualizar los datos de otros estudios ->UPDATE
    $(".modal-footer").on('click', '.actualizar', function(){
        
        if ($('.msg_errorOtroEstudio')) {
			$('.msg_errorOtroEstudio').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

        if ($('.msj_exitoOtroEstudio')) {
            $('.msj_exitoOtroEstudio').css('display','none');
        }

        var id = $('#id_OT_ES').val();
        var formulario = $('#form_updateotrosestudios');
        var ruta = formulario.attr('action').replace(':OTRO_ESTUDIO_ID',id);
        var token4 = $("#token4").val();
        
        var formData2 = new FormData();
            
        formData2.append('tipo_estudios',$("#tipo_estudios").val());
        formData2.append('nom_estudios',$("#nom_estudios").val());
        formData2.append('participacion',$('#participacion').val());
        formData2.append('centro_estudio',$('#centro_estudio').val());
        formData2.append('tipo_doc',$('#tipo_doc').val());
        formData2.append('pdf_otroEstudio',$('input[name=pdf_otroEstudio]')[0].files[0]);
        formData2.append('fech_inicio_otros_estudios',$('#fech_inicio_otros_estudios').val());
        formData2.append('fech_termino_otros_estudios',$('#fech_termino_otros_estudios').val());
        formData2.append('horas',$('#horas').val());
        formData2.append('creditos',$('#creditos').val());
        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token4},
            type: 'post',
            dataType: 'json',
            data: formData2,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){
                
                $('.msj_exitoOtroEstudio').html(respuesta.mensaje);
                $('.msj_exitoOtroEstudio').css('display','block');
                
                mostrarOtrosEstudios();
                               
            },
            error: function(respuesta){
				
				$('.msj_exitoOtroEstudio').css('display','none');
				
				$.each(respuesta.responseJSON.errors, function(index, val) {
					// console.log(index + ": "+val);
					
					$('select[name=' + index + ']').addClass('is-invalid');
					
                    $('select[name=' + index + ']').after(`<span class='msg_errorOtroEstudio invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                    $('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorOtroEstudio invalid-feedback' role='alert'><strong>${val}</strong></span>`);
                    
				});
				
            }
            
        });

    });

    //PARA VER OTROS ESTUDIOS
    $(document).on('click','.ver_otros_estudios',function(){
        
        //resetea el formulario
        $('#formVerOtrosEstudios').trigger('reset');

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
                       
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarOtrosEstudios();
               
            }
            
        });
        
    });

    /*PRODUCCION INTELECTUAL*/

    function cambiartitulo_prod_intel(titulo2){

        $("#cerrar_modal_prod_intel").text(titulo2);

    }
    
    //********* MODAL AGREGAR NUEVO PRODUCCION INTELECTUAL *********/

    var selec_tipoMedio = $('#tipomedio');
    var selec_medioEscrito = $('#medio_escrito');
    var selec_medioMultimedia = $('#medio_multimedia');

    selectTipoMedio(selec_tipoMedio);
    selectMedioEscrito(selec_medioEscrito);
    selectMedioMultimedia(selec_medioMultimedia);
    
    $('#tipomedio').change(function() {

		//elimina mensajes de error
		var valor1 = 'tipomedio';
		var valor2 = 'medio_escrito';
		var valor3 = 'medio_multimedia';
		
		eliminaMsjError(valor1);
		eliminaMsjError(valor2);
		eliminaMsjError(valor3);
	               
		if ($(this).val() != 1) {
            
			if ($(this).val() == 2) {
			
				$('#m_escrito').show();
                selectMedioEscrito(selec_medioEscrito);
                
				$('#m_multimedia').hide();
				selec_medioMultimedia.val($('option:first', selec_medioMultimedia).val());

			}else{
				$('#m_escrito').hide();
				//resetea los select de medio
				selec_medioEscrito.val($('option:first', selec_medioEscrito).val());
				
				$('#m_multimedia').show();
								
				selectMedioMultimedia(selec_medioMultimedia);
				
			}
		
		} else{
			
			$('#m_escrito').hide();
			selec_medioEscrito.val($('option:first', selec_medioEscrito).val());
			
			$('#m_multimedia').hide();
			selec_medioMultimedia.val($('option:first', selec_medioMultimedia).val());

        }

    });
    
    //elimina los errores sel select medio escrito
    $('#medio_escrito').change(function() {

        var valor1 = 'medio_escrito';
        
        eliminaMsjError(valor1);

	});

    //elimina los errores sel select medio multimedia
	$('#medio_multimedia').change(function() {

		var valor1 = 'medio_multimedia';
        
        eliminaMsjError(valor1);

    });
    
    //para el boton de subir pdf produccion intelectual
    $('#btn_pdf_prodIntelectual').on('click', function(){
        $('#pdf_prodIntelectual').trigger('click');
    });

    $('#agregar_produccion_intelectual').click(function(){

        if ($('.msg_errorProdIntelec')) {
			$('.msg_errorProdIntelec').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

        if ($('.msj_exitoProdIntelec')) {
            $('.msj_exitoProdIntelec').css('display','none');
        }
        
        $('#m_escrito').hide();
        $('#m_multimedia').hide();

        $("#formularioproduccionintelectual").trigger('reset');

        cambiartitulo_prod_intel('Publicaciones');
        
        $(".btn_produccion_intelectual").html('<span><i class="far fa-save"></i></span> Guardar');
        $(".btn_produccion_intelectual").addClass('btn-primary');
        $(".btn_produccion_intelectual").removeClass('btn-success');
        $(".btn_produccion_intelectual").addClass('guardar2');
        $(".btn_produccion_intelectual").removeClass('actualizar2');

    });

    // tabla de produccion intelectual
    $(".modal-footer").on('click', '.guardar2', function(){

        if ($('.msg_errorProdIntelec')) {
			$('.msg_errorProdIntelec').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }
         
        var route = "/ProyEscalafon/public/guardar_produccion_intelectual";
        var token = $("#token_pro_int").val();
        
        var formData = new FormData();

        formData.append('miID',myIDpersona);
        
        if ($("#tipomedio").val() != 1) {

            formData.append('tipomedio',$("#tipomedio").val());

            if ($("#tipomedio").val() == 2) {
                
                if ($("#medio_escrito").val() != 1) {
                    formData.append('medio_escrito',$("#medio_escrito").val());
                }

                formData.append('medio_multimedia',$("#medio_multimedia").val(1));
    
            } else{

                if ($("#medio_multimedia").val() != 1) {
                    formData.append('medio_multimedia',$("#medio_multimedia").val());
                }

                formData.append('medio_escrito',$("#medio_escrito").val(1));

            }
        }
                
        formData.append('pdf_prodIntelectual',$('input[name=pdf_prodIntelectual]')[0].files[0]);
        formData.append('nom_publicacion',$("#nom_publicacion").val());
        formData.append('fech_publicacion',$("#fech_publicacion").val());

        $.ajax({
            
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            //paso2 se modifica    
            success: function(respuesta){

                $('.msj_exitoProdIntelec').html(respuesta.mensaje);
                $('.msj_exitoProdIntelec').css('display','block');

                $("#formularioproduccionintelectual").trigger('reset');

                mostrarProduccionIntelectual();

            },
            error: function(respuesta){

                $('.msj_exitoProdIntelec').css('display','none');

                $.each(respuesta.responseJSON.errors, function(index, val){
                    
                    $('select[name=' + index + ']').addClass('is-invalid');
					
                    $('select[name=' + index + ']').after(`<span class='msg_errorProdIntelec invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                    $('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorProdIntelec invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                });

            }
            
        });         
                    
    });

    //PARA ACTUALIZAR EL MODAL DE PRODUCCION INTELECTUAL
    //para mostrar los datos en el modal
    $(document).on('click','.update_produccion_intelectual',function(e){
        
        $('#formularioproduccionintelectual').trigger('reset');

        //si hay mensaje de error
        if ($('.msg_errorProdIntelec')) {
            //entonces elimina la clase del error
			$('.msg_errorProdIntelec').remove();
        }
        
        //si hay input en rojo con error
        if ($('.is-invalid')) {
            //entonces remueve la clase del error
            $('.is-invalid').removeClass('is-invalid');
        }

        //si hay un mensaje de exito
        if ($('.msj_exitoProdIntelec')) {
            //entonces ocultalo
            $('.msj_exitoProdIntelec').css('display','none');
        }

        cambiartitulo_prod_intel('Actualizar Publicaciones'); //cambiamos el ititulo y creamos una funcion
        $(".btn_produccion_intelectual").html('<span><i class="far fa-edit"></i></span>Actualizar'); // vamod al modal del create de otros estudios y creamos el btn_otros estudios

        $(".btn_produccion_intelectual").addClass('btn-success');
        $(".btn_produccion_intelectual").removeClass('btn-primary');
        $(".btn_produccion_intelectual").addClass('actualizar2');
        $(".btn_produccion_intelectual").removeClass('guardar2');

        //primero creamos un campo oculto del identificador de la tabla otros estudios
        //segundo le colocamos el id en el conroler, luego en los botones y lo comprobamos con console.log si es que da el numero del boton
        //tercero crear una ruta en web

        var id_ProduccionIntelectual = $(this).val();
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

                        if (obj_json.idmedioEscrito != 1) {

                            $('#m_escrito').show();
                            $('#m_multimedia').hide();
                            $('#medio_escrito').val(obj_json.idmedioEscrito);

                        }
                        
                        if (obj_json.idmedioMultimedia != 1) {

                            $('#m_escrito').hide();
                            $('#m_multimedia').show();
                            $('#medio_multimedia').val(obj_json.idmedioMultimedia);

                        }
                        
                        $('#nom_publicacion').val(obj_json.nombre);
                        $('#fech_publicacion').val(obj_json.fechapublica); 
                        
                    });
                });
            
            }
            
        });

    });  

    //Para actualizar los datos de  produccion intelectual ->UPDATE
    $(".modal-footer").on('click', '.actualizar2', function(){

        if ($('.msg_errorProdIntelec')) {
			$('.msg_errorProdIntelec').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

        if ($('.msj_exitoProdIntelec')) {
            $('.msj_exitoProdIntelec').css('display','none');
        }

        var id = $('#id_PROD_INTEL').val();
        var formulario = $('#form_updateproduccionintelectual');
        var ruta = formulario.attr('action').replace(':PRODUCCION_INTELECTUAL_ID',id);
        var token4 = $("#token8").val();
        
        var formData2 = new FormData();
                 
        if ($("#tipomedio").val() != 1) {

            formData2.append('tipomedio',$("#tipomedio").val());

            if ($("#tipomedio").val() == 2) {
                
                if ($("#medio_escrito").val() != 1) {
                    formData2.append('medio_escrito',$("#medio_escrito").val());
                }

                formData2.append('medio_multimedia',$("#medio_multimedia").val(1));
    
            } else{

                if ($("#medio_multimedia").val() != 1) {
                    formData2.append('medio_multimedia',$("#medio_multimedia").val());
                }

                formData2.append('medio_escrito',$("#medio_escrito").val(1));

            }
        }

        formData2.append('pdf_prodIntelectual',$('input[name=pdf_prodIntelectual]')[0].files[0]);
        formData2.append('nom_publicacion',$('#nom_publicacion').val());
        formData2.append('fech_publicacion',$('#fech_publicacion').val());
        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token4},
            type: 'post',
            dataType: 'json',
            data: formData2,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){
                
                $('.msj_exitoProdIntelec').html(respuesta.mensaje);
				$('.msj_exitoProdIntelec').css('display','block');
                
                mostrarProduccionIntelectual();
                
            },
            error: function(respuesta){
				
				$('.msj_exitoProdIntelec').css('display','none');
				
				$.each(respuesta.responseJSON.errors, function(index, val) {
					// console.log(index + ": "+val);
					
					$('select[name=' + index + ']').addClass('is-invalid');
					
                    $('select[name=' + index + ']').after(`<span class='msg_errorProdIntelec invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                    $('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorProdIntelec invalid-feedback' role='alert'><strong>${val}</strong></span>`);
                    
				});
				
            }
            
        });

    });

    //PARA VER PRODUCCION INTELECTUAL
    $(document).on('click','.ver_produccion_intelectual',function(){
        
        //resetea el formulario
        $('#formVerProducIntelectual').trigger('reset');

        var id_prod_intele2 = $(this).val();
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

                        if (obj_json.medioEscrito) {
                            $('#medio2').val(obj_json.medioEscrito);
                        }

                        if (obj_json.medioMultimedia) {
                            $('#medio2').val(obj_json.medioMultimedia);
                        }
                        
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
                  
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarProduccionIntelectual();
              
            }
            
        });
        
    });

    /*ESTUDIOS SUPERIORES*/

    function cambiartitulo_est_supe(titulo3){

        $("#cerrar_modal_estu_supe").text(titulo3)  
    }

    //*************** MODAL AGREGAR NUEVO ESTUDIOS SUPERIORES *************/
    
    listarTipoGrados();

    $('#concluido').click(function(){
        console.log('gggg');
        $('#grado').attr('disabled',false);

    });
    

    $('#no_concluido').click(function(){

        $('#grado').attr('disabled',true).val(1);
        $('#detalle').attr('disabled',true).val('');
        
        $('#fech_consejo').attr('disabled',true).val('');
        
        $('#fech_emision').attr('disabled',true).val('');
        $('#num_reg_titulo').attr('disabled',true).val('');
        $('#EntidadRegist').attr('disabled',true).val('');
        $('#nro_colegiatura').attr('disabled',true).val('');
        $('#nom_colegio').attr('disabled',true).val('');

    });

    $('#egresado').click(function(){

        $('#grado').attr('disabled',true).val(1);
        $('#detalle').attr('disabled',true).val('');
        $('#fech_consejo').attr('disabled',true).val('');
        $('#fech_emision').attr('disabled',true).val('');
        $('#num_reg_titulo').attr('disabled',true).val('');
        $('#EntidadRegist').attr('disabled',true).val('');
        $('#nro_colegiatura').attr('disabled',true).val('');
        $('#nom_colegio').attr('disabled',true).val('');

    });
    
    
    $('#grado').change(function(){
        
        if ($(this).val() == 1) {
            $('#detalle').attr('disabled',true).val('');
            $('#fech_consejo').attr('disabled',true).val('');
            $('#fech_emision').attr('disabled',true).val('');
            $('#num_reg_titulo').attr('disabled',true).val('');
            $('#EntidadRegist').attr('disabled',true).val('');
            $('#nro_colegiatura').attr('disabled',true).val('');
            $('#nom_colegio').attr('disabled',true).val('');
        } else{
            if ($(this).val() == 2) {
                $('#detalle').attr('disabled',false);
                $('#fech_consejo').attr('disabled',false);
                $('#fech_emision').attr('disabled',false);
                $('#num_reg_titulo').attr('disabled',false);
                $('#EntidadRegist').attr('disabled',false);

                $('#nro_colegiatura').attr('disabled',true).val('');
                $('#nom_colegio').attr('disabled',true).val('');
            } else{

                $('#detalle').attr('disabled',false);
                $('#fech_consejo').attr('disabled',false);
                $('#fech_emision').attr('disabled',false);
                $('#num_reg_titulo').attr('disabled',false);
                $('#EntidadRegist').attr('disabled',false);
                $('#nro_colegiatura').attr('disabled',false);
                $('#nom_colegio').attr('disabled',false);

            }
            
        }

    });

    //para el boton de subir pdf idioma
    $('#btn_pdfEstudioSuperior').on('click', function(){
        $('#pdf_estudioSuperior').trigger('click');
    });

    $('#agregar_estudios_superiores').click(function(){
        
        if ($('.msg_errorEstSuperior')) {
			$('.msg_errorEstSuperior').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

        if ($('.msj_exitoIdrEstSuperior')) {
            $('.msj_exitoIdrEstSuperior').css('display','none');
        }

        if ( $('#grado').val() == 1 ) {
            
            $('#detalle').attr('disabled',true);
            $('#fech_consejo').attr('disabled',true);
            $('#fech_emision').attr('disabled',true);
            $('#num_reg_titulo').attr('disabled',true);
            $('#EntidadRegist').attr('disabled',true);
            $('#nro_colegiatura').attr('disabled',true);
            $('#nom_colegio').attr('disabled',true);

        }

        $("#formularioestudiossuperiores").trigger('reset');

        cambiartitulo_est_supe('Estudios Superiores');

        $(".btn_estudios_superiores").html('<span><i class="far fa-save"></i></span> Guardar');
        $(".btn_estudios_superiores").addClass('btn-primary');
        $(".btn_estudios_superiores").removeClass('btn-success');
        $(".btn_estudios_superiores").addClass('guardar3');
        $(".btn_estudios_superiores").removeClass('actualizar3');

    });

    // tabla de estudios superiores
    
    $(".modal-footer").on('click', '.guardar3', function(){

        if ($('.msg_errorEstSuperior')) {
			$('.msg_errorEstSuperior').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

        var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();

        //console.log(dato);  para ver por consola los datos que estas recibiendo
        var ruta = "/ProyEscalafon/public/guardar_estudios_superiores";
        var token = $("#token_est_sup").val();
        
        var formData3 = new FormData();

        formData3.append('miID',myIDpersona);
        formData3.append('nivel_estudio',$("#nivel_estudio").val());
        formData3.append('estado',btn_radio);
        formData3.append('modalidad',$("#modalidad").val());
        formData3.append('centro_estudio_superior',$("#centro_estudio_superior").val());
        formData3.append('grado',$("#grado").val());
        formData3.append('carrera',$("#carrera").val());
        formData3.append('detalle',$("#detalle").val());
        formData3.append('fech_consejo',$("#fech_consejo").val());
        formData3.append('pdf_estudioSuperior',$('input[name=pdf_estudioSuperior]')[0].files[0]);
        formData3.append('fech_emision',$("#fech_emision").val());
        formData3.append('num_reg_titulo',$("#num_reg_titulo").val());
        formData3.append('EntidadRegist',$("#EntidadRegist").val());
        formData3.append('nro_colegiatura',$("#nro_colegiatura").val());
        formData3.append('nom_colegio',$("#nom_colegio").val());

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: formData3, //paso2 se modifica
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){
                
                $('.msj_exitoEstSuperior').html(respuesta.mensaje);
                $('.msj_exitoEstSuperior').css('display','block');

                $("#formularioestudiossuperiores").trigger('reset');

                mostrarEstudiosSuperiores();

            },
            error: function(respuesta){

                $('.msj_exitoEstSuperior').css('display','none');

                $.each(respuesta.responseJSON.errors, function(index, val){
                    
                    $('select[name=' + index + ']').addClass('is-invalid');
					
                    $('select[name=' + index + ']').after(`<span class='msg_errorEstSuperior invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                    $('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorEstSuperior invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                });

            }
                       
        });         

    });

    //PARA ACTUALIZAR EL MODAL DE ESTUDIOS SUPERIORES
        //para mostrar los datos en el modal
    $(document).on('click','.update_estudios_superiores',function(e){

        $('#formularioestudiossuperiores').trigger('reset');

        //si hay mensaje de error
        if ($('.msg_errorEstSuperior')) {
            //entonces elimina la clase del error
			$('.msg_errorEstSuperior').remove();
        }
        
        //si hay input en rojo con error
        if ($('.is-invalid')) {
            //entonces remueve la clase del error
            $('.is-invalid').removeClass('is-invalid');
        }

        //si hay un mensaje de exito
        if ($('.msj_exitoEstSuperior')) {
            //entonces ocultalo
            $('.msj_exitoEstSuperior').css('display','none');
        }

        cambiartitulo_est_supe('Actualizar Estudios Superiores'); //cambiamos el ititulo y creamos una funcion
        $(".btn_estudios_superiores").html('<span><i class="far fa-edit"></i></span>Actualizar'); // vamod al modal del create de otros estudios y creamos el btn_otros estudios

        $(".btn_estudios_superiores").addClass('btn-success');
        $(".btn_estudios_superiores").removeClass('btn-primary');
        $(".btn_estudios_superiores").addClass('actualizar3');
        $(".btn_estudios_superiores").removeClass('guardar3');

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
                        // $('#grado').val(obj_json.tipogrado);

                        if (obj_json.tipogrado == 1) {

                            $('#grado').val(obj_json.tipogrado);

                            $('#detalle').attr('disabled',true);
                            $('#fech_consejo').attr('disabled',true);
                            $('#fech_emision').attr('disabled',true);
                            $('#num_reg_titulo').attr('disabled',true);
                            $('#EntidadRegist').attr('disabled',true);
                            $('#nro_colegiatura').attr('disabled',true);
                            $('#nom_colegio').attr('disabled',true);

                        } else{
                            if (obj_json.tipogrado == 2) {

                                $('#grado').val(obj_json.tipogrado);

                                $('#detalle').attr('disabled',false);
                                $('#fech_consejo').attr('disabled',false);
                                $('#fech_emision').attr('disabled',false);
                                $('#num_reg_titulo').attr('disabled',false);
                                $('#EntidadRegist').attr('disabled',false);
                
                                $('#nro_colegiatura').attr('disabled',true);
                                $('#nom_colegio').attr('disabled',true);
                            } else{
                                
                                $('#grado').val(obj_json.tipogrado);

                                $('#detalle').attr('disabled',false);
                                $('#fech_consejo').attr('disabled',false);
                                $('#fech_emision').attr('disabled',false);
                                $('#num_reg_titulo').attr('disabled',false);
                                $('#EntidadRegist').attr('disabled',false);
                                $('#nro_colegiatura').attr('disabled',false);
                                $('#nom_colegio').attr('disabled',false);
                
                            }
                            
                        }

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
                            $('#grado').attr('disabled',false);
                        } else if (obj_json.tipoestado == 2) {
                            $('#no_concluido').prop('checked',true);
                            $('#grado').attr('disabled',true);
                        } else if (obj_json.tipoestado == 3) {
                            $('#egresado').prop('checked',true);
                            $('#grado').attr('disabled',true);
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

        if ($('.msg_errorEstSuperior')) {
			$('.msg_errorEstSuperior').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

        if ($('.msj_exitoEstSuperior')) {
            $('.msj_exitoEstSuperior').css('display','none');
        }

        var id = $('#id_ESTU_SUPE').val();
        var formulario = $('#form_updateestudiossuperiores');
        var ruta = formulario.attr('action').replace(':ESTUDIO_SUPERIOR_ID',id);
        var token4 = $("#token12").val();
        
        var btn_radio = $("#formularioestudiossuperiores input[name='estado']:checked").val();
        

        var formData3 = new FormData();

        formData3.append('nivel_estudio',$("#nivel_estudio").val());
        formData3.append('estado',btn_radio);
        formData3.append('modalidad',$("#modalidad").val());
        formData3.append('centro_estudio_superior',$("#centro_estudio_superior").val());
        formData3.append('grado',$("#grado").val());
        formData3.append('carrera',$("#carrera").val());
        formData3.append('detalle',$("#detalle").val());
        formData3.append('fech_consejo',$("#fech_consejo").val());
        formData3.append('pdf_estudioSuperior',$('input[name=pdf_estudioSuperior]')[0].files[0]);
        formData3.append('fech_emision',$("#fech_emision").val());
        formData3.append('num_reg_titulo',$("#num_reg_titulo").val());
        formData3.append('EntidadRegist',$("#EntidadRegist").val());
        formData3.append('nro_colegiatura',$("#nro_colegiatura").val());
        formData3.append('nom_colegio',$("#nom_colegio").val());

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token4},
            type: 'post',
            dataType: 'json',
            data: formData3,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){
                
                $('.msj_exitoEstSuperior').html(respuesta.mensaje);
                $('.msj_exitoEstSuperior').css('display','block');
                
                mostrarEstudiosSuperiores();
                
            },
            error: function(respuesta){
				
				$('.msj_exitoEstSuperior').css('display','none');
				
				$.each(respuesta.responseJSON.errors, function(index, val) {
					// console.log(index + ": "+val);
					
					$('select[name=' + index + ']').addClass('is-invalid');
					
                    $('select[name=' + index + ']').after(`<span class='msg_errorEstSuperior invalid-feedback' role='alert'><strong>${val}</strong></span>`);

                    $('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorEstSuperior invalid-feedback' role='alert'><strong>${val}</strong></span>`);
                    
				});
				
            }
            
        });

    });

    //PARA VER ESTUDIOS SUPERIORES
    $(document).on('click','.ver_estudios_superiores',function(){
        
        //resetea el formulario
        $('#formVerEstSuperior').trigger('reset');

        var id_EstudiosSuperiores2 = $(this).val();
        // console.log(id_otro_estudio2 );
        var ruta = "/ProyEscalafon/public/ver_EstudiosSuperiores";
        var token3 = $("#token9").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_EstudiosSuperiores2
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        
                        $('#nivel_estudio2').val(obj_json.tiponivel);
                       
                        if (obj_json.tiposestado == 'CONCLUIDOS') {
                            $('#estado2').val(obj_json.tiposestado);
                            $('#men_gra').show();
                            $('#det_titu').show();
                            $('#f_con').show();
                            $('#f_emi').show();
                            $('#num_reg').show();
                            $('#ent_reg').show();
                            $('#n_coleg').show();
                            $('#nom_col').show();
                        } else{
                            $('#estado2').val(obj_json.tiposestado);
                            $('#men_gra').hide();
                            $('#det_titu').hide();
                            $('#f_con').hide();
                            $('#f_emi').hide();
                            $('#num_reg').hide();
                            $('#ent_reg').hide();
                            $('#n_coleg').hide();
                            $('#nom_col').hide();
                        }

                        $('#modalidad2').val(obj_json.modalidad);
                        $('#centro_estudio2').val(obj_json.centroestudio);
                        $('#grado2').val(obj_json.tipogrado);
                        $('#carrera2').val(obj_json.carrera);
                        $('#detalle2').val(obj_json.detallegrado);
                        $('#fech_consejo2').val(obj_json.fechaconsejo);
                        $('#fech_emision2').val(obj_json.fechaemision);
                        $('#num_reg_titulo2').val(obj_json.numeroregistro);
                        $('#EntidadRegist2').val(obj_json.entidad);
                        $('#nro_colegiatura2').val(obj_json.numerocolegiatura);
                        $('#nom_colegio2').val(obj_json.nombrecolegio);

                    });
                });
            
            }
            
        });
        
    });

    //PARA ELIMINAR estudios superiores

    $(document).on('click','.elim_estudios_superiores',function(){
 
        var id = $(this).val();
        $('#id_modal_eliminar_superiores').val(id);
      
    });

    $('.btn_eliminarEstudioSuperior').click(function(){
        
        var id = $('#id_modal_eliminar_superiores').val();
        var formulario = $('#form_deleteestudiossuperiores');
        var ruta = formulario.attr('action').replace(':ESTUDIO_SUPERIOR_ID',id);
         
        var token3 = $("#token9").val();
        var datos = formulario.serialize();
                           
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarEstudiosSuperiores();
             
            }
            
        });
        
    });
    
});

