<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Charthill Consulting</title>
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet">

  <!-- V CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@500&family=Metal+Mania&display=swap"
    rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <style>
    .top-container1 {
      margin-top: 100px;
      /* background-color: black; */
      width: 100%;

      color: white;
      /* height: 1500px; */
      /* background: red; */
    }

    .top-container1::before {
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
      background: url('assets/img/back.jpg') center center /cover;
      z-index: -1;
      opacity: .5;
    }

    .top-container1 h1 {
      font-size: 80px;
      margin-top: 110px;
      margin-left: 100px;
      margin-right: 450px;
      margin-bottom: 140px;
      font-weight: bold;

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
      width: 500px;
      height: 350px;
      background: red;
    }



    /* button animation */

    button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    button:hover span {
      padding-right: 25px;
    }

    button:hover span:after {
      opacity: 1;
      right: 0;
    }

    .slider .slide img {
      height: 200px;
      width: 350px;
      border-radius: 10px;
    }

    .slider .slide {
      margin-top: 20px;
      margin-left: 70px;
      margin-right: 70px;


    }

    .slider {
      height: 200px;
    }
  </style>
</head>

<body>

  <?php
  // include('homecover.html');
  ?>
  <?php

  include('chatbotpopup.html');
  ?>
  <?php
  include('header.html');
  ?>
  <!-- header import -->

  <div class="top-container1">
    <h1>
      Start Your <span class="span-green">Franchising</span> & <span class="span-green">Licensing</span> <br> Journey with Us
    </h1>

  </div>
  </div>
  <div class="top-cards">
    <div class="card-item" style="background: rgb(37, 155, 37);">
      <h1 style="font-weight: bold;color:white;padding: 20px;margin-top: 40px;margin-left: 40px;">Franchising</h1>
      <p style="color:white;padding-left: 20px;margin-left: 40px;margin-right: 100px;">It‘s more than just systems: a
        franchise without a system is like a car without wheels – it’s just not going anywhere.</p>
      <a href="Franchising.php"><button type="button" class="btn btn-light" style="margin-left: 60px;"><span>Read More</span></button></a>
    </div>


    <div class="card-item" style="background: rgb(214, 214, 214);color: rgb(56, 56, 56);">
      <h1 style="font-weight: bold;;padding: 20px;margin-top: 40px;margin-left: 40px;">Licensing</h1>
      <p style="padding-left: 20px;margin-left: 40px;margin-right: 100px;">If you are an inventor, Charthill can help
        you obtain a patent, trademark and copyright.
      </p>
      <a href="licensing.php"><button type="button" class="btn btn-success" style="margin-left: 60px;"><span>Read More</span></button></a>
    </div>
  </div>


  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">

        </ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/aboutusslidder/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="newfont">Discover Charthill</h2>
                <h4 style="color: white;">INNOVATIVE MIND & QUICK SOLUTIONS</h4 style="color: white;">
                <p>We at Charthill deliver integrated and quick solutions, which complement our capabilities with the
                  ecosystem of the world’s top innovators to gain better, faster and more successful results for the
                  customers’ entire satisfaction and convenience. We are committed to providing high-quality services
                  and products. We meet the mutually agreed-to requirements the first time and strive for continuous
                  improvement of our work processes.</p>
                <a href="aboutus.php"><button type="button" class="btn btn-outline-light">More About Us </button></a>
                <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/aboutusslidder/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="newfont">Discover Charthill</h2>
                <h4 style="color: rgb(255, 255, 255);">UNIQUE WORKCULTURE</h4 style="color: white;">

                <p>We take our hands on, collaborative approach to all our engagements and focus on developing solutions
                  alongside our clients. it all leads to strategic client partnership that focus on long-term healthy
                  relations between our clients and us and lead to success of whole work culture that is considered to
                  be the back bone of every progressive firm. We hold our Core Values close to our hearts. They are the
                  foundation of who we are and how we conduct ourselves. They play out in all of our interactions with
                  customers, our workplaces and with our other important stakeholders. They guide us and act as our
                  moral compass. </p>
                <a href="aboutus.php"><button type="button" class="btn btn-outline-light">More About Us</button></a>
                <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/aboutusslidder/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="newfont">Discover Charthill</h2>
                <h4 style="color: white;">MARKET RESEARCH</h4 style="color: white;">


                <p>We lay emphasis on developing a business strategy through examining current marketing plans,
                  providing unique valuable and intelligent market research, to meet our expectations, we have a wide
                  range of market research techniques to use. The world of Internet marketing changes in the blink of an
                  eye. There are always new traffic methods, changes to search engine algorithms, and cutting edge
                  technology and trends. Yesterday’s methods no longer get results. We stay current on these changing
                  trends online, so that you get the return on investments.
                </p>
                <a href="aboutus.php"><button type="button" class="btn btn-outline-light">More About Us</button></a>
                <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/aboutusslidder/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="newfont">Discover Charthill</h2>
                <h4 style="color: white;">ROBUST BUSINESS PLANNING</h4 style="color: white;">


                <p>Providing a robust business plan and securing funding if necessary, Charthill takes a pragmatic
                  approach & independent look at business structures, financial performance and marketing activity and
                  providing appropriate solutions to improve the performance and efficiency of the entire programming of
                  the business plan. </p>
                <a href="aboutus.php"><button type="button" class="btn btn-outline-light">More About Us</button></a>


                <!-- <span class="glyphicon glyphicon-search" aria-hidden="true"></span> -->
                <!-- <a href="aboutus.php"><button type="button" class="glyphicon glyphicon-circle-arrow-down">More About Us</button></a> -->
                <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
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



  <!-- section start -->
  <div class="ourclientscarousel" style="background: rgb(211, 211, 211);color: black;">
    <h1 style="text-align: center;padding:40px;font-weight: bold;">Our Satisfied Clients</h1>
    <?php 
            include('logoslider.html');
    ?>
  </div>
  <div class="vide-container" style="display: flex;flex-wrap:wrap;justify-content:center;background: rgb(6, 124, 1);">
    <div class="video-item" style="margin:20px;border: 10px white solid;">
      <iframe width="500px" height="400px" src="https://www.youtube.com/embed/S0y7-Y5uHlE" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video-item" style="margin:20px;border: 10px white solid;">
      <iframe width="500px" height="400px" src="https://www.youtube.com/embed/KCObP7-5dwE" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
  </div>
  <!-- sectin end -->

  <div class="map-section"
    style="display: flex;flex-wrap:wrap;justify-content:center;background: rgb(167, 167, 167);color: white;">
    <div class="item">
      <h2 style="margin-top: 30px;text-align: center;font-weight: bold;">Charthill in Unites States</h2>
      <h4 style="text-align: center;">500 North Rainbow Blvd,<br>
        Suite 300, LAS VEGAS<br>
        Nevada, 89107<br>
        UNITED STATES</h4>
      <br>
      <img src="assets/img/america map.png" alt="" style="width: 400px;margin-right: 100px;">
    </div>

    <div class="item">
      <h2 style="margin-top: 30px;text-align: center;font-weight: bold;">Charthill in Australia</h2>
      <h4 style="text-align: center;">
        22/16 Kings Park Road,<br>
        West Perth, WA 6005<br>
        AUSTRALIA <br>
      </h4>
      <br>
      <img src="assets/img/australia map..png" alt="" style="width: 400px;margin-left: 100px;">

    </div>
  </div>


  <!-- footer start -->

  <?php

  include('footer.html');

  ?>

  <!-- footer end -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>