<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$id = $_POST['id'];
	
	$query = new model();
	$exe = $query->buscar1($id);

	foreach($exe as $eq){
		
		if(isset($eq)){
	echo "
	<tr>
	<td>".$eq['0']." ".$eq['1']."</td>".
	"<td>".$eq['4']." ".$eq['2']."</td>".
	"<td>".$eq['9']."</td>".	
	"<td><a class='btn btn-success' href='../modules/views/pdf/pdf2.php?data=".$eq['5']."'>Imprimir</a></td>
	</tr>
	";
	}else{
		echo"
		<tr>
		
		</tr>
		";
		
	}
	}

?>