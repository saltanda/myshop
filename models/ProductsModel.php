<?php

function getLastProducts($limit = NULL){
    $sql = 'SELECT * FROM `products` ORDER BY `id` DESC';
    if($limit){
        $sql .= " LIMIT {$limit}";
    }
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
    
}

function getProductsByChild($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM `products` WHERE `category_id` = $itemId";
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}
    