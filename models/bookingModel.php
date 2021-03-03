<?php 
require_once(__DIR__ .'/database.php');

    class Booking extends Database{

    const MAX_NUMBER_OF_PASSENGER = 8;
    public $geographicLocation = '';
    public $dateFrom = '';
    public $dateTo = '';
    public $passengerNumber = 0;
    public $kidsOnBoat = 0;
    public $email = '';
    public $id = 0;
    public $name = '';


    public function addClientInfoBooking()
    {
        $query = ('INSERT INTO `booking` (`geographic_location`, `date_from`, `date_to`, `number_of_passenger`, `kids_on_boat`, `email`) VALUES (:geographic_location, :date_from, :date_to, :number_of_passenger, :kids_on_boat, :email)');
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':geographic_location', strtoupper($this->geographicLocation), PDO::PARAM_STR);
        $pdoStatement->bindValue(':date_from', $this->dateFrom, PDO::PARAM_STR);
        $pdoStatement->bindValue(':date_to', $this->dateTo, PDO::PARAM_STR);
        $pdoStatement->bindValue(':number_of_passenger', $this->passengerNumber, PDO::PARAM_INT);
        $pdoStatement->bindValue(':kids_on_boat', $this->kidsOnBoat, PDO::PARAM_STR);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }

    public function getActivityList(){
        $query = 'SELECT * FROM `activities`';
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }

    }







?>