<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>The Diwaan Restaurant - Book A Table</title>
    <!-- Stylesheets -->
    <?php include 'components/links.php' ?>

</head>

<?php
include 'components/mail.php';

$message = '';
$showModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'persons' => $_POST['persons'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
        'message' => $_POST['message']
    ];

    // Send admin notification
    $adminSent = sendAdminNotification($formData, 'Table Reservation');

    // Send user confirmation
    $userSent = sendUserConfirmation($formData['email'], $formData['name'], 'table reservation');

    if ($adminSent && $userSent) {
        $message = 'Thank you for your reservation! We have sent a confirmation email.';
        $showModal = true;
    } else {
        $message = 'There was an error processing your reservation. Please try again.';
    }
}
?>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <?php include 'components/preloader.php' ?>
        <!-- Preloader End -->

        <!-- Main Header-->
        <?php include 'components/header.php' ?>

        <!--End Main Header -->

        <!--Reservation Section-->
        <section class="reserve-section style-two reserve-page section-kt">
            <div class="image-layer" style="background-image: url(images/background/banner-menu.webp);"></div>
            <div class="auto-container">
                <div class="outer-box">
                    <div class="row clearfix">

                        <div class="reserv-col col-lg-8 col-md-12 col-sm-12 mx-auto">
                            <div class="inner">
                                <div class="title-box centered">
                                    <div class="subtitle"><span>reserve your experience</span></div>
                                    <h2>Reserve Your Royal Feast</h2>
                                    <div class="request-info">For reservations call <a href="#">+91-7838886804</a> or
                                        complete the form below</div>
                                </div>
                                <div class="default-form reservation-form">
                                    <form method="post" action="book-table.php">
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="name" value="" placeholder="Your Name"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="email" name="email" value="" placeholder="Your Email"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="tel" name="phone" value="" placeholder="Phone Number"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <span class="alt-icon far fa-user"></span>
                                                    <select name="persons" class="l-icon">
                                                        <option>1 Person</option>
                                                        <option>2 Person</option>
                                                        <option>3 Person</option>
                                                        <option>4 Person</option>
                                                        <option>5 Person</option>
                                                        <option>6 Person</option>
                                                        <option>7 Person</option>
                                                    </select>
                                                    <span class="arrow-icon far fa-angle-down"></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <span class="alt-icon far fa-calendar"></span>
                                                    <input class="l-icon datepicker" type="text" name="date" value=""
                                                        placeholder="DD-MM-YYYY" required readonly>
                                                    <span class="arrow-icon far fa-angle-down"></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                                <div class="field-inner">
                                                    <span class="alt-icon far fa-clock"></span>
                                                    <select name="time" class="l-icon">
                                                        <option>12 : 00 pm</option>
                                                        <option>01 : 00 pm</option>
                                                        <option>02 : 00 pm</option>
                                                        <option>03 : 00 pm</option>
                                                        <option>04 : 00 pm</option>
                                                        <option>05 : 00 pm</option>
                                                        <option>06 : 00 pm</option>
                                                        <option>07 : 00 pm</option>
                                                        <option>08 : 00 pm</option>
                                                        <option>09 : 00 pm</option>
                                                        <option>10 : 00 pm</option>
                                                        <option>11 : 00 pm</option>
                                                    </select>
                                                    <span class="arrow-icon far fa-angle-down"></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-inner">
                                                    <textarea name="message"
                                                        placeholder="Special Requests or Dietary Preferences"
                                                        required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-inner">
                                                    <button type="submit" class="theme-btn btn-style-one clearfix">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">reserve your table</span>
                                                            <span class="text-two">reserve your table</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--Main Footer-->
        <?php include 'components/footer.php' ?>

    </div>
    <!--End pagewrapper-->

    <!-- Thank You Modal -->
    <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="thankYouModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="thankYouModalLabel">Thank You!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $message; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <?php include 'components/script.php' ?>

    <script>
        <?php if ($showModal): ?>
            $(document).ready(function () {
                $('#thankYouModal').modal('show');
            });
        <?php endif; ?>
    </script>

</body>

</html>