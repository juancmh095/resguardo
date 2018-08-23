<?php
	include_once('../modules/model/db/db.php');
	include_once('../modules/model/query/model.php');

 if(isset($_GET['serie'])){
	 $serie = $_GET['serie'];
	 
		$query = new model();
	 	$view = $query->load_equipos_serie($serie);
	 	foreach($view as $equipo){
			
		}
 }
?>
      
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Actualizar Equipo</h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                    	<div class="col-lg-12">
                        <form action="../modules/controller/equipos/actualizar.php" method="post">
                            <div class="col-lg-3">
                               <input name="serie" class="hidden" value="<?php echo $equipo['0']; ?>">
                                <label>No. Serie</label>
                                <input class="form-control" name="" placeholder="No.Serie" value="<?php echo $equipo['0']; ?>" disabled/>
                            </div>
                            <div class="col-lg-3">
                                <label>Modelo</label>
                                <input class="form-control" name="modelo" placeholder="modelo" value="<?php echo $equipo['1']; ?>" disabled/>
                            </div>
                            
                            <div class="col-lg-3">
                            	<label>Marca</label>
                                <input class="form-control" value="<?php echo $equipo['11']; ?>" disabled>  
                            </div>
                            <div class="col-lg-3">
                            	<label>Tipo</label>
                                <input class="form-control" value="<?php echo $equipo['13']; ?>" disabled>
                            </div>
                            <div class="row" align="center">
                            <div class="col-lg-12">
                             <div class="col-lg-2" align="center">
                                <br />
                                	<label>Clave</label>
                                    <input class="form-control" value="<?php echo $equipo['12'].$equipo['7']; ?>" disabled> 
                             </div>                             
                            </div>
                            </div>
                            
                            
                            <div class="row" align="center">
                            <div class="col-lg-12">
                            	<div class="col-lg-6">
                                  <br />
                                	<center>
                                    <label>Descripcion</label>
                                   	<textarea name="desc" class="form-control" rows="12" cols="" value=""><?php echo nl2br($equipo['2']); ?></textarea>
                                    </center>
                                    </div>
                                    <div class="col-lg-6">
                                  <br />
                                	<center>
                                    <label>Caracteristicas</label>
                                   	<textarea name="caract" class="form-control" rows="12" cols="" value=""><?php echo nl2br($equipo['4']); ?></textarea>
                                    </center>
                                    </div>
                                </div>   
                            </div>
                            
                            <div class="row">
                            <div class="col-lg-12">
                            <div class="col-lg-12">
                            <br />
                            <button type="submit" class="btn btn-success" style="width:100%;"><h3>Actualizar</h3></button>
                            </div>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
      
   