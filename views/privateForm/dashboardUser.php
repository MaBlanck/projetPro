<?php
require_once(__DIR__ . '../../../models/travel.php');
require_once(__DIR__ . '../../../models/user.php');
require_once(__DIR__ . '../../../controller/dashboardUserCtrl.php');
$totalNumberOfPassenger = (int) $_SESSION['numberOfPassenger'];
//La variable contient le nombre de passager déjà enregistré
$numberOfRegistered = count($userAlreadyRegistered);
//Le calcul permet de savor combien de passager il reste à s'inscrire
$numberOfPassengerNotRegistered = ($totalNumberOfPassenger - $numberOfRegistered);

?>
<div class="container-fluid text-center">
    <div class="row justify-content-center">
        <h1>Welcome to your private place</h1>
    </div>
    <div class="row justify-content-center">
        <p>Enter your lastname and firstname in those inputs and save. <br>
            Then you'll click on "Start Survey" button to start your survey.</p>
    </div>
</div>

<div class="container text-center text-dark">
    <div class="row d-flex justify-content-around">
        <?php foreach ($userAlreadyRegistered as $user) : ?>
            <div class="col-md-4 p-4">
                <div class="card">
                    <div class="card-header">
                        <img src="/assets/img/Felicia Logo BCards" class="card-img-top img-fluid" alt="logo from the boat felicia" />
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" value="<?= $user->lastname ?>" id="lastname" class="form-control" disabled />
                            </div>
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" value="<?= $user->firstname ?>" id="firstname" class="form-control" disabled />
                            <p class="text-success"><?= isset($message) ? $message : '' ?></p>
                            <div class="card-footer">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="UserId" value="<?= $user->id ?>">
                                        <input type="hidden" name="lastname" value="<?= $user->lastname ?>">
                                        <input type="hidden" name="firstname" value="<?= $user->firstname ?>">
                                        <input type="submit" class="btn btn-success" name="startSurvey" value="Start Survey" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php
        for ($i = 0; $i < $numberOfPassengerNotRegistered; $i++) :
        ?>
            <div class="col-md-4 p-4">
                <div class="card">
                    <div class="card-header">
                        <img src="/assets/img/Felicia Logo WCards.png" class="card-img-top img-fluid" alt="logo from the boat felicia" />
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" />
                            </div>
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" />
                            <div class="card-footer">
                                <input type="submit" value="SAVE" name="saveUserNames" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>






<?php
require_once(__DIR__ . '../../parts/footer.php');
?>