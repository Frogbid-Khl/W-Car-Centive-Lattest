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



    <!-- Our Contact -->
    <section class="our-contact inner_page_section_spacing bgc-f9" style="margin-top: 168px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_icon_box mb50">
                        <div class="details">
                            <h3 class="title">Contact Details</h3>
                            <p>USA —<br>971 Stuyvesant Ave,<br> Suite 10,<br>Union, New Jersey 07083</p>
                            <h4 class="subtitle">1-(877)-236-8483</h4>
                            <p>sales@carcentive.com</p>
                            <div class="footer_social_widget">
                                <ul class="mb0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include("include/contact_form.php");
                ?>
            </div>
        </div>
    </section>


    <!-- Our Contact -->
    <section class="our-contact p0 mt0 mt70-992">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h600" id="map-canvas"></div>
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