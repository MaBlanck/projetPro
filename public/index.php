<?php 
require_once(__DIR__ .'../../config/config.php');

if (empty($_GET['view']) || $_GET['view'] === 'home') {
    require(APP_ROOT. 'views/parts/header.php');
    require(APP_ROOT . 'views/home.php');
} elseif($_GET['view'] === 'boat-and-crew'){
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/boat-and-crew.php');
} elseif ($_GET['view'] === 'destination') {
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/destination.php');
} elseif ($_GET['view'] === 'portfolio') {
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/portfolio.php');
} elseif ($_GET['view'] === 'booking') {
    require(APP_ROOT . 'views/parts/header.php');
    require(APP_ROOT . 'views/booking.php');
} elseif ($_GET['view'] === 'login/captain') {
    require(APP_ROOT . 'views/parts/signHeader.php');
    require(APP_ROOT . 'views/privateCaptain/signInCaptain.php');
} elseif ($_GET['view'] === 'signup/user') {
    require(APP_ROOT . 'views/parts/signHeader.php');
    require(APP_ROOT . 'controller/signUpUserCtrl.php');
    require(APP_ROOT . 'views/privateForm/signUpUser.php');
} elseif ($_GET['view'] === 'login/user') {
    require(APP_ROOT . 'views/parts/signHeader.php');
    require(APP_ROOT . 'views/privateForm/signInUser.php');
} elseif ($_GET['view'] === 'private/captain') {
    require(APP_ROOT .'views/privateCaptain/captainHeader.php');
    require(APP_ROOT . 'views/privateCaptain/dashboard.php');
} elseif ($_GET['view'] === 'private/user') {
    require(APP_ROOT . 'views/parts/privateHeader.php');
    require(APP_ROOT . 'views/private.php');
} elseif ($_GET['view'] === 'private/user/dashboard') {
    require(APP_ROOT . 'views/parts/privateHeader.php');
    require(APP_ROOT . 'views/privateForm/dashboardUser.php');
} elseif ($_GET['view'] === 'private/signup/user/validate') {
    require(APP_ROOT . 'views/parts/privateHeader.php');
    require(APP_ROOT . 'views/privateForm/okPageUserSignUp.php');
} else {
    echo '404';
}

require(APP_ROOT . 'views/parts/footer.php');

