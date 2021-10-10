@extends('template')
@section('activeCart','active')
@section('titlepage','Cart')
@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
    style="background-image: url('webpage/asset/images/header.jpg'); background-size: cover; padding: 170px 0 100px;"
    data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

    <div class="container clearfix">
        <h1>Cart</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
        ============================================= -->
@if(session('selamat'))
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="style-msg2 successmsg">
                    <div class="msgtitle">Well done sir/mam! :)</div>
                    <div class="sb-msg">
                        {{session('selamat')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<section id="content">
    <div class="modal fade" id="requestquote" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/request-quotation" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="staticBackdropLabel">Send Enquiry</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="request_name" placeholder="Your Name" id=""
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="request_company" placeholder="Your Company Name" id=""
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Valid Email Address" id=""
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Phone Number" id=""
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="messages" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Your Messages here..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="content-wrap">
        <div class="container">
            <div class="table-responsive mb-5">
                <table class="table cart">
                    <thead>
                        <tr>
                            <th style="width: 20px;" class="cart-product-remove">&nbsp;</th>
                            <th style="width: 250px;" class="cart-product-name">Product</th>
                            <th style="width: 100px;" class="cart-product-quantity">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>

                        @if(session('cart'))
                        @foreach (session('cart') as $id => $details)
                        <tr class="cart_item">
                            <td class="cart-product-remove">
                                <button class="btn-light btn-sm btn remove-from-cart" data-id="{{$id}}"
                                    title="Remove this item"><i class="icon-trash2"></i></button>
                            </td>
                            <td class="cart-product-name">
                                <a>{{$details['nama_item']}}</a>
                            </td>

                            <td class="cart-product-quantity">
                                <div class="quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" name="quantity" value="{{$details['quantity']}}" class="qty" />
                                    <input type="button" value="+" class="plus">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="cart_item">
                            <td colspan="3">
                                <div class="row">
                                    <div class="col-lg-8 col-8 p-0 offset-4">
                                        {{-- <a href="#" class="button button-3d m-0 float-right">Update Cart</a> --}}
                                        <a href="#" data-toggle="modal" data-target="#requestquote"
                                            class="button button-3d mt-0">Request Quotations</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @else
                        <tr>No item founded!</tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    jQuery(document).ready(function () {
        jQuery('.remove-from-cart').click(function (e) {
            e.preventDefault();
            var ele = $(this);

            if (confirm("Are you sure")) {
                $.ajax({
                    url: 'remove-from-cart',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    });

</script>
@endsection
