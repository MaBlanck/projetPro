<?php
require_once(__DIR__ . '../../../controller/signInCaptainCtrl.php');
?>
    <div class="container text-center">
        <div class="row">
            <h1 class="col-md-12">Hello Captain</h1>
        </div>
    </div>

    <div class="container form">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <p>Enter you login and password to connect to your dashboard</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                        <p class="text-danger"><?= isset($formError['username']) ? $formError['username'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                    </div>
                    <input type="submit" class="btn btn-success" name="signInBtn" value="Connexion">
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <p>If you have issues to connect, contact <a href="mailto:maxblanck@outlook.fr">us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once(__DIR__ . '../../parts/footer.php');
    ?>