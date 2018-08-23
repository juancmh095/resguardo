



<script>
function enviar(){
	var id = document.getElementById('id').value;
	var data = 'id='+id;
	$.ajax({
		
		type: 'post',
		url: '../modules/controller/resguardo/buscar1.php',
		data: data,
		success: function(resp){
			$("resultado").remove();
			$('#resultado').html(resp);
		}
		
	});
	return false;
}
</script>
<script>
function enviar2(){
	var fecha1 = document.getElementById('fecha1').value;
	var fecha2 = document.getElementById('fecha2').value;
	var data = {
		"fecha1" : fecha1,
		"fecha2" : fecha2
	};
	$.ajax({
		
		type: 'post',
		url: '../modules/controller/resguardo/buscar2.php',
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
                        <h1 class="page-header">Resguardos</h1>
                        
                        <div class="col-lg-12">
                        	
                        	<form method="post" id="form_search" onSubmit="return enviar()">
                        	<div class="col-lg-2">
                        		<label>Empleado</label>
                        		<input class="form-control" name="id" id="id" placeholder="empleado">
                        	</div>
                        	<div class="col-lg-2">
                        	<br>
                        		<button class="btn btn-success" type="submit"><span class="fa fa-search"></span></button>
                        	</div>
                        	</form>
                        	
                        	<form method="post" id="form_search2" onSubmit="return enviar2()">
                        	<div class="col-lg-3">
                        		<label>Fecha1</label>
                        		<input type="date" class="form-control" name="fecha1" id="fecha1">
                        	</div>
                        	<div class="col-lg-3">
                        		<label>Fecha2</label>
                        		<input type="date" class="form-control" name="fecha2" id="fecha2">
                        	</div>
                        	<div class="col-lg-2">
                        	<br>
                        		<button class="btn btn-success" type="submit"><span class="fa fa-search"></span></button>
                        	</div>
                        	
                        	</form>
                        	
                        </div>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                  
                </div>
                <!-- /.row -->
      <hr>
      
      
      
      <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Resguardos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Empleado</th>
                                        <th>Equipo</th>
                                        <th>Fecha</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="resultado">
                                    
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
   