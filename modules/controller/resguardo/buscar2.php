<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$fecha1 = $_POST['fecha1'];
	$fecha2 = $_POST['fecha2'];
	
	$query = new model();
	$exe = $query->buscar2($fecha1, $fecha2);

	foreach($exe as $eq){
		
		if(isset($eq)){
	echo "
	<tr>
	<td>".$eq['0']." ".$eq['1']."</td>".
	"<td>".$eq['4']." ".$eq['2']."</td>".
	"<td>".$eq['9']."</td>".	
	"<td><a class='btn btn-success' href='../modules/views/pdf/pdf3.php?data1=".$fecha1."&data2=".$fecha2."'>Imprimir</a></td>
	</tr>
	";
	}else{
		echo"
		<tr>
		0 resultados
		</tr>
		";
		
	}
	}

?>