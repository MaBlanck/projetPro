<?php
require_once(__DIR__ . '../../../controller/travelInfoCtrl.php');
?>

<section id="travelInfos">
    <div class="container bg-light">
        <h2 class="p-4">Travel Infos</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="charteredName">Chartered Name</label>
                <input type="text" class="form-control" id="charteredName" aria-label="charteredName">
                <label for="charteredDate">Chartered Date</label>
                <div class="row">
                    <div class="col-12 col-md-6"> <label for="checkInDate">Check In Date</label>
                        <input type="date" name="checkInDate" class="form-control" id="checkInDate" min="<?= $currentDate ?>">
                    </div>
                    <div class="col-12 col-md-6"><label for="checkInDate">Check Out Date</label>
                        <input type="date" name="checkOutDate" class="form-control" id="checkOutDate" min="<?= $currentDate ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="pickUpDropOff">PICKUP/DROP OFF LOCATION</label>
                        <input type="text" name="pickUpDropOff" id="pickUpDropOff" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="numberInParty">NUMBER IN PARTY</label>
                        <input type="number" name="numberInParty" id="numberInParty" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3 text-center">
                        <label for="cellNumber">CELL NUMBER</label>
                        <input type="text" class="form-control" name="cellNumber" id="cellNumber" placeholder="+33 6 88 77 44 11">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h4>Charter Party Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <label for="legalName">Legal Name</label>
                        <input type="text" class="form-control" name="legalName" id="legalName">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="dob">D.O.B</label>
                        <input type="text" class="form-control" name="dob" id="dob">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="passeportNumber">PASSEPORT NUMBER</label>
                        <input type="text" class="form-control" name="passeportNumber" id="passeportNumber">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="expirationDate">EXPIRATION DATE</label>
                        <input type="text" class="form-control" name="expirationDate" id="expirationDate" placeholder="YYYY/MM">
                    </div>
                </div>
                <button type="text" name="addTraveller" class="btn btn-success">ADD New Passenger</button>
                <div class="row">
                    <div class="col-12">
                        <h5>Flight Details</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6>ARRIVAL FLIGHT INFO</h6>
                    </div>
                </div>
                <div class="row">
                    <col-12 class="col-md-4">
                        <label for="airport">Airport</label>
                        <input type="text" class="form-control" name="arrivalAirportName" id="airportName">
                    </col-12>
                    <col-12 class="col-md-4">
                        <label for="airlineNumber">Airline/FLT#</label>
                        <input type="text" class="form-control" name="arrivalAirlineNumber" id="airlineNumber">
                    </col-12>
                    <col-12 class="col-md-4">
                        <label for="arrivalTime">Time</label>
                        <input type="text" class="form-control" name="arrivalTime" id="arrivalTime" />
                    </col-12>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6>DEPARTURE FLIGHT INFO</h6>
                    </div>
                </div>
                <div class="row">
                    <col-12 class="col-md-4">
                        <label for="airport">Airport</label>
                        <input type="text" class="form-control" name="departureAirportName" id="airport">
                    </col-12>
                    <col-12 class="col-md-4">
                        <label for="airlineNumber">Airline/FLT#</label>
                        <input type="text" class="form-control" name="departureAirlineNumber" id="airlineNumber">
                    </col-12>
                    <col-12 class="col-md-4">
                        <label for="departureTime">Time</label>
                        <input type="text" class="form-control" name="departureTime" id="departureTime" />
                    </col-12>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="hotelAccommodation">Do you have Hotel Accommodations prior to charter or after charter? If so, please provide details:</label>
                        <textarea name="hotelAccommodation" id="hotelAccommodation" cols="5" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="specialEvents">Any Special Events or Occasions occurring during your vacation, i.e. Birthday, Anniversary:</label>
                        <textarea name="specialEvents" id="specialEvents" cols="5" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" name="saveTravelInfo" class="btn btn-success save">Save</button>
            <button type="submit" name="nextTravelInfo" class="btn btn-success next">Next -></button>
        </form>
    </div>
</section>