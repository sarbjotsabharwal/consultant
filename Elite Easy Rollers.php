<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Easy Rollers</title>
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
            background: rgba(2, 0, 32, 0.4);
            /* padding: 30px; */
            margin: auto;
            width: 80vw;
            border-radius: 25px;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .container-box {
            /* display: flex;
            flex-wrap: wrap; */
            /* width: 40vw; */
            /* height: vh; */
            /* background: rgb(3, 167, 44); */

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
            padding: 10px;
            margin-top: 60px;
            text-align: center;
            font-size: 50px;
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

        .side-sticky {
            position: absolute;
            width: 200px;
            height: 400px;
        }

        .header1 {
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            color: rgb(1, 196, 1);
            background-color: white;
            width: 80%;
            display: block;
            margin: auto;
            border-radius: 10px;
        }

        .pool-blanket {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #fff8e6;
            /* margin: 20px; */
            /* border-radius: 25px; */
        }

        .pool-blanket .content {
            width: 300px;
            padding: 20px;
            text-align: justify;

        }

        body {
            font-family: "Montserrat", sans-serif;
        }


        #video-img {
            width: 50%;
            padding: 10px;
            margin-right: 50px;
        }

        .para {
            width: 40%;
        }

        #ul-list {
            width: 40%;
            padding: 20px;
            text-align: justify;
            margin-left: 20px;
        }

        #second-img {
            border-radius: 10px;
            width: 112%;
            border: 1px solid white;
            height: 350px;
        }

        #img-big {
            width: 500px;
        }

        #para2{
            width: 400px;
        }
        @media (max-width:768px) {
            #video-img {
                width: 100%;
            }

            #vid-img {
                width: 125%;
            }

            .para {
                width: 100%;
            }

            #ul-list {
                width: 100%;
            }

            #second-img {
                /* width: 120%; */
                width: 175%;
                height: auto;
            }

            #heading1 {
                font-size: 35px;
            }

            #img-big {
                width: 80%;
            }
            #para2{
            width: 100%;
        }
        }
    </style>
    <link rel="stylesheet" href="assets/css/fontset14.css">
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

    <h1 id="heading1">Elite Easy Rollers<br></h1>
    <marquee>Elite Quality all Aluminium Roller Systems</marquee>
    <br> <br>
    <!-- <a href="#elitepool"><img src="assets/img/elitepool/down.gif" alt="" style="width: 150px;border: solid 2px white;border-radius: 100px;display: block;margin: auto;"></a> -->
    <!-- section end -->

    <p style="color: white;text-align:center;width: 70%;display: block;margin:auto;" class="font14">Elite’s wide range of roller
        systems are the only all aluminium rollers on the market. They are built to last
        with no plastic to break down in Australia’s harsh UV environment.
        <br> <strong>That’s real value for money!</strong> <br> (No plastic to break down in the Sun)
    </p>

    <div class="header1" style="margin-top:20px">
        <i> Elite Elegance Easy Roller™</i>
    </div>

    <!-- <div class="side-sticky">
        
    </div> -->

    <!-- section start -->
    <div class="container2" id="elitepool" style="margin-bottom: 25px;margin-top:10px">

        <ul style="margin-right: 30px;padding: 20px;text-align: justify;margin-right: 10px;" class="para font14">
            <li> The Mercedes of pool blanket rollers has been designed by a specialist design studio to offer the owner
                the most ascetically pleasing, easiest to operate pool roller on the world market with its radiused
                edges and form it will look great in any back yard.</li>
            <li> The Elegance Easy roller has a built-in drop pin braking system that will maintain the position of the
                roller when winding the pool blanket off the pool. The drop pin can be slid into the mobile position
                when the roller needs to be wheeled away from the pool.</li>

        </ul>
        <div style="width: 50%;padding: 10px;margin-right: 50px;">
            <a href="" onclick="OpenPlayer9()" data-toggle="modal" data-target="#exampleModal"><img src="assets/img/elitepool/easy roller/easy roller.png" alt="" style="border-radius: 10px;" id="second-img"></a>
        </div>
        <ul class="font14">
            <li style="text-align: justify;">The Elegance Easy roller frames can be power coated to your choice of
                colour to better match your pool area.
                Available fully mobile or stationary “use and remove”</li>
        </ul>
        <div class="font14">
            <img src="assets/img/elitepool/easy roller/1-Elite-Elegance-Roller-Info-Sheet.jpg" alt="" style="width: 90%;">

            <ul style="text-align: justify;margin-top: 20px;">
                <li>Available fully mobile or stationary “use and remove”</li>
                <li>The solar blanket is totally detachable from the roller</li>
                <li>A large easy wind wheel/handle combo winding system</li>
                <li>Comes with a heavy duty easy fit reflective cover to protect your solar blanket when wound up on the
                    roller in the sun</li>
                <li>The only roller with its own pull cord system, just walk to the other end of the pool and pull the
                    cord</li>
                <li>Has nylon and stainless steel 360° rotating heavy duty castors for ease of use</li>
                <li><strong>12 year warranty</strong></li>
            </ul>
        </div>
    </div>


    <div class="header1" style="margin-top:20px">
        <i> Elite Platinum Easy Roller™</i>
    </div>
    <div class="container2" id="elitepool" style="margin-bottom: 25px;margin-top:10px">

        <div class="" style="display: flex;flex-wrap: wrap;justify-content: center;">
            <img src="assets/img/elitepool/easy roller/2-Elite-Platinum-Roller-1.jpg" alt="" style="" id="img-big">

            <ul style="text-align: justify;margin-top: 20px;" id="para2" class="font14">
                <li>Available fully mobile or stationary “use and remove”</li>
                <li>The solar blanket is totally detachable from the roller so you can simply wheel the Easy roller back from the pool edge or out of sight.</li>
                <li>Featuring extra tall marine grade anodized aluminium frames for strength, reliability and longevity and a large easy wind wheel/handle combo winding system.</li>
                <li> Comes with a heavy duty easy fit reflective cover to protect your solar blanket when wound up on the roller in the sun.</li>
                <li>Over cover clips onto framework cut outs to hold the over cover perfectly, to protect your investment</li>

            </ul>
            <div style="width: 85%;text-align:justify;margin-top:10px" class="font14">

                <li>Elite’s exclusive drop pin system. (stops the roller moving when in use and locates the roller in the exact spot for easy, one person operation)</li>
                <li> The only roller with its own pull cord system, just walk to the other end of the pool and pull the cord
                <li> Has nylon and stainless steel 360° rotating heavy duty castors for ease of use.</li>

                <li><strong>10 year warranty</strong></li>
            </div>
        </div>
    </div>


    <div class="header1" style="margin-top:20px">
        <i> Elite Deluxe Mobile Easy Roller™</i>
    </div>
    <div class="container2" id="elitepool" style="margin-bottom: 25px;margin-top:10px">

        <div class="" style="">
            <img src="assets/img/elitepool/easy roller/Elite-Deluxe-Roller-Info-Sheet.jpg" alt="" style="width: 90%;">

            <ul style="text-align: justify;width: 90%;display: block;margin: auto;margin-top: 20px;" class="font14">
                <li> Elite Deluxe Fully Mobile Easy Roller., “use and remove”</li>
                <li> Has nylon and stainless steel 360° rotating heavy duty castors for ease of use</li>
                <li> Computer cut 5mm anodised frame for longevity</li>
                <li> The Deluxe anodised handle make winding up blanket a breeze</li>
                <li> Elite’s exclusive drop pin system. (stops the roller moving when in use and locates the roller in
                    the
                    exact spot for easy, one person operation)</li>
                <li> Over cover clips onto framework cut outs to hold the over cover perfectly, to protect your
                    investment</li>
                <li> Comes with either a detachable or cord fitting system</li>
                <li> The only roller with its own pull cord system, just walk to the other end of the pool and pull the
                    cord.</li>
                <li><strong>8 year warranty</strong></li>
            </ul>
        </div>
    </div>



    <div class="header1" style="margin-top:20px">
        <i> Elite Deluxe Mobile Easy Roller™</i>
    </div>
    <div class="container2" id="elitepool" style="margin-bottom: 25px;margin-top:10px">

        <div class="" style="">
            <img src="assets/img/elitepool/easy roller/Elite-Standard-Roller-Info-Sheet.jpg" alt="" style="width: 90%;">

            <ul style="text-align: justify;width: 90%;display: block;margin: auto;margin-top: 20px;" class="font14">
                <li>All aluminium construction Anodized tube</li>
                <li> Comes complete with white reflective over cover</li>
                <li>5mm aluminium frame construction</li>
                <li>“The best value budget roller on the market, you compare the quality”</li>

                <li><strong>6 year warranty</strong></li>
            </ul>
        </div>
    </div>
    <div class="header1" style="margin-top:20px">
        <i>Elite Pool Cord System™</i>
    </div>
    <div class="container2" id="elitepool" style="margin-bottom: 25px;margin-top:10px">

        <div class="" style="">
            <img src="assets/img/elitepool/easy roller/Elite-Pool-Cord-System-Info-Sheet.jpg" alt="" style="width: 90%;">

            <ul style="text-align: justify;width: 90%;display: block;margin: auto;margin-top: 20px;" class="font14">
                <li>One person can easily pull the cover onto the pool from the opposite end to the roller system.</li>
                <li>Elites exclusive detachable roller to blanket system, allows the blanket to remain on the pool while the
                    Elite roller can be moved away from the pool. Great for winter and when entertaining around the pool.</li>
                <li>The pool blanket is connected to the roller with Elites Exclusive blanket clamping system minimizing the</li>
                chances of tears in the blanket.
                <li>The best fitting system on the market</li>

            </ul>
        </div>
    </div>



    <?php

    include('footer.html');

    ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>