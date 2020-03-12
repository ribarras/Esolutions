<?php
class Formulario

	{

function editarUsuario()
	{
		include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';
		$dia = date('d-m-Y h:i:s');
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
		                   		<i class="icon-tasks"></i>
		                        <a href="/eweb2019/sigi/conocimiento/">Base de Conocimiento</a>
		                        <i class="icon-angle-right"></i>
		                    </li>
		                    <li>
		                   		<i class="icon-tasks"></i>
		                        <a href="#">Ticket</a>
		                    </li>
		                </ul>



	                    <div class="row-fluid sortable ui-sortable">
	                        <div class="box span12">
	                            <div class="box-header" data-original-title="">
	                                <h2><i class="halflings-icon edit"></i><span class="break"></span>Base Conocimiento</h2>
	                                <div class="box-icon">

	                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

	                                </div>
	                            </div>
	                            <div class="box-content">';
	                            $getid = base64_decode($_GET["id"]);
				if (isset($getid))
					{
					$sql = "select * from ticke where id='$getid'";
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

										$asun=$_POST['asun'];
										$mot=$_POST['mot'];
										$est=$_POST['est'];
										$uemail=$_POST['uemail'];
										$uactualizacion=$_POST['ucierre'];
										$factualizacion=$_POST['fcierre'];
										$respuesta=$_POST['respuesta'];	
										$remail=$_POST['remail'];										
										$id=$_POST['id'];

									include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';
								
									if ($tcierre=$_POST['est'] == 'Cerrado') {

										
										$asun=$_POST['asun'];
										$mot=$_POST['mot'];
										$est=$_POST['est'];
										$uemail=$_POST['uemail'];
										$ucierre=$_POST['ucierre'];
										$fcierre=$_POST['fcierre'];
										$respuesta=$_POST['respuesta'];	
										$remail=$_POST['remail'];										
										$id=$_POST['id'];


										include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';

										$actualizar=mysqli_query($enlace, "UPDATE ticke SET 
											est='".$est."', 
											fcierre='".$fcierre."', 
											ucierre='".$ucierre."', 
											respuesta='".$respuesta."', 
											remail='".$remail."' 
											WHERE 
											id='".$id."'
											");

			                        	$Support        = $uemail;
			                        	$Support1       = $remail;
									    $SNombre        = "kchirinos";    
									    $destinatario   = "'giatc'";    
									    $asunto         = "Gestion de Incidencias - ".date("d/m/Y");
									    $cuerpo = 
									    '
									    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
									    <html>
									        <head>
									            <title>GIATC</title>
									            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
									        </head>
									        <body>
									        Buen día Estimado/as<br><br>

									        El siguiente correo es para informar que su solicitud fue Cerrada<br>
									        The following email is to inform that the request was Close <br> <br>

									        <strong>Asunto</strong>:<br> '.$_POST['asun'].'<br>
									        <strong>Motivo</strong>:<br> '.$_POST['mot'].'<br><br>
									        <strong>Solucion</strong>:<br> '.$_POST['respuesta'].'<br><br>

									        Nos depedimos cordialmente<br>
									        Saludos<br>
									        Departamento Sistema
									        </body>
									    </html>
									    '; 
									    require("includesPHPMailer/class.phpmailer.php");
									    $mail = new PHPMailer (); 
									    $mail->From = "sistemas@sltracker.com"; 
									    $mail->FromName = "Ticket Cerrado"; 
									    $mail->AddAddress($Support,$SNombre);
									    $mail->AddAddress($Support1,$SNombre);
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
																¡El Ticket fue Cerrado exitosamente!
															</strong>
															<br />
															<a href="/eweb2019/sigi/admin/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>
							                    ';
									            }

			                        }

			                        elseif ($tcierre=$_POST['est'] == 'En Proceso') {

										
										$asun=$_POST['asun'];
										$mot=$_POST['mot'];
										$est=$_POST['est'];
										$uemail=$_POST['uemail'];
										$uproceso=$_POST['uproceso'];
										$fproceso=$_POST['fproceso'];
										$respuesta=$_POST['respuesta'];	
										$remail=$_POST['remail'];										
										$id=$_POST['id'];


										include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';

										$actualizar=mysqli_query($enlace, "UPDATE ticke SET 
											est='".$est."', 
											fproceso='".$fproceso."', 
											uproceso='".$uproceso."', 
											respuesta='".$respuesta."', 
											remail='".$remail."' 
											WHERE 
											id='".$id."'
											");

			                        	$Support        = $uemail;
			                        	$Support1       = $remail;
									    $SNombre        = "kchirinos";    
									    $destinatario   = "'giatc'";    
									    $asunto         = "Gestion de Incidencias - ".date("d/m/Y");
									    $cuerpo = 
									    '
									    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
									    <html>
									        <head>
									            <title>GIATC</title>
									            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
									        </head>
									        <body>
									        Buen día Estimado/as<br><br>

									        El siguiente correo es para informar que su solicitud fue Cerrada<br>
									        The following email is to inform that the request was Close <br> <br>

									        <strong>Asunto</strong>:<br> '.$_POST['asun'].'<br>
									        <strong>Motivo</strong>:<br> '.$_POST['mot'].'<br><br>
									        <strong>Solucion</strong>:<br> '.$_POST['respuesta'].'<br><br>

									        Nos depedimos cordialmente<br>
									        Saludos<br>
									        Departamento Sistema
									        </body>
									    </html>
									    '; 
									    require("includesPHPMailer/class.phpmailer.php");
									    $mail = new PHPMailer (); 
									    $mail->From = "sistemas@sltracker.com"; 
									    $mail->FromName = "Ticket En Proceso"; 
									    $mail->AddAddress($Support,$SNombre);
									    $mail->AddAddress($Support1,$SNombre);
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
																¡El Ticket fue Cerrado exitosamente!
															</strong>
															<br />
															<a href="/eweb2019/sigi/admin/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>
							                    ';
									            }

			                        } else {

			                        	$asun=$_POST['asun'];
										$mot=$_POST['mot'];
										$est=$_POST['est'];
										$uemail=$_POST['uemail'];
										$uproceso=$_POST['uproceso'];
										$fproceso=$_POST['fproceso'];
										$respuesta = '' ;	
										$remail = '' ;										
										$id=$_POST['id'];


										include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';

										$actualizar=mysqli_query($enlace, "UPDATE ticke SET 
											est='".$est."', 
											fcreacion='".$fcreacion."', 
											ucreacion='".$ucreacion."', 
											respuesta='".$respuesta."', 
											remail='".$remail."' 
											WHERE 
											id='".$id."'
											");

										if ($actualizar) {
											echo '
							                    <div class="bg_velo">				                                                
								                    <div class="cont-msj">
									                    <div class="bord-exito"></div>
									                    <div class="alert alert-success aleta-exit">
															<strong>
																¡El Ticket fue Cerrado exitosamente!
															</strong>
															<br />
															<a href="/eweb2019/sigi/admin/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>
							                    ';
										}else{
											echo "n";
										}

			                        }

								}
							  else
								{
								echo '
		                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/tickets/editar/?id=';echo base64_encode($row["id"]);echo '&';echo base64_encode($row["fcreacion"]);echo '&';echo base64_encode($row["est"]);echo '&';echo base64_encode($row["prio"]);echo'" enctype="multipart/form-data">
		                            <fieldset>
		                            

		                                  
		           					<input class="input-xlarge focused" name="id" id="focusedInput" type="hidden" value="'.$row["id"].'">

		                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Asunto</strong></label>
	                                  <div class="controls">
	                                    '.$row["asun"].'
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Motivo</strong></label>
	                                  <div class="controls">
	                                    '.$row["mot"].'
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Solucion</strong></label>
	                                  <div class="controls">
	                                    '.$row["respuesta"].'
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Prioridad</strong></label>
	                                  <div class="controls">
	                                    '.$row["prio"].'
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                    <label class="control-label" for="focusedInput"><strong>Adjuntos</strong></label>
	                                    <div class="controls">';		                                    

											

											if(empty($row["campo1"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo1"].'" download="Archivo'.$row["campo1"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

											if(empty($row["campo2"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo2"].'" download="Archivo'.$row["campo2"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										    if(empty($row["campo3"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo3"].'" download="Archivo'.$row["campo3"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										      if(empty($row["campo4"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo4"].'" download="Archivo'.$row["campo4"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										      if(empty($row["campo5"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo5"].'" download="Archivo'.$row["campo5"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										      if(empty($row["campo6"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo6"].'" download="Archivo'.$row["campo6"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										      if(empty($row["campo7"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo7"].'" download="Archivo'.$row["campo7"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										      if(empty($row["campo8"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo8"].'" download="Archivo'.$row["campo8"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										      if(empty($row["campo9"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo9"].'" download="Archivo'.$row["campo9"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

										      if(empty($row["campo10"])) 
										      {         
										        echo "";
										      }
										      else
										      {        
										        echo '
											    <a class="btn btn-primary" style="margin-top:5px;" href="/eweb2019/sigi/tickets/crear/'.$row["campo10"].'" download="Archivo'.$row["campo10"].'">
													Archivo Adjunto
												</a>
											    ';
										      }

											echo '
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

		                              	<div id="element" class="ocultar bg_velo">		                              		
				                                <div class="cont-msj">
				                                    <div class="bord-pregunta"></div>
				                                    <div class="alert alert-block aleta-exit">
														<strong>
														¿Estas seguro que deseas realizar los cambios?<br />
														</strong>
														<div class="cont-btn">
														<button type="submit" name="enviar" class="btn btn-success sumit-btn-acep">Aceptar</button>
														<a class="btn btn-danger btn-cancelar" href="#" id="hide">Cancelar</a>
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