<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Migration Services</title>
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
            height: 350px;
            margin: 0;
            width: 100%;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }


        .stickyback::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/img/business migration/migration.jpg') no-repeat center center/cover;
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
            
        }

        .list-items li:nth-child(odd) {
            background-color: rgba(0, 12, 182, 0.7);


        }

        .list-items li:nth-child(even) {
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

        .card-title {
            color: rgb(1, 196, 1);
            font-weight: bold;
        }

        /* main image and card-container start*/
        .top-container1::before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background: url('assets/img/business migration/migration.jpg') no-repeat center center /cover;
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


        #card-body-1 {
            font-size: 15px;
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
            padding-right: 50px;
            padding-left: 50px;
        }

        #card-body-2 {
            border-radius: 25px;
            padding-right: 50px;
            padding-left: 50px;
        }


        #card-1 {
            width: 70vw;
        }

        .two-cards {
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 50px;
            padding-bottom: 50px;
        }

      
        #card-image-2 {
            height: 350px;
            /* box-shadow: none; */
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

            #card-1 {
                width: 100%;
            }

            #card-body-1 {
                font-size: 15px;
                border-bottom-left-radius: 25px;
                border-bottom-right-radius: 25px;
                padding-right: 15px;
                padding-left: 15px;
            }

            #card-body-2 {

                border-radius: 25px;
                padding-left: 15px;
                padding-right: 15px;
            }

            .card-header img, #card-image-2 {
                height: auto;
                margin: 0;
                width: 100%;
                border-top-left-radius: 25px;
                border-top-right-radius: 25px;

            }
        }
    </style>
    <link rel="stylesheet" href="assets/css/fontset14.css">
</head>

<body style="font-family: Montserrat, sans-serif;background:black">
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
            <span class="span-green"><strong>Business Migration Services</strong></span>
            <br>
            <br>
        </h1>
    </div>
    <div class="top-cards">
        <div class="card-item" style="background: rgb(37, 155, 37);color: white;">
            <div class="two-cards">
                <h3>
                    Business Migration Services<br><br>

                </h3>

                <p class="font14"> “AUSTRALIA” the name creates an image of a country inhabited by progressive and healthy society,
                    with people
                    emigrated from almost every nation.
                    <br>
                    Thanks to the presence of massive natural resources and consistent economical development, Australia
                    is the
                    amazing place for aspiring BUSINESSMEN & INVESTORS.<br><br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="OpenPlayer6()">
                        Watch Video
                    </button>
                </p>
            </div>

        </div>


    </div>
    <!-- main image and card-container end  -->

    <!-- section start -->
    <div style="background: rgb(173, 173, 173);">
        <br><br>
        <h5 class="card-title" style="background: whitesmoke;font-weight: bold;font-size: 30px;border-radius: 10px;color:green;padding:15px">
            CHARTHILL CONSULTANTS CAN ASSIST
            YOU IN
            THE FOLLOWING SERVICES</h5>
        <div class="container" style="background: rgba(141, 141, 141, 0.5);color:white;width: 100vw;padding: 15px;border-radius: 20px;">
            <div class="card-body" style="display: flex;flex-wrap:wrap;justify-content: center;">

                <ul class="list-items font14 font17">
                    <li>Relevant market research.</li>
                    <li>Market entry strategy</li>
                    <li>Feasibility study</li>
                    <li>The role of the applicant in the business.</li>
                    <li>Distribution channel information</li>
                    <li>Marketing plan</li>
                </ul>
                <ul class="list-items font14 font17">
                    <li>Projected cost analysis</li>
                    <li>Location research</li>
                    <li> Evidence of a joint-venture partnership (if relevant)</li>
                    <li> Evidence of any communication with potential suppliers</li>
                    <li>Competitor analysis and SWOT analysis</li>
                </ul>
            </div>
        </div>

        <br><br>
        <!-- section start -->

        <div style="background-color: rgba(0, 12, 182, 0.7);">

            <br><br>
            <div class="card text-dark bg-light mb-3" style="display:block;margin:auto;border-radius:25px" id="card-1">
                <div class="card-header">
                    <!-- <h5 class="card-title" style="font-weight: normal;font-size: 30px;">CHARTHILL CONSULTANTS CAN ASSIST YOU IN
                THE FOLLOWING SERVICES</h5> -->
                </div>
                <div class="card-body" style="display: flex;flex-wrap:wrap;background:linear-gradient(to right bottom, rgb(206, 204, 204), rgb(252, 243, 202));border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;">
                    <h5 class="card-title" style="font-size:40px;width:100%;margin:auto">Australia Business Visa (sub
                        class 132)

                    </h5>
                    <p style="padding-left: 40px;padding-right: 40px;" class="font14 font15"><b>It is a permanent
                            visa for high-caliber business owners or part-owners who want to do business in Australia.
                            The
                            132 visa is a state nominated Australian provisional business visa which is valid for four
                            years. It
                            is
                            a pathway to permanent residency.</b></p>

                    <!-- card section -->
                    <div style="display: flex;flex-wrap: wrap; justify-content: center;">
                        <!-- card 1 -->
                        <div class="card text-black bg-light mb-3" style="width: 90%;;border-radius: 25px;">
                            <div class="card-header" id="show-card-1" style="margin: 0;padding: 0;">
                                <img src="assets/img/business migration/new/development.jpg" alt="" id="card-image-2">
                                <h5 class="card-title" style="font-size:40px;">Property Development
                                </h5>
                            </div>

                            <div class="card-body text-dark font14 font15" id="card-body-1">

                                If your proposed business activity relates to property development, you must meet the
                                following
                                additional requirements:<br>
                                <ol style="list-style: lower-alpha;text-align: justify;padding: 15px;" class="font14">
                                    <li>

                                        Have relevant qualifications and experience (e.g. architecture, engineering,
                                        construction
                                        management). Relevant experience may substitute a qualification.
                                    </li>
                                    <li>
                                        Business management
                                        You must demonstrate how you will undertake senior level day-to-day and overall
                                        strategic
                                        management of the business.

                                    </li>
                                    <li>
                                        Capital investment

                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- card 1 end -->

                        <!-- card 2  -->
                        <div class="card text-black bg-light mb-3" style="width: 90%;;border-radius: 25px;" id="card">
                            <div class="card-header" style="margin: 0;padding: 0;">

                                <img src="assets/img/business migration/new/checklist.jpg" alt="" class="card-image-2">
                                <h5 class="card-title" style="font-size:40px;">You Must Have
                                </h5>
                            </div>
                            <div class="card-body text-dark" id="card-body-2" style="">
                                <ol style="list-style: lower-alpha;text-align: justify;" class="font14 font15">
                                    <li>

                                        A net value of at least AUD1.5 million (lawfully acquired)
                                    </li>
                                    <li>
                                        An annual business turnover of at least AUD3 million for at least 2 of the 4
                                        fiscal
                                        years
                                        immediately before you are invited to apply
                                    </li>
                                    <li>
                                        A total net assets of at least AUD $400,000 as the ownership interest in one or
                                        more
                                        qualifying businesses for least 2 of the 4 fiscal years immediately before you
                                        are
                                        invited to
                                        apply
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- card 2 end -->
                    </div>
                    <!-- card section end -->


                </div>
            </div>
            <br><br>
        </div>
        <!-- section end -->


        <?php

        include('footer.html');

        ?>
</body>

</html>