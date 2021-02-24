<?php
require_once(__DIR__ . '/header.php');
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>Portfolio</h1>
        </div>
    </div>
    <div class="container-fluid text-center p-5">
        <div class="row justify-content-center">
            <nav id="nav" class="navbar navbar-expand-lg mt-5">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="/assets/img/Felicia_emblem_W_resize.png" title="going back to home page" class="logo rounded" alt="logo emblème du bateau Felicia">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar nav text-center">
                        <li class="nav-item text-white col-12 col-md-2">
                            <a class="nav-link btn" href="http://felicia/" autofocus><img src="/assets/img/Felicia_Logo_W_resize.png" title="going back to home page" class="logo rounded" alt="logo emblème du bateau Felicia"></a>
                        </li>
                        <li class="nav-item col-12 col-md-3">
                            <a class="nav-link btn text-white p-0" href="/indexBoat.php">The Boat & Crew</a>
                        </li>
                        <li class="nav-item col-12 col-md-3 text-center">
                            <a class="nav-link btn text-white p-0" href="/indexDestination.php">Destination</a>
                        </li>
                        <li class="nav-item col-12 col-md-3">
                            <a class="nav-link btn text-white p-0" href="/bookyourtrip.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="container text-center" id="imgGallery">
    <div class="row justify-content-center">
        <h2 class="text-center my-3 col-12">What you can eat</h2>
        <img class="galleryImg" src="/assets/img/food1.jpg" alt="plat gastronomique" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/food2.jpg" alt="plat gastronomique" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/food3.jpg" alt="plat gastronomique" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/food4.jpg" alt="plat gastronomique" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/food5.jpg" alt="plat gastronomique" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/food2.jpg" alt="plat gastronomique" class="col-12 col-md-4" />
    </div>
    <div class="row justify-content-center">
        <h2 class="text-center my-3 col-12">What you can see</h2>
        <img class="galleryImg" src="/assets/img/boat1.jpeg" alt="image du catamaran" class="col-12 col-md-6" />
        <img class="galleryImg" src="/assets/img/boat2.jpeg" alt="image du catamaran" class="col-12 col-md-6" />
        <img class="galleryImg" src="/assets/img/boat3.jpeg" alt="image du catamaran" class="col-12 col-md-6" />
        <img class="galleryImg" src="/assets/img/boat1.jpeg" alt="image du catamaran" class="col-12 col-md-6" />
    </div>
    <div class="row justify-content-center">
        <h2 class="text-center my-3 col-12">Where you live</h2>
        <img class="galleryImg" src="/assets/img/inside.jpg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/inside1.jpeg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/inside2.jpeg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/inside3.jpeg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/inside4.jpeg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/inside5.jpeg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/inside7.jpg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
        <img class="galleryImg" src="/assets/img/inside8.jpg" alt="vue intérieur du bateau" class="col-12 col-md-4" />
    </div>
</div>
<figure id="modal">
    <img src="">
</figure>

<script src="assets/js/main.js"></script>
<?php
require_once(__DIR__ . '/footer.php');
?>