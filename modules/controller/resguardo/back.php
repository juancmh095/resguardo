<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$estado = $_GET['estado'];
	$serie = $_GET['serie'];

	$query = new model();
	$up_estado = $query->update_estado_equipo($estado, $serie);
	
	echo "
	<script>
		alert('Equipo registrado');
		window.location = '/quattuor/pages/index.php?module=C_E&data=all'
	</script>
	";

?>