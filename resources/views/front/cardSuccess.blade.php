@extends('front.Base')
@section('title','Thanh toán đơn hàng')
@section('main')
    <div class="box-content">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/pages/cart02dc.css?v=1575887765">
        <script type='text/javascript' src="js/owl.carousel.min.js"></script>
        <div class="content-area home-content-area top-area">
            <div class="container">
                <div class="navigation margin-top20">
                    <a href="#">Trang chủ</a> > <a href="#">Thanh toán đơn hàng</a>
                </div>
                <div>
                    <p class="text-center upcase size-20 times-new-roman">Thanh toán đơn hàng</p>
                    <div class="text-center nav-horizontal box-help-cart">
                        <span class="upcase">TRỢ GIÚP? </span><span class="bold" style="margin-right: 10px;">1900 636 517</span>
                        <a href="{{asset('order-placed')}}">Thanh toán đơn hàng</a>
                    </div>
                    <div>
                        <div class="row">
                            <center><h2>Cảm ơn bạn đã thanh toán thành công</h2></center>
                        </div>
                    </div>
                    <div class="margin-bottom30 text-right">
                        <a href="{{asset('/')}}">
                            <button class="btn btn-black" type="button">Tiếp tục mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- End content area -->
    </div>
@stop
