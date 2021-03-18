<?php 
require_once(__DIR__ .'/database.php');

class Travel extends Database {

    const MAX_NUMBER_OF_PASSENGER = 8;
    public $id = 0;
    public $name = '';
    public $password = '';
    public $numberOfPassenger = '';
    public $email = '';

    /**
     * Fonction permettant d'ajouter les informations du nom du voyage
     *
     * @return bool
     */
    public function addTravelNameInfo(){
        $query = 'INSERT INTO `jojfoiq23_travelname` (`name`, `numberOfPassenger`, `email`) VALUES (:name , :numberOfPassenger, :email)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':numberOfPassenger', $this->numberOfPassenger, PDO::PARAM_INT);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }

    /**
     * Méthode permettant de récupérer les information du voyage
     *
     * @return object
     */
    public function getTravelInfo(){
        $query = 'SELECT `id`, `name`, `numberOfPassenger`, `email` FROM jojfoiq23_travelname WHERE `name` = :name AND `numberOfPassenger` = :numberOfPassenger AND `email` = :email;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR); 
        $pdoStatement->bindValue(':numberOfPassenger', $this->numberOfPassenger, PDO::PARAM_INT); 
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR); 
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }

        /**
         * Méthode permettant de récupérer les infos du voayeg par le nom de celui-ci
         *
         * @return void
         */
    public function getTravelInfoByName(){
        $query = 'SELECT `id`, `name`, `numberOfPassenger`, `email` FROM jojfoiq23_travelname WHERE `name` = :name;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR); 
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Méthode permettant de récupérer TOUS les voyages
     *
     * @return object[]
     */
    public function getAllTravelsInfo()
    {
        $query = 'SELECT `id`, `name`, `numberOfPassenger`, `email` FROM jojfoiq23_travelname;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':numberOfPassenger', $this->numberOfPassenger, PDO::PARAM_INT);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Méthode permettant de récupérer le mot de passe de l'utilisateur par le nom du voyage
     *
     * @return object
     */
    public function getPasswordUserByTravelName()
    {
        $query = 'SELECT `name`, `password` FROM `jojfoiq23_travelname` WHERE `name` = :name;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }
    /**
     * Méthode permettant d'ajouter le mot de passe de l'utilisateur en BDD
     *
     * @return bool
     */
    public function updatePasswordFromUser(){
        $query = 'UPDATE `jojfoiq23_travelname` SET `password` = :password WHERE `id` = :id';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }


    /**
     * Méthode permettant de supprimer le champs correspondant au nom du voyage
     *
     * @return bool
     */
    public function deleteTravelByName(){
        $query = 'DELETE FROM `jojfoiq23_travelname` WHERE `name` = :name';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }
}