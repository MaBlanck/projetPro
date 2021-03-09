<?php 
require_once(__DIR__ .'../../models/database.php');

class Admin extends Database {

    public $id = 0;
    public $username = '';
    public $password = '';


    /**
     * Méthode permettant d'insérer un username et mdp
     *
     * @return bool
     */
    /* public function addAdmin()
    {
        $query = 'INSERT INTO `jojfoiq23_admin` (`username`, `password`) VALUES (:username, :password)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':username', $this->username, PDO::PARAM_STR);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        return $pdoStatement->execute();
        
    } */

        /**
         * Méthode permettant de récupére le mdp par le username
         *
         * @return object
         */
    public function getLoginInfosByUsername(){
        $query = 'SELECT `password` FROM `jojfoiq23_admin` WHERE `username` = :username';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':username', $this->username);
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }

}