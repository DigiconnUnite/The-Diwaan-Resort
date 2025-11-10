
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>The Diwaan Restaurant - Contact Us</title>
<!-- Stylesheets -->
    <?php include 'components/links.php' ?>

</head>

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
                <div class="sub_text"> <p> Get in touch with The Diwaan Restaurant - <span class="primary-color"> where tradition meets excellence.</span></p> </div>
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
                            <img src="images/resource/form-img-1.jpg" alt="The Diwaan Restaurant">
                        </div>
                        <div class="card-content">
                            <h5> visit us </h5>
                            <div class="text">
                                The Diwaan Restaurant, Colombo, Sri Lanka <br> <br>
                                <span class="c-info-ttl"> Lunch Time </span> - 11.00 am – 3:00 pm <br>  <span class="c-info-ttl">Dinner Time </span> - 06.00 pm – 11:00 pm <br>  <br>
                                <span class="more-link"> Booking : <a href="tel:+94-11-1234567">+94-11-1234567</a> </span> <br>
                                <span class="more-link"> Email: <a href="mailto:info@diwaanrestaurant.com">info@diwaanrestaurant.com</a></span>
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
                            <div class="text desc">Have questions about our menu, reservations, or anything else? We'd love to hear from you!</div>
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

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>


<?php include'components/script.php'?>

</body>

</html>