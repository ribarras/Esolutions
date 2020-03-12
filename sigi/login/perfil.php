<?php
    session_start();
    include('acceso_db.php');
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
	    $perfil = mysqli_query($enlace, "SELECT * FROM usuarios WHERE usuario_id='".$_GET['id']."'") or die(mysqli_error());
	    if(mysqli_num_rows($perfil)) { // Comprobamos que exista el registro con la ID ingresada
	        $row = mysqli_fetch_array($perfil);
	        $id = $row["usuario_id"];
	        $nick = $row["usuario_nombre"];
	        $email = $row["usuario_email"];
	        $freg = $row["usuario_freg"];
	?>
	        <div id="welcome">	
				<p>
					<p><strong>Nick:</strong> <?=$nick?></p>
			        <p><strong>Email:</strong> <?=$email?></p>
			        <p><strong>Registrado  como icd hd didel:</strong> <?=$freg?></p>
			        <p><strong>URL del perfil:</strong> <a href="perfil.php?id=<?=$id?>">Click aquí</a></p>
			        <p><strong><a href="cambiar_contrasena.php">Cambiar contraseña</a></p></strong>
				</p>
			</div>
	<?php
	    }else {
	?>
	        <p>El perfil seleccionado no existe o ha sido eliminado.</p>
	<?php
	    }
	?> 
</body>
</html>