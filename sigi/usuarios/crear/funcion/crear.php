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
	                   		<i class="icon-user"></i>
	                        <a href="/eweb2019/sigi/usuarios/">Usuarios</a>
	                        <i class="icon-angle-right"></i>
	                    </li>
	                    <li>
	                   		<i class="icon-user"></i>
	                        <a href="#">Registrar Usuario</a>
	                    </li>
	                </ul>



	                <div class="box-content">

	                                

	                            <div class="row-fluid sortable ui-sortable">
	                <div class="box span12">
	                    <div class="box-header" data-original-title="">
	                        <h2><i class="halflings-icon user"></i><span class="break"></span>Registrar Usuario</h2>
	                        <div class="box-icon">
	                            
	                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
	                            
	                        </div>
	                    </div>
	                    <div class="box-content">';
	            
	                                if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
	                                    
	                                    
	                                    // creamos una función que nos parmita validar el email
							        function valida_email($correo) {
							            if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $correo)) return true;
							            else return false;
							        }
							        // Procedemos a comprobar que los campos del formulario no estén vacíos
							        $sin_espacios = count_chars($_POST['usuario_nombre'], 1);
							        if(!empty($sin_espacios[32])) { // comprobamos que el campo usuario_nombre no tenga espacios en blanco
							            echo "El campo <em>usuario_nombre</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
							        }elseif(empty($_POST['usuario_nombre'])) { // comprobamos que el campo usuario_nombre no esté vacío
							            echo "No haz ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
							        }elseif(empty($_POST['tipo'])) { // comprobamos que el campo usuario_nombre no esté vacío
							            echo "No haz ingresado un Tipo de Usuario. <a href='javascript:history.back();'>Reintentar</a>";
							        }elseif(empty($_POST['cliente'])) { // comprobamos que el campo cliente no esté vacío
							            echo "No haz ingresado un Cliente. <a href='javascript:history.back();'>Reintentar</a>";
							        }elseif(empty($_POST['usuario_clave'])) { // comprobamos que el campo usuario_clave no esté vacío
							            echo "No haz ingresado contraseña. <a href='javascript:history.back();'>Reintentar</a>";
							        }elseif($_POST['usuario_clave'] != $_POST['usuario_clave_conf']) { // comprobamos que las contraseñas ingresadas coincidan
							            echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
							        }elseif(!valida_email($_POST['usuario_email'])) { // validamos que el email ingresado sea correcto
							            echo "El email ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>";
							        }else {
							            // "limpiamos" los campos del formulario de posibles códigos maliciosos
							            $usuario_nombre = mysqli_real_escape_string($enlace, $_POST['usuario_nombre']);
							            $usuario_clave = mysqli_real_escape_string($enlace, $_POST['usuario_clave']);
							            $usuario_email = mysqli_real_escape_string($enlace, $_POST['usuario_email']);
							            $nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
							            $apellido = mysqli_real_escape_string($enlace, $_POST['apellido']);
							            $nif = mysqli_real_escape_string($enlace, $_POST['nif']);
							            $tipo = mysqli_real_escape_string($enlace, $_POST['tipo']);
							            $cliente = mysqli_real_escape_string($enlace, $_POST['cliente']);
							            // comprobamos que el usuario ingresado no haya sido registrado antes
							            $sql = mysqli_query($enlace, "SELECT usuario_nombre FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'");
							            if(mysqli_num_rows($sql) > 0) {
							                echo "El nombre usuario elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
							            }else {
							                $usuario_clave = md5($usuario_clave); // encriptamos la contraseña ingresada con md5
							                // ingresamos los datos a la BD
							                $reg = mysqli_query($enlace, "INSERT INTO usuarios (nombre, apellido, usuario_nombre, usuario_clave, usuario_email, nif, tipo, cliente) VALUES ('".$nombre."','".$apellido."','".$usuario_nombre."', '".$usuario_clave."', '".$usuario_email."', '".$nif."', '".$tipo."', '".$cliente."')");
							                if($reg) {
							                    echo '
							                    <div class="bg_velo">				                                                
								                    <div class="cont-msj">
									                    <div class="bord-exito"></div>
									                    <div class="alert alert-success aleta-exit">
															<strong>
																¡Los datos fueron modificado correctamente!<br>
																La clave temporal es del usuario es "inicio"
															</strong>
															<br />
															<a href="/eweb2019/sigi/usuarios/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>
							                    ';
							                }else {
							                    echo "ha ocurrido un error y no se registraron los datos.";
							                }
							            }
							        }
	                                }else {

	                                echo '
	                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/usuarios/crear/" enctype="multipart/form-data">
	                            <fieldset>
	                            

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Nombre</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="nombre" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Apellido</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="apellido" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Cedula</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="nif" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Correo</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="usuario_email" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Usuario</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="usuario_nombre" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"><strong>Tipo de Usuario</strong></label>
	                                  <div class="controls">
	                                    <select name="tipo" id="selectError3">
	                                        <option value="">-- Tipo de Usuario --</option>
	                                        <option value="Super Administrador">Super Administrador</option>
	                                        <option value="Administrador">Administrador</option>
	                                        <option value="Gestionador">Gestionador</option>
	                                        <option value="Creador">Creador</option>
	                                    </select>
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Cliente</strong></label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="cliente" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  
	                                  <input class="input-xlarge focused"	name="usuario_clave" id="focusedInput" type="hidden" value="inicio">
	                                  

	                                  
	                                  <input class="input-xlarge focused" name="usuario_clave_conf" id="focusedInput" type="hidden" value="inicio">
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

?>