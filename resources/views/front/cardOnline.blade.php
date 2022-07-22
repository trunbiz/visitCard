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
                            <div class="col-sm-6">
                                <center><h4>Ứng dụng quét mã</h4></center>
                                <img src="{{asset('public/media/qr.jpg')}}" style="width: 100%">
                            </div>
                            <div class="col-sm-6">
                                <form method="POST" role="form" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <center><h4>Thanh toán ngân hàng DEF</h4></center>
                                    <div class="form-group col-sm-12">
                                        <input class="form-control" placeholder="Số thẻ" name="card_number" value="">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <input class="form-control" type="date" name="date" value="">
                                        <p>Ngày phát hành</p>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <input class="form-control" placeholder="Tên chủ thẻ" name="name" value="Tên chủ thẻ">
                                    </div>
                                    <div class="col-sm-12" style="float: right;">
                                        <button class="btn btn-lg btn-primary">Xác thực</button>
                                    </div>
                                </form>
                            </div>
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
