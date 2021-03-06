<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales & Marketing</title>
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
            background: url('assets/img/sales and marketing/sales\ and\ marketing.jpg') no-repeat center center /cover;
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
            background-color: rgba(233, 233, 233);
            color: black;

        }

        .list-items li:nth-child(even) {
            /* display: block; */
            color: white;


            background-color: rgba(2, 128, 19);

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
            background: rgba(241, 241, 241, 0.2);
            /* background: rgba(121, 248, 148, 0.2); */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .container-box {
            display: flex;
            flex-wrap: wrap;
            /* width: 40vw; */
            /* height: vh; */
            /* background: rgb(3, 167, 44); */
            background: rgba(1, 0, 20, 0.5);
            padding: 30px;
            margin: 20px;
            border-radius: 25px;
            text-align: center;
            color: white;
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

        .container-box p span {
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
            background: url('assets/img/sales and marketing/sales\ and\ marketing.jpg') no-repeat center center /cover;
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
            height: 300px;

            /* background: red; */
        }

        .list-items {
            width: 500px;
        }

        /* main image and card-container end */


        .two-cards {
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .heading11 {
            font-size: 35px;
        }

        #list-11 {
            margin-left: 25%;
            color: white;
            margin-right: 20%;
            text-align: justify;
            margin-bottom: 0;
        }

        #button-2 {
            margin-left: 45%;
            margin-right: 55%;
            margin-top: 0;
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


            .container-box p span {
                font-size: 30px;

            }

            .container-box p {
                width: 100%;
               
            }

            .container-box img {
                /* float: right; */
                /* position: relative; */
                width: 100%;
                border-radius: 25px;
                opacity: .9;
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
            <span class="span-green"><strong>SALES & MARKETING</strong></span>
            <br>
            <br>
        </h1>
    </div>
    <div class="top-cards">
        <div class="card-item" style="background: rgb(37, 155, 37);color: white;">
            <div class="two-cards">
                <h3>
                    Charthill – SALES & MARKETING SERVICES
                </h3><br>

                <p class="font14"> Charthill Consultants is an all-encompassing resource for distinct clients including brands,
                    businesses,
                    new developments, hospitality and leading names in real estate. Our services are tailored to every
                    client’s
                    specific needs.<br><br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="OpenPlayer7()">
                        Watch Video
                    </button>
                </p>
            </div>

        </div>

    </div>
    <!-- main image and card-container end  -->



    <!-- section start -->

    <div class="container2" style="background: rgb(173, 173, 173);">
        <div class="container-box" id="container-box-1">
            <p class="font14">
                <span>SEO</span>
                SEO is one of the most effective digital marketing strategies. Search engine optimization works to
                improve your website’s ranking in search engine ranking pages, so that your site earns more traffic.
                With increased traffic, companies experienced increase in sales and revenue.
            </p>
            <img src="assets/img/sales and marketing/new/SEO.jpg" alt="">
        </div>
        <div class="container-box">
            <img src="assets/img/sales and marketing/new/pay per click.jpg" alt="">
            <p class="font14">
                <span>PPC</span>
                Pay per click advertising is another extremely common digital marketing strategy. It is a cost effective
                strategy that allows your business to target ideal customers based on keywords they search, demographic
                information and more.
            </p>
        </div>
        <div class="container-box">
            <p class="font14">
                <span>SOCIAL MEDIA MARKETING</span>
                Social media channels like Facebook, Twitter, Instagram and LinkedIn allow your business to reach more
                customers and boost brand awareness.Sharing your company’s content on social media is a great way to
                increase site traffic and ultimately conversions.
            </p>
            <img src="assets/img/sales and marketing/new/digital marketing.jpg" alt="">
        </div>
        <div class="container-box">
            <img src="assets/img/sales and marketing/new/email.jpg" alt="">
            <p class="font14">
                <span>Email marketing</span>
                Email marketing can also help you increase brand awareness and site traffic — and it’s a great lead
                nurturing strategy. Top digital marketing companies offer this service because of its extremely low cost
                and high return on investment (ROI).
            </p>
        </div>
        <div class="container-box">
            <p class="font14">
                <span>Content Marketing</span>
                Content marketing allows you to create informative, beneficial content based on your target keywords in
                order to rank at the top of search results.
            </p>
            <img src="assets/img/sales and marketing/new/content marketing.jpg" alt="">
        </div>
        <div class="container-box">
            <img src="assets/img/sales and marketing/new/fencing.jpg" alt="">
            <p class="font14">
                <span> Geo Fencing </span>
                Geo fence technology combines effective mobile advertising with advanced location based technology to
                reach consumers at the right time: when they are already in your neighborhood. Geo fence creates a
                virtual boundary around a location that uses GPS to identify nearby smartphones and trigger an action,
                like showing your advertisement. This technology tracks clicks, site visits, calls and emails that come
                from your advertisements.
            </p>
        </div>


    </div>

    <!-- section end -->

    <div class="" style="background:rgb(0, 18, 177);">


        <div class="container" style="color:white;width: 100%;padding: 15px;">
            <h5 class="card-title" style="font-weight: normal;font-size: 40px;padding: 20px;background: rgb(233, 233, 233); width: 100%;font-weight: bold;border-radius: 20px; color: rgb(1, 196, 1);">SALES DEVELOPMENT SERVICES</h5>
            <p style="color: white;text-align: center;width: 90%;padding:20px;border-radius:10px;font-weight: bold;background: rgb(0, 0, 0,.2);display: block;margin:auto;" class=" font14 font15">Our research shows that sales training can boost product sales by up to
                20%.During our work with the top-performing sales organizations in the world, Charthill has identified
                and
                outlined the key selling skills and behaviors that are most needed to improve sales performance and
                reduce
                the duration of the sales cycle.
                Charthill consultants deliver a premium professional service that uses unique training methodology
                actively
                engaging participants in role-playing, problem-solving and brainstorming exercises.</p>
            <div class="card-body font17 font14" style="display: flex;flex-wrap:wrap;justify-content: center;">
                <ul class="list-items" >
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
    </div>

    <br>
    <?php

    include('footer.html');

    ?>
</body>

</html>