<?php
class model{
	
	///login
	
	
	public function inicio($user, $pass){
			$model = new conectar();
			$conexion = $model->conection();
			 /*$sql = "SELECT users.*, empleado.nombre_empleado, empleado.apellido_paterno, empleado.apellido_materno, tipo_user.nombre FROM users, empleado, tipo_user WHERE users.id_user = :user AND users.pass = :pass AND users.id_empleado = empleado.id_empleado AND users.id_tipo_user=tipo_user.id_tipo_user";	*/
			 $sql="SELECT * FROM users WHERE id_user = :user AND pass = :pass";
			 $check = $conexion->prepare($sql);
			 $check->bindParam(":user", $user);
			 $check->bindParam(":pass", $pass);
	         $check->execute();

			//echo "Usuario existente";
			while ($data = $check->fetch()) {
				$rows[] = $data;
			}

			return $rows;
			//echo $rows;
	}

	/////////Equipos////////
	public function insert_equipo($serie, $modelo, $des, $caract, $estado, $clave, $num_clave, $tipo, $marca){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO equipo(no_serie, modelo, des_equipo, caracteristicas, estado, id_clave, num_clave, id_tipo, id_marca)VALUES(:n_serie, :modelo, :des, :caract, :estado, :id_clave, :num_clave, :id_tipo, :id_marca)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":n_serie", $serie);
			$check->bindParam(":modelo", $modelo);
			$check->bindParam(":des", $des);
			$check->bindParam(":caract", $caract);
			$check->bindParam(":estado", $estado);
			$check->bindParam(":id_clave", $clave);
			$check->bindParam(":num_clave", $num_clave);
			$check->bindParam(":id_tipo", $tipo);
			$check->bindParam(":id_marca", $marca);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	public function load_marca(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * FROM marca";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}

		
	public function load_tipo(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * FROM tipo";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function load_clave(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * FROM clave";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function load_area(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * FROM area";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function load_equipos(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT equipo.*, marca.nombre_marca, clave.nombre_clave, tipo.nombre_tipo FROM equipo, marca, clave, tipo WHERE equipo.id_clave = clave.id_clave AND equipo.id_tipo = tipo.id_tipo AND equipo.id_marca = marca.id_marca";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	public function load_equipos_estado($estado, $tipo){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT equipo.*, marca.nombre_marca, clave.nombre_clave, tipo.nombre_tipo FROM equipo, marca, clave, tipo WHERE equipo.id_clave = clave.id_clave AND equipo.id_tipo = tipo.id_tipo AND equipo.id_marca = marca.id_marca AND equipo.estado = :estado AND equipo.id_tipo = :tipo";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":estado", $estado);
			 $check->bindParam(":tipo", $tipo);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
			return $rows;
	}
	public function load_equipos_serie($serie){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT equipo.*, marca.nombre_marca, clave.nombre_clave, tipo.nombre_tipo FROM equipo, marca, clave, tipo WHERE equipo.id_clave = clave.id_clave AND equipo.id_tipo = tipo.id_tipo AND equipo.id_marca = marca.id_marca AND equipo.no_serie = :serie";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":serie", $serie);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	
	
	public function load_equipo($id_Arg){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * FROM equipo WHERE id = :id";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":id", $id_Arg);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function update_equipo($des, $caract, $serie){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE equipo SET des_equipo = :des, caracteristicas = :caract WHERE no_serie = :serie";
			$check = $conexion->prepare($sql);
			$check->bindParam(":des", $des);
			$check->bindParam(":caract", $caract);
			$check->bindParam(":serie", $serie);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }
	}

	////resguardo/////
	public function insert_resguardo($serie, $nota, $emp, $fecha, $user, $autor){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO resguardo(no_serie, nota, id_empleado, fecha, id_user, clv_autoriza)VALUES(:n_serie, :nota, :emp, :fecha, :user, :autor)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":n_serie", $serie);
			$check->bindParam(":nota", $nota);
			$check->bindParam(":emp", $emp);
			$check->bindParam(":fecha", $fecha);
			$check->bindParam(":user", $user);
		    $check->bindParam(":autor", $autor);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	public function update_estado_equipo($estado, $serie){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE equipo SET estado = :estado WHERE no_serie = :serie";
			$check = $conexion->prepare($sql);
			$check->bindParam(":estado", $estado);
			$check->bindParam(":serie", $serie);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	///mantenimiento
	public function insert_mantenimiento($serie, $fecha, $problema, $pieza){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO mantenimiento(problema, pieza_cambio, fecha_man, no_serie)VALUES(:problema, :pieza, :fecha, :serie)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":serie", $serie);
			$check->bindParam(":problema", $problema);
			$check->bindParam(":pieza", $pieza);
			$check->bindParam(":fecha", $fecha);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	///empleados
	///insert
	public function insert_empleado($id, $nombre, $apP, $apM, $area){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO empleado(id_empleado, nombre_empleado, apellido_paterno, apellido_materno, id_area)VALUES(:id, :nombre, :AP, :AM, :area)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":id", $id);
			$check->bindParam(":nombre", $nombre);
			$check->bindParam(":AP", $apP);
			$check->bindParam(":AM", $apM);
			$check->bindParam(":area", $area);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	public function load_empleado(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT empleado.*, area.nombre_area FROM empleado, area WHERE empleado.id_area=area.id_area";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function load_empleado_id($id){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT empleado.*, area.nombre_area FROM empleado, area WHERE empleado.id_area=area.id_area AND empleado.id_empleado = :id";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":id", $id);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	///areas
	public function insert_area($nombre, $area, $status){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO area(nombre_area, des_area, status)VALUES(:nombre, :area, :status)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":nombre", $nombre);
			$check->bindParam(":area", $area);
			$check->bindParam(":status", $status);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	public function update_area($estado, $id){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE area SET status = :estado WHERE id_area = :id";
			$check = $conexion->prepare($sql);
			$check->bindParam(":estado", $estado);
			$check->bindParam(":id", $id);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	///clave
	
	public function insert_clave($nombre, $area, $status){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO clave(nombre_clave, des_clave, status)VALUES(:nombre, :area, :status)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":nombre", $nombre);
			$check->bindParam(":area", $area);
			$check->bindParam(":status", $status);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	public function update_clave($estado, $id){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE clave SET status = :estado WHERE id_clave = :id";
			$check = $conexion->prepare($sql);
			$check->bindParam(":estado", $estado);
			$check->bindParam(":id", $id);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	///marcaaaaaaa
	
	public function insert_marca($nombre, $area, $status){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO marca(nombre_marca, des_marca, status)VALUES(:nombre, :area, :status)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":nombre", $nombre);
			$check->bindParam(":area", $area);
			$check->bindParam(":status", $status);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	public function update_marca($estado, $id){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE marca SET status = :estado WHERE id_marca = :id";
			$check = $conexion->prepare($sql);
			$check->bindParam(":estado", $estado);
			$check->bindParam(":id", $id);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	///tipooooooooooooooooooo
	public function insert_tipo($nombre, $area, $status){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO tipo(nombre_tipo, des_tipo, status)VALUES(:nombre, :area, :status)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":nombre", $nombre);
			$check->bindParam(":area", $area);
			$check->bindParam(":status", $status);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	public function update_tipo($estado, $id){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE tipo SET status = :estado WHERE id_tipo = :id";
			$check = $conexion->prepare($sql);
			$check->bindParam(":estado", $estado);
			$check->bindParam(":id", $id);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	///inbox
	public function load_inbox(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT inbox.*, empleado.nombre_empleado FROM inbox, empleado WHERE inbox.id_empleado=empleado.id_empleado ORDER by id_inbox DESC";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function info($id){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * FROM inbox WHERE id_inbox = :id";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":id", $id);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	public function insert_inbox($motivo, $des, $status, $empleado, $fecha){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO inbox(motivo, des, status, id_empleado, fecha)VALUES(:motivo, :des, :stt, :empleado, :fecha)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":motivo", $motivo);
			$check->bindParam(":des", $des);
			$check->bindParam(":stt", $status);
			$check->bindParam(":empleado", $empleado);
			$check->bindParam(":fecha", $fecha);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	public function update_inbox($estado, $id){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE inbox SET status = :estado WHERE id_inbox = :id";
			$check = $conexion->prepare($sql);
			$check->bindParam(":estado", $estado);
			$check->bindParam(":id", $id);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	//////count index
	public function count_dis(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT COUNT(*) FROM equipo WHERE estado=0";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function count_res(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT COUNT(*) FROM equipo WHERE estado=1";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function count_man(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT COUNT(*) FROM equipo WHERE estado=2";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function count_baja(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT COUNT(*) FROM equipo WHERE estado=3";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	//users
	public function nameUser(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * from tipo_user";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function insert_user($user, $pass, $emp, $type){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO users(id_user, pass, id_empleado, id_tipo_user)VALUES(:user, :pass, :empleado, :type)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":user", $user);
			$check->bindParam(":pass", $pass);
			$check->bindParam(":empleado", $emp);
			$check->bindParam(":type", $type);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	//combustible
	public function load_com(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * from tipo_combustible";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	public function insert_com($litros, $efectivo, $tipo, $empleado, $fecha){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO reporte_com(litros, efectivo, id_tipo_com, id_empleado, fecha)VALUES(:litros, :efectivo, :tipo, :empleado, :fecha)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":litros", $litros);
			$check->bindParam(":efectivo", $efectivo);
			$check->bindParam(":empleado", $empleado);
			$check->bindParam(":tipo", $tipo);
			$check->bindParam(":fecha", $fecha);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	
	public function load_rcom(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT e.nombre_empleado, e.apellido_paterno, t.nombre_com, r.* FROM empleado as e, tipo_combustible as t, reporte_com as r WHERE r.id_empleado = e.id_empleado AND r.id_tipo_com = t.id_tipo_com";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function load_id_re(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT MAX(id_tipo_com) from tipo_combustible;";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	public function insert_com2($id, $nombre, $precio){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "INSERT INTO tipo_combustible(id_tipo_com, nombre_com, precio)VALUES(:id, :nombre, :precio)";
			$check = $conexion->prepare($sql);
			$check->bindParam("id", $id);
			$check->bindParam(":nombre", $nombre);
			$check->bindParam(":precio", $precio);;
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	public function update_com($precio, $id){
			$model = new conectar();
			$conexion = $model->conection();
			$sql = "UPDATE tipo_combustible SET precio = :precio WHERE id_tipo_com = :id";
			$check = $conexion->prepare($sql);
			$check->bindParam(":precio", $precio);
			$check->bindParam(":id", $id);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
	public function buscar1($folio){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT e.nombre_empleado, e.apellido_paterno, q.modelo, q.id_marca, m.nombre_marca, r.*, q.no_serie, c.nombre_clave, t.nombre_tipo FROM clave as c, tipo as t, empleado as e, equipo as q, resguardo as r, marca as m WHERE r.id_empleado = e.id_empleado AND r.no_serie = q.no_serie AND q.id_marca = m.id_marca AND r.id_empleado = :folio AND q.id_clave = c.id_clave AND q.id_tipo = t.id_tipo";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":folio", $folio);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	public function buscar2($fecha1, $fecha2){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT e.nombre_empleado, e.apellido_paterno, q.modelo, q.id_marca, m.nombre_marca, r.* FROM empleado as e, equipo as q, resguardo as r, marca as m WHERE r.id_empleado = e.id_empleado AND r.no_serie = q.no_serie AND q.id_marca = m.id_marca AND r.fecha BETWEEN :fecha1 AND :fecha2";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":fecha1", $fecha1);
			 $check->bindParam(":fecha2", $fecha2);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	//pdf
	public function buscarpdf($folio){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT e.nombre_empleado, e.apellido_paterno, q.modelo, q.id_marca, m.nombre_marca, r.*, q.no_serie, c.nombre_clave, t.nombre_tipo FROM clave as c, tipo as t, empleado as e, equipo as q, resguardo as r, marca as m WHERE r.id_empleado = e.id_empleado AND r.no_serie = q.no_serie AND q.id_marca = m.id_marca AND r.id_empleado = e.id_empleado AND q.id_clave = c.id_clave AND q.id_tipo = t.id_tipo AND r.folio = :folio";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":folio", $folio);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	//userporid_user
	public function user1($folio){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT e.nombre_empleado, e.apellido_paterno, e.apellido_materno, u.id_user FROM empleado as e, users as u WHERE e.id_empleado= u.id_empleado AND u.id_user = :folio";
	         $check = $conexion->prepare($sql);
			 $check->bindParam(":folio", $folio);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	//otra de resguardo
	public function folioRes(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT MAX(folio) FROM resguardo";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}


////modificado
public function load_clave_id($id_clave){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT nombre_clave FROM clave WHERE id_clave= :clave";
	         $check = $conexion->prepare($sql);
		 	 $check->bindParam(":clave", $id_clave);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
	
	////autorizaaaa
	public function load_autor($id_autor){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT nombre_empleado, apellido_materno, apellido_paterno FROM empleado WHERE id_empleado = :autor";
	         $check = $conexion->prepare($sql);
		     $check->bindParam(":autor", $id_autor);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
}

?>