
<?php 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/header.php';
require("funcion/lista.php"); 
$objModelo = new Formulario(); 
$objModelo->listarUsuario(); 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/footer.php'; ?>