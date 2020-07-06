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
      width: 100%;
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
  </style>

</head>

<body>

  <?php
  include('our_team_cover.html');
  // include('homecover.html');
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
          <li class="menu-has-children"><a href="#discover">Discover Charthill</a>
            <ul>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="businessalliance.php">Our Business Alliance</a></li>
              <li><a href="social-impact.php">Social Impact</a></li>

            </ul>
          </li>
          <li  class="menu-has-children"><a href="#allservices">Services</a>
            <ul>
              <li><a href="licensing.php">Licensing</a></li>
              <li><a href="Franchising.php">Franchising</a></li>
              <li><a href="IPO Advisory.php">IPO Advisory</a></li>
              <li><a href="Business migration services.php">Business Migration Services</a></li>
              <li><a href="Sales & Marketing.php">Sales & Marketing</a></li>
            </ul>

          </li>
          <li  class="menu-has-children"><a href="elitepool_covers.php">Elitepool Cover</a>
            <ul>
              <li  class="menu-has-children"><a href="#">Solar Bubble Covers</a>
                <ul>
                  <li><a href="triplecellsolar.php">Triple Cell Solar Blankets</a></li>
                  <li><a href="#">Super Bubble Solar Blankets</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a href="#">Roller Systems</a></li>
              <li class="menu-has-children"><a href="#">Security & Debris Covers</a></li>
              <li class="menu-has-children"><a href="#">Fully Automatic Covers</a></li>
              <li><a href="#">Commercial Range</a></li>
              <li><a href="#">Thermal Shield</a></li>
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

  <h1
    style="color: white;background-color: rgba(0, 0, 0, 0.2);z-index: 5;width: 100%;height: auto;margin-top: 100px;text-align: center;font-size: 60px;font-family: 'Baloo Chettan 2', cursive;">
    OUR TEAM</h1>

  <br>

  <!--card section-->
  <div class="team-cards" style="">

    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/stan1.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">STANLEY COBBOLD</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align: justify;">
            Stanley Cobbold is the Executive Director at Charthill Consultants <br>
            Independent Financial Services Professiona <br>
            Rancho Santa Fe, California
          </p>
          <div class="card-text" style="overflow: scroll; height:300px;width: auto;"> He is a Successful investor,
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
    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/prabhdeep singh.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">PRABHJEET SINGH (PJ)</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align: justify;">
            Perth, Western Australia
          </p>
          <div class="card-text" style="overflow: scroll; height:370px;width: auto;">
            Prabhjeet Singh is the Director at Charthill Consultants, lead the team across Australia, New Zealand, UK
            and North America by helping companies solve their most complex and challenging business problems, market
            and distribute products, license and franchise companies and products globally.
            <br><br>
            Prabhjeet Singh has vast experience in Health and Business world. He has worked in Government sector(Fitness
            Director at Fiona Stanley Hospital), private sector(Director of PW Australia Pty Ltd) and International Non
            Profit Organization ( Community Liaison officer at Amnesty International)
            He is passionate about one question above all others. How best to build flourishing organizations and
            workplace relationships based on trust. He firmly believes the human connection is the most potent force we
            have for unlocking the full capacities we all have.
            <br><br>
            It’s also why he believes so strongly in the power of continuous learning. And this has brought him back to
            education many times over the years. He is currently completing bachelor of Law and looking to specialize in
            Intellectual property.
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/tylor.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">TYLOR BALDWIN</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align: justify;">
            Business woman, television host, broadcast journalist, health & beauty expert, media/product development
            consultant
          </p>
          <div class="card-text" style="overflow: scroll; height:300px;width: auto;">
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
          <h4 class="card-title" style="padding-top:10px">BRIAN SMITH</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align: justify;">
            UGG Founder Brian Smith has become one of the most sought after speakers and business leaders in the
            country.
          </p>
          <div class="card-text" style="overflow: scroll; height:300px;width: auto;">
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
          <img src="assets/img/our team/beatrice.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">BEATRICE RINGS</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align: justify;">
            Worked as graphic designer in San Diego, California. She studied psychology. [1999]
            Beatrice Ring is a writer and music video director in Los Angeles, CA.
          </p>
          <div class="card-text" style="overflow: scroll; height:300px;width: auto;">
            Beatrice Ring started her career as a model and ventured into the showbiz industry.
            She is one of the popular actresses in the world of cinema.
            She is best known for her appearance on Zombi 3.
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
      <div class="card-body">
        <div class="">
          <img src="assets/img/our team/brian.jpg" alt="">
          <h4 class="card-title" style="padding-top:10px">LUKE MAINGARD</h4>
        </div>
        <div class="cardtext">
          <p style="font-weight:bold;text-align: justify;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi architecto tenetur, sed magnam nemo rerum
            quia sequi quos aut ducimus! Provident atque doloribus doloremque.
          </p>
          <div class="card-text" style="overflow: scroll; height:300px;width: auto;"> Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Velit obcaecati ducimus veniam quis quaerat, amet ipsum sint neque deleniti
            non temporibus ratione suscipit ad rerum vel laboriosam reiciendis optio excepturi illo iste repudiandae
            voluptas, repellendus delectus! Voluptatum quod aliquam accusamus eveniet qui magnam natus quia eaque
            reprehenderit! Non, eos illo.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut libero vitae repudiandae facilis, consequatur
            id temporibus magni culpa! Voluptate dolore asperiores, beatae quaerat modi nostrum in accusamus. Odit fugit
            blanditiis tempore qui maxime? Ut nam deserunt suscipit architecto totam saepe nulla, nisi aspernatur
            ratione magnam, optio qui voluptatibus ipsam modi.
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