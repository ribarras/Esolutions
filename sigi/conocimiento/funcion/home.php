<?php
class Formulario

	{

		function homeSistem()
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
	                   		<i class="icon-tasks"></i>
	                        <a href="#">Base de Conocimiento</a>
	                    </li>
	                </ul>



	                <div class="box-content">

	                			

	                            <div class="box-content">
	                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
	                                    <thead>
	                                        <tr>
	                                            <th style="text-align: center;">N Orden</th>
	                                            <th style="text-align: center;">Asunto</th>
	                                            <th style="text-align: center;">Motivo</th>
	                                            <th style="text-align: center;">Accion</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    ';

	         							$sql1="select id, asun, mot, est from ticke where est='Cerrado' ORDER by id ASC";

	                                    $rs1=mysqli_query($enlace, $sql1);
									      $i=0;
									      if(mysqli_num_rows($rs1)<1){
									        echo ""; 
									      }else{
									       

									       while ($row1 = mysqli_fetch_array($rs1)){
	                                        echo '
	                                        <tr>
	                                            <td style="text-align: center;">'.$row1["id"].'</td>
	                                            <td style="text-align: center;">'.$row1["asun"].'</td>
	                                            <td style="text-align: center;">'.$row1["mot"].'</td>
	                                            <td style="text-align: center;">
	                                                <a class="btn btn-primary" href="/eweb2019/sigi/conocimiento/editar/?id=';echo base64_encode($row1["id"]);echo '&';echo base64_encode($row1["fcreacion"]);echo '&';echo base64_encode($row1["est"]);echo '&';echo base64_encode($row1["prio"]);echo'">
	                                                    <i class="halflings-icon white book"></i>
	                                                </a>
	                                            </td>
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