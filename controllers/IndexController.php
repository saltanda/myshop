<?php

include_once '../models/CategoriesModel.php';

function indexAction($smarty){
    
    $rsCategories = getAllmainCatsWithChildren(); //Функция возвращает основные категории товаров $smartyrs
    print_r ($rsCategories);
    $smarty->assign('pageTitle',"Главная страница");
    $smarty->assign('rsCategorie',$rsCategories);//масив основные категории товаров для Smarty
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}