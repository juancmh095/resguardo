<?php
	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$serie = $_POST['serie'];
	$des = $_POST['desc'];
	$carac = $_POST['caract'];
	


$query = new model();
$actualizar = $query->update_equipo($des, $carac, $serie);

echo"<script>
alert('Equipo aactualizado con exito!!!');
window.location = '/quattuor/pages/index.php?module=C_E&data=all';
</script>"


?>