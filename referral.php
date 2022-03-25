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
                <?php
                include("include/referral_form.php");
                ?>
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