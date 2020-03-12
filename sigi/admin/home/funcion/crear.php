<?php
class Formulario

	{

		function CrearTicket()
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
	                   		<i class="icon-wrench"></i>
	                        <a href="/eweb2019/sigi/admin/">Administrador</a>
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
	                                    
	                                    
	                                    // creamos una función que nos parmita validar el email
							        if(empty($_POST['nombre_cliente'])) { // comprobamos que el campo nombre_cliente no 
	                                        echo "El 'Nombre de Cliente'  esta vacio. <a href='javascript:history.back();'>Reintentar</a>";
	                                    }elseif(empty($_POST['nif'])) { // comprobamos que el campo nombre_cliente no esté vacío
	                                        echo "La 'Cedula / Rif' esta vacio. <a href='javascript:history.back();'>Reintentar</a>";
	                                    }elseif(empty($_POST['placa'])) { // validamos que el email ingresado sea correcto
	                                        echo "La 'Placa' esta vacia. <a href='javascript:history.back();'>Reintentar</a>";
	                                    }elseif(empty($_POST['tsolicitud'])) { // validamos que el email ingresado sea correcto
	                                        echo "El 'Tipo de Solicitud' esta vacia. <a href='javascript:history.back();'>Reintentar</a>";
	                                    }else {
	                                        // "limpiamos" los campos del formulario de posibles códigos maliciosos
	                                        $fcreacion = mysqli_real_escape_string($enlace, $_POST['fcreacion']);
	                                        $nombre_cliente = mysqli_real_escape_string($enlace, $_POST['nombre_cliente']);
	                                        $nif = mysqli_real_escape_string($enlace, $_POST['nif']);
	                                        $placa = mysqli_real_escape_string($enlace, $_POST['placa']);
	                                        $tsolicitud = mysqli_real_escape_string($enlace, $_POST['tsolicitud']);
	                                        $usuario = mysqli_real_escape_string($enlace, $_POST['usuario']);
	                                        $tcierre = mysqli_real_escape_string($enlace, $_POST['tcierre']);
	                                        $comentario_c = mysqli_real_escape_string($enlace, $_POST['comentario_c']);
	                                        $comentario_s = mysqli_real_escape_string($enlace, $_POST['comentario_s']);
	                                        $usuario = mysqli_real_escape_string($enlace, $_POST['usuario']);
	                                        $fcierre = mysqli_real_escape_string($enlace, $_POST['fcierre']);
	                                        $ticket_asig = mysqli_real_escape_string($enlace, $_POST['ticket_asig']);
	                                        $fprocesando = mysqli_real_escape_string($enlace, $_POST['fprocesando']);
							            	// comprobamos que el usuario ingresado no haya sido registrado antes
							            
							                // ingresamos los datos a la BD
							                $reg = mysqli_query($enlace, "INSERT INTO 
	                                                tickets (fcreacion, nombre_cliente, nif, placa, tsolicitud, comentario_c, tcierre, comentario_s, fcierre, usuario, ticket_asig, fprocesando) VALUES ('".$fcreacion."', '".$nombre_cliente."', '".$nif."', '".$placa."', '".$tsolicitud."', '".$comentario_c."', '".$tcierre."', '".$comentario_s."', '".$fcierre."', '".$usuario."', '".$ticket_asig."', '".$fprocesando."')");
							                if($reg) {
							                    echo '
							                    <div class="bg_velo">				                                                
								                    <div class="cont-msj">
									                    <div class="bord-exito"></div>
									                    <div class="alert alert-success aleta-exit">
															<strong>
																¡El Ticket fue creado exitosamente!
															</strong>
															<br />
															<a href="/eweb2019/sigi/admin/crear/" name="enviar" class="btn btn-success btn-acep">
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
	                                }else {

	                                echo '
	                            <form class="form-horizontal" method="post" action="/eweb2019/sigi/admin/crear/" enctype="multipart/form-data">
	                            <fieldset>
	                            

	                            		<div class="control-group">
	                                  <label class="control-label" for="focusedInput">Nombre del cliente</label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="nombre_cliente" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput">Cedula / Rif</label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="nif" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="focusedInput">Placa</label>
	                                  <div class="controls">
	                                    <input class="input-xlarge focused" name="placa" id="focusedInput" type="text" value="">
	                                  </div>
	                                  </div>
	                                  
	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3">Tipo de solicitud</label>
	                                  <div class="controls">
	                                    <select style="width: 285px;" name="tsolicitud" id="selectError3">
	                                        <option value="">-- Selecciona una opcion --</option>';
	                                        $sql1="select * from tip_cierre ORDER BY id_cierre DESC";

		                                    $rs1=mysqli_query($enlace, $sql1);
										      $i1=0;
										      if(mysqli_num_rows($rs1)<1){
										        echo ""; 
										      }else{
										       while ($row1 = mysqli_fetch_array($rs1)){
		                                        echo '
		                                        <option value="'.$row1["titulo"].'">'.$row1["titulo"].'</option>
		                                     	';
		                                      $i1++; 
										      }     
										      }

	                                    echo '
	                                    
	                                    </select>
	                                  </div>
	                                  </div>

	                                  <div class="control-group hidden-phone">
	                                    <label class="control-label" for="textarea2">Comentario usuarios Televenta</label>
	                                    <div class="controls">
	                                    <textarea style="width:270px; height:150px;" class="" name="comentario_c" id="textarea2" rows="3"></textarea>
	                                    </div>
	                                  </div>


	                                  <div class="control-group hidden-phone">
	                                    <label class="control-label" for="textarea2">Comentario usuarios Backoffice</label>
	                                    <div class="controls">
	                                    <textarea style="width:270px; height:150px;" class="" name="comentario_s" id="textarea2"cols="7"></textarea>
	                                    </div>
	                                  </div>

	                                  <div class="control-group">
	                                  <label class="control-label" for="selectError3">Asignar a un usuario</label>
	                                  <div class="controls">
	                                    <select style="width: 285px;" name="ticket_asig" id="selectError3">
	                                        ';
	                                        $sql1="select * from usuarios where tipo='Backoffice'";

		                                    $rs1=mysqli_query($enlace, $sql1);
										      $i1=0;
										      if(mysqli_num_rows($rs1)<1){
										        echo ""; 
										      }else{
										       while ($row1 = mysqli_fetch_array($rs1)){
		                                        echo '
		                                        <option value="'.$row1["usuario_nombre"].'">'.$row1["nombre"].' '.$row1["apellido"].'</option>
		                                     	';
		                                      $i1++; 
										      }     
										      }

	                                    echo '
	                                    </select>
	                                  </div>
	                                  </div>
	                                    
	                                  <input class="input-xlarge focused" name="tcierre" id="focusedInput" type="hidden" value="sin asignar">
	                                  <input class="input-xlarge focused" name="fcierre" id="focusedInput" type="hidden" value="">
	                                  <input class="input-xlarge focused" name="fprocesando" id="focusedInput" type="hidden" value="">
	                                  <input class="input-xlarge focused" name="fcreacion" id="focusedInput" type="hidden" value="'.$dia.'">
	                                  
	                                  <input class="input-xlarge focused" name="usuario" id="focusedInput" type="hidden" value="'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'">';
	                                  
	                                                                                             
	                             
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

?>