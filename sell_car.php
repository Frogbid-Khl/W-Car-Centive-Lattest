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
    <div class="container p-3">
        <h1>Sell Your Car</h1>
        <h5><span style="color: #004faa; font-weight: bold; font-size: 16px;">Step 1:</span> Share a few vehicle details in the form below. A member of our team will contact you with a real offer. No haggling. No hassles.</h5>
        <h5><span style="color: #004faa; font-weight: bold; font-size: 16px;">Step 2:</span> After your initial offer is received consider Leasing or Trading In for your new Vehicle. We will be happy to discuss both options with you.</h5>
        <h5><span style="color: #004faa; font-weight: bold; font-size: 16px;">Step 3:</span> After a quick on-site inspection review of your vehicle takes place, you will receive either the payment for your sale or the Keys to your new Car!</h5>

        <form action="#" class="mt-3" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">First Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Last Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Phone No. <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Email <span style="color: red">*</span></label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Vin <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Year <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Make <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Model <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Trim Level <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Lease Payoff or Loan Balance <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Miles <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb20">
                        <label class="form-label">Exterior <span style="color: red">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb20">
                        <label class="form-label">Additional Feature <span style="color: red">*</span></label>
                        <input type="text" class="form-control" placeholder="Ex. - Leather, Pano sunroof, GPS, etc...">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shortcode_widget_radiobox mb30-md">
                        <label class="form-label">Has Your vehicle been involved in an accident? <span style="color: red">*</span></label>
                        <div class="ui_kit_radiobox">
                            <div class="radio">
                                <input id="radio_one" name="radio" type="radio" checked="">
                                <label for="radio_one"><span class="radio-label"></span> Yes</label>
                            </div>
                            <div class="radio">
                                <input id="radio_two" name="radio" type="radio">
                                <label for="radio_two"><span class="radio-label"></span> No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group mb30-md">
                        <label for="comment">Comment <span style="color: red">*</span></label>
                        <textarea class="form-control" id="comment" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="new_property_form">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="form-label">Vehicle Pictures <span style="color: red">*</span></label>
                                <ul class="mb0 mt10">
                                    <li class="list-inline-item vat">
                                        <div class="upload_file_input_add_remove style-right mb30-sm">
                          <span class="btn_upload">
                            <input type="file" id="imag3" title="" class="input-img" placeholder="UPLOAD FILES"/>
                            <span class="">UPLOAD FILES</span>
                          </span>
                                            <img id="ImgPreview3" src="#" class="preview3" alt=""/>
                                            <button id="removeImage3" class="btn-rmv3" type="button"><span>X</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-signup btn-thm m-3">Submit</button>
        </form>
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