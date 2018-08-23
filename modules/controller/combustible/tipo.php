<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$query = new model();
	$exe = $query->load_id_re();
	foreach($exe as $idr){
		
		$id = $idr['0'] + 1;
		
	}

	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];

	if($nombre == "" && $precio == ""){
		
		echo "
		<script>
			alert('Ingrese todos los datos que se piden');
			window.location = '/quattuor/pages/index.php?module=tc'
		</script>
		";
		
	}else{
		
		$exe2 = $query->insert_com2($id, $nombre, $precio);
		echo "
		<script>
			alert('Registro correcto');
			window.location = '/quattuor/pages/index.php?module=tc'
		</script>
		";
	}

	
?>
