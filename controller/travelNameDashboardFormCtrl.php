<?php
require_once(__DIR__ . '../../models/travel.php');
$formError = array();
$message = '';
//si le POST n'est pas vide et qu'il y click sur le bouton
if (!empty([$_POST])) {
    if (isset($_POST['sendInfosTravel'])) {
        //on instancie l'objet Travel
        $travel = new Travel();
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
                mail($travel->email, 'Hello beloved Chartered', 'follow this link --><a href="http://felicia/signup/user&name=' . $travel->name . '&mail=' . $travel->email . '&numberOfPassenger=' . $travel->numberOfPassenger . '">link</a>, to sign up for your cruise', 'Content-Type: text/html; charset=utf-8' . "\r\n");
            } else {
                $formError['general']['error'] = 'Error';
            }
        }
    }
}
