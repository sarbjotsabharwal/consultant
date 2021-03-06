<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPO Advisory</title>
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
            background: url('assets/img/ipo/ipo\ advisory.jpg') no-repeat center center/cover;
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

        .liststyle-items {

            list-style-type: square;
        }

        .liststyle-items li {
            padding: 10px;
            margin: 10px;
            list-style-type: square;
            border-radius: 10px;
        }

        .liststyle-items li:nth-child(even) {
            background-color: rgba(0, 12, 182, 0.7);

        }

        .liststyle-items li:nth-child(odd) {
            /* display: block; */

            background-color: rgba(2, 128, 19, 0.7);


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


        body {
            font-family: "Montserrat", sans-serif;
        }



        /* main image and card-container start*/
        .top-container1::before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background: url('assets/img/ipo/ipo\ advisory.jpg') no-repeat center center /cover;
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
            height: 400px;
            /* background: red; */
        }

        .two-cards {
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        @media(max-width:768px) {
            .card-item {
                height: auto;
                /* background: red; */
            }

            .top-container1 h1 {
                font-size: 3rem;
            }

            .two-cards {
                padding-left: 50px;
                padding-right: 50px;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            div.cardcontainer1 {
                padding: 0px;
            }

            div.card {
                width: 100%;
            }

            .heading11 {
                font-size: 1.5rem;
            }

            #list-11 {
                margin-left: 0;
                color: white;
                margin-right: 25px;
                text-align: justify;
                margin-bottom: 0;
            }

            #button-2 {
                margin-left: 8rem;
                margin-right: 25%;
                margin-top: 0;
            }
        }

        /* main image and card-container end */
    </style>
    <link rel="stylesheet" href="assets/css/fontset14.css">
</head>

