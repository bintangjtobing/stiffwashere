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
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <form action="/checkout" method="POST">
                    @csrf
                    <div class="col-lg-12">
                        <h3>Item</h3>
                        <div class="table-responsive mb-5">
                            <table class="table cart">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;" class="cart-product-remove">&nbsp;</th>
                                        <th style="width: 250px;" class="cart-product-name">Product</th>
                                        {{-- <th style="width: 80px;" class="cart-product-quantity">@Price</th> --}}
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
                                        {{-- <td class="cart-product-price">
                                            <a>{{$details['price']}}</a>
                                        </td> --}}
                                        <td class="cart-product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="-" class="minus">
                                                <input type="text" name="quantity" value="{{$details['quantity']}}"
                                                    class="qty" />
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                    {{-- <tr class="cart_item">
                                    <td colspan="3">
                                        <div class="row">
                                            <div class="col-lg-8 col-8 p-0 offset-4">
                                                <a href="#" data-toggle="modal" data-target="#requestquote"
                                                    class="button button-3d mt-0">Request Quotations</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr> --}}
                                    @else
                                    <tr>No item founded!</tr>
                                    @endif
                                </tbody>
                            </table>
                            <span>Note:</span>
                            <textarea name="ordernote" class="form-control" id="" cols="30" rows="3"></textarea>
                        </div>
                        <hr>
                        <h3>Alamat Pengiriman</h3>
                        <div class="row">
                            <div class="col-lg-12 my-1">
                                <span>Label Pengiriman:</span>
                                <input type="text" name="label" id="" class="form-control"
                                    placeholder="Tulis nama alamat" required>
                                <small>Contoh: Alamat Rumah, Alamat Kantor, Apartemen, Dropship</small>
                            </div>
                            <div class="col-lg-6 my-1">
                                <span>Nama Penerima:</span>
                                <input type="text" name="nama_penerima" id="" class="form-control" required>
                            </div>
                            <div class="col-lg-6 my-1">
                                <span>Nomor Telepon:</span>
                                <input type="text" name="nohp" id="" class="form-control" required>
                                <small>Contoh: 081234567890</small>
                            </div>
                            <div class="col-lg-6 my-1">
                                <span>Kota atau kecamatan:</span>
                                <input type="text" name="city" id="" class="form-control"
                                    placeholder="Tulis nama kota / kecamatan tujuan pengiriman" required>
                            </div>
                            <div class="col-lg-6 my-1">
                                <span>Kode Pos:</span>
                                <input type="text" name="zipcode" id="" class="form-control" required>
                            </div>
                            <div class="col-lg-12 my-1">
                                <span>Alamat lengkap:</span>
                                <input type="text" name="address"
                                    placeholder="Isi dengan nama jalan, nomor rumah, nomor kompleks, nama gedung, lantai atau nomor unit."
                                    id="" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <h3>Pilih Pengiriman</h3>
                        <span>Pilih durasi:</span>
                        <select name="pengiriman" id="" class="form-control">
                            <option value="reguler">Reguler <span>3-4 hari</span></option>
                            <option value="cargo">Cargo <span>5-12 hari</span></option>
                            <option value="express">Express <span>1-2 hari</span></option>
                        </select>
                        <hr>
                        <h3>Pilih Pembayaran</h3>
                        <select name="pembayaran" id="" class="form-control">
                            @foreach ($bank as $bank)
                            <option value="{{$bank->bank_id}}">{{$bank->bank->name}} -
                                {{$bank->account_no}} a.n. {{$bank->account_name}}</span></option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <button type="submit" class="btn btn-primary">Process</button>
                    </div>
                </form>
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
