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
	                   		<i class="icon-envelope-alt"></i>
	                        <a href="/eweb2019/sigi/departamentos/">Departamentos</a>
	                        <i class="icon-angle-right"></i>
	                    </li>
	                    <li>
	                   		<i class="icon-check"></i>
	                        <a href="#">Modificar Departamento</a>
	                    </li>
	                </ul>



	                    <div class="row-fluid sortable ui-sortable">
	                        <div class="box span12">
	                            <div class="box-header" data-original-title="">
	                                <h2><i class="halflings-icon edit"></i><span class="break"></span>Modificar Departamento</h2>
	                                <div class="box-icon">

	                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

	                                </div>
	                            </div>
	                            <div class="box-content">';
	                            $getid = base64_decode($_GET["id_dep"]);
				if (isset($getid))
					{
					$sql="select * from dep where id_dep='$getid' ";
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
								$email=$_POST['email'];
								$titulo=$_POST['titulo'];
								$comentario=$_POST['comentario'];
								$id_dep=$_POST['id_dep'];
								$actualizar=mysqli_query($enlace, "UPDATE dep SET email='".$email."', titulo='".$titulo."', comentario='".$comentario."' WHERE id_dep='".$getid."'");
								if ($actualizar)
									{
									echo '
				                    <div class="bg_velo">				                                                
					                    <div class="cont-msj">
						                    <div class="bord-exito"></div>
						                    <div class="alert alert-success aleta-exit">
												<strong>
													¡Bien hecho! El Departamento a sido modificado.
												</strong>
												<br />
												<a href="/eweb2019/sigi/solicitudes/" name="enviar" class="btn btn-success btn-acep">
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
		                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/departamentos/editar/?id_dep=';echo base64_encode($row["id_dep"]);echo '&';echo base64_encode($row["titulo"]);echo'" enctype="multipart/form-data">
		                            <fieldset>
		                            

		                                  
		           					  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Correo</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="email" id="focusedInput" type="text" value="'.$row["email"].'">
	                                  </div>

	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Departamento</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="titulo" id="focusedInput" type="text" value="'.$row["titulo"].'">
	                                  </div>

	                                  </div>

	                                  <div class="control-group hidden-phone">
	                                    <label class="control-label" for="textarea2"><strong>Comentario Adicional</strong></label>
	                                    <div class="controls">
	                                    <textarea style="width:270px; height:150px;" class="" name="comentario" id="textarea2"cols="7">'.$row["comentario"].'</textarea>
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
														¿Estas seguro que deseas realizar los cambios en el Departamento?<br />
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