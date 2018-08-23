<?php
	include_once('../modules/model/db/db.php');
	include_once('../modules/model/query/model.php');
?>
    <script>
function enviar(){
	var tipo = document.getElementById('tipo').value;
	var disp = document.getElementById('estado').value;
	var data = {
		"tipo" : tipo,
		"disp" : disp
	};
	$.ajax({
		
		type: 'post',
		url: '../modules/controller/equipos/buscar_table.php',
		data: data,
		success: function(resp){
			$("resultado2").remove();
			$('#resultado2').html(resp);
			
		}
		
	});
	return false;
}
</script>
      
<script>
	
	serie = function(serie){
		$('#serie').val(serie);
	}
	serie2 = function(serie){
		$('#serie2').val(serie);
	}
	
</script>
<script>
function realizaProceso(serie){
        var parametros = {
                "serie" : serie
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   '../modules/controller/equipos/info.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        
						$("#resultado").html(response);
                }
        });
}
</script>
      


      <!---MOdales -->
      <!---Resguardo -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">RESGUARDO <span class="fa fa-archive"></span></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
       	<div class="col-lg-12">
       	<form action="../modules/controller/resguardo/insert_resguardo.php" method="post">
       		<div class="col-lg-4">
				<input class="hidden" name="user" value="<?php echo $_SESSION['id'];?>">
       			<input class="form-control hidden" name="serie" id="serie">	
       			<label>Clave que autoriza:</label>
       			<input class="form-control" name="autoriza" id="" placeholder="clv-autoriza">	
       		</div>
       		<div class="col-lg-4">
       			<label>Clave de empleado:</label>
       			<input class="form-control" name="empleado" id="" placeholder="Clv-empleado">
       		</div>
       		<div class="col-lg-4">
       			<label>Fecha:</label>
       			<input class="form-control" type="date" name="fecha">
       		</div>
       	</div>
       </div>
        <div class="row">
        	<div class="col-lg-12">
        		<div class="col-lg-12"><br>
        			<label>Nota:</label>
        			<textarea name="nota" class="form-control" rows="12" cols=""></textarea>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-lg-12">
        		<div class="col-lg-12"><br>
        			<button class="btn btn-success"><span class="fa fa-save"></span>  Guardar</button>
        		</div>
        	</div>
        </div>
      </div>
		  </form>
      <div class="modal-footer">
        <p align="right">Quattuor</p>
      </div>
    </div>
  </div>
</div>
              
                           
                                       
<!---Mantenimiento-->
 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Mantenimiento <span class="fa fa-wrench"></span></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../modules/controller/mantenimiento/insert_mant.php" method="post">
      <input class="hidden" name="serie" id="serie2">
      <div class="row">
       <div class="col-lg-12">
       	<div class="col-lg-12">
       		<label>Pieza de cambio(opcional)</label>
       		<input type="text" name="pieza" class="form-control" placeholder="Pieza-cambio">
       	</div>
       	<div class="col-lg-12">
       		<label>Fecha</label>
       		<input type="date" name="fecha" class="form-control" >
       	</div>
       </div>
      </div>
      <div class="row">
        	<div class="col-lg-12">
        		<div class="col-lg-12"><br>
        			<label>Problema:</label>
        			<textarea name="problema" class="form-control" rows="10" cols=""></textarea>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-lg-12">
        		<div class="col-lg-12"><br>
        			<button class="btn btn-success"><span class="fa fa-save"></span>  Guardar</button>
        		</div>
        	</div>
        </div>
		  </form>
		</div>	  
      <div class="modal-footer">
        <p align="right">Quattuor</p>
      </div>
    </div>
  </div>
</div>  

         	                                                                               
 <!-- mas info -->        	                                                                                 
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">+ informacion <span class="fa fa-archive"></span></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-lg-12">
                            <hr />
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>Caracteristicas</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <tr id="resultado" style="background: #1C1966; color: aliceblue;"></tr>
								</tbody>
		  </table>
       
      </div>
		</div>	  
      <div class="modal-footer">
        <p align="right">Quattuor</p>
      </div>
    </div>
  </div>
