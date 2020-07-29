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
    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

    <style>
        div.card {
            width: 85vw;
            box-shadow: 0px 0px 12px 3px rgba(0, 0, 0, .6), 0 0px 10px 0 rgba(255, 255, 255, .5);
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

        .card-header h5,
        .card-title {
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
            border-radius: 10px;
        }

        .card-body img {
            box-shadow: 0 0 7px 7px rgba(0, 0, 0, .5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }


        #image-1 {
            display: inline-block;
            float: right;
            width: 40%;
            border-radius: 20px;
            border: solid white 5px;
        }

        #image-2 {
            display: inline-block;
            float: left;
            width: 40%;
            border-radius: 20px;
            margin: 10px;
            display: inline-block;
            border: solid white 5px;
        }

        #image-3 {
            display: inline-block;
            float: right;
            width: 40%;
            border-radius: 20px;
            margin: 10px;
            display: inline-block;
            border: solid white 5px;
        }


        #card-item11 {
            text-align: justify;
            height: auto;
            width: 50%;
            margin: 10px;
            display: inline-block;
            color: white;
        }

        #section-1 {
            text-align: justify;
            height: auto;
            width: 56%;
            margin: 10px;
            float: right;
            display: inline;
            color: white;
        }

        #section-2 {
            text-align: justify;
            height: auto;
            width: 55%;
            margin: 10px;
            display: inline-block;
            color: white;
        }


        @media (max-width:768px) {

            #image-1,
            #image-2,
            #image-3 {
                float: none;
                display: block;
                width: 100%
            }

            #section-1,
            #section-2,
            #card-item11 {
                width: 100%;
            }


            .card-header h5,
            .card-title {
                font-size: 1.5rem;
            }

            #intro .carousel-item {
                width: 100%;
                height: auto;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        }
    </style>
    <link rel="stylesheet" href="assets/css/fontset14.css">
</head>

