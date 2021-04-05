<?php
session_start();
session_regenerate_id();
define('DB_HOST', 'mysql-sailfelicia.alwaysdata.net');
define('DB_NAME', 'sailfelicia_one');
define('DB_USER', '227874');
define('DB_PASSWORD', 'tonculbluesmec');

define('DOMAIN_URL_PUBLIC', 'http://sailfelicia.alwaysdata.net');
define('APP_ROOT', dirname(__DIR__) . '/');
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
