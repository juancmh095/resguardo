<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Solicitud</title>
<link href="css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet" />
<style>
.container{
	width:900px;
	background-color:#FFF;
	
	box-shadow:1px 1px 5px 5px #CCC;
	border-radius:5px;
	}
.form{
	margin-top:40px;
	}
#logo{
	width:70px;
	height:70px;
	float:left;
	margin-left:10px;
	margin-bottom:50px;
	}
body{
	background-color:#D9EAFF;
	}
</style>
</head>

<body>
<div class="container">
<h3 align="center"> SOLICITUD DE MANTENIMIENTO</h3>
<hr />
<center>
<form class="form" action="php/mensajes.php" method="post">

<div class="input-prepend input-group-addon">
<label class="label">Empleado</label>
<br />
<span class="add-on"><li class="fa fa-user"></li></span>
<input class="input-xlarge" name="empleado" type="text" placeholder="Nombre del empleado"/>
</div>

<div class="input-prepend input-group-addon">
<label class="label">Area</label>
<br />
<span class="add-on"><li class="fa fa-home"></li></span>
<input class="input-large" name="area" type="text" placeholder="Area"/>
</div>

<div class="input-prepend input-group-addon">
<label class="label">Fecha</label>
<br />
<span class="add-on"><li class="fa fa-calendar"></li></span>
<input class="input-large" name="fecha" type="date" value="<?php echo $fecha=date("Y-m-d") ?>" placeholder="Area"/>
</div>
<br />
<br />

<label class="label">Motivo:</label>
<input class="input-xxlarge" name="motivo" type="text" placeholder="Motivo"/>

<br />
<br />
<label class="label h1">Mensaje</label>
<br />
<textarea class="input-xxlarge" cols="true" rows="3"  name="mensaje" placeholder="Escribir mensaje" contextmenu=""></textarea>
<br />
<br />
<button type="submit" class="btn btn-success btn-block" style="width:200px;">Enviar</button>
</form>
</center>
<div id="logo">
<span><img src="images/logo2.png"  /></span>
</div>
<br />

	
    	<center>
    		<div class="panel-footer">
			<h4 class="">© Ingeniería y Carreteras Especializadas Quattuor S.A. de C.V.</h4>
            </div>
    	</center>
	

</div>

</body>
</html>
