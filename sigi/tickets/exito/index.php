<?php 
include $_SERVER['DOCUMENT_ROOT'].'/intranet/gtatc/default/header.php';
require("funcion/home.php"); 
$objModelo = new Formulario(); 
$objModelo->homeSistem(); 
include $_SERVER['DOCUMENT_ROOT'].'/intranet/gtatc/default/footer.php'; ?>