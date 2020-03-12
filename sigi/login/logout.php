<?php
    session_start();
    include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/cone.php'; // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
        session_destroy();
        header("Location: /eweb2019/sigi/login/");
    }else {
        echo "Operación incorrecta.";
    }
?> 