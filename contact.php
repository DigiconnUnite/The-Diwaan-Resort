<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>The Diwaan Restaurant - Contact Us</title>
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
        'message' => $_POST['message']
    ];

    // Send admin notification
    $adminSent = sendAdminNotification($formData, 'Contact Form');

    // Send user confirmation
    $userSent = sendUserConfirmation($formData['email'], $formData['name'], 'message');

    if ($adminSent && $userSent) {
        $message = 'Thank you for your message! We have sent a confirmation email.';
        $showModal = true;
    } else {
        $message = 'There was an error sending your message. Please try again.';
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
    
   

    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-4.jpg);"></div>
        <div class="auto-container">
            <div class="inner">
                <h1>Contact Us</h1>
                <div class="sub_text"> <p> Connect with The Diwaan Restaurant - <span class="primary-color"> where royal flavors await your arrival.</span></p> </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <!--Contact Info Section-->
    <section class="contact-page section-kt">

        <!--Location form Section-->
        <div class="auto-container">
            <div class="c-page-form-box">
                <div class="row clearfix">

                <!--form image Section-->
                <div class="loc-block info-block col-lg-5 col-md-12 col-sm-12">
                    <div class="visit-us-card">
                        <div class="contact-image">
                            <img src="images/contact/contact-1.JPG" alt="The Diwaan Restaurant">
                        </div>
                        <div class="card-content">
                            <h5> visit us </h5>
                            <div class="text">
                                The Diwaan Restaurant, Fatehabad Rd, Agra, Uttar Pradesh 282006 <br> <br>

                                <span class="more-link"> Reservations : <a href="tel:+91-987-6543210">+91-987-6543210</a> </span> <br>
                                <span class="more-link"> Email: <a href="mailto:reservations@diwaanagra.com">reservations@diwaanagra.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Vertical line -->
                <div class="col-12 col-md-1 d-flex justify-content-center middle-line-wrapper">
                  <div class="middle-line-container">
                    <div class="dot top-dot"></div>
                    <div class="v-line"></div>
                    <div class="dot bottom-dot"></div>
                  </div>
                </div>

                <!--form Section-->
                <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                    <div class="form-side">
                        <div class="title-box centered">
                            <div class="subtitle"><span>Write to us</span></div>
                            <h2>Message Us</h2>
                            <div class="text desc">Planning a special celebration or have dietary preferences? Our team is delighted to assist with your royal dining experience!</div>
                        </div>
                        <div class="default-form reservation-form">
                            <form method="post" action="contact.php">
                                <div class="clearfix">
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="name" value="" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="email" name="email" value="" placeholder="Your Email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="field-inner">
                                            <input type="tel" name="phone" value="" placeholder="Phone Number" required="">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Your Message" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one clearfix">
                                            <span class="btn-wrap">
                                                <span class="text-one">Send Message</span>
                                                <span class="text-two">Send Message</span>
                                            </span>
                                        </button>
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
   <?php include 'components/footer.php'?>

</div>
<!--End pagewrapper-->

<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="thankYouModalLabel" aria-hidden="true">
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

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>


<?php include'components/script.php'?>

<script>
<?php if ($showModal): ?>
$(document).ready(function() {
   $('#thankYouModal').modal('show');
});
<?php endif; ?>
</script>

</body>

</html>