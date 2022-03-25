<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php
    include("include/css.php");
    ?>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
        *{
            outline:none;
        }
        /* spacer */
        .spacer{
            height:150px;
            width:100%;
        }
        .spacer2{
            height:20px;
            width:100%;
            margin-top: 200px;
        }
        /* spacer ends */

        /* slider styles */
        .sd_master_wrapper{
            position: relative;
            max-width:900px;
            margin:0 auto;
            padding:0;
            border-radius:10px;
            z-index:9999;
        }
        .sdtestBg3{
            height: 100%;
            width: 80%;
            background: #fff;
            position: absolute;
            bottom: -40px;
            left: 10%;
            border-radius: 20px;
            box-shadow: 0px 18px 52.8537px rgb(215 228 249 / 50%);
            z-index:1;
        }
        .sdtestBg2{
            height: 100%;
            width: 90%;
            background: #fff;
            position: absolute;
            bottom: -22px;
            left: 5%;
            border-radius: 20px;
            box-shadow: 0px 18px 52.8537px rgb(215 228 249 / 50%);
            z-index:2;
        }

        .sd_scroll {
            height: auto;
            max-height: 180px;
            overflow: auto;
        }

        .slideshow {
            position: relative;
            min-height: 300px;
            height: auto;
            background: #fff;
            box-shadow: 0px 18px 52.8537px rgba(215, 228, 249, 0.5);
            border-radius: 20px;
            background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/quote1.png), url(https://farsighttechnologies.com/wp-content/uploads/2021/03/quote.png);
            background-position: top 15px left 15px, bottom 40% right 15px;
            background-repeat: no-repeat;
            background-size: 180px, 180px;
            z-index:3;
        }
        button.slick-prev.slick-arrow {
            position: absolute;
            z-index: 9999;
            bottom: -80px;
            right: 160px;
            background: transparent;
            color: transparent;
            border: none;
            outline: none;
            cursor: pointer;
            height: 15px;
            width: 30px;
            padding: 0;
            background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/left-icon.png);
            background-size: 100% 100%;
        }
        button.slick-next.slick-arrow {
            position: absolute;
            bottom: -82px;
            right: 105px;
            background: transparent;
            color: transparent;
            border: none;
            padding: 0;
            cursor: pointer;
            outline: none;
            height: 18px;
            width: 40px;
            background-image: url(https://farsighttechnologies.com/wp-content/uploads/2021/03/right-icon.png);
            background-size: 100% 100%;
        }
        .pagingInfo {
            position: absolute;
            bottom: 0;
            z-index: 999;
        }
        .sdCustomSliderHeadig {
            color: #94A2B3;
            font-family: "Poppins", Sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.6em;
            text-align: center;
        }
        .sdCustomSliderBtn{
            display: inline-block;
            text-decoration: none;
            font-family: montserrat;
            background: #E31C3A;
            color: #fff;
            padding: 12px 25px;
            margin-top: 30px;
            border-radius: 4px;
            outline: none;
            font-size: 14px;
            font-weight: 500;
        }
        .sdAllContent{
            width:75%;
            margin:auto;
        }
        .thumbnail img {
            height: 55px;
            width: 55px;
            border-radius: 50%;
            margin: auto;
            margin-top: 15px;
        }
        .content{
            display:block !important;
            padding: 5px;
        }
        .SdClientName {
            text-align: center;
            color: #272D4E;
            font-family: "Poppins", Sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.4em;
            margin-top: 15px;
        }
        .SdClientDesc {
            text-align: center;
            color: #7854F7;
            font-family: "Poppins", Sans-serif;
            font-size: 14px;
            line-height: 1.4em;
            margin-bottom: 10px;
        }


        /* style for moblile */
        @media (max-width:576px){
            .sd_scroll {
                height: auto;
                overflow: auto;
                max-height:240px;
            }

            .thumbnail, .btnNtxt{
                width: 100% !important;
                display: block !important;
            }

        }
        /* scroll bar */
        /* total width */
        .sd_scroll::-webkit-scrollbar {
            background-color:transparent;
            width:6px;
        }

        /* background of the scrollbar except button or resizer */
        .sd_scroll::-webkit-scrollbar-track {
            background-color:transparent;
        }
        .sd_scroll::-webkit-scrollbar-track:hover {
            background-color:transparent;
        }

        /* scrollbar itself */
        .sd_scroll::-webkit-scrollbar-thumb {
            background-color:#babac0;
            border-radius:16px;

        }
        .sd_scroll::-webkit-scrollbar-thumb:hover {
            background-color:#a0a0a5;
        }
    </style>
</head>
<body>
<div class="wrapper ovh">
    <div class="preloader"></div>

    <!--top header section-->
    <?php
    include("include/header.php");
    ?>


    <!--menubar section-->
    <?php
    include("include/menubar.php");
    ?>


    <!--main body content starts here-->


    <div class="spacer2"></div>
    <div>
        <center>
            <h1> CarCentive CUSTOMER REVIEWS</h1>
            <p>At The CarCentive, we save your time, money and peace of mind! We take pride in delivering the best Car Shopping experience for our customers.</p>
        </center>
    </div>

            <div class="spacer"></div>


            <div class="sd_master_wrapper">
                <div class="sdtestBg2"></div>
                <div class="sdtestBg3"></div>
                <div class="slideshow">

                    <div class="content"> <!-- slide 1 -->
                        <div class="thumbnail">
                            <img src="images/testimonial/1.jpg">
                        </div>
                        <div class="btnNtxt">
                            <div class="sdAllContent">

                                <div class="sd_scroll">
                                    <h1 class="sdCustomSliderHeadig">A wonderful, user-friendly HR solution! Farsight HR Solution helped us implement ESS (Employee Self Service) portal for our large enterprise, which made both employees and Human Resources more productive. User-oriented interface and professional team.</h1>
                                </div>
                                <p class="SdClientName">Vice President</p>
                                <p class="SdClientDesc">CPF</p>
                            </div>
                        </div>
                    </div>

                    <div class="content"> <!-- slide 2 -->
                        <div class="thumbnail">
                            <img src="images/testimonial/2.jpg">
                        </div>
                        <div class="btnNtxt">
                            <div class="sdAllContent">

                                <div class="sd_scroll">
                                    <h1 class="sdCustomSliderHeadig">For us, Farsight has become much more than a software solution provider. Farsight has been our helping hand with implementing business automation. The team's expertise, skill, and commitment to excellence are what makes them so great.</h1>
                                </div>
                                <p class="SdClientName">Head IT</p>
                                <p class="SdClientDesc">Mushahi Auto Parts</p>
                            </div>
                        </div>
                    </div>

                    <div class="content"> <!-- slide 3 -->
                        <div class="thumbnail">
                            <img src="images/testimonial/3.jpg">
                        </div>
                        <div class="btnNtxt">
                            <div class="sdAllContent">

                                <div class="sd_scroll">
                                    <h1 class="sdCustomSliderHeadig">I would like to place on record my sincere appreciation for helping us to automate the Salary Revision Exercise and also the Leave Management System at Schneider Electric India. We have had huge challenges in the past to manage these 2 complex exercises and it was a nightmare for HR every March/April. However when we engaged you and worked closely to develop a Software Tool customised for Schneider Electric, our lives have become very much easy. What used to be a pain for us became a huge gain for HR Shared Services.</h1>
                                </div>
                                <p class="SdClientName">Vice President – India HR Services</p>
                                <p class="SdClientDesc">Schneider Electric</p>
                            </div>
                        </div>
                    </div>

                    <div class="content"> <!-- slide 4 -->
                        <div class="thumbnail">
                            <img src="images/testimonial/1.jpg">
                        </div>
                        <div class="btnNtxt">
                            <div class="sdAllContent">
                                <div class="sd_scroll">
                                    <h1 class="sdCustomSliderHeadig">With Farsight’s Employee Self Service Portal, our Vision of implementing an HR Software in Honda R&D (India) could be realized for the easy and smooth functioning of operations. Processes and Policies were well understood by the Team and extended a solution in the System, we look forward for more such customizations where customer is always given a priority. We wish them success for all the future endeavors. </h1>
                                </div>
                                <p class="SdClientName">General Manager – Administration Head</p>
                                <p class="SdClientDesc">Honda R&D (India) Pvt. Ltd. </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="spacer"></div>

    <!--main body content ends here-->


    <!--newslatter section-->
    <?php
    include("include/newslatter.php");
    ?>


    <!--footer section and go to top button-->
    <?php
    include("include/footer.php");
    ?>


    <!-- Wrapper End -->


    <!--js files-->

            <script>
                jQuery(document).ready(function($){
                    var $slickElement = $('.slideshow');

                    $slickElement.slick({
                        autoplay: true,
                        dots: false,
                    });

                });
            </script>
    <?php
    include("include/js.php");
    ?>
</body>


</html>