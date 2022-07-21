@extends('front.Base')
@section('title','Đơn hàng đã đặt')
@section('main')
    <div class="box-content">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                        <th class="text-center">Mã sản phẩm</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-center">Giá tiền</th>
                                        <th class="text-center">Đánh giá</th>
                                        <th class="text-center">Ngày tạo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($items))
                                        @foreach($items as $item)
                                            <tr class="clear-border product-info-custom">
                                                <td class="text-center">
                                                    {{$item->infoProduct->id}}
                                                </td>
                                                <td class="text-center">
                                                    {{$item->infoCart->status == 1 ? ' Chờ giao hàng' : 'Đã giao hàng'}}
                                                </td>
                                                <td class="text-center">
                                                    {{$item->countsale}}
                                                </td>
                                                <td class="text-center">
                                                    {{number_format($item->pricesale,0,',','.')}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="ratting">
                                                        <a id="star-1" href="{{asset('cart/detail-star/' . $item->id . '/1')}}" class="star"><span class="fa fa-star {{$item->star >= 1 ? 'checked' : ''}}" aria-hidden="true"></span></a>
                                                        <a id="star-2" href="{{asset('cart/detail-star/' . $item->id . '/2')}}" class="star"><span class="fa fa-star {{$item->star >= 2 ? 'checked' : ''}}" aria-hidden="true"></span></a>
                                                        <a id="star-3" href="{{asset('cart/detail-star/' . $item->id . '/3')}}" class="star"><span class="fa fa-star {{$item->star >= 3 ? 'checked' : ''}}" aria-hidden="true"></span></a>
                                                        <a id="star-4" href="{{asset('cart/detail-star/' . $item->id . '/4')}}" class="star"><span class="fa fa-star {{$item->star >= 4 ? 'checked' : ''}}" aria-hidden="true"></span></a>
                                                        <a id="star-5" href="{{asset('cart/detail-star/' . $item->id . '/5')}}" class="star"><span class="fa fa-star {{$item->star >= 5 ? 'checked' : ''}}" aria-hidden="true"></span></a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    {{$item->created_at}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <center><h3>Bạn không có thông tin đơn hàng</h3></center>
                                    @endif

                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-12 box-total">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6 col-xs-12 order-report">
                                            <ul>
                                                <li class="collapse-toogle1">
                                                    <span class="upcase">Tổng tiền</span>
                                                    <span class="float-r bold subtotal" id="subtotal"
                                                          subtotal="798000">{{!empty($items[0]->infoCart->total) ? number_format($items[0]->infoCart->total) : 0}}
                                                        VND</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
    <style type="text/css">
        div.stars {}
        .ratting .checked {
            color: orange;
        }
    </style>
@stop
