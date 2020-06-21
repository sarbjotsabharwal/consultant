<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchising</title>
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
            background: url('assets/img/franchising/franchisingback.jpg') no-repeat center center/cover;
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
        style="color: white;background-color: rgba(0, 0, 0, 0.2);z-index: 5;width: 100%;height: auto;margin-top: 150px;text-align: center;font-size: 100px;font-family: 'Baloo Chettan 2', cursive;">
        Franchising</h1><br><br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(42, 212, 255, 0.5);z-index: 5;width: 70%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="OpenPlayer2()">
                Watch Video
            </button>
        </p>
    </div>
    <!-- section end -->


    <!-- section start -->
    <br> <br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(228, 213, 13, 0.5);z-index: 5;width: 80%;text-align: center;font-size: 25;border-radius: 25px;padding:10px">
        Need Help With Your Invention Or product Idea?</h1><br>
    <div class="heading"></div>

    <div class="content">
        <!-- <h1 style="color:white;">LICENSING</h1> -->
        <p style="color: white;text-align: center;width: 80%; display:block;margin: auto;">

            If you are an inventor with a patent, we can help you make it very profitable.
            <br>

            Charthill consultants has 35 years of experience in Licensing small to big businesses.
            Simply put, we find companies who will retail and distribute your invention and make your business more
            profitable.
            <br>

            A startling fact is that only 2-3% of all patented inventions ever make more money for the inventor than
            they invested into it. Why? Most commonly we have found that many inventors simply do not understand many of
            the business principles that govern such transactions. Moreover, although they are brilliant in various
            aspects of engineering and the conception of their ideas, they do not know these important decision makers
            or how to present their inventions effectively.

            <br>
            We at Charthill consultants will bridge this gap and become a critical team member in the licensing of our
            clients’ inventions. We attend trade shows throughout the world and make face-to-face presentations.

            <br>
            With the right strategies and agent working for you, the opportunities for your invention are endless. We at
            Charthill Consultants will seek out these opportunities and even risk our own time and financial resources
            to make it happen. We are just looking for good inventions to work with. <br> <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="OpenPlayer1()">
                Watch Video
            </button>
        </p>
    </div>
    <!-- section end -->


    <!--card section-->
    <br>
    <br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(0, 0, 0, 0.3);z-index: 5;width: 100%;text-align: center;font-size: 25;border-radius: 25px;padding:25px">
        FRANCHISING AND ITS BENEFITS
    </h1><br>
    <div class="cardcontainer1" id="allcards1" style="">

        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="ba1">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/grow.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #d3d0ff, #c38fff);opacity: 1;">
                <h5 class="card-title">EXPAND WITHOUT CAPITAL </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Allows you to grow and expand your business without the need for significant capital outlay. The
                    franchisee provides all the capital required to open and operate a unit. So, whether you want a
                    couple of extra business units or 20++ your costs remain relatively the same.
                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/motivate.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #99fdb2, #eefc6f);opacity: 1;">
                <h5 class="card-title">MOTIVATED PEOPLE GROWING YOUR BRAND</h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Unlike employing staff, who may or may not be passionate about your business and will ultimately
                    leave, franchisees are invested in the success of the brand which is often referred to in
                    franchising as ‘skin in the game’. Long-term commitment improved operational function are just some
                    of the advantages.

                </p>
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
                <h5 class="card-title">SPEED OF GROWTH </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Opening or starting a single service unit is expensive and takes time. Franchising allows companies
                    to compete with much larger businesses so they can penetrate a particular market or territory much
                    faster than an independent business operator.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/lesstaff.png" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #99fdb2, #eefc6f);opacity: 1;">
                <h5 class="card-title">REDUCED OVERHEADS </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Franchising allows franchisors to function effectively with a much smaller staff. Because
                    franchisees will assume many of the responsibilities otherwise shouldered by head office,
                    franchisors can leverage these efforts to reduce overall staffing.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/increaseProfit.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #d3d0ff, #c38fff);opacity: 1;">
                <h5 class="card-title">INCREASED PROFITABILITY </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    The staffing leverage and ease of supervision allows franchised organisations to run in a highly
                    profitable manner. Since franchisors can depend on their franchisees to cover all set up and running
                    cost of the business unit, the franchisor’s organisation is run much leaner so the net result is
                    that a franchise organisation can be more profitable.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/scalable.png" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #99fdb2, #eefc6f);opacity: 1;">
                <h5 class="card-title">FULLY SCALABLE MODEL </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    A franchise model will work for 2 or 200+ franchise units and allows you to grow at the speed you’re
                    comfortable with.

                </p>
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
                <h5 class="card-title">ENTRY INTO ADDITIONAL MARKETS </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Once the Franchise model is established it is often relatively simple to add additional services
                    that operate in similar industries and markets. This enables the franchisor to achieve organic
                    growth with little capital outlay.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/franchising/risk.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #99fdb2, #eefc6f);opacity: 1;">
                <h5 class="card-title">REDUCED RISK </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    By its very nature, franchising also reduces risk for the franchisor. Unless you choose to structure
                    it differently, the franchisee has all the responsibility for the investment in the franchise
                    operation, paying for any plant and equipment, purchasing inventory, hiring employees, and taking
                    responsibility for any working capital needed to establish the business.

                    The combination of these factors provides you with substantially reduced risk. Franchisors can grow
                    to hundreds or even thousands of units with limited investment and without spending any of their own
                    capital on unit expansion.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>

        <div class="seprator" style="color: white;font-weight: bold;">---------------------------</div>
        <h1
            style="display:block;margin-top: 20px;margin-bottom: 20px;color: white;background-color: rgba(42, 212, 255, 0.5);z-index: 5;width: 90%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
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
                        <h5 class="card-title">DEVELOP & BUILD THE MANUALS</h5>
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
                        <h5 class="card-title">LEGAL DOCUMENTATION</h5>
                    </div>
                    <div class="card-body text-dark">
                        <ul style="color: white;text-align: justify; ">
                            <li style="font-size: 15px;"> Franchise Agreement</li>
                            <li style="font-size: 15px;"> Disclosure Document</li>
                            <li style="font-size: 15px;"> Confidentiality Agreement</li>
                        </ul>
                    </div>
                </div>
                <ul style="color: white;text-align: justify;;">
                    <b><i></i></b>

                </ul>
            </div>


        </div>

        <h1
            style="display:block;margin-top: 20px;margin-bottom: 20px;color: white;background-color: rgba(228, 213, 13, 0.5);z-index: 5;width: 90%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
            IMPLEMENTATION & FRANCHISOR SUPPORT & TRAINING</h1><br>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="OpenPlayer3()" style="margin-left: 45%;margin-right: 55%;margin-top: 0;">
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