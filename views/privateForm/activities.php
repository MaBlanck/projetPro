<?php
require_once(__DIR__ . '../../../controller/activitiesCtrl.php');
?>

<h2 class="p-4">Activities</h2>
<section id="activities">
    <div class="container-fluid text-center">
        <div class="form-row">
            <form action="" method="POST" class="col-12">
                <div class="col-12">
                    <?php foreach ($getListActivity as $activity) :  ?>
                        <div class="form-group col-12">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?= $activity->id ?>">
                            <label class=" form-check-label" for="inlineCheckbox1"><?= $activity->name ?></label>
                        </div>
                    <?php endforeach; ?>
                    <p>*** Please note a Fishing License is required in the BVI’s for anyone over the age of 18 that wishes to fish. This
                        application should be submitted prior to arrival for your charter vacation. Please inquire for instructions.</p>
                </div>
                <div class="form-group">
                    <button type="button" name="saveActivities" class="btn btn-success">SAVE</button>
                    <button type="submit" name="nextMoreAboutYou" class="btn btn-success">NEXT</button>
                </div>
            </form>
        </div>
    </div>
</section>