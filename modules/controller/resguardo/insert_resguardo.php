<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');
$user = $_POST['user'];
$serie = $_POST['serie'];
$fecha = $_POST['fecha'];
$empleado = $_POST['empleado'];
$nota = $_POST['nota'];
$autoriza = $_POST['autoriza'];
$estado = 1;
$query = new model();

$ns = $query->load_equipo($serie);
foreach($ns as $equipo){$serie = $equipo['0'];}

if($serie !="" && $fecha != "" && $empleado != "" && $nota != "" && $user !== "" && $autoriza !== ""){
	
	$insert = $query->insert_resguardo($serie, $nota, $empleado, $fecha, $user, $autoriza);
	$update = $query->update_estado_equipo($estado, $serie);
	
	$folio = $query->folioRes();
	foreach($folio as $folioRes){
		$fl = $folioRes['0'];
	}
	echo "
	<script>
		alert('Registro correcto');
		window.location = '../../../modules/views/pdf/pdf2.php?data=$fl'
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