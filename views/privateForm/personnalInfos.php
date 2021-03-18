<?php
require_once(__DIR__ . '../../../controller/personnalInfosCtrl.php');
?>
<div class="container text-center">
    <h2 class="p-4">Personnal Infos</h2>
    <h3 class="text-success"><?= $message ?? '' ?></h3>
    <form method="POST">
        <div class="form-group">
            <div class="row p-4">
                <div class="col-12 col-md-6 offset-md-3 text-center">
                    <label for="cellNumber">CELL NUMBER</label>
                    <input type="text" class="form-control" name="cellNumber" id="cellNumber" placeholder="(+01) 255-255-4878" value="<?= $personnalInfos->cellNumber ?? '' ?>">
                    <p class="text-danger"><?= isset($formError['cellNumber']) ? $formError['cellNumber'] : '' ?></p>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-12 text-center">
                    <h4>Charter Party Details</h4>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-12 col-md-3">
                    <label for="legalName">Legal Name</label>
                    <input type="text" class="form-control" name="legalName" id="legalName" value="<?= strtoupper($_SESSION['firstname']) . ' ' . strtoupper($_SESSION['lastname']) ?>" />
                    <p class="text-danger"><?= isset($formError['legalName']) ? $formError['legalName'] : '' ?></p>
                </div>
                <div class=" col-12 col-md-3">
                    <label for="dob">DATE OF BIRTH</label>
                    <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth" max="<?= $currentDate ?>" value="<?= $personnalInfos->dateOfBirth ?? '' ?>">
                    <p class="text-danger"><?= isset($formError['dateOfBirth']) ? $formError['dateOfBirth'] : '' ?></p>
                </div>
                <div class="col-12 col-md-3">
                    <label for="passeportNumber">PASSEPORT NUMBER</label>
                    <input type="text" class="form-control" name="passeportNumber" id="passeportNumber" value="<?= $personnalInfos->passeportNumber ?? '' ?>">
                    <p class="text-danger"><?= isset($formError['passeportNumber']) ? $formError['passeportNumber'] : '' ?></p>

                </div>
                <div class="col-12 col-md-3">
                    <label for="expirationDate">EXPIRATION DATE</label>
                    <input type="date" class="form-control" name="expirationDate" id="expirationDate" min="<?= $currentDate ?>" value="<?= $personnalInfos->expirationDate ?? '' ?>">
                    <p class="text-danger"><?= isset($formError['expirationDate']) ? $formError['expirationDate'] : '' ?></p>
                </div>
            </div>
            <button type="submit" name="savePersonnalInfo" class="btn btn-success save" value="SAVE">SAVE</button>
            <?php //fonction qui vérifie si les attributs sont pas vide et non null
            if ($nextButtonVisibleState) : ?>
                <button type="submit" name="nextTravelInfo" class="btn btn-success next" value="NEXT -->">NEXT --></button>
                <?php else:?>
                <p class="text-danger">Please fill all the inputs in the form to continue</p>
            <?php endif; ?>
        </div>
    </form>
</div>