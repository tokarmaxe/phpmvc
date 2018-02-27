<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 26.01.2018
 * Time: 14:24
 */
// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы
define('ROOT',dirname(__FILE__));
require_once (ROOT.'/components/Autoload.php');
// 3. Установка соеденения с БД

// 4. Вызов роутера
$router=new Router();
$router->run();