

 <?php
    session_start();
    include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/cone.php';
    if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
        if(empty($_POST['usuario_nombre']) || empty($_POST['usuario_clave'])) {
            echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
        }else {
            // "limpiamos" los campos del formulario de posibles códigos maliciosos
            $usuario_nombre = mysqli_real_escape_string($enlace, $_POST['usuario_nombre']);
            $usuario_clave = mysqli_real_escape_string($enlace, $_POST['usuario_clave']);
            $usuario_clave = md5($usuario_clave);
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            $sql = mysqli_query($enlace, "SELECT * FROM usuarios WHERE usuario_nombre='".$usuario_nombre."' AND usuario_clave='".$usuario_clave."'");
            if($row = mysqli_fetch_array($sql)) {
                $_SESSION['usuario_id'] = $row['usuario_id']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
                $_SESSION['usuario_nombre'] = $row["usuario_nombre"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
                $_SESSION['nombre'] = $row["nombre"]; // creamos la sesion "nombre" y le asignamos como valor el campo nombre
                $_SESSION['apellido'] = $row["apellido"]; // creamos la sesion "apellido" y le asignamos como valor el campo apellido 
                $_SESSION['usuario_email'] = $row["usuario_email"]; // creamos la sesion "usuario_email" y le asignamos como valor el campo usuario_email 
                $_SESSION['tipo'] = $row["tipo"]; // creamos la sesion "usuario_email" y le asignamos como valor el campo usuario_email 
                $_SESSION['nif'] = $row["nif"];// creamos la sesion "nif" y le asignamos como valor el campo nif
                header("Location: ../home/");
            }else {
?>
                <div class='top-content'>
                            
                            <div class='inner-bg'>
                                <div class='container'>
                                    
                                    <div class='row'>
                                        <div class='col-sm-5'>
                                            <div class='form-box'>
                                                <div class='form-top'>
                                                    <div class='form-top-left'>
                                                        <h3>Los datos que ingreso no son correctos</h3>

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
<?php
            }
        }
    }else {
        header("Location: acceso.php");
    }
?> 