$(document).ready(function(){
	updateInm();
	// BORRAR DATOS INPUT
	$('#btnaddInm').on('click',function(e){
		e.preventDefault();
		clearData();
	});
	// AGREGAR INMUEBLE
	$('#formAddInmMod').submit(function(e){
		e.preventDefault();

		if($('input[name="tipoAdd"]:checked').length
			&& $('input[name="opcionAdd"]:checked').length
			&& $('input[name="estratoAdd"]:checked').length
			&& $('#costoAdd').val().length
			&& $('#direccionAdd').val().length
			&& $('#nombreAdd').val().length){

			let datos = [$('input[name="tipoAdd"]:checked').val(),
			$('input[name="opcionAdd"]:checked').val(),
			$('input[name="estratoAdd"]:checked').val(),
			$('#costoAdd').val(),
			$('#direccionAdd').val(),
			$('#areaAdd').val(),
			$('#habitAdd').val(),
			$('#banioAdd').val(),
			$('#parqAdd').val(),
			$('#descrAdd').val(),
			$('#nombreAdd').val(),
			$('#adminAdd').val()];

			$('#preloader').addClass('active');
			$.ajax({
				url: '../../../php/cliente/inmuebles/insert',
				type: 'POST',
				dataType: 'html',
				data: {datos: datos},
			})
			.done(function(response){
				if (response) {
					clearData();
					$('#preloader').removeClass('active');
					$('#addInmuebleModal').modal('hide');
					listarInmuebles();
					alertMessage('success','Agregado Correctamente','Tu inmueble ha sido agregado correctamente y esta a la espera de ser aprovado por nuestro personal.');
				} else {
					$('#preloader').removeClass('active');
					alertMessage('error','Error de registro','Error, tu inmueble no se ha podido guardar, puede deberse a problemas en la conexion o problemas de los datos.');
				}
			})
			.fail(function(response){
				$('#preloader').removeClass('active');
				alertMessage('error','Error','Error de sistema.');
				console.log('Error: ' + response);
				console.log(response);
			});

		} else {
			alertMessage('info','Información Incompleta','Por favor completa la información correctamente.');
		}

		return false;
	});
	// EDITAR INMUEBLE
	$('#formEditInmMod').submit(function(e){
		e.preventDefault();

		if($('input[name="tipoEdit"]:checked').length
			&& $('input[name="opcionEdit"]:checked').length
			&& $('input[name="estratoEdit"]:checked').length
			&& $('#costoEdit').val().length
			&& $('#direccionEdit').val().length
			&& $('#nombreEdit').val().length){

			let datos = [$('input[name="tipoEdit"]:checked').val(),
			$('input[name="opcionEdit"]:checked').val(),
			$('input[name="estratoEdit"]:checked').val(),
			$('#costoEdit').val(),
			$('#direccionEdit').val(),
			$('#areaEdit').val(),
			$('#habitEdit').val(),
			$('#banioEdit').val(),
			$('#parqEdit').val(),
			$('#descrEdit').val(),
			$('#nombreEdit').val(),
			$('#adminEdit').val(),
			$('#confEditInm').attr('data-edit')];

			$('#preloader').addClass('active');
			$.ajax({
				url: '../../../php/cliente/inmuebles/update',
				type: 'POST',
				dataType: 'html',
				data: {datos: datos},
			})
			.done(function(response){
				if (response) {
					$('#preloader').removeClass('active');
					listarInmuebles();
					alertMessage('success','Editado Correctamente','Tu inmueble ha sido editado correctamente.');
				} else {
					$('#preloader').removeClass('active');
					alertMessage('error','Error de registro','Error, tu inmueble no se ha podido guardar, puede deberse a problemas en la conexion o problemas de los datos.');
				}
			})
			.fail(function(response){
				$('#preloader').removeClass('active');
				alertMessage('error','Error','Error de sistema.');
				console.log('Error: ' + response);
				console.log(response);
			});

		} else {
			alertMessage('info','Información Incompleta','Por favor completa la información correctamente.');
		}

		return false;
	});
	// ACTIVAR MODAL UPDATE
	function updateInm(){
		$('.linkModInmb').on('click',function(e){
			e.preventDefault();
			let id = $(this).attr('id');
			clearData();
			$('#preloader').addClass('active');
			$('#editInmuebleModal').modal('show');
			$.ajax({
				url: '../../../php/cliente/inmuebles/select',
				type: 'POST',
				dataType: 'json',
				data: {id: id},
			})
			.done(function(response){
				if(response['respuesta']){
					$('#nombreEdit').val(response['nombre']);
					$('input:radio[name=tipoEdit][value='+response['tipo']+']').prop("checked",true);
					$('input:radio[name=opcionEdit][value='+response['opcion']+']').prop("checked",true);
					$('#costoEdit').val(response['costo']);
					$('input:radio[name=estratoEdit][value='+response['estrato']+']').prop("checked",true);
					$('#direccionEdit').val(response['direccion']);
					$('#areaEdit').val(response['area']);
					$('#habitEdit').val(response['habitaciones']);
					$('#banioEdit').val(response['banios']);
					$('#parqEdit').val(response['parqueaderos']);
					$('#adminEdit').val(response['administracion']);
					$('#descrEdit').val(response['descripcion']);
					$('#confEditInm').attr('data-edit',id);
					$('#preloader').removeClass('active');
					listarInmuebles();
				} else {
					$('#preloader').removeClass('active');
					alertMessage('error','Error','Error al procesar la solicitud.');
					$('#editInmuebleModal').modal('hide');
				}
			})
			.fail(function(response){
				$('#preloader').removeClass('active');
				alertMessage('error','Error','Error de sistema.');
				console.log('---Error---');
				console.log(response);
			});
		});
	}
	// LISTAR INMUEBLES
	function listarInmuebles(){
		$.ajax({
			url: '../../../php/cliente/inmuebles/list',
			type: 'POST',
			dataType: 'html',
			// data: {datos: datos},
		})
		.done(function(response){
			$('#contlistinm').html(response);
			updateInm();
		})
		.fail(function(response){
			$('#preloader').removeClass('active');
			alertMessage('error','Error','Error de sistema.');
			console.log('Error: ' + response);
			console.log(response);
		});
	}
	// CLEAR DATA
	function clearData(){
		$('input[type="text"]').val('');
		$('input[name="tipoAdd"]').prop('checked',false);
		$('input[name="opcionAdd"]').prop('checked',false);
		$('input[name="estratoAdd"]').prop('checked',false);
		$('textarea').val('');
	}
	// ALERTA
	function alertMessage(tipo,titulo,mensaje){
		$('#alertMens').addClass('active');
		$('.iconAlert').addClass('d-none');
		$('#icon'+tipo).removeClass('d-none');
		$('.alerta').attr('class', 'alerta');
		$('.alerta').addClass(tipo);
		$('#tituloAlerta').text(titulo);
		$('#mensajeAlerta').text(mensaje);
		setTimeout(function(){
			$('.alerta').css({
				'transform':'scale(1)'
			});
		},50);
		// CERRAR ALERTA
		$('#closeAlert').on('click', function(){
			$('.alerta').css({
				'transform':'scale(.7)'
			});
			setTimeout(function(){
				$('#alertMens').removeClass('active');
			}, 400);
		});
	}
});