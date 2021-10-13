@extends('template')
@section('activeproduct','active')
@section('titlepage','Our Product')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
    style="background-image: url('webpage/asset/images/header.jpg'); background-size: cover; padding: 170px 0 100px;"
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
            <div class="single-product">
                <div class="product">
                    <div class="row gutter-40">

                        <div class="col-md-5">

                            <!-- Product Single - Gallery
									============================================= -->
                            <div class="product-image">
                                <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                    <div class="flexslider">
                                        <div class="slider-wrap" data-lightbox="gallery">
                                            @foreach ($item[0]->img as $items)
                                            <div class="slide" data-thumb="{{$items->file}}"><a href="{{$items->file}}"
                                                    title="{{$item[0]->item_name}}" data-lightbox="gallery-item"><img
                                                        src="{{$items->file}}" alt="Stiffwashere asset"></a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="sale-flash badge bg-danger p-2">Sale!</div>
                            </div><!-- Product Single - Gallery End -->

                        </div>

                        <div class="col-md-7 product-desc">

                            <div class="d-flex align-items-center justify-content-between">

                                <!-- Product Single - Price
										============================================= -->
                                <div class="product-price"> <ins>{{number_format($item[0]->price,2)}}</ins></div>
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

                            {{-- <div class="line"></div> --}}

                            <!-- Product Single - Quantity & Cart Button
									============================================= -->
                            <form class="cart mb-0 d-flex justify-content-between align-items-center"
                                action="/add-card/{{$item[0]->id}}" method="GET">
                                <button type="submit" class="add-to-cart button m-0">Add to cart</button>
                            </form><!-- Product Single - Quantity & Cart Button End -->

                            {{-- <div class="line"></div> --}}

                            <!-- Product Single - Short Description
									============================================= -->
                            {{$item[0]->descriptions}}
                            <!-- Product Single - Short Description End -->

                            <!-- Product Single - Meta
									============================================= -->
                            {{-- <div class="card product-meta">
                                <div class="card-body">
                                    <span itemprop="productID" class="sku_wrapper">SKU: <span
                                            class="sku">8465415</span></span>
                                    <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
                                    <span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#"
                                            rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#"
                                            rel="tag">Printed</a>.</span>
                                </div>
                            </div><!-- Product Single - Meta End --> --}}

                            <!-- Product Single - Share
									============================================= -->
                            {{-- <div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
                                <span>Share:</span>
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

                        <div class="w-100"></div>

                        <div class="col-12 mt-5">

                            <div class="tabs clearfix mb-0" id="tab-1">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span
                                                class="d-none d-md-inline-block"> Description</span></a></li>
                                    {{-- <li><a href="#tabs-2"><i class="icon-info-sign"></i><span
                                                class="d-none d-md-inline-block"> Additional Information</span></a></li>
                                    <li><a href="#tabs-3"><i class="icon-star3"></i><span
                                                class="d-none d-md-inline-block"> Reviews (2)</span></a></li> --}}
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        {!!$item[0]->descriptions!!}
                                    </div>
                                    {{-- <div class="tab-content clearfix" id="tabs-2">

                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Size</td>
                                                    <td>Small, Medium &amp; Large</td>
                                                </tr>
                                                <tr>
                                                    <td>Color</td>
                                                    <td>Pink &amp; White</td>
                                                </tr>
                                                <tr>
                                                    <td>Waist</td>
                                                    <td>26 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Length</td>
                                                    <td>40 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Chest</td>
                                                    <td>33 inches</td>
                                                </tr>
                                                <tr>
                                                    <td>Fabric</td>
                                                    <td>Cotton, Silk &amp; Synthetic</td>
                                                </tr>
                                                <tr>
                                                    <td>Warranty</td>
                                                    <td>3 Months</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-content clearfix" id="tabs-3">

                                        <div id="reviews" class="clearfix">

                                            <ol class="commentlist clearfix">

                                                <li class="comment even thread-even depth-1" id="li-comment-1">
                                                    <div id="comment-1" class="comment-wrap clearfix">

                                                        <div class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <span class="comment-avatar clearfix">
                                                                    <img alt='Image'
                                                                        src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                                        height='60' width='60' /></span>
                                                            </div>
                                                        </div>

                                                        <div class="comment-content clearfix">
                                                            <div class="comment-author">John Doe<span><a href="#"
                                                                        title="Permalink to this comment">April 24, 2021
                                                                        at 10:46AM</a></span></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Quo perferendis aliquid tenetur. Aliquid, tempora, sit
                                                                aliquam officiis nihil autem eum at repellendus facilis
                                                                quaerat consequatur commodi laborum saepe non nemo nam
                                                                maxime quis error tempore possimus est quasi
                                                                reprehenderit fuga!</p>
                                                            <div class="review-comment-ratings">
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star-half-full"></i>
                                                            </div>
                                                        </div>

                                                        <div class="clear"></div>

                                                    </div>
                                                </li>

                                                <li class="comment even thread-even depth-1" id="li-comment-2">
                                                    <div id="comment-2" class="comment-wrap clearfix">

                                                        <div class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <span class="comment-avatar clearfix">
                                                                    <img alt='Image'
                                                                        src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                                        height='60' width='60' /></span>
                                                            </div>
                                                        </div>

                                                        <div class="comment-content clearfix">
                                                            <div class="comment-author">Mary Jane<span><a href="#"
                                                                        title="Permalink to this comment">June 16, 2021
                                                                        at 6:00PM</a></span></div>
                                                            <p>Quasi, blanditiis, neque ipsum numquam odit asperiores
                                                                hic dolor necessitatibus libero sequi amet voluptatibus
                                                                ipsam velit qui harum temporibus cum nemo iste aperiam
                                                                explicabo fuga odio ratione sint fugiat consequuntur
                                                                vitae adipisci delectus eum incidunt possimus tenetur
                                                                excepturi at accusantium quod doloremque reprehenderit
                                                                aut expedita labore error atque?</p>
                                                            <div class="review-comment-ratings">
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                            </div>
                                                        </div>

                                                        <div class="clear"></div>

                                                    </div>
                                                </li>

                                            </ol>

                                            <!-- Modal Reviews
													============================================= -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#reviewFormModal"
                                                class="button button-3d m-0 float-end">Add a Review</a>

                                            <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog"
                                                aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="reviewFormModalLabel">Submit a
                                                                Review</h4>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row mb-0" id="template-reviewform"
                                                                name="template-reviewform" action="#" method="post">

                                                                <div class="col-6 mb-3">
                                                                    <label for="template-reviewform-name">Name
                                                                        <small>*</small></label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-text"><i
                                                                                class="icon-user"></i></div>
                                                                        <input type="text" id="template-reviewform-name"
                                                                            name="template-reviewform-name" value=""
                                                                            class="form-control required" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-6 mb-3">
                                                                    <label for="template-reviewform-email">Email
                                                                        <small>*</small></label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-text">@</div>
                                                                        <input type="email"
                                                                            id="template-reviewform-email"
                                                                            name="template-reviewform-email" value=""
                                                                            class="required email form-control" />
                                                                    </div>
                                                                </div>

                                                                <div class="w-100"></div>

                                                                <div class="col-12 mb-3">
                                                                    <label
                                                                        for="template-reviewform-rating">Rating</label>
                                                                    <select id="template-reviewform-rating"
                                                                        name="template-reviewform-rating"
                                                                        class="form-select">
                                                                        <option value="">-- Select One --</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                </div>

                                                                <div class="w-100"></div>

                                                                <div class="col-12 mb-3">
                                                                    <label for="template-reviewform-comment">Comment
                                                                        <small>*</small></label>
                                                                    <textarea class="required form-control"
                                                                        id="template-reviewform-comment"
                                                                        name="template-reviewform-comment" rows="6"
                                                                        cols="30"></textarea>
                                                                </div>

                                                                <div class="col-12">
                                                                    <button class="button button-3d m-0" type="submit"
                                                                        id="template-reviewform-submit"
                                                                        name="template-reviewform-submit"
                                                                        value="submit">Submit Review</button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <!-- Modal Reviews End -->

                                        </div>

                                    </div> --}}

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="line"></div>

            <div class="w-100">

                <h4>Related Products</h4>

                <div class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false"
                    data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">

                    @foreach ($itemRelated as $itemRelated)
                    <div class="oc-item">
                        <div class="product">
                            <div class="product-image">
                                @foreach ($itemRelated->img as $itemImg)
                                <a href="#"><img src="{{$itemImg->file}}"></a>
                                @endforeach
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between"
                                        data-hover-animate="fadeIn" data-hover-speed="400">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark"
                                            data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title">
                                    <h3><a href="#">{{$itemRelated->item_name}}</a></h3>
                                </div>
                                <div class="product-price"> <ins>{{number_format($itemRelated->price,2)}}</ins></div>
                                {{-- <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->
@endsection
