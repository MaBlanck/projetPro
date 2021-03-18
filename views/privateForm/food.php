<?php
require_once(__DIR__ . '../../../controller/foodCtrl.php');
?>

<section id="food">
    <h2 class="p-4">FOOD</h2>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>Every attempt will be made to provide and serve the food and beverage requested on this
                    sheet. In some cases, availability of provisions may be limited and substitutes may have to be
                    made.You are welcome to complete one form for the whole family, or if several couples or friends are
                    traveling together, you can each complete a form with your own food & beverage preferences.
                    Does anyone in the charter party have a special medical condition, food allergy or special
                </p>
            </div>
        </div>
        <form action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="allergy">Allergy</label>
                    <input type="text" class="form-control" id="allergy" autofocus>
                </div>
                <div class="form-group col-md-6">
                    <label for="likeFood">Do you Like (check the box ONLY if you do like)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="spicy">
                        <label class="form-check-label" for="spicy">
                            Spicy Food
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="onion">
                        <label class="form-check-label" for="onion">
                            Onions
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="garlic">
                        <label class="form-check-label" for="garlic">
                            Garlic
                        </label>
                    </div>
                </div>
            </div>
            <!--BREAKFAST-->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3 for="breakfast">For Breakfast</h3>
                    <label for="breakfastFavorites">Normal Favorites</label>
                    <input type="text" class="form-control" name="breakfastFavorites" id="breakfastFavorites" />
                    <label for="breakfastDislike">Dislike</label>
                    <input type="text" class="form-control" name="breakfastDislike" id="breakfastDislike" />
                </div>
                <div class="form-group col-md-6 align-self-center">
                    <h4 for="likeFood">Meal Size Preferred</h4>
                    <div class="form-check">
                        <input class="form-check-input" name="breakfastHearty" type="checkbox" id="breakfastHearty">
                        <label class="form-check-label" for="breakfastHearty">
                            Hearty
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="breakfastModerate" type="checkbox" id="breakfastModerate">
                        <label class="form-check-label" for="breakfastModerate">
                            Moderate
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="breakfastLight" type="checkbox" id="breakfastLight">
                        <label class="form-check-label" for="breakfastLight">
                            Light
                        </label>
                    </div>
                </div>
            </div>
            <!--LUNCH-->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3 for="lunch">For Lunch</h3>
                    <label for="lunchFavorites">Normal Favorites</label>
                    <textarea type="text" class="form-control" name="lunchFavorites" id="lunchFavorites"></textarea>
                    <label for="breakfastDislike">Dislike</label>
                    <textarea type="text" class="form-control" name="lunchFavorites" id="lunchFavorites"></textarea>
                </div>
                <div class="form-group col-md-6 align-self-center">
                    <h4 for="likeFood">Meal Size Preferred</h4>
                    <div class="form-check">
                        <input class="form-check-input" name="lunchHearty" type="checkbox" id="lunchHearty">
                        <label class="form-check-label" for="lunchHearty">
                            Hearty
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="lunchModerate" type="checkbox" id="lunchModerate">
                        <label class="form-check-label" for="lunchModerate">
                            Moderate
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="lunchLight" type="checkbox" id="lunchLight">
                        <label class="form-check-label" for="lunchLight">
                            Light
                        </label>
                    </div>
                </div>
            </div>
            <!--DINER-->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3 for="diner">For Diner</h3>
                    <label for="dinerFavorites">Normal Favorites</label>
                    <textarea type="text" class="form-control" name="dinerFavorites" id="dinerFavorites"></textarea>
                    <label for="dinerFavorites">Dislike</label>
                    <textarea type="text" class="form-control" name="dinerFavorites" id="dinerFavorites"></textarea>
                </div>
                <div class="form-group col-md-6 align-self-center">
                    <h4 for="likeFood">Meal Size Preferred</h4>
                    <div class="form-check">
                        <input class="form-check-input" name="dinerHearty" type="checkbox" id="dinerHearty">
                        <label class="form-check-label" for="dinerHearty">
                            Hearty
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="dinerModerate" type="checkbox" id="dinerModerate">
                        <label class="form-check-label" for="dinerModerate">
                            Moderate
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="dinerLight" type="checkbox" id="dinerLight">
                        <label class="form-check-label" for="dinerLight">
                            Light
                        </label>
                    </div>
                </div>
            </div>
            <!--END DINER-->
            <div class="form-group">
                <label for="inputAddress2">Snacks or Hors D'oeuvres you particularly enjoy:</label>
                <textarea type="text" class="form-control" id="inputAddress2"></textarea>
            </div>
            <div class="form-group">
            <button type="submit" name="saveFood" class="btn btn-success save" value="SAVE">SAVE</button>
            <button type="submit" name="nextBeverage" class="btn btn-success next" value="NEXT -->">NEXT --></button>
            </div>
        </form>
</section>