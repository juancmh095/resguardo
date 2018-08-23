

      
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Clave</h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    
                    
                </div>
                <!-- /.row -->
      
      	<div class="row">
      		<div class="col-lg-12">
      			
      			<form action="../modules/controller/clave/clave.php" method="post">
      				<div class="col-lg-9">
      					<label>Nombre del área:</label>
      					<input type="text" name="nombre" class="form-control" placeholder="Nombre">
      					<br>
      					<label>Descripción</label>
      					<textarea name="desc" class="form-control" rows="5" cols=""></textarea>
      					<br>
      					<button type="submit" class="btn btn-success">Guardar</button>
      				</div>
      				
      			</form>
      			
      		</div>
      	</div>
      	
      	
      	<div class="row">
      	<br>
      	<br>
      	<hr>
      		<div class="col-lg-12">
      			 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Clave</th>
                                        <th>Descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
										$query = new model();
										$clave = $query->load_clave();
										foreach($clave as $clav){
										if($clav['3']==1){
								   ?>
                                    <tr class="odd gradeX" >
                                       	<td><?php echo $clav['1']; ?></td>
                                       	<td><?php echo $clav['2']; ?></td>
                                        <td style="text-align: center;"><a href="../modules/controller/clave/eliminar.php?id=<?php echo $clav['0']; ?>" class="btn btn-danger"><span class="fa  fa-power-off"></span> Eliminar</a></td>
                                     </tr>
                                     <?php }} ?>
                                </tbody>
                            </table>
      		</div>
      		
      	</div>
   