<?php
class Formulario

	{

		function CambiarContrasena()
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
                        <a href="/eweb2019/sigi/perfil/">Perfil</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <i class="icon-lock"></i>
                        <a href="#">Cambiar Contraseña</a>
                    </li>
                </ul>



                <div class="box-content">
        ';
            if(isset($_SESSION['usuario_nombre'])) { // comprobamos que la sesión esté iniciada
                if(isset($_POST['enviar'])) {
                    if($_POST['usuario_clave'] != $_POST['usuario_clave_conf']) {
                        echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
                    }else {
                        $usuario_nombre = $_SESSION['usuario_nombre'];
                        $usuario_clave = mysqli_real_escape_string($enlace, $_POST["usuario_clave"]);
                        $usuario_clave = md5($usuario_clave); // encriptamos la nueva contraseña con md5
                        $sql = mysqli_query($enlace, "UPDATE usuarios SET usuario_clave='".$usuario_clave."' WHERE usuario_nombre='".$usuario_nombre."'");
                        if($sql) {
                            echo '<div class="bg_velo">				                                                
								                    <div class="cont-msj">
									                    <div class="bord-exito"></div>
									                    <div class="alert alert-success aleta-exit">
															<strong>
																¡La contraseña fue cambiada exitosamente!
															</strong>
															<br />
															<a href="/eweb2019/sigi/perfil/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>';
                        }else {
                            echo '
                            <div class="alert alert-error">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Error: No se pudo cambiar la contraseña. <a href="user.php">Volver</a>
                            </div>
                            ';
                        }
                    }
                }else {
                    echo '
        
        <div class="container mregister">
            <div id="login">
            <h1>Cambiar Contraseña</h1>
            <form class="form-horizontal" action="/eweb2019/sigi/perfil/ccontrasena/" method="post">
                

                <div class="control-group">
                    <label class="control-label" for="focusedInput">Nueva contraseña:</label>
                    <div class="controls">
                        <input class="input-xlarge focused" name="usuario_clave" id="focusedInput" type="password" value="">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="focusedInput">Confirmar:</label>
                    <div class="controls">
                        <input class="input-xlarge focused" name="usuario_clave_conf" id="focusedInput" type="password" value="">
                    </div>
                </div>

                <button style="margin-left: 10px;" name="enviar" type="submit" class="btn btn-primary">Crear</button>
            </form>
            </div>
        </div>
   
    ';
            }
        }else {
            header("Location: /eweb2019/sigi/login/");
        }
        echo "</div>";

			}
		}

?>