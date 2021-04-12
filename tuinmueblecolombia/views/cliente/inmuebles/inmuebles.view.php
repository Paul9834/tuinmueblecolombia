<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LINK -->
	<!-- LINK -->
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/Bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/sistema.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/cliente/inmuebles/inmuebles.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Mis Inmuebles</title>
</head>
<body>
	<!-- LOADER -->
	<div class="preloader" id="preloader">
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

	<div class="container-fluid py-3">
		<!-- CABECERA AGREGAR -->
		<div class="row mb-2">
			<div class="col-12">
				<a href="#" class="btnaddInm" id="btnaddInm" data-toggle="modal" data-target="#addInmuebleModal">
					<i class="fas fa-plus"></i> Agregar Inmueble
				</a>
			</div>
		</div>
		<!-- CONTENIDO INMUEBLES -->
		<div class="row" id="contlistinm">
			<?php echo $listinm; ?>
		</div>
	</div>



	<!-- AGREGAR INMUEBLE -->
	<div class="modal fade" id="addInmuebleModal" tabindex="-1" role="dialog" aria-labelledby="Agregar Inmueble" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<form class="modal-content" enctype="multipart/form-data" id="formAddInmMod">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Agregar Inmueble</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- FOTOS -->
					<div class="row mb-2">
						<div class="col-12">
							<div class="card card-body">
								<h6>Datos del Inmueble</h6>
								<input type="text" class="form-control mb-2" name="nombreAdd" id="nombreAdd" placeholder="Nombre del Inmueble" autocomplete="off">
								<input disabled="true" type="file" accept=".jpg,.jpeg,.png" name="docTarea[]" multiple="">
							</div>
						</div>
					</div>
					<!-- AGRINMUEBLE -->
					<div class="row">
						<div class="col-12 col-md-5">
							<!-- TIPO DE INMUEBLE -->
							<div class="card card-body mb-2">
								<h6>Tipo de Inmueble</h6>
								<div class="row">
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tipoAdd" id="casaAdd" value="1">
											<label class="form-check-label" for="casaAdd">Casa</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tipoAdd" id="aptoAdd" value="2">
											<label class="form-check-label" for="aptoAdd">Apartamento</label>
										</div>
									</div>
								</div>
							</div>

							<!-- VANTA O ARRIENDO -->
							<div class="card card-body mb-2">
								<div class="row">
									<div class="col-12">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="opcionAdd" id="ventaAdd" value="1">
											<label class="form-check-label" for="ventaAdd">Venta</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="opcionAdd" id="arriendoAdd" value="2">
											<label class="form-check-label" for="arriendoAdd">Arriendo</label>
										</div>
									</div>
								</div>
							</div>

							<!-- COSTO -->
							<div class="card card-body pb-2 mb-2">
								<h6>Costo</h6>
								<input type="text" class="form-control" name="costoAdd" id="costoAdd" placeholder="$000.000" autocomplete="off">
							</div>

							<!-- ESTRATO -->
							<div class="card card-body mb-2">
								<h6>Estrato</h6>
								<div class="row">
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoAdd" id="est1Add" value="1">
											<label class="form-check-label" for="est1Add">Estrato 1</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoAdd" id="est2Add" value="2">
											<label class="form-check-label" for="est2Add">Estrato 2</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoAdd" id="est3Add" value="3">
											<label class="form-check-label" for="est3Add">Estrato 3</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoAdd" id="est4Add" value="4">
											<label class="form-check-label" for="est4Add">Estrato 4</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoAdd" id="est5Add" value="5">
											<label class="form-check-label" for="est5Add">Estrato 5</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-7">
							<input type="text" class="form-control mb-2" name="direccionAdd" id="direccionAdd" placeholder="Dirección" autocomplete="off">
							<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31816.67498453914!2d-74.1679822614057!3d4.578868483869053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spolitecnico%20grancolombiano!5e0!3m2!1ses-419!2sco!4v1617485630519!5m2!1ses-419!2sco" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							<div class="descrinmu">
								<!-- AREA -->
								<label for="areaAdd" class="mr-2">
									<i class="fas fa-ruler-combined"></i>
									<input type="text" id="areaAdd" class="inmpesp" maxlength="10" autocomplete="off">
									m<sup>2</sup>
								</label>
								<!-- HABITACIONES -->
								<label for="habitAdd" class="mr-2">
									<i class="fas fa-bed"></i>
									<input type="text" id="habitAdd" class="inmpesp" maxlength="10" autocomplete="off">
								</label>
								<!-- BAÑOS -->
								<label for="banioAdd" class="mr-2">
									<i class="fas fa-shower"></i>
									<input type="text" id="banioAdd" class="inmpesp" maxlength="10" autocomplete="off">
								</label>
								<!-- PARQUEADEROS -->
								<label for="parqAdd" class="mr-2">
									<i class="fas fa-car"></i>
									<input type="text" id="parqAdd" class="inmpesp" maxlength="10" autocomplete="off">
								</label>
								<!-- ADMINISTRACION -->
								<label for="adminAdd" class="mr-2">
									<i class="fas fa-dollar-sign"></i>
									<input type="text" id="adminAdd" class="inmpesplarge" maxlength="10" autocomplete="off">
								</label>
							</div>
							<div class="descrAddcont">
								<h6>Descripción</h6>
								<textarea name="descrAdd" id="descrAdd" class="form-control"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-start">
					<input type="submit" value="Confirmar" id="confAddInm" class="btn btn-primary">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>



	<!-- EDITAR INMUEBLE -->
	<div class="modal fade" id="editInmuebleModal" tabindex="-1" role="dialog" aria-labelledby="Editar Inmueble" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<form class="modal-content" enctype="multipart/form-data" id="formEditInmMod">
				<div class="modal-header">
					<h5 class="modal-title">Editar Inmueble</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- FOTOS -->
					<div class="row mb-2">
						<div class="col-12">
							<div class="card card-body">
								<h6>Datos del Inmueble</h6>
								<input type="text" class="form-control mb-2" name="nombreEdit" id="nombreEdit" placeholder="Nombre del Inmueble" autocomplete="off">
								<input disabled="true" type="file" accept=".jpg,.jpeg,.png" name="docTarea[]" multiple="">
							</div>
						</div>
					</div>
					<!-- AGRINMUEBLE -->
					<div class="row">
						<div class="col-12 col-md-5">
							<!-- TIPO DE INMUEBLE -->
							<div class="card card-body mb-2">
								<h6>Tipo de Inmueble</h6>
								<div class="row">
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tipoEdit" id="casaEdit" value="1">
											<label class="form-check-label" for="casaEdit">Casa</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tipoEdit" id="aptoEdit" value="2">
											<label class="form-check-label" for="aptoEdit">Apartamento</label>
										</div>
									</div>
								</div>
							</div>

							<!-- VANTA O ARRIENDO -->
							<div class="card card-body mb-2">
								<div class="row">
									<div class="col-12">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="opcionEdit" id="ventaEdit" value="1">
											<label class="form-check-label" for="ventaEdit">Venta</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="opcionEdit" id="arriendoEdit" value="2">
											<label class="form-check-label" for="arriendoEdit">Arriendo</label>
										</div>
									</div>
								</div>
							</div>

							<!-- COSTO -->
							<div class="card card-body pb-2 mb-2">
								<h6>Costo</h6>
								<input type="text" class="form-control" name="costoEdit" id="costoEdit" placeholder="$000.000" autocomplete="off">
							</div>

							<!-- ESTRATO -->
							<div class="card card-body mb-2">
								<h6>Estrato</h6>
								<div class="row">
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoEdit" id="est1Edit" value="1">
											<label class="form-check-label" for="est1Edit">Estrato 1</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoEdit" id="est2Edit" value="2">
											<label class="form-check-label" for="est2Edit">Estrato 2</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoEdit" id="est3Edit" value="3">
											<label class="form-check-label" for="est3Edit">Estrato 3</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoEdit" id="est4Edit" value="4">
											<label class="form-check-label" for="est4Edit">Estrato 4</label>
										</div>
									</div>
									<div class="col-6">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="estratoEdit" id="est5Edit" value="5">
											<label class="form-check-label" for="est5Edit">Estrato 5</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-7">
							<input type="text" class="form-control mb-2" name="direccionEdit" id="direccionEdit" placeholder="Dirección" autocomplete="off">
							<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31816.67498453914!2d-74.1679822614057!3d4.578868483869053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spolitecnico%20grancolombiano!5e0!3m2!1ses-419!2sco!4v1617485630519!5m2!1ses-419!2sco" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							<div class="descrinmu">
								<!-- AREA -->
								<label for="areaEdit" class="mr-2">
									<i class="fas fa-ruler-combined"></i>
									<input type="text" id="areaEdit" class="inmpesp" maxlength="10" autocomplete="off">
									m<sup>2</sup>
								</label>
								<!-- HABITACIONES -->
								<label for="habitEdit" class="mr-2">
									<i class="fas fa-bed"></i>
									<input type="text" id="habitEdit" class="inmpesp" maxlength="10" autocomplete="off">
								</label>
								<!-- BAÑOS -->
								<label for="banioEdit" class="mr-2">
									<i class="fas fa-shower"></i>
									<input type="text" id="banioEdit" class="inmpesp" maxlength="10" autocomplete="off">
								</label>
								<!-- PARQUEADEROS -->
								<label for="parqEdit" class="mr-2">
									<i class="fas fa-car"></i>
									<input type="text" id="parqEdit" class="inmpesp" maxlength="10" autocomplete="off">
								</label>
								<!-- ADMINISTRACION -->
								<label for="adminEdit" class="mr-2">
									<i class="fas fa-dollar-sign"></i>
									<input type="text" id="adminEdit" class="inmpesplarge" maxlength="10" autocomplete="off">
								</label>
							</div>
							<div class="descrAddcont">
								<h6>Descripción</h6>
								<textarea name="descrEdit" id="descrEdit" class="form-control"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-start">
					<input type="submit" value="Editar" id="confEditInm" class="btn btn-primary" data-edit="0">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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

	<!-- SCRIPTS BOOTSTRAP -->
	<script src="<?php echo RUTA; ?>js/Bootstrap/jquery-3.2.1.min.js"></script>
	<script src="<?php echo RUTA; ?>js/Bootstrap/popper.min.js"></script>
	<script src="<?php echo RUTA; ?>js/Bootstrap/bootstrap.min.js"></script>
	<!-- SCRIPT -->
	<script src="<?php echo RUTA; ?>js/SI/cliente/inmuebles/inmuebles.js"></script>
</body>
</html>