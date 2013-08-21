<?php

//Константы для обращения к контролеру
define('PathPrefix','../controllers/');
define('PathPostfix','Controller.php');

//Используем шаблон
$template="default";

//Определяем путь к файлам шаблона
define('TemplatePrefix',"../views/{$template}");
define('TemplatePostfix',".tpl");
//Определяем путь к файлам шаблонизатора
define('TemplateWebPath',"/templates/{$template}/");

//Инициализация класса Smarty

require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/Smarty/templates_c');
$smarty->setCacheDir('../tmp/Smarty/cache');
$smarty->setConfigDir('../tmp/Smarty/config');
$smarty->assign('templateWebPath',TemplateWebPath);