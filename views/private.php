<?php
require_once(__DIR__ . '/parts/privateHeader.php');
?>

<h1>Welcome onBoard <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></h1>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-12">
            <p>Here is your personnal survey to tell us everything you want, need or desire for your cruise. <br>
                Don't forget to save your informations before you leave, otherwise you will have to write them again. <br>
                If you have any questions, please contact the captain using his <a href="mailto:captain@felicia.com">email</a> .
            </p>
        </div>
    </div>
</div>

<?php if (empty($_POST)) {
    require_once(__DIR__ . '/privateForm/personnalInfos.php');
} elseif (isset($_POST['savePersonnalInfo'])) {
    require(__DIR__ . '../../controller/personnalInfosCtrl.php');
    require(__DIR__ . '/privateForm/personnalInfos.php');
} elseif (isset($_POST['nextTravelInfo'])) {
    require(__DIR__ . '/privateForm/travelInfo.php');
} elseif (isset($_POST['nextFood'])) {
    require(__DIR__ . '/privateForm/food.php');
} elseif (isset($_POST['nextBeverage'])) {
    require(__DIR__ . '/privateForm/beverage.php');
} elseif (isset($_POST['nextActivities'])) {
    require(__DIR__ . '/privateForm/activities.php');
} elseif (isset($_POST['nextMoreAboutYou'])) {
    require(__DIR__ . '/privateForm/moreAboutYou.php');
} elseif (isset($_POST['confirmAllForm'])) {
    require(__DIR__ . '/privateForm/validateForm.php');
}











?>