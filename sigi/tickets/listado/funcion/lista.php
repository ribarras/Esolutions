
<?php
class Formulario

	{

		function listarUsuario()
			{
				include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/cone.php';
				$dia = date('d-m-Y');
				echo '

	            <!-- start: Content -->
	            <div id="content" class="span10">
	                <ul class="breadcrumb">
	                    <li>
	                        <i class="icon-home"></i>
	                        <a href="/eweb2019/sigi/">Home</a>
	                       <i class="icon-angle-right"></i>
	                    </li>
	                   <li>
	                   		<i class="icon-list-alt"></i>
	                        <a href="#">Mis Tickets</a>

	                    </li>
	                </ul>



	                <div class="box-content">

	                			


	                            <div class="box-content">
	                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
	                                    <thead>
	                                        <tr>
	                                            <th style="text-align: center;">N Orden</th>
	                                            <th style="text-align: center;">Asunto</th>
	                                            
	                                            <th style="text-align: center;">Prioridad</th>
	                                            <th style="text-align: center;">Fecha</th>
	                                            <th style="text-align: center;">Estatus</th>
	                                            <th style="text-align: center;">Repuesta</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    ';

	         							$sql1="select id, asun, dep, prio, fcreacion, est, respuesta, mot from ticke where est='Abierto' or est='En Proceso' or est='Cerrado' ORDER by id ASC";

	                                    $rs1=mysqli_query($enlace, $sql1);
									      $i=0;
									      if(mysqli_num_rows($rs1)<1){
									        echo ""; 
									      }else{
									       

									       while ($row1 = mysqli_fetch_array($rs1)){
	                                        echo '
	                                        <tr>
	                                            <td style="text-align: center;">'.$row1["id"].'</td>
	                                            <td style="text-align: center;">'.substr($row1["asun"],0,30).'</td>
	                                            
	                                            <td style="text-align: center;">
	                                            ';	                                            
	                                            if ($row1['prio'] == 'Alta') {
						                        echo '
						                            <span style="color:#f89406;">
						                                <strong>'.$row1["prio"].'</strong>
						                            </span>
						                        ';
						                        } elseif ($row1['prio'] == 'Media') {
						                        echo '
						                            <span style="color:#2380e8;">
						                                <strong>'.$row1["prio"].'</strong>
						                            </span>
						                        ';
						                        
						                        } else {
						                        echo '
						                            
						                                <strong>'.$row1["prio"].'</strong>
						                            
						                        ';
						                        }	                                            
	                                            echo '</td>
	                                            <td style="text-align: center;">'.$row1["fcreacion"].'</td>
	                                            <td style="text-align: center;">'.$row1["est"].'</td>
	                                            <td style="text-align: center;">'.$row1["respuesta"].'</td>
	                                        </tr>
	                                     	';
	                                      $i++; 
									      }     
									      }
	                                    echo '

	                                    </tbody>
	                                </table>


	                                
	                            </div>
	                <!--///////////////////////////////////////////-->



	                </div>
			';
			}

	}

?>