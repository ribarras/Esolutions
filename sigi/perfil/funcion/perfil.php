<?php
class Formulario

	{

		function listarPerfil()
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
                        <a href="#">Perfil</a>
                    </li>
                </ul>



                <div class="box-content">
                <!--////////////////////////////////////////////////////////-->
                    <div class="box span6" ontablet="span6" ondesktop="span6">
                                    <div class="box-header">
                                        <h2><i class="halflings-icon user"></i><span class="break"></span>Perfil</h2>
                                        <div class="box-icon">
                                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                                            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <form class="form-horizontal" style="padding:10px;background:#fff;color:#000;" method="post" action="actualizar.php" enctype="multipart/form-data">                                         

                                              <div class="control-group">
                                                <label class="control-label">Usuario</label>
                                                <div class="controls">
                                                  <span class="input-xlarge uneditable-input">'.$_SESSION['usuario_nombre'].'</span>
                                                </div>
                                              </div>

                                              <div class="control-group">
                                                <label class="control-label">Nombre Completo</label>
                                                <div class="controls">
                                                  <span class="input-xlarge uneditable-input">'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'</span>
                                                </div>
                                              </div>

                                              <div class="control-group">
                                                <label class="control-label">Correro Electronico</label>
                                                <div class="controls">
                                                  <span class="input-xlarge uneditable-input">'.$_SESSION['usuario_email'].'</span>
                                                </div>
                                              </div>                                              

                                              <div class="control-group">
                                                <label class="control-label"></label>
                                                <div class="controls">
                                                  <a href="/eweb2019/sigi/perfil/ccontrasena/">Cambiar Contraseña</a>
                                                </div>
                                              </div>

                                        </form>
                                    </div>
                                </div>
				<!--///////////////////////////////////////////-->
                </div>'; 

			}
		}

?>