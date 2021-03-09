<?php

require_once(__DIR__ .'../../models/bookingModel.php');
$formError = array();
$validMessage = null;

/**
 * Contrôle le formulaire
 */
if(isset($_POST['sendCompleteForm'])){
    //on instancie l'objet Booking au click du bouton
    $booking = new Booking();
    //on vérifie si le champ n'est pas vide
    if(!empty($_POST['geoLocation'])){
        //si valeur il y a on la stocke dans l'attribut correspondant en la sécurisant
        if(isset($_POST['geoLocation'])){
            $booking->geoLocation = htmlentities($_POST['geoLocation']);
        }else {
            $formError['geoLocation'] = 'Your geographic location is invalid';
        }
    }else {
        $formError['geoLocation'] = 'Would you make a choice in the list';
    }
    //on fait la même vérification que précédemment avec les dates
    if (!empty($_POST['checkInDate'])) {
        if (isset($_POST['checkInDate'])) {
            $booking->checkInDate = filter_var($_POST['checkInDate'], FILTER_SANITIZE_STRING);
        } else {
            $formError['checkInDate'] = 'Your date of travel is invalid';
        }
    } else {
        $formError['checkInDate'] = 'Please select a date';
    }
    if (!empty($_POST['checkOutDate'])) {
        if (isset($_POST['checkOutDate'])) {
            $booking->checkOutDate = filter_var($_POST['checkOutDate'], FILTER_SANITIZE_STRING);
        } else {
            $formError['checkOutDate'] = 'Your date of travel is invalid';
        }
    } else {
        $formError['checkOutDate'] = 'Please select a date';
    }
    //Vérification de l'email.
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
            $booking->email = $_POST['email'];
        } else {
            $formError['email'] = 'The email is invalid';
        }
    } else {
        $formError['email'] = 'Please enter an email';
    }
    //Vérification du nombre de passager. Le nombre doit être compris entre 1 et 8
    if (!empty($_POST['numberOfPassenger'])) {
        if (isset($_POST['numberOfPassenger']) && $_POST['numberOfPassenger'] > 0 && $_POST['numberOfPassenger'] <= Booking::MAX_NUMBER_OF_PASSENGER) {
            $booking->numberOfPassenger = htmlentities($_POST['numberOfPassenger']);
        } else {
            $formError['numberOfPassenger'] = 'Your number of passenger is invalid';
        }
    } else {
        $formError['numberOfPassenger'] = 'Please tell us how many passenger you\'ll be on the boat';
    }
    //vérification du nombre d'enfants. Maximum - 1 car les enfant doivent être compris dan le nombre maximum
    if (isset($_POST['kidsNumber'])) {
            if(is_numeric($_POST['kidsNumber']) && $_POST['kidsNumber'] >= 0 && $_POST['kidsNumber'] <= Booking::MAX_NUMBER_OF_PASSENGER - 1 ) {
            $booking->kidsNumber = htmlentities($_POST['kidsNumber']);   
            }else {
                $formError['kidsNumber'] = 'You can\'t have negative number of children';
            }
    } else {
        $formError['kidsNumber'] = 'Please tell us how many children will be on the boat';
    }
    //si aucune erreur est relevée on ajoute les information en BDD et on envoie un message par mail à l'utilisateur
    if(empty($formError)){
        $booking->addClientInfoBooking();
        mail($booking->email, 'Hello from Felicia', 'Your booking form has been sent to the captain. The captain will get you in touch soon. Thank you. Felicia\'s Team');
        //Un message s'affiche sur la page de l'utilisateur pour le prévenir du bon fonctionnement de sa démarche
        $validMessage = 'Great! Your informations has been sent. Go check your email. See you soon on Felicia';
    }
}
$currentDateTime = date('Y-m-d');