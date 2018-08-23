
<script>
example = function(id){
	$("#ide").val(id);
}
</script>
      
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
          <form action="../modules/controller/combustible/act.php" method="post">
                <label>Precio</label>  
                <input id="ide" name="id" class="hidden">
                <input class="form-control" name="precio">
                <button type="submit" class="btn btn-success">Actualizar</button>                        
		  </form>                   
      </div>
		</div>	  
      <div class="modal-footer">
        <p align="right">Quattuor</p>
      </div>
    </div>
  </div>
</div>  
               <!--modal--> 
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><span class="fa fa-automobile"></span></h1>
                        
                        <form action="../modules/controller/combustible/tipo.php" method="post">
                        	
                        	<div class="col-lg-6">
                        	<label>Nombre del combustible(Lugar)</label>
                        		<input class="form-control" placeholder="Nombre" name="nombre">
                        	</div>
                        	<div class="col-lg-3">
                        	<label>Precio</label>
                        		<input class="form-control" placeholder="precio" name="precio">
                        	</div>
                        	<div class="col-lg-3">
                        	<br>
                        		<button type="submit" class="btn btn-success">Guardar</button>
                        	</div>
                        	
                        </form>
                        
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
                                        <th>#</th>
                                        <th>Combustible</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
											$query = new model();
											$exe = $query->load_com();
										foreach($exe as $reporte){
										?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $reporte['0']; ?></td>
                                        <td><?php echo $reporte['1']; ?></td>
                                        <td><?php echo $reporte['2']; ?></td>
                                       	<td><a href="" class="btn btn-info" data-toggle="modal" data-target="#myModal1" onClick="example(<?php echo $reporte['0']; ?>)">editar</a></td>
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