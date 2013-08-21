<?php
function indexAction($smarty){
    $smarty->assign('pageTitle',"Главная страница");
    loadTemplate($smarty, 'index');
}