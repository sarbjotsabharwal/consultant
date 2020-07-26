<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semi-Automatic Roller Systems</title>
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

        #second-img {}

        #img-big {
            width: 500px;
        }

        #para2 {
            width: 400px;
        }

        .sec-img {
            width: 500px;
            margin: 20px;
            border: 2px solid white;
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

            #para2 {
                width: 100%;
            }

            .sec-img {

                width: 100%;
            }
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

    <h1 id="heading1">Semi-Automatic Roller Systems<br></h1>

    <br>




    <!-- <div class="side-sticky">
        
    </div> -->

    <!-- section start -->



    <div class="header1" style="margin-top:20px">
        <i> Energy Saving Semi-Automatic Pool Cover Systems</i>
    </div>
    <div class="container2" id="elitepool" style="margin-bottom: 25px;margin-top:10px">

        <p style="width: 90%;">Elite Semi-Automatic Pool Covers offer you a remote controlled system for your Elite Super Bubble or Thermal
            Shield Blanket. Systems can be designed to suit most shapes and sizes.</p>
        <div class="" style="display: flex;flex-wrap: wrap;justify-content: center;">
            <ol style="text-align: justify;margin-top: 20px;margin-right:20px;" type="1." class="para">
                <li><strong>Removing the blanket</strong></li>
                Just click the remote and the roller will automatically roll the cover off and stop when it reaches the
                end.

                <li><strong>Covering the pool</strong></li>
                Simply click the remote and guide the blanket out on to the pool with the Elite ‘pull cord’. The roller
                will automatically stop when the pool is completely covered. It couldn’t be easier!

                <li><strong>Mounting</strong></li>
                The Elite Auto Roller can be mounted on a wall or set into the Elite Hideaway which is neatly hidden
                below the ground out of sight. The Elite Auto Roller can be also hidden behind a water feature and made
                to come out of an ‘envelope slot’, for that extra wow factor and aesthetic value.



            </ol><br>
            <img src="assets/img/elitepool/semi-automatic/semi-automatic-roller-hoop-roller-2.jpg" alt="" style="" class="sec-img">
        </div>
        <div class="" style="display: flex;flex-wrap: wrap;justify-content: center;width:100%">
            <img src="assets/img/elitepool/semi-automatic/semi-automatic-roller-hoop-roller-1.jpg" alt="" style="" class="sec-img">
            <ul style="text-align: justify;margin-top: 20px;width: 400px;margin:10px">

                <li>Fits most pool shapes</li>
                <li>Fully Mobile – can be wheeled out of sight</li>
                <li>Low Voltage – for your safety</li>
                <li>Totally enclosed motor system – nice and neat</li>
                <li>All Aluminium & stainless steel construction – built to last, a great investment.</li>
                <li> Remote control option</li>
                <li> Great for retirement villages</li>
                <li>Hydrotherapy pools</li>
            </ul><br>

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