<?php
class Formulario

	{

	function RecuContrasena()
		{

			/*//////////////////////////////////////////////////////*/
			session_start();
	        if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos del formulario
	            if(empty($_POST['usuario_nombre'])) {
	                echo "No ha ingresado el usuario. <a href='javascript:history.back();'>Reintentar</a>";
	            }else {
	                $usuario_nombre = mysqli_real_escape_string($enlace, $_POST['usuario_nombre']);
	                $usuario_nombre = trim($usuario_nombre);
	                $sql = mysqli_query($enlace, "SELECT * FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'");
	                if(mysqli_num_rows($sql)) {
	                    $row = mysqli_fetch_assoc($sql);
	                    $num_caracteres = "10"; // asignamos el número de caracteres que va a tener la nueva contraseña
	                    $nueva_clave = substr(md5(rand()),0,$num_caracteres); // generamos una nueva contraseña de forma aleatoria
	                    $usuario_nombre = $row['usuario_nombre'];
	                    $usuario_clave = $nueva_clave; // la nueva contraseña que se enviará por correo al usuario
	                    $usuario_clave2 = md5($usuario_clave); // encriptamos la nueva contraseña para guardarla en la BD
	                    $usuario_email = $row['usuario_email'];
	                    // actualizamos los datos (contraseña) del usuario que solicitó su contraseña
	                    mysqli_query($enlace, "UPDATE usuarios SET usuario_clave='".$usuario_clave2."' WHERE usuario_nombre='".$usuario_nombre."'");
	                        // Enviamos por email la nueva contraseña
	                        $Support        =  $usuario_email;
	                        $SNombre        = "GAL";    
	                        $destinatario   = "asfas";    
	                        $asunto         = "Clave Temporal -" . date("d/m/Y");
	                        $cuerpo = 
	                        '
	                        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
	                        <html>
	                            <head>
	                                <title>Prueba Sipic de 10.0.1.139</title>
	                                <meta http-equiv=Content-Type content="text/html; charset=utf-8">
	                            </head>
	                            <body>

	                            	Estimado Usuario, reciba un cordial saludo de parte del Sistema GIATC TRACKER GPS. Le informamos que la recuperacion de contraseña, fue realizado exitosamente bajo la clave temporal "'.$usuario_clave.'" en fecha '.date("d/m/Y").'.<br><br>
									Gracias por preferir los productos y servicios del Banco de Venezuela.<br><br>
									Para más información puede escribir a soporte.sbo@sltracker.com.<br>
									Saludos Cordiales.<br>
	                            
	                            </body>
	                        </html>
	                        '; 
	                        require("includesPHPMailer/class.phpmailer.php");
	                        $mail = new PHPMailer (); 
	                        $mail->From = "televentas@sltracker.com"; 
	                        $mail->FromName = "Clave Temporal"; 
	                        $mail->AddAddress($Support,$SNombre);
	                        //$mail->addBCC("rzerpa@foresightgps.com","rzerpa@foresightgps.com");
	                        //$mail->addBCC("nrodriguez@sltracker.com","nrodriguez@sltracker.com"); 
	                        $mail->Subject = $asunto;
	                        $mail->Body = $cuerpo;
	                        $mail->IsHTML (true); 
	                        $mail->CharSet = "iso-8859-1"; 
	                        $mail->IsSMTP(); 
	                        include 'connectmail.php';
	                        if(!$mail->Send()) { 
	                            echo "Kevin ". $mail->ErrorInfo; 
	                            exit;
	                        }else{ echo "
	                        <div class='top-content'>
	                            
	                            <div class='inner-bg'>
	                                <div class='container'>
	                                    
	                                    <div class='row'>
	                                        <div class='col-sm-5'>
	                                            <div class='form-box'>
	                                                <div class='form-top'>
	                                                    <div class='form-top-left'>
	                                                        <h3>Su clave temporal fue enviada a tu correo electronico</h3>

	                                                    </div>
	                                                    <div class='form-top-right'>
	                                                        <i class='fa fa-pencil'></i>
	                                                    </div>
	                                                </div>
	                                                <div class='form-bottom'>
	                                                <p><a href='acceso.php'>Intentar Nuevamente</a></p>
	                                                </div>
	                                            </div>
	                                            
	                                        </div>
	                                        
	                                        <div class='col-sm-5'>
	                                            
	                                            
	                                            
	                                        </div>
	                                        
	                                    </div>
	                                    
	                                </div>
	                            </div>
	                            
	                        </div>
	                        ";
	                                }
	                        //
	                    //
	                }else {
	                    echo "El usuario <strong>".$usuario_nombre."</strong> no está registrado. <a href='javascript:history.back();'>Reintentar</a>";
	                }

	                //
	            }
	        }else {
		    echo '
		    <!--///////////////////////////-->
		        <!-- Top content -->
		        <div class="top-content">
		            
		            <div class="inner-bg">
		                <div class="container">
		                    
		                    <div class="row">
		                        <div class="col-sm-5">
		                            <div class="form-box">
		                                <div class="form-top">
		                                    <div class="form-top-left">
		                                        <h3>Recuperar Contraseña</h3>
		                                        <p>Introduzca su usuario:</p>
		                                    </div>
		                                    <div class="form-top-right">
		                                        <i class="fa fa-pencil"></i>
		                                    </div>
		                                </div>
		                                <div class="form-bottom">
		                                    <form role="form" action="recuperar_contrasena.php" method="post" class="registration-form">
		                                        <div class="form-group">
		                                            <label class="sr-only" for="form-first-name">Nombre Usuario</label>
		                                            <input type="text" name="usuario_nombre" placeholder="Nombre Usuario" class="form-first-name form-control" id="form-first-name">
		                                        </div>
		                                        <button type="submit" name="enviar" class="btn">Enviar</button>
		                                    </form>
		                                </div>
		                            </div>
		                            
		                        </div>
		                        
		                        <div class="col-sm-5">
		                            
		                            
		                            
		                        </div>
		                        
		                    </div>
		                    
		                </div>
		            </div>
		            
		        </div>
		    ';
		    }
			/*//////////////////////////////////////////////////////*/
		}

	}

?>