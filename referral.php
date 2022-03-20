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
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_content">
                        <h2 class="breadcrumb_title">Referral Program</h2>
                        <p class="subtitle"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Forms Section Area -->
    <section class="service-forms bgc-f9">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="service_form mb30-sm">
                        <h5 class="title">REFER FRIENDS & EARN!</h5>
                        <div class="contact_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Referral's Name: <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Referral's Email Address: <span style="color: red;">*</span></label>
                                        <input class="form-control email" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Referral's Phone Number: <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Your Name: <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Your Email Address: <span style="color: red;">*</span></label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Your Phone Number: <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb30-md">
                                        <label for="comment">Comment <span style="color: red">*</span></label>
                                        <textarea class="form-control" id="comment" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <button type="button" class="btn btn-thm">Request Service</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="opening_hour_widgets">
                        <div class="wrapper">
                            <h4 class="title">Opening hours</h4>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="day">Monday</div>
                                    </div>
                                    <span class="schedule">08:00 - 19:00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="day">Tuesday</div>
                                    </div>
                                    <span class="schedule">08:00 - 19:00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="day">Wednesday</div>
                                    </div>
                                    <span class="schedule">08:00 - 19:00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="day">Thursday</div>
                                    </div>
                                    <span class="schedule">08:00 - 19:00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="day">Friday</div>
                                    </div>
                                    <span class="schedule">08:00 - 19:00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="day">Saturday</div>
                                    </div>
                                    <span class="schedule">08:00 - 18:00</span>
                                </li>
                            </ul>
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