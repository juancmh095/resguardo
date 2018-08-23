<?php
	include_once('../../model/db/db.php');
	include_once('../../model/query/model.php');


	$tipo = $_POST['tipo'];
	$estado = $_POST['disp'];

 
									$query = new model();
									$table1 = $query->load_equipos_estado($estado, $tipo);
									foreach($table1 as $result){
									if($result['5']==0){
                                  echo "<tr class='odd gradeX'>
                                        <td>".$result['0']."</td>
                                        <td>".$result['11']."</td>
                                        <td>".$result['1'] ."</td>
                                        <td>".$result['13']."</td>
                                        <td>".$result['12'].$result['8']."</td>".
                                       	
											
										
                                        "<td class='alert-success'><p>Disponible</p></td>
                                        <td align='center''>
                                        	<a href='#myModal' class='btn btn-primary' title='Resguardo' data-toggle='modal' data-target='#myModal' onClick='serie(". $result['10'].")'><span class='fa fa-archive'></span></a>
                                        	<a href='' class='btn btn-info' title='Mas informacion' data-toggle='modal' data-target='#myModal1' onClick='realizaProceso(".$result['10'].")'><span class='fa fa-exclamation-circle'></span></a>
                                        	<a href='index.php?module=actualizar&serie=".$result['0']."' class='btn btn-success' title='actualizar informacion'><span class='fa fa-pencil-square-o'></span></a>
                                        	<a href='' class='btn btn-warning' title='Dar mantenimiento' data-toggle='modal' data-target='#myModal2' onClick='serie2(".$result['10'].")'><span class='fa fa-wrench' ></span></a>
                                        	<a href='../modules/controller/resguardo/back.php?&estado=3&serie=".$result['0']."' class='btn btn-danger'' title='Dar baja total'><span class='fa fa-warning'></span></a>
                                        </td></tr>";
                                         
											}else{
										if($result['5']==1){
                                  echo "<tr class='odd gradeX'>
                                        <td>".$result['0']."</td>
                                        <td>".$result['11']."</td>
                                        <td>".$result['1'] ."</td>
                                        <td>".$result['13']."</td>
                                        <td>".$result['12'].$result['8']."</td>".
                                       	
											
										
                                        "<td class='alert-info'><p>Resguardo</p></td>
                                        <td align='center''>
											<a href='../modules/controller/resguardo/back.php?&estado=0&serie=".$result['0']."' class='btn btn-info' title='regresar almacen'><span class='fa fa-repeat'></span></a>
                                        	<a href='' class='btn btn-info' title='Mas informacion' data-toggle='modal' data-target='#myModal1' onClick='realizaProceso(".$result['10'].")'><span class='fa fa-exclamation-circle'></span></a>
                                        	<a href='index.php?module=actualizar&serie=".$result['0']."' class='btn btn-success' title='actualizar informacion'><span class='fa fa-pencil-square-o'></span></a>
                                        	<a href='' class='btn btn-warning' title='Dar mantenimiento' data-toggle='modal' data-target='#myModal2' onClick='serie2(".$result['10'].")'><span class='fa fa-wrench' ></span></a>
                                        	<a href='../modules/controller/resguardo/back.php?&estado=3&serie=".$result['0']."' class='btn btn-danger'' title='Dar baja total'><span class='fa fa-warning'></span></a>
                                        </td></tr>";
										}else{
											
											if($result['5']==2){
												 echo "<tr class='odd gradeX'>
                                        <td>".$result['0']."</td>
                                        <td>".$result['11']."</td>
                                        <td>".$result['1'] ."</td>
                                        <td>".$result['13']."</td>
                                        <td>".$result['12'].$result['8']."</td>".
                                       	
											
										
                                        "<td class='alert-warning'><p>Mantenimiento</p></td>
                                        <td align='center''>
											<a href='../modules/controller/resguardo/back.php?&estado=0&serie=".$result['0']."' class='btn btn-info' title='regresar almacen'><span class='fa fa-repeat'></span></a>
                                        	<a href='' class='btn btn-info' title='Mas informacion' data-toggle='modal' data-target='#myModal1' onClick='realizaProceso(".$result['10'].")'><span class='fa fa-exclamation-circle'></span></a>
                                        	<a href='index.php?module=actualizar&serie=".$result['0']."' class='btn btn-success' title='actualizar informacion'><span class='fa fa-pencil-square-o'></span></a>
                                        	<a href='../modules/controller/resguardo/back.php?&estado=3&serie=".$result['0']."' class='btn btn-danger'' title='Dar baja total'><span class='fa fa-warning'></span></a>
                                        </td></tr>";
												
											}else{
												
												if($result['5']== 3){
													
													 echo "<tr class='odd gradeX'>
                                        <td>".$result['0']."</td>
                                        <td>".$result['11']."</td>
                                        <td>".$result['1'] ."</td>
                                        <td>".$result['13']."</td>
                                        <td>".$result['12'].$result['8']."</td>".
                                       	
											
										
                                        "<td class='alert-danger'><p>Baja Total</p></td>
                                        <td align='center''>
											<a href='../modules/controller/resguardo/back.php?&estado=0&serie=".$result['0']."' class='btn btn-info' title='regresar almacen'><span class='fa fa-repeat'></span></a>
                                        </td></tr>";
													
												}
												
											}
										}
										
									}
										
										
										
									}
?>