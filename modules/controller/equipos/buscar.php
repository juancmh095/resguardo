<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$iserie = $_POST['serie'];
	$tipo = $_POST['tipo'];
	$estado = $_POST['estado'];

 echo $iserie.$tipo.$estado;

	
	/*$query = new model();
	$exe = $query->buscar1($id);

	foreach($exe as $eq){
		
		if(isset($eq)){
	echo "
	<tr>
	<td>".$eq['0']." ".$eq['1']."</td>".
	"<td>".$eq['4']." ".$eq['2']."</td>".
	"<td>".$eq['9']."</td>".	
	"<td><a href=''>link</a></td>
	</tr>
	";
	}else{
		echo"
		<tr>
		
		</tr>
		";
		
	}
	}*/

?>