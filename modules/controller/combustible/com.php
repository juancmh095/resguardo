<?php
	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$id = $_POST['id'];
	$empleado = $_POST['empleado'];
	$litros = $_POST['litros'];
	$fecha = $_POST['fecha'];
	$pesos = $_POST['pesos'];

	if($empleado == "" && $id == "" && $litros == "" && $fecha == "" && $pesos == ""){
		
		echo "
		<script>
			alert('Ingrese todos los datos que se piden');
			window.location = '/quattuor/pages/index.php?module=com'
		</script>
		";
		
	}else{
		
		$query = new model();
		$exe = $query->insert_com($litros, $pesos, $id, $empleado, $fecha);
		
		echo "
		<script>
			alert('Registro correcto');
			window.location = '/quattuor/pages/index.php?module=com'
		</script>
		";
	}

?>