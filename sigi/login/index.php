<?php 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/login/head.php';
require("log/function.php"); 
$objModelo = new Formulario(); 
$objModelo->LoginSist(); 
include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/login/foot.php'; ?>