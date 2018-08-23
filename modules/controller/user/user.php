<?php

	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	

	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$empleado = $_POST['empleado'];
	$tipo = $_POST['tipo'];

	if($usuario == "" && $pass == ""){
		
		echo "
		<script>
			alert('Ingrese los datos de usuarios y Password');
			window.location = '/quattuor/pages/index.php?module=user'
		</script>
		";
		
	}else{
		
		if($usuario == ""){
			echo "
		<script>
			alert('Ingrese los datos de usuarios');
			window.location = '/quattuor/pages/index.php?module=user'
		</script>
		";
		
			
		}else{
			if($pass == ""){
				echo "
		<script>
			alert('Ingrese un password');
			window.location = '/quattuor/pages/index.php?module=user'
		</script>
		";
				
			}else{
				
				$query = new model();
				$exe = $query->insert_user($usuario, $pass, $empleado, $tipo);
				
				echo "
		<script>
			alert('Registado con exito como $usuario');
			window.location = '/quattuor/pages/index.php?'
		</script>
		";
			}
		}
	}

?>