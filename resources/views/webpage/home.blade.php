@extends('template')
@section('activehome','active')
@section('titlepage','Home')

@section('content')
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
                            <h2 data-animate="fadeInUp">Hello!</h2>
                            <p class="mb-4" data-animate="fadeInUp" data-delay="100">We effort you the best collection
                                of us.</p>
                            <div>
                                @foreach ($stock as $stock)
                                <a href="/group/{{$stock->stockgroup_id}}" data-animate="fadeInUp" data-delay="200"
                                    class="button button-large button-white button-light">{{$stock->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('webpage/asset/images/header.jpg');">
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
            <a href="/facebook" class="social-icon si-small si-borderless si-rounded si-facebook">
                <i class="icon-facebook text-white-50"></i>
                <i class="icon-facebook"></i>
            </a>
            <a href="/instagram" class="social-icon si-small si-borderless si-rounded si-instagram">
                <i class="icon-instagram text-white-50"></i>
                <i class="icon-instagram"></i>
            </a>
            <a href="/youtube" class="social-icon si-small si-borderless si-rounded si-youtube">
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
                <h2>Hi! Stiff Was Here!</h2>
                <p><b>“Show your confidence.”</b><br>
                    Daring to get out there and expressing confidence is something that everyone must do. Not only we
                    believe in that, but we also strive to help you with it. <b>STIFF WAS HERE</b> is a brand that
                    turned
                    restlessness that happens in Society into a work of fashion. We made shirts with rayon material and
                    outerwear with canvas suede material to help increase your comfort level in expressing your
                    confidence.</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-6 mb-5">
                    <div class="card cat-card rounded-0 border-0 dark">
                        <img src="{!!asset('webpage/asset/images/shirts.jpg')!!}" class="card-img rounded-0" alt="...">
                        <div class="d-flex align-items-start flex-column card-img-overlay bg p-4">
                            <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto"></h3>
                            <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Shirts</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                            <a href="/shirts" class="button button button-white button-light ml-0">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card cat-card rounded-0 border-0 dark">
                        <img src="{!!asset('webpage/asset/images/outerwear.jpg')!!}" class="card-img rounded-0"
                            alt="...">
                        <div class="d-flex align-items-start flex-column card-img-overlay bg p-4">
                            <h3 class="h3 text-white ls--1 font-weight-bold mt-2 mb-auto"></h3>
                            <h3 class="h2 text-white ls--1 font-weight-bold mb-4">Outerwear</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="/outerwear" class="button button button-white button-light ml-0">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="container-fluid topmargin">
            <div class="row">
                {{-- <div class="col-md-2 sticky-sidebar-wrap">
                    <ul class="list-unstyled items-nav sticky-sidebar">
                        <li><a href="#" class="text-dark font-weight-semibold">Shirt</a></li>
                        <li><a href="#">Introvert</a></li>
                        <li><a href="#">Toxic People</a></li>
                        <li><a href="#">Insecure</a></li>
                        <li><a href="#">Excessive Discipline</a></li>
                        <li>
                            <hr>
                        </li>
                        <li><a href="#" class="text-dark font-weight-semibold">Outerwear</a></li>
                        <li><a href="#">Emotional</a></li>
                        <li><a href="#">Society</a></li>
                    </ul>
                </div> --}}

                <div class="col-md-12">
                    <div class="row">
                        @foreach ($itemGroup as $item)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="product">
                                <div class="product-image position-relative">
                                    <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                @foreach ($item->img as $imgs)
                                                <div class="slide">
                                                    <a href="#"><img src="{{$imgs->file}}" alt="Emotional Shirts"></a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/products/{{$item->itemgroup_id}}"
                                        class="cart-btn button button-white button-light">> See the products
                                        <</a> </div> <div class="product-desc">
                                            <div class="product-title">
                                                <h3><a href="#">{{$item->name}}</a></h3>
                                                <span><a href="#">stiffwashere</a></span>
                                            </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <img src="{!!asset('webpage/demos/store/images/others/travel.jpg')!!}" alt="image" class="mb-4">
                    <h4 class="mb-2"><a href="#">Want to travel? Great Stuffs for Travel</a></h4>
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="stretched-link btn p-0 font-weight-semibold"><u>View Details</u> <i
                            class="icon-line-arrow-right position-relative ml-1" style="top: 2px"></i></a>
                </div>

                <div class="col-md-6 mb-5">
                    <img src="{!!asset('webpage/demos/store/images/others/store.jpg')!!}" alt="image" class="mb-4">
                    <h4 class="mb-2">Our Melbourne Store</h4>
                    <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn p-0 font-weight-semibold"><u>Visit Our Store</u> <i
                            class="icon-line-arrow-right position-relative ml-1" style="top: 2px"></i></a>
                </div>
            </div>
        </div> --}}

    </div>
</section><!-- #content end -->
@endsection
