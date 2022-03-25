<?php
if(isset($_POST['submit'])){

    $rname= $db->checkValue($_POST['rname']);
    $remail= $db->checkValue($_POST['remail']);
    $rphone= $db->checkValue($_POST['rphone']);
    $name= $db->checkValue($_POST['name']);
    $email= $db->checkValue($_POST['email']);
    $phone= $db->checkValue($_POST['phone']);
    $message= $db->checkValue($_POST['message']);

    $contact = $db->insertQuery("INSERT INTO `referral`(`r_name`, `r_email`, `r_phone`, `y_name`, `y_email`, `y_phone`, `comments`) 
VALUES ('$rname','$remail','$rphone','$name','$email','$phone','$message')");

    if($contact == true){
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Congratulation',
                text: 'We have received your information! You will be updated soon.'
            }).then(function() {
                window.location = "referral.php";
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
                window.location = "referral.php";
            });
        </script>
        <?php
    }
}
?>
<div class="col-md-7 col-xl-8">
    <div class="service_form mb30-sm">
        <h5 class="title">REFER FRIENDS & EARN!</h5>
        <div class="contact_form">
            <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label">Referral's Name: <span style="color: red;">*</span></label>
                        <input class="form-control" type="text" name="rname" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label">Referral's Email Address: <span style="color: red;">*</span></label>
                        <input class="form-control email" type="email" name="remail" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-4">
                        <label class="form-label">Referral's Phone Number: <span style="color: red;">*</span></label>
                        <input class="form-control" type="text" name="rphone" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label">Your Name: <span style="color: red;">*</span></label>
                        <input class="form-control" type="text" name="name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label">Your Email Address: <span style="color: red;">*</span></label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label">Your Phone Number: <span style="color: red;">*</span></label>
                        <input class="form-control" type="text" name="phone" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb30-md">
                        <label for="comment">Comment <span style="color: red">*</span></label>
                        <textarea class="form-control" id="comment" rows="3" name="message" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-0">
                        <button type="submit" class="btn btn-thm" name="submit">Request Service</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>