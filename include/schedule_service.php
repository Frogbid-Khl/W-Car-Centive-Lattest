<!-- Service Forms Section Area -->
<?php
if(isset($_POST['submit'])){

    $fname= $db->checkValue($_POST['fname']);
    $lname= $db->checkValue($_POST['lname']);
    $phone= $db->checkValue($_POST['phone']);
    $email= $db->checkValue($_POST['email']);
    $message= $db->checkValue($_POST['message']);

    $lease_transfer = $db->insertQuery("INSERT INTO `lease_transfer`( `f_name`, `l_name`, `email`, `phone`, `message`) 
        VALUES ('$fname','$lname','$email', '$phone','$message')");

    if($lease_transfer == true){
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Congratulation',
                text: 'We have received your information! You will be updated soon.'
            }).then(function() {
                window.location = "lease_transfer.php";
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
                window.location = "lease_transfer.php";
            });
        </script>
        <?php
    }
}
?>




<section class="service-forms bgc-f9">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xl-8">
                <div class="service_form mb30-sm">
                    <h5 class="title">Schedule Service</h5>
                    <div class="contact_form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">First Name</label>
                                        <input class="form-control" name="fname" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Last Name</label>
                                        <input class="form-control" name="lname" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Email</label>
                                        <input class="form-control email" name="email" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Phone</label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" type="text" name="message"></textarea>
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