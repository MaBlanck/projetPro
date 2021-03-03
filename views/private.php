<?php
require_once(__DIR__ . '/parts/privateHeader.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <img src="assets/img/PrivateClub.png" alt="" class="privatePicture" />
        </div>
    </div>
</div>
<h1>Guest List and Preference Sheet</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ex aperiam dolorem ratione. Debitis alias sit culpa quas possimus aliquam repellendus quidem fugit. Molestiae aspernatur itaque ex veritatis debitis facere!</p>
        </div>
    </div>
</div>
<?php if(empty($_POST)): ?>
<?php require_once(__DIR__ .'/privateForm/travelInfo.php')?>
<?php elseif(isset($_POST['nextTravelInfo'])): ?>
<?php require(__DIR__ .'/privateForm/beverageFood.php')?>
<?php elseif(isset($_POST['nextBeverage'])): ?>
<?php require(__DIR__ .'/privateForm/activities.php')?>
<?php elseif(isset($_POST['nextActivities'])): ?>
<?php require(__DIR__ .'/privateForm/moreAboutYou.php')?>
<?php elseif(isset($_POST['confirmAllForm'])): ?>
<?php endif; ?>
