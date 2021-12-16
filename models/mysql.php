<?php
// Смотрим сессию:
session_start();
// Парсим конфиг:
$config = parse_ini_file("../config/config.ini");
// Извлекаем параметры из конфига:
// Имя сайта:
$title = $config['title'];
// Адрес сервера mysql:
$mysql = $config['mysql'];
// Порт сервера mysql:
$mysqlPort = $config['port'];
// Логин подключения к серверу БД:
$mysqlLogin = $config['login'];
// Пароль для подключения к серверу БД:
$mysqlPassword = $config['password'];
// Имя базы данных:
$datebase = $config['bd'];
// Закончили парсить конфиг

// Делаем коннект к БД:
if (!$db){
    // Подключение с параметрами из конфига:
    $db = mysqli_connect($mysql.':'.$mysqlPort, $mysqlLogin, $mysqlPassword, $datebase);
    // Кодировка:
    mysqli_set_charset($db, "utf8");
}

function allContent($table, $params = ""){
    global $db;
    return mysqli_fetch_all(mysqli_query($db, "SELECT * FROM $table $params"), MYSQLI_ASSOC);;
}

function oneContent($table, $params = ""){
    global $db;
    return mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM $table $params"));
}

function updContent($table, $params){
    global $db;
    mysqli_query($db, "UPDATE $table $params");
}

function addContent(){

}

function delContent(){
    
}