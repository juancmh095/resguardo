<?php
	include_once('../modules/model/db/db.php');
	include_once('../modules/model/query/model.php');
?>

      <script>
function realizaProceso(valorCaja1){
        var parametros = {
                "valorCaja1" : valorCaja1
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   '../modules/controller/inbox/info.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#info").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        
						$("#info").html(response);
                }
        });
}
</script>
  
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
      	<div id="info"></div>
		</div>	  
      <div class="modal-footer">
        <p align="right">Quattuor</p>
      </div>
    </div>
  </div>
</div>  
               
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bandeja de entrada</h1>
                       <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       	<th>#</th>
                                        <th>Motivo</th>
                                        <th>Empleado</th>
                                        <th>Fecha</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <?php
									$query = new model();
									$res = $query->load_inbox();
									foreach($res as $inbox){
										if($inbox['3']==1){
									?>
                               	<tr>
                                	<td><?php echo $inbox['0']; ?></td>
                                	<td><?php echo $inbox['1']; ?></td>
                                	<td><?php echo $inbox['6']; ?></td>
                                	<td><?php echo $inbox['5']; ?></td>
                                	<td align="center">
                                		<a href="../modules/controller/inbox/eliminar.php?id=<?php echo $inbox['0']; ?>" class="btn btn-danger"><span class="fa  fa-trash-o"></span>  Eliminar</a>
                                		<a href="" class="btn btn-success" onClick="realizaProceso(<?php echo $inbox['0']; ?>)" data-toggle="modal" data-target="#myModal1"><span class="fa fa-search-plus"></span> Visualizar</a>
                                	</td>
                                </tr>
                                <?php }}?>
								</tbody>
		  				</table>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
      
   