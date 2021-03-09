<?php 
session_start();
session_regenerate_id();
define('DB_HOST', 'localhost');
define('DB_NAME', 'mojznfek_felicia');
define('DB_USER', 'MaxBlanck');
define('DB_PASSWORD', 'WaffWaff2016');

define('APP_ROOT', dirname(__DIR__) . '/');
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
?>