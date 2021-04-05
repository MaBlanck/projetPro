<?php
require(__DIR__ . '../../controller/bookingCtrl.php');
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
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar nav text-center">
                        <li class="nav-item col-12 col-md-2">
                            <a class="nav-link btn" href="/home" autofocus>Home</a>
                        </li>
                        <li class="nav-item col-12 col-md-3">
                            <a class="nav-link btn p-0" href="/boat-and-crew">The Boat & Crew</a>
                        </li>
                        <li class="nav-item col-12 col-md-3 text-center">
                            <a class="nav-link btn  p-0" href="/destination">Destination</a>
                        </li>
                        <li class="nav-item col-12 col-md-2">
                            <a class="nav-link btn  p-0" href="/portfolio">Portfolio</a>
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
            <p>Hello visitor <br>
            On this page you can contact us in order to make the first step of your trip. <br>
            Please fill all the input, and the captain will contact you soon by email to manage your cruise asap.</p>
        </div>
    </div>
</div>

<div class="container text-center">
    <div class="row">
        <form method="POST" action="" class="col mx-auto">
            <div class="form-group">
                <label for="geoLocation">Choose your location</label>
                <select class="<?= isset($formError['geoLocation']) ? 'is-invalid' : '' ?> form-control" name="geoLocation" id="geoLocation" autofocus>
                    <option <?= isset($booking->geoLocation) ? '' : 'selected' ?> disabled>Pick a choice</option>
                    <option value="British/US Virgin Island" <?= isset($booking->geoLocation) ? ($booking->geoLocation === 'British/US Virgin Island' ? 'selected' : '') : '' ?>>British/US Virgin Island</option>
                    <option value="North West Indies" <?= isset($booking->geoLocation) ? ($booking->geoLocation === 'North West Indies' ? 'selected' : '') : '' ?>>North West Indies</option>
                    <option value="Middle West Indies" <?= isset($booking->geoLocation) ? ($booking->geoLocation === 'Middle West Indies' ? 'selected' : '') : '' ?>>Middle West Indies</option>
                    <option value="South Indie" <?= isset($booking->geoLocation) ? ($booking->geoLocation === 'South Indie' ? 'selected' : '') : '' ?>>South Indie</option>
                </select>
                <div class="text-danger invalid-feedback"><?= isset($formError['geoLocation']) ? $formError['geoLocation'] : '' ?></div>
            </div>
            <p>If you wanna see one of those location please click that link (<a href="/indexDestination.php" target="_blank" title="redirect to portfolio page">go to see islands</a>) to see the
                portfolio and the descriptions</p>
            <div class="form-group">
                <label for="chooseDate">Pick up your travel dates</label>
                <p>From : </p>
                <input type="date" class="<?= isset($formError['checkInDate']) ? 'is-invalid' : '' ?> form-control" name="checkInDate" id="checkInDate" min="<?= $currentDateTime ?>" aria-describedby="choiceOfTheDepartureDate" placeholder="MM/DD/YYYY" value="<?= isset($_POST['checkInDate']) ? $_POST['checkInDate'] : '' ?>">
                <div class="text-danger invalid-feedback"><?= isset($formError['checkInDate']) ? $formError['checkInDate'] : '' ?></div>
            </div>
            <div class="form-group">
                <p>To: </p>
                <input type="date" class="<?= isset($formError['checkOutDate']) ? 'is-invalid' : '' ?> form-control" name="checkOutDate" id="checkOutDate" min="<?= $currentDateTime ?>" aria-describedby="choiceOfTheReturnDate" placeholder="MM/DD/YYYY" value="<?= isset($_POST['checkOutDate']) ? $_POST['checkOutDate'] : '' ?>">
                <div class="text-danger invalid-feedback"><?= isset($formError['checkOutDate']) ? $formError['checkOutDate'] : '' ?></div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="numberOfPassenger ">How many people travel (max: 8)</label>
                    <input type="text" class="<?= isset($formError['numberOfPassenger']) ? 'is-invalid' : '' ?> form-control" name="numberOfPassenger" id="numberOfPassenger" value="<?= isset($_POST['numberOfPassenger']) ? $_POST['numberOfPassenger'] : '' ?>">
                    <div class="text-danger invalid-feedback"><?= isset($formError['numberOfPassenger']) ? $formError['numberOfPassenger'] : '' ?></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="kidsNumber">Any kids? (Included in the total number of passengers)</label>
                    <input type="number" class="<?= isset($formError['kidsNumber']) ? 'is-invalid' : '' ?> form-control" name="kidsNumber" id="kidsOnBoat" value="<?= isset($_POST['kidsNumber']) ? $_POST['kidsNumber'] : '' ?>">
                    <div class="text-danger invalid-feedback"><?= isset($formError['kidsNumber']) ? $formError['kidsNumber'] : '' ?></div>
                    <div class="text-danger invalid-feedbac"><?= isset($formError['totalPassenger']) ? $formError['totalPassenger'] : '' ?></div>
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
                you and the captain <br> those informations are automaticaly stored and will be destroy as soon as the final contact has been made. <br>
                More questions will be
                asked in a private and secure application. <br>
                Felicia's owner, captain and crew are concerned about your data. It's the first crucial step to a trust relation.
            </p>
        </div>
    </div>
</div>
<script src="/assets/js/calendar.js"></script>