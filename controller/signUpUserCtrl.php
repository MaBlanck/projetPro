<?php
require_once(__DIR__ . '../../models/travel.php');
$message = '';
$formError = array();
$regexName = '/^$/';
//On vérifie si il y a plus d'un paramètre passé en GET
if (count($_GET) > 1) {
    //si c'est le cas on vérifie si le paramètre existe et qu'il répond à un Regex
    if (!empty($_GET['name'])) {
        $name = preg_match($regexName, $_GET['name']);
    }
    //Idem pour l'email qu'on filtre à l'aide d'un filter_var
    if (!empty($_GET['mail'])) {
        $email = filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL);
    }
    //enfin on vérifie que le dernier paramètre est bien de type INT
    if (!empty($_GET['numberOfPassenger']) && is_numeric($_GET['numberOfPassenger'])) {
        $numberOfPass = htmlentities($_GET['numberOfPassenger']);
    }
}
//Au click sur le bouton on instancie l'objet Travel
if (isset($_POST['signUpButton'])) {
    $travel = new Travel();
    //vérfication si les mots de passes sont identiques
    if (!empty($_POST['password'])) {
        if ($_POST['password'] == $_POST['passwordConfirm']) {
            $travel->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        } else {
            $formError['password'] = 'Passwords are not identical';
        }
    } else {
        $formError['password'] = 'would you please enter a password';
    }
    //vérification de l'entrée travelName si il est présent, si c'est le cas on le stock dans l'attribut de l'objet travel correspondant
    if (!empty($_POST['travelName'])) {
        $travel->name = htmlentities($_POST['travelName']);
    } else {
        $formError['travelName'] = 'le nom du voyage n\'est pas le bon';
    }
    //Vérification de l'email
    if (!empty($_POST['email'])) {
        $travel->email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    } else {
        $formError['email'] = 'wrong email bastard';
    }
    //Vérification du nombre de passagers
    if (!empty($_POST['numberOfPassenger'])) {
        $travel->numberOfPassenger = htmlentities($_POST['numberOfPassenger']);
    } else {
        $formError['numberOfPassenger'] = 'Wrong number';
    }var_dump($formError);
    //si aucune erreur est relevé on appelle la méthode qui va récupérer les informations
    if (empty($formError)) {
        $getInfosTravel = $travel->getTravelInfo();
        //si ce que retourne la méthode n'est pas faux, c'est à dire qu'elle retourne un objet
        if ($getInfosTravel != false) {
            //on stocke dans l'attribut id de l'objet, l'id du champs dans la base de donnée qui a été retourné 
            $travel->id = $getInfosTravel->id;
            //On update le mot de passe grâce à la méthode de l'objet Travel puis on redirige l'utilisateur
            $travel->updatePasswordFromUser();
            $_SESSION['travelName'] = $_POST['travelName'];
            $_SESSION['numberOfPassenger'] = $_POST['numberOfPassenger'];
            header('location: /private/signup/user/validate');
        }
    }
}
