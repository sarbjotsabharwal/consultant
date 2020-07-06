<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triple Cell Solar Blankets</title>
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

    <h1 id="heading1">Triple Cell Solar Blankets<br></h1>
    <marquee>Ultra New Award Winning Triple Cell® Solar Pool Blanket – a world first</marquee>
    <br>
    <!-- <a href="#elitepool"><img src="assets/img/elitepool/down.gif" alt="" style="width: 150px;border: solid 2px white;border-radius: 100px;display: block;margin: auto;"></a> -->
    <!-- section end -->



    <div class="header1" style="">
        <i> Here’s how it works!</i>
    </div>

    <!-- <div class="side-sticky">

    </div> -->

    <!-- section start -->
    <div class="container2" id="elitepool" style="margin-bottom: 25px;">
        <div style="width: 50%;padding: 10px;margin-right: 50px;">
            <a href="" onclick="OpenPlayer8()" data-toggle="modal" data-target="#exampleModal"><img
                    src="assets/img/elitepool/triple cell/video.png" alt="" style="border-radius: 10px;"></a>
        </div>
        <ul style="margin-right: 30px;width: 40%;padding: 20px;text-align: justify;margin-right: 10px;">
            <li>Elite Triple Cell® is = to 3 standard round bubbles. The more contact with the water = better heating,
                better insulation and the pool stays warmer for longer…that’s Elite Triple Cell®</li>
            <li>With Traditional Bubble, performance is reduced due to the shaped “dead zone” between the bubbles not
                being in contact with the water</li>
            <li>Elite is proud to lead the world in pool blanket technology, made in Australia and exported to the world
            </li>

        </ul>
        <img src="assets/img/elitepool/triple cell/TripleCell_Explanation-b.png" alt=""
            style="width: 250px;height: 250px;">
        <img src="assets/img/elitepool/triple cell/TripleCell_Comparison-300x145-1.jpg"
            style="width: 400px;height: 250px;border-radius: 10px;margin-left: 30px;margin-right: 30px;border: 2px solid white;"
            alt="">

    </div>
    <br>

    <div class="header1" style="">
        <i> Don’t buy old technology! <br>
            Insist on the Ultra New Elite Triple Cell® Solar Pool Blanket</i>
    </div>
    <div class="container2" id="elitepool" style="margin-bottom: 25px;">


        <img src="assets/img/elitepool/triple cell/TripleCell_HeatedFree_FromTheSun.jpg" alt=""
            style="border-radius: 10px;width: 50%;border: 1px solid white;height: 350px;">
        <ul style="width: 40%;padding: 20px;text-align: justify;margin-left: 20px;">

            <h3>Elite Triple Cell® World Leading Technology</h3><br>
            <li>Performance – large purpose designed solar cells provide greater heat generation and insulation</li>
            <li>Designed and manufactured in Australia, proven in the world’s harshest conditions</li>
            <li>Easier to operate, easier to wind, easier on the eye</li>
            <li>610 Micron*</li>



        </ul>

    </div>

    <!-- section end -->
    <br><br>
    <div class="container"
        style="background: rgba(0, 0, 0, 0.4);color:white;width: 100vw;padding: 15px;border-radius: 20px;">
        <h5 class="card-title" style="font-weight: normal;font-size: 40px;">The Ultra New Triple Cell® Solar Pool
            Blanket Makes Others Obsolete</h5>

        <div class="card-body" style="display: flex;flex-wrap:wrap;justify-content: center;">

            <h5 style="font-style: italic;text-align: center;width: 80%;margin-bottom: 30px;">Elite Triple Cell® has
                evolved over a ‘25 year’ span and it has now become a reality… thanks to Elite’s vision and foresight in
                the continuous development and delivery of the world’s best performing pool cover available today.</h5>

            <ul class="list-items">
                <li>Elite Triple Cell® is the first purposed designed and manufactured pool blanket… It breaks away from
                    the
                    traditional ‘bubble wrap’ style and its problems. Elite Triple Cell® is a world’s first’ and it’s
                    only
                    available from Elite!</li>
                <li>The Elite Triple Cell® is a solar cell that acts as a collector of energy. This energy is
                    transformed to
                    heat the water better.</li>
                <li>Elite Triple Cell® provides better all-round insulating performance due to its greater still “air
                    zone”.
                    Its unique cell design also offers more protection from chlorine attack and harmful UV rays.</li>
                <li>Elite Triple Cell® is thicker… UP TO 60% thicker ON THE BASE The manufacturing process of Triple
                    Cell®
                    ensures a more uniform thickness at the side, top and base of the cell… Unlike bubble, where the
                    thickness can be inconsistent with less life expectancy. Elite Triple Cell® will have a long happy
                    life.</li>
                <li>Elite Triple Cell® lays flatter on the pool surface and rolls up easier over header courses plus
                    automatic cleaners work better.</li>
                <li>Elite Saltsafe® & Chlorsafe® technology is incorporated in the ultra-new Elite Triple Cell® Solar
                    Thermal Pool Blanket. A Longer Life & Better Performance</li>

            </ul>
        </div>
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