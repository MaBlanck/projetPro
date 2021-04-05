<?php
require_once(__DIR__ . '../../models/travel.php');
$formError = array();
$message = '';
//Vérifie si l'utilisateur de la session n'existe pas, si c'est le cas, l'utilisateur est renvoyé sur la page d'erreur
//protection URL
if(!isset($_SESSION['user'])) {
    header('location:' . DOMAIN_URL_PUBLIC . '/views/error404.php');
};
//on instancie l'objet Travel
        $travel = new Travel();
//si le POST n'est pas vide et qu'il y click sur le bouton
if (!empty([$_POST])) {
    if (isset($_POST['sendInfosTravel'])) {  
        //on vérifie la présence du nom entré et on le stock en attribut de l'objet correspondant
        if (!empty($_POST['cruisename'])) {
            //le htmlentities permet de modifier les caractère spéciaux, une sécurité
            $travel->name = htmlentities($_POST['cruisename']);
        } else {
            $formError['cruisename'] = 'Veuillez entrer un nom de voyage';
        }
        //on vérifie la présence de l'email puis on stock la valeur, puis on filtre pour la sécurité
        if (!empty($_POST['customerEmail'])) {
            $travel->email = filter_var($_POST['customerEmail'], FILTER_SANITIZE_EMAIL);
        } else {
            $formError['customerEmail'] = 'Veuillez entrer un email valide';
        }
        //on vérifie la présence de la valeur et que celle-ci ne dépasse le nombre maximale grâce à une constante mis en attribut dans l'objet
        if (!empty($_POST['numberOfPassenger']) && $_POST['numberOfPassenger'] <= Travel::MAX_NUMBER_OF_PASSENGER) {
            //on stock et on sécurise
            $travel->numberOfPassenger = htmlentities($_POST['numberOfPassenger']);
        } else {
            $formError['numberOfPassenger'] = 'Veuillez entrer un nombre valide de passagers. max 8';
        }
        //si aucune erreur est relevée, on ajoute les informations en BDD
        if (empty($formError)) {
            if ($travel->addTravelNameInfo()) {
                //on affiche un message pour prévenir l'utilisateur que tout à fonctionné
                $message = 'Vos informations ont bien été envoyées';
                //on envoit un mail à l'email qui a été entrée qui contient un lien qui va rediriger vers la page d'inscription pour l'utilisateur
                mail($travel->email, 'Hello beloved Chartered', 'follow this link --><a href="' . DOMAIN_URL_PUBLIC .'/signup/user&name=' . $travel->name . '&mail=' . $travel->email . '&numberOfPassenger=' . $travel->numberOfPassenger . '">link</a>, to sign up for your cruise', 'Content-Type: text/html; charset=utf-8' . "\r\n");
            } else {
                $formError['general']['error'] = 'Error';
            }
        }
    }
}
//Gestion de suppression d'un voyage
if (isset($_POST['deleteCruise'])) {
    $travel->name = $_POST['cruiseName'];
    if ($travel->deleteTravelByName()) {
        $msgSuccess = 'The cruise has been deleted with success';
    } else {
        $msgFail = 'Something went wrong during the delete process';
    }
}
//appelle de la méthode pour récupérer toutes les infos de tous les voyages
$listCruise = $travel->getAllTravelsInfo();
