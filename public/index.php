<?php 
require_once(__DIR__ .'../../config/config.php');
require_once(__DIR__ .'../../controller/helpers/helpers.php');

    //Page Home
if (empty($_GET['view']) || $_GET['view'] === 'home') {
    require(APP_ROOT. 'views/parts/header.php');
    require(APP_ROOT . 'views/home.php');
    //Page Boat And Crew
} elseif($_GET['view'] === 'boat-and-crew'){
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/boat-and-crew.php');
    //Page Destination
} elseif ($_GET['view'] === 'destination') {
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/destination.php');
    //Page portfolio
} elseif ($_GET['view'] === 'portfolio') {
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/portfolio.php');
    //page Booking Formulaire
} elseif ($_GET['view'] === 'booking') {
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/booking.php');
    //Page login captain
} elseif ($_GET['view'] === 'login/captain') {
    require(APP_ROOT . 'views/parts/signHeader.php');
    require(APP_ROOT . 'views/privateCaptain/signInCaptain.php');
    //Page inscription utilisateur
} elseif ($_GET['view'] === 'signup/user') {
    require(APP_ROOT . 'views/parts/signHeader.php');
    require(APP_ROOT . 'controller/signUpUserCtrl.php');
    require(APP_ROOT . 'views/privateForm/signUpUser.php');
    //Page connexion utilisateur
} elseif ($_GET['view'] === 'login/user') {
    require(APP_ROOT . 'views/parts/signHeader.php');
    require(APP_ROOT . 'views/privateForm/signInUser.php');
    //Dashboard captain/Admin
} elseif ($_GET['view'] === 'private/captain') {
    require(APP_ROOT .'views/privateCaptain/captainHeader.php');
    require(APP_ROOT . 'views/privateCaptain/dashboard.php');
    //Page du formulaire passagers
} elseif ($_GET['view'] === 'private/user/survey') {
    require(APP_ROOT . 'views/parts/privateHeader.php');
    require(APP_ROOT . 'views/private.php');
    //Page Dashboard passager / User
} elseif ($_GET['view'] === 'private/user/dashboard') {
    require(APP_ROOT . 'views/parts/privateHeader.php');
    require(APP_ROOT . 'views/privateForm/dashboardUser.php');
    //Page intermédiaire de l'inscription à la connexion
} elseif ($_GET['view'] === 'private/signup/user/validate') {
    require(APP_ROOT . 'views/parts/privateHeader.php');
    require(APP_ROOT . 'views/privateForm/okPageUserSignUp.php');
} else {
    require(APP_ROOT . 'views/error404.php');
}

require(APP_ROOT . 'views/parts/footer.php');

