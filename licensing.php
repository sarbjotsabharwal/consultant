<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Business Alliance</title>
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
    </style>
</head>

<body style="font-family: Montserrat, sans-serif;">
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
    <div class="stickyback">

    </div>
    <!-- sticky background end -->

    <!-- section start -->
    <h1
        style=" color: rgb(1, 196, 1);background-color: rgba(0, 0, 0, 0.39);z-index: 5;width: 100%;height: auto;margin-top: 150px;text-align: center;font-size: 80px;font-weight: bold;">
        Licensing Services</h1><br><br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(206, 206, 206, 0.5);z-index: 5;width: 30%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
        Licensing</h1><br>
    <div class="heading"></div>

    <div class="content">
        <!-- <h1 style="color:white;">LICENSING</h1> -->
        <p style="color: white;text-align: center;width: 80%; display:block;margin: auto;">

            Licensing is defined as business format where a company authorizes another company to access its
            intellectual property rights.
            <br>
            If you are an inventor charthill can help you obtain a patent, trademark and copyright.
            <br>
            We seek out opportunity and risk our own time to work with. <br> <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="OpenPlayer()">
                Watch Video
            </button>
        </p>
    </div>
    <!-- section end -->


    <!--card section-->
    <br>
    <br>
    <h1
        style="display:block;margin:auto;color:white;background-color: rgba(0, 0, 0, 0.39);z-index: 5;width: 100%;text-align: center;font-size: 25;border-radius: 25px;padding:25px;font-weight: bold;">
        BENEFITS OF LICENSING
    </h1><br>
    <div class="cardcontainer1" id="allcards1" style="">

        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="ba1">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/licensing work.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ecfad4, #c2faf3);opacity: 1;">
                <h5 class="card-title">How a licensing aggrement works? </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    In a typical licensing agreement, the licensor grants the licensee the right to sell goods, apply a
                    brand name or trademark, or use patented technology owned by the licensor, in exchange for payments
                    to the licensor paid by the licensee for use of such right.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/cost.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ffdbcd, #ffa1a1);opacity: 1;">
                <h5 class="card-title">What is the cost of licensing?</h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    The licensee pays a upfront fee or no fee depending on the negotiation for the license and a
                    negotiated percentage of turnovers on the branded, or other licensed products. That ongoing
                    percentage can be negotiated between both parties.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/own business.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ecfad4, #c2faf3);opacity: 1;">
                <h5 class="card-title">How does licensee run the business? </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                The licensee runs the business by making use of the brand or other intellectual properties to attract clients and customer by following the terms and conditions.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/geographical.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ffdbcd, #ffa1a1);opacity: 1;">
                <h5 class="card-title">Exclusivity of development areas and territory </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    There is no geographic exclusivity for doing business, as with a real estate franchise, but the
                    license agreement may include a geographical limit on how close another licensee may display the
                    same logo.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/law.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ecfad4, #c2faf3);opacity: 1;">
                <h5 class="card-title">Licensing legislations and policies? </h5>
                <p class="card-text" style="text-align: center;padding: 10px;color: black;height: auto;">
                A licensing agreement is a legal contract between two parties known as the licensor and the licensee. The licensor grants licensee the right to produce and sell goods, apply a brand name or trademark or use patented technology owned by the licensor. Licensees are controlled by less stringent business legislation. However, Licensor and Licensee must consult with their legal team before coming to an arrangement. 

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>


    </div>

    <!-- card section end -->
    <?php

    include('footer.html');

    ?>
</body>

</html>