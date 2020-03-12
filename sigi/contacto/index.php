
<?php 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/header.php';
require("funcion/home.php"); 
$objModelo = new Formulario(); 
$objModelo->homeSistem(); 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/footer.php'; ?>