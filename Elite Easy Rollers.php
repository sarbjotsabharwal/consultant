<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Easy Rollers</title>
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@500&family=Metal+Mania&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            font-family: 'Metal Mania', cursive;
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
            color: white;
            background-color: rgba(2, 0, 102, 0.2);
            z-index: 5;
            width: 100%;
            height: auto;
            padding: 10px;
            margin-top: 60px;
            text-align: center;
            font-size: 50px;
            font-family: 'Baloo Chettan 2', cursive;
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
            color: white;
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
    </style>
</head>

<body>
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

    <h1 id="heading1">Super Bubble Solar Blankets<br></h1>
    <marquee>Elite Exclusive Super Bubble Solar Blankets</marquee>
    <br>
    <!-- <a href="#elitepool"><img src="assets/img/elitepool/down.gif" alt="" style="width: 150px;border: solid 2px white;border-radius: 100px;display: block;margin: auto;"></a> -->
    <!-- section end -->



    <div class="header1" style="margin-top:20px">
        <i> How does your pool lose heat?</i>
    </div>

    <!-- <div class="side-sticky">

    </div> -->

    <!-- section start -->
    <div class="container2" id="elitepool" style="margin-bottom: 25px;margin-top:10px">

        <ul style="margin-right: 30px;width: 40%;padding: 20px;text-align: justify;margin-right: 10px;">
            <li>While the sun is trying to heat your pool, the wind sets up convection currents that steal the same heat
                at an alarming rate.</li>

            <li>Every square centimetre of your pool’s surface gives up heat to the wind by evaporation. The stronger
                the wind, the greater the heat loss.</li>

            <li>Evaporation alone accounts for 60% of the heat loss from your pool. Another 30% of the loss radiates
                into the air from the water surface and 10% goes into the ground.</li>

        </ul>
        <div style="width: 50%;padding: 10px;margin-right: 50px;">
            <a href="" onclick="OpenPlayer8()" data-toggle="modal" data-target="#exampleModal"><img
                    src="assets/img/elitepool/triple cell/video.png" alt="" style="border-radius: 10px;"></a>
        </div>
    </div>
    <br>


    <div class="header1" style="">
        <i> What will an Elite Pool Blanket do for me?</i>
    </div>

    <div class="pool-blanket">
        <div class="content">
            <img src="assets/img/elitepool/superbubble/Solar-Heating-Free-300x156-1.jpg" alt="">
            <hr>
            <p style="">Elite Super Bubble Blankets are proven to be the best heating blankets available*, so you will
                swim in
                warmer water for a lot longer.</p>
        </div>
        <div class="content">
            <img src="assets/img/elitepool/superbubble/2-Saves-Precious-Water-300x156-1.jpg" alt="">
            <hr>
            <p style="">An Elite Super Bubble Blanket will keep the water in, keep the heat in and keep the chemicals in
                your pool, saving you money.</p>
        </div>
        <div class="content">
            <img src="assets/img/elitepool/superbubble/3-Keeps-Pool-Cleaner-300x156-1.jpg" alt="">
            <hr>
            <p style="">You will spend more time enjoying your pool and less time cleaning it.</p>
        </div>
    </div>

    <br><br>


    <div class="text-container"
        style="background: rgb(51, 51, 51,.5);width: 90%;margin: auto;color: white;text-align: center;border-radius: 20px;">
        <br>
        <h2>What makes Elite Blanket range better than others? </h2>
        <h5 style="font-style: italic;">*NOT ALL BLANKETS ARE CREATED EQUAL*</h5>
        <br>
        <h4 style="background: rgb(0, 0, 0,.6);border-radius: 20px;padding: 15px;">The Five Facts about round bubble
            blankets</h4>

        <p style="padding:30px;color: white;font-size: 20px;text-align: justify;"> <b>“Ten years ago Elite set out to
                improve on All aspects of the ‘run of the mill round bubble blankets’ and
                succeeded by developing the Elite Super Bubble Blanket that is proven to out-perform all Solar type of
                round
                bubble blankets on the world market.*”</b>
        </p>
        <ol style="text-align: justify;margin: 30px;margin-top: 0;" type="1">
            <li>There are a number of ”run of the mill” round bubble type blankets on the market. Most of them perform
                the
                same as each other i.e. heat the same/as they are the same pale colours.</li>
            <li>These “run of the mill” blankets keep the heat in your pool the same, as they all have similar small
                bubble
                size, i.e. the same “ok” insulating properties and they will last about the same as each other i.e., as
                they
                are the same thickness i.e., 500, 400, 300 micron etc.</li>

            <li>Elite Super Bubble Ultra Heat Deep Colour Blankets are proven to heat better than standard pool blankets
                i.e., darker colours heat better than lighter colours giving you a warmer pool and a longer swimming
                season*</li>
            <li>Elite’s Super Bubble Blanket is the best insulating round bubble blanket available due to its superb
                insulating larger higher bubble size. This gives you a longer swimming season, plus, if your pool is
                heated
                you get great energy savings.</li>
            <li>Elite Super Bubble Salt Safe/Chlorine Safe 550 Micron Blanket will out-last other round bubble blankets
                due
                to its thickness and bubble design.</li>
        </ol>
        So ask for a sample of what you are getting quoted on and you be the judge!
<br>
        * PROVEN RESULTS (Independent scale tank tests and comparative guarded hot plate tests to Australian Standard
        AS4859-1.)
        <br><br>
    </div>


    <br>
    <?php

    include('footer.html');

    ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


</html>