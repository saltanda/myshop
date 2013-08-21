<?php

$dblocation = "localhost";
$dbname = "myshop";
$dbuser = "root";
$dbpassword = "";


$db = mysql_connect($dblocation,$dbuser,$dbpassword); 

if(!$db){
    echo "Ошибка подключения";
    exit();
}

mysql_set_charset('utf8');

if(!mysql_select_db($dbname,$db)){
    echo "Ошибка выбора БД";
    exit();
}