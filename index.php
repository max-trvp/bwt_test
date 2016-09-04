<?php
session_start();

ini_set("display_errors", 0);

require_once 'Core/Route.php';
require_once 'Core/Controller.php';
require_once 'Core/Model.php';
require_once 'Core/View.php';
require_once 'Core/config.php';
require '/util/simple_html_dom.php';

$connection = new PDO("mysql:host=". DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASS);

Route::Start(); //Запуск маршрутизатора
?>