<body style="  font-family: Montserrat, sans-serif;background:black">
    <?php
    include('header.html');
    ?>
    <?php
    include('videopopup.html');
    ?>


    <!-- main image and card-container start  -->
    <div class="top-container1">
        <h1>
            <br>
            <br>
            <span class="span-green"><strong>IPO Advisory</strong></span>
            <br>
            <br>
        </h1>
    </div>
    <div class="top-cards">
        <div class="card-item" style="background: rgb(37, 155, 37);color: white;">
            <div class="two-cards">
                <h3>
                    IPO Advisory Services<br>
                    <span style="font-size: 17px;padding:0;margin:0;">Australia, New-Zealand, Canada and United States</span>
                </h3><br>

                <p class="font14"> As a private company, if you have decided to go public, our experience has shown that the most successful
                    IPOs start long before the road show kicks off.
                    <br>
                    Charthill’s comprehensive IPO Advisory process centers on working with our clients in the year prior to the
                    IPO to develop their corporate message and to introduce them to potential banking partners, sell-side
                    research analysts and institutional investors.
                    <br>
                    Additionally, we work side-by-side with our clients throughout the entire IPO execution by providing
                    independent capital markets advice.<br><br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="OpenPlayer4()">
                        Watch Video
                    </button>
                </p>
            </div>

        </div>

        <div class="card-item" style="background: rgb(0, 18, 177);color: white;">
            <div class="two-cards">
                <h3>
                    IPO execution
                </h3><br>

                <p class="font14"> We provide support before, during, and after an IPO but the critical period for many companies is the 18
                    months prior to listing and the six months after. Throughout your IPO journey, our team of experienced
                    professionals can help guide you through the IPO process and in navigating the reporting obligations that
                    follow listing.

                </p>
            </div>
        </div>
    </div>
    <!-- main image and card-container end  -->


    <!-- ul section start -->
    <div style="background: rgb(173, 173, 173);">
        <br>
        <div class="heading"></div>
        <div class="content">
            <!-- <h1 style="color:white;">LICENSING</h1> -->

            <div style="display: flex;flex-wrap: wrap; justify-content: center;">
                <!-- card 1 -->
                <div class="card text-black bg-light mb-3" style="max-width: 380px;border-radius: 25px;">
                    <div class="card-header" id="show-card-1" style="margin: 0;padding: 0;border-radius: 25px;">
                        <img src="assets/img/ipo/ipoback.jpg" style="height: 250px;" alt="">
                        <h5 class="card-title" style="color:;font-size:35px;font-weight: normal;color: rgb(1, 196, 1)">Planning for an IPO </h5>
                    </div>

                    <div class="card-body text-dark" id="card-body-1">


                        <ul style="text-align: justify;"  class="font14 font15">

                            <li>Assessing IPO readiness</li>
                            <li>Developing an IPO Road map</li>
                            <li>Pre-IPO workshops</li>
                            <li>Assisting in developing accounting policies</li>
                            <li>Facilitation of non-US exchange listings</li>
                            <li>Assistance with US GAAP to IFRS conversions</li>

                        </ul>
                    </div>
                </div>
                <!-- card 1 end -->
                <!-- card 2  -->
                <div class="card text-white bg-success mb-3" style="max-width: 400px;border-radius: 25px;">
                    <div class="card-header" style="margin: 0;padding: 0;border-radius: 25px;">
                        <img src="assets/img/ipo/ipoexecution1.jpg" style="height: 250px;" alt="">
                        <h5 class="card-title" style="font-size:35px;font-weight: normal;">Executing an IPO
                        </h5>
                    </div>
                    <div class="card-body text-dark" id="card-body-2">
                        <ul style="color: white;text-align: justify;" class="font14 font15">
                            <li>Technical accounting and audit support</li>

                            <li>Helping to prepare financial statements and pro forma financial information including
                                quarterly financials</li>


                            <li>Drafting disclosures</li>

                            <li> Helping to prepare Form S-1</li>

                            <li>PMO services</li>


                        </ul>
                    </div>
                </div>
                <!-- card 2 end -->
                <!-- card 3 -->
                <div class="card text-dark bg-light mb-3" style="max-width: 380px;border-radius: 25px;">
                    <div class="card-header" style="margin: 0;padding: 0;border-radius: 25px;">
                        <img src="assets/img/ipo/post.jpg" style="height: 250px;" alt="">
                        <h5 class="card-title" style="font-size:35px;font-weight: normal;color: rgb(1, 196, 1)">Post-IPO
                        </h5>
                    </div>
                    <div class="card-body text-dark" id="card-body-3">
                        <ul style="text-align: justify;"  class="font14 font15">
                            <b><i></i></b>
                            <li> Assisting with external reporting</li>

                            <li> Providing on-call accounting services</li>

                            <li> Providing insights into the implications of new accounting standards</li>

                            <li> SOX services</li>

                        </ul>
                    </div>
                </div>
                <!-- card 3 end -->
                <!-- para -->
                <p style="color: white;font-size:20px;text-align: center;width: 90%;padding:20px;border-radius:10px;font-weight: bold;background: rgb(0, 0, 0,.4);">Completing an IPO will often involve
                    significant changes to corporate, capital and management structures, and once public, a company will be
                    subject to a number of rules and reporting obligations. With a host of benefits as well as costs, going
                    public have considerable benefits:
                </p>
                <ul style="color: white;text-align: justify;" class="liststyle-items font14 font15">

                    <li>A value for securities can be established</li>
                    <li>Increased access to capital-raising opportunities (both public and private financings) and expansion
                        of investor base</li>
                    <li>Liquidity for investors is enhanced since securities can be traded through a public market.</li>
                    <li>Publicly traded securities are attractive for certain other purposes (as transaction currency or

                        executive and employee compensation, for example)</li>
                    <li>Credibility and visibility with the public is enhanced, as is the corporate image</li>
                    <li>Lower cost of capital relative to debt financing</li>

                </ul>
                <!-- para end -->
            </div>
        </div>

    </div>
    <!-- ul section end -->
    <!-- card section end -->
    <?php

    include('footer.html');

    ?>
</body>

</html>