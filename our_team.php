<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team</title>
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

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

  <style>
    .team-cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .card-body {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .card-body div img {
      border: 2px solid black;
      width: 80%;
      border-radius: 140px;
    }

    .card-body div {
      height: 50%;
      width: 50%;
    }

    .stickyback::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('assets/img/our team/back.png') no-repeat center center/cover;
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

    .cardtext div,
    .cardtext p {
      padding-left: 20px;
      padding-right: 20px;
    }

    .card-title {
      color: rgb(1, 168, 1);

    }

    @media (max-width:768px) {
      .card-body div {
        height: 100%;
        width: 100%;
      }
    }
  </style>
<link rel="stylesheet" href="assets/css/fontset14.css">
</head>

<body style="font-family: Montserrat, sans-serif;">

  <?php
  include('our_team_cover.html');
  // include('header.html');
  include('chatbotpopup.html');
  ?>
  <?php
  // include('videopopup.html');
  include('Social_Media.html');
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


  <!-- sticky background -->
  <div class="stickyback">

  </div>
  <!-- sticky background end -->

  <h1 style=" color: rgb(1, 196, 1);
    background-color: rgba(0, 0, 0, 0.39);z-index: 5;width: 100%;height: auto;margin-top: 100px;text-align: center;font-size: 60px;font-weight: bold;padding:10px">
    DIRECTORS</h1>



  <!-- first card section -->

  <div class="team-cards" style="">

    <div class="card bg-light" style="width:90%; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);font-size:15px;height: auto;">
      <div class="card-body" style="height: auto;">
        <div class="" style="width:350px;">
          <img src="assets/img/our team/stan1.jpg" alt="" style="margin-left:20px;">
          <h4 class="card-title" style="padding-top:10px">Mr. STANLEY COBBOLD</h4>
        </div>
        <div class="cardtext" style="width: 800px;height:auto">
          <p style="font-weight:bold;" class="font14">
            Stanley Cobbold is the Executive Director at Charthill Consultants <br>
            Independent Financial Services Professional <br>
            Rancho Santa Fe, California
          </p>
          <div class="card-text font14" style="height:auto;width: auto;"> Stanley Cobbold is a successful investor,
            entrepreneur,
            advisor, and
            business consultant, with over 35 years of experience in assisting businesses and capital markets. Helped
            passionate entrepreneurs build great companies. Specializing in all aspects of private and public companies,
            Franchising, Licensing Technology and Intellectual Properties. Decisive, adaptable and proven to deliver
            results, a passionate communicator with ability to relate to people and create trust and loyalty. <br>
            <b>Specialties:</b>
            <ul>
              <li>Deal origination</li>
              <li>Capital raising strategic and structuring advice</li>
              <li> Commercial business structuring and restructuring</li>
              <li>Managing corporate strategy</li>
              <li> Coordinating project implementation</li>
              <li> Negotiation</li>
              <li> Analytical and conceptual advice</li>
              <li> Developing and building partnerships and networks</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-light" style="width:90%; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);font-size:15px;height: auto;">
      <div class="card-body" style="height: auto;">
        <div class="" style="width:350px;">
          <img src="assets/img/our team/prabhdeep singh.jpg" alt="" style="margin-left:20px;">
          <h4 class="card-title" style="padding-top:10px">Mr. PRABHJEET SINGH (PJ)</h4>
        </div>
        <div class="cardtext font14" style="width: 800px;height:auto">
          <p style="font-weight:bold;">
            Prabhjeet Singh is the Director at Charthill Consultants, <br>
            Perth, Western Australia
          </p>
          <div class="card-text font14" style="height:auto;width: auto;">
            Prabhjeet Singh has vast experience in Health and Business world. He has worked in Government sector(Fitness
            Director at Fiona Stanley Hospital), private sector(Director of PW Australia Pty Ltd) and International Non
            Profit Organization ( Community Liaison officer at Amnesty International)
            He is passionate about one question above all others. How best to build flourishing organizations and
            workplace relationships based on trust. He firmly believes the human connection is the most potent force we
            have for unlocking the full capacities we all have.
            <br><br>

            He leads the charthill consultants across Australia, New Zealand, UK
            and North America by helping companies solve their most complex and challenging business problems, market
            and distribute products, license and franchise companies and products globally.
            <br><br>



          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- first card end -->

  <h1 style="color: rgb(1, 196, 1);
    background-color: rgba(0, 0, 0, 0.39);z-index: 5;width: 100%;height: auto;margin-top: 100px;text-align: center;font-size: 60px;font-weight: bold;padding:10px">
    BOARD OF ADVISORS
  </h1>


  <!--card section-->
  <div class="team-cards" style="">


    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/tylor.jpg" alt="">
          <h4 class="card-title" style="padding-top: 10px; font-size: 23px;">Ms. TAYLOR BALDWIN</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align:left;" class="font14">
            Business woman, television host, broadcast journalist, health & beauty expert, media/product development
            consultant
          </p>
          <div class="card-text font14" style=" height:300px;width: auto;">
            In the years 1995-2008, she worked in a variety of roles – spokesperson, anchor, producer –– for Fox Sports
            Net, CBS/TNN, KCBS-TV “Sports Central”, KTLA-TV 5 Los Angeles, KFMB-TV San Diego, Eyemark Entertainment,
            STAR 100.7 FM and CBS Newspath

          </div>
        </div>
      </div>
    </div>
    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/brian.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">Mr. BRIAN SMITH</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align:left;" class="font14">
            UGG Founder Brian Smith has become one of the most sought after speakers and business leaders in the
            country.
          </p>
          <div class="card-text font14" style=" height:300px;width: auto;">
            Team building, company culture, growth challenges, are all presented through a lens of vast experience,
            combined with a vision of a spiritual approach towards the future of business today.
            <br><br>
            His inspirational talks and media appearances on his breakthrough business strategies are widely attended by
            business people of all ages from a diverse array of market sectors.

          </div>
        </div>
      </div>
    </div>

    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/beatricenew.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">Ms. BEATRICE RING</h4>
        </div>
        <div class="cardtext font14">
          <p style="font-weight:bold;text-align:left;" class="font14">
            Beatrice Ring born on September 23, 1965 in France is a French actress and director known for her portrayal in McMillions, a documentary series about the McDonald’s Monopoly game scam that occurred between 1989 and 2001 by ex-cop, Jerry Jacobson. The series premiered on February 3, 2020 on HBO.
          </p>
          <div class="card-text" style=" height:200px;width: auto;">

            She started her career as a model and ventured into the showbiz industry. Ring is also known for her appearance on Zombie 3 in 1988, Interzone in 1989 and Sicilian Connection in 1987.

          </div>
        </div>
      </div>
    </div>
    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/barry.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">Mr. JASON BARRY</h4>
        </div>
        <div class="cardtext font14">
          <p style="font-weight:bold;text-align:left;" class="font14">
            With over $4 Billion in sales, Jason Barry has developed a global reputation as the top luxury real estate agent for San Diego’s luxury marketplace. Due to his expertise in the luxury real estate market and his integrity, loyalty and professionalism, Jason has been sought out by the most successful business leaders.


          </p>
          <div class="card-text" style="height:200px;width: auto;"> Jason has facilitated some of the most expensive homes to have sold in San Diego’s luxury communities: Rancho Santa Fe, La Jolla, Del Mar, Solana Beach, Carlsbad, Downtown San Diego and Point Loma.

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