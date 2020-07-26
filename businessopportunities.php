<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Opportunities</title>
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
            width: 85%;
            height: auto;
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
            background: url('assets/img/businessoppo.jpeg') no-repeat center center/cover;
            opacity: .3;
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

        #clickbutton:hover {
            /* background: red; */
        }

        body {

            font-family: "Montserrat", sans-serif;
        }

        #heading-text {
            font-size: 80px;
        }

        #bottom-text {
            font-size: 25px;
        }

        #float-button {
            float: right;
            position: relative;
            bottom: 60px;
            right: 30px;
        }

        @media (max-width:768px) {

            #heading-text {
                font-size: 2.3rem;
            }

            #bottom-text {
                font-size: 2.3rem;
            }

            #float-button {
                float: right;
                position: relative;
                bottom: -10px;
                right: 20%;
            }
        }
    </style>
</head>

<body>
    <?php
    include('header.html');
    ?>
    <?php
    include('pdfviewer.html');
    ?>
    <!-- sticky background -->
    <div class="stickyback">

    </div>
    <!-- sticky background end -->



    <!-- section start -->
    <h1 style="color: rgb(1, 196, 1);
    background-color: rgba(0, 0, 0, 0.39);z-index: 5;width: 100%;height: auto;margin-top: 150px;text-align: center;font-weight:bold;padding:10px"
        id="heading-text">
        Business Opportunities</h1><br>
    <h4 style="color: white;font-style: italic;text-align: center;width: 80%;display: block;margin:auto;">Grow with us!
        <br> with our fantastic Business
        Opportunities. To join us or for more information regarding this, hit the 'read more' button given below. </h4>

    <!--card section-->
    <div class="cardcontainer1" id="allcards1" style="">

        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="ba1">

            <div class="card-body" style=" background: linear-gradient(to right, #d8f3a9, #9ef8ee);
            border-radius: 25px;">
                <!-- <h5 class="card-title">Current Investment Opportunity
                  
                </h5> -->
                <div class="card-body">
                    <img src="assets/img/Elite Pool Covers Australia-1.png" alt="" style="width: 100%;">

                    <a href="Investment-opportunity-For-North-america.pdf" style="" class="btn btn-success"
                        id="float-button">Download</a>

                </div>
                <!-- <object id="pdfframe" data="business opportunities.pdf" type="application/pdf" width="100%" height="90%">
                    <p>Problem in loading pdf, <a href="">Click here!</a></p>
                </object> -->
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>

        <!-- <div class="card bg-light mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">

            </div>
        </div> -->
    </div>
    <!-- card section end -->


    <br><br>
    <h1 style="display:block;margin:auto;color: white;background-color: rgba(3, 189, 13, 0.5);z-index: 5;width: 80%;text-align: center;border-radius: 25px;padding:10px;"
        id="bottom-text">
        To avail our Business Opportunities, <a href="contactus.php"
            style="background: rgb(0, 0, 0,.5);color: white;border-radius: 20px;padding-left: 10px;padding-right: 10px;"
            id="clickbutton">Click here!</a></h1><br>
    <div class="heading"></div>


    <?php

    include('footer.html');

    ?>
</body>

</html>