</div>         	                                                                                   
         	                                                                                       
          	                                                                               
               <!---MOdales -->
                
                   
                   
                   <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Equipos_Totales</h1>
                        <div class="col-lg-12">
                        <h4>Buscar</h4>
                        <hr />
                        <form method="post" id="form_search" onSubmit="return enviar()">
                        <div class="col-lg-3">
                        <select name="tipo" id="tipo" class="form-control">
                                <?php
									$query1 = new model();
									$tipo = $query1->load_tipo();
									foreach($tipo as $type){
								?>
                                <option value="<?php echo $type['0']; ?>"><?php echo $type['1'];?></option>
                                <?php }?>
                        </select>
                        </div>
                        <div class="col-lg-3">
                        <select name="estado" id="estado" class="form-control">
                        <option value="0">Disponibles</option>
                        <option value="1">Resguardo</option>
                        <option value="2">Mantenimiento</option>
                        <option value="3">Baja total</option>
                        </select>
                        </div>
                        <div class="col-lg-3">
                        <button type="submit" class="btn btn-success"><span class="fa fa-search"></span>    Buscar</button>
                        </div>
                        </form>
                        </div>
                        	
                        
                           
                           
                           
                           <div class="col-lg-12">
                            <hr />
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Numero de serie</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Tipo</th>
                                        <th>clave</th>
                                        <th>Estado</th>
                                        <th>...</th>
                                    </tr>
                                </thead>
                                <tbody id="resultado2">
                                   <?php 
									$query = new model();
									$table1 = $query->load_equipos();
									foreach($table1 as $result){
									?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $result['0']; ?></td>
                                        <td><?php echo $result['11']; ?></td>
                                        <td><?php echo $result['1']; ?></td>
                                        <td><?php echo $result['13']; ?></td>
                                        <td><?php echo $result['12'].$result['8']; ?></td>
                                       	<?php 
											if($result['5']==0){
										?>
                                        <td class="alert-success"><p>Disponible</p></td>
                                        <td align="center">
                                        	<a href="#myModal" class="btn btn-primary" title="Resguardo" data-toggle="modal" data-target="#myModal" onClick="serie(<?php echo $result['10']; ?>)"><span class="fa fa-archive"></span></a>
                                        	<a href="" class="btn btn-info" title="Mas informacion" data-toggle="modal" data-target="#myModal1" onClick="realizaProceso(<?php echo $result['10']; ?>)"><span class="fa fa-exclamation-circle"></span></a>
                                        	<a href="index.php?module=actualizar&serie=<?php echo $result['0']; ?>" class="btn btn-success" title="actualizar informacion"><span class="fa fa-pencil-square-o"></span></a>
                                        	<a href="" class="btn btn-warning" title="Dar mantenimiento" data-toggle="modal" data-target="#myModal2" onClick="serie2(<?php echo $result['10']; ?>)"><span class="fa fa-wrench" ></span></a>
                                        	<a href="../modules/controller/resguardo/back.php?&estado=3&serie=<?php echo $result['0']; ?>" class="btn btn-danger" title="Dar baja total"><span class="fa fa-warning"></span></a>
                                        </td>
                                        <?php 
											}else{
												if($result['5']==1){
													?>
													<td class="alert-info"><p>Resguardo</p></div></td>
                                        			<td align="center">
                                        	
                                        	<a href="../modules/controller/resguardo/back.php?&estado=0&serie=<?php echo $result['0']; ?>" class="btn btn-info" title="regresar almacen"><span class="fa fa-repeat"></span></a>
                                        	<a href="" class="btn btn-info" title="Mas informacion" data-toggle="modal" data-target="#myModal1" onClick="realizaProceso(<?php echo $result['10']; ?>)"><span class="fa fa-exclamation-circle"></span></a>
                                        	<a href="" class="btn btn-warning" title="Dar mantenimiento" data-toggle="modal" data-target="#myModal2" onClick="serie2(<?php echo $result['10']; ?>)"><span class="fa fa-wrench" ></span></a>
                                        	<a href="../modules/controller/resguardo/back.php?&estado=3&serie=<?php echo $result['0']; ?>" class="btn btn-danger" title="Dar baja total"><span class="fa fa-warning"></span></a>
                                        </td>
													<?php
												}else{
													if($result['5']==2){
														?>
														<td class="alert-warning"><p>Mantenimiento</p></div></td>
                                        				<td align="center">
                                        					<a href="../modules/controller/resguardo/back.php?&estado=0&serie=<?php echo $result['0']; ?>" class="btn btn-info" title="regresar almacen"><span class="fa fa-repeat"></span></a>
                                        					<a href="" class="btn btn-info" title="Mas informacion" data-toggle="modal" data-target="#myModal1" onClick="realizaProceso(<?php echo $result['10']; ?>)"><span class="fa fa-exclamation-circle"></span></a>
                                        	<a href="index.php?module=actualizar&serie=<?php echo $result['0']; ?>" class="btn btn-success" title="actualizar informacion"><span class="fa fa-pencil-square-o"></span></a>
                                        					<a href="../modules/controller/resguardo/back.php?&estado=3&serie=<?php echo $result['0']; ?>" class="btn btn-danger" title="Dar baja total"><span class="fa fa-warning"></span></a>
                                        				</td>
														<?php
													}else{
														if($result['5']==3){
															?>
															<td class="alert-danger"><p>Baja total</p></div></td>
                                        					<td align="center">
                                        						<a href="../modules/controller/resguardo/back.php?&estado=0&serie=<?php echo $result['0']; ?>" class="btn btn-info" title="regresar almacen"><span class="fa fa-repeat"></span></a>
                                        					</td>
															<?php
														}
													}
												}
											}
										?>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            </div>
                       
                    
  

        
                    
                </div>
            <!-- /.row -->
            
             
   