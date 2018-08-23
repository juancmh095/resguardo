<script>
  function sumar() {
	
  var total = 0;
  $(".monto").each(function() {

	 
	  
    if (isNaN(parseFloat($(this).val()))) {

      total += 0;

    } else {
		
      total = parseFloat($(this).val()) * ($("#litros").val()) ;
		
    }
	  

  });

	var lista = document.getElementById("precio");
	  lista2 = lista.selectedIndex + 1;
	  
	  $('#IDE').val(lista2);
	document.getElementById('total').value = total;
}
        </script> 
             
     
              
  
               
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Asignacion de combustible</h1>
                        <div class="row">
                        	<div class="col-lg-12">
                        		<form action="../modules/controller/combustible/com.php" method="post">
                        			<div class="col-lg-2">
                        				<label>Clv-empleado</label>
                        				<input name="empleado" class="form-control" type="text" placeholder="Clv-empleado" >
                        			</div>
                        			<div class="col-lg-1">
                        				<label>litros</label>
                        				<input name="litros" id="litros" class="form-control monto" type="number" min="0" placeholder="litros" onKeyUp="sumar();">
                        			</div>
                        			<div class="col-lg-3">
                        				<label>Combustible</label>
                        				
                        				<select class="form-control monto" id="precio" name="combustible" onKeyUp="sumar();">
                        				<?php 
											$query = new model();
											$com = $query->load_com();
											foreach($com as $combus){
											?>
                      						
                       						<option value="<?php echo $combus['2']; ?>"><?php echo $combus['1']." - ".$combus['2']; ?></option>
                       						
                       						<?php } ?>
                        				</select>
                        				
                        			</div>
                        			<div class="col-lg-2">
                        				<label>Cantidad(pesos)</label>
                        				<input class="form-control" name="pesos" id="total" placeholder="$$$$$">
                        			</div>
                        			<div class="col-lg-2">
                        				<label>Fecha</label>
                        				<input class="form-control" name="fecha" type="date">
                        			</div>
                        			<div class="col-lg-2">
                        			<br>
                        				<button type="submit" class="btn btn-success">Cargar</button>
                        			</div>
                        			<input id="IDE" class="hidden" name="id">
                        		</form>
                        	</div>
                        </div>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <br>
                <br>
                <br>
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Combustible asigando
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Empleado</th>
                                        <th>Combustible</th>
                                        <th>Fecha</th>
                                        <th>Litros</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
											$query = new model();
											$exe = $query->load_rcom();
										foreach($exe as $reporte){
										?>
                                    <tr class="odd gradeX">
                                      
                                       
                                        <td><?php echo $reporte['0']." ".$reporte['1']; ?></td>
                                        <td><?php echo $reporte['2']; ?></td>
                                        <td><?php echo $reporte['8']; ?></td>
                                        <td class="center"><?php echo $reporte['4']; ?></td>
                                        <td class="center"><?php echo $reporte['5']; ?></td>
                                        <td><a href="" class="btn btn-success center">Imprimir</a></td>
                                        
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
      
   