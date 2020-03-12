<?php 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/header.php';
require("funcion/elim.php"); 
$objModelo = new Formulario(); 
$objModelo->editarUsuario(); 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/footer.php'; ?>