@extends('front.Base')
@section('title','VisitCard | Thế giới VisitCard')
@section('main')
    <div class="box-landing">
        <div class="heading-area top-area banner" style="margin-bottom:0;">
            <div class="slider-carousel owl-carousel owl-theme">
                <a href="bo-suu-tap/thoi-trang-tre.html">
                    <img class="owl-lazy" data-src="images/visitCard/banner_4.png" data-srcset="images/banner1.jpeg"
                         sizes="50vw" alt="VisitCard - Thiết bị tập visitCard"/>
                </a>
                <a href="bo-suu-tap/dong-gia.html">
                    <img class="owl-lazy" data-src="images/visitCard/banner_5.png" data-srcset="images/banner2.jpg"
                         sizes="50vw" alt="VisitCard - Thiết bị tập visitCard"/>
                </a>
                <a href="sale.html">
                    <img class="owl-lazy" data-src="images/visitCard/banner_4.png" data-srcset="images/banner3.jpg"
                         sizes="50vw" alt="VisitCard - Thiết bị tập visitCard"/>
                </a>
                <a href="bo-suu-tap/my-pham-02.html">
                    <img class="owl-lazy" data-src="images/visitCard/banner_5.png" data-srcset="images/banner2.jpg"
                         sizes="50vw" alt="VisitCard - Thiết bị tập visitCard"/>
                </a>
            </div>
        </div>
    </div>

    <div class="box-landing mtb-30" id="700" style="margin-top:0px;">
        <div class="content-area home-content-area">
            <div class="container">
                <div class="text-center mtb-30">
                    <h3>
                        <span class="upcase up-case box-title">Thẻ in tên</span>
                    </h3>
                </div>
                <!-------------------------------- slide show ------------------->
                <div class="row prod_bestsale">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products--wrapper">
                                <div class="bestsale-carousel">
                                    @foreach($items1 as $item1)
                                        <div class="prod-item">
                                            <div class="prod-img1">
                                                <a href="{{asset('product-render-'.$item1->id)}}" class="">
                                                    <img class="owl-lazy"
                                                         data-src="{{asset('public/media/'.$item1->coverimg)}}"/>
                                                </a>
                                            </div>
                                            <div class="content productnew">
                                                <a href="{{asset('product-render-'.$item1->id)}}">
                                                    <div class="title"><span>{{$item1->title}}</span></div>
                                                    <div class="desc">
                                                    	<span>
                                                            {{$item1->content}}
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">{{number_format($item1->price,0,',','.')}} VNĐ</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                        {{number_format($item1->sale,0,',','.')}} VND | Giảm
                                                                    {{number_format(100-($item1->sale/$item1->price)*100, 2)}}%</span>
                                                                                                                                </span>
                                                        </span>
                                                    </div>
                                                </a>
                                                <span class="product-new">Hàng bán chạy</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-landing">
        <div class="content-area home-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <a href="{{asset('product')}}">
                            <img src="{{asset('public/images/visitCard/slide_1.webp')}}"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-center">
                            <a href="{{asset('product')}}" title="Giao Hàng Nhanh Chóng 📦">
                                <h3 style="margin-top: 10px; margin-bottom: 10px;">
                                    <span class="upcase up-case box-title-nondecoration">Giao Hàng Nhanh Chóng 📦</span>
                                </h3>
                            </a>
                            <h5 class="box-description-non-padding-bottom" style="line-height: 18px;">
                                <span>Giao hàng nhanh chóng trong vòng 2-3 ngày làm việc
