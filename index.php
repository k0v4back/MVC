<?php

// FRONT COTROLLER

// 1. Общие настройки
//Включили отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы, т.е. файлы каркаса
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// 3. Установка соединения с БД


// 4. Вызор Router
$router = new Router();//Создали экземпляр класа ROuter()
$router->run(); //Вызвали метод run() из класса Router()




