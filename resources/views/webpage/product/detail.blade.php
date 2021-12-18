@extends('template')
@section('activeproduct','active')
@section('titlepage','Our Product')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
    style="background-image: url('/webpage/asset/images/header.jpg'); background-size: cover; padding: 170px 0 100px;"
    data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

    <div class="container clearfix">
        <h1>{{$item[0]->item_name}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$item[0]->item_name}}</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            @if(session('selamat'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="style-msg successmsg">
                        <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong>
                            {{session('selamat')}}
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
            @endif
            <div class="single-product mb-6">
                <div class="product">
                    <div class="container-fluid">
                        <div class="row gutter-50">
                            <div class="col-xl-7 col-lg-5 mb-0 sticky-sidebar-wrap">

                                <div class="masonry-thumbs grid-container grid-2" data-lightbox="gallery">
                                    @foreach ($item[0]->img as $items)
                                    <a class="grid-item" href="{{$items->file}}" data-lightbox="gallery-item"><img
                                            src="{{$items->file}}"></a>
                                    @endforeach
                                </div>

                            </div>

                            <div class="col-xl-5 col-lg-7 mb-0">

                                <div class="d-flex align-items-center justify-content-between">

                                    <!-- Product Single - Price
										============================================= -->
                                    <div class="product-price"><ins>Rp. {{number_format($item[0]->price,0)}}</ins></div>
                                    <!-- Product Single - Price End -->

                                    <!-- Product Single - Rating
										============================================= -->
                                    {{-- <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div><!-- Product Single - Rating End --> --}}

                                </div>

                                <div class="line line-sm"></div>

                                <!-- Product Single - Quantity & Cart Button
									============================================= -->
                                <form action="/add-card/{{$item[0]->id}}"
                                    class="cart mb-0 d-flex justify-content-between align-items-center" method="get">
                                    {{-- <div class="quantity clearfix">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="1" name="quantity" value="1" title="Qty"
                                            class="qty" />
                                        <input type="button" value="+" class="plus">
                                    </div> --}}
                                    <button type="submit" class="add-to-cart button button-large m-0">Add to
                                        cart</button>
                                </form><!-- Product Single - Quantity & Cart Button End -->

                                <div class="line line-sm"></div>

                                <div data-readmore="true" data-readmore-size="250px"
                                    data-readmore-trigger-open="Read More <i class='icon-angle-down'></i>"
                                    data-readmore-trigger-close="false">

                                    <h3>{{$item[0]->item_name}}</h3>

                                    <!-- Product Single - Short Description
										============================================= -->
                                    <p>{{$item[0]->descriptions}}</p>


                                    <a href="#" class="btn btn-dark btn-sm read-more-trigger"></a>
                                </div>

                                <!-- Product Single - Meta
									============================================= -->
                                <div class="card product-meta mt-4 mb-5 rounded-0">
                                    <div class="card-body">
                                        <span itemprop="productID" class="sku_wrapper">Available quantity: <span
                                                class="sku">{{$item[0]->qty}} {{$item[0]->unit}}</span></span>
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                {{-- <div>
                                    <h4>Product Details</h4>
                                    <table class="table table-striped table-bordered mb-5">
                                        <tbody>
                                            <tr>
                                                <th width="150">Item</th>
                                                <th>Description</th>
                                            </tr>
                                            <tr>
                                                <td>Display</td>
                                                <td>Analogue</td>
                                            </tr>
                                            <tr>
                                                <td>Movement</td>
                                                <td>Quartz</td>
                                            </tr>
                                            <tr>
                                                <td>Power source</td>
                                                <td>Battery</td>
                                            </tr>
                                            <tr>
                                                <td>Dial style</td>
                                                <td>Solid round stainless steel dial</td>
                                            </tr>
                                            <tr>
                                                <td>Features</td>
                                                <td>Reset Time</td>
                                            </tr>
                                            <tr>
                                                <td>Strap style</td>
                                                <td>Silver-Toned bracelet style, stainless steel strap with a foldover
                                                    closure</td>
                                            </tr>
                                            <tr>
                                                <td>Water resistance</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>Warranty</td>
                                                <td>3 Months</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h4>Size & Fit</h4>
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Dial width</td>
                                                <td>40 mm</td>
                                            </tr>
                                            <tr>
                                                <td>Strap Width</td>
                                                <td>20 mm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> --}}

                                <!-- Product Single - Share
									============================================= -->
                                {{-- <div class="si-share d-flex justify-content-between align-items-center mt-4 border-0">
                                    <h4 class="mb-0">Share:</h4>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End --> --}}

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section mb-0">

                <div class="container mw-md text-center">
                    <h4>Similar Products</h4>

                    <div class="row justify-content-center gutter-1">

                        @foreach ($itemRelated as $itemRelated)
                        <div class="col-md-3 col-6 h-translate-y-sm all-ts">
                            <div class="product bg-white">
                                <div class="product-image position-relative">
                                    <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                @foreach ($itemRelated->img as $itemImg)
                                                <div class="slide">
                                                    <img src="{{$itemImg->file}}">
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <a href="#" class="cart-btn button button-white button-light"><i
                                            class="icon-line-plus"></i>Add to Cart</a> --}}
                                </div>
                                <div class="product-desc flex-column px-4">
                                    <div class="product-title">
                                        <h3>{{$itemRelated->item_name}}
                                        </h3>
                                        <span>{{$itemRelated->brand}}</span>
                                    </div>
                                    <div class="product-price"><ins>Rp. {{number_format($itemRelated->price)}}</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>
</section><!-- #content end -->
@endsection
