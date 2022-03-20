<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php
    include("include/css.php");
    ?>
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



    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb style2 inner_page_section_spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_content style2">
                        <h2 class="breadcrumb_title">CAR RENTALS AVAILABLE FROM VANTAGE! BOOK NOW!</h2>
                        <p class="subtitle">Listings</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Listing Grid View -->
    <section class="our-listing pt0 bgc-f9 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <div class="car-listing">
                                <div class="thumb">
                                    <div class="tag">FEATURED</div>
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                    <div class="thmb_cntnt3">
                                        <ul class="mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="wrapper">
                                        <h5 class="price">$129</h5>
                                        <h6 class="title"><a href="page-car-single-v1.html">Volvo XC90 - 2020</a></h6>
                                    </div>
                                    <div class="listing_footer">
                                        <ul class="mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mbp_pagination mt10">
                                <ul class="page_navigation">
                                    <li class="page-item">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <?php
    include("include/js.php");
    ?>
</body>


</html>