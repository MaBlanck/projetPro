<?php
require(__DIR__ . '/controller/bookingCtrl.php');
require_once(__DIR__ . '/header.php');
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>Book Your Trip</h1>
        </div>
    </div>
    <div class="container-fluid text-center p-5">
        <div class="row justify-content-center">
            <nav id="nav" class="navbar navbar-expand-lg mt-5 navBooking">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="/assets/img/Felicia_emblem_W_resize.png" title="going back to home page" class="logo rounded" alt="logo emblème du bateau Felicia">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar nav text-center">
                        <li class="nav-item text-white col-12 col-md-2">
                            <a class="nav-link btn" href="http://felicia/" autofocus><img src="/assets/img/Felicia_Logo_W_resize.png" title="going back to home page" class="logo rounded" alt="logo emblème du bateau Felicia"></a>
                        </li>
                        <li class="nav-item col-12 col-md-3">
                            <a class="nav-link btn text-white p-0" href="/indexBoat.php">Boat & Crew</a>
                        </li>
                        <li class="nav-item col-12 col-md-3">
                            <a class="nav-link btn text-white p-0" href="/indexDestination.php">Destination</a>
                        </li>
                        <li class="nav-item col-12 col-md-3">
                            <a class="nav-link btn text-white p-0" href="/portfolio.php">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur esse libero nam at sunt,
                officiis sapiente
                aspernatur, amet suscipit velit rerum voluptatem perferendis soluta tempore nemo eaque, sed cum
                architecto.</p>
        </div>
    </div>
</div>

<div class="container text-center">
    <div class="row">
        <form method="POST" action="" class="col mx-auto">
            <div class="form-group">
                <label for="geographicLocation">Choose your location</label>
                <select class="<?= isset($formError['geographicLocation']) ? 'is-invalid' : '' ?> form-control" name="geographicLocation" id="geographicLocation" autofocus>
                    <option <?= isset($booking->geographicLocation) ? '' : 'selected' ?> disabled>Pick a choice</option>
                    <option value="British/US Virgin Island" <?= isset($booking->geographicLocation) ? ($booking->geographicLocation === 'British/US Virgin Island' ? 'selected' : '') : '' ?>>British/US Virgin Island</option>
                    <option value="North West Indies" <?= isset($booking->geographicLocation) ? ($booking->geographicLocation === 'North West Indies' ? 'selected' : '') : '' ?>>North West Indies</option>
                    <option value="Middle West Indies" <?= isset($booking->geographicLocation) ? ($booking->geographicLocation === 'Middle West Indies' ? 'selected' : '') : '' ?>>Middle West Indies</option>
                    <option value="South Indie" <?= isset($booking->geographicLocation) ? ($booking->geographicLocation === 'South Indie' ? 'selected' : '') : '' ?>>South Indie</option>
                </select>
                <div class="text-danger invalid-feedback"><?= isset($formError['geographicLocation']) ? $formError['geographicLocation'] : '' ?></div>
            </div>
            <p>If you wanna see one of those location please click that link (<a href="/indexDestination.php" target="_blank" title="redirect to portfolio page">go to see islands</a>) to see the
                portfolio and the descriptions</p>
            <div class="form-group">
                <label for="chooseDate">Pick up your travel dates</label>
                <p>From : </p>
                <input type="date" class="<?= isset($formError['chooseDateFrom']) ? 'is-invalid' : '' ?> form-control" name="chooseDateFrom" id="chooseDateFrom" min="<?= $currentDateTime ?>" aria-describedby="choiceOfTheDepartureDate" placeholder="MM/DD/YYYY" value="<?= isset($_POST['chooseDateFrom']) ? $_POST['chooseDateFrom'] : '' ?>">
                <div class="text-danger invalid-feedback"><?= isset($formError['chooseDateFrom']) ? $formError['chooseDateFrom'] : '' ?></div>
            </div>
            <div class="form-group">
                <p>To: </p>
                <input type="date" class="<?= isset($formError['chooseDateTo']) ? 'is-invalid' : '' ?> form-control" name="chooseDateTo" id="chooseDateTo" min="<?= $currentDateTime ?>" aria-describedby="choiceOfTheReturnDate" placeholder="MM/DD/YYYY" value="<?= isset($_POST['chooseDateTo']) ? $_POST['chooseDateTo'] : '' ?>">
                <div class="text-danger invalid-feedback"><?= isset($formError['chooseDateTo']) ? $formError['chooseDateTo'] : '' ?></div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="passengerNumber">How many people travel</label>
                    <input type="text" class="<?= isset($formError['passengerNumber']) ? 'is-invalid' : '' ?> form-control" name="passengerNumber" id="passengerNumber" value="<?= isset($_POST['passengerNumber']) ? $_POST['passengerNumber'] : '' ?>">
                    <div class="text-danger invalid-feedback"><?= isset($formError['passengerNumber']) ? $formError['passengerNumber'] : '' ?></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="kidsOnBoat">Any kids?</label>
                    <input type="number" class="<?= isset($formError['kidsOnBoat']) ? 'is-invalid' : '' ?> form-control" name="kidsOnBoat" id="kidsOnBoat" value="<?= isset($_POST['kidsOnBoat']) ? $_POST['kidsOnBoat'] : '' ?>">
                    <div class="text-danger invalid-feedback"><?= isset($formError['kidsOnBoat']) ? $formError['kidsOnBoat'] : '' ?></div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Your email please</label>
                <input type="email" class="<?= isset($formError['email']) ? 'is-invalid' : '' ?> form-control" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                <div class="text-danger invalid-feedback"><?= isset($formError['email']) ? $formError['email'] : '' ?></div>
            </div>
            <div class="form-group">
                <button type="submit" name="sendCompleteForm" class="btn btn-success">Book your trip</button>
            </div>
        </form>
        <?php if (isset($validMessage)) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-white bg-success p-5"> <?= $validMessage ?> </p>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p></p>
        <?php endif; ?>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <p>Felicia's Captain & crew</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <p>Very IMPORTANT:</p>
            <p>All those information are not stocked or exchange to anyone. Once the contact has been made between
                you and the captain <br> those information are automaticaly destroy and further questions will be
                asked in a private and secure application. <br>
                Felicia's owner, captain and crew are concerned about your data. It's the first crucial step to a trust relation.
            </p>
        </div>
    </div>
</div>
<script src="assets/js/calendar.js"></script>
<?php
require_once(__DIR__ . '/footer.php');
?>