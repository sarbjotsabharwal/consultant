<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitepool Covers</title>
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@500&family=Metal+Mania&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        div.card {
            width: 40vw;
            /* box-shadow: 0px 0px 5px 2px rgba(255, 255, 255, 0.6), 0 0px 10px 0 rgba(253, 253, 253, 0.5); */
            box-shadow: 0px 0px 6px 3px rgba(0, 0, 0, .6), 0 0px 10px 0 rgba(255, 255, 255, .5);
            text-align: center;
            /* max-width: 85vw; */
        }

        div.header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 40px;
        }

        div.cardcontainer1 {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            justify-content: center;


        }

        .card-header h5,
        .card-title {
            font-size: 25px;

        }

        .card-text {
            font-size: 15px;
        }

        #option li {
            margin: 15px;
        }

        #option li span {
            font-weight: bold;

        }

        #heading img {
            width: 250px;
            border-radius: 100px;
            background-color: white;
            z-index: 5;
        }

        .listoption {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            font-size: 15px;
            margin: 0;
        }

        .listoption li {
            width: 250px;
            text-align: justify;
            margin: 10px;
            /* padding: 5px; */
            margin-bottom: 0;

        }

        .card-header img {

            margin: 0;
            width: 100%;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        .card-body img {
            box-shadow: 0 0 7px 7px rgba(0, 0, 0, .5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .stickyback::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/img/elitepool/backgrounds/back (1).jpg') no-repeat center center/cover;
            opacity: .6;
        }

        .stickyback {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: black;
            z-index: -1;
            /* opacity: .8; */
        }

        .border-radius-top {
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        /* #list-items {

            list-style-type: square;
        } */

        .list-items li {
            padding: 10px;
            margin: 10px;
            list-style-type: none;
            border-radius: 10px;
            font-size: 17px;
        }

        .list-items li:nth-child(odd) {
            background-color: rgba(192, 191, 191, 0.7);
            color: black;

        }

        .list-items li:nth-child(even) {
            /* display: block; */
            color: white;


            background-color: rgba(44, 44, 44, 0.7);

        }

        /* #card-body-1, #card-body-2, #card-body-3 {
            display: none;
        }

        #show-card-1:hover + #card-body-1 {
            display: block;
        }
        #show-card-2:hover + #card-body-2 {
            display: block;
        }
        #show-card-3:hover + #card-body-3 {
            display: block;
        } */
        .container2 {
            /* width: 100px;
            height: 100px; */
            /* background: rgba(241, 241, 241, 0.2); */
            /* background: rgba(121, 248, 148, 0.2); */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .container-box {
            /* display: flex;
            flex-wrap: wrap; */
            /* width: 40vw; */
            /* height: vh; */
            /* background: rgb(3, 167, 44); */
            background: rgba(0, 0, 0, .6);
            /* padding: 30px; */
            margin: 20px;

            border-radius: 25px;
            text-align: center;
            color: white;
        }

        .container-box p {
            text-align: justify;
            width: 500px;
            padding: 20px;
            margin-right: 20px;
        }

        .container-box p span {

            font-size: 50px;
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        .container-box img {
            /* float: right; */
            /* position: relative; */
            /* height:100%;
            width: 100%; */
            width: 450px;
            border-radius: 25px;
            opacity: .9;

        }

        #heading1 {
            color: rgb(1, 196, 1);
            background-color: rgba(0, 0, 0, 0.39);

            z-index: 5;
            width: 100%;
            height: auto;
            padding: 20px;
            margin-top: 150px;
            text-align: center;
            font-size: 70px;
            font-weight: bold;

        }

        marquee {
            font-size: 20px;
            margin: 0;
            color: white;
        }

        .carousel-item {
            width: 550px;
        }

        .carousel-item img {
            width: 550px;
            height: 480px;
            opacity: 0.9;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.4);
            border-radius: 25px;

        }

        .carousel-caption h6 {
            border-radius: 25px;
            padding-left: 30px;
            padding-right: 30px;
            text-align: justify;
        }

        .list-items a {
            text-decoration: none;
            color: white;
        }

        .list-items a:hover {
            text-decoration: none;
            color: white;

            position: relative;
            /* bottom:10px; */

            animation-name: covertypehover;
            animation-duration: 500ms;
            animation-timing-function: ease-in-out;
            animation-fill-mode: forwards;
            animation-iteration-count: 1;


        }

        @keyframes covertypehover {
            from {
                bottom: 0;
                left: 0;
            }

            to {
                /* bottom:3px; */
                left: 10px;
            }
        }

        .list-items li:hover {
            animation-name: covertypehover;
        }

        body {

            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body style="font-family: Montserrat, sans-serif;">
    <?php
    include('header.html');
    ?>
    <?php
    include('videopopup.html');
    ?>
    <!-- sticky background -->
    <div class="stickyback">

    </div>
    <!-- sticky background end -->
    <br><br>

    <h1 id="heading1">Elitepool Covers<br></h1>
    <marquee>Request A Quote, Call Right Now @ [+61] 447 188 144</marquee>
    <br><br>
    <a href="#elitepool"><img src="assets/img/elitepool/down.gif" alt="" style="width: 150px;border: solid 2px white;border-radius: 100px;display: block;margin: auto;"></a>
    <!-- section end -->
    <br><br>
    <br><br>
    <br><br><br>

    <!-- section start -->
    <div class="container2" id="elitepool" style="margin-bottom: 25px;">
        <div class="container-box" id="container-box-1">


            <!-- carousel section start -->

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/elitepool/triple cell/Solar-Blanket-12-Triple-cell.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h6>Since 1989 Elite Pool Covers have designed and manufactured an extensive range of high
                                quality affordable manual, <i>semi-automatic and fully-automatic pool cover systems</i>
                                for the harsh Australian climate and sell these direct to the public meaning you save
                                big
                                dollars.</h6>
                            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum perspiciatis delectus nulla
                                quos explicabo. Libero!</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/elitepool/triple cell/2-Solar-Blankets-1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h6>Elite Pool Covers has been providing the best possible Pool Cover Systems to customers
                                all over Australia, and the world. Our customer base includes <i>Melbourne Sydney Perth
                                    Adelaide Brisbane</i> and all regional areas.</h6>
                            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum perspiciatis delectus nulla
                                quos explicabo. Libero!</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/elitepool/triple cell/4-Hideaway-System-90-degree-drive-15.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h6>Elite covers Australia’s top commercial swimming pools because their quality is second
                                to none. The exact same quality fabrics that are used on commercial pools and for export
                                are also available to you. <i>For the best pool blankets</i>, choose what the
                                professionals
                                choose…”ELITE”.</h6>
                            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum perspiciatis delectus nulla
                                quos explicabo. Libero!</p> -->
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

                <h2 style=" color: rgb(1, 196, 1) ;font-weight:bold;margin-top:10px">Elite Pool Covers, Uniquely Built For You</h2>
            </div>

            <!-- carousel section end -->



            <!-- <p>
                <span>Elite Pool Covers, Uniquely Built For You
                </span>
                SEO is one of the most effective digital marketing strategies. Search engine optimization works to
                improve your website’s ranking in search engine ranking pages, so that your site earns more traffic.
                With increased traffic, companies experienced increase in sales and revenue.
            </p>
            <img src="assets/img/sales and marketing/content-3679757_960_720.webp" alt=""> -->
        </div>
    </div>

    <!-- section end -->
    <br><br>
    <div class="container" style="background: rgba(0, 0, 0, 0.4);color:white;width: 100vw;padding: 15px;border-radius: 20px;">
        <h5 class="card-title" style="font-weight: normal;font-size: 40px;">Pool Cover Types</h5>

        <div class="card-body" style="display: flex;flex-wrap:wrap;justify-content: center;">
            <ul class="list-items">
                <li><a href="#">Triple Cell Solar Blankets</a></li>
                <li><a href="#">Super Bubble Solar Blankets</a></li>
                <li><a href="#">Elite Easy Rollers</a></li>
                <li><a href="#"> Hideaway In-ground Rollers</a></li>

            </ul>
            <ul class="list-items">
                <li><a href="#">Semi-Automatic Roller Systems</a></li>
                <li><a href="#">Bench Seat Roller Systems</a></li>
                <li><a href="#"> Elite Pool Protector</a></li>
                <li><a href="#"> Debris & Security Mesh Covers</a></li>

            </ul>
            <ul class="list-items">
                <li><a href="#"> Automatic Slat Covers</a></li>
                <li><a href="#"> Automatic Flexible Covers</a></li>
                <li><a href="#"> Commercial Range</a></li>
                <li><a href="#"> Thermal Shield</a></li>
            </ul>
        </div>
    </div>

    <br>
    <?php

    include('footer.html');

    ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>