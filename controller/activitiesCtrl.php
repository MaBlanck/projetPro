<?php 
require_once(__DIR__ .'../../models/bookingModel.php');
$activities = new Booking();
//on appelle la méthode d el'objet Booking permettant de récupérer toutes les activités proposé pour les afficher dynamiquement
$getListActivity = $activities->getActivityList();
