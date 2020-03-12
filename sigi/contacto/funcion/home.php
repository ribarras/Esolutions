<?php
class Formulario

	{

		function homeSistem()
			{
			
			include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';
				$dia = date('d-m-Y h:i:s');

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
	                   		<i class="icon-book"></i>
	                        <a href="#">Contacto</a>
	                    </li>
	                </ul>



	                <div class="box-content">

	                                

	                            <div class="row-fluid sortable ui-sortable">
	                <div class="box span12">
	                    <div class="box-header" data-original-title="">
	                        <h2><i class="halflings-icon plus"></i><span class="break"></span>Contacto</h2>
	                        <div class="box-icon">
	                            
	                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
	                            
	                        </div>
	                    </div>
	                    <div class="box-content">';
	            
	                                if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
	                                    
	                                    $correo=$_POST['correo'];
										$nombre=$_POST['nombre'];
										$comentario=$_POST['comentario'];
	                                    
	                                    $Support        = "kevin.chirinos.28@gmail.com";
									    $SNombre        = "kchirinos";    
									    $destinatario   = "'giatc'";    
									    $asunto         = "Sugerencias del Usuario - ".date("d/m/Y");
									    $cuerpo = 
									    '
									    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
									    <html>
									        <head>
									            <title>GIATC</title>
									            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
									        </head>
									        <body>
									        Sugerencias de usuario<br><br>

									        <strong>Correo</strong>:<br> '.$_POST['correo'].'<br><br>
									        <strong>Nombre</strong>:<br> '.$_POST['nombre'].'<br><br>
									        <strong>Comentario</strong>:<br> '.$_POST['comentario'].'<br><br>

									        Tomar en cuenta<br>
									        </body>
									    </html>
									    '; 
									    require("includesPHPMailer/class.phpmailer.php");
									    $mail = new PHPMailer (); 
									    $mail->From = "sistemas@sltracker.com"; 
									    $mail->FromName = "Sugencias de Contacto"; 
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
									    }else{ 
									    	echo '
							                    <div class="bg_velo">				                                                
								                    <div class="cont-msj">
									                    <div class="bord-exito"></div>
									                    <div class="alert alert-success aleta-exit">
															<strong>
																¡Tu comentarios fueron enviados!
															</strong>
															<br />
															<a href="/eweb2019/sigi/contacto/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>
							                    ';
									            }
							        	
	                                }else {

	                                echo '
	                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/contacto/" enctype="multipart/form-data">
	                            <fieldset>
	                            

	                            	  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Asunto</strong></label>
	                                  <div class="controls">
	                                    <input placeholder="Describa su Asunto" class="input-xlarge focused" name="nombre" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>  

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Asunto</strong></label>
	                                  <div class="controls">
	                                    <input placeholder="Describa su Asunto" class="input-xlarge focused" name="correo" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>   

	                                  <div class="control-group">
	                                    <label class="control-label" for="textarea2"><strong>Motivo</strong></label>
	                                    <div class="controls">
	                                    <textarea  style="width:270px; height:150px;" name="comentario" id="textarea2" rows="3"></textarea>
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
														¿Estas seguro que desea enviar Comentario/Sugerencia?<br />
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