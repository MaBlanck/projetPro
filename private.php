<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/private.css" />
    <title>Felicia</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <img src="assets/img/PrivateClub.png" alt="image d'accueil club privé félicia" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <p class="text-white">Welcome to your private page <br>
                    Here you will be able to tell us what you want and prepare your trip point by point <br>
                    Please follow the path we have made for you and anwser to our forms and send everytime once you've
                    finished.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light" style="height: 2000px;">
        <div class="row">
            <div class="col-12 col-md-6">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01" class="firstname">First name</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip01" value="Mark" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip02">Last name</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip02" value="Otto" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">City</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip03" required>
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip04">State</label>
                            <select class="custom-select bg-transparent border-0" id="validationTooltip04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip05">Zip</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip05" required>
                            <div class="invalid-tooltip">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01" class="firstname">First name</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip01" value="Mark" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip02">Last name</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip02" value="Otto" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">City</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip03" required>
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip04">State</label>
                            <select class="custom-select bg-transparent border-0" id="validationTooltip04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip05">Zip</label>
                            <input type="text" class="form-control bg-transparent border-0" id="validationTooltip05" required>
                            <div class="invalid-tooltip">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>



    <?php
    require_once(__DIR__ . '/footer.php');
    ?>