<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty){
    
    $rsCategories = getAllmainCatsWithChildren(); //Функция возвращает основные категории товаров $smartyrs
    $rsProducts = getLastProducts(16);//Функция возвращает товары $smartyrs
    /*echo'<pre>';
    print_r ($rsProducts);
    echo'</pre>';*/
    
    
    $smarty->assign('pageTitle',"Главная страница");
    $smarty->assign('rsCategorie',$rsCategories);//масив основные категории товаров для Smarty
    $smarty->assign('rsProducts',$rsProducts);//масив  товаров для Smarty
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}