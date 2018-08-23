<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

$serie = $_POST['serie'];
$fecha = $_POST['fecha'];
$problema = $_POST['problema'];
$pieza = $_POST['pieza'];
$estado = 2;
$query = new model();

$ns = $query->load_equipo($serie);
foreach($ns as $equipo){$serie = $equipo['0'];}

if($serie !="" && $fecha != "" && $problema != "" && $pieza != ""){
	
	$mant = $query->insert_mantenimiento($serie, $fecha, $problema, $pieza);
	$update = $query->update_estado_equipo($estado, $serie);
	
	echo "
	<script>
		alert('Registro correcto');
		window.location = '/quattuor/pages/index.php?module=C_E&data=all'
	</script>
	";
	
	
}else{
	echo "
	<script>
		alert('complete todos los datos');
		window.location = '/quattuor/pages/index.php?module=C_E&data=all'
	</script>
	";
}
?>