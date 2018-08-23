<?php
	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$des=$_POST['mensaje'];
	$motivo=$_POST['motivo'];
	$empleado=$_POST['empleado'];
	$estatus= 1;
	$fecha = $_POST['fecha'];

/////////////////////////////////
	$query = new model();
	$inbox = $query->insert_inbox($motivo, $des, $estatus, $empleado, $fecha);

	echo "
		<script>
			alert('Mensaje enviado');
			window.location = '../../views/usuarios/usuarios.php'
		</script>
		";

?>