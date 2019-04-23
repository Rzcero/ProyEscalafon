$(document).ready(function() {
	
	var select1_legajo = $('#tipo_legajo');
	selectTipoLegajo(select1_legajo);

	var select1_tipoPersonal = $('#tip_personal');
	selectTipoPersonal(select1_tipoPersonal);

	var select1_condLegajo = $('#condicion');
	selectCondicionLegajo(select1_condLegajo);
	
	var select1_tipoDocIdent = $('#tipo_doc');
	selectTipoDocIdentidad(select1_tipoDocIdent);

	//Para llenar el Select de tipo de Legajo
	function selectTipoLegajo(identificador) {
	    $.ajax({
	        
	        url: '/ProyEscalafon/public/listarTipoLegajo',
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
	}//Fin de llenar select

	//Para llenar el Select de tipo de Personal
	function selectTipoPersonal(identificador) {
	    $.ajax({
	        
	        url: '/ProyEscalafon/public/listarTipoPersonal',
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

	//Para llenar el Select de Condicion del legajo
	function selectCondicionLegajo(identificador) {
	    $.ajax({
	        
	        url: '/ProyEscalafon/public/listarCondicionLegajo',
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

	//Para llenar el Select de Condicion
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

	//Para llenar el Select de Grupo ocupacional
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

	//Para llenar el Select de Regimen
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
	            
	            identificador.html(registro);
	            
	        }
	        
	    });
	}
	//Fin de llenar select


	if ($("input[name='busqueda']:checked")) {

		//bloquea el legajo
		$("#tipo_legajo").attr('disabled', true);
		
		//bloquea tipo personal y condicion
		$("#tip_personal").attr('disabled', true);
		$("#condicion").attr('disabled', true);

		//bloque apellidos y nombres
		$("#paterno").val("");
		$("#paterno").attr('disabled', true);
		$("#materno").val("");
		$("#materno").attr('disabled', true);
		$("#nombres").val("");
		$("#nombres").attr('disabled', true);

		//agregar una clase al boton de busqueda
		$(".btn_busqueda").addClass('buscar_docIdentidad');

	}

	$("#busq_tipoLegajo").click(function(e) {
		
		$("#tipo_legajo").attr('disabled', false);
		
		//resetea los select de tipo personal y condicion 
		var selectDoc1 = $('#tip_personal');
		selectDoc1.val($('option:first', selectDoc1).val());	
		$("#tip_personal").attr('disabled', true);

		var selectDoc2 = $('#condicion');
		selectDoc2.val($('option:first', selectDoc2).val());	
		$("#condicion").attr('disabled', true);

		//resetea el select de tipo documento y lo bloquea 
		var selectDoc3 = $('#tipo_doc');
		selectDoc3.val($('option:first', selectDoc3).val());	
		$("#tipo_doc").attr('disabled', true);

		//resetea el numero y lo bloquea
		$("#numero").val("");
		$("#numero").attr('disabled', true);

		//resetea y bloquea los apellidos y nombres
		$("#paterno").val("");
		$("#paterno").attr('disabled', true);
		$("#materno").val("");
		$("#materno").attr('disabled', true);
		$("#nombres").val("");
		$("#nombres").attr('disabled', true);

		//agregar una clase al boton de busqueda
		$(".btn_busqueda").addClass('buscar_tipoLegajo');
		$(".btn_busqueda").removeClass('buscar_personalCondicion');
        $(".btn_busqueda").removeClass('buscar_docIdentidad');
        $(".btn_busqueda").removeClass('buscar_nombresApellidos');

	});
	
	$("#busq_servCond").click(function(e) {

		$("#tip_personal").attr('disabled', false);
		$("#condicion").attr('disabled', false);
		
		//resetea el select de tipo legajo y lo bloquea 
		var selectDoc1 = $('#tipo_legajo');
		selectDoc1.val($('option:first', selectDoc1).val());
		$("#tipo_legajo").attr('disabled', true);
		
		//resetea el select de tipo documento y lo bloquea 
		var selectDoc2 = $('#tipo_doc');
		selectDoc2.val($('option:first', selectDoc2).val());	
		$("#tipo_doc").attr('disabled', true);

		//resetea el numero y lo bloquea
		$("#numero").val("");
		$("#numero").attr('disabled', true);

		//resetea y bloquea los apellidos y nombres
		$("#paterno").val("");
		$("#paterno").attr('disabled', true);
		$("#materno").val("");
		$("#materno").attr('disabled', true);
		$("#nombres").val("");
		$("#nombres").attr('disabled', true);

		//agregar una clase al boton de busqueda
		$(".btn_busqueda").removeClass('buscar_tipoLegajo');
		$(".btn_busqueda").addClass('buscar_personalCondicion');
        $(".btn_busqueda").removeClass('buscar_docIdentidad');
        $(".btn_busqueda").removeClass('buscar_nombresApellidos');

	});


	$("#busq_docIdentidad").click(function() {

		//resetea el select de tipo de legajo y lo bloquea 
		var selectLegajo = $('#tipo_legajo');
		selectLegajo.val($('option:first', selectLegajo).val());
		$("#tipo_legajo").attr('disabled', true);
		
		//resetea los select de tipo personal y condicion 
		var selectDoc1 = $('#tip_personal');
		selectDoc1.val($('option:first', selectDoc1).val());	
		$("#tip_personal").attr('disabled', true);

		var selectDoc2 = $('#condicion');
		selectDoc2.val($('option:first', selectDoc2).val());	
		$("#condicion").attr('disabled', true);

		//habilita el select tipo documento y el campo numero
		$("#tipo_doc").attr('disabled', false);
		$("#numero").attr('disabled', false);

		//bloquea los campos apellidos y nombres
		$("#paterno").val("");
		$("#paterno").attr('disabled', true);
		$("#materno").val("");
		$("#materno").attr('disabled', true);
		$("#nombres").val("");
		$("#nombres").attr('disabled', true);

		//agregar una clase al boton de busqueda
		$(".btn_busqueda").removeClass('buscar_tipoLegajo');
		$(".btn_busqueda").removeClass('buscar_personalCondicion');
		$(".btn_busqueda").addClass('buscar_docIdentidad');
        $(".btn_busqueda").removeClass('buscar_nombresApellidos');

	});

	$("#busq_nombres").click(function() {
		
		//resetea el select de tipo de legajo y lo bloquea 
		var selectLegajo = $('#tipo_legajo');
		selectLegajo.val($('option:first', selectLegajo).val());
		$("#tipo_legajo").attr('disabled', true);

		//resetea los select de tipo personal y condicion 
		var selectDoc1 = $('#tip_personal');
		selectDoc1.val($('option:first', selectDoc1).val());	
		$("#tip_personal").attr('disabled', true);

		var selectDoc2 = $('#condicion');
		selectDoc2.val($('option:first', selectDoc2).val());	
		$("#condicion").attr('disabled', true);

		//resetea el select de tipo documento y lo bloquea 
		var selectDoc = $('#tipo_doc');
		selectDoc.val($('option:first', selectDoc).val());
		$("#tipo_doc").attr('disabled', true);
		
		//resetea el numero y lo bloquea
		$("#numero").val("");
		$("#numero").attr('disabled', true);

		//habilita el apellido paterno, materno y sus nombres
		$("#paterno").attr('disabled', false);
		$("#materno").attr('disabled', false);
		$("#nombres").attr('disabled', false);

		//agregar una clase al boton de busqueda
		$(".btn_busqueda").removeClass('buscar_tipoLegajo');
		$(".btn_busqueda").removeClass('buscar_personalCondicion');
        $(".btn_busqueda").removeClass('buscar_docIdentidad');
        $(".btn_busqueda").addClass('buscar_nombresApellidos');

	});

	//Busqueda por tipo de legajo
	$(".botonera").on('click', '.buscar_tipoLegajo', function(){

        var dato1 = $("#tipo_legajo").val();
        // console.log(dato1);   
        var ruta = "/ProyEscalafon/public/busqtipolegajo";
                
        $.ajax({
            
            url: ruta,
            type: 'GET',
            dataType: 'json',
            data: {
                
                t_legajo: dato1,
                                
            },
            success: function(respuesta){
                                                
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                        				<td>${obj_json.t}</td>
                                        <td>${obj_json.n}</td>
                                        <td>${obj_json.apePaterno}</td>
                                        <td>${obj_json.apeMaterno}</td>
                                        <td>${obj_json.nomb}</td>
                                        <td>${obj_json.tipopersonal}</td>
                                        <td>${obj_json.tipoLegajo}</td>

                                        <td>
                                            <button class='update_idioma btn btn-success' data-toggle="modal" data-target="#modalIdioma" value='${obj_json.id}' title='Modificar'><span><i class="fas fa-pencil-alt"></i></span></button>
                                            <button class='delete_idioma btn btn-danger' data-toggle="modal" data-target="#modalIdioma3" value='${obj_json.id}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                        </td>
                                     </tr>`

                    });
                });
                
                $("#lista_personas").html(registro);  
                
            }
            
        });

    });
	
	//Busqueda por tipo de personal y condicion
	$(".botonera").on('click', '.buscar_personalCondicion', function(){

        var dato1 = $("#tip_personal").val();
        var dato2 = $("#condicion").val();

        var ruta = "/ProyEscalafon/public/busqperscondic";
                
        $.ajax({
            
            url: ruta,
            type: 'GET',
            dataType: 'json',
            data: {
                
                pers: dato1,
                condi: dato2
                                
            },
            success: function(respuesta){
                                                
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                        				<td>${obj_json.t}</td>
                                        <td>${obj_json.n}</td>
                                        <td>${obj_json.apePaterno}</td>
                                        <td>${obj_json.apeMaterno}</td>
                                        <td>${obj_json.nomb}</td>
                                        <td>${obj_json.tipopersonal}</td>
                                        <td>${obj_json.tipoLegajo}</td>

                                        <td>
                                            <button class='update_idioma btn btn-success' data-toggle="modal" data-target="#modalIdioma" value='${obj_json.id}' title='Modificar'><span><i class="fas fa-pencil-alt"></i></span></button>
                                            <button class='delete_idioma btn btn-danger' data-toggle="modal" data-target="#modalIdioma3" value='${obj_json.id}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                        </td>
                                     </tr>`

                    });
                });
                
                $("#lista_personas").html(registro);  
                
            }
            
        });

    });

	//Busqueda por nombres y apellidos
	$(".botonera").on('click', '.buscar_nombresApellidos', function(){

        var dato1 = $("#paterno").val();
        var dato2 = $("#materno").val();
        var dato3 = $('#nombres').val();
        
        var ruta = "/ProyEscalafon/public/busqnombres";
                
        $.ajax({
            
            url: ruta,
            type: 'GET',
            dataType: 'json',
            data: {
                
                paterno: dato1,
                materno: dato2,
                nombres: dato3
                
            },
            success: function(respuesta){
                                                
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                        				<td>${obj_json.t}</td>
                                        <td>${obj_json.n}</td>
                                        <td>${obj_json.apePaterno}</td>
                                        <td>${obj_json.apeMaterno}</td>
                                        <td>${obj_json.nomb}</td>
                                        <td>${obj_json.tipopersonal}</td>
                                        <td>${obj_json.tipoLegajo}</td>

                                        <td>
                                            <button class='update_idioma btn btn-success' data-toggle="modal" data-target="#modalIdioma" value='${obj_json.id}' title='Modificar'><span><i class="fas fa-pencil-alt"></i></span></button>
                                            <button class='delete_idioma btn btn-danger' data-toggle="modal" data-target="#modalIdioma3" value='${obj_json.id}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                        </td>
                                     </tr>`

                    });
                });
                
                $("#lista_personas").html(registro);  
                
            }
            
        });

    });

	//Busqueda por documento de identidad	
    $(".botonera").on('click', '.buscar_docIdentidad', function(){

        var dato1 = $("#tipo_doc").val();
        var dato2 = $("#numero").val();
        
        var ruta = "/ProyEscalafon/public/busqDocIdentidad";
                
        $.ajax({
            
            url: ruta,
            type: 'GET',
            dataType: 'json',
            data: {
                
                docIdentidad: dato1,
                numero: dato2
                             
            },
            success: function(respuesta){
                                                
                let registro = '';

                respuesta.forEach(obj_json =>{
                    obj_json.forEach(obj_json =>{
                        registro += `<tr>
                        				<td>${obj_json.t}</td>
                                        <td>${obj_json.n}</td>
                                        <td>${obj_json.apePaterno}</td>
                                        <td>${obj_json.apeMaterno}</td>
                                        <td>${obj_json.nomb}</td>
                                        <td>${obj_json.tipopersonal}</td>
                                        <td>${obj_json.tipoLegajo}</td>

                                        <td>
                                            <button class='update_idioma btn btn-success' data-toggle="modal" data-target="#modalIdioma" value='${obj_json.id}' title='Modificar'><span><i class="fas fa-pencil-alt"></i></span></button>
                                            <button class='delete_idioma btn btn-danger' data-toggle="modal" data-target="#modalIdioma3" value='${obj_json.id}' title='Eliminar'><span><i class="fas fa-trash-alt"></i></span></button>
                                        </td>
                                     </tr>`

                    });
                });
                
                $("#lista_personas").html(registro);  
                
            }
            
        });

    });

    //LLena los select del modal para crear nuevo personal

    var select2_legajo = $('#t_legajo');
	selectTipoLegajo(select2_legajo);

	var select2_tipoPersonal = $('#t_personal');
	selectTipoPersonal(select2_tipoPersonal);

	var select2_tipoDocIdent = $('#t_docIdent');
	selectTipoDocIdentidad(select2_tipoDocIdent);

	$('#doc_cate').hide();
	$('#doc_reg').hide();

	var selec_grupo2 = $('#selec_grupo');
	var selec_condi2 = $('#selec_condi');
	selectGrupo(selec_grupo2);
	selectCondicion(selec_condi2);

	var selec_categoria2 = $('#selec_categ');
	var selec_regimen2 = $('#r_laboral');

	$('#t_personal').change(function() {
		
		if ($(this).val() == 1) {

			$('#adm_grupo').show();
			$('#adm_condi').show();
			$('#doc_cate').hide();
			$('#doc_reg').hide();
		
		} else {

			$('#adm_grupo').hide();
			$('#adm_condi').hide();
			$('#doc_cate').show();
			$('#doc_reg').show();
			
			selectCategoria(selec_categoria2);
			selectRegimen(selec_regimen2);
			
		}

	});

	
	$("#formularioModalPersona").submit(function(e){
		
		if ($('.msg_error')) {
			$('.msg_error').remove();
		}
		$('.is-invalid').removeClass('is-invalid');

		e.preventDefault();
		
		var nombreForm = $(this).attr('id');
		var ruta = "/ProyEscalafon/public/administracionLegajo";
		// console.log($('input[name=foto_trabajador]'));

		var formData = new FormData();
		
		formData.append('t_legajo',$('#t_legajo').val());
		formData.append('t_personal',$('#t_personal').val());
        formData.append('t_docIdent',$('#t_docIdent').val());
        formData.append('n_doc',$('#n_doc').val());
        formData.append('foto_trabajador',$('input[name=foto_trabajador]')[0].files[0]);
        formData.append('ape_pat',$('#ape_pat').val());
        formData.append('ape_mat',$('#ape_mat').val());
        formData.append('nomb',$('#nomb').val());
		
		if ($('#t_personal').val() == 1) {
			formData.append('selec_grupo',$('#selec_grupo').val());
        	formData.append('selec_condi',$('#selec_condi').val());
		} else {
			formData.append('selec_categ',$('#selec_categ').val());
        	formData.append('r_laboral',$('#r_laboral').val());
		}

        // console.log($("#" + nombreForm + "")[0]);
        var token = $("#token").val();
        
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

				$('.msj_exito').html(respuesta.mensaje);
				$('.msj_exito').css('display','block');

				if ($('.msg_error')) {
					$('.msg_error').remove();
				}

				$('.is-invalid').removeClass('is-invalid');

				$('#formularioModalPersona').trigger('reset');

            },
            error: function(respuesta){
				
				$('.msj_exito').css('display','none');
				
				$.each(respuesta.responseJSON.errors, function(index, val) {
					// console.log(index + ": "+val);
					
					$('input[name=' + index + ']').addClass('is-invalid');
					
					$('input[name=' + index + ']').after(`<span class='msg_error invalid-feedback' role='alert'><strong>${val}</strong></span>`);
				});
				
            }
        });         
    
    });

	$('#image_input').on('click', function(){
        $('#foto_trabajador').trigger('click');
    });
		

});

