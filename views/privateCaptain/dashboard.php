<?php
require_once(__DIR__ . '../../../controller/travelNameDashboardFormCtrl.php');
?>
<!-- Start main -->
<main role="main" class="col-md-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Dashboard</h1>
    </div>
    <h2>Create the cruise</h2>
    <div class="container-fluid justify-content-center">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="cruisename">Cruise Name</label>
                        <input type="text" class="form-control" name="cruisename" id="cruisename">
                        <p class="text-danger"><?= isset($formError['cruisename']) ? $formError['cruisename'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <label for="numberOfPassenger">Number of passengers</label>
                        <input type="text" class="form-control" name="numberOfPassenger" id="numberOfPassenger">
                        <p class="text-danger"><?= isset($formError['numberOfPassenger']) ? $formError['numberOfPassenger'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <label for="customerEmail">Customer Email</label>
                        <input type="mail" class="form-control" name="customerEmail" id="customerEmail">
                        <p class="text-danger"><?= isset($formError['customerEmail']) ? $formError['customerEmail'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control" name="sendInfosTravel" id="sendInfosTravel">
                    </div>
                    <p class="text-success"><?= isset($message) ? $message : '' ?></p>
                    <p class="text-danger"><?= isset($formError['general']['error']) ? $formError['general']['error'] : '' ?></p>
                </form>
            </div>
            <div class="col-md-8">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col-12">
                            <h2>List of Cruise</h2>
                            <p class="text-success"><?= isset($msgSuccess) ? $msgSuccess : ''  ?></p>
                            <p class="text-danger"><?= isset($msgFail) ? $msgFail : ''  ?></p>
                            <?php foreach ($listCruise as $cruiseName) : ?>
                                <div class="row p-3 cruiseList justify-content-center">
                                    <div class="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn text-center" type="button" data-toggle="collapse" data-target="#<?= $cruiseName->name ?>" aria-expanded="true" aria-controls="collapseOne">
                                                        <?= $cruiseName->name ?>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="<?= $cruiseName->name ?>" class="collapse" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6">Number Of Passenger : <strong><?= $cruiseName->numberOfPassenger ?></strong></div>
                                                        <div class="col-md-6">Reference Email: <strong><?= $cruiseName->email ?></strong></div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <form action="" method="POST">
                                                                <input type="hidden" name="cruiseName" value="<?= $cruiseName->name ?>">
                                                                <input type="submit" class="btn btn-danger m-3" name="deleteCruise" value="Delete Cruise">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End main -->


<script src="../../assets/js/dashboard.js"></script>