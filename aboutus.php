<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/fontset14.css">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    body {

      font-family: "Montserrat", sans-serif;

    }

    .span-green {
      color: rgb(7, 206, 7);
    }

    .modal-content {
      width: 95%;
    }

    .card img {
      height: 229px;
    }

    .carousel-content {
      position: relative;
      bottom: 20px;
    }



    /* main image and card-container start*/
    .top-container1::before {
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
      background: url('assets/img/aboutusslidder/aboutusback.jpg') no-repeat center center /cover;
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

    .slider-content {
      padding-left: 100px;
      padding-right: 100px;
      padding-top: 50px;
      padding-bottom: 50px;
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
      .top-container1 h1 {
        font-size: 4rem;
        margin-top: 251px;
        text-align: center;
      }

      .slider-content {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 30px;
        padding-bottom: 30px;
      }

      .card-item {
        top: -70px;
        position: relative;
        width: 100%;
        height: auto;
        /* background: red; */
      }

      .about-us {
        background-color: rgb(243, 238, 231);
        padding: 40px;
        padding-left: 50px;
        padding-right: 50px;
      }

      .pop-card1,
      .pop-card2 {
        font-size: 14px
      }
      body{
        font-size: 14px;
      }

    }

    /* main image and card-container end */
  </style>
</head>

<body style="font-family: Montserrat, sans-serif;background-color: black;">

  <?php
  // include('header.html');
  include('chatbotpopup.html');
  ?>
  <?php

  include('pdfviewer.html');
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


  <div class="top-container1">
    <h1>
      <br>
      <br>
      <span class="span-green"><strong>Discover Charthill</strong></span>
      <br>
      <br>
    </h1>
  </div>
  <div class="top-cards">
    <div class="card-item" style="background: rgb(37, 155, 37);color: white;">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider-content">
              <h3>
                INNOVATIVE MIND & QUICK SOLUTIONS
              </h3><br>

              <p class="font14">We at Charthill deliver integrated and quick solutions, which complement our capabilities with the
                ecosystem of the world’s top innovators to gain better, faster and more successful results for the
                customers’ entire satisfaction and convenience. We are committed to providing high-quality services
                and products. We meet the mutually agreed-to requirements the first time and strive for continuous
                improvement of our work processes.</p>
            </div>

          </div>

          <div class="carousel-item">
            <div class="slider-content">
              <h3>
                UNIQUE WORKCULTURE
              </h3><br>

              <p class="font14">We take our hands on, collaborative approach to all our engagements and focus on developing solutions
                alongside our clients. It all leads to strategic client partnership that focus on long-term healthy
                relations between our clients and us and lead to success of whole work culture that is considered to
                be the back bone of every progressive firm. We hold our Core Values close to our hearts. They are the
                foundation of who we are and how we conduct ourselves. They guide us and act as our
                moral compass.</p>
            </div>

          </div>
          <div class="carousel-item">
            <div class="slider-content">
              <h3>
                BUSINESS STRATEGY
              </h3><br>

              <p class="font14"> We lay emphasis on developing a business strategy through examining current marketing plans by
                providing the unique, valuable and intelligent market research. To meet our expectations, we have a
                wide
                range of market research techniques to use. The world of Internet marketing changes in the blink of an
                eye. There are always new traffic methods, changes to search engine algorithms, and cutting edge
                technology and trends. Yesterday’s methods no longer get results. We stay current on these changing
                trends online, so that you get the return on investments.</p>
            </div>

          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>



  <!-- a brief on us section start -->

  <div class="about-us" style="text-align: justify;">
    <h1 style="text-align: center;" id="aboutusection">A brief on Us</h1>
    <p class="about-intro" style="text-align: center;font-weight: bold;margin-top: 20px;" ><i class="font14">Individual commitment to a
        group effort–that is what makes a
        team work, a company work, a
        society work, a
        civilization work.
        Vince Lombardi</i></p><br>
    <br>
    <!-- <h3  style="text-align: center;"><b>Welcome to Charthill Consultants!</b></h3><br> -->

    <p style="text-align: center;" class="font14">Client satisfaction: Our watchword for sustainable growth</p>

    <p class="font14">Charthill Consultants are committed to delivering the highest level of client satisfaction in the consulting
      market. At Charthill Consultants we try our utmost to provide our clients the best hidden opportunities they may
      never have thought about and heard about. To support and achieve this goal, the firm has implemented a quality
      policy that is systematically applied to all its assignments.
    </p>
    <!-- Button trigger modal -->
    <div class="" style="width: 100px;display:block;margin:auto;">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"
        onclick="OpenPdf6()">
        Read More
      </button>
    </div>
    </p>
  </div>
  <!-- a brief on us section end -->

  <!-- card section start -->
  <div class="card-container-aboutus" id="">
    <div id="servicebox">
      <h1 align="center" style="padding-top: 1rem; color: rgb(7, 206, 7);font-weight: bold;">Our Strengths</h1>

      <div class="cardcollection">
        <div class="card" style="width: 22rem;">
          <img class="card-img-top" src="assets/img/aboutuscards/Customer_Commit.jpg" alt="Card image cap">
          <div class="card-body">

            <h4 class="text-center">Customer Commitment</h4>
            <p class="card-text font14">We develop relationships that make a positive difference in our customers’ lives.</p>
          </div>
        </div>

        <div class="card" style="width: 22rem;">
          <img class="card-img-top" src="assets/img/aboutuscards/teamwork.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="text-center">Teamwork</h4>
            <p class="card-text text-center font14">We work together, across boundaries, to meet the needs of our customers and
              to help our Company win.</p>
          </div>
        </div>

        <div class="card" style="width: 22rem;">
          <img class="card-img-top" src="assets/img/aboutuscards/respect.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="text-center">Respect For People</h4>
            <p class="card-text text-center font14">We value our people, encourage their development and reward their
              performance.</p>
          </div>
        </div>

        <div class="card" style="width: 22rem;">
          <img class="card-img-top" src="assets/img/aboutuscards/win.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="text-center">A Will to Win</h4>
            <p class="card-text text-center font14">We exhibit a strong will to win in the marketplace and in every aspect of
              our business.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- card section end -->

  <div class="carousel-item">
    <img src="assets/img/testimonial-1.jpg" alt="...">
    <img src="assets/img/testimonial-2.jpg" alt="...">
    <img src="assets/img/testimonial-3.jpg" alt="...">
    <img src="assets/img/testimonial-4.jpg" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Hello Sarbjot</h5>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quibusdam ex temporibus quidem
        necessitatibus aliquid labore impedit, repellendus exercitationem aliquam!</p>
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