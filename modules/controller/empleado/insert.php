<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$id = $_POST['id_emp'];
	$nombre = $_POST['nombre'];
	$apP = $_POST['Ap_Paterno'];
	$apM = $_POST['Ap_Materno'];
	$area = $_POST['area'];

	if($id != "" && $nombre !="" && $apP != "" && $apM!="" && $area!=""){
		
		$query = new model();
		$insert = $query->insert_empleado($id, $nombre, $apP, $apM, $area);
			echo "
		<script>
			alert('$nombre ha sido registrado con exito');
			window.location = '/quattuor/pages/index.php?module=emp'
		</script>
		";
	}else{
		echo "
	<script>
		alert('complete todos los datos');
		window.location = '/quattuor/pages/index.php?module=emp'
	</script>
	";
	}
?>