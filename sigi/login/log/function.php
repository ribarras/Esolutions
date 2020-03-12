<?php
class Formulario

	{

	function LoginSist()
		{

			/*//////////////////////////////////////////////////////*/
			session_start();
		    if(empty($_SESSION['usuario_nombre'])) { // comprobamos que las variables de sesión estén vacías        
			echo '
	        <!-- Top content -->
	        <div class="top-content">	        	
	            <div class="inner-bg">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-sm-5">	                        	
	                        	<div class="form-box">
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Portal de Soporte</h3>
		                            		<p>Introduzca su usuario y contraseña:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-lock"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
					                    <form action="comprobar.php" method="post" class="login-form">
					                    	<div class="form-group">
					                    		<label class="sr-only" for="form-username">Usuario</label>
					                        	<input type="text" name="usuario_nombre" placeholder="Usuario" class="form-username form-control" id="form-username">
					                        </div>
					                        <div class="form-group">
					                        	<label class="sr-only" for="form-password">Contraseña</label>
					                        	<input type="password" name="usuario_clave" placeholder="Contraseña" class="form-password form-control" id="form-password">
					                        </div>
					                        <button type="submit" name="enviar" class="btn">Ingresar!</button>
	                                        <p style="text-align: center;"><a href="recuperar_contrasena.php">Olvido su Contraseña</a></p>
					                    </form>
				                    </div>
			                    </div>	                        
	                        </div>
	                    </div>
	                    
	                </div>
	            </div>
	            
	        </div>	
			';
		    }else {
		    	//echo '<p>Hola <strong>'.$_SESSION["usuario_nombre"].'</strong> | <a href="logout.php">Salir</a></p>';
		    	header("Location: ../home/");
		    }
			/*//////////////////////////////////////////////////////*/
		}

	}

?>