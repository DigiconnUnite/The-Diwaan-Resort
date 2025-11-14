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

        <!-- Inner Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(images/background/banner-menu.webp);"></div>
            <div class="auto-container">
                <div class="inner">
                    <h1>Our Menu</h1>
                    <div class="sub_text">
                        <p>Explore our royal menu, featuring authentic dishes inspired by India’s rich culinary heritage
                            —
                            <span class="primary-color"> each crafted to bring you the taste of true royalty.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->
        <!-- Search Ribbon -->
        <section class="search-ribbon">
            <div class="auto-container">
                <div class="search-container">
                    <div class="filter-box">
                        <!-- <div class="item-count specialty-tag">
                            Total Items: <span id="total-items">0</span>
                        </div> -->
                        <select id="category-filter">
                            <option value="all">All Categories</option>
                        </select>
                        <span class="arrow-icon far fa-angle-down"></span>
                    </div>

                    <div class="search-box">
                        <input type="text" id="menu-search" placeholder="Search menu items..." />
                        <button type="button" id="search-btn" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one"><i class="fas fa-utensils"></i>&nbsp;Search</span>
                                <span class="text-two"><i class="fas fa-utensils"></i>&nbsp;Search</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Search Ribbon -->

        <!-- Paneer -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>paneer</span></div>
                    <h2>Paneer</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Butter-Masala.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Paneer Butter Masala</a></h5>
                            <div class="text desc">Delicious paneer in rich butter masala sauce.</div>
                            <div class="price">₹330</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Khoya-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Khoya Paneer</a></h5>
                            <div class="text desc">Creamy khoya paneer delicacy.</div>
                            <div class="price">₹350</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Do-Pyaza.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Do Pyaza</a></h5>
                            <div class="text desc">Paneer with double onions.</div>
                            <div class="price">₹320</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Pasanda.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Pasanda</a></h5>
                            <div class="text desc">Stuffed paneer in rich gravy.</div>
                            <div class="price">₹360</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Lavabdar.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Lavabdar</a></h5>
                            <div class="text desc">Paneer in creamy lavabdar sauce.</div>
                            <div class="price">₹330</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Tikka-Masala.webp"
                                        alt="image"></a> </div>
                            <h5><a href="#">Paneer Tikka Masala</a></h5>
                            <div class="text desc">Spicy paneer tikka in masala.</div>
                            <div class="price">₹360</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Matar-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Matar Paneer</a></h5>
                            <div class="text desc">Paneer with green peas.</div>
                            <div class="price">₹300</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Patiala.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Patiala</a></h5>
                            <div class="text desc">Paneer in Patiala style.</div>
                            <div class="price">₹350</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Shahi-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Shahi Paneer</a></h5>
                            <div class="text desc">Royal paneer dish.</div>
                            <div class="price">₹350</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Kadhai-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Kadhai Paneer</a></h5>
                            <div class="text desc">Paneer cooked in kadhai.</div>
                            <div class="price">₹330</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Handi-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Handi Paneer</a></h5>
                            <div class="text desc">Paneer in handi style.</div>
                            <div class="price">₹360</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Palak-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Palak Paneer</a></h5>
                            <div class="text desc">Paneer in spinach gravy.</div>
                            <div class="price">₹300</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Tawa-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Tawa Paneer</a></h5>
                            <div class="text desc">Paneer cooked on tawa.</div>
                            <div class="price">₹370</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Soya-Keema-Matar.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Soya Keema Matar</a></h5>
                            <div class="text desc">Soya keema with peas.</div>
                            <div class="price">₹330</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Soya-Chaap-Masala.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Soya Chaap Masala</a></h5>
                            <div class="text desc">Soya chaap in masala.</div>
                            <div class="price">₹330</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Soya-Tikka-Masala.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Soya Tikka Masala</a></h5>
                            <div class="text desc">Soya tikka in masala.</div>
                            <div class="price">₹340</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Angara-Paneer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Angara Paneer</a></h5>
                            <div class="text desc">Spicy angara paneer.</div>
                            <div class="price">₹360</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rice -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>rice</span></div>
                    <h2>Rice</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Plain-Rice.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Plain Rice</a></h5>
                            <div class="text desc">Simple steamed rice.</div>
                            <div class="price">₹130</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Jeera-Rice.webp" alt="image"></a></div>
                            <h5><a href="#">Jeera Rice</a></h5>
                            <div class="text desc">Rice with cumin seeds.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Matar-Pulao.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Matar Pulao</a></h5>
                            <div class="text desc">Rice with peas.</div>
                            <div class="price">₹160</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Pulao.webp" alt="image"></a></div>
                            <h5><a href="#">Veg Pulao</a></h5>
                            <div class="text desc">Vegetable rice.</div>
                            <div class="price">₹175</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Navratan-Pulao.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Navratan Pulao</a></h5>
                            <div class="text desc">Nine jewels rice.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Course -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>main-course</span></div>
                    <h2>Main Course</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Dal-Fry.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Dal Fry</a></h5>
                            <div class="text desc">Fried lentils.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Dal-Tadka.webp" alt="image"></a></div>
                            <h5><a href="#">Dal Tadka</a></h5>
                            <div class="text desc">Lentils with tadka.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Dal-Handi.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Dal Handi</a></h5>
                            <div class="text desc">Lentils in handi.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Dal-Bukhara.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Dal Bukhara</a></h5>
                            <div class="text desc">Bukhara style lentils.</div>
                            <div class="price">₹340</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Dal-Makhani.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Dal Makhani</a></h5>
                            <div class="text desc">Creamy black lentils.</div>
                            <div class="price">₹360</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Curry-Kofta.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Curry Kofta</a></h5>
                            <div class="text desc">Kofta in curry.</div>
                            <div class="price">₹330</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Malai-Kofta.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Malai Kofta</a></h5>
                            <div class="text desc">Creamy kofta.</div>
                            <div class="price">₹360</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Navratan-Curry.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Navratan Curry</a></h5>
                            <div class="text desc">Nine jewels curry.</div>
                            <div class="price">₹400</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Navratan-Korma.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Navratan Korma</a></h5>
                            <div class="text desc">Nine jewels korma.</div>
                            <div class="price">₹400</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Kaju-Curry.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Kaju Curry</a></h5>
                            <div class="text desc">Cashew curry.</div>
                            <div class="price">₹410</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Kaju-Pineapple-Curry.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Kaju Pineapple Curry</a></h5>
                            <div class="text desc">Cashew pineapple curry.</div>
                            <div class="price">₹399</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Kofta.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Kofta</a></h5>
                            <div class="text desc">Paneer kofta.</div>
                            <div class="price">₹435</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Kofta.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Kofta</a></h5>
                            <div class="text desc">Vegetable kofta.</div>
                            <div class="price">₹425</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Shahjani-Kofta.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Shahjani Kofta</a></h5>
                            <div class="text desc">Royal kofta.</div>
                            <div class="price">₹430</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vegetable -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>vegetable</span></div>
                    <h2>Vegetable</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Dum-Aloo.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Dum Aloo</a></h5>
                            <div class="text desc">Potatoes in dum style.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Kashmiri-Dum-Aloo.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Kashmiri Dum Aloo</a></h5>
                            <div class="text desc">Kashmiri style dum aloo.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Mashroom-Masala.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mushroom Masala</a></h5>
                            <div class="text desc">Mushrooms in masala.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Matar-Mushroom.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Matar Mushroom</a></h5>
                            <div class="text desc">Peas and mushrooms.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Mushroom.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Mushroom</a></h5>
                            <div class="text desc">Paneer with mushrooms.</div>
                            <div class="price">₹300</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Bhurji.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Bhurji</a></h5>
                            <div class="text desc">Scrambled paneer.</div>
                            <div class="price">₹350</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Special-Sam-Sabera.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Special Sam Sabera</a></h5>
                            <div class="text desc">Special vegetable dish.</div>
                            <div class="price">₹370</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Mix-Veg.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mix Veg</a></h5>
                            <div class="text desc">Mixed vegetables.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Jaipuri-Mix-Veg.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Jaipuri Mix Veg</a></h5>
                            <div class="text desc">Jaipur style mix veg.</div>
                            <div class="price">₹270</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Jeera-Rice-(Vegetable section).webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Jeera Rice</a></h5>
                            <div class="text desc">Rice with cumin.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Aloo-Gobhi-Masala.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Aloo Gobhi Masala</a></h5>
                            <div class="text desc">Potato cauliflower masala.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Stuff-Tomato.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Stuff Tomato</a></h5>
                            <div class="text desc">Stuffed tomatoes.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Stuff-Capsicum.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Stuff Capsicum</a></h5>
                            <div class="text desc">Stuffed capsicum.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Chinese -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>chinese</span></div>
                    <h2>Chinese</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Crispy-Chilli-Potato.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Crispy Chilly Potato</a></h5>
                            <div class="text desc">Crispy potatoes with chilly.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Honey-Chilli-Potato.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Honey Chilly Potato</a></h5>
                            <div class="text desc">Potatoes with honey and chilly.</div>
                            <div class="price">₹200</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-65.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer 65</a></h5>
                            <div class="text desc">Spicy paneer bites.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Spring-Roll.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Spring Roll</a></h5>
                            <div class="text desc">Crispy vegetable rolls.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Vegetable-Cheese-Cigar-Rolls.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Vegetable Cheese Cigar Rolls</a></h5>
                            <div class="text desc">Cheese filled rolls.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Corn-Salt&Pepper.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Corn Salt & Pepper</a></h5>
                            <div class="text desc">Corn with salt and pepper.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Manchurian-Dry-Gravy.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Veg Manchurian Dry / Gravy</a></h5>
                            <div class="text desc">Vegetable manchurian.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Chilly-Paneer-Dry-Gravy.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Chilly Paneer Dry Gravy</a></h5>
                            <div class="text desc">Paneer with chilly.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Manchurian-Dry-Gravy.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Paneer Manchurian Dry Gravy</a></h5>
                            <div class="text desc">Paneer manchurian.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Chilly-Mushroom-Dry-Gravy.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Chilly Mushroom Dry Gravy</a></h5>
                            <div class="text desc">Mushrooms with chilly.</div>
                            <div class="price">₹300</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Vegetable-Hot-Garlic-Sauce.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Vegetable Hot Garlic Sauce</a></h5>
                            <div class="text desc">Veg in hot garlic sauce.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Hot-Garlic-Sauce.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Paneer Hot Garlic Sauce</a></h5>
                            <div class="text desc">Paneer in hot garlic sauce.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/American-Chop-Suey.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">American Chop Suey</a></h5>
                            <div class="text desc">American style chop suey.</div>
                            <div class="price">₹200</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Hakka-Noodles.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Hakka Noodles</a></h5>
                            <div class="text desc">Vegetable hakka noodles.</div>
                            <div class="price">₹170</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Chowmin.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Chowmin</a></h5>
                            <div class="text desc">Vegetable chowmin.</div>
                            <div class="price">₹170</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Chilly-Garlic-Noodles.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Chilly Garlic Noodles</a></h5>
                            <div class="text desc">Noodles with chilly garlic.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Fried-Rice.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Fried Rice</a></h5>
                            <div class="text desc">Vegetable fried rice.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Schezwan-Fried-Rice.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Schezwan Fried Rice</a></h5>
                            <div class="text desc">Schezwan fried rice.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Chilly-Garlic-Fried-Rice.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Chilly Garlic Fried Rice</a></h5>
                            <div class="text desc">Fried rice with chilly garlic.</div>
                            <div class="price">₹260</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Chinese Sizzler Platter -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>chinese-sizzler</span></div>
                    <h2>Chinese Sizzler Platter</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img
                                        src="images/menu/Noodles-Chill Paneer-Veg Manchurian-Finger Chips.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Noodles + Chill Paneer + Veg Manchurian + Finger Chips</a></h5>
                            <div class="text desc">Complete Chinese platter.</div>
                            <div class="price">₹310</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bread -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>bread</span></div>
                    <h2>Bread</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Garlic-Bread.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Garlic Bread</a></h5>
                            <div class="text desc">Bread with garlic.</div>
                            <div class="price">₹99</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Cheese-Chilly-Garlic-Bread.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Cheese Chilly Garlic Bread</a></h5>
                            <div class="text desc">Cheese garlic bread with chilly.</div>
                            <div class="price">₹199</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Tomato-Bruschetta.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Tomato Bruschetta</a></h5>
                            <div class="text desc">Tomato bruschetta.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Mushroom-Bruschetta.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Mushroom Bruschetta</a></h5>
                            <div class="text desc">Mushroom bruschetta.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tandoor -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>tandoor</span></div>
                    <h2>Tandoor</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Plain-Roti.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Plain Roti</a></h5>
                            <div class="text desc">Simple plain roti.</div>
                            <div class="price">₹35</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Butter-Roti.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Butter Roti</a></h5>
                            <div class="text desc">Roti with butter.</div>
                            <div class="price">₹45</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Plain-Naan.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Plain Naan</a></h5>
                            <div class="text desc">Plain naan bread.</div>
                            <div class="price">₹70</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Butter-Naan.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Butter Naan</a></h5>
                            <div class="text desc">Naan with butter.</div>
                            <div class="price">₹90</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Laccha-Paratha.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Laccha Paratha</a></h5>
                            <div class="text desc">Layered paratha.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Stuffed-Paratha.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Stuffed Paratha</a></h5>
                            <div class="text desc">Stuffed paratha.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Stuffed-Kulcha.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Stuffed Kulcha</a></h5>
                            <div class="text desc">Stuffed kulcha.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Missi-Roti.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Missi Roti</a></h5>
                            <div class="text desc">Missi roti.</div>
                            <div class="price">₹60</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Masala-Missi.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Masala Missi</a></h5>
                            <div class="text desc">Masala missi.</div>
                            <div class="price">₹80</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Stuffed-Naan.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Stuffed Naan</a></h5>
                            <div class="text desc">Stuffed naan.</div>
                            <div class="price">₹110</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Tawa-Roti.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Tawa Roti</a></h5>
                            <div class="text desc">Roti on tawa.</div>
                            <div class="price">₹30</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Tawa-Butter-Roti.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Tawa Butter Roti</a></h5>
                            <div class="text desc">Butter roti on tawa.</div>
                            <div class="price">₹35</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- South Indian -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>south-indian</span></div>
                    <h2>South Indian</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Dosa.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Dosa</a></h5>
                            <div class="text desc">Dosa with paneer.</div>
                            <div class="price">₹210</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Masala-Dosa.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Paneer Masala Dosa</a></h5>
                            <div class="text desc">Masala dosa with paneer.</div>
                            <div class="price">₹230</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Masala-Dosa.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Masala Dosa</a></h5>
                            <div class="text desc">Classic masala dosa.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Onion-Masala-Dosa.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Onion Masala Dosa</a></h5>
                            <div class="text desc">Masala dosa with onion.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Garlic-Masala-Dosa.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Garlic Masala Dosa</a></h5>
                            <div class="text desc">Masala dosa with garlic.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Rawa-Masala-Dosa.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Rawa Masala Dosa</a></h5>
                            <div class="text desc">Rawa masala dosa.</div>
                            <div class="price">₹200</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Rawa-Paneer-Dosa.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Rawa Paneer Dosa</a></h5>
                            <div class="text desc">Rawa dosa with paneer.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Mix-Uttapam.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mix Uttapam</a></h5>
                            <div class="text desc">Mixed uttapam.</div>
                            <div class="price">₹210</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Uttapam.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Uttapam</a></h5>
                            <div class="text desc">Uttapam with paneer.</div>
                            <div class="price">₹230</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Navaratna-Uttapam.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Navaratna Uttapam</a></h5>
                            <div class="text desc">Nine jewels uttapam.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Onion-Uttapam.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Onion Uttapam</a></h5>
                            <div class="text desc">Uttapam with onion.</div>
                            <div class="price">₹210</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Pizza-Veg-Dosa.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Pizza Veg Dosa</a></h5>
                            <div class="text desc">Pizza style veg dosa.</div>
                            <div class="price">₹300</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Sambar-Idli.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Sambar Idli 2 Pcs</a></h5>
                            <div class="text desc">Idli with sambar.</div>
                            <div class="price">₹130</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Fried-Idli.webp" alt="image"></a></div>
                            <h5><a href="#">Fried Idli 2 Pcs</a></h5>
                            <div class="text desc">Fried idli.</div>
                            <div class="price">₹130</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Paper-Masala-Dosa.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Paper Masala Dosa</a></h5>
                            <div class="text desc">Paper thin masala dosa.</div>
                            <div class="price">₹210</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Breakfast -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>breakfast</span></div>
                    <h2>Breakfast</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Poori-Bhaji.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Poori Bhaji</a></h5>
                            <div class="text desc">Poori with bhaji.</div>
                            <div class="price">₹100</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Aloo-Paratha-With-Curd.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Aloo Paratha With Curd</a></h5>
                            <div class="text desc">Aloo paratha with curd.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Butter-Toast-With-Jam.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Butter Toast With Jam</a></h5>
                            <div class="text desc">Toast with butter and jam.</div>
                            <div class="price">₹70</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Mix-Paratha-With-Curd.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Mix Paratha With Curd</a></h5>
                            <div class="text desc">Mix paratha with curd.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Paratha-With-Curd.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Paratha With Curd</a></h5>
                            <div class="text desc">Paneer paratha with curd.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Chhole-Bhature.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Chole Bhature</a></h5>
                            <div class="text desc">Chickpeas with bhature.</div>
                            <div class="price">₹160</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Paw-Bhaji.webp" alt="image"></a></div>
                            <h5><a href="#">Paw Bhaji</a></h5>
                            <div class="text desc">Pav with bhaji.</div>
                            <div class="price">₹140</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Pakoda.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Pakoda</a></h5>
                            <div class="text desc">Paneer fritters.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Aloo-Chaat.webp" alt="image"></a></div>
                            <h5><a href="#">Aloo Chat</a></h5>
                            <div class="text desc">Potato chat.</div>
                            <div class="price">₹90</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Masala-Papad.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Masala Papad</a></h5>
                            <div class="text desc">Spiced papad.</div>
                            <div class="price">₹70</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Peanut-Masala.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Peanut Masala</a></h5>
                            <div class="text desc">Spiced peanuts.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Fry-Papad.webp" alt="image"></a></div>
                            <h5><a href="#">Fry Papad</a></h5>
                            <div class="text desc">Fried papad.</div>
                            <div class="price">₹50</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Dry-Papad.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Dry Papad</a></h5>
                            <div class="text desc">Dry papad.</div>
                            <div class="price">₹50</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Onion-Paratha.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Onion Paratha</a></h5>
                            <div class="text desc">Paratha with onion.</div>
                            <div class="price">₹90</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Gobhi-Paratha.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Gobhi Paratha</a></h5>
                            <div class="text desc">Cauliflower paratha.</div>
                            <div class="price">₹90</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Meggi-Plain.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Maggi Plain</a></h5>
                            <div class="text desc">Plain maggi noodles.</div>
                            <div class="price">₹100</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Masala-Meggi.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Masala Maggi</a></h5>
                            <div class="text desc">Masala maggi noodles.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pasta -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>pasta</span></div>
                    <h2>Pasta</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Alfredo-White-Pasta.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Alfredo White Pasta</a></h5>
                            <div class="text desc">Creamy white pasta.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Red-Pasta-Arrabiata.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Red Pasta Arrabiata</a></h5>
                            <div class="text desc">Spicy red pasta.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoori-Makhani-Pasta.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Tandoori Makhani Pasta</a></h5>
                            <div class="text desc">Tandoori makhani pasta.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Mix-Sauce-Pasta.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mix Sauce Pasta</a></h5>
                            <div class="text desc">Pasta with mix sauce.</div>
                            <div class="price">₹260</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Spaghetti-Aglio-Olio.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Spaghetti Aglio Olio</a></h5>
                            <div class="text desc">Garlic oil spaghetti.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Burger -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>burger</span></div>
                    <h2>Burger</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Burger.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Burger</a></h5>
                            <div class="text desc">Vegetable burger.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Burger.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Burger</a></h5>
                            <div class="text desc">Paneer burger.</div>
                            <div class="price">₹155</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Cheese-Burger.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Cheese Burger</a></h5>
                            <div class="text desc">Cheese burger.</div>
                            <div class="price">₹175</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Peri-Peri-Burger.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Peri Peri Burger</a></h5>
                            <div class="text desc">Spicy peri peri burger.</div>
                            <div class="price">₹165</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoori-Veg-Burger.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Tandoori Veg Burger</a></h5>
                            <div class="text desc">Tandoori veg burger.</div>
                            <div class="price">₹140</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Special-Burger.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Special Burger</a></h5>
                            <div class="text desc">Special burger.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tandoori (Snacks) -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>tandoori-snacks</span></div>
                    <h2>Tandoori (Snacks)</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Tikka.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Tikka</a></h5>
                            <div class="text desc">Paneer tikka.</div>
                            <div class="price">₹330</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Malai-Tikka.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Malai Tikka</a></h5>
                            <div class="text desc">Creamy malai tikka.</div>
                            <div class="price">₹380</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Achari-Paneer-Tikka.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Achari Paneer Tikka</a></h5>
                            <div class="text desc">Pickled paneer tikka.</div>
                            <div class="price">₹320</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Haryali-Tikka.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Paneer Haryali Tikka</a></h5>
                            <div class="text desc">Green paneer tikka.</div>
                            <div class="price">₹320</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Soya-Malai-Tikka.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Soya Malai Tikka</a></h5>
                            <div class="text desc">Soya malai tikka.</div>
                            <div class="price">₹270</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoori-Soya-Masala-Tikka.webp"
                                        alt="image"></a> </div>
                            <h5><a href="#">Tandoori Soya Masala Tikka</a></h5>
                            <div class="text desc">Masala soya tikka.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoori-Masala-Aloo.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Tandoori Masala Aloo</a></h5>
                            <div class="text desc">Masala potato.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Seekh-Kabab.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Seekh Kabab</a></h5>
                            <div class="text desc">Vegetable seekh kabab.</div>
                            <div class="price">₹200</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Hara-Bhara-Kabab.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Hara Bhara Kabab</a></h5>
                            <div class="text desc">Green vegetable kabab.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoor-Masala-Mushroom.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Tandoor Masala Mushroom</a></h5>
                            <div class="text desc">Masala mushrooms.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoori-Platter.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Tandoori Platter</a></h5>
                            <div class="text desc">Assorted tandoori platter.</div>
                            <div class="price">₹390</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Thali -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>thali</span></div>
                    <h2>Thali</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Deluxe-Thali.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Deluxe Thali</a></h5>
                            <div class="text desc">Dal Fry, Matar Paneer, Mix Veg, Rice, Raita, Salad, Papad, Gulab
                                Jamun, 4 Butter Roti.</div>
                            <div class="price">₹349</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Maharaja-Thali.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Maharaja Thali</a></h5>
                            <div class="text desc">Malai Kofta, Dalmakhani, Paneer Butter Masala, Mix Veg, Jeera Rice,
                                Salad, Papad, 1 Butter Naan, 1 Stuffed Naan, 1 Laccha Paratha, Raita, 1 Gulab Juman.
                            </div>
                            <div class="price">₹549</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Continental Snacks -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>continental-snacks</span></div>
                    <h2>Continental Snacks</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Cutlet.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Cutlet</a></h5>
                            <div class="text desc">Vegetable cutlet.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Cheese-Cutlet.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Cheese Cutlet</a></h5>
                            <div class="text desc">Cheese cutlet.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Finger.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Finger</a></h5>
                            <div class="text desc">Paneer fingers.</div>
                            <div class="price">₹230</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Peri-Peri-Paneer-Pops.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Peri Peri Paneer Pops</a></h5>
                            <div class="text desc">Spicy paneer pops.</div>
                            <div class="price">₹250</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Italian Fries -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>italian-fries</span></div>
                    <h2>Italian Fries</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Peri-Peri-Fries.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Peri Peri Fries</a></h5>
                            <div class="text desc">Spicy peri peri fries.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Schezwan-Fries.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Schezwan Fries</a></h5>
                            <div class="text desc">Schezwan fries.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoori-Cheese-Fries.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Tandoori Cheese Fries</a></h5>
                            <div class="text desc">Cheese fries with tandoori.</div>
                            <div class="price">₹170</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Chili-Cheese-Fries.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Chilly Cheese Fries</a></h5>
                            <div class="text desc">Cheese fries with chilly.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/French-Fries.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">French Fries</a></h5>
                            <div class="text desc">Classic french fries.</div>
                            <div class="price">₹110</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sandwiches -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>sandwiches</span></div>
                    <h2>Sandwiches</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Sandwich.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Sandwich</a></h5>
                            <div class="text desc">Vegetable sandwich.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Cheese-Sandwich.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Cheese Sandwich</a></h5>
                            <div class="text desc">Cheese sandwich.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Tandoori-Sandwich.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Tandoori Sandwich</a></h5>
                            <div class="text desc">Tandoori paneer sandwich.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pizzas -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>pizzas</span></div>
                    <h2>Pizzas</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Margherita.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Margherita Pizza</a></h5>
                            <div class="text desc">Classic margherita pizza.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/OTC-Pizza.webp" alt="image"></a></div>
                            <h5><a href="#">O.t.c Pizza</a></h5>
                            <div class="text desc">Onion tomato capsicum pizza.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Pizza.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Pizza</a></h5>
                            <div class="text desc">Paneer pizza.</div>
                            <div class="price">₹200</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Peri-Peri-Pizza.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Peri Peri Pizza</a></h5>
                            <div class="text desc">Spicy peri peri pizza.</div>
                            <div class="price">₹200</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Peri-Peri-Paneer-Pizza.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Peri Peri Paneer Pizza</a></h5>
                            <div class="text desc">Peri peri paneer pizza.</div>
                            <div class="price">₹220</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Tandoori-Paneer-Pizza.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Tandoori Paneer Pizza</a></h5>
                            <div class="text desc">Tandoori paneer pizza.</div>
                            <div class="price">₹240</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/FarmHouse-Pizza.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Farm House Pizza</a></h5>
                            <div class="text desc">Farm house pizza.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Mushroom-Pizza.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mushroom Pizza</a></h5>
                            <div class="text desc">Mushroom pizza.</div>
                            <div class="price">₹210</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Special-Pizza.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Special Pizza</a></h5>
                            <div class="text desc">Special pizza.</div>
                            <div class="price">₹350</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Chili-Paneer-Pizza.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Chilly Paneer Pizza</a></h5>
                            <div class="text desc">Chilly paneer pizza.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Chilly-Garlic-Paneer-Pizza.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Chilly Garlic Paneer Pizza</a></h5>
                            <div class="text desc">Chilly garlic paneer pizza.</div>
                            <div class="price">₹300</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Paneer-Corn-Pizza.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Paneer Corn Pizza</a></h5>
                            <div class="text desc">Paneer corn pizza.</div>
                            <div class="price">₹280</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lassi -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>lassi</span></div>
                    <h2>Lassi</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Sweet-Lassi.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Sweet Lassi</a></h5>
                            <div class="text desc">Sweet yogurt drink.</div>
                            <div class="price">₹100</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Salted-Lassi.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Salted Lassi</a></h5>
                            <div class="text desc">Salted yogurt drink.</div>
                            <div class="price">₹90</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/ButterMilk.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Butter Milk</a></h5>
                            <div class="text desc">Buttermilk.</div>
                            <div class="price">₹70</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Mango-Lassi.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mango Lassi</a></h5>
                            <div class="text desc">Mango flavored lassi.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Strawberry-Lassi.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Strawberry Lassi</a></h5>
                            <div class="text desc">Strawberry flavored lassi.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shakes -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>shakes</span></div>
                    <h2>Shakes</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Vanilla.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Vanilla Shakes</a></h5>
                            <div class="text desc">Without Ice Cream ₹99 / With Ice Cream ₹130.</div>
                            <div class="price">₹99 / 130</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Oreo-Shakes.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Oreo Shakes</a></h5>
                            <div class="text desc">Without Ice Cream ₹120 / With Ice Cream ₹150.</div>
                            <div class="price">₹120 / 150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Kit-Kat-Shakes.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Kit Kat Shakes</a></h5>
                            <div class="text desc">Without Ice Cream ₹130 / With Ice Cream ₹160.</div>
                            <div class="price">₹130 / 160</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Chocolate-Shakes.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Chocolate Shakes</a></h5>
                            <div class="text desc">Without Ice Cream ₹140 / With Ice Cream ₹170.</div>
                            <div class="price">₹140 / 170</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Butterscotch-Shakes.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Butterscotch Shakes</a></h5>
                            <div class="text desc">Without Ice Cream ₹150 / With Ice Cream ₹180.</div>
                            <div class="price">₹150 / 180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Cold-Coffee.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Cold Coffee</a></h5>
                            <div class="text desc">Without Ice Cream ₹140 / With Ice Cream ₹170.</div>
                            <div class="price">₹140 / 170</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Mango-Shakes.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mango Shakes</a></h5>
                            <div class="text desc">Without Ice Cream ₹150 / With Ice Cream ₹180.</div>
                            <div class="price">₹150 / 180</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Salad & Raita -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>salad-raita</span></div>
                    <h2>Salad & Raita</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Green-Salad.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Green Salad</a></h5>
                            <div class="text desc">Fresh green salad.</div>
                            <div class="price">₹100</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Kachumber-Salad.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Kachumber Salad</a></h5>
                            <div class="text desc">Mixed vegetable salad.</div>
                            <div class="price">₹130</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Onion-Salad.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Onion Salad</a></h5>
                            <div class="text desc">Onion salad.</div>
                            <div class="price">₹90</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Cucumber-Salad.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Cucumber Salad</a></h5>
                            <div class="text desc">Cucumber salad.</div>
                            <div class="price">₹140</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Mix-Raita.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mix Raita</a></h5>
                            <div class="text desc">Mixed raita.</div>
                            <div class="price">₹100</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Boondi-Raita.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Boondi Raita</a></h5>
                            <div class="text desc">Boondi raita.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Pineapple-Raita.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Pineapple Raita</a></h5>
                            <div class="text desc">Pineapple raita.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Fruits-Raita-Cocktail.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Fruits Raita Cocktail</a></h5>
                            <div class="text desc">Fruits raita cocktail.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Mint-Raita.webp" alt="image"></a></div>
                            <h5><a href="#">Mint Raita</a></h5>
                            <div class="text desc">Mint raita.</div>
                            <div class="price">₹130</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Plain-Curd.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Plain Curd</a></h5>
                            <div class="text desc">Plain curd.</div>
                            <div class="price">₹90</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Beverages -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>beverages</span></div>
                    <h2>Beverages</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Virgin-Mojito.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Virgin Mojito</a></h5>
                            <div class="text desc">Non-alcoholic mojito.</div>
                            <div class="price">₹140</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Mint-Mojito.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Mint Mojito</a></h5>
                            <div class="text desc">Mint flavored mojito.</div>
                            <div class="price">₹160</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Blue-Curacao.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Blue Curacao</a></h5>
                            <div class="text desc">Blue curacao drink.</div>
                            <div class="price">₹180</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Pina-Colada-Sysal.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Pina Colada Sysal</a></h5>
                            <div class="text desc">Pina colada drink.</div>
                            <div class="price">₹200</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Sweets&Sour-Lemon-Soda.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Sweets & Sour Lemon Soda</a></h5>
                            <div class="text desc">Sweet and sour lemon soda.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Water.webp" alt="image"></a> </div>
                            <h5><a href="#">Water</a></h5>
                            <div class="text desc">Mineral water.</div>
                            <div class="price">₹30 / 60</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hot Beverages -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>hot-beverages</span></div>
                    <h2>Hot Beverages</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Roasted-Tomato-Basil-Soup.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Roasted Tomato Basil Soup</a></h5>
                            <div class="text desc">Tomato basil soup.</div>
                            <div class="price">₹110</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Hots&Sour-Soup.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Hots & Sour Soup</a></h5>
                            <div class="text desc">Hot and sour soup.</div>
                            <div class="price">₹140</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Manchow-Soup.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Manchow Soup</a></h5>
                            <div class="text desc">Manchow soup.</div>
                            <div class="price">₹150</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Lemon-Coriander-Soup.webp"
                                        alt="image"></a></div>
                            <h5><a href="#">Lemon Coriander Soup</a></h5>
                            <div class="text desc">Lemon coriander soup.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Vegetable-Soup.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Vegetable Soup</a></h5>
                            <div class="text desc">Vegetable soup.</div>
                            <div class="price">₹120</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Sweet-Corn-Soup.webp"
                                        alt="image"></a> </div>
                            <h5><a href="#">Veg Sweet Corn Soup</a></h5>
                            <div class="text desc">Sweet corn soup.</div>
                            <div class="price">₹170</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Veg-Noodles-Soup.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Veg Noodles Soup</a></h5>
                            <div class="text desc">Noodles soup.</div>
                            <div class="price">₹130</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Cream-Of-Mushroom-Soup.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Cream Of Mushroom Soup</a></h5>
                            <div class="text desc">Cream of mushroom soup.</div>
                            <div class="price">₹190</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Indian Beverages -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>indian-beverages</span></div>
                    <h2>Indian Beverages</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Tea.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Tea</a></h5>
                            <div class="text desc">Hot tea.</div>
                            <div class="price">₹50</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Hot-Coffee.webp" alt="image"></a></div>
                            <h5><a href="#">Hot Coffee</a></h5>
                            <div class="text desc">Hot coffee.</div>
                            <div class="price">₹80</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Lemon-Tea-Green-Tea.webp"
                                        alt="image"></a>
                            </div>
                            <h5><a href="#">Lemon Tea / Green Tea</a></h5>
                            <div class="text desc">Lemon or green tea.</div>
                            <div class="price">₹70</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                            <div class="image"><a href="#"><img src="images/menu/Hot-Milk.webp" alt="image"></a></div>
                            <h5><a href="#">Hot Milk</a></h5>
                            <div class="text desc">Hot milk.</div>
                            <div class="price">₹80</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ice Cream -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>ice-cream</span></div>
                    <h2>Ice Cream</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Vanilla.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Vanilla</a></h5>
                            <div class="text desc">Vanilla ice cream.</div>
                            <div class="price">₹100</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Strawberry.webp" alt="image"></a></div>
                            <h5><a href="#">Strawberry</a></h5>
                            <div class="text desc">Strawberry ice cream.</div>
                            <div class="price">₹100</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Butter-Scotch.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Butter Scotch</a></h5>
                            <div class="text desc">Butter scotch ice cream.</div>
                            <div class="price">₹110</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sweets -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>sweets</span></div>
                    <h2>Sweets</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Gulab-Jamun.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Gulab Jamun 1 Pc.</a></h5>
                            <div class="text desc">Sweet gulab jamun.</div>
                            <div class="price">₹45</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/menu/Rabdi.webp" alt="image"></a></div>
                            <h5><a href="#">Rabdi</a></h5>
                            <div class="text desc">Sweet rabdi.</div>
                            <div class="price">₹110</div>
                        </div>
                    </div>
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/menu/Kesar-Kheer.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Kesar Kheer</a></h5>
                            <div class="text desc">Saffron kheer.</div>
                            <div class="price">₹110</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Valentine's Special -->
        <section class="special-offer-two section-kt">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>valentines-special</span></div>
                    <h2>Valentine's Special</h2>
                </div>
                <div class="row clearfix">
                    <div class="offer-block-three col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="image"><a href="#"><img src="images/menu/Chinese-Platter.webp" alt="image"></a>
                            </div>
                            <h5><a href="#">Chinese Platter</a></h5>
                            <div class="text desc">Noodles, Manchurian, Fried Rice, Fried Rice, and Chilly Paneer.</div>
                            <div class="price">₹599</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Reservation Section-->
        <section class="reserve-section style-two section-kt">
            <div class="image-layer" style="background-image: url(images/background/banner-gallery.webp);"></div>
            <div class="auto-container">
                <div class="outer-box">
                    <div class="row clearfix">

                        <div class="reserv-col col-lg-8 col-md-12 col-sm-12 mx-auto">
                            <div class="inner">
                                <div class="title-box centered">
                                    <div class="subtitle"><span>Online reservation</span></div>
                                    <h2>Book A Table</h2>
                                    <div class="request-info">Booking request <a href="#">+88-123-123456</a> or fill out
                                        the order form</div>
                                </div>
                                <div class="default-form reservation-form">
                                    <form method="post"
                                        action="https://kalanidhithemes.com/live-preview/landing-page/Diwaan/all-demo/Diwaan-2-Standard-Hero/index.html">
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="fieldname" value="" placeholder="Your Name"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="fieldname" value=""
                                                        placeholder="Phone Number" required>
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
                                                    <input class="l-icon datepicker" type="text" name="fieldname"
                                                        value="" placeholder="DD-MM-YYYY" required readonly>
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
                                                    <textarea name="fieldname" placeholder="Message"
                                                        required></textarea>
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