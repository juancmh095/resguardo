<?php

if(isset($_GET['module'])){
	$module = $_GET['module'];
	switch ($module) {
		case 'count':
			echo "count";
			break;
		case 'equipos':
			include_once('../modules/views/equipos/equipos.php');
			break;
		case 'C_E':
			include_once('../modules/views/equipos/view.php');
			break;
		case 'emp':
			include_once('../modules/views/empleados/empleado.php');
			break;
		case 'actualizar':
			include_once('../modules/views/equipos/actualizar.php');
			break;
		case 'areas':
			include_once('../modules/views/areas/areas.php');
			break;
		case 'clave':
			include_once('../modules/views/clave/clave.php');
			break;
		case 'marcas':
			include_once('../modules/views/marca/marca.php');
			break;
		case 'tipo':
			include_once('../modules/views/tipo/tipo.php');
			break;
		case 'com':
			include_once('../modules/views/combustible/com.php');
			break;
		case 'user':
			include_once('../modules/views/users/user.php');
			break;	
		case 'res':
			include_once('../modules/views/resguardo/resguardo.php');
			break;
		case 'tc':
			include_once('../modules/views/combustible/tipo.php');
			break;
		default:
			include_once('../modules/views/count.php');
			include_once('../modules/views/msj/msj.php');
			break;
	}

}else{
	include_once('../modules/views/count.php');
	include_once('../modules/views/msj/msj.php');
}


?>