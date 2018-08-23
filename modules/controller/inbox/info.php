<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

$id = $_POST['valorCaja1'];
$query = new model();
$inbox = $query->info($id);


foreach($inbox as $view){
	echo $view['2'];
}

?>