<?php
require_once(__DIR__ . '../../models/user.php');
require_once(__DIR__ . '../../models/personnalInfoModel.php');
$formError = array();
$user = new User();
//On récupère id du voyage et on stock dans une superglobale session
if (isset($_SESSION['idTravel'])) {
    $user->idTravel = $_SESSION['idTravel'];
} else {
    header('location: /login/user');
}
//Au click du bouton save
if (isset($_POST['saveUserNames'])) {

    if (!empty($_POST['lastname'])) {
        $user->lastname = htmlentities($_POST['lastname']);
    } else {
        $formError['lastname'] = 'Would you enter your lastname';
    }
    if (!empty($_POST['firstname'])) {
        $user->firstname = htmlentities($_POST['firstname']);
    } else {
        $formError['firstname'] = 'Would you enter your lastname';
    }
    if (empty($formError)) {
        //Si la méthode pour ajouter les noms retourne true, on affiche un message à l'utilisateur
        if ($user->addUserNames()) {
            $message = 'You names has been added successfully. Now you can start your survey';
        } else {
            $message = 'Something went wrong during the process. Please try again';
        }
    }
}
$userAlreadyRegistered = $user->getUserInfos();
if (isset($_POST['startSurvey'])) {
    if (isset($_POST['UserId']) && $_POST['UserId'] > 0) {
        $_SESSION['UserId'] = $_POST['UserId'];
    } else {
        header('location: /private/user/dashboard');
    }
    if (!empty($_POST['lastname']) && !empty($_POST['firstname'])) {
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['firstname'] = $_POST['firstname'];
    } else {
        header('location: /private/user/dashboard');
    }
    $personnal = new Personnal();
    $personnal->idUser = $_SESSION['UserId'];
    //si l'utilisateur n'existe pas, on initie sa ligne dans la table
    if (!$personnal->checkUserIdExist()) {
        if (!$personnal->initPersonnalInfos()) {
            $message = 'Error during the process';
            header('location: /private/user/dashboard');
        }
    }
    header('location: /private/user/survey');
    exit();
}
