<!-- Newslatter sectio -->

<?php
if(isset($_POST['newsletter'])){

$fname= $db->checkValue($_POST['fname']);
$lname= $db->checkValue($_POST['lname']);
$email= $db->checkValue($_POST['email']);

$newsletter = $db->insertQuery("INSERT INTO `newsletter`(`f_name`, `l_name`, `email`) VALUES ('$fname','$lname','$email')");

if($newsletter == true){
    ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Congratulation',
            text: 'We have received your information! You will be updated soon.'
        }).then(function() {
            window.location = "index.php";
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
            window.location = "index.php";
        });
    </script>
    <?php
}
}
?>
<div class="container">
    <div class="feature_icons home7_style">
        <div class="row">
            <div class="col-lg-6 col-xl-7">
                <div class="mailchimp_widget home7_style mb30-md">
                    <div class="details">
                        <h3 class="title">Subscribe our newsletter</h3>
                        <p class="para">Your download should start automatically, if not Click here. Should I give
                            up, huh?.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="footer_social_widget">
                    <form class="footer_mailchimp_form home2 home7_style" method="post" action="" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="fname" placeholder="First Name..." required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name..." required>
                            </div>

                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="Your Email..." required>
                                <button class="btn-thm mt-3" type="submit" name="newsletter">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>