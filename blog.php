<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licensing</title>
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
            width: 80vw;
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
            background: url('assets/img/licensing/licensing.jpg') no-repeat center center/cover;
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


        body {
            font-family: "Montserrat", "sans-serif";

        }

        .card-title {
            color: rgb(2, 168, 2)
        }


        /* main image and card-container start*/
        .top-container1::before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background: url('assets/img/Licensing.jpg') no-repeat center center /cover;
            z-index: -1;
            opacity: .5;
        }


        .top-container1 h1 {
            font-size: 80px;
            margin-top: 251px;
            text-align: center;

        }

        .span-green {
            color: rgb(7, 206, 7);

        }

        .top-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background: white;
        }

        .card-item {
            top: -70px;
            position: relative;
            width: 900px;
            height: 350px;
            /* background: red; */
        }

        /* main image and card-container end */

        .post-container1 .card {
            width: 500px;
            /* box-shadow: 0px 0px 5px 2px rgba(255, 255, 255, 0.6), 0 0px 10px 0 rgba(253, 253, 253, 0.5); */
            box-shadow: 0px 0px 6px 3px rgba(0, 0, 0, .6), 0 0px 10px 0 rgba(255, 255, 255, .5);
            text-align: center;
            /* max-width: 85vw; */

        }

    </style>
</head>

<body style="font-family: Montserrat, sans-serif;background:black">
    <?php
    include('header.html');
    ?>
    <?php
    include('videopopup.html');
    ?>
    <?php
    include('pdfviewer.html');
    ?>
    <!-- sticky background -->


    <div class="top-container1">
        <h1>
            <br>
            <br>
            <span class="span-green"><strong>Our Blog</strong></span>
            <br>
            <br>
        </h1>
    </div>

    <div class="post-container"
        style="display:flex;flex-wrap:wrap;justify-content:center;background-color: rgb(218, 218, 218);">
        <div class="card text-center">
            <div class="card-header">
                <img src="assets/img/about-vision.jpg" alt="">

            </div>
            <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam, amet
                    distinctio consequatur necessitatibus hic eum quod suscipit saepe eaque praesentium non ducimus
                    magni harum eligendi sit ipsam quis, dolorum consectetur veritatis quos ratione. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Recusandae, quos. Tempora vitae repellendus nihil.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="card-footer text-muted">
                by, <a href="http://sarbjotsabharwal.wordpress.com" target="_blank"> Sarbjot Sabharwal</a> (23 July
                2020)
            </div>
        </div>
        <div class="card text-center">
            <div class="card-header">
                <img src="assets/img/about-plan.jpg" alt="">

            </div>
            <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam, amet
                    distinctio consequatur necessitatibus hic eum quod suscipit saepe eaque praesentium non ducimus
                    magni harum eligendi sit ipsam quis, dolorum consectetur veritatis quos ratione. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Recusandae, quos. Tempora vitae repellendus nihil.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="card-footer text-muted">
                by, <a href="http://sarbjotsabharwal.wordpress.com" target="_blank"> Sarbjot Sabharwal</a> (23 July
                2020)
            </div>
        </div>
    </div>
    <div class="post-container1"
        style="display:flex;flex-wrap:wrap;justify-content:center;background-color: rgb(218, 218, 218);">
        <div class="card text-center">
            <div class="card-header">
                <img src="assets/img/about-vision.jpg" alt="">

            </div>
            <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam, amet
                    distinctio consequatur necessitatibus hic eum quod suscipit saepe eaque praesentium non ducimus
                    magni harum eligendi sit ipsam quis, dolorum consectetur veritatis quos ratione. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Recusandae, quos. Tempora vitae repellendus nihil.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="card-footer text-muted">
                by, <a href="http://sarbjotsabharwal.wordpress.com" target="_blank"> Sarbjot Sabharwal</a> (23 July
                2020)
            </div>
        </div>
        <div class="card text-center">
            <div class="card-header">
                <img src="assets/img/about-plan.jpg" alt="">

            </div>
            <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam, amet
                    distinctio consequatur necessitatibus hic eum quod suscipit saepe eaque praesentium non ducimus
                    magni harum eligendi sit ipsam quis, dolorum consectetur veritatis quos ratione. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Recusandae, quos. Tempora vitae repellendus nihil.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="card-footer text-muted">
                by, <a href="http://sarbjotsabharwal.wordpress.com" target="_blank"> Sarbjot Sabharwal</a> (23 July
                2020)
            </div>
        </div>
    </div>


    <?php

    include('footer.html');

    ?>
</body>

</html>