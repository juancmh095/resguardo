
<script>
function enviar(){
	var id = document.getElementById('id').value;
	var data = 'id='+id;
	$.ajax({
		
		type: 'post',
		url: '../modules/controller/empleado/buscar.php',
		data: data,
		success: function(resp){
			$("resultado").remove();
			$('#resultado').html(resp);
		}
		
	});
	return false;
}
</script>
      
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Empleados</h1>
                        
                    </div>
                    <div class="row">
                    <form action="../modules/controller/empleado/insert.php" method="post">
                    	<div class="col-lg-12">
                    		<div class="col-lg-3">
                    			<label>Quat+</label>
                    			<input class="form-control" name="id_emp" placeholder="id_emp">
                    		</div>
                    	</div>
                    </div>
                    <div class="row">
                  <br>
                    	<div class="col-lg-12">
                        
                            <div class="col-lg-3">
                            	<input class="form-control" placeholder="Nombre" name="nombre" />
                            </div>
                            <div class="col-lg-3">
                            	<input class="form-control" placeholder="Ap_Paterno" name="Ap_Paterno" />
                            </div>
                            <div class="col-lg-3">
                            	<input class="form-control" placeholder="Ap_Materno" name="Ap_Materno" />
                            </div>
                            <div class="col-lg-3">
                            	<select name="area" id="tipo" class="form-control">
                                <?php
									$query1 = new model();
									$tipo = $query1->load_area();
									foreach($tipo as $type){
										if($type['3']==1){
								?>
                                <option value="<?php echo $type['0']; ?>"><?php echo $type['1'];?></option>
                                <?php }}?>
                        </select>
                            </div>
                            <div class="row">
                            <br />
                            	<div class="col-lg-12">
                                	<div class="col-lg-12">
                                	<br>
                                		<button class="btn btn-success">Guardar</button>
                                	</div>
                                </div>
								
                            </div>
                           </form> 
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                 <div class="row">
                 <div class="col-lg-12">
                            <hr />
                            <form style="float:right;" method="post" id="form_search" onSubmit="return enviar()">
                             <div class="col-lg-3">
                            <button class="btn btn-success" id="btn" type="submit">Buscar</button>
                            </div>
                            <div class="col-lg-9">
                            <input class="form-control" placeholder="ID" id="id" />
                            </div>
                           
                            </form>
                           
                        </div>
                    <div class="col-lg-12">
                        
                    <hr />
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Area</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                
                                <tbody id="resultado">
                                  
                                   <?php 
									$table = $query1->load_empleado();
									foreach($table as $emp){
									?>
                                    <tr class="odd gradeX" >
                                        <td><?php echo $emp['0']; ?></td>
                                        <td><?php echo $emp['1']; ?></td>
                                        <td><?php echo $emp['2']." ".$emp['3']; ?></td>
                                        <td><?php echo $emp['5']; ?></td>
                                        <td></td>
                                     </tr>
                                    <?php }?>
                                   
                                </tbody>
                            </table>
                    </div>
                 </div>   
      
   