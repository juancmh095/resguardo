<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$id = $_POST['id'];
	$precio = $_POST['precio'];

	if($id == "" && $precio == ""){
		
		echo "
		<script>
			alert('Ingrese todos los datos que se piden para actualizar el precio de combustible');
			window.location = '/quattuor/pages/index.php?module=tc'
		</script>
		";
		
	}else{
		
		$query = new model();
		$exe = $query->update_com($precio, $id);
		echo "
		<script>
			alert('El precio del combustible ha sido actualizado');
			window.location = '/quattuor/pages/index.php?module=tc'
		</script>
		";
	}

?>