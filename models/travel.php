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
     * Méthode permettant d'ajouter le mot de passe de l'utilisateur en BDD
     *
     * @return void
     */
    public function updatePasswordFromUser(){
        $query = 'UPDATE `jojfoiq23_travelname` SET `password` = :password WHERE `id` = :id';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }

}