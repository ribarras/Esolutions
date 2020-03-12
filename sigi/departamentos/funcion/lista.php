<?php
class Formulario

	{

		function listarSolicitudes()
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
	                   		<i class="icon-envelope-alt"></i>
	                        <a href="#">Departamentos</a>

	                    </li>
	                </ul>



	                <div class="box-content">

	                			<a style="margin-bottom: 15px;" href="/eweb2019/sigi/departamentos/crear/" name="enviar" class="btn btn-primary">Nuevo Departamento</a>

	                            <div class="box-content">
	                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
	                                    <thead>
	                                        <tr>
	                                            <th>N Orden</th>
	                                            <th>Correo</th>
	                                            <th>Departamento</th>
	                                            <th>Comentario</th>
	                                            <th>Accion</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    ';

	                                    $sql="select id_dep, email, titulo, comentario from dep";

	                                    $rs=mysqli_query($enlace, $sql);
									      $i=0;
									      if(mysqli_num_rows($rs)<1){
									        echo ""; 
									      }else{
									       

									       while ($row = mysqli_fetch_array($rs)){
	                                        echo '
	                                        <tr>
	                                            <td class="center">'.$row["id_dep"].'</td>
	                                            <td class="center">'.$row["email"].'</td>
	                                            <td class="center">'.$row["titulo"].'</td>
	                                            <td class="center">'.substr($row["comentario"],0,30).'</td>
	                                            <td class="center">
	                                                <a class="btn btn-primary" href="/eweb2019/sigi/departamentos/editar/?id_dep=';echo base64_encode($row["id_dep"]);echo '&';echo base64_encode($row["titulo"]);echo'">
	                                                    <i class="halflings-icon white edit"></i>
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