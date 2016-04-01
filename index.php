<?php
//Das Hauptprogramm starten
include_once 'model/Logtable.php';
include_once 'model/nachricht.php';
include_once 'include/settings.php';  
include_once 'include/error_handling.php';
include_once 'class/template.php'; 
include_once 'controller/FrontController.php'; 

$template = new Template();
$frontController = new FrontController($template);
$frontController->execute();  

?>
