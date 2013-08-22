<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty){
    $cartId = isset($_GET['id']) ? $_GET['id'] : NULL;
    if ($cartId == NULL){
        exit();
    }
    $rsChildCats = NULL;
    $rsProducts = NULL;
    $rsCategory = getCatById($cartId);
    //Проверка является ли категогия дочерней или главной
    
    if ($rsCategory['parent_id']==0){
        $rsChildCats = getChildrenForCat($cartId);
    }  else {
        $rsProducts = getProductsByChild($cartId);
    }
    /*echo'<hr><pre>';
    var_dump($rsChildCats);
    echo'</pre>';
    echo'<hr><pre>';
    var_dump($rsProducts);
    echo'</pre>';
    */
    $rsCategories = getAllmainCatsWithChildren(); //Функция возвращает основные категории товаров $smartyrs
    $smarty->assign('pageTitle',"Главная страница".$rsCategory['name']);
    $smarty->assign('rsCategorie',$rsCategories);//масив основные категории товаров для Smarty
    $smarty->assign('rsProducts',$rsProducts);//масив  товаров для Smarty
    $smarty->assign('rsChildCats',$rsChildCats);//масив  под категории Smarty
    $smarty->assign('rsCategory',$rsCategory);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}
    