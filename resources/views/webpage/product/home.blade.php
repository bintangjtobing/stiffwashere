@extends('template')
@section('activeproduct','active')
@section('titlepage','Our Product')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
    style="background-image: url('webpage/asset/images/header.jpg'); background-size: cover; padding: 170px 0 100px;"
    data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

    <div class="container clearfix">
        <h1>Our Products</h1>
        <span>Our Product</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Product</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">
            <div class="row justify-content-between">
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
            <div class="clear my-5"></div>
        </div>
</section><!-- #content end -->
@endsection
