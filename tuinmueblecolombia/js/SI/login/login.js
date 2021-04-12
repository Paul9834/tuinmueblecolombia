window.onload = function(){
	$('#preloader').removeClass('active');
}
$(document).ready(function(){
	// INGRESO
	$('#form').submit(function(e){
		e.preventDefault();
		if($('#username').val().length && $('#password').val().length){
			$('#preloader').addClass('active');
			let datos = [$('#username').val(), $('#password').val()];
			$.ajax({
				url: '../../php/login/login',
				type: 'POST',
				dataType: 'html',
				data: {datos: datos},
			})
			.done(function(response){
				if (response) {
					window.location.href = '../../config/direccion';
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
			alertMessage('info','Datos','Por favor complete los datos correctamente.');
		}

		return false;
	});
	// REGISTRO
	$('#regUserLink').on('click', function(e){
		e.preventDefault();
		$('#registrouser').addClass('active');
	});
	$('#clsmodalreg').on('click', function(e){
		e.preventDefault();
		$('#registrouser').removeClass('active');
	});
	// FORM
	$('#formreguser').submit(function(e){
		e.preventDefault();

		if($('#correoreg').val().length
			&& $('#nombrereg').val().length
			&& $('#apellidoreg').val().length
			&& $('#identificreg').val().length
			&& $('#edadreg').val().length
			&& $('#passwordreg').val().length
			&& $('#passwordconfreg').val().length){
			
			if ($('#passwordreg').val() === $('#passwordconfreg').val()) {

				$('#preloader').addClass('active');
				let datos = [$('#correoreg').val(),
					$('#nombrereg').val(),
					$('#apellidoreg').val(),
					$('#identificreg').val(),
					$('#edadreg').val(),
					$('#passwordreg').val()];
				$.ajax({
					url: '../../php/login/registro',
					type: 'POST',
					dataType: 'html',
					data: {datos: datos},
				})
				.done(function(response){
					if (response) {
						window.location.href = '../../config/direccion';
					} else {
						$('#preloader').removeClass('active');
						alertMessage('error','Error','El registro no pudo ser completado correctamente.');
					}
				})
				.fail(function(response){
					$('#preloader').removeClass('active');
					alertMessage('error','Error','Error de sistema.');
					console.log('Error: ' + response);
				});

			} else {
				alertMessage('info','Clave Incorrecta', 'Las claves no coinciden, por favor verifique la información.');
			}


		} else {
			alertMessage('info','Datos Incompletos', 'Por favor completa todos los datos.');
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