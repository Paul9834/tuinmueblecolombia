<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LINK -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/sistema.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/login/login.css">
	<title>Login</title>
</head>
<body>
	<!-- LOADER -->
	<div class="preloader active" id="preloader">
		<div class="loader">
			<div class="lineLoad bar1"></div>
			<div class="lineLoad bar2"></div>
			<div class="lineLoad bar3"></div>
			<div class="lineLoad bar4"></div>
			<div class="lineLoad bar5"></div>
			<div class="lineLoad bar6"></div>
			<div class="lineLoad bar7"></div>
			<div class="lineLoad bar8"></div>
		</div>
	</div>
	<section>
		<div class="imgbox">
			<img src="<?php echo RUTA; ?>img/img/kitchen-3266752_1920.jpg" alt="">
		</div>
		<div class="contentbox">
			<div class="formbox">
				<h2>Login</h2>
				<form action="" method="POST" id="form">
					<div class="inputbox">
						<span>Username</span>
						<input type="text" name="username" id="username" autocomplete="off">
					</div>
					<div class="inputbox">
						<span>Password</span>
						<input type="password" name="password" id="password">
					</div>
					<div class="remember">
						<label for="remember"><input type="checkbox" name="remember" id="remember"> Remember me</label>
					</div>

					<div class="inputbox">
						<input type="submit" value="Ingresar" name="login" id="login">
					</div>
					<div class="inputbox">
						<p>¿No tienes cuenta? <a href="#" id="regUserLink">Regisrate</a></p>
					</div>
				</form>
				<h3>Login with social media</h3>
				<ul class="sci">
					<li><i class="fab fa-twitter"></i></li>
					<li><i class="fab fa-google"></i></li>
					<li><i class="fab fa-facebook-f"></i></li>
				</ul>
			</div>
		</div>
	</section>
	<footer>
		Tu Inmueble Colombia | Ingenieria de Software II | Politecnico Grancolombiano
	</footer>

	<!-- REGISTRO -->
	<div class="registrouser" id="registrouser">
		<div class="contentreguser">
			<!-- TITULAR -->
			<div class="titularreg">
				<h3>Registro</h3>
				<span id="clsmodalreg"><i class="fas fa-times"></i></span>
			</div>
			<!-- FORMULARIO -->
			<form action="" method="POST" id="formreguser" class="formreguser">
				<!-- CORREO -->
				<div class="inputbox">
					<span>Correo*</span>
					<input type="email" name="correoreg" id="correoreg" autocomplete="off">
				</div>
				<!-- NOMBRES -->
				<div class="inputbox imp50">
					<span>Nombres*</span>
					<input type="text" name="nombrereg" id="nombrereg" autocomplete="off">
				</div>
				<!-- APELLIDOS -->
				<div class="inputbox imp50">
					<span>Apellidos*</span>
					<input type="text" name="apellidoreg" id="apellidoreg" autocomplete="off">
				</div>
				<!-- IDENTIFICACION -->
				<div class="inputbox imp70">
					<span>Identificación*</span>
					<input type="text" name="identificreg" id="identificreg" autocomplete="off">
				</div>
				<!-- EDAD -->
				<div class="inputbox imp30">
					<span>Edad*</span>
					<input type="number" name="edadreg" id="edadreg" autocomplete="off">
				</div>
				<!-- CLAVE -->
				<div class="inputbox ">
					<span>Clave*</span>
					<input type="password" name="passwordreg" id="passwordreg" autocomplete="off">
				</div>
				<!-- CONFIRMACION -->
				<div class="inputbox ">
					<span>Confirmar Clave*</span>
					<input type="password" name="passwordconfreg" id="passwordconfreg" autocomplete="off">
				</div>
				<!-- SUBMIT -->
				<div class="inputbox">
					<input type="submit" value="Registrar" name="regist" id="regist">
				</div>
			</form>
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

	<script src="<?php echo RUTA; ?>js/Bootstrap/jquery-3.2.1.min.js"></script>
	<script src="<?php echo RUTA; ?>js/SI/login/login.js"></script>
</body>
</html>