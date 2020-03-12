<?php
    session_start();
    include $_SERVER['DOCUMENT_ROOT'].'/intranet/alarma/default/cone.php';
    echo '   
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>ALARMA - TRACKER GPS</title>
    <meta name="description" content="Admin - Portafolio">
    <meta name="author" content="Kevin Chirinos">
    <meta name="keyword" content="Portafolio, Proyectos, Sobre Mi, Habilidades, Descarga, Contacto, Usuarios">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="/intranet/alarma/css/bootstrap.min.css" rel="stylesheet">
    <link href="/intranet/alarma/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="/intranet/alarma/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="/intranet/alarma/css/style-responsive.css" rel="stylesheet">
    <!-- end: CSS -->
    


    <!-- start: Favicon -->
    <link rel="shortcut icon" href="/intranet/alarma/img/favicons.ico">
    <!-- end: Favicon -->
    <style>
    .ocultar{
        display:none;
    }
    .bg_velo{
        position: fixed;top: 0%;left: 0%;background: url(/intranet/alarma/img/bg_fondo.png);width: 100%;height: 100%;
    }
    .bord-pregunta{
        background: #f5c056;height: 25px;
    }
    .bord-exito{
        background: #9fc76f;height: 25px;
    }
    .aleta-exit{
        text-align: center;font-size: 15px;height: 120px;
    }
    .cont-msj{
        width: 40%;margin-left: 30%;margin-top: 100px;
    }
    .btn-acep{
        margin-top: 15px;
    }
    .cont-btn{
        width: 60%;margin-left: 20%;
    }
    .sumit-btn-acep{
        float: left;margin-left: 60px;margin-top: 20px;
    }
    .btn-cancelar{
        float: left;margin-left: 20px;margin-top: 20px;
    }
    </style>
</head>

<body>
    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <!-- start: Header Menu -->
                <a class="brand" href="/intranet/alarma/home/">
                    <img src="/intranet/alarma/img/logo_tracker.png" width="34px" height="34px;"> 
                    <span>Tracker</span>
                </a>
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        
                        <li class="dropdown">

                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i>';
                               if(isset($_SESSION['usuario_nombre'])) {                                
                                echo ' '. $_SESSION['nombre'].' '. $_SESSION['apellido'].' ';
                                 }else {
                                    header('Location: ../login/');
                                }
                                echo '<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Cuenta</span>
                                </li>
                                <li><a href="/intranet/alarma/perfil/"><i class="halflings-icon user"></i>Perfil</a></li>
                                <li><a href="/intranet/alarma/login/logout.php"><i class="halflings-icon off"></i>Cerrar Sesion</a></li>
                                <script>
                                    function r() { location.href="/intranet/alarma/login/logout.php" } 
                                    setTimeout ("r()", 14400000);
                                </script>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">      
            ';
            include $_SERVER['DOCUMENT_ROOT'].'/intranet/alarma/default/menu.php';

?>