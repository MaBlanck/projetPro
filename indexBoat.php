<?php
require_once(__DIR__ . '/header.php');
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>The Boat</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <nav>
            <ul class="nav justify-content-center bg-transparent text-white">
                <li class="nav-item text-white">
                    <a class="nav-link rounded" href="/index.php">Home Page</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!--Virtual Tour-->
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4 align-self-center">
            <hr>
        </div>
        <h2>Virtual Tour</h2>
        <div class="col-md-4 align-self-center">
            <hr>
        </div>
    </div>
</div>
<svg class="wave-up" viewBox="0 0 1198.7 94.1" preserveAspectRatio="xMaxYMid slice">
    <path class="wave-up" d="M1198.7 31c1.9-0.4-222.5-39.3-489.9 23.1C242 152 0 39.3 0 39.3V0h1198.7V31z">
    </path>
</svg>
<section id="virtualTour">
    <!-- <div class="jumbotron m-0 p-0 justify-content-center">
            <video class="min-vh-50 min-vw-100 embed-responsive" autoplay="" muted="" loop="">
                <source src="./assets/img/InnerVideo.mp4" type="video/mp4">
            </video>
        </div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-5">
                <iframe src="https://www.hdmedia360.ca/visite-virtuelle/hd/cbpndpAsi-tara.html" frameborder="0" width="50%" height="450px" class="embed-responsive rounded"></iframe>
            </div>
        </div>
    </div>
</section>
<!--Boat ID-->
<section id="boatID">
    <div class="container-fluid mb-4">
        <div class="row justify-content-center">
            <div class="col-md-4 align-self-center">
                <hr>
            </div>
            <h2>Boat ID</h2>
            <div class="col-md-4 align-self-center">
                <hr>
            </div>
        </div>
    </div>
    <div class="accordion container" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <div class="mb-0">
                    <button class="btn btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span>Felicia</span>
                    </button>
                </div>
            </div>

            <div id="collapseOne" class="collapse text-white" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body text-center">
                    <p> <?php echo 'Coming Soon' ?> </p>
                </div>
                <div class="card-body text-center">
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <div class="mb-0">
                    <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Location
                    </button>
                </div>
            </div>
            <div id="collapseTwo" class="collapse text-white" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body text-center">
                            <p> <?php echo 'Coming Soon' ?> </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <div class="mb-0">
                    <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Amenities
                    </button>
                </div>
            </div>
            <div id="collapseThree" class="collapse text-white" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body text-center">
                    <p> <?php echo 'Coming Soon' ?> </p>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 bg-success text-center">
                                <h2>Green Initiatives</h2>
                                <p>Make purified drinking water <br> Re-usable water bottles <br> Eco friendly
                                    cleaning
                                    products <br> Limited use of plastics <br> Solar panels</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <div class="mb-0">
                    <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Water Sports
                    </button>
                </div>
            </div>
            <div id="collapseFour" class="collapse text-white" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body text-center">
                    <p> <?php echo 'Coming Soon' ?> </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <div class="mb-0">
                    <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                        Communications
                    </button>
                </div>
            </div>
            <div id="collapseFive" class="collapse text-white" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body text-center">
                    <p> <?php echo 'Coming Soon' ?> </p>
                </div>
            </div>
        </div>
</section>
<svg class="wave-down" viewBox="0 0 1198.7 94.1" preserveAspectRatio="xMaxYMid slice">
    <path class="wave-down" d="M1198.7 31c1.9-0.4-222.5-39.3-489.9 23.1C242 152 0 39.3 0 39.3V0h1198.7V31z">
    </path>
</svg>
<!--History-->
<section id="history">
    <div class="container-fluid mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h2>History</h2>
            </div>
            <div class="col-md-6 align-self-center">
                <hr>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/assets/img/boat2.jpeg" alt="" class="img-thumbnail" height="250px">
            </div>
            <div class="col-md-6 align-self-center text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, fuga. Fugit numquam
                    asperiores excepturi ipsa laboriosam aliquid animi commodi tempore.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque incidunt doloribus
                    consequatur atque minus quis sit delectus iste voluptas tenetur.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="d-inline-flex col-md-6 order-1 order-md-0 align-self-center text-center">
                <div class="col-12 w-100 h-100">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, fuga. Fugit numquam
                        asperiores excepturi ipsa laboriosam aliquid animi commodi tempore.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque incidunt doloribus
                        consequatur atque minus quis sit delectus iste voluptas tenetur.</p>
                </div>
            </div>
            <div class="d-inline-flex col-md-6 order-0 order-md-1 text-center">
                <div class="col-12 w-100 h-100">
                    <img src="/assets/img/boat1.jpeg" alt="" class="img-thumbnail" height="250px">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/assets/img/BoatImage3.jpeg" alt="" class="img-thumbnail" height="250px">
            </div>
            <div class="col-md-6 align-self-center text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, fuga. Fugit numquam
                    asperiores excepturi ipsa laboriosam aliquid animi commodi tempore.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque incidunt doloribus
                    consequatur atque minus quis sit delectus iste voluptas tenetur.</p>
            </div>
        </div>
    </div>
