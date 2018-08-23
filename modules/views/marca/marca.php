

      
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Marcas</h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    
                    
                </div>
                <!-- /.row -->
      
      	<div class="row">
      		<div class="col-lg-12">
      			
      			<form action="../modules/controller/marca/marca.php" method="post">
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
                                        <th>Area</th>
                                        <th>Descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
									$query = new model();
									$tipo = $query->load_marca();
									foreach($tipo as $type){
										if($type['3']==1){
								   ?>
                                    <tr class="odd gradeX" >
                                       	<td><?php echo $type['1']; ?></td>
                                       	<td><?php echo $type['2']; ?></td>
                                        <td style="text-align: center;"><a href="../modules/controller/marca/eliminar.php?id=<?php echo $type['0']; ?>" class="btn btn-danger"><span class="fa  fa-power-off"></span> Eliminar</a></td>
                                     </tr>
                                     <?php }} ?>
                                </tbody>
                            </table>
      		</div>
      		
      	</div>
   