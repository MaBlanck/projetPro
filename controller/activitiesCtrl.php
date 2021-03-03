<?php 
require_once(__DIR__ .'../../models/bookingModel.php');
$activities = new Booking();
$getListActivity = $activities->getActivityList();
