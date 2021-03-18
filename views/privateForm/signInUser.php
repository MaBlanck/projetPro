<?php
require_once(__DIR__ . '../../../controller/signInUserCtrl.php');
require_once(__DIR__ . '../../parts/signHeader.php');
?>

<div class="container text-center">
    <div class="row">
        <h1 class="col-md-12">Hello User</h1>
    </div>
</div>

<div class="container form">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <p>Enter the Travel Name and your password you use last page</p>
            <form action="" method="post">
                <div class="form-group">
                    <label for="travelName">Travel Name</label>
                    <input type="text" class="form-control" name="travelName" id="travelName" value="<?= $_SESSION['travelName'] ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                    <p class="text-danger"><?= isset($formError['travelName']) ? $formError['travelName'] : '' ?></p>
                </div>
                <input type="submit" class="btn btn-success" name="signInUserBtn" value="Connexion">
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