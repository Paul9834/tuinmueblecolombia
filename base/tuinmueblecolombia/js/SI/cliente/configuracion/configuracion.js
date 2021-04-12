$(document).ready(function(){
	$('#formconfig').submit(function(e){
		e.preventDefault();
		
		if($('#nombre').val().length 
			&& $('#apellido').val().length 
			&& $('#identificacion').val().length 
			&& $('#edad').val().length
			&& $('#correo').val().length){
			let datos = [$('#nombre').val(), $('#apellido').val(), $('#identificacion').val(), $('#edad').val(), $('#correo').val()];
			
			$.ajax({
				url: '../../../php/cliente/configuracion/editar',
				type: 'POST',
				dataType: 'html',
				data: {datos: datos},
			})
			.done(function(response){
				if (response) {
					alertMessage('success','Exito','Información Editada Correctamente.');
				} else {
					$('#preloader').removeClass('active');
					alertMessage('error','Error','Error de ingreso.');
				}
			})
			.fail(function(response){
				$('#preloader').removeClass('active');
				alertMessage('error','Error','Error de sistema.');
				console.log('Error: ' + response);
			});
		} else {
			alertMessage('info','Información','Por favor complete la información correctamente.');
		}
		return false;
	});

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