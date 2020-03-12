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
		                        <a href="/eweb2019/sigi/">Home</a>
		                       <i class="icon-angle-right"></i>
		                    </li>
		                   <li>
		                   		<i class="icon-user"></i>
		                        <a href="/eweb2019/sigi/usuarios/">Usuarios</a>
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
	                                <h2><i class="halflings-icon edit"></i><span class="break"></span>Modificar Usuario</h2>
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
								$nombre = $_POST['nombre'];
								$apellido = $_POST['apellido'];
								$usuario_nombre = $_POST['usuario_nombre'];
								$usuario_email = $_POST['usuario_email'];
								$nif = $_POST['nif'];
								$tipo = $_POST['tipo'];
								$usuario_id = $_POST['usuario_id'];
								$actualizar = mysqli_query($enlace, "UPDATE usuarios SET nombre='".$nombre."', apellido='".$apellido."', usuario_nombre='".$usuario_nombre."', usuario_email='".$usuario_email."', nif='".$nif."', tipo='".$tipo."' WHERE usuario_id='".$usuario_id."'");
								if ($actualizar)
									{
									echo '
				                    <div class="bg_velo">				                                                
					                    <div class="cont-msj">
						                    <div class="bord-exito"></div>
						                    <div class="alert alert-success aleta-exit">
												<strong>
													¡Los datos fueron modificado correctamente!
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
		                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/usuarios/editar/?usuario_id='.$_GET["usuario_id"].'" enctype="multipart/form-data">
		                            <fieldset>
		                            

		                                  
		           					<input class="input-xlarge focused" name="usuario_id" id="focusedInput" type="hidden" value="'.$row["usuario_id"].'">

		                                  <div class="control-group">
		                                  <label class="control-label" for="focusedInput"><strong>Nombre</strong></label>
		                                  <div class="controls">
		                                    <input class="input-xlarge focused" name="nombre" id="focusedInput" type="text" value="'.$row["nombre"].'">
		                                  </div>
		                                  </div>

		                                  <div class="control-group">
		                                  <label class="control-label" for="focusedInput"><strong>Apellido</strong></label>
		                                  <div class="controls">
		                                    <input class="input-xlarge focused" name="apellido" id="focusedInput" type="text" value="'.$row["apellido"].'">
		                                  </div>
		                                  </div>

		                                  <div class="control-group">
		                                  <label class="control-label" for="focusedInput"><strong>Cedula</strong></label>
		                                  <div class="controls">
		                                    <input class="input-xlarge focused" name="nif" id="focusedInput" type="text" value="'.$row["nif"].'">
		                                  </div>
		                                  </div>

		                                  <div class="control-group">
		                                  <label class="control-label" for="focusedInput"><strong>Correo</strong></label>
		                                  <div class="controls">
		                                    <input class="input-xlarge focused" name="usuario_email" id="focusedInput" type="text" value="'.$row["usuario_email"].'">
		                                  </div>
		                                  </div>

		                                  <div class="control-group">
		                                  <label class="control-label" for="focusedInput"><strong>Usuario</strong></label>
		                                  <div class="controls">
		                                    <input class="input-xlarge focused" name="usuario_nombre" id="focusedInput" type="text" value="'.$row["usuario_nombre"].'">
		                                  </div>
		                                  </div>

		                                  <div class="control-group">
		                                  <label class="control-label" for="selectError3"><strong>Tipo de Usuario</strong></label>
		                                  <div class="controls">
		                                    <select style="width: 285px;" name="tipo" id="selectError3">
		                                        <option value="'.$row["tipo"].'">'.$row["tipo"].'</option>
		                                        <option value="">-- Seleccione un Tipo de Usuario--</option>
		                                        <option value="Administrador">Administrador</option>
		                                        <option value="Televenta">Televenta</option>
		                                        <option value="Backoffice">Backoffice</option>
		                                    </select>
		                                  </div>
		                                  </div>

		                                <div id="content">															

									</div>';
								}

							$i++;
							}
						}

							echo '
		                            <div class="form-actions">
		                              <a id="show" class="btn btn-primary">Enviar</a>

		                              	<div id="element" class="ocultar bg_velo">		                              		
				                                <div class="cont-msj">
				                                    <div class="bord-pregunta"></div>
				                                    <div class="alert alert-block aleta-exit">
														<strong>
														¿Estas seguro que deseas realizar los cambios?<br />
														</strong>
														<div class="cont-btn">
														<button type="submit" name="enviar" class="btn btn-warning sumit-btn-acep">Aceptar</button>
														<a class="btn btn-cancelar" href="#" id="hide">Cancelar</a>
														</div>
													</div>
												</div>											
										</div>
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