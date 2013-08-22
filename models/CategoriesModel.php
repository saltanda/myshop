<?php

/**
 * Получение подкатегорий
 * @param type $catId индефикатор категории
 */
function getChildrenForCat($catId){
    $sql = "SELECT * FROM `categories` WHERE `parent_id` = '{$catId}' ";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs); // функция в mainFunction.php
    
}



/**
 * Модель для работы с категориями и подкатегориями
 */

function getAllmainCatsWithChildren(){
    $sql = 'SELECT * FROM `categories` WHERE `parent_id` = 0 ';
    $rs = mysql_query($sql);
    
    while ($row = mysql_fetch_assoc($rs)) {
        $rsChildren = getChildrenForCat($row['id']);
        if($rsChildren){
            $row['children'] = $rsChildren;
        }
        
        $smartyrs[] = $row;
    }
    return $smartyrs;
}

/**
 *  Перехват id категории и выборка
 * @param type $cartId id категории
 */

function getCatById($cartId){
    $cartId = intval($cartId);
    $sql = "SELECT * FROM `categories` WHERE `id` = $cartId";
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}
     