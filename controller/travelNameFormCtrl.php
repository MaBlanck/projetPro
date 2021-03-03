<?php 

require_once(__DIR__ .'../../models/travel.php');
$formError = array();
if(!empty([$_POST])){
    if(isset($_POST['signInButton'])){
    $travel = new Travel();
    $travel->name = $_POST['travelName'];
    $travel->email = $_POST['email'];
    $travel->password = $_POST['password'];
    $travel->numberOfPassenger = $_POST['number_of_passenger'];
    if($travel->addTravelNameInfo()){
        header('location:signIn.php');
    } else {
        $formError['general'][] = 'Error';
    }
}
}