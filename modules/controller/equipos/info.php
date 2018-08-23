<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

$serie = $_POST['serie'];

$query = new model();

$ns = $query->load_equipo($serie);
foreach($ns as $equipo){$serie = $equipo['0'];}

$load = $query->load_equipos_serie($serie);
foreach($load as $info){
	
	echo"
	<td>".nl2br($info['2'])."</td>".
	"<td>".nl2br($info['4'])."</td>
	";
	
}

?>