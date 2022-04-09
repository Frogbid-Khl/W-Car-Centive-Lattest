
<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one home6_style transparent main-menu">
    <!-- Ace Responsive Menu -->
    <nav>
        <div class="">
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu3" class="ace-responsive-menu menu_list_custom_code wa float-start mt20 mr30"
                data-menu-style="horizontal">
                <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
            </ul>
            <a href="index.php" class="navbar_brand float-start dn-md">
                <img class="logo1 img-fluid" src="images/car_centive.png" alt="Car Centive"
                     style="width:240px;padding-bottom: 10px;">
            </a>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa float-start"
                data-menu-style="horizontal">
                <li><a href="car_search.php"><span class="title">Car Search</span></a>
                </li>
                <li><a href="#"><span class="title">Credit Application</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="payment.php">Make the Payment</a>
                        </li>
                        <li><a href="loan_calculator.php">Auto Calculator</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="title">Leasing Services</span></a>
                    <ul>
                        <li><a href="vehicle_protection.php">Vehicle Protection Service</a>
                        </li>
                        <li><a href="lease_transfer.php">Lease Transfer</a>
                        </li>
                        <li><a href="auto_insurance.php">Auto Insurance</a>
                        </li>
                    </ul>
                </li>
                <li><a href="sell_car.php"><span class="title">Sell Your Car</span></a>
                </li>
                <li><a href="rental.php"><span class="title">Rental Cars</span></a>
                </li>
                <li><a href="#">About Us</a>
                    <ul>
                        <li><a href="blog.php">Blog</a>
                        </li>
                        <li><a href="referral.php">Referral</a>
                        </li>
                        <li><a href="review.php">Reviews</a>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.php"><span class="title">Contact Us</span></a>
                </li>
            </ul>
            <!-- Responsive Menu Structure-->
        </div>
    </nav>
</header>
<!-- Modal -->
<!--<div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container p60">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                   role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content container p0" id="myTabContent">
                    <div class="row mt30 tab-pane fade show active" id="home" role="tabpanel"
                         aria-labelledby="home-tab">
                        <div class="col-lg-12">
                            <div class="login_form">
                                <p>New to Cars.com? <a href="page-register.html">Sign up.</a> Are you a dealer?</p>
                                <form action="#">
                                    <div class="mb-2 mr-sm-2">
                                        <label class="form-label">Username or email address *</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group mb5">
                                        <label class="form-label">Password *</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                        <label class="custom-control-label" for="exampleCheck3">Remember me</label>
                                        <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-thm mt5">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt30 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-lg-12">
                            <div class="sign_up_form">
                                <p>Already have a profile? <a href="page-login.html">Sign in.</a></p>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb20">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb20">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-signup btn-thm mb0">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->



<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="mobile_menu_bar">
                <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
            </div>
            <div class="mobile_menu_main_logo"><img class="logo1 img-fluid" src="images/car_centive.png"
                                                    alt="Car Centive" style="width:170px;padding-top: 10px"></div>
        </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a href="car_search.php">Car Search</a>
            </li>
            <li><a href="#">Credit Application</a>
                <ul>
                    <li><a href="payment.php">Make the Payment</a>
                    </li>
                    <li><a href="loan_calculator.php">Auto Calculator</a></li>
                </ul>
            </li>
            <li><a href="sell_car.php">Sell Your Car</a>
            </li>
            <li><a href="#">Leasing Services</a>
                <ul>
                    <li><a href="vehicle_protection.php">Vehicle Protection Service</a>
                    </li>
                    <li><a href="lease_transfer.php">Lease Transfer</a>
                    </li>
                    <li><a href="auto_insurance.php">Auto Insurance</a>
                    </li>
                </ul>
            </li>
            <li><a href="rental.php">Rental Cars</a>
            </li>
            <li><a href="#">About Us</a>
                <ul>
                    <li><a href="blog.php">Blog</a>
                    </li>
                    <li><a href="referral.php">Referral</a>
                    </li>
                    <li><a href="review.php">Reviews</a>
                    </li>
                </ul>
            </li>
            <li><a href="contact.php">Contact Us</a>
            </li>
            <!-- Only for Mobile View -->
            <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">971 Stuyvesant Ave, Suite 10, Union, New Jersey 07083</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">1-(877)-236-8483</a></span>
              <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Mon - Sat 8:00 - 18:00</a></span>
            </span>
            <span class="social-links">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
              <a href="#"><span class="fab fa-tictoc"></span></a>
            </span>
          </span>
            </li>
        </ul>
    </nav>
</div>