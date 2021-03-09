<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Captain Dashboard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar">
                <div class="nav_icon" onclick="toggleSidebar()">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="navbar__left">
                    <a href="#">New Messages</a>
                    <a href="#">Travel management</a>
                    <a class="active_link" href="#">Admin</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
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