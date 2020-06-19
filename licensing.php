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
            background: url('assets/img/licensing/licensing.jpg') no-repeat center center/cover;
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
    </style>
</head>

<body>
    <?php
    include('header.html');
    ?>
    <?php 
    include('videopopup.html');
    ?>
    <!-- sticky background -->
    <div class="stickyback">

    </div>
    <!-- sticky background end -->



    <!-- section start -->
    <h1
        style="color: white;background-color: rgba(0, 0, 0, 0.2);z-index: 5;width: 100%;height: auto;margin-top: 150px;text-align: center;font-size: 100px;font-family: 'Baloo Chettan 2', cursive;">
        Licensing Services</h1><br><br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(89, 255, 98, 0.5);z-index: 5;width: 30%;text-align: center;font-size: 25;border-radius: 25px;padding:10px;">
        Licensing</h1><br>
    <div class="heading"></div>

    <div class="content">
        <!-- <h1 style="color:white;">LICENSING</h1> -->
        <p style="color: white;text-align: center;width: 80%; display:block;margin: auto;">

            Licensing is defined as a business arrangement, wherein a company authorizes another company by issuing a
            license to temporarily access its intellectual property rights, i.e. brand name, copyright, trademark,
            patent, technology, trade secret, etc. for adequate consideration and under specified conditions.
            The firm that permits another firm to use its intangible assets is the licensor and the firm to whom the
            license is issued is the licensee. A fee or royalty is charged by the licensor to the licensee for the use
            of intellectual property right. <br> <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="OpenPlayer()">
                Watch Video
            </button>
        </p>
    </div>
    <!-- section end -->


    <!-- section start -->
    <br> <br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(255, 114, 89, 0.5);z-index: 5;width: 80%;text-align: center;font-size: 25;border-radius: 25px;padding:10px">
        Need Help With Your Invention Or product Idea?</h1><br>
    <div class="heading"></div>

    <div class="content">
        <!-- <h1 style="color:white;">LICENSING</h1> -->
        <p style="color: white;text-align: center;width: 80%; display:block;margin: auto;">

            If you are an inventor with a patent, we can help you make it very profitable.
            <br>

            Charthill consultants has 35 years of experience in Licensing small to big businesses.
            Simply put, we find companies who will retail and distribute your invention and make your business more
            profitable.
            <br>

            A startling fact is that only 2-3% of all patented inventions ever make more money for the inventor than
            they invested into it. Why? Most commonly we have found that many inventors simply do not understand many of
            the business principles that govern such transactions. Moreover, although they are brilliant in various
            aspects of engineering and the conception of their ideas, they do not know these important decision makers
            or how to present their inventions effectively.

            <br>
            We at Charthill consultants will bridge this gap and become a critical team member in the licensing of our
            clients’ inventions. We attend trade shows throughout the world and make face-to-face presentations.

            <br>
            With the right strategies and agent working for you, the opportunities for your invention are endless. We at
            Charthill Consultants will seek out these opportunities and even risk our own time and financial resources
            to make it happen. We are just looking for good inventions to work with. <br> <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="OpenPlayer1()">
                Watch Video
            </button>
        </p>
    </div>
    <!-- section end -->


    <!--card section-->
    <br>
    <br>
    <h1
        style="display:block;margin:auto;color: white;background-color: rgba(0, 0, 0, 0.3);z-index: 5;width: 100%;text-align: center;font-size: 25;border-radius: 25px;padding:25px">
        BENEFITS OF LICENSING
    </h1><br>
    <div class="cardcontainer1" id="allcards1" style="">

        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="ba1">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/passiveincome1.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ecfad4, #c2faf3);opacity: 1;">
                <h5 class="card-title">It creates an opportunity for passive income. </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    If you are the owner of an intellectual property, then licensing it is an opportunity to create an ongoing stream of passive revenues. You don’t need to do anything to generate those revenues either. Just sell licenses after developing the IP and you’re good to go. As long as the licensees are making money, then you’re going to be making money too and you don’t risk losing your ownership rights. These payments could last for several years without interruption.
                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/newmarket.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ffdbcd, #ffa1a1);opacity: 1;">
                <h5 class="card-title">It Creates New Markets</h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    A licensee can benefit from this type of arrangement because it requires less money from them to start a business opportunity. They can purchase a license instead of outright ownership, then begin to make profits right away. It takes less upfront cash to pay for a license. When a licensee can improve upon a product, they can make even more money off their venture. Even if the item wanted is a trademark or brand name, the new business benefits from the reputation and consumer awareness of the information.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/risk.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ecfad4, #c2faf3);opacity: 1;">
                <h5 class="card-title">It reduces risks for both parties. </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Licensing is designed to reduce the risks involved in doing business for everyone involved. From a licensee standpoint, there are fewer risks in product development, market testing, manufacturing, and distribution. From a licensor standpoint, there are fewer risks in the selling and service of what is being offered. Neither party is required to throw their own money in these areas to earn profits, which creates a win/win situation for everyone involved.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/business-1031754_1920.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ffdbcd, #ffa1a1);opacity: 1;">
                <h5 class="card-title">It creates new business opportunities. </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    When a licensing arrangement is in place, then the licensor can get their product into new markets much easier than if they were doing the work on their own. It is much easier to enter foreign markets in this manner, as the license allows for the intellectual property to jump border requirements. That means tariff barriers to entry can be avoided because a domestic company is using the IP, just as the licensor might be using the IP domestically.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/selfemp.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ecfad4, #c2faf3);opacity: 1;">
                <h5 class="card-title">It creates self-employment opportunities. </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    Licensing allows people to go into business for themselves. They get to experience all of the advantages of self-employment, such as setting their own hours, while you get the benefits of having someone invested into your IP. From a licensee standpoint, there is the opportunity to gain a monopoly over a product or service in a specific territory at a lower investment rate that going alone. For the licensor standpoint, personal IP carries the same advantages as well.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>
        <div class="card bg-light mb-3" style="border:1px black solid;border-radius: 25px;" id="">
            <div class="card-header border-radius-top" style="padding: 0;">
                <!-- <img src="assets/img/businessalliance/jenny.png" alt=""
                    style="width: 100%;margin: 0;border-radius: 30px;"> -->
                <img src="assets/img/licensing/uniquemarket.jpg" alt="" style="width:100%;height: 300px;">
            </div>
            <div class="card-body" style="background: #00b09b;
            border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
            background: linear-gradient(to right, #ffdbcd, #ffa1a1);opacity: 1;">
                <h5 class="card-title">It offers the freedom to develop a unique marketing approach. </h5>
                <p class="card-text" style="text-align: justify;padding: 10px;color: black;height: auto;">
                    A licensee knows their market much better than the average licensor. That knowledge allows an intellectual property to be marketed in a way that is more attractive to the average consumer. It is a chance to expand the reach of a message, product, or concept without actually needing to invest into them fully. Even when certain elements of the arrangement are pre-planned, there is still a certain level of freedom and control given to the licensee in the management of their business.

                </p>
                <!-- <p style="text-align: center; font-size: 15px;">Charthill got a license from USA to Australia and
                        Singapore as well. </p> -->
            </div>
        </div>




    </div>

    <!-- card section end -->
    <?php 

include('footer.html');

?>
</body>

</html>