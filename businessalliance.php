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


    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        div.card {
            width: 85vw;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            max-width: 85vw;

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
            background-color: rgb(248, 245, 239);

        }

        .card-body h5 {
            font-size: 40px;
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
            width: 350px;
            border-radius: 20px;
            /* background-color: white; */
            height: 180px;
            z-index: 5;
        }

        body {

            font-family: "Montserrat", sans-serif;
        }

        .card-title {
            color: rgb(1, 196, 1);
        }


        .slider {
            height: 245px;
            top: -100px;
            background: rgb(190, 190, 190);
        }

        .slide {
            margin-right: 120px;
            padding: 30px;
        }

        .main-container3 {
            background: url('../img/businessalliance/alliance.jpg') no-repeat center center/cover;

            width: 100%;
            /* height: 100%; */
        }

        #heading {
            text-align: center;
            /* background-color: black; */

            color: white;
            /* padding: 150px; */
        }

        #heading h1 {
            font-size: 100px;

        }


        #option {
            display: flex;
            font-size: 15px;
            list-style: none;
            text-align: justify;
        }

        .main-container::before {
            content: "";
            background: url(assets/img/businessalliance/alliance.jpg) no-repeat center center/cover;
            position: absolute;
            /* bottom: 0; */
            /* left: 0; */
            width: 100%;
            height: 38.7rem;
            opacity: 0.4;
            top: 0;
            left: 0;
            z-index: 1;
        }


        .main-container::before {
            content: "";
            background-color: rgb(47, 44, 63);
            position: absolute;
            /* bottom: 0; */
            /* left:0; */
            width: 100%;
            height: ;

            opacity: 0.4;
            top: 0;
            left: 0;
            z-index: 1;
        }


        @media (max-width: 768px) {
            .main-container::before {
                content: "";
                background: url(assets/img/businessalliance/alliance.jpg) no-repeat center center/cover;
                position: absolute;
                /* bottom: 0; */
                /* left: 0; */
                width: 100%;
                height: 41.7rem;
                opacity: 0.4;
                top: 0;
                left: 0;
                z-index: 1;
            }

            .card-body h5 {
                font-size: 1.5rem;
            }

            #option {
                display: inline;
            }


        }
    </style>
    <link rel="stylesheet" href="assets/css/fontset14.css">
</head>

