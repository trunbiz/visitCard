@extends('front.Base')
@section('title','Đơn hàng đã đặt')
@section('main')
    <div class="box-content">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/pages/cart02dc.css?v=1575887765">
        <script type='text/javascript' src="js/owl.carousel.min.js"></script>
        <div class="content-area home-content-area top-area">
            <div class="container">
                <div class="navigation margin-top20">
                    <a href="#">Trang chủ</a> > <a href="#">Đơn hàng đã đặt</a>
                </div>
                <div>
                    <p class="text-center upcase size-20 times-new-roman">Đơn hàng đã đặt</p>
                    <div>
                        <div class="margin-top10">
                            <div class="table-responsive lstproducts visible-xs-block hidden-xs">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã đơn hàng</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center">Tổng tiền</th>
                                        <th class="text-center">Ngày tạo</th>
                                        <th class="text-center">#</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($items))
                                        @foreach($items as $item)
                                            <tr class="clear-border product-info-custom">
                                                <td class="text-center">
                                                    000{{$item->id}}
                                                </td>
                                                <td class="text-center">
                                                    {{$item->status == 1 ? ' Chờ giao hàng' : 'Đã giao hàng'}}
                                                </td>
                                                <td class="text-center">
                                                    {{number_format($item->total,0,',','.')}}

                                                </td>
                                                <td class="text-center">
                                                    {{$item->created_at}}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{asset('cart/detail/' .$item->id)}}">Chi tiết</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <center><h3>Bạn không có thông tin đơn hàng</h3></center>
                                    @endif

                                    </tbody>
                                </table>
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
