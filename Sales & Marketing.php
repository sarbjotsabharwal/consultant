<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales & Marketing</title>
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
            background: url('assets/img/sales and marketing/background.jpg') no-repeat center center/cover;
            opacity: .5;
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



    <!-- section start -->
    <h1
        style="color: white;background-color: rgba(0, 0, 0, 0.2);z-index: 5;width: 100%;height: auto;margin-top: 150px;text-align: center;font-size: 70px;font-family: 'Baloo Chettan 2', cursive;">
        SALES & MARKETING<br>
    </h1><br><br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(107, 1, 59, 0.699);z-index: 5;width: 70%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
        Charthill – SALES & MARKETING SERVICES<br>
        <!-- <span style="font-size: 25px;">for Australia, New-Zealand, Canada and United States</span> -->
    </h1><br>
    <div class="heading"></div>

    <div class="content">
        <!-- <h1 style="color:white;">LICENSING</h1> -->
        <p style="color: white;text-align: center;width: 85%; display:block;margin: auto;">
            Charthill Consultants is an all all-encompassing resource for distinct clients including brands, businesses,
            new developments, hospitality, and leading names in real estate. Our services are tailored to every client’s
            specific needs. <br> <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="OpenPlayer7()">
                Watch Video
            </button>
        </p>
    </div>
    <!-- section end -->
    <br><br>

    <div class="container"
        style="background: rgba(141, 141, 141, 0.5);color:white;width: 100vw;padding: 15px;border-radius: 20px;">
        <h5 class="card-title" style="font-weight: normal;font-size: 40px;">SALES DEVELOPMENT SERVICES</h5>
        <p style="text-align: center;">Our research shows that sales training can boost product sales by up to
            20%.During our work with the top-performing sales organizations in the world, Charthill has identified and
            outlined the key selling skills and behaviors that are most needed to improve sales performance and reduce
            the duration of the sales cycle.
            Charthill consultants deliver a premium professional service that uses unique training methodology actively
            engaging participants in role-playing, problem-solving and brainstorming exercises.</p>
        <div class="card-body" style="display: flex;flex-wrap:wrap;justify-content: center;">
            <ul class="list-items">
                <li>CHARTHILL exclusive sales Training Programs.</li>
                <li>CHARTHILL constructive Negotiation Training Programs.</li>
                <li>CHARTHILL Strategy Training Programs</li>
                <li>CHARTHILL account specific training programs</li>
            </ul>
            <ul class="list-items">
                <li>CHARTHILL Consultative Dialogues Training Program.</li>
                <li>CHARTHILL Constructive Dialogues Training Program.</li>
                <li>Sales management training.</li>
            </ul>
        </div>
    </div>

 <br>
    <?php

    include('footer.html');

    ?>
</body>

</html>