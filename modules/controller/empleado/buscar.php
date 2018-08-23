<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');
	
	$id = $_POST['id'];

	$query = new model();
	$equipo = $query->load_empleado_id($id);
	foreach($equipo as $eq){}
	if(isset($eq)){
	echo "
	<tr>
	<td>".$eq['0']."</td>".
	"<td>".$eq['1']."</td>".
	"<td>".$eq['2']."</td>".
	"<td>".$eq['5']."</td>".	
	"<td></td>
	</tr>
	";
	}else{
		echo"
		<tr>
		
		</tr>
		";
	}

?>