<?php
require_once(__DIR__ . '../../../models/travel.php');
require_once(__DIR__ . '../../../models/user.php');
?>
<h1>Welcome to your private place</h1>
<p>enter your lastname and firstname in those inputs and save. <br>
    Then you'll click on the form button to start your survey.</p>
<div class="container text-center text-dark">
    <div class="row">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" />
                </div>
                <label for="firstname">Lastname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" />
                <input type="submit" value="SAVE" name="saveUserNames" class="form-control">
                <div class="card-footer">
                    <input type="button" class="btn btn-success" value="Start Survey">
                </div>
            </div>
        </div>
    </div>
</div>






<?php
require_once(__DIR__ . '../../parts/footer.php');
?>