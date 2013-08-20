<?php
include_once '../config/config.php';
include_once '../library/mainFunction.php';

// Определяем контроллкер
$controllerName = isset($_GET['controller'])? ucfirst($_GET['controller']):'Index';
//Определяем екшен
$actionName = isset($_GET['action'])? $_GET['action']:'index';



loadPage($controllerName, $actionName);