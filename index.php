<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php
    include("config/dbController.php");
    ?>
    <?php
    include ("include/css.php");
    ?>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <![endif]-->
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





    <!-- Home Design -->
    <section class="home-one home4_style bgc_home4_style bg-home4">
        <div class="container">
            <div class="row posr">
                <div class="col-xl-11 col-xxl-10 m-auto">
                    <div class="home_content home1_style at_home4">
                        <div class="home-text text-center mb30">
                            <h2 class="title"><span class="aminated-object1"><img class="objects"
                                                                                  src="images/home/title-bottom-border.svg"
                                                                                  alt=""></span>Right Car. Right Price.
                            </h2>
                            <p class="para">Simplified and Hassle-Free</p>
                        </div>
                        <div class="advance_search_panel">
                            <div class="adss_bg_stylehome4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home1_advance_search_wrapper home4_style">
                                            <ul class="mb0 text-center d-block d-lg-flex mb0 text-center d-block d-lg-flex justify-content-center">
                                                <li>
                                                    <div class="select-boxes">
                                                        <div class="car_models">
                                                            <select class="selectpicker">
                                                                <option>Select Makes</option>
                                                                <option>Audi</option>
                                                                <option>Bentley</option>
                                                                <option>BMW</option>
                                                                <option>Ford</option>
                                                                <option>Honda</option>
                                                                <option>Mercedes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="select-boxes">
                                                        <div class="car_models">
                                                            <select class="selectpicker">
                                                                <option>Select Models</option>
                                                                <option>A3 Sportback</option>
                                                                <option>A4</option>
                                                                <option>A6</option>
                                                                <option>Q5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="select-boxes">
                                                        <div class="car_prices">
                                                            <select class="selectpicker">
                                                                <option>All Price</option>
                                                                <option>No max Price</option>
                                                                <option>$2,000</option>
                                                                <option>$5,000</option>
                                                                <option>$10,000</option>
                                                                <option>$15,000</option>
                                                                <option>$5,000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-block">
                                                        <button class="btn btn-thm4 advnc_search_form_btn"><span
                                                                class="flaticon-magnifiying-glass"></span>Search
                                                        </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="row m-3">
                                <div class="col-md-4 text-center">
                                    <button class="btn btn-thm4 advnc_search_form_btn">Apply Now
                                    </button>
                                </div>
                                <div class="col-md-4 text-center">
                                    <button class="btn btn-thm4 advnc_search_form_btn">Trade In
                                    </button>
                                </div>
                                <div class="col-md-4 text-center">
                                    <button class="btn btn-thm4 advnc_search_form_btn">Sell Your Car
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Car Category -->
    <section class="feature_listing_home4_style pt0 pt120-md pb5">
        <div class="container">
            <div class="row mb90">
                <div class="col-xl-9 m-auto">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl">
                            <div class="category_item home4_style mt0-md">
                                <div class="icon">
                                    <span class="flaticon-sedan-car-model"></span>
                                </div>
                                <div class="details">
                                    <p class="title"><a href="page-car-single-v1.html">Sedan</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl">
                            <div class="category_item home4_style mt0-md">
                                <div class="icon">
                                    <span class="flaticon-coupe-car"></span>
                                </div>
                                <div class="details">
                                    <p class="title"><a href="page-car-single-v1.html">Coupe</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl">
                            <div class="category_item home4_style mt0-md">
                                <div class="icon">
                                    <span class="flaticon-jeep"></span>
                                </div>
                                <div class="details">
                                    <p class="title"><a href="page-car-single-v1.html">SUV</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl">
                            <div class="category_item home4_style mt0-md">
                                <div class="icon">
                                    <span class="flaticon-car-black-side-view-pointing-left"></span>
                                </div>
                                <div class="details">
                                    <p class="title"><a href="page-car-single-v1.html">Truck</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg col-xl">
                            <div class="category_item home4_style mt0-md">
                                <div class="icon">
                                    <span class="flaticon-cabrio-car"></span>
                                </div>
                                <div class="details">
                                    <p class="title"><a href="page-car-single-v1.html">Convertible</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Our Partners -->
            <section class="customer-logos slider">
                <div class="slide"><img src="images/brand/1.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/2.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/3.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/4.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/5.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/6.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/7.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/8.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/9.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/10.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/11.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/12.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/13.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/14.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/15.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/16.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/17.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/18.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/19.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/20.png" style="width: 150px; height: 150px"></div>
                <div class="slide"><img src="images/brand/21.png" style="width: 150px; height: 150px"></div>
            </section>







    <!-- Features Listings -->
    <section class="featured-product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>Featured Listings</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular_listing_sliders row">
                        <!-- Nav tabs -->
                        <div class="nav nav-tabs col-lg-12 justify-content-center" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">SUV</button>
                            <button class="nav-link" id="nav-shopping-tab" data-bs-toggle="tab" data-bs-target="#nav-shopping" role="tab" aria-controls="nav-shopping" aria-selected="false">Sedan</button>
                            <button class="nav-link" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels" role="tab" aria-controls="nav-hotels" aria-selected="false">Coupe</button>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content col-lg-12" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-8">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/1.jpg" alt="1.jpg" width="850px" height="370px">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$129</h5>
                                                    <h6 class="title"><a href="#">Volvo XC90 - 2020</a></h6>
                                                </div>
                                                <div class="listing_footer">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-2">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/3.jpg" alt="3.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$230</h5>
                                                    <h6 class="title"><a href="#">BMW M8 Gran Coupe Base - 2021</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/7.jpg" alt="7.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$230</h5>
                                                    <h6 class="title"><a href="#">Bentley Bentayga V8 - 2020</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-2">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag blue">SPECIAL</div>
                                                <img src="images/listing/4.jpg" alt="4.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$478</h5>
                                                    <h6 class="title"><a href="#">Nıssan Qasqai - Sky Pack</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/8.jpg" alt="8.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$478</h5>
                                                    <h6 class="title"><a href="#">Ferrari 488 Spider Base - 2019</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-shopping" role="tabpanel" aria-labelledby="nav-shopping-tab">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-8">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/1.jpg" alt="1.jpg" width="850px" height="370px">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$129</h5>
                                                    <h6 class="title"><a href="#">Volvo XC90 - 2020</a></h6>
                                                </div>
                                                <div class="listing_footer">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-2">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/3.jpg" alt="3.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$230</h5>
                                                    <h6 class="title"><a href="#">BMW M8 Gran Coupe Base - 2021</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/7.jpg" alt="7.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$230</h5>
                                                    <h6 class="title"><a href="#">Bentley Bentayga V8 - 2020</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-2">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag blue">SPECIAL</div>
                                                <img src="images/listing/4.jpg" alt="4.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$478</h5>
                                                    <h6 class="title"><a href="#">Nıssan Qasqai - Sky Pack</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/8.jpg" alt="8.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$478</h5>
                                                    <h6 class="title"><a href="#">Ferrari 488 Spider Base - 2019</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-8">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/1.jpg" alt="1.jpg" width="850px" height="370px">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$129</h5>
                                                    <h6 class="title"><a href="#">Volvo XC90 - 2020</a></h6>
                                                </div>
                                                <div class="listing_footer">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-2">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/3.jpg" alt="3.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$230</h5>
                                                    <h6 class="title"><a href="#">BMW M8 Gran Coupe Base - 2021</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/7.jpg" alt="7.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$230</h5>
                                                    <h6 class="title"><a href="#">Bentley Bentayga V8 - 2020</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-2">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag blue">SPECIAL</div>
                                                <img src="images/listing/4.jpg" alt="4.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$478</h5>
                                                    <h6 class="title"><a href="#">Nıssan Qasqai - Sky Pack</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">FEATURED</div>
                                                <img src="images/listing/8.jpg" alt="8.jpg">
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$478</h5>
                                                    <h6 class="title"><a href="#">Ferrari 488 Spider Base - 2019</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt20">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="#" class="more_listing">Show All Cars <span class="icon"><span class="fas fa-plus"></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- We Are The Best -->
    <section class="we-are-best">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="main-title text-center">
                        <h2>We Are The Best</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="iconbox_home4_style mb30-lg">
                        <div class="icon one"><span class="flaticon-user-1"></span></div>
                        <div class="details">
                            <h4 class="title">Access to Wholesale Pricing</h4>
                            <p>CarCentive can help maximize your savings and get you the best price on your next new or pre-owned vehicle. Our sales and leasing services beat other new car brokers and dealer prices. We also assist with refinancing options as well!</p>
                            <a href="#" class="more_listing home4_style">Learn More <span
                                    class="icon"><span class="fas fa-plus"></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="iconbox_home4_style mb30-lg mt60 mt0-lg">
                        <div class="icon two"><span class="flaticon-high-five"></span></div>
                        <div class="details">
                            <h4 class="title">PRE-PURCHASE DOCUMENTATION REVIEW</h4>
                            <p>We know how to protect you from all the common car dealership tricks, expose hidden fees and get you your dream car at the best rates possible. At CarCentive, we can also review your pending purchase agreements to see if we can get you a better deal for your car.</p>
                            <a href="#" class="more_listing home4_style">Learn More <span
                                    class="icon"><span class="fas fa-plus"></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="iconbox_home4_style mb30-lg">
                        <div class="icon three"><span class="flaticon-megaphone"></span></div>
                        <div class="details">
                            <h4 class="title">EXTENSIVE EXPERIENCE</h4>
                            <p>With almost 20 years of experience in the automotive industry, we are able to shield our customers from hidden costs to get you in the car you need at the price that suits your budget.</p>
                            <a href="#" class="more_listing home4_style">Learn More <span
                                    class="icon"><span class="fas fa-plus"></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="iconbox_home4_style mb30-lg mt60 mt0-lg">
                        <div class="icon four"><span class="flaticon-headphones"></span></div>
                        <div class="details">
                            <h4 class="title">SERVING CUSTOMERS NATIONWIDE</h4>
                            <p>Clients in New Jersey, New York and Pennsylvania are not the only ones who benefit from our services. Car buyers throughout the country can experience our fantastic car buying & auto leasing services. Contact us today to learn how CarCentive can save you money anywhere in the country.</p>
                            <a href="#" class="more_listing home4_style">Learn More <span
                                    class="icon"><span class="fas fa-plus"></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our Popular Listing -->
    <section class="popular-listing pt0 pb110">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Popular Vehicles</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="home1_popular_listing home4_style">
                    <div class="listing_item_car_grid_slider ">
                        <div class="item">
                            <div class="carlisting-popular-vehicles">
                                <div class="details text-center">
                                    <div class="wrapper">
                                        <h5 class="price text-thm4">$256</h5>
                                        <h6 class="title"><a href="#">Mercedes-Benz S 560 -
                                            2021</a></h6>
                                    </div>
                                    <div class="listing_footer">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-road-perspective me-2"></span>2020</a></li>
                                            <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-gear me-2"></span>Automatic</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="thumb">
                                    <img class="img-fluid" src="images/item/1.png" alt="1.png">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carlisting-popular-vehicles">
                                <div class="details text-center">
                                    <div class="wrapper">
                                        <h5 class="price text-thm4">$129</h5>
                                        <h6 class="title"><a href="#">Volvo XC90 - 2020</a></h6>
                                    </div>
                                    <div class="listing_footer">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-road-perspective me-2"></span>2020</a></li>
                                            <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-gear me-2"></span>Automatic</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="thumb">
                                    <img class="img-fluid" src="images/item/2.png" alt="2.png">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carlisting-popular-vehicles">
                                <div class="details text-center">
                                    <div class="wrapper">
                                        <h5 class="price text-thm4">$129</h5>
                                        <h6 class="title"><a href="#">Volvo XC90 - 2020</a></h6>
                                    </div>
                                    <div class="listing_footer">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-road-perspective me-2"></span>2020</a></li>
                                            <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-gear me-2"></span>Automatic</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="thumb">
                                    <img class="img-fluid" src="images/item/3.png" alt="3.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--why choose us section-->
    <div class="container mb-5">
        <div class="row mt100 justify-content-center">
            <div class="col-lg-8">
                <div class="main-title text-center">
                    <h2>Why Choose Us?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="why_chose_us">
                    <div class="icon float-start fn-520"><span class="flaticon-price-tag"></span></div>
                    <div class="details">
                        <h5 class="title">Best Price</h5>
                        <p>Our stress-free finance department that can find financial solutions to save you money.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="why_chose_us">
                    <div class="icon float-start fn-520 style2"><span class="flaticon-price-tag"></span></div>
                    <div class="details">
                        <h5 class="title">Trusted By Thousands</h5>
                        <p>Our stress-free finance department that can find financial solutions to save you money.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="why_chose_us">
                    <div class="icon float-start fn-520 style3"><span class="flaticon-price-tag"></span></div>
                    <div class="details">
                        <h5 class="title">Wide Range of Brands</h5>
                        <p>Our stress-free finance department that can find financial solutions to save you money.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Funfact -->
    <section class="our-funfact pt50 pb30">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="funfact_one text-center">
                        <div class="details">
                            <div class="timer">27600</div>
                            <p class="ff_title">CARS FOR SALE</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="funfact_one text-center">
                        <div class="details">
                            <div class="timer">6500</div>
                            <p class="ff_title">DEALER REVIEWS</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="funfact_one text-center">
                        <div class="details">
                            <div class="timer">8230</div>
                            <p class="ff_title">VISITORS PER DAY</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="funfact_one text-center">
                        <div class="details">
                            <div class="timer">5250</div>
                            <p class="ff_title">VERIFIED DEALERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials  -->
    <section class="our-testimonials-home1 pt120 pb120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_slider_home1">
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Delivery Divider -->
    <section class="divider home4_style parallax" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="posr">
                        <div class="home1_divider_video_pop">
                            <div class="video_popup_icon">
                                <a class="video_popup_btn popup-img popup-youtube"
                                   href="https://www.youtube.com/watch?v=R7xbhKIiw4Y">
                                    <span class="flaticon-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xl-5">
                    <div class="home1_divider_content">
                        <h2 class="title">We Make Finding The Right Car Simple</h2>
                        <p class="para">At CarCentive what matters to us is making your car search and buying experience as
                            simple as possible, so you can find the right car quickly and get on with making it
                            yours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- featured vehiches-->
    <section class="car-for-sale bgc-f9">
        <div class="container p0">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="main-title text-center">
                        <h2 class="title">Recently Leased Cars</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="home1_popular_listing home3_style">
                    <div class="listing_item_4grid_slider nav_none">
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-listing">
                                <div class="thumb">
                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <a href="#"><button type="button" class="btn dbxshad btn-lg btn-thm2 circle m-3">Load More. . . </button></a>
            <a href="#"><button type="button" class="btn dbxshad btn-lg btn-thm2 circle m-3">Follow Us on Instagram</button></a>
        </div>
    </section>


    <!-- Our Blog -->
    <section class="our-blog pb90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="for_blog">
                        <div class="thumb">
                            <div class="tag">BLOG</div>
                            <img class="img-whp" src="images/blog/1.jpg" alt="1.jpg">
                        </div>
                        <div class="details">
                            <div class="wrapper">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-user"></span>Brooklyn Simmons</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-chat"></span>12 Comments</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="#">2021 BMW 540i M Sport Review: Light on Sport, Heavy on Tech</a></h4>
                                <a href="#" class="more_listing">Read More <span class="icon"><span class="fas fa-plus"></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="for_blog">
                        <div class="thumb">
                            <div class="tag">SUV</div>
                            <img class="img-whp" src="images/blog/2.jpg" alt="2.jpg">
                        </div>
                        <div class="details">
                            <div class="wrapper">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-user"></span>Brooklyn Simmons</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-chat"></span>12 Comments</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="#">2022 Volkswagen Taos First Drive: Exactly as Good as It Needs to Be</a></h4>
                                <a href="#" class="more_listing">Read More <span class="icon"><span class="fas fa-plus"></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="for_blog">
                        <div class="thumb">
                            <div class="tag">2021</div>
                            <img class="img-whp" src="images/blog/3.jpg" alt="3.jpg">
                        </div>
                        <div class="details">
                            <div class="wrapper">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-user"></span>Brooklyn Simmons</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-chat"></span>12 Comments</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="#">2021 Kia Sorento Hybrid Review: Big Vehicle With Small-Vehicle Fuel Economy</a></h4>
                                <a href="#" class="more_listing">Read More <span class="icon"><span class="fas fa-plus"></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Service Section Area -->
    <section class="our-service bgc-f9 pt0">
        <div class="container">
            <div class="row">
                    <div class="service_include">
                        <h3 class="title">Car Lease Deals By Make</h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="si_list">
                                    <ul class="mb0 order_list list-style-check-circle check_theme_color">
                                        <li><a href="#">General Automotive Repair</a></li>
                                        <li><a href="#">Preventative Car Maintenance</a></li>
                                        <li><a href="#">Air Conditioning and Heater Service</a></li>
                                        <li><a href="#">Cooling System and Radiator Repair</a></li>
                                        <li><a href="#">Synthetic Motor Oil Replacement</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="si_list">
                                    <ul class="mb0 order_list list-style-check-circle check_theme_color">
                                        <li><a href="#">General Automotive Repair</a></li>
                                        <li><a href="#">Preventative Car Maintenance</a></li>
                                        <li><a href="#">Air Conditioning and Heater Service</a></li>
                                        <li><a href="#">Cooling System and Radiator Repair</a></li>
                                        <li><a href="#">Synthetic Motor Oil Replacement</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="si_list">
                                    <ul class="mb0 order_list list-style-check-circle check_theme_color">
                                        <li><a href="#">General Automotive Repair</a></li>
                                        <li><a href="#">Preventative Car Maintenance</a></li>
                                        <li><a href="#">Air Conditioning and Heater Service</a></li>
                                        <li><a href="#">Cooling System and Radiator Repair</a></li>
                                        <li><a href="#">Synthetic Motor Oil Replacement</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="si_list">
                                    <ul class="mb0 order_list list-style-check-circle check_theme_color">
                                        <li><a href="#">General Automotive Repair</a></li>
                                        <li><a href="#">Preventative Car Maintenance</a></li>
                                        <li><a href="#">Air Conditioning and Heater Service</a></li>
                                        <li><a href="#">Cooling System and Radiator Repair</a></li>
                                        <li><a href="#">Synthetic Motor Oil Replacement</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>




    <!--newslatter section-->
    <?php
    include("include/newslatter.php");
    ?>


    <!--footer section and go to top button-->
    <?php
    include("include/footer.php");
    ?>

<!-- Wrapper End -->



<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/isotop.js"></script>
<script src="js/snackbar.min.js"></script>
<script src="js/simplebar.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scrollto.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/progressbar.js"></script>
<script src="js/slider.js"></script>
<script src="js/timepicker.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages -->
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Mar 2022 06:00:18 GMT -->
</html>