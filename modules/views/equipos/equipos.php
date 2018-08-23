<?php
	include_once('../modules/model/db/db.php');
	include_once('../modules/model/query/model.php');
?>
      
<script>
hola = function(){
	
	alert('hola');
}
</script>               
               
               
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Agregar Equipos</h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                    	<div class="col-lg-12">
                        <form action="../modules/controller/equipos/insert.php" method="post">
                            <div class="col-lg-3">
                                <label>No. Serie</label>
                                <input class="form-control" name="serie" placeholder="No.Serie" />
                            </div>
                            <div class="col-lg-3">
                                <label>Modelo</label>
                                <input class="form-control" name="modelo" placeholder="modelo" />
                            </div>
                            
                            <div class="col-lg-3">
                            	<label>Marca</label>
                                <select name="marca" id="marca" class="form-control">
                                <?php
									$query = new model();
									$marca = $query->load_marca();
										foreach($marca as $marc){
											if($marc['3']==1){
								?>
                                <option value="<?php echo $marc['0']; ?>"><?php echo $marc['1']; ?></option>
                                <?php }}?>
                                </select>  
                            </div>
                            <div class="col-lg-3">
                            	<label>Tipo</label>
                                <select name="tipo" id="tipo" class="form-control">
                                <?php
									$query2 = new model();
									$tipo = $query2->load_tipo();
										foreach($tipo as $type){
											if($type['3']==1){
								?>
                                <option value="<?php echo $type['0']; ?>"><?php echo $type['1']; ?></option>
                                <?php }}?>
                                </select>
                            </div>
                            <div class="row" align="center">
                            <div class="col-lg-12">
                             <div class="col-lg-2" align="center">
                                <br />
                                	<label>Clave</label>
                                    <select name="clave" id="clave" class="form-control">
                                    <?php
										$query3 = new model();
										$clave = $query3->load_clave();
										foreach($clave as $clav){
											if($clav['3']==1){
									?>
                                	<option value="<?php echo $clav['0']; ?>"><?php echo $clav['1']; ?></option>
                                	<?php }}?>
                                    </select> 
                             </div>
                             <div class="col-lg-2">
                               	<br>
                                	<label>...</label>
                                    <input class="form-control" name="nc">
                            </div>
                            </div>
                            </div>
                            
                            
                            <div class="row" align="center">
                            <div class="col-lg-12">
                            	<div class="col-lg-6">
                                  <br />
                                	<center>
                                    <label>Descripcion</label>
                                   	<textarea name="desc" class="form-control" rows="12" cols=""></textarea>
                                    </center>
                                    </div>
                                    <div class="col-lg-6">
                                  <br />
                                	<center>
                                    <label>Caracteristicas</label>
                                   	<textarea name="caract" class="form-control" rows="12" cols=""></textarea>
                                    </center>
                                    </div>
                                </div>   
                            </div>
                            
                            <div class="row">
                            <div class="col-lg-12">
                            <div class="col-lg-12">
                            <br />
                            <button type="submit" class="btn btn-success" style="width:100%;"><h3>Guardar</h3></button>
                            </div>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
      
   