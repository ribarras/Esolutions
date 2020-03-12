<?php 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/header.php';
require("funcion/contrasena.php"); 
$objModelo = new Formulario(); 
$objModelo->CambiarContrasena(); 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/footer.php'; ?>