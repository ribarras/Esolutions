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
		                   		<i class="icon-wrench"></i>
		                        <a href="/eweb2019/sigi/admin/">Administrador</a>
		                        <i class="icon-angle-right"></i>
		                    </li>
		                    <li>
		                   		<i class="icon-edit"></i>
		                        <a href="#">Modificar Ticket</a>
		                    </li>
		                </ul>



	                    <div class="row-fluid sortable ui-sortable">
	                        <div class="box span12">
	                            <div class="box-header" data-original-title="">
	                                <h2><i class="halflings-icon edit"></i><span class="break"></span>Modificar Ticket</h2>
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
																¡Bien hecho! Ha cerrado correctamente su ticket.
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
																¡Bien hecho! Esta En Proceso correctamente su ticket.
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
																¡Bien hecho! Ha Abierto correctamente su ticket.
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
	                                  <label class="control-label" for="focusedInput"><strong>Prioridad</strong></label>
	                                  <div class="controls">
	                                    '.$row["prio"].'
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                    <label class="control-label" for="focusedInput"><strong>Adjuntos</strong></label>
	                                    <div class="controls">';		                                    

											

											if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

											if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										    if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										      if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										      if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										      if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										      if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										      if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										      if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

										      if( $row["campo1"] == "C:inetpubwwwroot/eweb2019/sigi/tickets/crear/" ) 
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

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"><strong>Estatus</strong></label>
	                                  <div class="controls">
	                                    <select  name="est" id="selectError3">
	                                    <option value="'.$row["est"].'">'.$row["est"].'</option>
	                                    		<option value="">-- Seleccione Prioridad --</option>								  
			                                    <option value="Abierto">Abierto</option>
			                                    <option value="En Proceso">En Proceso</option>
			                                    <option value="Cerrado">Cerrado</option>
	                                    </select>
	                                  </div>
	                                  </div> 

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"><strong>Responder</strong></label>
	                                  <div class="controls">
	                                    <select  name="remail" id="selectError3">
	                                    		<option value="">-- Selecione Departamento --</option>';
		                                        $sql1="select id_dep, email, titulo from dep ORDER BY id_dep DESC";

			                                    $rs1=mysqli_query($enlace, $sql1);
											      $i1=0;
											      if(mysqli_num_rows($rs1)<1){
											        echo ""; 
											      }else{
											       while ($row1 = mysqli_fetch_array($rs1)){
			                                        echo '
			                                        <option value="'.$row1["email"].'">'.$row1["titulo"].'</option>
			                                     	';
			                                      $i1++; 
											      }     
											      }

		                                    	echo '
	                                    </select>
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Solucion</strong></label>
	                                  <div class="controls">
	                                    <textarea  style="width:270px; height:150px;" class="cleditor" name="respuesta" id="textarea2" rows="3">'.$row["respuesta"].'</textarea>
	                                  </div>
	                                  </div>

	                                  
	                                  

	                                  
	                                    
							        <input class="input-xlarge focused" name="asun" id="focusedInput" type="hidden" value="'.$row["asun"].'">
							        <textarea  style="display: none;" name="mot" id="textarea2" rows="3">'.$row["mot"].'</textarea>
							        <input class="input-xlarge focused" name="fproceso" id="focusedInput" type="hidden" value="'.$dia.'">
									<input class="input-xlarge focused" name="uproceso" id="focusedInput" type="hidden" value="'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'">
							        <input class="input-xlarge focused" name="fcierre" id="focusedInput" type="hidden" value="'.$dia.'">
									<input class="input-xlarge focused" name="ucierre" id="focusedInput" type="hidden" value="'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'">
							        <input class="input-xlarge focused" name="uemail" id="focusedInput" type="hidden" value="'.$row["uemail"].'">
							        <input class="input-xlarge focused" name="id" id="focusedInput" type="hidden" value="'.$row["id"].'">

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
														¿Estas seguro que deseas realizar los cambios en el Ticket?<br />
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