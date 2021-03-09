<?php 
require_once(__DIR__ .'/database.php');

    class Booking extends Database{

    const MAX_NUMBER_OF_PASSENGER = 8;
    public $geoLocation = '';
    public $checkInDate = '';
    public $checkOutDate = '';
    public $numberOfPassenger  = 0;
    public $kidsNumber = 0;
    public $email = '';
    public $id = 0;
    public $name = '';

        /**
         * Méthode permettant d'ajouter les informations saisi par l'utlisateur
         *
         * @return bool
         */
    public function addClientInfoBooking()
    {
        $query = ('INSERT INTO `jojfoiq23_bookyourtrip` (`geoLocation`, `checkInDate`, `checkOutDate`, `numberOfPassenger`, `kidsNumber`, `email`) VALUES (:geoLocation, :checkInDate, :checkOutDate, :numberOfPassenger, :kidsNumber, :email)');
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':geoLocation', $this->geoLocation, PDO::PARAM_STR);
        $pdoStatement->bindValue(':checkInDate', $this->checkInDate, PDO::PARAM_STR);
        $pdoStatement->bindValue(':checkOutDate', $this->checkOutDate, PDO::PARAM_STR);
        $pdoStatement->bindValue(':numberOfPassenger', $this->numberOfPassenger, PDO::PARAM_INT);
        $pdoStatement->bindValue(':kidsNumber', $this->kidsNumber, PDO::PARAM_STR);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }

        /**
         * Méthode permettant de récupérer la liste des activités dans le but de les afficher
         *
         * @return object[]
         */
    public function getActivityList(){
        $query = 'SELECT * FROM `jojfoiq23_activities_list`';
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }

    }







?>