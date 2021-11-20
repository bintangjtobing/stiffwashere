@extends('template')
@section('activeproduct','active')
@section('titlepage','Collection')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
    style="background-image: url('webpage/asset/images/header.jpg'); background-size: cover; padding: 170px 0 100px;"
    data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

    <div class="container clearfix">
        @if (!$item->isEmpty())
        <h1>{{$item[0]->name}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$item[0]->name}}</li>
        </ol>
        @else
        <h1>No products here</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ol>
        @endif
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">
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
            <div class="row justify-content-between">
                @if (!$item->isEmpty())
                <div class="col-md-12">
                    <h1>{{$item[0]->name}}</h1>
                    <p>{!!$item[0]->remarks!!}</p>
                    <div class="row">
                        @foreach ($item as $items)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="product">
                                <div class="product-image position-relative">
                                    <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                @foreach ($items->img as $imgs)
                                                <div class="slide">
                                                    <a href="#"><img src="{{$imgs->file}}" alt="Emotional Shirts"></a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/add-card/{{$items->id}}"
                                        class="cart-btn button button-white button-light"><i
                                            class="icon-line-plus"></i>Add to Cart</a>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title">
                                        <h3><a
                                                href="/products/{{$items->stockgroup_id}}/{{$items->id}}">{{$items->item_name}}</a>
                                        </h3>
                                        <span><a href="#">stiffwashere</a></span>
                                    </div>
                                    <div class="product-price"><ins>Rp. {{number_format($items->price,2)}}</ins></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="col-md-12">
                    <h1>No Products here</h1>
                    <p>No Products here</p>
                </div>
                @endif
            </div>
            <div class="clear my-5"></div>
        </div>
</section><!-- #content end -->
@endsection
