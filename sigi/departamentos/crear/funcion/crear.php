<?php
class Formulario

	{

		function crearUsuario()
			{
				include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';
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
	                        <a href="/eweb2019/sigi/departamentos/">Departamentos</a>
	                        <i class="icon-angle-right"></i>
	                    </li>
	                    <li>
	                   		<i class="icon-plus"></i>
	                        <a href="#">Registrar Departamento</a>
	                    </li>
	                </ul>



	                <div class="box-content">

	                                

	                            <div class="row-fluid sortable ui-sortable">
	                <div class="box span12">
	                    <div class="box-header" data-original-title="">
	                        <h2><i class="halflings-icon user"></i><span class="break"></span>Registrar Departamento</h2>
	                        <div class="box-icon">
	                            
	                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
	                            
	                        </div>
	                    </div>
	                    <div class="box-content">';
	            
	                                if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
	                                    
	                                    
	                                    		$email = mysqli_real_escape_string($enlace, $_POST['email']);
	                                    		$titulo = mysqli_real_escape_string($enlace, $_POST['titulo']);
	                                        	$comentario = mysqli_real_escape_string($enlace, $_POST['comentario']);

	                                            // ingresamos los datos a la BD
												$reg = mysqli_query($enlace, "INSERT INTO dep (email, titulo, comentario) VALUES ('".$email."', '".$titulo."', '".$comentario."')");
							                if($reg) {
							                    echo '
							                    <div class="bg_velo">				                                                
								                    <div class="cont-msj">
									                    <div class="bord-exito"></div>
									                    <div class="alert alert-success aleta-exit">
															<strong>
																¡Bien hecho! Ha registrado correctamente el Departamento.
															</strong>
															<br />
															<a href="/eweb2019/sigi/departamentos/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>
							                    ';
							                }else {
							                    echo "ha ocurrido un error y no se registraron los datos.";
							                }
							            
							        
	                                } else {

	                                echo '
	                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/departamentos/crear/" enctype="multipart/form-data">
	                            <fieldset>
	                            

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Correo</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="email" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Departamento</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="titulo" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group hidden-phone">
	                                    <label class="control-label" for="textarea2"><strong>Comentario Adicional</strong></label>
	                                    <div class="controls">
	                                    <textarea style="width:270px; height:150px;" class="" name="comentario" id="textarea2" rows="3"></textarea>
	                                    </div>
	                                  </div>
	                                    ';                                                         
	                             
	                                    }
	                                
	                            echo '
	                            <div class="form-actions">
	                              <a id="show" class="btn btn-primary">Enviar</a>
	                              <button type="reset" class="btn">Limpiar</button>

	                              		<div id="element" class="ocultar bg_velo">		                              		
				                                <div class="cont-msj">
				                                    <div class="bord-pregunta"></div>
				                                    <div class="alert alert-block aleta-exit">
														<strong>
														¿Estas seguro que deseas registrar un Departamento?<br />
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

?>