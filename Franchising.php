<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchising</title>
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
            background: url('assets/img/franchising/back.webp') no-repeat center center/cover;
            opacity: .4;
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

            font-family: "Montserrat", sans-serif;
        }

        .card-title {
            color: rgb(3, 158, 3)
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
    <h1 style=" color: rgb(2, 168, 2);background-color: rgba(0, 0, 0, 0.39);z-index: 5;width: 100%;height: auto;margin-top: 150px;text-align: center;font-size: 100px;font-weight: bold;">
        Franchising</h1><br><br>
    <h1 style="display:block;margin:auto;color: white;background-color: rgba(42, 212, 255, 0.5);z-index: 5;width: 70%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
        Charthill – BUSINESS FRANCHISING SERVICES</h1><br>
    <div class="heading"></div>

    <div class="content">
        <!-- <h1 style="color:white;">LICENSING</h1> -->
        <p style="color: white;text-align: center;width: 80%; display:block;margin: auto;">

            Since 1985 we have been assisting successful businesses just like yours who are looking to roll out a
            profitable franchise model. The franchisor journey can be fraught with hidden pitfalls to the uninitiated,
            and our wealth of experience will highlight these from our very first meeting.
            <br>
            The experience level and history of our consultants is truly remarkable. We encourage you to read about
            their educational, career and entrepreneurial backgrounds. In addition to the 35 years of our experience,
            this will give you an idea of the calibre of information you’ll be receiving when you take advantage of our
            services. <br> <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="OpenPlayer2()">
                Watch Video
            </button>
        </p>
    </div>
    <!-- section end -->


    <!-- section start -->
    <br> <br>
    <h1 style="display:block;margin:auto;color: white;background-color: rgba(228, 213, 13, 0.5);z-index: 5;width: 80%;text-align: center;font-size: 25;border-radius: 25px;padding:10px">
        How to Franchise Your Business Simply</h1><br>
    <div class="heading"></div>

    <div class="content">
        <!-- <h1 style="color:white;">LICENSING</h1> -->
        <p style="color: white;text-align: center;width: 80%; display:block;margin: auto;">
            It‘s more than just systems: a franchise without a system is like a car without wheels – it’s just not going
            anywhere.
            <br>
            Whether you are just starting up, you currently have 50 franchisees or are somewhere in between, if you want
            to franchise successfully, you need a clear simple and well-documented system just as any well-run business
            does.
            <br> <br>

        </p>
    </div>
    <!-- section end -->

    <!--card section-->
    <br>
    <br>
    <h1 style="display:block;margin:auto;color: white;background-color: rgba(0, 0, 0, 0.3);z-index: 5;width: 100%;text-align: center;font-size: 25;border-radius: 25px;padding:25px;font-weight: bold;">
        FRANCHISING AND ITS BENEFITS
    </h1><br>
    <div class="cardcontainer1" id="allcards1" style="">

        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="ba1">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/Elite6-Business-Networking-380.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #d3d0ff, #c38fff);opacity: 1;">
                <h5 class="card-title">BUILDING TWO BUSINESS STRUCTURES </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    You are in fact building at least two very different but linked business structures, one for you as
                    franchisor and one for your partners in business, your franchisees.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
                <button type="button" style="margin: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" onclick="OpenPdf()">
                    Read More
                </button>
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/support.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #99fdb2, #eefc6f);opacity: 1;">
                <h5 class="card-title">FRANCHISOR SUPPORT</h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    So yes, one of your core roles as the franchisor is to look after your franchisees. And this will
                    involve different skills with different franchisees as they grow in your partnership.


                </p>
                <button type="button" style="margin: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" onclick="OpenPdf1()">
                    Read More
                </button>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/speedgrowth.png" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #d3d0ff, #c38fff);opacity: 1;">
                <h5 class="card-title">THE MARKET SAYS YES </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Looking after your brand and marketing is also a central responsibility for any franchisor.
                    Marketing in a franchise, as with any business, involves far more than just advertising.


                </p>
                <button type="button" style="margin: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" onclick="OpenPdf2()">
                    Read More
                </button>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/two sides.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #99fdb2, #eefc6f);opacity: 1;">
                <h5 class="card-title">TWO SIDES OF THE SAME BUSINESS </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    So yes, big or small, the secret is to realise you are building two completely different business
                    structures from your current business and you will be doing business in a completely different way
                    in the future.

                </p>
                <button type="button" style="margin: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" onclick="OpenPdf3()">
                    Read More
                </button>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/expansion.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #d3d0ff, #c38fff);opacity: 1;">
                <h5 class="card-title">EXPANSION WITH CHOICE</h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    How big do you need your franchise group to be? Do you have a simple business method which will suit
                    the largest number of potential franchisees or does the complexity in your business restrict the
                    market? How skilled do you need your franchisees to be?

                </p>
                <button type="button" style="margin: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" onclick="OpenPdf4()">
                    Read More
                </button>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/money makes.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #99fdb2, #eefc6f);opacity: 1;">
                <h5 class="card-title">MONEY MAKES THE WORLD GO AROUND </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    So, right at the beginning, as you design your franchised business, you need to work out the money.
                    <ul style="color: rgb(0, 0, 0);text-align: justify;font-size: 15px; ">
                        <li>How much does each franchise outlet need to earn to be profitable enough to support you and
                            them?</li>
                        <li>How much does your product need to cost and sell for?</li>

                    </ul>
                </p>
                <button type="button" style="margin: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" onclick="OpenPdf5()">
                    Read More
                </button>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>





        <div class="seprator" style="color: white;font-weight: bold;">---------------------------</div>
        <h1 style="display:block;margin-top: 20px;margin-bottom: 20px;color: white;background-color: rgba(42, 212, 255, 0.5);z-index: 5;width: 90%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
            Charthill Consultants assist you to set up the Process of Franchising</h1><br>
        <div class="heading"></div>
        <div class="content">
            <!-- <h1 style="color:white;">LICENSING</h1> -->
            <p style="color: white;text-align: center;width: 90%; display:block;margin: auto;font-size: 20px;">
                <b>Following the completion and development of your Franchise System we will provide ongoing training,
                    guidance and support:-</b></p>
            <div style="display: flex;flex-wrap: wrap; justify-content: center;">
                <div class="card text-white bg-secondary mb-3" style="max-width: 400px;">
                    <div class="card-header">
                        <h5 class="card-title" style="color: white;">DEVELOP & BUILD THE MANUALS</h5>
                    </div>

                    <div class="card-body text-dark">


                        <ul style="color: white;text-align: justify; ">
                            <b><i></i></b>
                            <li style="font-size: 15px;">Franchise Operations Manual</li>
                            <li style="font-size: 15px;">Procedures Manual</li>
                            <li style="font-size: 15px;">Health & Safety Manual</li>
                            <li style="font-size: 15px;">Human Resources Manual</li>
                            <li style="font-size: 15px;">Document Storage Manual</li>

                        </ul>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 400px;">
                    <div class="card-header">
                        <h5 class="card-title" style="color: white;">LEGAL DOCUMENTATION</h5>
                    </div>
                    <div class="card-body text-dark">
                        <ul style="color: white;text-align: justify; ">
                            <li style="font-size: 15px;"> Franchise Agreement</li>
                            <li style="font-size: 15px;"> Disclosure Document</li>
                            <li style="font-size: 15px;"> Confidentiality Agreement</li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>

        <h1 style="display:block;margin-top: 20px;margin-bottom: 20px;color: white;background-color: rgba(228, 213, 13, 0.5);z-index: 5;width: 90%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
            IMPLEMENTATION, FRANCHISOR SUPPORT & TRAINING</h1><br>
        <div class="heading"></div>
        <div class="content">
            <!-- <h1 style="color:white;">LICENSING</h1> -->
            <p style="color: white;text-align: center;width: 90%; display:block;margin: auto;font-size: 20px;">
                <b>Following the completion and development of your Franchise System we will provide ongoing training,
                    guidance and support:-</b></p>
            <ul style="margin-left: 25%;color: white;margin-right: 20%;text-align: justify;margin-bottom: 0;">
                <li>Launch marketing campaign guidance</li>
                <li>Recruitment, screening and qualifying potential franchisees</li>
                <li>The Due Diligence Process; meetings, franchisee visits, preparation of all legal documentation and
                    guidance throughout the sales of your first franchise.</li>
                <li>Franchisee training and on-boarding</li>
                <li>Training and conducting franchisee field visits, providing feedback and ongoing support to the
                    franchisee</li>
                <li>Compliance management & conflict resolution</li>
                <li>Ongoing training and support as required</li><br>
            </ul>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="OpenPlayer3()" style="margin-left: 45%;margin-right: 55%;margin-top: 0;">
                Watch Video
            </button>

        </div>




    </div>

    <!-- card section end -->
    <?php

    include('footer.html');

    ?>
</body>

</html>