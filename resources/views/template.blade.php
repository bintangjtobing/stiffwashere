<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="boxitycentralindonesia" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/bootstrap.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/style.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/swiper.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/dark.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('webpage/css/font-icons.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/animate.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/magnific-popup.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('webpage/css/custom.css')!!}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Store Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{!!asset('webpage/css/custom.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/colors.php?color=222222')!!}" type="text/css" />
    <!-- Store Theme Color -->
    <link rel="stylesheet" href="{!!asset('webpage/demos/store/css/fonts.css')!!}" type="text/css" />
    <!-- Store Theme Font -->
    <link rel="stylesheet" href="{!!asset('webpage/demos/store/store.css')!!}" type="text/css" />
    <!-- Store Theme Custom CSS -->
    <script src="https://kit.fontawesome.com/bf3b9c3659.js')!!}" crossorigin="anonymous"></script>
    <!-- / -->

    <!-- Document Title
	============================================= -->
    <title>@yield('titlepage') - Stiff Was Here | Apparel & Clothes</title>
    <link rel="shortcut icon" href="{!!asset('256.png')!!}" type="image/png" sizes="64x64">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="STIFF WAS HERE is a brand that turned restlessness that happens in Society into a work of fashion. We made shirts with rayon material and outerwear with canvas suede material to help increase your comfort level in expressing your confidence.">
    <meta name="keywords" content="Stiffwashere, stiff was here, stiff apparel, stiffwashere clothes">
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

                            <form class="mb-0" id="modal-subscribe-form" action="/subscription/new" method="post">
                                @csrf
                                <label for="modal-subscribe-form-email">Email Address <span>*</span></label>
                                <input type="email" name="email" id="modal-subscribe-form-email"
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
                            <a href="/" class="standard-logo"
                                data-dark-logo="{!!asset('webpage/asset/logo/putih1-02-putih.png')!!}"><img
                                    src="{!!asset('webpage/asset/logo/putih1-02-black.png')!!}"
                                    alt="Stiffwashere Logo"></a>
                            <a href="/" class="retina-logo"
                                data-dark-logo="{!!asset('webpage/asset/logo/putih1-02-putih.png')!!}"><img
                                    src="{!!asset('webpage/asset/logo/putih1-02-black.png')!!}"
                                    alt="Stiffwashere Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            {{-- <!-- Top Login
							============================================= -->
                            <div id="top-account" class="px-4">
                                <a href="#modal-register" data-lightbox="inline">Sign up/Login</a>
                            </div><!-- #top-search end --> --}}

                            <!-- Top Cart
							============================================= -->
                            {{-- <div id="top-cart"> --}}
                            <a href="/cart" id="top-cart-trigger" class="position-relative"><i
                                    class="icon-line-bag"></i><span
                                    class="top-cart-number">{{count((array)session('cart'))}}</span></a>
                            {{-- </div><!-- #top-cart end --> --}}
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
                                <li class="menu-item current"><a class="menu-link" href="/">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item current"><a class="menu-link" href="/products">
                                        <div>Products</div>
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
                                                                        <strong>Jakarta Store:</strong><br>
                                                                        Jl. Salam Raya No.99, RT.7/RW.6, Sukabumi
                                                                        Utara,<br> Kec. Kb. Jeruk, Kota Jakarta Barat,
                                                                        <br>Daerah Khusus Ibukota Jakarta 11540
                                                                    </address>
                                                                    <abbr
                                                                        title="Phone Number"><strong>Phone:</strong></abbr>
                                                                    +62 821-1776-8806<br>
                                                                    <abbr
                                                                        title="Email Address"><strong>Email:</strong></abbr>
                                                                    info@stiffwashere.id
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
                                                            <li class="menu-item"><a class="menu-link" href="/about-us">
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
                                                            <li class="menu-item"><a class="menu-link"
                                                                    href="/terms-condition#kebijakan-pengembalian-dana">
                                                                    <div>Q. Bagaimana saya refund dana?</div>
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
                                <li class="menu-item"><a class="menu-link" href="/contact-us">
                                        <div>Contact Us</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/about-us">
                                        <div>About Us</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </div>
            <div class="header-wrap-clone"></div>

        </header><!-- #header end -->

        @yield('content')

        <!-- Footer
		============================================= -->
        <footer id="footer" class="bg-color dark border-0">
            <div class="section mt-0 mb-0" style="padding: 80px 0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h4 class="text-uppercase">Free Returns</h4>
                            <p class="h6 font-weight-bold">Within 30 days Guarantee</p>
                            <p>Synergistically repurpose ethical value and backend paradigms. Holisticly architect
                                effective expertise for installed base e-markets.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4 class="text-uppercase">Customer Service</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> +62 821-1776-8806<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@stiffwashere.id<br>

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

                        <div class="col-md-6 col-sm-6">
                            <h4 class="text-uppercase">Our Stores</h4>
                            <address>
                                <strong>Jakarta Store:</strong><br>
                                Jl. Salam Raya No.99, RT.7/RW.6, Sukabumi Utara,<br> Kec. Kb. Jeruk, Kota Jakarta Barat,
                                <br>Daerah Khusus Ibukota Jakarta 11540
                            </address>
                            <abbr title="Time"><strong>Timing:</strong></abbr> Every day: 10am – 7pm<br>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">

                <div class="container-fluid clearfix">

                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            <?php $Y=Date('Y'); ?>
                            &copy;{{$Y}} Stiff Was Here - All Rights Reserved by <abbr
                                title="MeAndCreativeLab CC">MeAndCreativeLab</abbr> | Partnership with
                            <abbr title="Boxity App"><a href="https://boxity.id">Boxity Central Indonesia</a></abbr><br>
                            <div class="copyright-links"><a href="/terms-condition">Terms and condition</a> / <a
                                    href="#">Privacy
                                    Policy</a>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="#">About</a>/<a href="#">Features</a>/<a href="#">FAQs</a>/<a href="#">Contact
                                    Us</a>
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
    <script src="{!!asset('webpage/js/jquery.js')!!}"></script>
    <script src="{!!asset('webpage/plugins/popper/popper.min.js')!!}"></script>
    <script src="{!!asset('webpage/js/plugins.min.js')!!}"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="{!!asset('webpage/js/functions.js')!!}"></script>
    @yield('scripts')

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
