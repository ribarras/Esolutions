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
	                   		<i class="icon-user"></i>
	                        <a href="#">Usuarios</a>

	                    </li>
	                </ul>



	                <div class="box-content">

	                			<a style="margin-bottom: 15px;" href="/eweb2019/sigi/usuarios/crear/" name="enviar" class="btn btn-primary">Registrar Nuevo Usuario</a>


	                            <div class="box-content">
	                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
	                                    <thead>
	                                        <tr>
	                                            <th>Nombre</th>
	                                            <th>Apellido</th>
	                                            <th>Ususario</th>
	                                            <th>Email</th>
	                                            <th>Tipo de Usuario</th>
	                                            <th>Cliente</th>
	                                            <th>Accion</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    ';

	                                    $sql="select * from usuarios";

	                                    $rs=mysqli_query($enlace, $sql);
									      $i=0;
									      if(mysqli_num_rows($rs)<1){
									        echo ""; 
									      }else{
									       

									       while ($row = mysqli_fetch_array($rs)){
	                                        echo '
	                                        <tr>
	                                            <td class="center">'.$row["nombre"].'</td>
	                                            <td class="center">'.$row["apellido"].'</td>
	                                            <td class="center">'.$row["usuario_nombre"].'</td>
	                                            <td class="center">'.$row["usuario_email"].'</td>
	                                            <td class="center">Usuario '.$row["tipo"].'</td>
	                                            <td class="center">'.$row["cliente"].'</td>
	                                            <td class="center">
	                                                <a class="btn btn-primary" href="/eweb2019/sigi/usuarios/editar/?usuario_id='.$row["usuario_id"].'">
	                                                    <i class="halflings-icon white edit"></i>
	                                                </a>
	                                                <!--<a class="btn btn-danger" href="/eweb2019/sigi/usuarios/eliminar/?usuario_id='.$row["usuario_id"].'">
	                                                    <i class="halflings-icon white trash"></i>
	                                                </a>-->
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