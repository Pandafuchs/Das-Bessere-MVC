<?php
//error_reporting(E_NONE);
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();

//Konstanten
define('SALT', 'RANDOM_SALT!');

include_once 'class/template.php'; 
include_once 'controller/FrontController.php';

$template = new Template();

$frontController = new FrontController($template);
date_default_timezone_set('Europe/Berlin');
setlocale (LC_ALL, 'de_DE');

$frontController->execute();

?>
