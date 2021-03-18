<?php
require_once(__DIR__ . '../../models/database.php');

class User extends Database{

    public $id = 0;
    public $lastname = '';
    public $firstname = '';

    /**
     * Méthode permettant ajouter les noms et prénoms de l'utilisateur
     * 
     * @return bool
     */
    public function addUserNames(){
        $query = 'INSERT INTO `jojfoiq23_users` (`lastname`, `firstname`, id_jojfoiq23_travelName) VALUES (:lastname , :firstname, :id_jojfoiq23_travelName);';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $pdoStatement->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $pdoStatement->bindValue(':id_jojfoiq23_travelName', $this->idTravel, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }

    /**
     * Méthode permettant de récupérer les informations des passagers via l'id du voyage
     *
     * @return object[]
     */
    public function getUserInfos(){
        $query = 'SELECT `jojfoiq23_users`.`id`, `jojfoiq23_users`.`lastname`, `jojfoiq23_users`.`firstname` FROM `jojfoiq23_users` INNER JOIN `jojfoiq23_travelname` ON `jojfoiq23_users`.`id_jojfoiq23_travelName` = `jojfoiq23_travelname`.`id` WHERE `id_jojfoiq23_travelName` = :idTravel;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':idTravel', $this->idTravel, PDO::PARAM_INT);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }
}