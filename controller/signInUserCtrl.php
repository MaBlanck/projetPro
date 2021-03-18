<?php
require_once(__DIR__ . '../../models/travel.php');

$formError = array();
//Je vérifie que le formulaire a bien été validé
if (isset($_POST['signInUserBtn'])) {
    //J'instancie mon objet travel 
    $travel = new Travel();
    if (!empty($_POST['password'])) {
        if (isset($_POST['password'])) {
            //le mot d epasse existant déjà en base de donnée, on stock simplement sa valuer en brut dans l'attribut correspondant de l'objet
            $travel->password = $_POST['password'];
        } else {
            $formError['password'] = 'Your password is wrong ';
        }
    } else {
        $formError['password'] = 'Enter a password';
    }
    if (!empty($_POST['travelName'])) {
        if (isset($_POST['travelName'])) {
            $travel->name = htmlentities($_POST['travelName']);
        } else {
            $formError['travelName'] = 'The name of travel isn\'t right';
        }
    } else {
        $formError['travelName'] = 'Please enter the ame of the travel you received in your mail';
    }
    if (empty($formError)) {
        //si il n'y a pas d'erreur de saisi dans mon formulaire, je fais appelle à la méthode pour récupérer le mdp
        $userInfo = $travel->getPasswordUserByTravelName();
        //On vérifie si le retour de ma méthode n'est pas false, donc qu'elle me retourne bien un objet
        if ($userInfo != false) {
            if ($userInfo->name === $travel->name) {
                if (password_verify($travel->password, $userInfo->password)) {
                    //si la vérif est ok, on redirige l'utilisateur vers la page admin
                    $travelInfos = $travel->getTravelInfoByName();
                    //on stocke le nom du voyage, l'id et le nombre de passager dans des variables de Session à la connexion
                    $_SESSION['travelName'] = $travelInfos->name;
                    $_SESSION['idTravel'] = $travelInfos->id;
                    $_SESSION['numberOfPassenger'] = $travelInfos->numberOfPassenger;
                    //On redirige vers la page Dashboard du passager qui va pouvoir commencer son questionnaire
                    header('location:/private/user/dashboard');
                    exit(); 
                } else {
                    //Si le mot de passe ne corrrespond pas à celui en BDD
                    $formError['travelName'] = 'We have guess that you entered the wrong password';
                }
            }
            //si ma méthode retourne quelque chose, on verifie le mdp avec la fonction password_verify
        }
    }
}
