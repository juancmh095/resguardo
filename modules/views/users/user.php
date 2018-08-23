

      
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Usuario Nuevo</h1>
                        <div class="row">
                        	
                        	<div class="col-lg-12">
                        		<div class="col-lg-6">
									<form action="../modules/controller/user/user.php" method="post">
										<label>Usuario</label>
										<input class="form-control" name="usuario" placeholder="Usuario">
										<br>
										<label>Password</label>
										<input type="password" class="form-control" name="pass" placeholder="Password">
										<br>
										<label>Clave_empleado</label>
										<input type="text" class="form-control" name="empleado" placeholder="Empleado">
										<div class="col-lg-6">
											<br>
											<label>Tipo de usuario</label>
											<select class="form-control" name="tipo">
											<?php 
												$query = new model();
												$user = $query->nameUser();
												foreach($user as $users){
											?>
											
												<option value="<?php echo $users['0']; ?>"><?php echo $users['1']; ?></option>
											<?php }?>	
											</select>
												<br>
												<button type="submit" class="btn btn-success">Enviar</button>
										</div>
									</form>
								</div>
                        	</div>
                        	
                        </div>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
      
   