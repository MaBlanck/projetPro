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
    </div>
</main>
<!-- End main -->
</div>
</div>

<script src="../../assets/js/dashboard.js"></script>
<?php
require_once(__DIR__ . '../../parts/footer.php');
?>