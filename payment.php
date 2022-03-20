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

    <div class="row mx-auto">
        <div class="shortcode_widget_tab">
            <h2 class="m-3">MAKE A PAYMENT</h2>

            <div class="ui_kit_tab style2 mt30">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home2"><span class="heading-color">
Credit Card</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#menu4"><span class="heading-color">ACH Debit</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home2" class="container tab-pane active">
                        <h2>Credit Card Payment</h2>

                        <form action="#" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone No.</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb20">
                                        <label class="form-label">Reference what payment is for</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb20">
                                        <label class="form-label">Enter Payment Amount (USD)</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb20">
                                        <label class="form-label">Enter Card Number</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb20">
                                        <label class="form-label">Enter Exp. Date</label>
                                        <input type="text" placeholder="MM/YY" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb20">
                                        <label class="form-label">Enter CVC</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-signup btn-thm mb0">Pay Now</button>
                        </form>

                    </div>
                    <div id="menu4" class="container tab-pane fade">
                        <h2>ACH Debit Card Payment</h2>

                        <form action="#" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone No.</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb20">
                                        <label class="form-label">Reference what payment is for</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb20">
                                        <label class="form-label">Enter Payment Amount (USD)</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-signup btn-thm mb0">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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