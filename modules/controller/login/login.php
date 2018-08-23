<?php


	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');
	

	session_start();


if(isset($_POST['user']) && isset($_POST['password'])){
	 $user = $_POST['user'];
	 $password = $_POST['password'];

	$consulta = new model();
	$ver = $consulta->inicio($user, $password);
	//$ver = $consulta;
	foreach ($ver as $data) {
		 $_SESSION['id'] = $data['0'];
		 $_SESSION['empleado'] = $data['2'];
	}
	//echo $_SESSION["id"];
	if($ver != null){
		//echo "if 1" . " " .$_SESSION["id"];
		?>
		<script>
		alert('Bienvenido: <?php echo $_SESSION["id"]; ?>');
		window.location = '../../../pages/index.php';
		</script>
		<?php

	}else{
	//echo "nel";	
	echo "<script>
			alert('Usuario: $user o password incorrectos, verifique sus datos, o comuniquese con el administrador');
			window.location = '../../../index.php';
		</script>";
	}

}else{
	echo "<script>
		alert('No se recibieron datos, llene los campos por favor');
		window.location = '../../../index.php';
	</script>";
}

	
?>