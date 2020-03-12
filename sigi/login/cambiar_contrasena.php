<?php
    session_start();
    include('acceso_db.php'); // incluímos los datos de conexión a la BD
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/style.css" media="screen" rel="stylesheet">
</head>
<body>
    <?php
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
                        echo "Contraseña cambiada correctamente.";
                    }else {
                        echo "Error: No se pudo cambiar la contraseña. <a href='javascript:history.back();'>Reintentar</a>";
                    }
                }
            }else {
    ?>
        <div class="container mregister">
            <div id="login">
            <h1>Registrar</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label>Nueva contraseña:</label><br />
                <input class="input" type="password" name="usuario_clave" maxlength="15" /><br />
                <label>Confirmar:</label><br />
                <input class="input" type="password" name="usuario_clave_conf" maxlength="15" /><br />
                <p>
                <input class="button" type="submit" name="enviar" value="Enviar" />
                </p>
            </form>
            </div>
        </div>
    <?php
            }
        }else {
            echo "Acceso denegado.";
        }
    ?> 
</body>
</html>