<?php
require_once(__DIR__ .'../../config/config.php');


class Database {

    protected $pdo;
    /**
     * Cette class Database permet de créer la connexion à la base de donnée grâce à la méthode magique construct
     */
    public function __construct()
    {
        //on fait un try & catch. On essaye une connexion avec les constante que l'on a défini dans le fichier config
        try {
            $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8;', DB_USER, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] );
        }
        //Si la connexion échoue, une exception est levée et on affiche un message d'erreur
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>