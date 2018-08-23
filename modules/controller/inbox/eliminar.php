<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');


$id = $_GET['id'];
$estado = 0; 

$query = new model();
$eliminar = $query->update_inbox($estado, $id);

echo "
		<script>
			alert('Mensaje eliminado');
			window.location = '/quattuor/pages/index.php'
		</script>
		";
?>