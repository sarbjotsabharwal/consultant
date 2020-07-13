<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <link rel="stylesheet" href="assets/css/social_media_icons.css">

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
            background: url('assets/img/contactus/formback.jpg') no-repeat center center/cover;
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

        .contact-form {
            display: block;
            width: 400px;
            height: 530px;
            position: fixed;
            background-color: rgb(0, 0, 0, .7);
            top: 80px;
            border-radius: 40px;

            right: 20px;
            z-index: 5;
        }

        .form {}

        .cardtext div,
        .cardtext p {
            padding-left: 10px;
            padding-right: 10px;
        }

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
            width: 170px;
            border-radius: 140px;
        }

        .card-body div {
            height: 50%;
            width: 50%;
        }

        body {

            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>
`

<body style="
            font-family:  Montserrat, sans-serif;">
    <?php
    include('header.html');
    ?>
    <?php
    include('videopopup.html');
    include('social_media.html');
    ?>
    <!-- sticky background -->
    <div class="stickyback">

        
    ?>
    <!-- sticky background end -->
    <br><br><br><br>
    <div class="container" style="display:flex;flex-wrap:wrap">
        <div class="carousel" style="width: 650px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background: rgb(0, 0, 0,.5);width:100%;border-radius: 20px;color: white;padding:30px;text-align: center;">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <h1 style="font-style:italic;text-decoration: underline;color: rgb(1, 196, 1);font-weight:bold">
                            United States Head Office</h1>
                        <br>
                        <h4>500 North Rainbow Blvd,<br>
                            Suite 300, LAS VEGAS <br>
                            Nevada, 89107 <br>
                            UNITED STATES</h4><br>
                    </div>
                    <div class="carousel-item" style="background: rgb(0, 0, 0,.5);width:100%;border-radius: 20px;color: white;padding:30px;text-align: center;">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <h1 style="font-style:italic;text-decoration: underline;color: rgb(1, 196, 1);font-weight:bold">
                            Australian Head office</h1>
                        <br>
                        <h4>22/16 Kings Park Road,<br>
                            West Perth, WA 6005<br>
                            AUSTRALIA<br>
                            <br>

                        </h4><br>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="card-container" style="">
            <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
                <div class="card-body">
                    <div class="">
                        <img src="assets/img/our team/stan1.jpg" alt="">
                        <h4 class="card-title" style="padding-top:10px;color: rgb(1, 196, 1);font-weight:bold">STANLEY
                            COBBOLD</h4>
                    </div>
                    <div class="cardtext">

                        <br><br>
                        <p style="font-weight:bold;text-align: justify;">
                            Position: Executive Director of Charthill Consultants <br><br>
                            Contact: (+61) 439 971 455 <br><br>
                            Email:stanley@charthillconsultants.com <br><br>
                            <div class="social_media_container" style="display: block;width:100%;margin:auto;">
                                <a href="https://au.linkedin.com/in/stanley-cobbold-ab023a187" class="fa fa-linkedin" target="_blank"></a>
                                <!-- <a href="" class="fa fa-facebook"   target="_blank"></a>
                            <a href="" class="fa fa-twitter"  target="_blank"></a> -->
                            </div>
                            <br><br>

                        </p>
                    </div>
                    <iframe style="border: 2px solid black;border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6441.052532977523!2d-115.241574!3d36.178081000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c052109413d1%3A0x139155b48b4c91d1!2s500%20N%20Rainbow%20Blvd%20%23300%2C%20Las%20Vegas%2C%20NV%2089107%2C%20USA!5e0!3m2!1sen!2sin!4v1593977332095!5m2!1sen!2sin" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="card bg-light" style="width:600px; border-radius:30px;box-shadow: 0px 0px 45px -9px rgba(0,0,0,0.95);">
                <div class="card-body">
                    <div class="">
                        <img src="assets/img/our team/prabhdeep singh.jpg" alt="">
                        <h4 class="card-title" style="padding-top:10px;color: rgb(1, 196, 1);font-weight:bold">PRABHJEET
                            SINGH (PJ)</h4>
                    </div>
                    <div class="cardtext">
                        <br><br>
                        <p style="font-weight:bold;text-align: justify;">
                            Position: Director of Charthill Consultants <br><br>
                            Contact: (+61) 447 188 144 <br><br>
                            Email:prabhjeet@charthillconsultants.com
                            <div class="social_media_container" style="display: block;width:100%;margin:auto;">
                                <!-- <a href="#" class="fa fa-linkedin" target="_blank"></a> -->
                                <!-- <a href="https://www.facebook.com/CharthillConsultants/" class="fa fa-facebook" target="_blank"></a>
                                <a href="https://twitter.com/CharthillC" class="fa fa-twitter" target="_blank"></a> -->
                            </div>
                        </p>

                    </div>
                    <iframe style="border: 2px solid black;border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6770.618946885443!2d115.84073000000001!3d-31.952500000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a52f6483c0dd%3A0xd248f06db79b70a7!2s22%2F16%20Kings%20Park%20Rd%2C%20West%20Perth%20WA%206005%2C%20Australia!5e0!3m2!1sen!2sin!4v1593978167320!5m2!1sen!2sin" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>


        </div>

        <div class="contact-form" style="color:white">
            <div class="form">
                <form style="padding:30px">
                    <h3 style="text-align: center;color: rgb(1, 196, 1);font-weight:bold">Write to Us</h3>
                    <div class="foZrm-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Subject</label>
                        <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Enter subject" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write your message here" rows="4" required></textarea>
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success" style="margin-left: 30%;width: 40%;">
                </form>
            </div>

        </div>
    </div>





    <?php

    include('footer.html');

    ?>
</body>
<script>
    // var pos = document.getElementById("myForm").className;

    function OpenForm() {

        e = document.getElementById("myForm").className = "chat-popup";
        document.getElementById("myForm").style.display = "block";
        document.getElementById("buttonchange").innerHTML = "<img src='assets/img/cross.png' style='height: 42px;background-color: red;width: 50px;padding-top:10px;padding-bottom:10px' alt='' id='myBtn' onclick='CloseForm()'>";
        e.stopPropagation();
        // var new1 = <img src="assets/img/cross.png" alt="" id="myBtn" onclick="CloseForm()"></img>;
        // document.getElementById("myForm").style.display = "block";
        // document.getElementById("myBtn").innerHTML = new1;

    }

    function CloseForm() {

        // document.getElementById("myForm").style.display = "none";
        document.getElementById("buttonchange").innerHTML = "<img src='assets/img/arrow.png' alt='' id='myBtn' onclick='OpenForm()'>";
        document.getElementById("myForm").className = "chat-popup1";
        // var new1 = <img src="assets/img/cross.png" alt="" id="myBtn" onclick="CloseForm()"></img>;
        // document.getElementById("myForm").style.display = "block";
        // document.getElementById("myBtn").innerHTML = new1;

    }

    // var pos = document.getElementById("myForm").className;
</script>

</html>