<body>
    <?php
    include('header.html');
    ?>

    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">



                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="assets/img/social-impact_back2.jpg"
                                style="width: 100%;" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <!-- <h2>Discover Charthill Consulting</h2>
                                <p>Learn how Charthill Consultant can help you to with amazing business opportunities. Let's make a
                                    difference together.</p> -->
                                <div class="card text-center" style="width: 70vw;top:5vh;">
                                    <div class="card-header" style="padding: 0;">
                                        <img src="assets/img/SocialImpact/solar-cell.jpg" alt=""
                                            style="border-top-right-radius:15px;border-top-right-radius:15px;width: 100%;height: 350px;">
                                    </div>
                                    <div class="card-body" style="background: linear-gradient(to right, #00c6ff, #0072ff);border-bottom-left-radius: 25px;border-bottom-right-radius:25px;color: white;
                                    ">
                                        <h5 class="card-title" style="">Social Impact</h5>
                                        <h7 style="text-align: justify;" class="font13"> Charthill desires to be the
                                            torch bearer of
                                            promoting the use of renewable energy sources, thereby helping to sustain
                                            the environment. Efficient, prompt, and timely action defines the way for
                                            Charthill to conduct its business and goes forward in its endeavor to
                                            achieve growth and create value for all stakeholders. Sustainable
                                            development is the creed that underpins our bespoke initiatives to protect
                                            the environment, strengthen communities and propel responsible growth.
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </h7>
                                    </div>
                                    <!-- <div class="card-footer text-muted">
                                        2 days ago
                                    </div> -->
                                </div>
                                <!-- <a href="aboutus.php"><button type="button" class="btn btn-outline-light">More About Us</button></a> -->
                                <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="assets/img/social-impact_back.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <!-- <h2>Discover Charthill Consulting</h2>
                                <p>Learn how Charthill Consultant can help you to with amazing business opportunities. Let's make a
                                    difference together.</p> -->
                                <div class="card text-center" style="width: 70vw;top:5vh;">
                                    <div class="card-header" style="padding: 0;">
                                        <img src="assets/img/SocialImpact/wind-mill.jpg" alt=""
                                            style="border-radius:15px;width: 100%;height: 350px;">
                                    </div>
                                    <div class="card-body"
                                        style="  background: linear-gradient(to right, #ffb75e, #ed8f03);;color:rgb(255, 255, 255);border-bottom-left-radius:25px;border-bottom-right-radius: 25px;">
                                        <h5 class="card-title" style=" ">Social Impact</h5>
                                        <h7 style="text-align: justify;" class="font13"> In the past three decades,
                                            research and
                                            development in green energy has exploded, yielding hundreds of promising new
                                            technologies that can reduce our dependence on coal, oil, and natural gas.
                                            But what is green energy, and what makes it a better option than fossil
                                            fuels are renewable energy sources. Also they have a much smaller impact on
                                            the environment than fossil fuels, which produce pollutants such as
                                            greenhouse gases as a by-product, contributing to climate change.

                                        </h7>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>


                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!--card section-->
    <div class="cardcontainer1" id="allcards1" style="background: #4e54c8;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #8f94fb, #4e54c8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
   ">

        <div class="card bg-light mb-3" style="" id="ba1">
            <div class="card-header" style="padding:10px;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <h5 class="card-title">ELITE POOL COVERS </h5>
            </div>
            <div class="card-body" style="background: #00b09b;
            border-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #96c93d, #00b09b);opacity: 1;">
                <p class="card-text font14" id="card-item11">
                    ELITE POOL COVER specializes in the design, development, fabrication, and supply of triple cell
                    solar blanket. Elite pool cover got specialty in innovative technologies and products .Ultra New
                    Award Winning Triple Cell® Solar Pool Blanket – a world's first
                    <br><br>
                    Here’s how it works!
                    <br>
                    Elite Triple Cell® is equal to 3 standard round bubbles. The more contact with the water means
                    better heating, better insulation and the pool stays warmer for longer that’s Elite Triple Cell®

                    With Traditional Bubble, performance is reduced due to the shaped “dead zone” between the bubbles
                    not being in contact with the water

                    Elite is proud to lead the world in pool blanket technology, made in Australia and exported to the
                    world

                </p>
                <img src="assets/img/SocialImpact/poolcover.jpg" alt="" id="image-1">
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>

        <div class="card bg-light mb-3" style="" id="">
            <div class="card-header" style="padding:10px;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                            style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <h5 class="card-title">ELITE TRIPLE CELL® World Leading Technology </h5>
            </div>
            <div class="card-body" style="background: #fc4a1a;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #f7b733, #fc4a1a);border-radius: 25px; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            
            ">
                <img src="assets/img/SocialImpact/triplecell.jpg" alt="" style="" id="image-2">
                <section id="section-1">

                    <p style="" class="font15 font14">Performance – large purpose designed solar cells provide greater heat
                        generation and insulation designed and manufactured in Australia, proven in the world’s harshest
                        conditions easier to operate, easier to wind, easier on the eye 610 micron</p>
                    <ul style="display: flex;flex-wrap:wrap;" class="listoption font14 font15">

                        <li>
                            The Elite Triple Cell® is a solar cell that acts as a collector of energy. This energy is
                            transformed to heat the water better. Elite Triple Cell® provides better all-round
                            insulating
                            performance due to its greater still
                            “air zone”. Its unique cell design also offers more protection from chlorine attack and
                            harmful
                            UV rays.

                        </li>
                        <li>

                            Elite Triple Cell® is thicker up to 60% thicker on the base. The manufacturing process of
                            Triple
                            Cell® ensures a more uniform thickness at the side, top and base of the cell unlike others,
                            where
                            the thickness can be inconsistent with less life expectancy.
                        </li>
                        <li>

                            Elite Triple Cell® is a world’s first and it’s only available from Elite!
                        </li>
                        <li>

                            Elite Triple Cell® will have a long happy life.
                        </li>
                        <li>

                            Elite Triple Cell® lays flatter on the pool surface and rolls up easier over header courses
                            plus
                            automatic cleaners work better.
                        </li>

                    </ul>

                </section>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                    Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="" id="">
            <div class="card-header" style="padding:10px;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <h5 class="card-title">SOLAR EDWARD</h5>
            </div>
            <div class="card-body font14 font15" style="text-align: justify; background: #7F00FF;  
            background: -webkit-linear-gradient(to right, #E100FF, #7F00FF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #96c93d, #00b09b);;border-radius: 25px;color: white; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <section id="section-2" class="font14">
                    Solar Edward knows very well that how quickly technology can change, our goal is to keep up with the
                    latest trends and advances in all technological breakthrough that is why solar Edward does not shy
                    away from any challenge, Edward solar has managed to align ourselves with some great organizations
                    who share the same values and level of high quality service as we do.
                    <br>
                    This has opened up many doors into the industry and allows us to focus on the quality of the
                    installation with full backing of electrical and mechanical engineering aspects of the project.
                    <br>

                    <ul style="display: flex;flex-wrap:wrap;" class="listoption font14">
                        <li>
                            <center><b>Reduces your electricity bills</b></center><br>
                            <p>The sunlight is free and surplus power your system produces, will be sold back to the
                                grid,
                                providing the owner with no power bills at all and sometimes granting you with extra
                                income
                                and a return on your initial cost.
                            </p>
                        </li>
                        <li>
                            <center><b>Reduced Green House Gases</b></center><br>
                            <p>According to a research approximately 1KG of C02 emissions are produced for every unit
                                (kw/hr) of electricity that you use from a conventional power station. The solar power
                                system can eliminate these gases.
                            </p>
                        </li>
                        <li>
                            <center><b>Electricity price rises</b></center><br>
                            <p>This fact must be accepted that the cost of electricity is on the increase. Take control
                                of
                                your own consumption and control your own electricity bills.
                            </p>
                        </li>


                    </ul>
                </section>
                <img src="assets/img/SocialImpact/solaredwards.jpg" alt="" id="image-3">
                Solar Edwards Adelaide’s aim is to make solar energy understandable and accessible to everyone. We
                are committed to helping save our environment. Solar Edwards Adelaide is proud to give customer
                service the way it should be, with professional, prompt and personalized service

                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                    Singapore as well. </p> -->
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