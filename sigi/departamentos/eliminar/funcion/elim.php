<?php
class Formulario

	{

function editarUsuario()
	{
		include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';
		$dia = date('d-m-Y');
		// ------------------------------------------------------------------------------
				echo '
		            <!-- start: Content -->
		            <div id="content" class="span10">
		                <ul class="breadcrumb">
		                    <li>
		                        <i class="icon-home"></i>
		                        <a href="/eweb2019/sigi/F">Home</a>
		                       <i class="icon-angle-right"></i>
		                    </li>
		                   <li>
		                   		<i class="icon-user"></i>
		                        <a href="/eweb2019/sigi/tcierres.php">Usuarios</a>
		                        <i class="icon-angle-right"></i>
		                    </li>
		                    <li>
		                   		<i class="icon-edit"></i>
		                        <a href="#">Modificar Usuario</a>
		                    </li>
		                </ul>



	                    <div class="row-fluid sortable ui-sortable">
	                        <div class="box span12">
	                            <div class="box-header" data-original-title="">
	                                <h2><i class="halflings-icon edit"></i><span class="break"></span>Tipo de Cierre</h2>
	                                <div class="box-icon">

	                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

	                                </div>
	                            </div>
	                            <div class="box-content">';
				if (isset($_GET["usuario_id"]))
					{
					$sql = "select * from usuarios where usuario_id='$_GET[usuario_id]'";
					$rs = mysqli_query($enlace, $sql);
					$i = 0;
					if (mysqli_num_rows($rs) < 1)
						{
						echo "";
						}
					  else
						{
						while ($row = mysqli_fetch_array($rs))
							{
							if (isset($_POST['enviar']))
								{

								$usuario_id=$_GET['usuario_id'];
								$actualizar=mysqli_query($enlace, "DELETE FROM usuarios WHERE usuario_id='".$usuario_id."'");
								if ($actualizar)
									{
									echo '
				                    <div class="bg_velo">				                                                
					                    <div class="cont-msj">
						                    <div class="bord-exito"></div>
						                    <div class="alert alert-success aleta-exit">
												<strong>
													¡El registro fue eliminado satisfactoriamente!
												</strong>
												<br />
												<a href="/eweb2019/sigi/usuarios/" name="enviar" class="btn btn-success btn-acep">
													Aceptar
												</a>
											</div>
										</div>
									</div>
				                    ';
									}
								  else
									{
									echo "n";
									}
								}
							  else
								{
								echo '
		                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/usuarios/eliminar/?usuario_id='.$_GET["usuario_id"].'" enctype="multipart/form-data">
		                            <fieldset>
		                            

		                                  
		           					<input class="input-xlarge focused" name="usuario_id" id="focusedInput" type="hidden" value="'.$row["usuario_id"].'">

		                                  <div id="element" class="bg_velo">		                              		
				                                <div class="cont-msj">
				                                    <div class="bord-pregunta"></div>
				                                    <div class="alert alert-block aleta-exit">
														<strong>
														¿Estas seguro que deseas eliminar el registro?<br />
														</strong>
														<div class="cont-btn">
														<button type="submit" name="enviar" class="btn btn-success sumit-btn-acep">Aceptar</button>
														<a class="btn btn-danger btn-cancelar" href="/eweb2019/sigi/usuarios/" id="hide">Cancelar</a>
														</div>
													</div>
												</div>											
										</div>

		                                															

									</div>';
								}

							$i++;
							}
						}

							echo '
		                            <div class="form-actions">

		                              	
		                            </div>
		                            </fieldset>   
		                            </form>
		                    </div>
		                </div><!--/span-->
		            </div>        
					<!--///////////////////////////////////////////-->
		            </div>';
					}
			}

	}

?>