
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Diwaan - Restaurants HTML Template - Home 01</title>
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
    
    
    <!-- Banner Section -->
    <section class="banner-section">

        <!-- social link -->
        <div class="banner-social-list">
          <span class="line"></span>

          <ul class="custom-ul">
            <li> <a href="#"> FB </a> </li>
            <li><a href="#"> IN </a> </li>
            <li><a href="#"> YT </a> </li>
          </ul>

          <span class="line"></span>
        </div>

        <!-- social link -->
        <div class="banner-call">
          <span class="line"></span>

          <ul class="call-ul">
            <li><a href="tel:+88-123-123456">Booking : +88-123-123456</a></li>
          </ul>

          <span class="line"></span>
        </div>

        <div class="swiper banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-item">
                    <div class="image-layer" style="background: linear-gradient(to bottom, rgba(0,0,0,0.7), transparent), url(images/main-slider/hero-img.png); background-position: center center; background-size: cover; transition: all 1s ease;"></div>
                    <div class="auto-container">
                      <div class="content-box">
                              <div class="content">
                                  <div class="clearfix">
                                       <div class="inner">
                                             <div class="subtitle"><span>Delicious Taste in City</span></div>
                                                 <h1>Taste the Tradition</h1>
                                                 <div class="text">A taste of perfection in every dish - fine dining with a modern twist.</div>
                                                 <div class="links-box clearfix">
                                                     <div class="link">
                                                         <a href="menu.php" class="theme-btn btn-style-one">
                                                             <span class="btn-wrap">
                                                                 <span class="text-one">Explore Menu</span>
                                                                 <span class="text-two">Explore Menu</span>
                                                             </span>
                                                         </a>
                                                     </div>
                                                 </div>
                                       </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                 </div>
            </div>
        </div>

        <!-- Curve at bottom -->
        <!-- Default (desktop) curve -->
    <svg class="bottom-curve curve-desktop" viewBox="0 0 1440 65" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path fill="var(--color-two)" d="M0,65 C360,0 1080,0 1440,65 L1440,65 L0,65 Z" />
    </svg>

    <!-- Less curved version for tablets/mobile -->
  <svg class="bottom-curve curve-mobile" viewBox="0 0 1440 65" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path fill="var(--color-two)" d="M0,65 C480,20 960,20 1440,65 L1440,65 L0,65 Z" />
  </svg>

        <!-- Add Swiper Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Swiper Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>



    </section>
    <!--End Banner Section -->

    <!--Scrolling Banner Start -->
    <section class="scrolling-banner-section">
        <div class="rolling-gallery-container">
          <div class="rolling-gallery-outer">
            <!-- First set of images -->
            <div class="rolling-image">
              <img src="images/resource/dish1.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish2.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish3.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish4.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish5.png" alt="image">
            </div>
           

            <!-- Duplicate set for seamless looping -->
            <div class="rolling-image">
              <img src="images/resource/dish1.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish2.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish3.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish4.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish5.png" alt="image">
            </div>
            <!-- Duplicate set for seamless looping -->
            <div class="rolling-image">
              <img src="images/resource/dish1.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish2.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish3.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish4.png" alt="image">
            </div>
            <div class="rolling-image">
              <img src="images/resource/dish5.png" alt="image">
            </div>
            
          </div>
        </div>
    </section>
    <!--Scrolling Banner End -->



 


    <!--Fluid Section-->
    <section class="fluid-section story-section chef-bio">
        <div class="outer-container">
            <div class="row clearfix">

                <!--Col-->
                <div class="content-col col-xl-6 col-lg-6 col-md-12 col-sm-12">

                    <div class="inner clearfix wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content-box">
                            <div class="title-box ">
                                <div class="subtitle"><span>About Us </span></div>
                                <h2>Exquisite Flavors, <span class="theme_color">Elegant Ambiance</span></h2>
                           <div class="text text-start">At The Diwaan, we are committed to providing an exceptional dining experience that blends traditional Indian flavors with contemporary elegance. Our menu features authentic dishes crafted from the finest ingredients, ensuring every meal is a celebration of taste and culture.</div>

                            <div class="feature-info">

                            <div class="feature-info-box">
                                <div class="feature-title">
                                    <img src="images/resource/hygienic.png" alt="image">
                                    <h6>Hygienic <br> Food </h6>
                                </div>
                                <div class="infotext text-start">We adhere to strict hygiene standards to ensure your food is prepared in a clean and safe environment.</div>
                            </div>

                            <div class="feature-info-box">
                                <div class="feature-title">
                                    <img src="images/resource/ambiance.png" alt="image">
                                    <h6>fresh <br> Ambience </h6>
                                </div>
                                <div class="infotext text-start">Our restaurant offers a fresh and inviting ambiance perfect for any occasion.</div>
                            </div>

                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <!--Col-->
                <div class="image-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-layer" style="background-image: url(images/home/about-1.png);"></div>
                        <div class="image"><img src="images/home/about-1.png" alt="Chef Noor at The Diwaan"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Fluid Section-->
    <section class="fluid-section story-section chef-bio">
        <div class="outer-container">
            <div class="row clearfix">
                <!--Col-->
                <div class="image-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-layer" style="background-image: url(images/home/about-2.png);"></div>
                        <div class="image"><img src="images/home/about-2.png" alt="Chef Noor at The Diwaan"></div>
                    </div>
                </div>
                <!--Col-->
                <div class="content-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content-box">
                            <div class="title-box text-start">
                                <div class="subtitle"><span>About The Chef</span></div>
                                <h2>Exquisite Craft, <span class="theme_color">Passionate Culinary Artistry</span></h2>
                                <div class="text text-start">
                                    At The Diwaan, Chef Noor brings an extraordinary blend of authenticity and creativity to our kitchen. With each dish, he combines handpicked spices, farm-fresh ingredients, and generations-old recipes to deliver an experience that is both traditional and innovative.
                                </div>
                            </div>

                            <div class="feature-info">
                                <div class="feature-info-box">
                                    <div class="feature-title">
                                        <img src="images/resource/hygienic.png" alt="image">
                                        <h6>Carefully <br> Curated </h6>
                                    </div>
                                    <div class="infotext text-start">Each dish is made with meticulously sourced ingredients for exceptional taste and quality.</div>
                                </div>
                                <div class="feature-info-box">
                                    <div class="feature-title">
                                        <img src="images/resource/ambiance.png" alt="image">
                                        <h6>Inspired <br> Creations </h6>
                                    </div>
                                    <div class="infotext text-start">Chef Noor's menus reflect the vibrant traditions of India blended with modern flair.</div>
                                </div>
                            </div>

                            <div class="link-box">
                                <a href="our-chef.html" class="theme-btn btn-style-two clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">meet our team</span>
                                        <span class="text-two">meet our team</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Menu Tab Section-->
    <section class="menu-section section-kt">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="title-badge"> <img src="images/resource/menu-title-badge.svg" alt="image" title="image"> </div>
                <h2>Delicious Menu</h2>
            </div>

            <div class="tabs-box menu-tabs">
                <div class="buttons">
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1"><span>Starter</span></li>
                        <li class="tab-btn" data-tab="#tab-2"><span>Main Dishes</span></li>
                        <li class="tab-btn" data-tab="#tab-3"><span>Desserts</span></li>
                        <li class="tab-btn" data-tab="#tab-4"><span>WINES</span></li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish1.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Paneer Butter Masala</a></h6></div> <span class="menu-list-line"> </span> <div class="price"><span>₹330</span></div></div>
                                            <div class="text desc"><a href="#">Delicious paneer in rich butter masala sauce.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish2.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Khoya Paneer</a></h6></div> <span class="menu-list-line"> </span> <div class="price"><span>₹350</span></div></div>
                                            <div class="text desc"><a href="#">Creamy khoya paneer delicacy.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish3.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Paneer Do Pyaza</a></h6></div> <span class="menu-list-line"> </span> <div class="price"><span>₹320</span></div></div>
                                            <div class="text desc"><a href="#">Paneer with double onions.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish4.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Paneer Pasanda</a></h6></div> <span class="menu-list-line"> </span> <div class="price"><span>₹360</span></div></div>
                                            <div class="text desc"><a href="#">Stuffed paneer in rich gravy.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col img-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class="image"><img src="images/resource/menus-1.jpg" alt="image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish1.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Dal Fry</a></h6></div> <span class="menu-list-line"> </span> <div class="price"><span>₹180</span></div></div>
                                            <div class="text desc"><a href="#">Fried lentils.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish2.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Dal Tadka</a></h6></div> <span class="menu-list-line"> </span> <div class="price"><span>₹220</span></div></div>
                                            <div class="text desc"><a href="#">Lentils with tadka.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish3.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Dal Handi</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹250</span></div></div>
                                            <div class="text desc"><a href="#">Lentils in handi.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish4.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Dal Bukhara</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹340</span></div></div>
                                            <div class="text desc"><a href="#">Bukhara style lentils.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col img-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class="image"><img src="images/resource/menus-2.jpg" alt="image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish1.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Gulab Jamun 1 Pc.</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹45</span></div></div>
                                            <div class="text desc"><a href="#">Sweet gulab jamun.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish2.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Rabdi</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹110</span></div></div>
                                            <div class="text desc"><a href="#">Sweet rabdi.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish3.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Kesar Kheer</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹110</span></div></div>
                                            <div class="text desc"><a href="#">Saffron kheer.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish4.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Vanilla Ice Cream</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹100</span></div></div>
                                            <div class="text desc"><a href="#">Vanilla ice cream.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col img-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class="image"><img src="images/resource/menus-desert.jpg" alt="image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-4">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish1.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Virgin Mojito</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹140</span></div></div>
                                            <div class="text desc"><a href="#">Non-alcoholic mojito.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish2.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Mint Mojito</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹160</span></div></div>
                                            <div class="text desc"><a href="#">Mint flavored mojito.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish3.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Blue Curacao</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹180</span></div></div>
                                            <div class="text desc"><a href="#">Blue curacao drink.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/dish4.png" alt="image"></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h6><a href="#">Pina Colada Sysal</a></h6></div> <span class="menu-list-line"> </span>  <div class="price"><span>₹200</span></div></div>
                                            <div class="text desc"><a href="#">Pina colada drink.</a></div>
                                        </div>
                                    </div>
                                    <div class="view-more-box">
                                        <a href="menu.php" class="theme-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">View More</span>
                                                <span class="text-two">View More</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col img-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class="image"><img src="images/resource/menus-wine.jpg" alt="image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="open-timing">
                <div class="hours">During winter daily from <span class="theme_color">7:00 pm</span> to <span class="theme_color">9:00 pm</span></div>
                <div class="link-box">
                    <a href="menu.php" class="theme-btn btn-style-two clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">view all menu</span>
                            <span class="text-two">view all menu</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Why Us Section-->
    <section class="why-us-two section-kt">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>why choose us</span></div>
                <h2>Why Dine With Us</h2>
            </div>
            <div class="row clearfix">
                <!--Block-->
                <div class="why-block-two col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <img src="images/resource/why1.jpg" alt="Skilled Chef">
                            <div class="image-frame"></div>
                        </div>
                        <div class="over-box">
                            <h6>skilled chef</h6>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block-two col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <img src="images/resource/why2.jpg" alt="Hygienic Food">
                            <div class="image-frame"></div>
                        </div>
                        <div class="over-box">
                            <h6>hygienic food</h6>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block-two col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image-box">
                            <img src="images/resource/why3.jpg" alt="Fresh Ambience">
                            <div class="image-frame"></div>
                        </div>
                        <div class="over-box">
                            <h6>Fresh ambience</h6>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block-two col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="900ms">
                        <div class="image-box">
                            <img src="images/resource/why4.jpg" alt="Secret Recipe">
                            <div class="image-frame"></div>
                        </div>
                        <div class="over-box">
                            <h6>secret recipe</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="fact-counter">
                <div class="row clearfix">
                    <div class="fact-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="60" data-speed="2000">0</span><i>+</i></div></div>
                            <div class="fact-title">monthly visitors</div>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been. </p>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="22" data-speed="1500">0</span><i>+</i></div></div>
                            <div class="fact-title">positive reviews</div>
                            <p> Simply dummy text of the printing and typesetting industry lorem Ipsum has been. </p>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="135" data-speed="1000">0</span><i>+</i></div></div>
                            <div class="fact-title">secreat recipe</div>
                            <p> Simply dummy text of the printing and typesetting lorem Ipsum has been industry. </p>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="10" data-speed="1000">0</span><i>+</i></div></div>
                            <div class="fact-title">award & honnors</div>
                            <p> Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonials Section-->
    <section class="testimonials-two section-kt">
        <div class="auto-container">
            
            <div class="title-box centered">
                <div class="subtitle"><span>testimonials</span></div>
                <h2>What People Are Saying</h2>
            </div>
            <div class="carousel-box">
                <div class="testimonial-slider owl-theme owl-carousel">
                    <!--Slide Item-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">A perfect blend of mouthwatering dishes, warm atmosphere, and outstanding service. Every meal feels like a special occasion worth savoring!</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-4.jpg" alt="image"></div>
                                <div class="auth-title">willium joe -<span class="location">New York</span> </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">Every visit is a flavorful journey! Delicious food, elegant ambiance, and welcoming staff make this restaurant a true dining destination.</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-5.jpg" alt="image"></div>
                                <div class="auth-title">Theresa Tin -<span class="location"> Chicago</span> </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">From appetizers to desserts, every bite bursts with perfection. A cozy atmosphere and exceptional service make each visit unforgettable.</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-6.jpg" alt="image"></div>
                                <div class="auth-title">Michel Byrd -<span class="location"> New York</span> </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">The taste of food was really amazing, Wow ! outstanding dinner made by Mater chef John Rute, I never forget this delicious food experience.</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-4.jpg" alt="image"></div>
                                <div class="auth-title">willium joe -<span class="location"> New York</span></div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">Hygienic food & fresh enviroment, everyone had a wonderful delite experience. It was FABULOUS! great experience at The Italian gourmet.</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-5.jpg" alt="image"></div>
                                <div class="auth-title">Theresa Tin -<span class="location"> Chicago</span></div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            <div class="text">Special treat to dine, It was wow experience food was really delicious! outstanding dinner made by Mater chef, food experience was unfogetable!</div>
                            <div class="auth-info">
                                <div class="image"><img src="images/resource/author-thumb-6.jpg" alt="image"></div>
                                <div class="auth-title">Michel Byrd -<span class="location"> Denmark</span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Reservation Section-->
    <section class="fluid-section reserve-section splitscreen">
        <div class="outer-container">
            <div class="outer-box">
                <div class="row clearfix">
                    <div class="reserv-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="title-box centered">
                                <div class="subtitle"><span>Online reservation</span></div>
                                <h2>Book A Table</h2>
                                <div class="request-info">Booking request <a href="#">+88-123-123456</a> or fill out the order form</div>
                            </div>
                            <div class="default-form reservation-form">
                                <form method="post" action="https://kalanidhithemes.com/live-preview/landing-page/Diwaan/all-demo/Diwaan-2-Standard-Hero/index.html">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="fieldname" value="" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="fieldname" value="" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <span class="alt-icon far fa-user"></span>
                                                <select class="l-icon">
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
                                                <input class="l-icon datepicker" type="text" name="fieldname" value="" placeholder="DD-MM-YYYY" required readonly>
                                                <span class="arrow-icon far fa-angle-down"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <span class="alt-icon far fa-clock"></span>
                                                <select class="l-icon">
                                                    <option>08 : 00 am</option>
                                                    <option>09 : 00 am</option>
                                                    <option>10 : 00 am</option>
                                                    <option>11 : 00 am</option>
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
                                                </select>
                                                <span class="arrow-icon far fa-angle-down"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <textarea name="fieldname" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                
                                                <button type="submit" class="theme-btn btn-style-one clearfix">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">book a table</span>
                                                        <span class="text-two">book a table</span>
                                                    </span>
                                                </button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="graphic-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="graphic-layer" style="background-image: url(images/background/reservation-bg.jpg);"></div>
                            <div class="image"><img src="images/background/reservation-bg.jpg" alt="image"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Recnt Updates Section-->
    <section class="news-section section-kt">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>recent updates</span></div>
                <h2>Latest Blog Post</h2>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <div class="image rounded"><a href="blog-single-post.html"><img src="images/resource/news-2.jpg" alt="image"></a></div>
                            <div class="over-content">
                                <div class="date">30 <span>May | 2025</span></div>
                                <div class="cat">Food, flavour</div>
                                <h4><a href="blog-single-post.html">So yummy, tasty, you'll eat with your eyes.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            
                            <div class="image"><a href="blog-single-post.html"><img src="images/resource/news-1.jpg" alt="image"></a></div>
                            <div class="over-content">
                                <div class="date">25 <span>May | 2025</span></div>
                                <div class="cat">healthy food</div>
                                <h4><a href="blog-single-post.html">Chef’s signature for refined tastes ever.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image-box">
                            <div class="image rounded"><a href="blog-single-post.html"><img src="images/resource/news-3.jpg" alt="image"></a></div>
                            <div class="over-content">
                                <div class="date">18 <span>May | 2025</span></div>
                                <div class="cat">recipie</div>
                                <h4><a href="blog-single-post.html">Experience gourmet art and ambience.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="lower-link-box text-center">
                <a href="blog-list.html" class="theme-btn btn-style-two clearfix">
                    <span class="btn-wrap">
                        <span class="text-one">Read more blog</span>
                        <span class="text-two">Read more blog</span>
                    </span>
                </a>
            </div>
            
        </div>
    </section>

       <!--Gallery Section-->
    <section class="image-gallery section-kt">
        <div class="carousel-box">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>Gallery</span></div>
                    <h2>Diwaan Gallery</h2>
                </div>

                <div class="image-gallery-slider owl-theme owl-carousel">
                    <!--Slide Item-->
                    <div class="gallery-block">
                        <div class="image"><a href="images/gallery/gallery-1-big.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/gallery/gallery-1-sm.jpg" alt="image"></a></div>
                    </div>

                    <!--Slide Item-->
                    <div class="gallery-block">
                        <div class="image"><a href="images/gallery/gallery-2-big.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/gallery/gallery-2-sm.jpg" alt="image"></a></div>
                    </div>

                    <!--Slide Item-->
                    <div class="gallery-block">
                        <div class="image"><a href="images/gallery/gallery-3-big.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/gallery/gallery-3-sm.jpg" alt="image"></a></div>
                    </div>

                    <!--Slide Item-->
                    <div class="gallery-block">
                        <div class="image"><a href="images/gallery/gallery-4-big.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/gallery/gallery-4-sm.jpg" alt="image"></a></div>
                    </div>

                    

                </div>
            </div>
        </div>
    </section>


    <!--Main Footer-->
   <?php include 'components/footer.php' ?>

</div>
<!--End pagewrapper--> 

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>


<?php include 'components/script.php' ?>

</body>

</html>