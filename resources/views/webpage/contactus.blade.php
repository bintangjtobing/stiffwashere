@extends('template')
@section('activecontact','active')
@section('titlepage','Contact Us')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
    style="background-image: url('webpage/asset/images/header.jpg'); background-size: cover; padding: 170px 0 100px;"
    data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

    <div class="container clearfix">
        <h1>Get in Touch</h1>
        <span>Contact Us</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <h2 class="h1 fw-bold mb-4">Contact Us</h2>
                    <span>Have any questions? Send us an email to let us know your inquires</span>
                    <div class="form-widget mt-3">

                        @if(\Session::has('success'))
                        <div class="form-result">
                            <span>Thank you!</span>
                        </div>
                        @endif

                        <form class="mb-0" id="template-contactform" name="template-contactform" action="/send-message"
                            method="post">
                            @csrf
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="name" value=""
                                        class="sm-form-control required" />
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="email" value=""
                                        class="required email sm-form-control" />
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="phone" value=""
                                        class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-12 form-group">
                                    <label for="template-contactform-subject">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject" value=""
                                        class="required sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message"
                                        name="message" rows="6" cols="30"></textarea>
                                </div>
                                <div class="col-12 form-group">

                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6LfIKJEbAAAAAJ8KjFzHalPot6USRkl8hwbHWMAi">
                                    </div>

                                </div>
                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" id="template-contactform-submit"
                                        name="template-contactform-submit" value="submit">Send Message</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix"
                                value="Thank you for the message! We received your message and will get back to you as soon as possible.">

                        </form>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                    <img src="webpage/demos/store/images/contact/1.jpg" alt="image">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6">
                    <h2 class="h1 fw-bold mb-4">Jakarta Store</h2>
                    <h4> Jl. K.H. Mas Mansyur No.121, RT.10/RW.11, <br>
                        Karet
                        Tengsin, Kecamatan Tanah Abang, Kota Jakarta
                        Pusat, <br> Daerah Khusus Ibukota Jakarta 10220
                    </h4>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr>
                    +62 821-1776-8806<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr>
                    info@stiffwashere.id
                    <div class="mt-4">
                        <a href="#" class="social-icon si-small si-colored rounded-0 si-facebook" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-colored rounded-0 si-instagram" title="instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear my-5"></div>
    </div>
</section><!-- #content end -->
@endsection
