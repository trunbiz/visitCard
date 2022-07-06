@extends('front.Base')
@section('title','Gym Store | Thế giới thời trang Gym Store')
@section('main')
    <script type="text/javascript">
        var route = "sanpham.blade.php";
    </script>

    <div class="box-landing">
        <div class="heading-area top-area banner" style="margin-bottom:0;">
            <div class="container">
                <div class="slider-carousel owl-carousel owl-theme">
                    <a href="bo-suu-tap/thoi-trang-tre.html">
                        <img class="owl-lazy" data-src="images/banner1.jpeg" data-srcset="images/banner1.jpeg"
                             sizes="50vw" alt="Gym Store - Thời trang thiết kế cao cấp"/>
                    </a>
                    <a href="bo-suu-tap/dong-gia.html">
                        <img class="owl-lazy" data-src="images/banner2.jpg" data-srcset="images/banner2.jpg"
                             sizes="50vw" alt="Gym Store - Thời trang thiết kế cao cấp"/>
                    </a>
                    <a href="sale.html">
                        <img class="owl-lazy" data-src="images/banner3.jpg" data-srcset="images/banner3.jpg"
                             sizes="50vw" alt="Gym Store - Thời trang thiết kế cao cấp"/>
                    </a>
                    <a href="bo-suu-tap/my-pham-02.html">
                        <img class="owl-lazy" data-src="images/banner2.jpg" data-srcset="images/banner2.jpg"
                             sizes="50vw" alt="Gym Store - Thời trang thiết kế cao cấp"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="box-landing mtb-30" id="700" style="margin-top:0px;">
        <div class="content-area home-content-area">
            <div class="container">
                <div class="text-center mtb-30">
                    <h3>
                        <span class="upcase up-case box-title">SẢN PHẨM B&Aacute;N CHẠY</span>
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
                                                                    {{100-($item1->sale/$item1->price)*100}}%</span>
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
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <a href="{{asset('product')}}">
                            <img src="{{asset('public/images/sp-qc1.jfif')}}"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-left">
                            <a href="{{asset('product')}}" title="THỜI TRANG Gym Store - ĐỒNG GI&Aacute; CHỈ TỪ 149K">
                                <h3 style="margin-top: 10px; margin-bottom: 10px;">
                                    <span class="upcase up-case box-title-nondecoration">THỜI TRANG Gym Store - ĐỒNG GI&Aacute; CHỈ TỪ 149K</span>
                                </h3>
                            </a>
                            <h5 class="box-description-non-padding-bottom" style="line-height: 18px;">
                                <span>To&agrave;n bộ thiết kế thời thượng đến từ thương hiệu thời trang cao cấp Elise đồng gi&aacute; chỉ từ 149K - 549K <a
                                            href="nha-thiet-ke/elise.html"
                                            title="THỜI TRANG Gym Store - ĐỒNG GI&Aacute; CHỈ TỪ 149K"
                                            style="text-decoration:underline;"><strong>MUA NGAY</strong></a></span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <a href="{{asset('product')}}">
                            <img src="{{asset('public/images/sp-qc2.jfif')}}"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-left">
                            <a href="{{asset('product')}}" title="BST GI&Agrave;Y: SALE UP TO 50%">
                                <h3 style="margin-top: 10px; margin-bottom: 10px;">
                                    <span class="upcase up-case box-title-nondecoration">BST GI&Agrave;Y: SALE UP TO 50%</span>
                                </h3>
                            </a>
                            <h5 class="box-description-non-padding-bottom" style="line-height: 18px;">
                                <span>100+ mẫu gi&agrave;y cao g&oacute;t, gi&agrave;y bệt được thiết kế bằng chất liệu da cao cấp n&acirc;ng niu bước đi của n&agrave;ng <a
                                            href="bo-suu-tap/giay-2020.html" title="BST GI&Agrave;Y: SALE UP TO 50%"
                                            style="text-decoration:underline;"><strong>MUA NGAY</strong></a></span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <a href="{{asset('product')}}">
                            <img src="{{asset('public/images/sp-qc3.jfif')}}"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-left">
                            <a href="{{asset('product')}}" title="ĐỘC QUYỀN TỪ NTK LAGU: UP TO 30% OFF">
                                <h3 style="margin-top: 10px; margin-bottom: 10px;">
                                    <span class="upcase up-case box-title-nondecoration">ĐỘC QUYỀN TỪ NTK LAGU: UP TO 30% OFF</span>
                                </h3>
                            </a>
                            <h5 class="box-description-non-padding-bottom" style="line-height: 18px;">
                                <span>BST Xu&acirc;n - H&egrave; được thiết kế bởi NTK Lagu với chất liệu Linen chủ đạo gi&uacute;p n&agrave;ng dẫn đầu xu hướng <a
                                            href="nha-thiet-ke/lagu.html" title="ĐỘC QUYỀN TỪ NTK LAGU: UP TO 30% OFF"
                                            style="text-decoration:underline;"><strong>MUA NGAY</strong></a></span>
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
                        <span class="upcase up-case box-title">H&Agrave;NG MỚI</span>
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
                                                                    {{number_format($item2->price,0,',','.')}} VND | Giảm
                                                                    {{100-($item2->sale/$item2->price)*100}}%</span>
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

    <div class="content-area home-content-area">
        <div class="container">
            <div class="text-center mtb-30">
                <h3>
                    <span class="upcase up-case box-title">PHONG C&Aacute;CH</span>
                </h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme styles-carousel brand-lg styles-box">
                        <div class="item">
                            <a href="{{asset('search/Công sở')}}">
                                <img src="upload/files/styles/phong-cach-cong-so.jpg" alt="C&ocirc;ng sở"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-cong-so-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-cong-so-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="{{asset('search/Công sở')}}">
                                    <h3>
                                        <span class="upcase up-case">Công sở</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="{{asset('search/Dạo phố')}}">
                                <img src="upload/files/styles/phong-cach-dao-pho.jpg" alt="Dạo phố"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-dao-pho-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-dao-pho-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="{{asset('search/Dạo phố')}}">
                                    <h3>
                                        <span class="upcase up-case">Dạo phố</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="{{asset('search/Du lịch')}}">
                                <img src="upload/files/styles/phong-cach-du-lich.jpg" alt="Du lịch"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-du-lich-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-du-lich-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="{{asset('search/Du lịch')}}">
                                    <h3>
                                        <span class="upcase up-case">Du lịch</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="{{asset('search/Tiệc tùng')}}">
                                <img src="upload/files/styles/phong-cach-du-tiec.jpg" alt="Tiệc t&ugrave;ng"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-du-tiec-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-du-tiec-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="{{asset('search/Tiệc tùng')}}">
                                    <h3>
                                        <span class="upcase up-case">Tiệc tùng</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtb-30">
                <div class="prod-collection-highlight">
                    <div class="container">
                        <div class="">
                            <a href="bo-suu-tap/bst-tui-xach-2020.html">
                                <img class="lazyload" data-src="https://ferosh.vn/upload/files/2000X668%20(12)(2).jpg"
                                     title="BST T&Uacute;I X&Aacute;CH 2020" alt="BST T&Uacute;I X&Aacute;CH 2020"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtb-30">
                <div class="prod-collection-highlight">
                    <div class="container">
                        <div class="">
                            <a href="bo-suu-tap/chan-vay-2020.html">
                                <img class="lazyload" data-src="https://ferosh.vn/upload/files/2000x668%20(4)(5).jpg"
                                     title="TOP CH&Acirc;N V&Aacute;Y B&Aacute;N CHẠY NHẤT 2020"
                                     alt="TOP CH&Acirc;N V&Aacute;Y B&Aacute;N CHẠY NHẤT 2020"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtb-30">
                <div class="prod-collection-highlight">
                    <div class="container">
                        <div class="">
                            <a href="bo-suu-tap/my-pham-01.html">
                                <img class="lazyload" data-src="https://ferosh.vn/upload/files/2000x668(47).jpg"
                                     title="Mỹ Phẩm - Đẹp Xuy&ecirc;n M&ugrave;a Dịch"
                                     alt="Mỹ Phẩm - Đẹp Xuy&ecirc;n M&ugrave;a Dịch"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtb-30">
                <div class="prod-collection-highlight">
                    <div class="container">
                        <div class="">
                            <a href="bo-suu-tap/am-young-0320.html">
                                <img class="lazyload" data-src="https://ferosh.vn/upload/files/2000X668(9).jpg"
                                     title="Am Young 0320" alt="Am Young 0320"/>
                            </a>
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
                        <span class="upcase up-case box-title">Dành riêng cho bạn</span>
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
