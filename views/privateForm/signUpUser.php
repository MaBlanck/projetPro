<?php
require_once(__DIR__ . '../../../controller/travelNameFormCtrl.php');
require_once(__DIR__ . '../../parts/privateHeader.php');
var_dump($_POST);
?>
<div class="container-fluid">
    <div class="row">
        <h1 class="col-6 mx-auto">Hello. Welcome onboard</h1>
    </div>
    <div class="row">
        <p class="col-6 mx-auto">Would you please answer to those questions to enter to your account and start to complete your personnal information for the travel</p>
    </div>
</div>
<div class="container bg-light text-center justify-content-center">
    <div class="row">
        <form method="POST" action="" class="col-4 mx-auto">
            <div class="form-group mb-3 text-center">
                <label for="travelName" class="form-label">Travel Name</label>
                <input type="text" class="form-control" id="travelName" name="travelName" />
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" />
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="form-group mb-3">
                <label for="passwordConfirm" class="form-label">Password (confirmation)</label>
                <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" />
            </div>
            <div class="form-group mb-3">
                <label for="number_of_passenger" class="form-label">Number of Passenger</label>
                <input type="text" class="form-control" id="number_of_passenger" name="number_of_passenger" />
            </div>

            <button type="submit" name="signInButton" class="btn btn-success">Sign Up</button>
        </form>
    </div>
</div>

<?php
require_once(__DIR__ . '../../parts/footer.php');
?>