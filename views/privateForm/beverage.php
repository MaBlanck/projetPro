<?php
require_once(__DIR__ . '../../../controller/beverageCtrl.php');
?>

<section id="beverage">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h3>BEVERAGES</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>Please indicate the types of beverages you would like to have available and the approximate
                quantity you think you will consume daily. We will try to serve the brands you prefer, so if you
                have a favorite, please let us know.
            </p>
        </div>
    </div>
    <form action="" method="POST">
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>SOFT DRINKS</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>ICED TEA OR LEMONADE</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>JUICES, GATORADE OR OTHER</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>BEERS</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>LIQUOR</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>PREFERRED MIXERS</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>SPECIALTY COCKTAILS OR FROZEN DRINKS</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>SPECIALTY COCKTAILS OR FROZEN DRINKS</h5>
            </div>
            <div class="form-group col-md-6">
                <label for="brandPreference">Brand Preferences</label>
                <textarea name="brandPreference" class="form-control" id="brandPreference"></textarea>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-2 align-self-center">
                <h5>WINE</h5>
            </div>
            <div class="form-group">
                <label class="" for="winePreference">Preferences</label>
                <select class="custom-select mr-sm-2" id="winePreference">
                    <option selected disabled>Choose one option</option>
                    <option value="1">Red</option>
                    <option value="2">White</option>
                    <option value="3">Both</option>
                </select>
            </div>
            <div class="form-group col-md-2 align-self-center">
                <label for="dailyQuantity">Daily Quantity</label>
                <input type="number" min="0" class="form-control" id="dailyQuantity">
            </div>
        </div>
        <div class="form-group">
            <div class="row justify-content-center p-3">
                <button type="submit" name="saveBeverage" class="btn btn-success save mx-2" value="SAVE">SAVE</button>
                <button type="submit" name="nextActivities" class="btn btn-success next" value="NEXT -->">NEXT --></button>
            </div>
        </div>
    </form>
    </div>
</section>