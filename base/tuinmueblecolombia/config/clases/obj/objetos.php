<?php 
function listInmuebleUser($arr){
	$salida = '';
	foreach ($arr as $value) {
		if (empty($value['foto'])) {
			$value['foto'] = 'unnamedinm.png';
		}
		$salida .= '<div class="col-12 col-sm-6 col-md-3 mb-2">
						<div class="card h-100">
							<img src="'.RUTA.'img/img/'.$value['foto'].'" alt="" class="card-img-top imginmb">
							<div class="card-footer">
								<a href="#" id="'.$value['id_inmueble'].'" class="linkModInmb">
									<p class="m-0 p-0">'.$value['nombre'].'</p>
									<p class="m-0 p-0">'.$value['estado'].' | '.$value['costo'].'</p>
								</a>
							</div>
						</div>
					</div>';
	}
	return $salida;
}