<body>
    <?php
    include('header.html');
    ?>
    <div class="main-container">
        <div id="heading">
            <br><br><br><br><br><br><br>
            <h1 style="color: rgb(1, 196, 1);font-weight: bold;"></h1><br><br><br><br>
            <?php
            include('logoslider.html');
            ?>
            <!-- <a href="#allcards1"><img src="assets/img/downarrow2.gif" alt=""></a> -->
            <h1 style="color: rgb(1, 196, 1);font-weight: bold;"></h1><br><br>
        </div>
        <h1 style="color: rgb(1, 196, 1);font-weight: bold;text-align: center;">Our Business Alliance</h1>
    </div>
    <!--card section-->

    <div class="cardcontainer1" id="allcards1">

        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">JENNY CRAIG, INC.</h5>
                <p class="card-text class=" font14"" style="text-align: justify;height: auto">Jenny Craig, Inc., often
                    known simply as
                    Jenny Craig, is an American weight loss, weight management and nutrition company. The company has
                    more than 700 weight management centers in Australia, the United States, Canada and New Zealand.
                    Jenny Craig program combines individual weight management counseling with a menu of frozen meals and
                    other foods, which are distributed through its centers or shipped directly to clients.

                    Jenny Craig, Inc. was founded in 1983 by Jenny Craig and her husband, Sidney Craig. The program was
                    started in Melbourne, Australia and began operations in the United States in 1985. The company
                    expanded rapidly after entering the U.S., opening 46 locations by 1987 as well as 114 in foreign
                    countries. In 1991, the company underwent an IPO, generating $73.5 million in funding.

                </p>
                <p style="text-align: center; " class="font15 font14">Charthill got a license from USA to Australia and
                    Singapore as well. </p>
            </div>
        </div>

        <div class="card bg-light mb-3" style="" id="">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/epa.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">ERA (Expense Reduction Analysis)</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">Established in 1992 ERA is a
                    specialized
                    cost and supplier management consultancy focused on delivering improved business performance to
                    clients of all sizes. It is one of the leading specialists for cost management achieved by
                    optimizing your business costs and finding innovative solutions to meet your company’s needs. ERA’S
                    collaborative approach provides full transparency, ensuring you retain control of all key aspects of
                    the engagement. </p>
                <ul id="option">

                    <li class="font14"><span style="text-align: center;">Analysis</span><br>ERA prepares a report on
                        your current
                        status quo in the selected cost categories where you think savings can be achieved</li>

                    <li class="font14"><span style="text-align: center;">Research</span><br>ERA present you with an
                        options report,
                        based on our expertise and long-standing experience in the supplier market</li>

                    <li class="font14"><span style="text-align: center;">Selection & Implementation</span><br>Once the
                        company have
                        chosen an option, ERA facilitate implementation of the savings process in your company.</li>

                    <li class="font14"><span style="text-align: center;">Monitoring</span><br>Over the next few months,
                        ERA monitor
                        the
                        savings achieved in the performance reports.</li>

                </ul>
                <div class="">

                    <p style="" class="font14 font15">
                        ERA was successfully franchised via Charthill consultants in Australia from United States.
                    </p>>
                </div>
            </div>
        </div>

        <div class="card bg-light mb-3" style="" id="">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/spacecube.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">SPACECUBE</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">SPACECUBE provides architects, designers
                    and creators a highly resolved solution for any temporary or transitional infrastructure projects
                    or developments. Designed, engineered and manufactured in Australia since 2012, whether it’s for
                    events, advertising, retail or commercial applications there is growing demand for premium,
                    temporary infrastructure solutions that can meet increased expectations from clients and adapt to
                    various environment and uses. Our methods are transparent and we fully explain them to you in
                    layman’s terms so that you can be a part of the process. After all, it’s your business. You should
                    be in control.
                    <br>
                    <center style="" class="font14 font15">Space cube was franchised by Charthill</center>
                </p>
            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/cla.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">CLA SOCKETS</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">An Australian owned company established in
                    1999, on the Northern Beaches of Sydney, CLA socket is a leading provider of innovative,
                    high-quality energy saving lamps, trendy lighting fixtures and related products to all commercial,
                    industrial, residential and utility markets. Since its inception, CLA has continuously evolved to
                    keep abreast of the current technology, especially in LED lighting, so that we can offer the
                    Australian market the latest in national and international lighting trends.

                </p>
                <p style="text-align: center;" class="font14 font15">CLA SOCKET was licensed by Charthill consultants</p>
            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/solar.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">SOLAR EDWARD</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">Edwards Solar Plus is a local company with
                    a vast knowledge of both solar grid connected and standalone systems within the renewable energy
                    industry.

                    We pride ourselves on the highest standard of workmanship and professional approach to make your
                    experience with us as easy as possible.

                    We expanded our service from our sister company Edwards Electrical which opened its doors in 2008
                    with the aim to provide a friendly, straight forward service with no hidden surprises. Over the last
                    few years we have gained a big following from our esteemed customers

                </p>
                <p></p>
                <p style="text-align: center;" class="font14 font15"> Licensed by Charthill consultants in Australia.</p>
            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/gymboree.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">GYMBOREE PLAY & MUSIC</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">The specially designed Gymboree Play &
                    Music classes incorporate new technology with classic learning techniques to engage young minds.
                    Choose from our wide range of early childhood classes for ages 0-5 years. It is the global leader
                    for developmental play, music and art classes for parents and children up to 5 years of age. Based
                    on a blend of early childhood development theories complemented by more than 40 years of hands-on
                    experience, Gymboree Play & Music classes are available through more than 700 franchised and
                    company-operated centers in the United States and over 40 other countries.

            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/darma.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">DERMSHIELD</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">Dermshield was first formulated in 1991.
                    Benchmark Skincare, previously known as Benchmark Technologies, was formed in 1994 and has been
                    solving skincare concerns worldwide ever since. Derma Shield prevents irritant contact dermatitis by
                    providing an invisible, non-greasy and non-toxic barrier that protects all skin areas.
                    <br>
                <p style="text-align: center;" class="font14 font15">Dermshield was licensed by Charthill consultants</p>

            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/underwater.jpg" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">UTC(UNDER WATER TECHNOLOGY)</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">Underwater Technology is a scientific
                    journal covering research on underwater technology, ocean science, and offshore engineering. It is
                    the official journal of the Society for Underwater Technology. It was established in 1975 and is
                    published three times a year in hard copy and electronic format.


                    <br>
                <p style="text-align: center;" class="font14 font15">UTC was licensed by chart hill consultants</p>

            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/ironing machine.jpg" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">AIM (AUTOMATIC IRONING MACHINE)</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">Automatic Ironing Machine is a design that
                    uses an innovative framework and motorized mechanisms to effectively iron various clothes by
                    minimizing the difficulties in the task of ironing.


                    <br>
                <p style="text-align: center;" class="font14 font15">Licensed by Charthill consultants</p>

            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:0;">
                <img src="assets/img/businessalliance/play.jpg" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">PLAYFUL PARENTING CHILD EDUCATION</h5>
                <p class="card-text font14" style="text-align: justify;height: auto">Play between a parent and child up to the
                    age of three years can be quite literally life changing for both parties. A long-lasting bond
                    between parent and child can be established through playful interactions, laying the foundation for
                    a positive and healthy relationship that can grow throughout childhood.

            </div>
        </div>

    </div>

    <!-- card section end -->

    <!-- footer -->
    <?php
    include('footer.html');
    ?>
    <!-- footer end -->
</body>

</html>