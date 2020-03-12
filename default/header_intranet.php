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

<body style="background: #fff;">
    <!-- start: Header -->

    <!-- start: Header -->

    <div style="margin-top: 31px;" class="container-fluid-full">
        <div class="row-fluid">      
            ';
    include $_SERVER['DOCUMENT_ROOT'].'/intranet/alarma/default/menu.php';

?>