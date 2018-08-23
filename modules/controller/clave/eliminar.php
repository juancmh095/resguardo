<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');


$id = $_GET['id'];
$estado = 0; 

$query = new model();
$eliminar = $query->update_clave($estado, $id);

echo "
		<script>
			alert('ha sido actualizado con exito');
			window.location = '/quattuor/pages/index.php?module=areas'
		</script>
		";
?>