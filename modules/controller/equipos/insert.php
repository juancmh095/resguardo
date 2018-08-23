<?php
	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');

	$serie = $_POST['clave'].$_POST['nc'];
	$modelo = $_POST['modelo'];
	$des = $_POST['desc'];
	$carac = $_POST['caract'];
	$estado = 0;
	$clave = $_POST['clave'];
	$num = $_POST['nc'];
	$tipo = $_POST['tipo'];
	$marca = $_POST['marca'];

$que = new model();
$clav = $que->load_clave_id($_POST['clave']);
foreach($clav as $clv){
	$serie = $clv['0']."-".$_POST['nc'];
}
 
if(isset($clav)){

$query = new model();
$insert = $query->insert_equipo($serie, $modelo, $des, $carac, $estado, $clave, $num, $tipo, $marca);

echo"<script>
alert('Equipo registrado con exito!!!');
window.location = '/quattuor/pages/index.php?module=C_E&data=all';
</script>";

}

?>