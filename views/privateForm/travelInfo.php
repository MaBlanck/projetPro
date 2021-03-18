<?php
require_once(__DIR__ . '../../../controller/travelInfosCtrl.php');
require_once(__DIR__ . '../../parts/privateHeader.php');
?>

<section id="travelInfos">
    <div class="container">
        <h2 class="p-4">Travel Infos</h2>
        <form action="" method="POST">
            <div class="form-group">
                <div class="row p-4">
                    <h4 class="col-12">Chartered Date</h4>
                    <div class="col-12 col-md-6"> <label for="checkInDate">Check In Date</label>
                        <input type="date" name="checkInDate" class="form-control" id="checkInDate" min="<?= $currentDate ?>">
                    </div>
                    <div class="col-12 col-md-6"><label for="checkOutDate">Check Out Date</label>
                        <input type="date" name="checkOutDate" class="form-control" id="checkOutDate" min="<?= $currentDate ?>">
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-12 col-md-6">
                        <label for="pickUpDropOff">PICKUP/DROP OFF LOCATION</label>
                        <input type="text" name="pickUpDropOff" id="pickUpDropOff" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="numberOfPassenger">NUMBER OF PASSENGERS</label>
                        <input type="text" name="numberOfPassenger" id="numberOfPassenger" class="form-control" value="<?= $_SESSION['numberOfPassenger']?>">
                    </div>
                </div>
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
            <div class="form-group">
                <button type="submit" name="saveTravelInfos" class="btn btn-success save" value="SAVE">SAVE</button>
                <button type="submit" name="nextFood" class="btn btn-success next" value="NEXT -->">NEXT --></button>
            </div>
        </form>
    </div>
</section>
<?php
require_once(__DIR__ . '../../parts/footer.php');
?>