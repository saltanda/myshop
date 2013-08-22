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
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}

/**
 *   Преобразование результата выборки асоцифтивного масива
 * @param type $rs -- array
 * @return boolean|array
 */
function createSmartyRsArray($rs){
    if(! $rs) return false;
    
    $smartyrs = array();
    while ($row = mysql_fetch_assoc($rs)) {
             $smartyrs[] = $row;
    }
    return $smartyrs;
    
}