<?php

/**
 * 
 * Функция загрузки страницы
 * 
 * @param type $controllerName формируются GET параметром
 * @param type $actionName формируются GET параметром
 */
function loadPage($controllerName, $actionName='index') {
    include_once PathPrefix.$controllerName.PathPostfix;
    $function = $actionName.'Action';
    $function();
}