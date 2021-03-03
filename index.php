<?php 
require_once(__DIR__ .'/config/config.php');

$regexView = '/^[a-z\-\?\=]+$/';
if (empty($_GET)){
    require(__DIR__ .'/views/parts/header.php');
    require(PATH_ROOT. 'views/home.php');
}elseif(isset($_GET['view']) && preg_match($regexView, $_GET['view'])){
    if(isset($_GET['privateClub'])){
    require(PATH_ROOT . 'views/private.php');
    }elseif(isset($_GET['privateCaptain'])){
        require(PATH_ROOT . 'views/privateCaptain/dashboard.php');  
    }
    else {
    require(__DIR__ . '/views/parts/header.php');
    require(PATH_ROOT. 'views/' . $_GET['view'] . '.php');
    }   
} else {
    echo '404';
}
require(__DIR__ . '/views/parts/footer.php');

