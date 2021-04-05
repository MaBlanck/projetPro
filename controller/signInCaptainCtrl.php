<?php 
require_once(__DIR__ .'../../models/admin.php');

$formError = array();
//Je vérifie que le formulaire a bien été validé
if (isset($_POST['signInBtn'])) {
    //J'instancie mon objet admin
    $admin = new Admin();
    if (!empty($_POST['username'])) {
        if (isset($_POST['username'])) {
            //Si l'input username est rempli, je le stock dans l'attribut username avec un htmlentities pour la sécurité
            $admin->username = htmlentities($_POST['username']);
        } else {
            $formError['username'] = 'You\'re username or password is wrong ';
        }
    } else {
        $formError['username'] = 'Enter a username';
    }
    if (!empty($_POST['password'])) {
        if (isset($_POST['password'])) {
            //le mot d epasse existant déjà en base de donnée, on stock simplement sa valuer en brut dans l'attribut correspondant de l'objet
            $admin->password = $_POST['password'];
        } else {
            $formError['password'] = 'You\'re username or password is wrong ';
        }
    } else {
        $formError['password'] = 'Enter a password';
    } 
    if(empty($formError)){
        //si il n'y a pas d'erreur de saisi dans mon formulaire, je fais appelle à la méthode pour récupérer le mdp
        $adminInfos = $admin->getLoginInfosByUsername();
        //On vérifie si le retour de ma méthode n'est pas false, donc qu'elle me retourne bien un objet
        if($adminInfos != false){
            //si ma méthode retourne quelque chose, on verifie le mdp avec la fonction password_verify
            if(password_verify($admin->password ,$adminInfos->password)){
            //si la vérif est ok, on redirige l'utilisateur vers la page admin
            $_SESSION['user'] = $admin->username;
                header('location:/private/captain');
                exit();
            }
        }
        $formError['password'] = 'You\'re username or password is wrong ';
    }

}