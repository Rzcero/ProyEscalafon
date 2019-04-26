// JavaScript Document

$(document).ready(function(){
    
    var myIDpersona = $('#myID').val();
    mostrarIdiomas();
    mostrarHabientes();
    
    $('#pdf_identidad').on('click', function(){
        $('#pdf_doc_ident').trigger('click');
    });

    $('#pdf_partida').on('click', function(){
        $('#pdf_partidaNac').trigger('click');
    });

    $('#up_foto').on('click', function(){
        $('#foto_persona').trigger('click');
    });

    //Para llenar los select de ubigeo
    	
    // $.ajax({
        
    //     url: '/ProyEscalafon/public/listarDepartamentoUbigeo',
    //     type: 'GET',
    //     success: function(respuesta){
                                
    //         let registro = '';
            
    //         respuesta.forEach(obj_json =>{
    //             obj_json.forEach(obj_json => {

    //                 registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

    //             });
    //         });
            
    //         $("#depart").html(registro);
            
    //     }
        
    // });

    $("#nacionalidad").change(function(){

        var id = $(this).val();

        if (id == 1) {
            $("#dpto").attr('disabled',false);
            $("#provinc").attr('disabled',false);
            $("#distri").attr('disabled',false);

            $("#dpto").val("");
            $("#provinc").val("");
            $("#distri").val("");

        } else{
            $("#dpto").attr('disabled',true);
            $("#provinc").attr('disabled',true);
            $("#distri").attr('disabled',true); 

            $("#dpto").val("");
            $("#provinc").val("");
            $("#distri").val("");
        }

    });
    
    $("#dpto").change(function(){
        
        var id = $(this).val();
        
        if (!id) {
            $("#provinc").html('<option value=""></option>');
            $("#distri").html('<option value=""></option>');
            return; //para q no haga la peticion en vano cuando eliga la primera opcion
        }

        var ruta = "/ProyEscalafon/public/listarProvinciaUbigeo";
        
        $.ajax({
            
            url: ruta,
        
            type: 'GET',
            dataType: 'json',
            data: {
                    idDpto: id
                  },
            success: function(respuesta){

                let registro = '<option value=""></option>';
                // var ubigeoDpto = '';
            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`
                        // ubigeoDpto = `${obj_json.ubi}`
                        
                    });
                });

                $("#provinc").html(registro);
                $("#distri").html('<option value=""></option>');
                // $("#codigo").attr("value",ubigeoDpto);
               
            }
            
        });
        
    });
    
    $("#provinc").change(function(){
        
        var dato = $(this).val();
        
        if (!dato) {
            $("#distri").html('<option value=""></option>'); 
        }
        
        var ruta = "/ProyEscalafon/public/listarDistritoUbigeo";
        
        $.ajax({
            
            url: ruta,
        
            type: 'GET',
            dataType: 'json',
            data: {
                    idProv: dato
                  },
            success: function(respuesta){
                                   
                let registro = '<option value=""></option>';
                // var ubigeoDpto = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`
                        // ubigeoProv = `${obj_json.ubi}`

                    });
                });

                $("#distri").html(registro);
                // $("#codigo").attr("value",ubigeoProv);
            
            }
            
        });
        
    });

    //**************** **************************/
    //Para llenar el Select de Grupo ocupacional del administrativo
	function selectGrupo(identificador) {
	    $.ajax({
	        
	        url: '/ProyEscalafon/public/listarGrupo',
	        type: 'GET',
	        success: function(respuesta){
	                                  
	            let registro = '';
	            
	            respuesta.forEach(obj_json =>{
	                obj_json.forEach(obj_json => {

	                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

	                });
	            });
	            
	            identificador.html(registro);
	            
	        }
	        
	    });	
    }//Fin de llenar select
    
    //Para llenar el Select de Condicion del admnistrativo
	function selectCondicion(identificador) {
	    $.ajax({
	        
	        url: '/ProyEscalafon/public/listarCondicion',
	        type: 'GET',
	        success: function(respuesta){
	                                  
	            let registro = '';
	            
	            respuesta.forEach(obj_json =>{
	                obj_json.forEach(obj_json => {

	                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

	                });
	            });
	            
	            identificador.html(registro);
	            
	        }
	        
	    });	
	}//Fin de llenar select
	
    //Para llenar el Select de categoria del docente
	function selectCategoria(identificador) {
	    $.ajax({
	        
	        url: '/ProyEscalafon/public/listarCategoria',
	        type: 'GET',
	        success: function(respuesta){
	                                  
	            let registro = '';
	            
	            respuesta.forEach(obj_json =>{
	                obj_json.forEach(obj_json => {

	                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

	                });
	            });
	            
	            identificador.html(registro);
	            
	        }
	        
	    });	
	}//Fin de llenar select

	//Para llenar el Select de Regimen del docente
	function selectRegimen(identificador){
	    $.ajax({
	        
	        url: '/ProyEscalafon/public/listarRegimen',
	        type: 'GET',
	        success: function(respuesta){
	                                  
	            let registro = '';
	            
	            respuesta.forEach(obj_json =>{
	                obj_json.forEach(obj_json => {

	                    registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

	                });
	            });
	            
	            identificador.html(registro);
	            
	        }
	        
	    });
	}
	//Fin de llenar select

        
    $('#t_personal').change(function() {
		var s1 = $('#selec1');
        var s2 = $('#selec2');

		if ($(this).val() == 2) {
            
            $('#adm1 .card-header').text('G. Ocupacional');
            $('#adm2 .card-header').text('Condición');

            selectGrupo(s1);
            selectCondicion(s2)
						
		} else {

            if ($(this).val() == 3) {

                $('#adm1 .card-header').text('Categoria');
                $('#adm2 .card-header').text('Regimen');
                
                selectCategoria(s1);
                selectRegimen(s2);
            }
            
		}

	});
            
    //Para actualizar a un personal
    // $("#formulario1").submit(function(e){
		
	// 	// if ($('.msg_error')) {
	// 	// 	$('.msg_error').remove();
	// 	// }
	// 	// $('.is-invalid').removeClass('is-invalid');

	// 	e.preventDefault();
		
	// 	var nombreForm = $(this).attr('id');
    //     var ruta = "/ProyEscalafon/public/updatePersona";
    //     var btn_radio = $("#formularioModal1 input[name='genero']:checked").val();
	// 	var formData = new FormData();
		
	// 	formData.append('tipoDocIdentidad',$('#tipoDocIdentidad').val());
	// 	formData.append('num_docIdentidad',$('#num_docIdentidad').val());
    //     formData.append('apellidoPaterno',$('#apellidoPaterno').val());
    //     formData.append('apellidoMaterno',$('#apellidoMaterno').val());
    //     formData.append('nomb',$('#nomb').val());
    //     formData.append('genero',btn_radio);
    //     formData.append('fech_nac',$('#fech_nac').val());
    //     formData.append('est_civil',$('#est_civil').val());
    //     formData.append('via',$('#via').val());
    //     formData.append('zona',$('#zona').val());
		
	// 	if ($('#t_personal').val() == 1) {
	// 		formData.append('selec_grupo',$('#selec_grupo').val());
    //     	formData.append('selec_condi',$('#selec_condi').val());
	// 	} else {
	// 		formData.append('selec_categ',$('#selec_categ').val());
    //     	formData.append('r_laboral',$('#r_laboral').val());
	// 	}

    //     console.log($("#" + nombreForm + "")[0]);
    //     var token = $("#token").val();
        
    //     $.ajax({
            
    //         url: ruta,
    //         headers: {'X-CSRF-TOKEN': token},
    //         type: 'POST',
    //         dataType: 'json',
    //         data: formData,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function(respuesta){

	// 			$('.msj_exito').html(respuesta.mensaje);
	// 			$('.msj_exito').css('display','block');

	// 			if ($('.msg_error')) {
	// 				$('.msg_error').remove();
	// 			}

	// 			$('.is-invalid').removeClass('is-invalid');

	// 			$('#formularioModalPersona').trigger('reset');

    //         },
    //         error: function(respuesta){
				
	// 			$('.msj_exito').css('display','none');
				
	// 			$.each(respuesta.responseJSON.errors, function(index, val) {
	// 				console.log(index + ": "+val);
					
	// 				$('input[name=' + index + ']').addClass('is-invalid');
					
	// 				$('input[name=' + index + ']').after(`<span class='msg_error invalid-feedback' role='alert'>
	// 														<strong>${val}</strong></span>`);
	// 			});
				
    //         }
    //     });         
    
    // });

    // $("#formulario1").submit(function(e){
        
    //     var dato = $("#tipoDocIdentidad").val();
    //     var dato2 = $("#num_docIdentidad").val();
    //     var dato3 = $("#apellidoPaterno").val();
    //     var dato4 = $("#apellidoMaterno").val();
    //     var dato5 = $("#nomb").val();
    //     var dato7 = $("#fech_nac").val();
    //     var dato8 = $("#est_civil").val();
    //     var dato9 = $("#via").val();
    //     var dato10 = $("#zona").val();
    //     var dato11 = $("#direc").val();
            
    //     var route = "/ProyEscalafon/public/datos";
    //     var token = $("#token").val();
        
    //     $.ajax({
            
    //         url: route,
    //         headers: {'X-CSRF-TOKEN': token},
    //         type: 'POST',
    //         dataType: 'json',
    //         data: {
    //             tipoDocIdent: dato,
    //             numDocIdent: dato2,
    //             apellPaterno: dato3,
    //             apellMaterno: dato4,
    //             nombres: dato5,
    //             sexo: dato6,
    //             fecha: dato7,
    //             estadoCivil: dato8,
    //             via: dato9,
    //             zona: dato10,
    //             direccion: dato11
    //         }
            
    //     });         
        
    //     e.preventDefault();
    
    // });
    
    //Para llenar el Select de tipo de Documento de Identidad
    
    function selectTipoDocIdentidad(identificador){
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
                
                identificador.append(registro);
                
            }
            
        });
    }

    //Para llenar el Select de Parentesco
    
    function selectParentesco(identificador){
        $.ajax({
            
            url: '/ProyEscalafon/public/listarParentesco',
            type: 'GET',
            success: function(respuesta){
                                    
                let registro = '';
                
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json => {

                        registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

                    });
                });
                
                identificador.append(registro);
                
            }
            
        });
    }
    
   //Para llenar el Select de Estado Civil
    // $.ajax({
        
    //     url: '/ProyEscalafon/public/listarEstadoCivil',
    //     type: 'GET',
    //     success: function(respuesta){
                                 
    //         let registro = "";
            
    //         respuesta.forEach(obj_json =>{
    //             obj_json.forEach(obj_json => {

    //                 registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

    //             });
    //         });
            
    //         $("#est_civil").append(registro);
            
    //     }
        
    // });
    
    //Para llenar el Select de Tipo de Via
    // $.ajax({
        
    //     url: '/ProyEscalafon/public/listarTipoVia',
    //     type: 'GET',
    //     success: function(respuesta){
                                  
    //         let registro = '';
            
    //         respuesta.forEach(obj_json =>{
    //             obj_json.forEach(obj_json => {

    //                 registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

    //             });
    //         });
            
    //         $("#via").append(registro);
            
    //     }
        
    // });
    
    // //Para llenar el Select de Tipo de Zona
    // $.ajax({
        
    //     url: '/ProyEscalafon/public/listarTipoZona',
    //     type: 'GET',
    //     success: function(respuesta){
                                 
    //         let registro = '';
            
    //         respuesta.forEach(obj_json =>{
    //             obj_json.forEach(obj_json => {

    //                 registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

    //             });
    //         });
            
    //         $("#zona").append(registro);
            
    //     }
        
    // });

    //Para llenar el Select de Nacionalidad
    // $.ajax({
        
    //     url: '/ProyEscalafon/public/listarNacionalidad',
    //     type: 'GET',
    //     success: function(respuesta){
                                 
    //         let registro = '';
            
    //         respuesta.forEach(obj_json =>{
    //             obj_json.forEach(obj_json => {

    //                 registro += `<option value='${obj_json.id}'>${obj_json.nombre}</option>`

    //             });
    //         });
            
    //         $("#nacionalidad").append(registro);
            
    //     }
        
    // });
    
    
    //para mostrar idiomas
    function mostrarIdiomas(){
            
        var ruta = "/ProyEscalafon/public/listarIdiomas";
            
        $.ajax({

            url: ruta,
            type: 'get',
            dataType: 'json',
            data: {

                id: myIDpersona
                
            },
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
    function selectTipoDocumento(identificador){    
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
                
                identificador.append(registro);
                                
            }
            
        });
    }
    
    function cambiarTitulo(titulo){

        $('#exampleModalLabelIdioma').text(titulo);

    }

    var tipo_doc = $("#tipo_doc");
    selectTipoDocumento(tipo_doc);

    //*************** MODAL AGREGAR NUEVO IDIOMA *************/

    //para el boton de subir pdf idioma
    $('#btn_pdfIdioma').on('click', function(){
        $('#pdf_Idioma').trigger('click');
    });
    
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
       
        var btn_radio = $("#formularioModal1 input[name='dominio']:checked").val();
        
        var ruta = "/ProyEscalafon/public/agregarIdioma";
        var token2 = $("#token2").val();
        
        var formData = new FormData();

        formData.append('miID',myIDpersona);
        formData.append('tipo_idioma',$("#tipo_idioma").val());
        formData.append('dominio',btn_radio);
        formData.append('centroEstudio',$("#centroEstudio").val());
        formData.append('tipo_doc',$('#tipo_doc').val());
        formData.append('pdf_Idioma',$('input[name=pdf_Idioma]')[0].files[0]);
        formData.append('horas',$('#horas').val());
        formData.append('creditos',$('#creditos').val());

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token2},
            type: 'POST',
            dataType: 'json',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){
                                                
                mostrarIdiomas();
                                                
                $("#formularioModal1").trigger('reset');
                
            }
            
        });

    });
    
    //PARA ACTUALIZAR EL MODAL IDIOMA
        //para mostrar los datos en el modal
    $(document).on('click','.update_idioma',function(e){

        $('#formularioModal1').trigger('reset');

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
        console.log(datos);
                        
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarIdiomas();
                
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
            data:{
                id: myIDpersona
            },
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
                                            <button class='ver_parentesco btn btn-warning' data-toggle="modal" data-target="#modalHabiente2" value='${obj_json.id}' title='Ver'><span><i class="fas fa-eye"></i></span></button>

                                            <button class='update_parentesco btn btn-success' data-toggle="modal" data-target="#modalHabiente" value='${obj_json.id}' title='Editar'><span><i class="fas fa-pencil-alt"></i></span></button>
                                            
                                            <button class='delete_parentesco btn btn-danger' data-toggle="modal" data-target="#modalHabiente3" value='${obj_json.id}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                        </td>
                                     </tr>`

                    });
                });

                $("#otros_habientes").html(registro);  
            
            }

        });
    }
    
    function cambiarTituloHabiente(titulo){

        $('#exampleModalLabelNuevoHabiente').text(titulo);

    }

    var tipoDocIdent = $("#tipoDocIdent");
    var parentesco = $("#parentesco");
    //carga los select del modal habiente
    selectTipoDocIdentidad(tipoDocIdent);
    selectParentesco(parentesco);
    
    $('#btn_partidaHabiente').on('click', function(){
        $('#pdf_partidaNacHab').trigger('click');
    });

    $('#btn_docIdent').on('click', function(){
        $('#pdf_docIdentHab').trigger('click');
    });

    //************** MODAL AGREGAR NUEVO HABIENTE ***********/
    //para ocultar el campo numero dependiendo del lo que selecciones en el
    //select de tipo doc de identidad
    $('#tipoDocIdent').change(function(){
        
        var dato = $(this).val();
                
        if (dato != 1 ) {
            $('#numero').attr('disabled',false).val('');
        } else{
            $('#numero').attr('disabled',true).val('');
        }

        //elimina mensajes de error
        if ($('.msg_errorHab')) {
			$('.msg_errorHab').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }

    });

    $('#agregarNuevoHabiente').click(function(){

       $('#numero').attr('disabled',true); 

        if ($('.msg_errorHab')) {
			$('.msg_errorHab').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }
        
        if ($('.msj_exitoHabiente')) {
            $('.msj_exitoHabiente').css('display','none');
        }
           
        $("#formularioModal2").trigger('reset');

        cambiarTituloHabiente('Agregar Derecho Habientes');

        $(".btn_habiente").html('<span><i class="far fa-save"></i></span> Guardar');
        $(".btn_habiente").addClass('btn-primary');
        $(".btn_habiente").removeClass('btn-success');
        $(".btn_habiente").addClass('guardar2');
        $(".btn_habiente").removeClass('actualizar2');
        
    });
    
    $(".modal-footer").on('click', '.guardar2', function(){
       
        if ($('.msg_errorHab')) {
			$('.msg_errorHab').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }
                
        var btn_radio = $("#formularioModal2 input[name='generoHab']:checked").val();
        //var nombreForm = $(this).attr('id');
		var ruta = "/ProyEscalafon/public/agregarHabiente";
		// console.log($('input[name=foto_trabajador]'));
        var token = $("#token").val();

        var formData = new FormData();
        
        formData.append('miID',myIDpersona);
        formData.append('parentesco',$('#parentesco').val());
        formData.append('n_partida',$('#n_partida').val());
        formData.append('fech_emision',$('#fech_emision').val());
        formData.append('pdf_partidaNacHab',$('input[name=pdf_partidaNacHab]')[0].files[0]);
        formData.append('expedida',$('#expedida').val());
        formData.append('tipoDocIdent',$('#tipoDocIdent').val());

        if ($('#tipoDocIdent').val() != 1) {
            if ($('#numero').val() && $('#tipoDocIdent').val()) {
                formData.append('numero',$('#numero').val()); 
            }
        } else{
            formData.append('numero',$('#numero').val('')); //se pasa el valor vacio
        }

        // formData.append('numero',$('#numero').val());
        formData.append('pdf_docIdentHab',$('input[name=pdf_docIdentHab]')[0].files[0]);
        formData.append('ape_pater',$('#ape_pater').val());
        formData.append('ape_mater',$('#ape_mater').val());
        formData.append('nombres',$('#nombres').val());
        formData.append('fech_naci',$('#fech_naci').val());

        if (btn_radio) {
            formData.append('generoHab',btn_radio);
        }

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){

				$('.msj_exitoHabiente').html(respuesta.mensaje);
				$('.msj_exitoHabiente').css('display','block');

                $('#formularioModal2').trigger('reset');
                $('#numero').attr('disabled',true); 
                mostrarHabientes();
            },
            error: function(respuesta){
				
				$('.msj_exitoHabiente').css('display','none');
				
				$.each(respuesta.responseJSON.errors, function(index, val) {
					// console.log(index + ": "+val);
					
					$('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorHab invalid-feedback' role='alert'><strong>${val}</strong></span>`);
                    
				});
				
            }
        });

    });

    //PARA ACTUALIZAR EL MODAL HABIENTES
    //para mostrar los datos en el modal
    $(document).on('click','.update_parentesco',function(e){
       
        //resetea el formulario
        $('#formularioModal2').trigger('reset');

        //si hay mensaje de error
        if ($('.msg_errorHab')) {
            //entonces elimina la clase del error
			$('.msg_errorHab').remove();
        }
        
        //si hay input en rojo con error
        if ($('.is-invalid')) {
            //entonces remueve la clase del error
            $('.is-invalid').removeClass('is-invalid');
        }

        //si hay un mensaje de exito
        if ($('.msj_exitoHabiente')) {
            //entonces ocultalo
            $('.msj_exitoHabiente').css('display','none');
        }

        cambiarTituloHabiente('Actualizar Derecho Habientes');

        $(".btn_habiente").html('<span><i class="far fa-edit"></i></span>Actualizar');

        $(".btn_habiente").addClass('btn-success');
        $(".btn_habiente").removeClass('btn-primary');
        $(".btn_habiente").addClass('actualizar2');
        $(".btn_habiente").removeClass('guardar2');

        var id_Habiente = $(this).val();
        var ruta = "/ProyEscalafon/public/editarHabiente";
        var token = $("#token").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_Habiente
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                                                
                        $('#id_habiente').val(obj_json.id);
                        $('#parentesco').val(obj_json.parentesco);
                        $('#n_partida').val(obj_json.nroPartNac);
                        $('#fech_emision').val(obj_json.fechEmision);
                        $('#expedida').val(obj_json.expedida); 
                        $('#tipoDocIdent').val(obj_json.idTipoDoc);

                        var idTipoDoc = obj_json.idTipoDoc;
                        console.log(obj_json.idTipoDoc);
                        
                        if (idTipoDoc != 1 ) {
                            $('#numero').attr('disabled',false);
                        } else{
                            $('#numero').attr('disabled',true).val('');
                        }

                        $('#numero').val(obj_json.numDoc);
                        $('#ape_pater').val(obj_json.apellidoPaterno);
                        $('#ape_mater').val(obj_json.apellidoMaterno);
                        $('#nombres').val(obj_json.nombres);
                        $('#fech_naci').val(obj_json.fechaNacim); 
                        
                        if (obj_json.sexo) {
                            if (obj_json.sexo == 'masculino') {
                                $('#mascHab').prop('checked',true);
                            } else {
                                if (obj_json.sexo == 'femenino') {
                                    $('#femHab').prop('checked',true);
                                }
                            }
                        }
                        
                    });
                });
            
            }
            
        });
                
    });

    //Para actualizar los datos de Habientes
    $(".modal-footer").on('click', '.actualizar2', function(){

        if ($('.msg_errorHab')) {
			$('.msg_errorHab').remove();
        }
        
        if ($('.is-invalid')) {
            $('.is-invalid').removeClass('is-invalid');
        }
        
        if ($('.msj_exitoHabiente')) {
            $('.msj_exitoHabiente').css('display','none');
        }

        var id = $('#id_habiente').val();
        var formulario = $('#form_updateHabiente');
        var ruta = formulario.attr('action').replace(':HABIENTE_ID',id);
        var datos = formulario.serialize();
        var token = $("#token").val();
        
        var btn_radio = $("#formularioModal2 input[name='generoHab']:checked").val();
        
        var formData2 = new FormData();
        var d1 = $('#parentesco').val();
        console.log(d1);
        var d2 = $('#n_partida').val();
        console.log(d2);
        // formData2.append('id',$('#id_habiente').val());
        formData2.append('parentesco',$('#parentesco').val());
        formData2.append('n_partida',$('#n_partida').val());
        formData2.append('fech_emision',$('#fech_emision').val());
        formData2.append('pdf_partidaNacHab',$('input[name=pdf_partidaNacHab]')[0].files[0]);
        formData2.append('expedida',$('#expedida').val());
        formData2.append('tipoDocIdent',$('#tipoDocIdent').val());
        formData2.append('numero',$('#numero').val());
        formData2.append('pdf_docIdentHab',$('input[name=pdf_docIdentHab]')[0].files[0]);
        formData2.append('ape_pater',$('#ape_pater').val());
        formData2.append('ape_mater',$('#ape_mater').val());
        formData2.append('nombres',$('#nombres').val());
        formData2.append('fech_naci',$('#fech_naci').val());

        if (btn_radio) {
            formData2.append('generoHab',btn_radio);
        }
        console.log(formData2);

        $.ajax({
                      
            url: ruta,
            headers: {'X-CSRF-TOKEN': token},
            type: 'post',
            dataType: 'json',
            data: formData2,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){
                 
                $('.msj_exitoHabiente').html(respuesta.mensaje);
				$('.msj_exitoHabiente').css('display','block');
               
                mostrarHabientes();
                
            },
            error: function(respuesta){
				
				$('.msj_exitoHabiente').css('display','none');
				
				$.each(respuesta.responseJSON.errors, function(index, val) {
					// console.log(index + ": "+val);
					
					$('input[name=' + index + ']').addClass('is-invalid');
					
                    $('input[name=' + index + ']').after(`<span class='msg_errorHab invalid-feedback' role='alert'><strong>${val}</strong></span>`);
                    
				});
				
            }
            
        });

    });

    //PARA VER UN HABIENTE
    $(document).on('click','.ver_parentesco',function(){
        
        //resetea el formulario
        $('#formVerHabiente').trigger('reset');

        var id_Habiente = $(this).val();
        var ruta = "/ProyEscalafon/public/verHabiente";
        var token3 = $("#token3").val();

        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: {
                id: id_Habiente
            },
            success: function(respuesta){
                            
                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        
                        $('#parentescoM2').val(obj_json.parentesco);
                        $('#partNacM2').val(obj_json.nroPartNac);
                        $('#fechEmisionM2').val(obj_json.fechEmi);
                        $('#expedidaM2').val(obj_json.expedida);
                        $('#docIdentM2').val(obj_json.docIdent); 
                        $('#nroDocIdentM2').val(obj_json.nroDocIdent);
                        $('#apeParernoM2').val(obj_json.apePater);
                        $('#apeMaternoM2').val(obj_json.apeMater);
                        $('#nombresM2').val(obj_json.nomb);
                        $('#fechNacimientoM2').val(obj_json.fechNac); 
                        $('#sexoM2').val(obj_json.sexo);
                                                
                    });
                });
            
            }
            
        });
        
    });

    //PARA ELIMINAR UN HABIENTE

    $(document).on('click','.delete_parentesco',function(){
 
        var id = $(this).val();
        $('#id_modalDelete').val(id);
        
    });

    $('.btn_eliminarHabiente').click(function(){
        
        var id = $('#id_modalDelete').val();
        var formulario = $('#form_deleteHabiente');
        var ruta = formulario.attr('action').replace(':HABIENTE_ID',id);
        
        var token3 = $("#token3").val();
        var datos = formulario.serialize();
                                
        $.ajax({
            
            url: ruta,
            headers: {'X-CSRF-TOKEN': token3},
            type: 'POST',
            dateType: 'json',
            data: datos,
            success: function(respuesta){
                                    
                mostrarHabientes();
                
            }
            
        });
        
    });


});
