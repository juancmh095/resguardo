<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$estado = 1;

if($nombre != "" && $desc != ""){
	$query = new model();
	$area = $query->insert_clave($nombre, $desc, $estado);
	
	echo "
		<script>
			alert('$nombre ha sido registrado con exito');
			window.location = '/quattuor/pages/index.php?module=clave'
		</script>
		";
	
}

?>