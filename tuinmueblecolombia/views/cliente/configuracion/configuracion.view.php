<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LINK -->
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/Bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/sistema.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/configuracion.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Configuración</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row p-2">
			<div class="col-12 card card-body contentconf">
				<div class="row">
					<div class="col-12 col-md-6 col-xl-4">
						<div class="contimg">
							<img src="<?php echo RUTA; ?>img/img/kitchen-3266752_1920.jpg" alt="">
						</div>
						<h4 class="mt-2">Terminos y Condiciones</h4>
						<small class="terminos">
							Lorem ipsum dolor sit amet consectetur adipisicing, elit. Unde beatae minus ipsam consequatur, impedit nihil, voluptatibus molestias facilis. Nihil labore cum magnam perferendis ipsum atque iure vel consequuntur nemo similique!
						</small>
					</div>
					<div class="col-12 col-md-6 col-xl-8">
						<form action="" method="POST" id="formconfig" class="row">
							<div class="card card-body col-12">
								<div class="row">
									<div class="w-100">
										<h3 class="text-center">Datos</h3>
									</div>
									<!-- NOMBRE -->
									<div class="form-group col-12">
										<label for="nombre">Nombre*</label>
										<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres" value="<?php echo $datosUser[1] ?>">
									</div>
									<!-- APELLIDOS -->
									<div class="form-group col-12">
										<label for="apellido">Apellido*</label>
										<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellidos" value="<?php echo $datosUser[2] ?>">
									</div>
									<!-- IDENTIFICACION -->
									<div class="form-group col-9">
										<label for="identificacion">Identificación*</label>
										<input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Identificación" value="<?php echo $datosUser[0] ?>">
									</div>
									<!-- EDAD -->
									<div class="form-group col-3">
										<label for="edad">Edad*</label>
										<input type="number" class="form-control" name="edad" id="edad" placeholder="Edad" value="<?php echo $datosUser[4] ?>">
									</div>
									<!-- CORREO -->
									<div class="form-group col-12">
										<label for="correo">Correo*</label>
										<input type="emaila" class="form-control" name="correo" id="correo" placeholder="Correo" value="<?php echo $datosUser[3] ?>">
									</div>
									<!-- CLAVE -->
									<div class="form-group col-6">
										<label for="clave">Clave</label>
										<input type="text" class="form-control" name="clave" id="clave" placeholder="Clave">
									</div>
									<!-- CONFIRMAR -->
									<div class="form-group col-6">
										<label for="confirmacion">Clave</label>
										<input type="text" class="form-control" name="confirmacion" id="confirmacion" placeholder="Confirmar">
									</div>
									<!-- SUBMIT -->
									<input type="submit" value="Guardar" class="btn btn-info btn-block" id="savechange">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ALERTA -->
	<div class="contenedor-alerta" id="alertMens">
		<div class="alerta info">
			<div class="titulo-alerta titulo-exterior">
				<h2 id="tituloAlerta">Error</h2>
			</div>
			<div class="mensaje-alerta">
				<i class="fas fa-radiation-alt d-none iconAlert" id="iconerror"></i>
				<i class="fas fa-exclamation-triangle d-none iconAlert" id="iconinfo"></i>
				<i class="fas fa-check-circle d-none iconAlert" id="iconsuccess"></i>

				<p id="mensajeAlerta" class="">Mensaje</p>
			</div>
			<div class="imp-alerta">
				<button class="btn-alerta" id="closeAlert">Cerrar</button>
			</div>
		</div>
	</div>
	<!-- SCRIPTS BOOTSTRAP -->
	<script src="<?php echo RUTA; ?>js/Bootstrap/jquery-3.2.1.min.js"></script>
	<script src="<?php echo RUTA; ?>js/Bootstrap/popper.min.js"></script>
	<script src="<?php echo RUTA; ?>js/Bootstrap/bootstrap.min.js"></script>
	<!-- SCRIPTS -->
	<script src="<?php echo RUTA; ?>js/SI/cliente/configuracion/configuracion.js"></script>
</body>
</html>