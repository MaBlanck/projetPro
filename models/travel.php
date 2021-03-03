<?php 
require_once(__DIR__ .'/database.php');

class Travel extends Database {

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
        $query = 'INSERT INTO `jojfoiq23_travelname` (`name`, `password`, `number_of_passenger`, `email`) VALUES (:name , :password, :number_of_passenger, :email)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $pdoStatement->bindValue(':number_of_passenger', $this->numberOfPassenger, PDO::PARAM_INT);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }



}