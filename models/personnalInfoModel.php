<?php
require_once(__DIR__ . '../../models/database.php');

class Personnal extends Database{

    public $id = 0;
    public $legalName = null;
    public $cellNumber = null;
    public $dateOfBirth = null;
    public $passeportNumber = null;
    public $expirationDate = null;

    /**
     * Méthode permettant d'initialiser les informations personnelles
     *
     * @return bool
     */
    public function initPersonnalInfos(){
        $query = 'INSERT INTO `jojfoiq23_personnalinfo` (`id_jojfoiq23_users`) VALUES (:id_jojfoiq23_users);';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':id_jojfoiq23_users', $this->idUser, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }

    /**
     * Méthode permettant de récupérer l'id du passager pour vérification de son existence ou non
     * true si il existe, false si l'id n'existe pas.
     *
     * @return bool
     */
    public function checkUserIdExist(){
        $query = 'SELECT COUNT(id_jojfoiq23_users) as isExist FROM `jojfoiq23_personnalinfo` WHERE `id_jojfoiq23_users` = :id_jojfoiq23_users;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':id_jojfoiq23_users', $this->idUser, PDO::PARAM_INT);
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ)->isExist;
    }

    /**
     * Méthode permettant de récupérer les infos du passager par son id unique 
     *
     * @return Personnal
     */
    public function getPersonnalInfoByUserId(){
        $query = 'SELECT `legalName`, `cellNumber`, `dateOfBirth`, `passeportNumber`, `expirationDate`, `id_jojfoiq23_users` FROM `jojfoiq23_personnalinfo` WHERE `jojfoiq23_personnalinfo`.`id_jojfoiq23_users` = :idUser;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }


        /**
         * Méthode permettant de mettre à jour les données du formulaire
         *
         * @return bool
         */
    public function updatePersonnalInfos(){
        $query = 'UPDATE `jojfoiq23_personnalinfo` SET `legalName` = :legalName, `cellNumber` = :cellNumber, `dateOfBirth` = :dateOfBirth, `passeportNumber` = :passeportNumber, `expirationDate` = :expirationDate WHERE `jojfoiq23_personnalinfo`.`id_jojfoiq23_users` = :idUser ;';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':legalName', $this->legalName, PDO::PARAM_STR);
        $pdoStatement->bindValue(':cellNumber', $this->cellNumber, PDO::PARAM_STR);
        $pdoStatement->bindValue(':dateOfBirth', $this->dateOfBirth, PDO::PARAM_STR);
        $pdoStatement->bindValue(':passeportNumber', $this->passeportNumber, PDO::PARAM_STR);
        $pdoStatement->bindValue(':expirationDate', $this->expirationDate, PDO::PARAM_STR);
        $pdoStatement->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }
}