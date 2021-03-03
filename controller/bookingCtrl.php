<?php

require_once(__DIR__ .'../../models/bookingModel.php');
$formError = array();
$validMessage = null;
/**
 * Contrôle le formulaire
 */
if(isset($_POST['sendCompleteForm'])){
    $booking = new Booking();
    if(!empty($_POST['geographicLocation'])){
        if(isset($_POST['geographicLocation'])){
            $booking->geographicLocation = htmlentities($_POST['geographicLocation']);
        }else {
            $formError['geographicLocation'] = 'Your geographic location is invalid';
        }
    }else {
        $formError['geographicLocation'] = 'Would you make a choice in the list';
    }
    if (!empty($_POST['chooseDateFrom'])) {
        if (isset($_POST['chooseDateFrom'])) {
            $booking->dateFrom = filter_var($_POST['chooseDateFrom'], FILTER_SANITIZE_STRING);
        } else {
            $formError['chooseDateFrom'] = 'Your date of travel is invalid';
        }
    } else {
        $formError['chooseDateFrom'] = 'Please select a date';
    }
    if (!empty($_POST['chooseDateTo'])) {
        if (isset($_POST['chooseDateTo'])) {
            $booking->dateTo = filter_var($_POST['chooseDateTo'], FILTER_SANITIZE_STRING);
        } else {
            $formError['chooseDateTo'] = 'Your date of travel is invalid';
        }
    } else {
        $formError['chooseDateTo'] = 'Please select a date';
    }
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
            $booking->email = $_POST['email'];
        } else {
            $formError['email'] = 'The email is invalid';
        }
    } else {
        $formError['email'] = 'Please enter an email';
    }
    if (!empty($_POST['passengerNumber'])) {
        if (isset($_POST['passengerNumber']) && $_POST['passengerNumber'] > 0 && $_POST['passengerNumber'] <= Booking::MAX_NUMBER_OF_PASSENGER) {
            $booking->passengerNumber = filter_var($_POST['passengerNumber'], FILTER_VALIDATE_INT);
        } else {
            $formError['passengerNumber'] = 'Your number of passenger is invalid';
        }
    } else {
        $formError['passengerNumber'] = 'Please tell us how many passenger you\'ll be on the boat';
    }
    if (isset($_POST['kidsOnBoat'])) {
            if(is_numeric($_POST['kidsOnBoat']) && $_POST['kidsOnBoat'] >= 0 && $_POST['kidsOnBoat'] <= Booking::MAX_NUMBER_OF_PASSENGER - 1 ) {
            $booking->kidsOnBoat = filter_var($_POST['kidsOnBoat'], FILTER_VALIDATE_INT);   
            }else {
                $formError['kidsOnBoat'] = 'You can\'t have negative number of children';
            }
    } else {
        $formError['kidsOnBoat'] = 'Please tell us how many children will be on the boat';
    }
    /* if($booking->passengerNumber != 0){
        $totalPassenger = ($booking->passengerNumber + $booking->kidsOnBoat);
        if($totalPassenger > Booking::MAX_NUMBER_OF_PASSENGER){
            $formError['totalPassenger'] = 'Number of passenger out of the limit. The limit is ' . Booking::MAX_NUMBER_OF_PASSENGER .'.';
        } */
    }
    if(empty($formError)){
        $booking->addClientInfoBooking();
        mail($booking->email, 'Hello from Felicia', 'Your booking form has been sent to the captain. The captain will get you in touch soon. Thank you. Felicia\'s Team');
        $validMessage = 'Great! Your informations has been sent. Go check your email. See you soon on Felicia';
    }
}
$currentDateTime = date('Y-m-d');