</section>
<svg class="wave-up" viewBox="0 0 1198.7 94.1" preserveAspectRatio="xMaxYMid slice">
    <path class="wave-up" d="M1198.7 31c1.9-0.4-222.5-39.3-489.9 23.1C242 152 0 39.3 0 39.3V0h1198.7V31z">
    </path>
</svg>
<div class="container-fluid crew">
    <div class="row justify-content-end">
        <div class="col-12 text-center">
            <h2 class="crew-title">The Crew</h2>
        </div>
    </div>
</div>
<!--CAptain ID-->
<section id="captainOhMyCaptain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-center">
                <h2>Captain ID</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 m-3 p-5">
                        <img src="./assets/img/captainCrewPage.jpg" alt="" class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Arnaud Blanck</h3>
                        <p><br>French<br>Born: 1985<br>CAPTAIN<br>License: 200T French<br>
                            <hr>
                            Arnaud was born in a little village east of France. He spent the
                            holidays of his childhood on the Mediterranean Sea, learning to sail on
                            Hobie cat and Laser. In his early career choice, Arnaud studied child
                            development psychology. He worked in social centers with trouble kids.
                            His love for children takes him to the tourism industry managing the
                            kids club in Club Med.
                            <hr>
                            There, his passion for sailing took shape. To truly follow his dreams,
                            he moved to the Caribbean island of Martinique in 2008. He sailed around
                            the Caribbean as a professional skipper for 11 years. As freelance
                            captain, he worked for several companies on different types and sizes of
                            boats, chartering, delivering boats along the West Indies and across
                            the Atlantic.
                            Learning to speak English was one of his main goals too and being in the
                            Caribbean working with local businesses he achieved that goal, now he’s
                            fluent.
                            <hr>
                            Arnaud is not only passionate about the ocean, he also loves
                            photography, free diving, hiking and travelling to different countries
                            to experience their cultural backgrounds.
                        </p>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <img src="./assets/img/logo2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<svg class="wave-down" viewBox="0 0 1198.7 94.1" preserveAspectRatio="xMaxYMid slice">
    <path class="wave-down" d="M1198.7 31c1.9-0.4-222.5-39.3-489.9 23.1C242 152 0 39.3 0 39.3V0h1198.7V31z">
    </path>
</svg>
<!--Chef ID-->
<section id="chefsection">
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <h2>Chef ID</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <h3>Chef</h3>
                        <p><br>Sonia<br>Chef/Hostess<br>License: STCW 10<br>
                            <hr>
                            Sonia grew up in Les Sables d'Olonne, a small town on the French Atlantic coast, where the “Vendée
                            Globe”, this legendary sailing race around the world, sets off.
                            With a solid hotel trade and catering training, she began her professional life in Parisian restaurants
                            before leaving for Saint Barth where she worked in a villa rental agency. She discovered sailing,
                            traveling and exploring different gastronomies with Thailand, Venezuela, Argentina, New York, San
                            Francisco and of course, the West Indies.
                            With a French coast license and STW95 in hand, she started working on the water as a cook for
                            charters in the Caribbean, in the Mediterranean Sea (Corsica, Porquerolles, the creeks of Marseille,
                            etc.). She is also discovering the joy of being a team member on a round trip cross the Atlantic.
                            When in she is in France, she sails on the Canal du Midi on her river boat which is her home.
                            She relish home cooking and she sets her menus according to the preferences and needs of the
                            guests. She adapts her cooking to the diets and wishes of each one while respecting the “eating
                            together” which is for her an important moment of pleasure and sharing on the water. She loves
                            French gastronomy but also local and family cuisine. She masters the work of raw or cooked fish ...
                            She is aware of new eating habits (gluten free, lactose free ...) while respecting
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <img src="assets/img/sonia.jpg" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-offset-6 col-md-6">
                <h2>Follow Us</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 text-center p-5"><i class="fab fa-facebook-f fa-3x"></i></div>
            <div class="col-4 text-center p-5"><i class="fab fa-instagram fa-3x"></i></div>
            <div class="col-4 text-center p-5"><i class="fab fa-tumblr fa-3x"></i></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-md-2 p-5"> <a href="#" class="btn btn-success text-dark">Share</a></div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 text-center">Privacy</div>
                <div class="col-12 col-md-4 text-center">Support</div>
                <div class="col-12 col-md-4 text-center">Contact</div>
            </div>
        </div>
    </footer>
    <svg class="wave-up" viewBox="0 0 1198.7 94.1" preserveAspectRatio="xMaxYMid slice">
        <path class="wave-up" d="M1198.7 31c1.9-0.4-222.5-39.3-489.9 23.1C242 152 0 39.3 0 39.3V0h1198.7V31z">
        </path>
    </svg>
</section>
<?php
require_once(__DIR__ . '/footer.php');
?>