<?php

include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');
	$user = $_POST['user'];
	$pass = $_POST['password'];



	session_start();

	$query = new model();
	$login = $query->inicio($user, $pass);
	foreach($login as $example){
		echo $example['2'];
		
	}

?>