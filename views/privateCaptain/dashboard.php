<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/dashboard.css" />
    <title>Captain Dashboard</title>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="navbar__left">
                <a href="#">New Messages</a>
                <a href="#">Travel management</a>
                <a class="active_link" href="#">Admin</a>
            </div>
            <div class="navbar__right">
                <a href="#">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <img width="100" src="../../assets/img/Felicia emblem B.jpg" alt="image d'un avatar" />
                </a>
            </div>
        </nav>
        <!-- Start main -->
        <main>
            <div class="main__container">
                <div class="main__title">
                    <img src="assets/img/hello.svg" alt="">
                    <div class="main__greeting">
                        <h1>Hello Captain</h1>
                        <p>Welcome to your admin dashboard</p>
                    </div>
                </div>
                <div class="main__cards">
                    <div class="card">
                        <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"></i>
                        <div class="card__inner">
                            <p class="text-primary-p">Numbers of new messages</p>
                            <span class="font-bold text-title">1</span>
                        </div>
                    </div>
                    <div class="card">
                        <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
                        <div class="card__inner">
                            <p class="text-primary-p">Number of travels planned</p>
                            <span class="font-bold text-title">3</span>
                        </div>
                    </div>
                    <div class="card">
                        <i class="fa fa-video-camera fa-2x text-yellow" aria-hidden="true"></i>
                        <div class="card__inner">
                            <p class="text-primary-p"></p>
                            <span class="font-bold text-title"></span>
                        </div>
                    </div>
                    <div class="card">
                        <i class="fa fa-thumbs-up fa-2x text-green" aria-hidden="true"></i>
                        <div class="card__inner">
                            <p class="text-primary-p"></p>
                            <span class="font-bold text-title"></span>
                        </div>
                    </div>
                </div>
                <div class="charts">
                    <div class="charts__left">
                        <div class="charts__left__title">
                            <div>
                                <h1>Daily Reports</h1>
                                <p>Cupertino, California, USA</p>
                            </div>
                            <i class="fa fa-usd" aria-hidden="true"></i>
                        </div>
                        <div id="apex1"></div>
                    </div>
                    <div class="charts__right">
                        <div class="charts__right__title">
                            <div>
                                <h1>Stats Reports</h1>
                                <p>Cupertino, California, USA</p>
                            </div>
                            <i class="fa fa-usd" aria-hidden="true"></i>
                        </div>
                        <div class="charts__right__cards">
                            <div class="card1">
                                <h1>Income</h1>
                                <p>$57,30</p>
                            </div>
                            <div class="card2">
                                <h1>Sales</h1>
                                <p>$157,30</p>
                            </div>
                            <div class="card3">
                                <h1>Users</h1>
                                <p>3900</p>
                            </div>
                            <div class="card4">
                                <h1>orders</h1>
                                <p>1881</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End main -->
        <!-- Start Sidebar -->
        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <img src="assets/img/logo.png" alt="">
                    <h1>Felicia</h1>
                </div>
                <i class="fa fa-times" id="sidebarIcon" onclick="closeSidebar()"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="#">Dashboard</a>
                </div>
                <h2>Board</h2>
                <div class="sidebar__link">
                    <i class="fa fa-user-secret"></i>
                    <a href="#">Travel Management</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-building-o"></i>
                    <a href="#">Charter Infos</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-building-o"></i>
                    <a href="#">Passengers Infos</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-building-o"></i>
                    <a href="#">Contacts from web form</a>
                </div>
                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="#">Log out</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/dashboard.js"></script>
    <?php
    require_once(__DIR__ . '../../parts/footer.php');
    ?>