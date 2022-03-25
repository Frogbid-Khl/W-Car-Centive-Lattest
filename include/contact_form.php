<?php
if(isset($_POST['submit'])){

    $fname= $db->checkValue($_POST['fname']);
    $lname= $db->checkValue($_POST['lname']);
    $email= $db->checkValue($_POST['email']);
    $phone= $db->checkValue($_POST['phone']);
    $message= $db->checkValue($_POST['message']);

    $contact = $db->insertQuery("INSERT INTO `contact`(`f_name`, `l_name`, `email`, `phone`, `message`) 
VALUES ('$fname','$lname','$email','$phone','$message')");

    if($contact == true){
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Congratulation',
                text: 'We have received your information! You will be updated soon.'
            }).then(function() {
                window.location = "contact.php";
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
                window.location = "contact.php";
            });
        </script>
        <?php
    }
}
?>

<div class="col-md-8">
    <div class="form_grid">
        <div class="wrapper">
            <h3 class="title mb20">Contact Form</h3>
            <form class="contact_form" action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">First Name*</label>
                            <input class="form-control" type="text" placeholder="TUF" name="fname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Last Name*</label>
                            <input class="form-control" type="text" placeholder="carcentive@gmail.com" name="lname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Email*</label>
                            <input class="form-control email" type="email" placeholder="carcentive@gmail.com" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Phone*</label>
                            <input class="form-control" type="text" placeholder="Phone" name="phone" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Message*</label>
                            <textarea class="form-control" rows="6" name="message" required></textarea>
                        </div>
                        <div class="form-group mb0">
                            <button type="submit" class="btn btn-thm" name="submit">Get In Touch</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>