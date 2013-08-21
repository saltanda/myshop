<?php

/**
 * 
 * Функция загрузки страницы
 * 
 * @param type $controllerName формируются GET параметром
 * @param type $actionName формируются GET параметром
 */
function loadPage($smarty, $controllerName, $actionName='index') {
    include_once PathPrefix.$controllerName.PathPostfix;
    $function = $actionName.'Action';
    $function($smarty);
}

/**
 * * Функция загрузки шаблона
 * 
 * @param type $smarty  экземпляр класса Smarty
 * @param type $templateName имя шаблона
 */
function loadTemplate($smarty,$templateName){
    $smarty->display($templateName.TemplatePrefix);
}