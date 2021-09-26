<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="webpage/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="webpage/style.css" type="text/css" />
    <link rel="stylesheet" href="webpage/css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="webpage/css/dark.css" type="text/css" />

    <link rel="stylesheet" href="webpage/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="webpage/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="webpage/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="webpage/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Store Demo Specific Stylesheet -->
    <link rel="stylesheet" href="webpage/css/colors.php?color=222222" type="text/css" /> <!-- Store Theme Color -->
    <link rel="stylesheet" href="webpage/demos/store/css/fonts.css" type="text/css" /> <!-- Store Theme Font -->
    <link rel="stylesheet" href="webpage/demos/store/store.css" type="text/css" /> <!-- Store Theme Custom CSS -->
    <!-- / -->

    <!-- Document Title
	============================================= -->
    <title>Store | Canvas</title>

</head>

<body class="stretched modal-subscribe-bottom">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Modal -->
        <div class="modal animated fadeInUp fast pr-0" id="modal-subscribe" role="dialog" displayed="false"
            data-backdrop="static">

            <div class="modal-dialog" role="subscribe">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close"
                            style="z-index: 1">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="form-widget mx-auto" data-loader="button" style="padding: 30px">

                            <h2 class="font-weight-bold h1 mb-3" style="letter-spacing: -2px">Get Special Discount!</h2>
                            <p>Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>

                            <div class="form-result"></div>

                            <form class="mb-0" id="modal-subscribe-form" action="include/form.php" method="post"
                                enctype="multipart/form-data">
                                <label for="modal-subscribe-form-email">Email Address <span>*</span></label>
                                <input type="email" name="modal-subscribe-form-email" id="modal-subscribe-form-email"
                                    class="form-control required rounded-0" placeholder="youremail@address.com">

                                <input class="d-none" type="text" id="modal-subscribe-form-botcheck"
                                    name="modal-subscribe-form-botcheck" value="" />
                                <button name="modal-subscribe-form-submit" class="button btn-block btn-danger m-0 mt-2"
                                    type="submit">Subscribe Now</button>

                                <input type="hidden" name="prefix" value="modal-subscribe-form-">
                            </form>
                            <div class="text-center">
                                <small class="text-black-50 mt-1"><em>We never send SPAM to your Email</em></small>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header
		============================================= -->
        <header id="header" class="dark transparent-header floating-header header-size-custom"
            data-sticky-shrink="false" data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container-fluid">
                    <div class="header-row justify-content-lg-between">

                        <!-- Logo
						============================================= -->
                        <div id="logo" class="mr-lg-0">
                            <a href="index.html" class="standard-logo"
                                data-dark-logo="webpage/demos/store/images/logo-dark.png"><img
                                    src="webpage/demos/store/images/logo.png" alt="Canvas Logo"></a>
                            <a href="index.html" class="retina-logo"
                                data-dark-logo="webpage/demos/store/images/logo-dark@2x.png"><img
                                    src="webpage/demos/store/images/logo@2x.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Login
							============================================= -->
                            <div id="top-account" class="px-4">
                                <a href="#modal-register" data-lightbox="inline">Sign up/Login</a>
                            </div><!-- #top-search end -->

                            <!-- Top Cart
							============================================= -->
                            <div id="top-cart">
                                <a href="#" id="top-cart-trigger" class="position-relative"><i
                                        class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="webpage/demos/shop/images/items/featured/5.jpg"
                                                        alt="Blue Shoulder Bag" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#" class="font-weight-normal">White athletic shoe</a>
                                                    <span class="top-cart-item-price d-block">$35.00</span>
                                                </div>
                                                <div class="top-cart-item-quantity font-weight-semibold">x 1</div>
                                            </div>
                                        </div>
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#" class="font-weight-normal"><img
                                                        src="webpage/demos/shop/images/items/featured/1.jpg"
                                                        alt="Leather Bag" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#" class="font-weight-normal">Round Neck Solid Light Blue
                                                        Colour T-shirts</a>
                                                    <span class="top-cart-item-price d-block">$12.49</span>
                                                </div>
                                                <div class="top-cart-item-quantity font-weight-semibold">x 2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action">
                                        <span class="top-checkout-price font-weight-semibold text-dark">$59.98</span>
                                        <button class="button button-dark button-small m-0">View Cart</button>
                                    </div>
                                </div>
                            </div><!-- #top-cart end -->
                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu with-arrows">

                            <!-- Menu Left -->
                            <ul class="not-dark menu-container">
                                <li class="menu-item current"><a class="menu-link" href="#">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item mega-menu"><a class="menu-link" href="#">
                                        <div>Men</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="mega-menu-column sub-menu-container border-left-0 col-lg-3">
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Footwear</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Casual Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Formal Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sports shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Flip Flops</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Slippers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sandals</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Clothing</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Casual Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>T-Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Collared Tees</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Pants / Trousers</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="mega-menu-column sub-menu-container border-left-0 col-lg-3">
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Sportswear</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sports Casual Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sports T-Shirts</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sports Collared Tees</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sports Shoes</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Jackets</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Swimwears</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Innerwears</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Boxers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Vests</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sleepwears</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="mega-menu-column sub-menu-container border-left-0 col-lg-3">
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Innerwears</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Boxers</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Vests</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Sleepwears</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Sunglasses</div>
                                                        </a></li>
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Watches</div>
                                                        </a></li>
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Bags</div>
                                                        </a></li>
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Headphones</div>
                                                        </a></li>
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Accessories</div>
                                                        </a></li>
                                                </ul>
                                                <ul class="mega-menu-column sub-menu-container col-lg-3 border-left-0">
                                                    <li class="card p-0 bg-transparent border-0">
                                                        <img class="card-img-top"
                                                            src="webpage/demos/store/images/others/menu.jpg"
                                                            alt="image cap">
                                                        <a href="#"
                                                            class="btn btn-link text-left font-weight-medium pl-0 bg-transparent"><u>Editor's
                                                                Pick</u></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .mega-menu end -->
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Women</div>
                                    </a></li>
                                <li class="menu-item mega-menu"><a class="menu-link" href="#">
                                        <div>Help</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Contact Us</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <div class="widget">
                                                                    <address>
                                                                        <strong>Melbourne Store:</strong><br>
                                                                        795 Folsom Ave, Suite 600<br>
                                                                        San Francisco, CA 94107<br>
                                                                    </address>
                                                                    <abbr
                                                                        title="Phone Number"><strong>Phone:</strong></abbr>
                                                                    (1) 8547 632521<br>
                                                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (1)
                                                                    11 4752 1433<br>
                                                                    <abbr
                                                                        title="Email Address"><strong>Email:</strong></abbr>
                                                                    info@canvas.com
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>Inquiries</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>About Us</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Size Chart</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Our Policies</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Exchange/Return</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Payments</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
                                                    <li class="mega-menu-title menu-item"><a class="menu-link" href="#">
                                                            <div>FAQs</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Q. How do I purchase an item?</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Q. How do I return my items?</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Q. Shipping Charges?</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Q. What is your Delivery time?</div>
                                                                </a></li>
                                                            <li class="menu-item"><a class="menu-link" href="#">
                                                                    <div>Q. Is there any hidden Charges?</div>
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .mega-menu end -->
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Contact</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </div>
            <div class="header-wrap-clone"></div>

        </header><!-- #header end -->

        <!-- Slider
		============================================= -->
        <section id="slider" class="slider-element swiper_wrapper min-vh-100" data-loop="true" data-speed="1000"
            data-autoplay="5000">
            <div class="slider-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">Premium Classic Shoe</h2>
                                    <p class="mb-4" data-animate="fadeInUp" data-delay="100">A New Collection of Summer
                                        2019.</p>
                                    <div>
                                        <a href="#" data-animate="fadeInUp" data-delay="200"
                                            class="button button-large button-white button-light">Shop Men</a>
                                        <a href="#" data-animate="fadeInUp" data-delay="200"
                                            class="button button-large button-white button-light">Shop Women</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: url('webpage/demos/store/images/slider/1.jpg');"></div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">New Sports Collection</h2>
                                    <p class="mb-4" data-animate="fadeInUp" data-delay="100">Black &amp; White
                                        Collections</p>
                                    <div>
                                        <a href="#" data-animate="fadeInUp" data-delay="200"
                                            class="button button-large button-white button-light">Shop Men</a>
                                        <a href="#" data-animate="fadeInUp" data-delay="200"
                                            class="button button-large button-white button-light">Shop Women</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: linear-gradient(to bottom, rgba(0,0,0,.1), rgba(0,0,0,.6)), url('webpage/demos/store/images/slider/2.jpg');">
                            </div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">Latest Sweatshirts</h2>
                                    <p class="mb-4" data-animate="fadeInUp" data-delay="100">Collections for Summer
                                        Clothes</p>
                                    <div>
                                        <a href="#" data-animate="fadeInUp" data-delay="200"
                                            class="button button-large button-white button-light">Shop Men</a>
                                        <a href="#" data-animate="fadeInUp" data-delay="200"
                                            class="button button-large button-white button-light">Shop Women</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('webpage/demos/store/images/slider/3.jpg');">
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    <div class="slide-number">
                        <div class="slide-number-current"></div><span>/</span>
                        <div class="slide-number-total"></div>
                    </div>
                </div>

                <div class="social-icons">
                    <a href="#" class="social-icon si-small si-borderless si-rounded si-facebook">
                        <i class="icon-facebook text-white-50"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-borderless si-rounded si-instagram">
                        <i class="icon-instagram text-white-50"></i>
                        <i class="icon-instagram"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-borderless si-rounded si-youtube">
                        <i class="icon-youtube text-white-50"></i>
                        <i class="icon-youtube"></i>
                    </a>
                </div>

            </div>
        </section><!-- #Slider End -->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap pb-0">

                <!-- Login/Register Modal -->
                <div class="modal-register mfp-hide" id="modal-register">
                    <div class="card mx-auto" style="max-width: 540px;">
                        <div class="card-header py-3 bg-transparent center">
                            <h3 class="mb-0 font-weight-normal">Hello, Welcome Back</h3>
                        </div>
                        <div class="card-body mx-auto py-5" style="max-width: 70%;">

                            <a href="#"
                                class="button button-large btn-block si-colored si-facebook nott font-weight-normal ls0 center m-0"><i
                                    class="icon-facebook-sign"></i> Log in with Facebook</a>

                            <div class="divider divider-center"><span class="position-relative"
                                    style="top: -2px">OR</span></div>

                            <form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

                                <div class="col-12">
                                    <input type="text" id="login-form-username" name="login-form-username" value=""
                                        class="form-control not-dark" placeholder="Username" />
                                </div>

                                <div class="col-12 mt-4">
                                    <input type="password" id="login-form-password" name="login-form-password" value=""
                                        class="form-control not-dark" placeholder="Password" />
                                </div>

                                <div class="col-12 text-right">
                                    <a href="#" class="text-dark font-weight-light mt-2">Forgot Password?</a>
                                </div>

                                <div class="col-12 mt-4">
                                    <button class="button btn-block m-0" id="login-form-submit" name="login-form-submit"
                                        value="login">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-4 center">
                            <p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="mx-auto center bottommargin" style="max-width: 700px">
                        <h2>Fresh Collection of 2019</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur repudiandae
                            nobis earum voluptate id adipisci nostrum mollitia, ipsam, asperiores, soluta dolorem facere
                            exercitationem laborum. Magni mollitia laudantium vel tempore.</p>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row mt-2">
                        <div class="col-md-4 mb-5">
                            <div class="card cat-card rounded-0 border-0 dark">
                                <img src="webpage/demos/store/images/cat/outerwear.jpg" class="card-img rounded-0"
                                    alt="...">
                                <div class="d-flex align-items-start flex-column card-img-overlay p-4">
                                    <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto">50% Off</h3>
                                    <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Outerwear</h3>
                                    <p>This is a wider card as a natural lead-in to additional content. This content is
                                        a little bit longer.</p>
                                    <a href="#" class="button button button-white button-light ml-0">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card cat-card rounded-0 border-0 dark">
                                <img src="webpage/demos/store/images/cat/footwear.jpg" class="card-img rounded-0"
                                    alt="...">
                                <div class="d-flex align-items-start flex-column card-img-overlay bg p-4">
                                    <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto">50% Off</h3>
                                    <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Footwear</h3>
                                    <p>This is a wider card with supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <a href="#" class="button button button-white button-light ml-0">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card cat-card rounded-0 border-0 dark">
                                <img src="webpage/demos/store/images/cat/workout.jpg" class="card-img rounded-0"
                                    alt="...">
                                <div class="d-flex align-items-start flex-column card-img-overlay bg p-4">
                                    <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto">30% Off</h3>
                                    <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Sportswear</h3>
                                    <p>This is a wider card with supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <a href="#" class="button button button-white button-light ml-0">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="container-fluid topmargin">
                    <div class="row">
                        <div class="col-md-2 sticky-sidebar-wrap">
                            <ul class="list-unstyled items-nav sticky-sidebar">
                                <li><a href="#" class="text-dark font-weight-semibold">All Collections</a></li>
                                <li class="no-divider"><a href="#" class="text-dark font-weight-semibold">New
                                        Arrivals</a></li>
                                <li>
                                    <hr>
                                </li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">T-Shirts</a></li>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Skirts</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Shorts</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Sweat-shirts</a></li>
                                <li><a href="#">Sweaters</a></li>
                                <li><a href="#">Flats</a></li>
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">Loafers & Oxfords</a></li>
                                <li><a href="#">Heels</a></li>
                            </ul>
                        </div>

                        <div class="col-md-10">
                            <div class="row">

                                <!-- Shop Item 1
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image position-relative">
                                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/1-1.jpg"
                                                                    alt="Black Shoe"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/1-2.jpg"
                                                                    alt="Black Shoe"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">Black Sports Shoe</a></h3>
                                                <span><a href="#">Nike</a></span>
                                            </div>
                                            <div class="product-price"><ins>$21.49</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 2
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image position-relative">
                                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/2-1.jpg"
                                                                    alt="Sports Shoe"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/2-2.jpg"
                                                                    alt="Sports Shoe"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">Sports Shoe</a></h3>
                                                <span><a href="#">Nike</a></span>
                                            </div>
                                            <div class="product-price"><ins>$21.49</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 3
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image position-relative">
                                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/3-1.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/3-2.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/3-3.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/3-4.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">Men Black Sweatshirt</a></h3>
                                                <span><a href="#">Sweatshirt</a></span>
                                            </div>
                                            <div class="product-price"><ins>$21.49</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 4
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image position-relative">
                                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/4-1.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/4-2.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">Roundneck T-shirt</a></h3>
                                                <span><a href="#">T-shirt</a></span>
                                            </div>
                                            <div class="product-price"><ins>$21.49</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 5
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image position-relative">
                                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/5-1.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/5-2.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">Women Sports Pant</a></h3>
                                                <span><a href="#">Trousers</a></span>
                                            </div>
                                            <div class="product-price"><ins>$21.49</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 6
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image position-relative">
                                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/6-1.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/6-2.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">Men White Escaper SL Running Sports Shoes</a></h3>
                                                <span><a href="#">Sports Shoes</a></span>
                                            </div>
                                            <div class="product-price"><ins>$21.49</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 7
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image position-relative">
                                            <div class="fslider" data-arrows="false" data-pagi="false" data-speed="400"
                                                data-pause="6000" data-thumbs="true">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"
                                                            data-thumb="webpage/demos/store/images/product/7-1.jpg">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/7-1.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide"
                                                            data-thumb="webpage/demos/store/images/product/7-2.jpg">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/7-2.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide"
                                                            data-thumb="webpage/demos/store/images/product/7-3.jpg">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/7-3.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">The Cotton Weave Shirtdress</a></h3>
                                                <span><a href="#">Women Dress</a></span>
                                            </div>
                                            <div class="product-price"><ins>$78</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 8
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image">
                                            <a href="#"><img src="webpage/demos/store/images/product/8-1.jpg"
                                                    alt="Morning Dew"></a>
                                            <a href="#"><img src="webpage/demos/store/images/product/8-2.jpg"
                                                    alt="Morning Dew"></a>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#"> Navi Blue Jeans</a></h3>
                                                <span><a href="#">Denim</a></span>
                                            </div>
                                            <div class="product-price"><ins>$78</ins></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shop Item 9
								============================================= -->
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/9-1.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/9-2.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                        <div class="slide">
                                                            <a href="#"><img
                                                                    src="webpage/demos/store/images/product/9-3.jpg"
                                                                    alt="Morning Dew"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="cart-btn button button-white button-light"><i
                                                    class="icon-line-plus"></i>Add to Cart</a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#"> Navi Blue Jeans</a></h3>
                                                <span><a href="#">Denim</a></span>
                                            </div>
                                            <div class="product-price"><ins>$78</ins></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <img src="webpage/demos/store/images/others/travel.jpg" alt="image" class="mb-4">
                            <h4 class="mb-2"><a href="#">Want to travel? Great Stuffs for Travel</a></h4>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo doloremque
                                eveniet dolorem, porro earum. Eius, corrupti provident iusto modi sunt.</p>
                            <a href="#" class="stretched-link btn p-0 font-weight-semibold"><u>View Details</u> <i
                                    class="icon-line-arrow-right position-relative ml-1" style="top: 2px"></i></a>
                        </div>

                        <div class="col-md-6 mb-5">
                            <img src="webpage/demos/store/images/others/store.jpg" alt="image" class="mb-4">
                            <h4 class="mb-2">Our Melbourne Store</h4>
                            <p class="mb-2">Authoritatively deliver 2.0 niches vis-a-vis backward-compatible
                                infomediaries. Authoritatively actualize empowered e-tailers with just in time.</p>
                            <p class="mb-3"><i class="icon-map-marker-alt"></i> <strong>Headquarters: </strong><a
                                    href="#" class="text-black-50 under btn-link"> 795 Folsom Ave, Suite 600 San
                                    Francisco, CA 94107</a></p>
                            <a href="#" class="btn p-0 font-weight-semibold"><u>Visit Our Store</u> <i
                                    class="icon-line-arrow-right position-relative ml-1" style="top: 2px"></i></a>
                        </div>
                    </div>
                </div>

                <div class="section m-0 border-0" style="padding: 120px 0;">
                    <div class="video-wrap" style="z-index: 0">
                        <video poster="one-page/images/page/portrait/video-poster.jpg" preload="auto" loop autoplay
                            muted>
                            <source src='one-page/images/page/portrait/video.mp4' type='video/mp4' />
                        </video>
                        <div class="video-overlay" style="background: rgba(0,0,0,0.2)"></div>
                    </div>
                    <div class="emphasis-title widget subscribe-widget mx-auto center px-4" data-loader="button"
                        style="max-width: 650px">
                        <h2 class="font-weight-bold text-white">Subscribe Now</h2>
                        <p class="mb-5 text-white-50 lead" data-delay="100">Subscribe to Our Newsletter to get Important
                            News, Amazing Offers & Inside Scoops:</p>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form-2" action="include/subscribe.php" method="post"
                            class="mt-1 input-group input-group-lg mb-0">
                            <input type="email" id="widget-subscribe-form-2-email" name="widget-subscribe-form-email"
                                class="form-control required email rounded-0 border-0"
                                placeholder="Enter your Email Address">

                            <div class="input-group-append">
                                <button class="btn btn-dark bg-color rounded-0 text-uppercase font-weight-bold"
                                    type="submit" style="font-size: 16px">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="section mt-0 mb-0" style="padding: 80px 0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-uppercase">Shipping Worldwide</h4>
                                <p>Minimum $999 for free Shipping. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Odio sequi natus eveniet, dicta magni! Modi nihil quis quos at mollitia.</p>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-uppercase">Free Returns</h4>
                                <p class="h6 font-weight-bold">Within 30 days Guarantee</p>
                                <p>Synergistically repurpose ethical value and backend paradigms. Holisticly architect
                                    effective expertise for installed base e-markets.</p>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-uppercase">Customer Service</h4>
                                <p>Odio sequi natus eveniet, dicta magni! Modi nihil quis quos at mollitia.</p>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+0) 9876 543211<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (+0) 11 2222 3333<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> noreply@canvas.com<br>

                                <a href="#" class="social-icon si-small si-light si-rounded si-facebook mt-4 mr-2">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-light si-rounded si-instagram mt-4 mr-2">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-light si-rounded si-youtube mt-4 mr-2">
                                    <i class="icon-youtube"></i>
                                    <i class="icon-youtube"></i>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-uppercase">Our Stores</h4>
                                <address>
                                    <strong>Melbourne Store:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>

                                <address class="mb-3">
                                    <strong>Sydney Store:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Time"><strong>Timing:</strong></abbr> Every day: 10am – 7pm<br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section bg-transparent py-3">
                    <div class="container-fluid">
                        <div class="row justify-content-center m-auto" style="max-width: 1000px;">
                            <div class="col-md-7">
                                <p class="h6 mb-0 text-muted">Conveniently network effective total linkage via
                                    intermandated opportunities. Distinctively <a
                                        href="mailto:noreply@canvas.com"><u>noreply@canvas.com</u></a> premium products.
                                </p>
                            </div>
                            <div class="col-md-5 mt-3 mt-md-0">
                                <h2 class="h1 font-weight-bold ls--1 color"><a href="tel:09876543211">(+0) 9876
                                        543210</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="instagram-button position-relative">
					<div id="instagram-photos" class="instagram-photos masonry-thumbs grid-8" data-user="5834720953" data-count="8" data-type="user" data-resolution="low_resolution"></div>
				</div> -->

            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="bg-color dark border-0">

            <div class="container-fluid">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap pb-5">

                    <div class="row">

                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget">

                                <h4 class="ls0 mb-3 nott">Features</h4>

                                <ul class="list-unstyled iconlist ml-0">
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Paid with Moblie</a></li>
                                    <li><a href="#">Status</a></li>
                                    <li><a href="#">Changelog</a></li>
                                    <li><a href="#">Contact Support</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget">

                                <h4 class="ls0 mb-3 nott">Support</h4>

                                <ul class="list-unstyled iconlist ml-0">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget">

                                <h4 class="ls0 mb-3 nott">Trending</h4>

                                <ul class="list-unstyled iconlist ml-0">
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Forums</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget">

                                <h4 class="ls0 mb-3 nott">Get to Know us</h4>

                                <ul class="list-unstyled iconlist ml-0">
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Agency</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Personal</a></li>
                                    <li><a href="#">OnePage</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget">

                                <h4 class="ls0 mb-3 nott">Instagram Feed</h4>
                                <div id="instagram-photos" class="instagram-photos masonry-thumbs grid-5"
                                    data-user="blog.canvastemplate" data-count="10"></div>

                            </div>
                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">

                <div class="container-fluid clearfix">

                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
                            <ul class="list-unstyled d-flex flex-row mb-2 clearfix">
                                <li class="mr-2"><img src="webpage/demos/xmas/images/cards/visa.svg" alt="Visa"
                                        width="34"></li>
                                <li class="mr-2"><img src="webpage/demos/xmas/images/cards/mc.svg" alt="Master Card"
                                        width="34">
                                </li>
                                <li class="mr-2"><img src="webpage/demos/xmas/images/cards/ae.svg"
                                        alt="American Express" width="34"></li>
                                <li class="mr-2"><img src="webpage/demos/xmas/images/cards/pp.svg" alt="PayPal"
                                        width="34"></li>
                                <li class="mr-2"><img src="webpage/demos/xmas/images/cards/sk.svg" alt="Skrill"
                                        width="34"></li>
                                <li class="mr-2"><img src="webpage/demos/xmas/images/cards/2co.svg" alt="2CheckOut"
                                        width="34">
                                </li>
                                <li class="mr-2"><img src="webpage/demos/xmas/images/cards/wu.svg" alt="Western Union"
                                        width="34"></li>
                            </ul>
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="#">About</a>/<a href="#">Features</a>/<a href="#">FAQs</a>/<a
                                    href="#">Contact</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="webpage/js/jquery.js"></script>
    <script src="webpage/js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="webpage/js/functions.js"></script>

    <script>
        $(document).ready(changeHeaderColor);
        $(window).on('resize', changeHeaderColor);

        function changeHeaderColor() {
            if (jQuery(window).width() > 991.98) {
                jQuery("#header").hover(
                    function () {
                        if (!$(this).hasClass("sticky-header")) {
                            $(this).addClass("hover-light").removeClass("dark");
                            SEMICOLON.header.logo();
                        }
                        $("#wrapper").addClass("header-overlay");
                    },
                    function () {
                        if (!$(this).hasClass("sticky-header")) {
                            $(this).removeClass("hover-light").addClass("dark");
                            SEMICOLON.header.logo();
                        }
                        $("#wrapper").removeClass("header-overlay");
                    }
                );
            }
        };

        $(window).scroll(function () {
            if ($(document).scrollTop() > 2000 && $("#modal-subscribe").attr("displayed") === "false") {
                $('#modal-subscribe').modal('show');
                $("#modal-subscribe").attr("displayed", "true");
            }
        });

        jQuery('#modal-subscribe-form').on('formSubmitSuccess', function () {
            $("#modal-subscribe").addClass("fadeOutDown");
            setTimeout(function () {
                $('#modal-subscribe').modal('hide');
            }, 400);
            $("#modal-subscribe").attr("displayed", "false");
        });

    </script>

</body>

</html>
