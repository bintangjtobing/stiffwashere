@extends('template')
@section('activecontact','active')
@section('titlepage','Confirm Your Payment')

@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
    style="background-image: url('webpage/asset/images/header.jpg'); background-size: cover; padding: 170px 0 100px;"
    data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

    <div class="container clearfix">
        <h1>Confirm your payment</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Confirm Your Payment</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12 payment text-center">
                    <h2 class="h1 fw-bold mb-4">Confirm Your Payment</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <h3>This is your order number <span class="orderNum" data-toggle="tooltip"
                                    data-placement="top" title="Click & Copy to clipboard"
                                    data-clipboard-text="#{{$soNumber}}"
                                    data-original-title-success="#{{$soNumber}}">#{{$soNumber}}</span></h3>
                        </div>
                    </div>
                    <span>Silahkan transfer dengan intruksi yang tercantum dibawah. <br>Batas waktu transfer adalah
                        24:00:00</span>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <h3 class="mb-3">Transfer ke rekening:</h3>
                            <div class="row bankList">
                                @if ($bankCode == 14)
                                <div class="col-lg-6 text-left"><img
                                        src="https://res.cloudinary.com/boxity-id/image/upload/v1633965208/bank/bca_qykxwm.png"
                                        alt=""></div>
                                @endif
                                @if ($bankCode == 4)
                                <div class="col-lg-6 text-left"><img
                                        src="https://res.cloudinary.com/boxity-id/image/upload/v1633965208/bank/bni_gmkju8.png"
                                        alt=""></div>
                                @endif
                                @if ($bankCode == 1)
                                <div class="col-lg-6 text-left"><img
                                        src="https://res.cloudinary.com/boxity-id/image/upload/v1633965208/bank/bri_oowild.png"
                                        alt=""></div>
                                @endif
                                @if ($bankCode == 3)
                                <div class="col-lg-6 text-left"><img
                                        src="https://res.cloudinary.com/boxity-id/image/upload/v1633965208/bank/mandiri_ajgzc6.png"
                                        alt=""></div>
                                @endif
                                <div class="col-lg-6 text-left">
                                    <h4>{{$bankPaymentName}} <br>{{$bankPaymentAccountName}}</h4>
                                </div>
                            </div>
                            <div class="row norek justify-content-center">
                                <div class="col-lg-12 text-center align-middle">
                                    <h2 data-toggle="tooltip" data-placement="top" title="Click & Copy to clipboard"
                                        data-clipboard-text="{{$bankPaymentNo}}"
                                        data-original-title-success="{{$bankPaymentNo}}">{{$bankPaymentNo}}
                                    </h2>
                                </div>
                            </div>
                            <h3 class="mt-3 mb-3">Total nominal transfer:</h3>
                            <div class="row norek justify-content-center">
                                <div class="col-lg-12 text-center align-middle">
                                    <h2 data-toggle="tooltip" data-placement="top" title="Click & Copy to clipboard"
                                        data-clipboard-text="012 456 893" data-original-title-success="012 456 893">Rp.
                                        {{number_format($total)}}</h2>
                                </div>
                            </div>
                            <span>Kode unik untuk mempercepat proses pengecekan.</span>
                            <a href="https://api.whatsapp.com/send?phone=6281262845980&text=Hi%20Stiffwashere!%20Saya%20ingin%20konfirmasi%20transfer%20untuk%20pemesanan%20dengan%20nomor%20order%20%23{{$soNumber}}.%0ASilahkan%20lihat%20bukti%20pembayaran%20yang%20saya%20kirim.%0ATerima%20kasih."
                                class="btn btn-primary btn-block btn-md mt-4 mb-2">Konfirmasi
                                transfer</a>
                            <a href="/" class="btn btn-secondary btn-block btn-md">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear my-5"></div>
        </div>
</section><!-- #content end -->
@endsection