*Hỗ trợ giao hàng hoả tốc trong nội thành TPHCM</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <a href="{{asset('product')}}">
                            <img src="{{asset('public/images/visitCard/slide_2.webp')}}"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-center">
                            <a href="{{asset('product')}}" title="Chính Sách Bảo Hành 📃">
                                <h3 style="margin-top: 10px; margin-bottom: 10px;">
                                    <span class="upcase up-case box-title-nondecoration">Chính Sách Bảo Hành 📃</span>
                                </h3>
                            </a>
                            <h5 class="box-description-non-padding-bottom" style="line-height: 18px;">
                                <span>Miễn phí bảo hành khi sản phẩm lỗi, không hoạt động.</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <a href="{{asset('product')}}">
                            <img src="{{asset('public/images/visitCard/slide_3.webp')}}"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-center">
                            <a href="{{asset('product')}}" title="Hỗ Trợ 24/7 ☎️">
                                <h3 style="margin-top: 10px; margin-bottom: 10px;">
                                    <span class="upcase up-case box-title-nondecoration">Hỗ Trợ 24/7 ☎️</span>
                                </h3>
                            </a>
                            <h5 class="box-description-non-padding-bottom" style="line-height: 18px;">
                                <span>Giải đáp vấn đề nhanh chóng, tư vấn chi tiết nhiệt tình.</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-landing" id="701">
        <div class="content-area home-content-area">
            <div class="container">
                <div class="text-center mtb-30">
                    <h3>
                        <span class="upcase up-case box-title">Popon</span>
                    </h3>
                </div>
                <div class="row prod_bestsale">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products--wrapper">
                                <div class="bestsale-carousel">
                                    @foreach($items2 as $item2)
                                        <div class="prod-item">
                                            <div class="prod-img1">
                                                <a href="{{asset('product-render-'.$item2->id)}}" class="">
                                                    <img class="owl-lazy"
                                                         data-src="{{asset('public/media/'.$item2->coverimg)}}"/>
                                                </a>
                                            </div>
                                            <div class="content productnew">
                                                <a href="{{asset('product-render-'.$item2->id)}}">
                                                    <div class="title"><span>{{$item2->title}}</span></div>
                                                    <div class="desc">
                                                    	<span>
                                                            {{$item2->content}}
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">{{number_format($item2->price,0,',','.')}} VNĐ</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    {{number_format($item2->sale,0,',','.')}} VND | Giảm
                                                                    {{number_format(100-($item2->sale/$item2->price)*100,2)}}%</span>
                                                                                                                                </span>
                                                        </span>
                                                    </div>
                                                </a>
                                                <span class="product-new">Hàng bán chạy</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="box-landing box-blogs">
        <div class="content-area home-content-area">
            <div class="container">
                <div class="row">
                    @foreach($itemsBlog->slice(0, 2) as $itemblog)
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <a href="{{asset('blog-'.$itemblog->id)}}"
                               title="" target="_blank">
                                <img data-src="{{asset('public/media/'.$itemblog->img)}}"
                                     class="lazyload"
                                     title=""/>
                            </a>

                            <div class="text-left">
                                <a href="{{asset('blog-'.$itemblog->id)}}"
                                   title="" target="_blank">
                                    <h3>
                                        <span class="upcase up-case">{{$itemblog->title}}</span>
                                    </h3>
                                </a>
                                <h5>
                                <span>{{$itemblog->describe}}<a href="{{asset('blog-'.$itemblog->id)}}"
                                                                title=""
                                                                target="_blank"
                                                                style="text-decoration:underline;"><strong>XEM THÊM</strong></a></span>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="box-landing">
        <div class="content-area home-content-area">
            <div class="container">
                <div class="text-center mtb-30">
                    <h3>
                        <span class="upcase up-case box-title">Thẻ in tên</span>
                    </h3>
                </div>

                <div class="row prod-list">
                    <div class="col-md-12">
                        <div class="row">
                            @foreach($items5 as $item5)
                                <div class="col-sm-3 col-xs-6">
                                    <div class="prod-img1">
                                        <a href="{{asset('product-render-'.$item5->id)}}"
                                           class="">
                                            <img data-src="{{asset('public/media/'.$item5->coverimg)}}"/>
                                            <img data-src="{{asset('public/media/'.$item5->coverimg)}}" class="lazyload"
                                                 style="display: block !important;"/>
                                        </a>
                                    </div>
                                    <div
                                            class="content ">
                                        <a href="{{asset('product-render-'.$item5->id)}}">
                                            <div class="title"><span>{{$item5->title}}</span></div>
                                            <div class="desc">
                                                <span>{{$item5->content}}<br>{{$item5->price}} VND </span>
                                                </span>
                                            </div>
                                        </a>
                                        <!-- <span class="status">Exclusive</span> -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box-landing" id="698">
        <div class="heading-area top-area bottom-0">
            <div class="container">
                <div class="slider-carousel owl-carousel owl-theme">
                    <a href="sale.html">
                        <img class="owl-lazy" data-src="upload/files/2000x668(16).jpg"/>
                    </a>
                </div>
            </div>
        </div> <!-- End heading area -->
    </div>
    <input type="hidden" id="txtRouteId" value="4">
@stop
