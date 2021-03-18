<?php
require_once(__DIR__ . '../../../controller/moreAboutYouCtrl.php');
?>
<section id="moreAboutYou">
    <h2 class="p-4">More 'bout you</h2>
    <div class="container">
        <form action="" method="POST">
            <div class="form-row d-flex justify-content-cente">
                <div class="form-group col-md-6">
                    <label for="formal">Do you consider yourselves “formal” or “informal” in general? </label>
                    <textarea type="text" class="form-control" name="formal" id="formal" autofocus></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="wakeUp">About what time do you normally wake up in the morning? </label>
                    <textarea type="text" class="form-control" name="wakeUp" id="wakeUp"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="upLate">Do you tend to stay up late? </label>
                    <textarea type="text" class="form-control" name="upLate" id="upLate"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="anchorageSpec">Are there any particular anchorages, islands or snorkel sites you wish to visit or not visit during
                        your charter? </label>
                    <textarea type="text" class="form-control" name="anchorageSpec" id="anchorageSpec"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="lookForward">What are some of the things you are most looking forward to on this vacation? </label>
                    <textarea type="text" class="form-control" name="lookForward" id="lookForward"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="worries">Do you have any concerns, worries or questions about the boat, the crew or the cruising area?</label>
                    <textarea type="text" class="form-control" name="worries" id="worries"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label for="comments">Are there any additional comments you can share about yourselves that will help us know how
                        to ensure you have the best vacation possible? </label>
                    <textarea type="text" class="form-control" name="comments" id="comments"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="saveMoreAboutYou" class="btn btn-success save" value="SAVE">SAVE</button>
                    <button type="submit" name="confirmForm" class="btn btn-success next" value="NEXT -->">CONFIRM</button>
                </div>
            </div>
        </form>
    </div>
</section>