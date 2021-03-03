<?php
require_once(__DIR__ .'../../config/config.php');


class Database {

    protected object $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8;', DB_USER, DB_PASSWORD,  [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


?>