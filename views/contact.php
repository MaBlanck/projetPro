<?php 
require_once(__DIR__ .'../../controller/contactFormCtrl.php')
?>

<div class="container text-center contact">
    <div class="row justify-self-center">
        <h2 class="contactTitle col-md-12 mt-5">Contact</h2>
    </div>
    <p class="text-success"><?= $messageSuccess ?? '' ?></p>
    <div class="row justify-self-center">
        <div class="col-md-12">
            <form method="POST" action="" class="my-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Durand">
                    <p class="text-danger"><?= isset($formError['name']) ? $formError['name'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="mail@exemple.com">
                    <p class="text-danger"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="message">Your message (optionnal)</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" name="sendMessage" class="btn btnContact btn-success">Send my message</button>
            </form>
        </div>
    </div>
    <div class="row justify-self-center">
    <p>Going back to <a href="http://sailfelicia.alwaysdata.net/">home page</a></p>
    </div>
</div>