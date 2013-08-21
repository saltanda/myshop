<?php

/**
 * Модель для работы с категориями
 */

function getAllmainCatsWithChildren(){
    $sql = 'SELECT * FROM `categories` WHERE `parent_id` = 0 ';
    $rs = mysql_query($sql);
    
    while ($row = mysql_fetch_assoc($rs)) {
      $smartyrs[] = $row;
    }
    return $smartyrs;
}

     