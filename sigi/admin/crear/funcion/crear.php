<?php
class Formulario

	{

		function CrearTicket()
			{
				include $_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/default/cone.php';
				$dia = date('d-m-Y h:i:s');
				$dias = date('d-m-Y');

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
	                   		<i class="icon-plus"></i>
	                        <a href="#">Crear Ticket</a>
	                    </li>
	                </ul>



	                <div class="box-content">

	                                

	                            <div class="row-fluid sortable ui-sortable">
	                <div class="box span12">
	                    <div class="box-header" data-original-title="">
	                        <h2><i class="halflings-icon plus"></i><span class="break"></span>Crear Ticket</h2>
	                        <div class="box-icon">
	                            
	                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
	                            
	                        </div>
	                    </div>
	                    <div class="box-content">';
	            
	                                if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
	                                    
	                                    if ($tcierre=$_POST['est'] == 'Cerrado') {
	                                    
								        	if(empty($_POST['asun'])) { // comprobamos que el campo nombre_cliente no 
		                                        echo "Por favor describa el Asunto de su solicitud. <a href='javascript:history.back();'>Reintentar</a>";
		                                    }elseif(empty($_POST['prio'])) { // comprobamos que el campo nombre_cliente no esté vacío
		                                        echo "Por favor Indique la Prioridad de su solicitud. <a href='javascript:history.back();'>Reintentar</a>";
		                                    }elseif(empty($_POST['dep'])) { // validamos que el email ingresado sea correcto
		                                        echo "Por favor indique el Departamento a quien quiere enviar la solicitud. <a href='javascript:history.back();'>Reintentar</a>";
		                                    }elseif(empty($_POST['mot'])) { // validamos que el email ingresado sea correcto
		                                        echo "Por favor describa el Motivo de su solicitud. <a href='javascript:history.back();'>Reintentar</a>";
		                                    }else {
		                                        
		                                    	// "limpiamos" los campos del formulario de posibles códigos maliciosos
											$asun = mysqli_real_escape_string($enlace, $_POST['asun']);	
											$mot = mysqli_real_escape_string($enlace, $_POST['mot']);	
											$prio = mysqli_real_escape_string($enlace, $_POST['prio']);	
											$dep = mysqli_real_escape_string($enlace, $_POST['dep']);
											$est = mysqli_real_escape_string($enlace, $_POST['est']);
											$fcreacion = mysqli_real_escape_string($enlace, $_POST['fcreacion']);
											$fecha = mysqli_real_escape_string($enlace, $_POST['fecha']);
											$ucreacion = mysqli_real_escape_string($enlace, $_POST['ucreacion']);
											$uemail = mysqli_real_escape_string($enlace, $_POST['uemail']);	
											$fproceso = '';
											$uproceso = '';
											$fcierre = mysqli_real_escape_string($enlace, $_POST['fcierre']);
											$ucierre = mysqli_real_escape_string($enlace, $_POST['ucierre']);
											$respuesta = mysqli_real_escape_string($enlace, $_POST['respuesta']);
											$remail = mysqli_real_escape_string($enlace, $_POST['remail']);

	                                        if(empty($_FILES['campo1'])) {
		                                        $ruta1 = '' ;
											} else {
												$ruta1=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
												$archivo1=$_FILES['campo1']['tmp_name'];
												$nombreArchivo1=$_FILES['campo1']['name'];
												copy($archivo1,$ruta1."".$nombreArchivo1);
												$ruta1=$ruta1."".$nombreArchivo1;
											}
										

											if(empty($_FILES['campo2'])) {
		                                        $ruta2 = '' ;
											}
											else {
											$ruta2=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo2=$_FILES['campo2']['tmp_name'];
											$nombreArchivo2=$_FILES['campo2']['name'];
											copy($archivo2,$ruta2."".$nombreArchivo2);
											$ruta2=$ruta2."".$nombreArchivo2;
											}

											if(empty($_FILES['campo3'])) {
		                                        $ruta3 = '' ;
											}
											else {
											$ruta3=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo3=$_FILES['campo3']['tmp_name'];
											$nombreArchivo3=$_FILES['campo3']['name'];
											copy($archivo3,$ruta3."".$nombreArchivo3);
											$ruta3=$ruta3."".$nombreArchivo3;
											}

											if(empty($_FILES['campo4'])) {
		                                        $ruta4 = '' ;
											}
											else {
											$ruta4=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo4=$_FILES['campo4']['tmp_name'];
											$nombreArchivo4=$_FILES['campo4']['name'];
											copy($archivo4,$ruta4."".$nombreArchivo4);
											$ruta4=$ruta4."".$nombreArchivo4;
											}

											if(empty($_FILES['campo5'])) {
		                                        $ruta5 = '' ;
											}
											else {
											$ruta5=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo5=$_FILES['campo5']['tmp_name'];
											$nombreArchivo5=$_FILES['campo5']['name'];
											copy($archivo5,$ruta5."".$nombreArchivo5);
											$ruta5=$ruta5."".$nombreArchivo5;
											}

											if(empty($_FILES['campo6'])) {
		                                        $ruta6 = '' ;
											}
											else {
											$ruta6=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo6=$_FILES['campo6']['tmp_name'];
											$nombreArchivo6=$_FILES['campo6']['name'];
											copy($archivo6,$ruta6."".$nombreArchivo6);
											$ruta6=$ruta6."".$nombreArchivo6;
											}

											if(empty($_FILES['campo7'])) {
		                                        $ruta7 = '' ;
											}
											else {
											$ruta7=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo7=$_FILES['campo7']['tmp_name'];
											$nombreArchivo7=$_FILES['campo7']['name'];
											copy($archivo7,$ruta7."".$nombreArchivo7);
											$ruta7=$ruta7."".$nombreArchivo7;
											}

											if(empty($_FILES['campo8'])) {
		                                        $ruta8 = '' ;
											}
											else {
											$ruta8=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo8=$_FILES['campo8']['tmp_name'];
											$nombreArchivo8=$_FILES['campo8']['name'];
											copy($archivo8,$ruta8."".$nombreArchivo8);
											$ruta8=$ruta8."".$nombreArchivo8;
											}

											if(empty($_FILES['campo9'])) {
		                                        $ruta9 = '' ;
											}
											else {
											$ruta9=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo9=$_FILES['campo9']['tmp_name'];
											$nombreArchivo9=$_FILES['campo9']['name'];
											copy($archivo9,$ruta9."".$nombreArchivo9);
											$ruta9=$ruta9."".$nombreArchivo9;
											}

											if(empty($_FILES['campo10'])) {
		                                        $ruta10 = '' ;
											}
											else {
											$ruta10=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo10=$_FILES['campo10']['tmp_name'];
											$nombreArchivo10=$_FILES['campo10']['name'];
											copy($archivo10,$ruta10."".$nombreArchivo10);
											$ruta10=$ruta10."".$nombreArchivo10;
											}

	                                        //$campo1 = mysqli_real_escape_string($enlace, $_POST['campo1']);
	                                        //$campo2 = mysqli_real_escape_string($enlace, $_POST['campo2']);
	                                        // comprobamos que el usuario ingresado no haya sido registrado antes
	                                        	
	                                            // ingresamos los datos a la BD
											$sql = mysqli_query($enlace, "SELECT * FROM ticke WHERE asun='".$asun."' and mot='".$mot."' and prio='".$prio."' and dep='".$dep."' and est='Abierto' ");
									            if(mysqli_num_rows($sql) > 0) {
									                echo '
								                    <div class="bg_velo">				                                                
									                    <div class="cont-msj">
										                    <div style="background: #f27b81;height: 25px;"></div>
										                    <div class="alert-danger aleta-exit" style="background-color: #fdeaea !important;color: #ca6f74 !important;border: 1px solid #f27b81 !important;padding-top: 20px;">
																<strong>¡Error! Su ticket ya se encuentra registrado</strong>
																<br />
																<a href="javascript:history.back();" name="enviar" class="btn btn-danger btn-acep">
																	Volver
																</a>
															</div>
														</div>
													</div>
								                    ';
									            }else {

	         								$reg = mysqli_query($enlace, "INSERT INTO ticke (asun, mot, prio, dep, est, fcreacion,  ucreacion, uemail, fproceso, uproceso, fcierre, ucierre, respuesta, remail, campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, fecha) VALUES ('".$asun."', '".$mot."', '".$prio."', '".$dep."', '".$est."', '".$fcreacion."', '".$ucreacion."', '".$uemail."', '".$fproceso."', '".$uproceso."', '".$fcierre."', '".$ucierre."', '".$respuesta."', '".$remail."', '".$ruta1."', '".$ruta2."', '".$ruta3."', '".$ruta4."', '".$ruta5."', '".$ruta6."', '".$ruta7."', '".$ruta8."', '".$ruta9."', '".$ruta10."', '".$fecha."')");

	         								
							                if($reg) {
							                    
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
	                								<!--////////////////////////////////////////////////////////-->	
	                								<div class="bg_velo">				                                                
									                    <div class="cont-msj">
										                    <div class="bord-exito"></div>
										                    <div class="alert alert-success aleta-exit">
																<strong>
																	¡Bien hecho! Ha registrado correctamente su ticket.
																</strong>
																<br />
																<a href="/eweb2019/sigi/admin/crear/" name="enviar" class="btn btn-success btn-acep">
																	Aceptar
																</a>
															</div>
														</div>
													</div>
													<!--////////////////////////////////////////////////////////-->
													';
											            }

							                }else {
							                    echo "ha ocurrido un error y no se registraron los datos.";
							                }
							                
							                }

							               }
							            
							            }elseif($tcierre=$_POST['est'] == 'En Proceso'){

							            	// "limpiamos" los campos del formulario de posibles códigos maliciosos
											$asun = mysqli_real_escape_string($enlace, $_POST['asun']);	
											$mot = mysqli_real_escape_string($enlace, $_POST['mot']);	
											$prio = mysqli_real_escape_string($enlace, $_POST['prio']);	
											$dep = mysqli_real_escape_string($enlace, $_POST['dep']);
											$est = mysqli_real_escape_string($enlace, $_POST['est']);
											$fcreacion = mysqli_real_escape_string($enlace, $_POST['fcreacion']);
											$fecha = mysqli_real_escape_string($enlace, $_POST['fecha']);
											$ucreacion = mysqli_real_escape_string($enlace, $_POST['ucreacion']);
											$uemail = mysqli_real_escape_string($enlace, $_POST['uemail']);	
											$fproceso = mysqli_real_escape_string($enlace, $_POST['fproceso']);
											$uproceso = mysqli_real_escape_string($enlace, $_POST['uproceso']);
											$fcierre = '';
											$ucierre = '';
											$respuesta = mysqli_real_escape_string($enlace, $_POST['respuesta']);
											$remail = mysqli_real_escape_string($enlace, $_POST['remail']);

	                                        if(empty($_FILES['campo1'])) {
		                                        $ruta1 = '' ;
											} else {
												$ruta1=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
												$archivo1=$_FILES['campo1']['tmp_name'];
												$nombreArchivo1=$_FILES['campo1']['name'];
												copy($archivo1,$ruta1."".$nombreArchivo1);
												$ruta1=$ruta1."".$nombreArchivo1;
											}
										

											if(empty($_FILES['campo2'])) {
		                                        $ruta2 = '' ;
											}
											else {
											$ruta2=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo2=$_FILES['campo2']['tmp_name'];
											$nombreArchivo2=$_FILES['campo2']['name'];
											copy($archivo2,$ruta2."".$nombreArchivo2);
											$ruta2=$ruta2."".$nombreArchivo2;
											}

											if(empty($_FILES['campo3'])) {
		                                        $ruta3 = '' ;
											}
											else {
											$ruta3=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo3=$_FILES['campo3']['tmp_name'];
											$nombreArchivo3=$_FILES['campo3']['name'];
											copy($archivo3,$ruta3."".$nombreArchivo3);
											$ruta3=$ruta3."".$nombreArchivo3;
											}

											if(empty($_FILES['campo4'])) {
		                                        $ruta4 = '' ;
											}
											else {
											$ruta4=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo4=$_FILES['campo4']['tmp_name'];
											$nombreArchivo4=$_FILES['campo4']['name'];
											copy($archivo4,$ruta4."".$nombreArchivo4);
											$ruta4=$ruta4."".$nombreArchivo4;
											}

											if(empty($_FILES['campo5'])) {
		                                        $ruta5 = '' ;
											}
											else {
											$ruta5=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo5=$_FILES['campo5']['tmp_name'];
											$nombreArchivo5=$_FILES['campo5']['name'];
											copy($archivo5,$ruta5."".$nombreArchivo5);
											$ruta5=$ruta5."".$nombreArchivo5;
											}

											if(empty($_FILES['campo6'])) {
		                                        $ruta6 = '' ;
											}
											else {
											$ruta6=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo6=$_FILES['campo6']['tmp_name'];
											$nombreArchivo6=$_FILES['campo6']['name'];
											copy($archivo6,$ruta6."".$nombreArchivo6);
											$ruta6=$ruta6."".$nombreArchivo6;
											}

											if(empty($_FILES['campo7'])) {
		                                        $ruta7 = '' ;
											}
											else {
											$ruta7=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo7=$_FILES['campo7']['tmp_name'];
											$nombreArchivo7=$_FILES['campo7']['name'];
											copy($archivo7,$ruta7."".$nombreArchivo7);
											$ruta7=$ruta7."".$nombreArchivo7;
											}

											if(empty($_FILES['campo8'])) {
		                                        $ruta8 = '' ;
											}
											else {
											$ruta8=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo8=$_FILES['campo8']['tmp_name'];
											$nombreArchivo8=$_FILES['campo8']['name'];
											copy($archivo8,$ruta8."".$nombreArchivo8);
											$ruta8=$ruta8."".$nombreArchivo8;
											}

											if(empty($_FILES['campo9'])) {
		                                        $ruta9 = '' ;
											}
											else {
											$ruta9=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo9=$_FILES['campo9']['tmp_name'];
											$nombreArchivo9=$_FILES['campo9']['name'];
											copy($archivo9,$ruta9."".$nombreArchivo9);
											$ruta9=$ruta9."".$nombreArchivo9;
											}

											if(empty($_FILES['campo10'])) {
		                                        $ruta10 = '' ;
											}
											else {
											$ruta10=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo10=$_FILES['campo10']['tmp_name'];
											$nombreArchivo10=$_FILES['campo10']['name'];
											copy($archivo10,$ruta10."".$nombreArchivo10);
											$ruta10=$ruta10."".$nombreArchivo10;
											}

	                                        //$campo1 = mysqli_real_escape_string($enlace, $_POST['campo1']);
	                                        //$campo2 = mysqli_real_escape_string($enlace, $_POST['campo2']);
	                                        // comprobamos que el usuario ingresado no haya sido registrado antes
	                                        	
	                                            // ingresamos los datos a la BD
											$sql = mysqli_query($enlace, "SELECT * FROM ticke WHERE asun='".$asun."' and mot='".$mot."' and prio='".$prio."' and dep='".$dep."' and est='Abierto' ");
									            if(mysqli_num_rows($sql) > 0) {
									                echo '
								                    <div class="bg_velo">				                                                
									                    <div class="cont-msj">
										                    <div style="background: #f27b81;height: 25px;"></div>
										                    <div class="alert-danger aleta-exit" style="background-color: #fdeaea !important;color: #ca6f74 !important;border: 1px solid #f27b81 !important;padding-top: 20px;">
																<strong>¡Error! Su ticket ya se encuentra registrado</strong>
																<br />
																<a href="javascript:history.back();" name="enviar" class="btn btn-danger btn-acep">
																	Volver
																</a>
															</div>
														</div>
													</div>
								                    ';
									            }else {

	         								$reg = mysqli_query($enlace, "INSERT INTO ticke (asun, mot, prio, dep, est, fcreacion,  ucreacion, uemail, fproceso, uproceso, fcierre, ucierre, respuesta, remail, campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, fecha) VALUES ('".$asun."', '".$mot."', '".$prio."', '".$dep."', '".$est."', '".$fcreacion."', '".$ucreacion."', '".$uemail."', '".$fproceso."', '".$uproceso."', '".$fcierre."', '".$ucierre."', '".$respuesta."', '".$remail."', '".$ruta1."', '".$ruta2."', '".$ruta3."', '".$ruta4."', '".$ruta5."', '".$ruta6."', '".$ruta7."', '".$ruta8."', '".$ruta9."', '".$ruta10."', '".$fecha."')");
							                if($reg) {
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
	                								<!--////////////////////////////////////////////////////////-->	
	                								<div class="bg_velo">				                                                
									                    <div class="cont-msj">
										                    <div class="bord-exito"></div>
										                    <div class="alert alert-success aleta-exit">
																<strong>
																	¡Bien hecho! Ha registrado correctamente su ticket.
																</strong>
																<br />
																<a href="/eweb2019/sigi/admin/crear/" name="enviar" class="btn btn-success btn-acep">
																	Aceptar
																</a>
															</div>
														</div>
													</div>
													<!--////////////////////////////////////////////////////////-->
													';
											            }
							                }else {
							                    echo "ha ocurrido un error y no se registraron los datos.";
							                }
							                
							                }

							            }else{

							            	// "limpiamos" los campos del formulario de posibles códigos maliciosos
											$asun = mysqli_real_escape_string($enlace, $_POST['asun']);	
											$mot = mysqli_real_escape_string($enlace, $_POST['mot']);	
											$prio = mysqli_real_escape_string($enlace, $_POST['prio']);	
											$dep = mysqli_real_escape_string($enlace, $_POST['dep']);
											$est = mysqli_real_escape_string($enlace, $_POST['est']);
											$fcreacion = mysqli_real_escape_string($enlace, $_POST['fcreacion']);
											$fecha = mysqli_real_escape_string($enlace, $_POST['fecha']);
											$ucreacion = mysqli_real_escape_string($enlace, $_POST['ucreacion']);
											$uemail = mysqli_real_escape_string($enlace, $_POST['uemail']);	
											$fproceso = '';
											$uproceso = '';
											$fcierre = '';
											$ucierre = '';
											$respuesta = '';
											$remail = '';

	                                        if(empty($_FILES['campo1'])) {
		                                        $ruta1 = '' ;
											} else {
												$ruta1=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
												$archivo1=$_FILES['campo1']['tmp_name'];
												$nombreArchivo1=$_FILES['campo1']['name'];
												copy($archivo1,$ruta1."".$nombreArchivo1);
												$ruta1=$ruta1."".$nombreArchivo1;
											}
										

											if(empty($_FILES['campo2'])) {
		                                        $ruta2 = '' ;
											}
											else {
											$ruta2=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo2=$_FILES['campo2']['tmp_name'];
											$nombreArchivo2=$_FILES['campo2']['name'];
											copy($archivo2,$ruta2."".$nombreArchivo2);
											$ruta2=$ruta2."".$nombreArchivo2;
											}

											if(empty($_FILES['campo3'])) {
		                                        $ruta3 = '' ;
											}
											else {
											$ruta3=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo3=$_FILES['campo3']['tmp_name'];
											$nombreArchivo3=$_FILES['campo3']['name'];
											copy($archivo3,$ruta3."".$nombreArchivo3);
											$ruta3=$ruta3."".$nombreArchivo3;
											}

											if(empty($_FILES['campo4'])) {
		                                        $ruta4 = '' ;
											}
											else {
											$ruta4=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo4=$_FILES['campo4']['tmp_name'];
											$nombreArchivo4=$_FILES['campo4']['name'];
											copy($archivo4,$ruta4."".$nombreArchivo4);
											$ruta4=$ruta4."".$nombreArchivo4;
											}

											if(empty($_FILES['campo5'])) {
		                                        $ruta5 = '' ;
											}
											else {
											$ruta5=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo5=$_FILES['campo5']['tmp_name'];
											$nombreArchivo5=$_FILES['campo5']['name'];
											copy($archivo5,$ruta5."".$nombreArchivo5);
											$ruta5=$ruta5."".$nombreArchivo5;
											}

											if(empty($_FILES['campo6'])) {
		                                        $ruta6 = '' ;
											}
											else {
											$ruta6=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo6=$_FILES['campo6']['tmp_name'];
											$nombreArchivo6=$_FILES['campo6']['name'];
											copy($archivo6,$ruta6."".$nombreArchivo6);
											$ruta6=$ruta6."".$nombreArchivo6;
											}

											if(empty($_FILES['campo7'])) {
		                                        $ruta7 = '' ;
											}
											else {
											$ruta7=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo7=$_FILES['campo7']['tmp_name'];
											$nombreArchivo7=$_FILES['campo7']['name'];
											copy($archivo7,$ruta7."".$nombreArchivo7);
											$ruta7=$ruta7."".$nombreArchivo7;
											}

											if(empty($_FILES['campo8'])) {
		                                        $ruta8 = '' ;
											}
											else {
											$ruta8=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo8=$_FILES['campo8']['tmp_name'];
											$nombreArchivo8=$_FILES['campo8']['name'];
											copy($archivo8,$ruta8."".$nombreArchivo8);
											$ruta8=$ruta8."".$nombreArchivo8;
											}

											if(empty($_FILES['campo9'])) {
		                                        $ruta9 = '' ;
											}
											else {
											$ruta9=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo9=$_FILES['campo9']['tmp_name'];
											$nombreArchivo9=$_FILES['campo9']['name'];
											copy($archivo9,$ruta9."".$nombreArchivo9);
											$ruta9=$ruta9."".$nombreArchivo9;
											}

											if(empty($_FILES['campo10'])) {
		                                        $ruta10 = '' ;
											}
											else {
											$ruta10=$_SERVER['DOCUMENT_ROOT'] . '/eweb2019/sigi/tickets/crear/'.base64_encode($fcreacion);
											$archivo10=$_FILES['campo10']['tmp_name'];
											$nombreArchivo10=$_FILES['campo10']['name'];
											copy($archivo10,$ruta10."".$nombreArchivo10);
											$ruta10=$ruta10."".$nombreArchivo10;
											}

	                                        //$campo1 = mysqli_real_escape_string($enlace, $_POST['campo1']);
	                                        //$campo2 = mysqli_real_escape_string($enlace, $_POST['campo2']);
	                                        // comprobamos que el usuario ingresado no haya sido registrado antes
	                                        	
	                                            // ingresamos los datos a la BD
											$sql = mysqli_query($enlace, "SELECT * FROM ticke WHERE asun='".$asun."' and mot='".$mot."' and prio='".$prio."' and dep='".$dep."' and est='Abierto' ");
									            if(mysqli_num_rows($sql) > 0) {
									                echo '
								                    <div class="bg_velo">				                                                
									                    <div class="cont-msj">
										                    <div style="background: #f27b81;height: 25px;"></div>
										                    <div class="alert-danger aleta-exit" style="background-color: #fdeaea !important;color: #ca6f74 !important;border: 1px solid #f27b81 !important;padding-top: 20px;">
																<strong>¡Error! Su ticket ya se encuentra registrado</strong>
																<br />
																<a href="javascript:history.back();" name="enviar" class="btn btn-danger btn-acep">
																	Volver
																</a>
															</div>
														</div>
													</div>
								                    ';
									            }else {

	         								$reg = mysqli_query($enlace, "INSERT INTO ticke (asun, mot, prio, dep, est, fcreacion,  ucreacion, uemail, fproceso, uproceso, fcierre, ucierre, respuesta, remail, campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, fecha) VALUES ('".$asun."', '".$mot."', '".$prio."', '".$dep."', '".$est."', '".$fcreacion."', '".$ucreacion."', '".$uemail."', '".$fproceso."', '".$uproceso."', '".$fcierre."', '".$ucierre."', '".$respuesta."', '".$remail."', '".$ruta1."', '".$ruta2."', '".$ruta3."', '".$ruta4."', '".$ruta5."', '".$ruta6."', '".$ruta7."', '".$ruta8."', '".$ruta9."', '".$ruta10."', '".$fecha."')");
							                if($reg) {
							                    echo '
                								<!--////////////////////////////////////////////////////////-->	
                								<div class="bg_velo">				                                                
								                    <div class="cont-msj">
									                    <div class="bord-exito"></div>
									                    <div class="alert alert-success aleta-exit">
															<strong>
																¡Bien hecho! Ha registrado correctamente su ticket.
															</strong>
															<br />
															<a href="/eweb2019/sigi/admin/crear/" name="enviar" class="btn btn-success btn-acep">
																Aceptar
															</a>
														</div>
													</div>
												</div>
												<!--////////////////////////////////////////////////////////-->
												';
							                }else {
							                    echo "ha ocurrido un error y no se registraron los datos.";
							                }
							                
							                }

							            }
							        
	                                }else {

	                                echo '
	                            <form class="form-horizontal" method="post" action="http://trackernet/eweb2019/sigi/admin/crear/" enctype="multipart/form-data">
	                            <fieldset>
	                            

	                            		<div class="control-group">
	                                  <label class="control-label" for="focusedInput"><strong>Asunto</strong></label>
	                                  <div class="controls">
	                                    <input placeholder="Describa su Asunto" class="input-xlarge focused" name="asun" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>  

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"><strong>Departamento</strong></label>
	                                  <div class="controls">
	                                    <select name="dep" id="selectError3">
											<option value="">-- Seleccione Departamento --</option>
		                                    <optgroup label="Opciones">											  
			                                    <option value="Desarrollo de Aplicaciones"><strong>Desarrollo de Aplicaciones</strong></option>
			                                    <option value="Soporte Tecnico">Soporte Tecnico</option>
			                                    <option value="Soporte Bussine One">Soporte Bussine One</option>
											</optgroup>
		                                </select>
	                                  </div>
	                                  </div>    

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"><strong>Prioridad</strong></label>
	                                  <div class="controls">
	                                    <select  name="prio" id="selectError3">
	                                    	<option value="">-- Seleccione Prioridad --</option>
		                                    <optgroup label="Opciones">											  
			                                    <option value="Baja">Baja</option>
			                                    <option value="Media">Media</option>
			                                    <option value="Alta">Alta</option>
											</optgroup>
	                                    </select>
	                                  </div>
	                                  </div>                            

	                                  <div class="control-group">
	                                    <label class="control-label" for="textarea2"><strong>Motivo</strong></label>
	                                    <div class="controls">
	                                    <textarea  style="width:270px; height:150px;" class="cleditor" name="mot" id="textarea2" rows="3"></textarea>
	                                    </div>
	                                  </div>

	                                  
	                                  
	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"></label>
	                                  <div class="controls">
	                                    <a class="btn btn-primary" href="#" onclick="AgregarCampos();">Agregar Archivo</a>
	                                    <div id="campos">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"></label>
	                                  <div class="controls">
	                                  <hr>
	                                  </div>
	                                  </div>
	                                  

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3"><strong>Estatus</strong></label>
	                                  <div class="controls">
	                                    <select  name="est" id="selectError3">
	                                    		<option value="">-- Seleccione Estatus --</option>								  
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
	                                    <textarea  style="width:270px; height:150px;" class="cleditor" name="respuesta" id="textarea2" rows="3"></textarea>
	                                  </div>
	                                  </div>
	                                    

	                            <input class="input-xlarge focused" name="fproceso" id="focusedInput" type="hidden" value="'.$dia.'">
	                            <input class="input-xlarge focused" name="uproceso" id="focusedInput" type="hidden" value="'.$dia.'">
	                            <input class="input-xlarge focused" name="fcierre" id="focusedInput" type="hidden" value="'.$dia.'">
	                            <input class="input-xlarge focused" name="ucierre" id="focusedInput" type="hidden" value="'.$dia.'">

	                            <input class="input-xlarge focused" name="fcreacion" id="focusedInput" type="hidden" value="'.$dia.'">
	                            <input class="input-xlarge focused" name="fecha" id="focusedInput" type="hidden" value="'.$dias.'">
	                            <input class="input-xlarge focused" name="uemail" id="focusedInput" type="hidden" value="'.$_SESSION['usuario_email'].'">
								<input class="input-xlarge focused" name="ucreacion" id="focusedInput" type="hidden" value="'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'">';
	                                  

	                             
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
														¿Estas seguro que desea registrar su ticket?<br />
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