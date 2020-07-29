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
      background: url('assets/img/mainhome.jpg') no-repeat center center /cover;
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
      /* background: red; */
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


    body {

      font-family: "Montserrat", sans-serif;
    }



    .video-item {
      margin: 20px;
      border: 10px white solid;
      width: 30rem;
      height: 20rem;
    }

    .item img {
      width: 400px;
      margin-left: 100px;
    }

    .pop-card1 {
      color: white;
      padding-left: 20px;
      margin-left: 30px;
      margin-right: 80px;
      font-size: 16px
    }

    .pop-card2 {
      padding-left: 20px;
      margin-left: 30px;
      margin-right: 80px;
      font-size: 16px
    }



    /* responsive */
    @media (max-width: 768px) {
      body {
        background-color: red;

      }

      #header-text {
        font-size: 2rem;
      }

      .top-container1 h1 {
        font-size: 80px;
        margin-top: 110px;
        margin-left: 100px;
        margin-right: 450px;
        margin-bottom: 106px;
        font-weight: bold;
      }

      .card-item {
        top: -70px;
        position: relative;
        width: 100%;
        height: 25rem;
        /* background: red; */
      }

      .video-item {
        margin: 20px;
        border: 10px white solid;
        width: 100%;
        height: 20rem;
      }

      .item h2 {
        font-size: 1.3rem;
      }

      .item h4 {
        font-size: 1rem;
      }

      .item img {
        width: 100%;
        margin: 0;

      }

      .pop-card1,
      .pop-card2 {
        font-size: 14px
      }


    }
  </style>
</head>

<body style="background-color: rgb(134, 116, 116);">
  <?php
  include('homecover.html');
  include('chatbotpopup.html');
  // include('header.html');
  ?>
  <?php
  // include('videopopup.html');
  include('Social_Media.html');
  ?>

  <?php
  include('go to top.html');
  ?>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo1.png" alt="" style="border-radius:20px; opacity:90%;"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!-- <li class="menu-active"><a href="#intro">Home</a></li> -->
          <li class="menu-has-children"><a href="#discover">Discover Charthill</a>
            <ul>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="businessalliance.php">Our Business Alliance</a></li>
              <li><a href="social-impact.php">Social Impact</a></li>
              <li><a href="blog.php">Our Blog</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#allservices">Services</a>
            <ul>
              <li><a href="licensing.php">Licensing</a></li>
              <li><a href="Franchising.php">Franchising</a></li>
              <li><a href="IPO Advisory.php">IPO Advisory</a></li>
              <li><a href="Business migration services.php">Business Migration Services</a></li>
              <li><a href="Sales & Marketing.php">Sales & Marketing</a></li>
            </ul>

          </li>
          <li class="menu-has-children"><a href="elitepool_covers.php">Elitepool Cover</a>
            <ul>
              <li class="menu-has-children"><a href="#">Solar Bubble Covers</a>
                <ul>
                  <li><a href="triplecellsolar.php">Triple Cell Solar Blankets</a></li>
                  <li><a href="super_bubble_solar_blankets.php">Super Bubble Solar Blankets</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a href="#">Roller Systems</a>
                <ul>
                  <li><a href="Elite Easy Rollers.php"> Easy Rollers</a></li>
                  <li><a href="Hideaway In-ground Rollers.php"> Hideway In-Ground Roller</a></li>
                  <li><a href="Semi-Automatic Roller Systems.php"> Semi-Automatic Roller Systems</a></li>
                  <li><a href="Bench Seat Roller Systems.php"> Bench Seat Roller Systems</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a href="#">Security & Debris Covers</a>
                <ul>
                  <li><a href="Elite Pool Protector.php"> Elite Pool Protector</a></li>
                  <li><a href="Debris & Security Mesh Covers.php">Debris & Security Mesh Covers</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a href="">Fully Automatic Covers</a>
                <ul>
                  <li><a href="Automatic Slat Covers.php"> Automatic Slat Covers</a></li>
                  <li><a href="Automatic Flexible Covers.php">Automatic Flexible Covers</a></li>
                </ul>

              </li>
              <li><a href="Commercial Range.php">Commercial Range</a></li>
              <li><a href="Thermal Shield.php">Thermal Shield</a></li>
            </ul>
          </li>
          <li><a href="our_team.php">Our Team</a>
          </li>
          <li class="menu-has-children"><a href="businessopportunities.php">Business Opportunities</a>
            <ul>
              <li><a href="businessopportunities.php">Invest with Us</a></li>
            </ul>
          </li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- header import -->


  <div class="top-container1">
    <h1 id="header-text">
      Start Your <span class="span-green">hising</span> & <span class="span-green">Licensing</span> <br> Journey
      with Us
    </h1>


  </div>
  <div class="top-cards">
    <div class="card-item" style="background: rgb(37, 155, 37);">
      <h1 style="font-weight: bold;padding: 5px;margin-top: 20px;margin-left: 40px;color: white;">Franchising</h1>
      <p style="" class="pop-card1">Franchising is a
        business format, where one party (the franchiser) grants another party (the franchisee) the right to use its
        trademark or trade-name as well as certain business systems and processes to produce and market the goods or
        services according to certain specifications. </p>
      <a href="Franchising.php"><button type="button" class="btn btn-light" style="margin-left: 60px;"><span>Read
            More</span></button></a>
    </div>


    <div class="card-item" style="background: rgb(0, 18, 177);color: white">
      <h1 style="font-weight: bold;padding: 5px;margin-top: 20px;margin-left: 40px;">Licensing</h1>
      <p style="" class="pop-card2">Licensing is a business format,
        wherein a company authorizes another company by issuing a license to access its intellectual property rights,
        i.e. manufacturing process, brand name, copyright, trademark, patent, technology, trade secret, etc. for
        adequate consideration and under specified conditions.
      </p>
      <a href="licensing.php"><button type="button" class="btn btn-success" style="margin-left: 60px;"><span>Read
            More</span></button></a>
    </div>
  </div>


  <!-- section start -->

  <!-- section end -->



  <!-- section start -->
  <div class="ourclientscarousel" style="background: rgb(211, 211, 211);color: black;">
    <h1 style="text-align: center;padding:40px;font-weight: bold;" class="span-green">Our Success Stories</h1>
    <?php
    include('logoslider.html');
    ?>
  </div>
  <div class="vide-container" style="display: flex;flex-wrap:wrap;justify-content:center;background: rgb(6, 124, 1);">
    <div class="video-item" style="margin:20px;border: 10px white solid;">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/S0y7-Y5uHlE" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video-item" style="margin:20px;border: 10px white solid;">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KCObP7-5dwE" frameborder="0"
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
      <img src="assets/img/america map.png" alt="">
    </div>

    <div class="item">
      <h2 style="margin-top: 30px;text-align: center;font-weight: bold;">Charthill in Australia</h2>
      <h4 style="text-align: center;">
        22/16 Kings Park Road,<br>
        West Perth, WA 6005<br>
        AUSTRALIA <br>
      </h4>
      <br>
      <img src="assets/img/australia map..png" alt="">

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