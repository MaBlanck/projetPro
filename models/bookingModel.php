<?php 
require_once(__DIR__ .'../../config/config.php');

    class Booking{

    public $geographicLocation = '';
    public $dateFrom = '';
    public $dateTo = '';
    public $passengerNumber = 0;
    public $kidsOnBoat = '';
    public $email = '';
    private $pdo;

    public function __construct(){

        try {
            $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8;', DB_USER, DB_PASSWORD,  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

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

    }







?>