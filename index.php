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
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@500&family=Metal+Mania&display=swap" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>
 <?php 
 include('homecover.html');
 ?>
<?php 

include('chatbotpopup.html');
?>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo.jpg" alt="" style="border-radius:20px; opacity:90%;"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!-- <li class="menu-active"><a href="#intro">Home</a></li> -->
          <li><a href="#discover">Discover Charthill</a>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Business Alliance</a></li>
              <li><a href="#">Social Impact</a></li>

            </ul>
          </li>
          <li><a href="#allservices">Services</a>
            <ul>
              <li><a href="#">Licensing</a></li>
              <li><a href="#">Franchising</a></li>
              <li><a href="#">IPO Advisory</a></li>
              <li><a href="#">Business Migration Services</a></li>
              <li><a href="#">Sales & Marketing</a></li>
            </ul>

          </li>
          <li><a href="#portfolio">Elitepool Cover</a></li>
          <li><a href="#team">Our Team</a>
            <ul>
              <li><a href="#">Solar Bubble Covers</a></li>
              <li><a href="#">Roller Systems</a></li>
              <li><a href="#">Security & Debris Covers</a></li>
              <li><a href="#">Fully Automatic Covers</a></li>
              <li><a href="#">Commercial Range</a></li>
              <li><a href="#">Thermal Shield</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Business Opportunities</a>
            <ul>
              <li><a href="#">Invest with Us</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Discover Charthill Consulting</h2>
                <p>Learn how Charthill Consultant can help you to with amazing business opportunities. Let's make a
                  difference together.</p>
                  <a href="aboutus.php"><button type="button" class="btn btn-outline-light">More About Us</button></a>
                  <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Right People Right Investments</h2>
                <p>We offer a list of Licensing, Franchising, Business Development, Marketing & Sales services help our
                  clients to build global brands and businesses. </p>
                  <a href="aboutus.php"><button type="button" class="btn btn-outline-light">More About Us</button></a>
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

  <!--card section-->
  <div class="cardcontainer" id="allservices">
    <div id="servicebox">
      <h1 align="center" style="color:white;z-index:5;">Our Services</h1>
      <p align="center" style="color: white;z-index:5;">At CHARTHILL we offer a list of licensing, franchising, business
        development, Marketing & Sales services help our clients to build global brands and businesses.</p>
      <div class="cardcollection">
        <div class="card">
          <img class="card-img-top" src="assets/img/services/service-1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Licensing</h5>
            <p class="card-text">like the game of chess board, successful licensing requires the right strategy and
              tactics. The world of consumer product licensing is to many a giant hidden industry worth over several
              billion dollars in sales.</p>
            <a href="#" class="btn btn-primary card-button">Read More</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/img/services/service-2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">FRANCHISING</h5>
            <p class="card-text">Capture the power of your brand’s history, mission, audience, and customer services
              with logo, etc that set the stage for successful, reputed growth across your entire franchise network.</p>
            <a href="#" class="btn btn-primary card-button">Read More</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/img/services/service-3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">SALES & MARKETING</h5>
            <p class="card-text">Charthill is an all encompassing resource for distinct clients including brands,
              businesses, new developments and hospitality services</p>
            <a href="#" class="btn btn-primary card-button">Read More</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/img/services/service-4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">BUSINESS DEVELOPMENT</h5>
            <p class="card-text">We can help you “Paint the Digital Picture” Behind Your Potential Customers Mind to
              Start or Grow Your Business After You Go Apprentice.</p>
            <a href="#" class="btn btn-primary card-button">Read More</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/img/services/service-5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">IPO ADVISORY</h5>
            <p class="card-text">that listed companies enjoy a high status and reputation in the market as getting
              listed in the stock exchange is a sign of the organization’s maturity, stability and transparency among
              the peers.</p>
            <a href="#" class="btn btn-primary card-button">Read More</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/img/services/service-6.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">BUSINESS MIGRATION</h5>
            <p class="card-text">Thanks to the presence of massive natural resources and consistent economical
              development Australia is a amazing place for aspiring BUSINESSMEN & INVESTORS.</p>
            <a href="#" class="btn btn-primary card-button">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--card section-->





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