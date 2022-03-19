<?php
#Открываем сессию в начале программы!
session_start();

# Подгрузка конфигурации проекта
include_once 'config.php';
# Подключаем автозагрузчик
include_once "autoload.php";
include_once "core/basefunction.php";
include_once "core/view.php";
# Подключаем маршрутизацию
include_once "route.php";