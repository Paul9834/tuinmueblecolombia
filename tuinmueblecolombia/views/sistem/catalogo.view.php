<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>La Inmobiliaria CO</title>
</head>
<body>
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		header{
			background: linear-gradient(to right, #21bf73 20%, #184d47 60%, #00af91 80%);
			width: 100%;
			height: 65px;
			display: flex;
			padding: 0px 2rem;
			margin-bottom: 1.5rem;
		}
		header nav{
			height: 100%;
			display: flex;
			align-items: center;
		}
		header nav a{
			padding: 0px 10px;
			color: white;
		}
		.container-foot{
			width: 80%;
			margin: 0 auto;
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-template-rows: repeat(1, auto);
			grid-gap: 1rem;
		}
		.container{
			width: 80%;
			margin: 0 auto;
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-template-rows: repeat(10, auto);
			grid-gap: 1rem;
		}
		.card-inmueble{
			border: 1px solid #CCC;
			font-family: sans-serif;
		}
		.card-image{
			position: relative;
			width: 100%;
			height: 200px;
			border-bottom: 1px solid #CCC;
		}
		.card-image img{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.card-descr{
			padding: .8rem .4rem;
		}
		.card-title{
			color: #333;
			padding: .4rem 0;
			letter-spacing: .5px;
		}
		.inmueble,
		.tipo{
			color: #AAA;
		}
		.card-costo{
			padding-top: .2rem;
		}
		footer{
			background: #000;
			font-family: sans-serif;
			padding: 1.5rem 0;
		}
		.foot-tit{
			font-weight: 600;
			color: #fff;
			font-size: 1.5rem;
			margin-bottom: 8px;
		}
		.foot-list{
			color: rgba(255,255,255,.5);
			font-size: .9rem;
			margin-bottom: 8px;
		}
	</style>
	<header>
		<div class="icon">
			<img src="<?php echo RUTA; ?>disenio/images/logo.png" alt="">
		</div>
		<nav>
			<a href="<?php echo RUTA; ?>" class="nav_link">Inicio</a>
			<a href="<?php echo RUTA; ?>SI/catalogo/catalogo" class="nav_link">Inmuebles</a>
			<a href="<?php echo RUTA; ?>SI/login/login" class="nav_link">Iniciar Sesión</a>
		</nav>
	</header>

	<section class="container">
		<?php foreach ($listaInmueble as $value):?>
			<div class="card-inmueble">
				<div class="card-image">
					<img src="<?php echo RUTA . 'img/img/' . $value['foto']; ?>" alt="">
				</div>
				<div class="card-descr">
					<h4 class="card-title"><?php echo $value['nombre'] ?></h4>
					<p><span class="inmueble"><?php echo $value['tipo'] ?></span> | <span class="tipo"><?php echo $value['opcion'] ?></span></p>
					<p class="card-costo"><?php echo $value['costo'] ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</section>

	<footer>
		<div class="container-foot">
			<div class="foot-col">
				<div class="foot-tit">Inmuebles</div>
				<p class="foot-list">Casa</p>
				<p class="foot-list">Apartamento</p>
				<p class="foot-list">Oficina</p>
			</div>
			<div class="foot-col">
				<div class="foot-tit">Equipo</div>
				<p class="foot-list">Carlos el Desarrollador</p>
				<p class="foot-list">Cristian el Diseñador</p>
				<p class="foot-list">Un tal Kevin</p>
			</div>
			<div class="foot-col">
				<div class="foot-tit"></div>
				<p class="foot-list"></p>
				<p class="foot-list"></p>
				<p class="foot-list"></p>
			</div>
		</div>
		<p style="text-align: center;color: #FFF;">© 2021 Politecnico Grancolombiano </p>
	</footer>
</body>
</html>
