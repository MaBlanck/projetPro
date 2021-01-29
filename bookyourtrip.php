<?php
require(__DIR__ . '/controller/controller.php');
require_once(__DIR__ . '/header.php');

?>
    <h1>Book Your Trip</h1>
    <div class="row justify-content-center">
        <nav>
            <ul class="nav justify-content-center bg-transparent text-white rounded">
                <li class="nav-item text-white">
                    <a class="nav-link rounded" href="/index.php">Home Page</a>
                </li>
            </ul>
        </nav>
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
            <form class="col-12 mx-auto">
                <div class="form-group">
                    <div class="form-group">
                        <label for="geographicLocation">Choose your location</label>
                        <select class="form-control" name="geographicLocation" id="geographicLocation" autofocus>
                            <option selected disabled>Pick a choice</option>
                            <option>British/US Virgin Island</option>
                            <option>North West Indies</option>
                            <option>Middle West Indies</option>
                            <option>South Indie</option>
                        </select>
                    </div>
                    <p>If you wanna see one of those location please click that link (<a href="/indexDestination.php" target="_blank" title="redirect to portfolio page">go to see islands</a>) to see the
                        portfolio and the descriptions</p>
                    <label for="chooseDate">Pick up your travel dates</label>
                    <p>From : </p>
                    <input type="date" class="form-control" name="chooseDateTo" id="chooseDateFrom" aria-describedby="choiceOfTheDepartureDate" placeholder="MM/DD/YYYY">
                    <p>To: </p>
                    <input type="date" class="form-control" name="chooseDateTo" id="chooseDateTo" aria-describedby="choiceOfTheReturnDate" placeholder="MM/DD/YYYY">
                </div>
                <div class="form-group">
                    <label for="passengerNumber">How many people travel</label>
                    <input type="number" class="form-control" name="passengerNumber" id="passengerNumber">
                </div>
                <div class="form-group">
                    <label for="kidsOnBoat">Any kids?</label>
                    <select name="kidsOnBoat" id="KidsOnBoat">
                        <option value="" disabled selected>Pick a number</option>
                        <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Your email please</label>
                    <input type="email" name="" id="">
                </div>
                <p>We will contact you very soon to give you the next steps you will do to confirm your booking.</p>
                <button type="submit" name="sendCompleteForm" class="btn btn-success">Book your trip</button>
            </form>
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
    <?php
    require_once(__DIR__ . '/footer.php');
    ?>