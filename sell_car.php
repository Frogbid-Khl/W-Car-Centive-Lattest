<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php
    include("include/css.php");
    ?>


    <?php
    if(isset($_POST['submit'])){
        $fname= $db->checkValue($_POST['fname']);
        $lname= $db->checkValue($_POST['lname']);
        $phone= $db->checkValue($_POST['phone']);
        $email= $db->checkValue($_POST['email']);
        $vin= $db->checkValue($_POST['vin']);
        $year= $db->checkValue($_POST['year']);
        $make= $db->checkValue($_POST['make']);
        $model= $db->checkValue($_POST['model']);
        $trim= $db->checkValue($_POST['trim']);
        $loan= $db->checkValue($_POST['loan']);
        $mile= $db->checkValue($_POST['mile']);
        $exterior= $db->checkValue($_POST['exterior']);
        $additional= $db->checkValue($_POST['additional']);
        $accident= $db->checkValue($_POST['accident']);
        $comment= $db->checkValue($_POST['comment']);
        $img= $_FILES['img']['name'];


        $img_name = rand(1000,10000)."-".$img;

        $ext = explode(".",$img_name);

        $cn = count($ext);

        if($ext[$cn-1] == 'jpg' || $ext[$cn-1] =='png' || $ext[$cn-1] =='jpeg'){
            $tname = $_FILES['img']['tmp_name'];
            $upload = '../car_sell_img';
            move_uploaded_file($tname,$upload.'/'.$img_name);
            $sell_car = $db->insertQuery("INSERT INTO `sell_car`(`f_name`, `l_name`, `email`, `phone`, `vin`, `year`, `make`, `model`, `trim_level`, `loan_balance`, `miles`, 
                       `exterior`, `additional_feature`, `accident`, `comment`, `image`) VALUES ('$fname','$lname','$email','$phone','$vin',
                                                                                                                             '$year','$make','$model','$trim','$loan',
                                                                                                                             '$mile','$exterior','$additional','$accident','$comment',
                                                                                                                             '$img_name')");
        if($sell_car == true){
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Congratulation',
                    text: 'We have received your information! You will be updated soon.'
                }).then(function() {
                    window.location = "sell_car.php";
                });
            </script>
        <?php
        }else{
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Opps...',
                    text: 'Something went wrong!',
                    window.location.href = "index.php";
                }).then(function() {
                    window.location = "sell_car.php";
                });
            </script>
        <?php
        }
        } else{
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Opps...',
                    text: 'File extension is not supported. Please upload png, jpg or jpeg file!',
                    window.location.href = "../sell_car.php";
                }).then(function() {
                    window.location = "sell_car.php";
                });
            </script>

            <?php

        }
    }
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
    <div class="container p-3" style="margin-top: 200px">
        <h1>Sell Your Car</h1>
        <h5><span style="color: #004faa; font-weight: bold; font-size: 16px;">Step 1:</span> Share a few vehicle details in the form below. A member of our team will contact you with a real offer. No haggling. No hassles.</h5>
        <h5><span style="color: #004faa; font-weight: bold; font-size: 16px;">Step 2:</span> After your initial offer is received consider Leasing or Trading In for your new Vehicle. We will be happy to discuss both options with you.</h5>
        <h5><span style="color: #004faa; font-weight: bold; font-size: 16px;">Step 3:</span> After a quick on-site inspection review of your vehicle takes place, you will receive either the payment for your sale or the Keys to your new Car!</h5>

        <form action="" class="mt-3" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">First Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Last Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="lname" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Phone No. <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Email <span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Vin <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="vin" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Year <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="year" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Make <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="make" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Model <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="model" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Trim Level <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="trim" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Lease Payoff or Loan Balance</label>
                        <input type="text" class="form-control" name="loan">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Miles <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="mile" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb20">
                        <label class="form-label">Exterior <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="exterior" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb20">
                        <label class="form-label">Additional Feature <span style="color: red">*</span></label>
                        <input type="text" class="form-control" placeholder="Ex. - Leather, Pano sunroof, GPS, etc..." name="additional" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shortcode_widget_radiobox mb30-md">
                        <label class="form-label">Has Your vehicle been involved in an accident? <span style="color: red">*</span></label>
                        <div class="ui_kit_radiobox">
                            <div class="radio">
                                <input id="radio_one" name="accident" type="radio" checked="" value="yes">
                                <label for="radio_one"><span class="radio-label"></span> Yes</label>
                            </div>
                            <div class="radio">
                                <input id="radio_two" name="accident" type="radio" value="no">
                                <label for="radio_two"><span class="radio-label"></span> No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group mb30-md">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <input type="file" name="img" required>
                </div>
            </div>
            <button type="submit" class="btn btn-signup btn-thm m-3" name="submit">Submit</button>
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