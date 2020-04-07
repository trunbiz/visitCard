@extends('front.Base')
@section('title','Render | Thế giới thời trang Render')
@section('main')
    <script type="text/javascript">
        var route = "san-pham.html";
    </script>

    <div class="box-landing">
        <div class="heading-area top-area banner" style="margin-bottom:0;">
            <div class="container">
                <div class="slider-carousel owl-carousel owl-theme">
                    <a href="bo-suu-tap/thoi-trang-tre.html">
                        <img class="owl-lazy" data-src="images/banner1.jpeg" data-srcset="images/banner1.jpeg"
                             sizes="50vw" alt="RENDER - Thời trang thiết kế cao cấp"/>
                    </a>
                    <a href="bo-suu-tap/dong-gia.html">
                        <img class="owl-lazy" data-src="images/banner2.jpg" data-srcset="images/banner2.jpg"
                             sizes="50vw" alt="RENDER - Thời trang thiết kế cao cấp"/>
                    </a>
                    <a href="sale.html">
                        <img class="owl-lazy" data-src="images/banner3.jpg" data-srcset="images/banner3.jpg"
                             sizes="50vw" alt="RENDER - Thời trang thiết kế cao cấp"/>
                    </a>
                    <a href="bo-suu-tap/my-pham-02.html">
                        <img class="owl-lazy" data-src="images/banner2.jpg" data-srcset="images/banner2.jpg"
                             sizes="50vw" alt="RENDER - Thời trang thiết kế cao cấp"/>
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
                                                <a href="{{asset('product-Render{id}')}}" class="">
                                                    <img class="owl-lazy"
                                                         data-src="{{asset('../storage/app/media/'.$item1->coverimg)}}"/>
                                                </a>
                                            </div>
                                            <div class="content productnew">
                                                <a href="san-pham/vay-lua-tay-beo-397.html">
                                                    <div class="title"><span>{{$item1->title}}</span></div>
                                                    <div class="desc">
                                                    	<span>
                                                            {{$item1->content}}
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">{{$item1->price}}</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    {{$item1->sale}} VND | Giảm
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
                        <a href="nha-thiet-ke/elise.html">
                            <img data-src="https://ferosh.vn/upload/files/deals/10-3-2020/dong-gia-149.jpeg"
                                 srcset="https://ferosh.vn/upload/files/deals/10-3-2020/dong-gia-149-480w.jpeg 480w, https://ferosh.vn/upload/files/deals/10-3-2020/dong-gia-149-1080w.jpeg 1080w"
                                 sizes="50vw"
                                 alt="To&agrave;n bộ thiết kế thời thượng đến từ thương hiệu thời trang cao cấp Elise đồng gi&aacute; chỉ từ 149K - 549K"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-left">
                            <a href="nha-thiet-ke/elise.html" title="THỜI TRANG ELISE - ĐỒNG GI&Aacute; CHỈ TỪ 149K">
                                <h3 style="margin-top: 10px; margin-bottom: 10px;">
                                    <span class="upcase up-case box-title-nondecoration">THỜI TRANG ELISE - ĐỒNG GI&Aacute; CHỈ TỪ 149K</span>
                                </h3>
                            </a>
                            <h5 class="box-description-non-padding-bottom" style="line-height: 18px;">
                                <span>To&agrave;n bộ thiết kế thời thượng đến từ thương hiệu thời trang cao cấp Elise đồng gi&aacute; chỉ từ 149K - 549K <a
                                            href="nha-thiet-ke/elise.html"
                                            title="THỜI TRANG ELISE - ĐỒNG GI&Aacute; CHỈ TỪ 149K"
                                            style="text-decoration:underline;"><strong>MUA NGAY</strong></a></span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <a href="bo-suu-tap/giay-2020.html">
                            <img data-src="https://ferosh.vn/upload/files/deals/16-03-2020/giam-ngay-50-all-items.jpeg"
                                 srcset="https://ferosh.vn/upload/files/deals/16-03-2020/giam-ngay-50-all-items-480w.jpeg 480w, https://ferosh.vn/upload/files/deals/16-03-2020/giam-ngay-50-all-items-1080w.jpeg 1080w"
                                 sizes="50vw"
                                 alt="100+ mẫu gi&agrave;y cao g&oacute;t, gi&agrave;y bệt được thiết kế bằng chất liệu da cao cấp n&acirc;ng niu bước đi của n&agrave;ng"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-left">
                            <a href="bo-suu-tap/giay-2020.html" title="BST GI&Agrave;Y: SALE UP TO 50%">
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
                        <a href="nha-thiet-ke/lagu.html">
                            <img data-src="https://ferosh.vn/upload/files/deals/16-03-2020/bo-suu-tap-xuan-he.jpeg"
                                 srcset="https://ferosh.vn/upload/files/deals/16-03-2020/bo-suu-tap-xuan-he-480w.jpeg 480w, https://ferosh.vn/upload/files/deals/16-03-2020/bo-suu-tap-xuan-he-1080w.jpeg 1080w"
                                 sizes="50vw"
                                 alt="BST Xu&acirc;n - H&egrave; được thiết kế bởi NTK Lagu với chất liệu Linen chủ đạo gi&uacute;p n&agrave;ng dẫn đầu xu hướng"
                                 style="width: 100%" class="lazyload"/>
                        </a>

                        <div class="text-left">
                            <a href="nha-thiet-ke/lagu.html" title="ĐỘC QUYỀN TỪ NTK LAGU: UP TO 30% OFF">
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

                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/vay-cham-bi-cut-out-eo-420.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/04ff2896ed09b2e8d686c58dcb78cb83/525x787/acDlSCPE8tht5AbuizBW6dBENpXMWNF4RO7TfPIe.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/vay-cham-bi-cut-out-eo-420.html">
                                                <div class="title"><span>Lagu</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            V&aacute;y chấm bi cut out eo
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">760.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    608.000 VND | Giảm
                                                                    20%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-but-chi-den-phu-vai-xanh.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/03abddc67647f4283654c0503482e74b/525x787/jmdlD9dM5M6upRyWLQKz67ihA8QC4hFWOZDo412w.jpg"/>
                                                <img class="owl-lazy"
                                                     data-src="storage/images/03abddc67647f4283654c0503482e74b/525x787/CUmwT6HGwh9NjjOyrtKCIjav9udZB2vDCCT9buXR.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/dam-but-chi-den-phu-vai-xanh.html">
                                                <div class="title"><span>BAESICSTORE</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Đầm B&uacute;t Ch&igrave; Đen Phủ Vai Xanh
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">1.898.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    949.000 VND | Giảm
                                                                    50%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/ao-dai-bach-hy-trang.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/80ee6b4e99b7282ccb7d6688af1b6edc/525x787/1Nbmp9knAlcHMNXOhlF6pfyd5OH8YZRnIAnDTJ8s.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/ao-dai-bach-hy-trang.html">
                                                <div class="title"><span>SYO FASHION</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            &Aacute;o D&agrave;i B&aacute;ch Hy Trắng
                                                                                                                            <br>
                                                                                                                                    1.250.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/fleur-de-lin-dam-co-tron-xoan-eo-cherrie-hong-81.html"
                                               class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/24b8238ed3a342bd6ade866de537a029/525x787/nwwZoCmaEDD1o3o9caoqwnZOrvkCVhqTjyWSxCbI.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/fleur-de-lin-dam-co-tron-xoan-eo-cherrie-hong-81.html">
                                                <div class="title"><span>Fleur De Lin</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Fleur De Lin Đầm Cổ Tr&ograve;n Xoắn Eo Cherrie Hồng
                                                                                                                            <br>
                                                                                                                                    1.150.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/vay-dam-bau-va-sau-sinh-cho-con-bu-mau-vang-line-co.html"
                                               class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/5468b368b1b5adcbfc133ee8ee94bfa1/525x787/aCdq0l8q0b3JYHYyk8aWQkjj8uscFYXj2vIK44r6.jpg"/>
                                                <img class="owl-lazy"
                                                     data-src="storage/images/5468b368b1b5adcbfc133ee8ee94bfa1/525x787/h4aJXVl6PGNZdScW51OAhWxvadf7xjQd9gVZVl1a.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/vay-dam-bau-va-sau-sinh-cho-con-bu-mau-vang-line-co.html">
                                                <div class="title"><span>MOLYS</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            V&aacute;y Đầm Bầu V&agrave; Sau Sinh Cho Con B&uacute; M&agrave;u V&agrave;ng Line Cổ
                                                                                                                            <br>
                                                                                                                                    530.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-sieu-nhe-hoa-nen-tim-than.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/92b0605fa6bbad929f59797ab8db168f/525x787/0JLYEv6OkG0aVhmGAhrR5zBIc08ISMXWoaE5TCDb.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/dam-sieu-nhe-hoa-nen-tim-than.html">
                                                <div class="title"><span>HeraDG</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Đầm Si&ecirc;u Nhẹ Hoa Nền T&iacute;m Than
                                                                                                                            <br>
                                                                                                                                    1.468.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/vay-dui-tay-chuong-xanh.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="uploads/12-03-2020/v07(1)(2)(3)(4).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/vay-dui-tay-chuong-xanh.html">
                                                <div class="title"><span>V Corner</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            V&aacute;y Đũi Tay Chu&ocirc;ng Xanh
                                                                                                                            <br>
                                                                                                                                    600.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/vay-dui-xoe-co-do.html" class="">
                                                <img class="owl-lazy" data-src="uploads/12-03-2020/-MG-8852(1).jpg"/>
                                                <img class="owl-lazy" data-src="uploads/12-03-2020/-MG-8854(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/vay-dui-xoe-co-do.html">
                                                <div class="title"><span>TIHON</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            V&aacute;y Đũi X&ograve;e Cổ Đỏ
                                                                                                                            <br>
                                                                                                                                    250.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/ao-croptop-co-langton-929.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/028d0a7edbc0a88a9c0bfa5822d7b376/525x787/OjCYZyMOEjHiCV7j7ebaXTjUxiOry57nO2beunvY.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content ">
                                            <a href="san-pham/ao-croptop-co-langton-929.html">
                                                <div class="title"><span>KITE</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            &Aacute;o Croptop cổ Langton
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">695.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    556.000 VND | Giảm
                                                                    20%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/ao-dai-cach-tan-cong-ma%cc%83u-don-vang-nu.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="uploads/10-03-2020/--o-d--i-c--ch-t--n-m---u-----n-v--ng--2-(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/ao-dai-cach-tan-cong-ma%cc%83u-don-vang-nu.html">
                                                <div class="title"><span>JACKILIA</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            &Aacute;o D&agrave;i C&aacute;ch T&acirc;n C&ocirc;ng M&acirc;̃u Đơn V&agrave;ng Nữ
                                                                                                                            <br>
                                                                                                                                    590.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-om-nhung-eo.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/eab1afa09dad06a14a00c44a5824e531/525x787/cK8SBOTgDTrpTDgP9DgA4yRpJ74UOUO7a9sAEfG6.jpg"/>
                                                <img class="owl-lazy"
                                                     data-src="storage/images/eab1afa09dad06a14a00c44a5824e531/525x787/CjeoflkrDZhiLUqip0pWHfGuN3LQwrURwhnZ3qE1.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/dam-om-nhung-eo.html">
                                                <div class="title"><span>Kosmo Chic</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Đầm &Ocirc;m Nh&uacute;ng Eo
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">950.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    855.000 VND | Giảm
                                                                    10%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/ao-dai-cach-tan-tay-bo-chun.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/8f1413c110295f3ea61b667558c6f9b8/525x787/5hE9VTbpdIBsNMKZw3G3AGzT94Bw9ZDe83EDkkhA.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/ao-dai-cach-tan-tay-bo-chun.html">
                                                <div class="title"><span>Lamer</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            &Aacute;o D&agrave;i C&aacute;ch T&acirc;n Tay Bo Chun
                                                                                                                            <br>
                                                                                                                                    680.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/ao-khoac-da-ngan-ghi.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/dd2dde535d322743ac08d65bf6df132d/525x787/vQd02z9pYwJWEQZQnhnWXGbqYESre4wiRwbIIKjQ.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/ao-khoac-da-ngan-ghi.html">
                                                <div class="title"><span>Vien Tran</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            &Aacute;o Kho&aacute;c Dạ Ngắn Ghi
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">1.299.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    649.500 VND | Giảm
                                                                    50%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/vay-kami-that-eo-do-hong.html" class="">
                                                <img class="owl-lazy" data-src="uploads/04-03-2020/IMG-2726(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/vay-kami-that-eo-do-hong.html">
                                                <div class="title"><span>FALA FASHION</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            V&aacute;y Kami Thắt Eo Đỏ Hồng
                                                                                                                            <br>
                                                                                                                                    799.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/ao-2-day-tre-vai.html" class="">
                                                <img class="owl-lazy" data-src="uploads/04-03-2020/A027HR-c(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/ao-2-day-tre-vai.html">
                                                <div class="title"><span>Holly Rey</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            &Aacute;o 2 D&acirc;y Trễ Vai
                                                                                                                            <br>
                                                                                                                                    585.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/vay-lua-van-vang-thu-152.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/d748a600fe89a6abd01b174e8d2eb35c/525x787/WZ2Hb7HmNKUn3mq2ksF6RuKrVvPyRgam4UGsXvWj.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/vay-lua-van-vang-thu-152.html">
                                                <div class="title"><span>Lagu</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            V&aacute;y lụa v&acirc;n v&agrave;ng thư
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">820.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    656.000 VND | Giảm
                                                                    20%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-hoa-do-co-tron.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/8e017d9b51e7b9284cd0da58fae39b33/525x787/6eun4q2kpJMzzm9cCtViMH7oBVuVaL5VrsY7yXww.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/dam-hoa-do-co-tron.html">
                                                <div class="title"><span>OLV Boutique</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Đầm Hoa Đỏ Cổ Tr&ograve;n
                                                                                                                            <br>
                                                                                                                                    450.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/chan-vay-but-chi-3-cuc-den.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/a384ead3aad1e06df0952aa69c305380/525x787/VmBo7bqzu8rjSx328xj5PCt3W6Zh5UdTVUpvNaIa.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/chan-vay-but-chi-3-cuc-den.html">
                                                <div class="title"><span>White Ant</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Ch&acirc;n V&aacute;y B&uacute;t Ch&igrave; 3 C&uacute;c Đen
                                                                                                                            <br>
                                                                                                                                    535.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/ao-jacket-co-dai-den-trang.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="uploads/28-02-2020/YS20J031--2-(1).jpg"/>
                                                <img class="owl-lazy"
                                                     data-src="uploads/28-02-2020/YS20J031--3-(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/ao-jacket-co-dai-den-trang.html">
                                                <div class="title"><span>5AVENUE</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            &Aacute;o Jacket C&oacute; Đai Đen Trắng
                                                                                                                            <br>
                                                                                                                                    2.785.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/vay-hai-day-xanh-in-hoa-42.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/5df7657a7d6b119029e5ad06fe039644/525x787/8xfFkrwbRQcWQjK1y29HcUvK1YQahlTKqmkLPtvy.jpg"/>
                                                <img class="owl-lazy"
                                                     data-src="storage/images/5df7657a7d6b119029e5ad06fe039644/525x787/COaeuM9PqhQIv4WtiLFL7AEaIRd4JK2q58OYNXya.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/vay-hai-day-xanh-in-hoa-42.html">
                                                <div class="title"><span>Maki</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            V&aacute;y hai d&acirc;y xanh in hoa
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">1.800.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    1.440.000 VND | Giảm
                                                                    20%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-xanh-ly-truoc.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="uploads/11-02-2020/FXDL19030833XA(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/dam-xanh-ly-truoc.html">
                                                <div class="title"><span>Elise</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Đầm Xanh Ly Trước
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">1.798.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    399.000 VND | Giảm
                                                                    78%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-day-nut-cheo-xanh-la-741.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="storage/images/c0b9b187cfd326a101efae8da2a1936e/525x787/kxZKK0K3Pw7J7W9W2wKbvROmFykWfRPsiRbyYQHx.jpg"/>
                                                <img class="owl-lazy"
                                                     data-src="storage/images/c0b9b187cfd326a101efae8da2a1936e/525x787/s3os0Aroaj4xTUjlqBtJNF4VfKOnpFcEc2CAk8bq.jpg"/>
                                            </a>
                                        </div>
                                        <div class="content productnew">
                                            <a href="san-pham/dam-day-nut-cheo-xanh-la-741.html">
                                                <div class="title"><span>YV LE</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            YV LE Đầm D&acirc;y N&uacute;t Ch&eacute;o Xanh L&aacute;
                                                                                                                            <br>
                                                                                                                                    469.000 VND
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-ren-choang-dinh-ngoc-trai.html" class="">
                                                <img class="owl-lazy" data-src="uploads/16-01-2020/IMGL1550(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content ">
                                            <a href="san-pham/dam-ren-choang-dinh-ngoc-trai.html">
                                                <div class="title"><span>Cofason</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Đầm Ren Cho&agrave;ng Đ&iacute;nh Ngọc Trai
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">1.860.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    1.302.000 VND | Giảm
                                                                    30%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
                                    </div>
                                    <div class="prod-item">
                                        <div class="prod-img1">
                                            <a href="san-pham/dam-suong-ha-eo-phoi-no.html" class="">
                                                <img class="owl-lazy"
                                                     data-src="uploads/30-12-2019/VL1820111Dl-1(1).jpg"/>
                                                <img class="owl-lazy"
                                                     data-src="uploads/30-12-2019/VL1820111Dl-3(1).jpg"/>
                                            </a>
                                        </div>
                                        <div class="content ">
                                            <a href="san-pham/dam-suong-ha-eo-phoi-no.html">
                                                <div class="title"><span>De Leah</span></div>
                                                <div class="desc">
                                                    	<span>
                                                            Đầm Su&ocirc;ng Hạ Eo Phối Nơ
                                                                                                                            <br>
                                                                                                                                <strike class="color-red"><span
                                                                                                                                            class="color-black">1.250.000 VND</span></strike>
                                                                <br>
                                                                <span class="color-red">
                                                                    687.500 VND | Giảm
                                                                    45%</span>
                                                                                                                                </span>
                                                    </span>
                                                </div>
                                            </a>
                                            <span class="product-new">Hàng mới</span>
                                        </div>
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
                            <a href="san-pham/index8126.html?styles=10&amp;tag=collection">
                                <img src="upload/files/styles/phong-cach-cong-so.jpg" alt="C&ocirc;ng sở"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-cong-so-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-cong-so-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="san-pham/index8126.html?styles=10&amp;tag=collection">
                                    <h3>
                                        <span class="upcase up-case">C&ocirc;ng sở</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="san-pham/indexb8ad.html?styles=2&amp;tag=collection">
                                <img src="upload/files/styles/phong-cach-dao-pho.jpg" alt="Dạo phố"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-dao-pho-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-dao-pho-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="san-pham/indexb8ad.html?styles=2&amp;tag=collection">
                                    <h3>
                                        <span class="upcase up-case">Dạo phố</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="san-pham/indexc812.html?styles=1&amp;tag=collection">
                                <img src="upload/files/styles/phong-cach-du-lich.jpg" alt="Du lịch"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-du-lich-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-du-lich-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="san-pham/indexc812.html?styles=1&amp;tag=collection">
                                    <h3>
                                        <span class="upcase up-case">Du lịch</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="san-pham/index30a9.html?styles=7&amp;tag=collection">
                                <img src="upload/files/styles/phong-cach-du-tiec.jpg" alt="Tiệc t&ugrave;ng"
                                     srcset="https://ferosh.vn/upload/files/styles/phong-cach-du-tiec-480w.jpeg 480w, https://ferosh.vn/upload/files/styles/phong-cach-du-tiec-1080w.jpeg 1080w"
                                     sizes="50vw"/>
                            </a>
                            <div class="description">
                                <a href="san-pham/index30a9.html?styles=7&amp;tag=collection">
                                    <h3>
                                        <span class="upcase up-case">Tiệc t&ugrave;ng</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--                                                        <div class="row mtb-30">
                         <div class="prod-collection-highlight">
                             <div class="container">
                                 <div class="slider-carousel owl-carousel owl-theme">
                                     <a href="https://ferosh.vn/bo-suu-tap/bst-tui-xach-2020">
                                       <img class="owl-lazy" data-src="https://ferosh.vn/upload/files/2000X668%20(12)(2).jpg" title="BST T&Uacute;I X&Aacute;CH 2020" alt="BST T&Uacute;I X&Aacute;CH 2020"/>
                                     </a>
                                     <a href="https://ferosh.vn/bo-suu-tap/bst-tui-xach-2020">
                                       <img class="owl-lazy" data-src="https://RENDER.vn" title="BST T&Uacute;I X&Aacute;CH 2020" alt="BST T&Uacute;I X&Aacute;CH 2020"/>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                                                         <div class="row mtb-30">
                         <div class="prod-collection-highlight">
                             <div class="container">
                                 <div class="slider-carousel owl-carousel owl-theme">
                                     <a href="https://ferosh.vn/bo-suu-tap/chan-vay-2020">
                                       <img class="owl-lazy" data-src="https://ferosh.vn/upload/files/2000x668%20(4)(5).jpg" title="TOP CH&Acirc;N V&Aacute;Y B&Aacute;N CHẠY NHẤT 2020" alt="TOP CH&Acirc;N V&Aacute;Y B&Aacute;N CHẠY NHẤT 2020"/>
                                     </a>
                                     <a href="https://ferosh.vn/bo-suu-tap/chan-vay-2020">
                                       <img class="owl-lazy" data-src="https://RENDER.vn" title="TOP CH&Acirc;N V&Aacute;Y B&Aacute;N CHẠY NHẤT 2020" alt="TOP CH&Acirc;N V&Aacute;Y B&Aacute;N CHẠY NHẤT 2020"/>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                                                         <div class="row mtb-30">
                         <div class="prod-collection-highlight">
                             <div class="container">
                                 <div class="slider-carousel owl-carousel owl-theme">
                                     <a href="https://ferosh.vn/bo-suu-tap/my-pham-01">
                                       <img class="owl-lazy" data-src="https://ferosh.vn/upload/files/2000x668(47).jpg" title="Mỹ Phẩm - Đẹp Xuy&ecirc;n M&ugrave;a Dịch" alt="Mỹ Phẩm - Đẹp Xuy&ecirc;n M&ugrave;a Dịch"/>
                                     </a>
                                     <a href="https://ferosh.vn/bo-suu-tap/my-pham-01">
                                       <img class="owl-lazy" data-src="https://RENDER.vn" title="Mỹ Phẩm - Đẹp Xuy&ecirc;n M&ugrave;a Dịch" alt="Mỹ Phẩm - Đẹp Xuy&ecirc;n M&ugrave;a Dịch"/>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                                                         <div class="row mtb-30">
                         <div class="prod-collection-highlight">
                             <div class="container">
                                 <div class="slider-carousel owl-carousel owl-theme">
                                     <a href="https://ferosh.vn/bo-suu-tap/am-young-0320">
                                       <img class="owl-lazy" data-src="https://ferosh.vn/upload/files/2000X668(9).jpg" title="Am Young 0320" alt="Am Young 0320"/>
                                     </a>
                                     <a href="https://ferosh.vn/bo-suu-tap/am-young-0320">
                                       <img class="owl-lazy" data-src="https://RENDER.vn" title="Am Young 0320" alt="Am Young 0320"/>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                             -->

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


            <div class="text-center">
                <h3 class="mtb-30">
                    <span class="upcase up-case box-title">SẢN PHẨM</span>
                </h3>
            </div>

            <div class="row mtb-10 product-types">
                <div class="col-md-3 col-xs-3 col-sm-6">
                    <div class="brand-lg styles-box">
                        <div class="item">
                            <a href="giay/index6d76.html?types=giay&amp;tag=3d">
                                <img src="upload/files/EL710zes91TNbpYJSr6GRunBIRMxI92IS5rsGS9N(1).jpg"
                                     alt="Gi&agrave;y D&eacute;p" title="Gi&agrave;y D&eacute;p"/>
                            </a>
                            <div class="description">
                                <a href="giay/index6d76.html?types=giay&amp;tag=3d">
                                    <h3>
                                        <span class="upcase up-case">Gi&agrave;y D&eacute;p</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-6">
                    <div class="brand-lg styles-box">
                        <div class="item">
                            <a href="san-pham/index5246.html?types=dam-vay-lien&amp;tag=3d">
                                <img src="upload/files/PCK22.jpg" alt="V&aacute;y Đầm" title="V&aacute;y Đầm"/>
                            </a>
                            <div class="description">
                                <a href="san-pham/index5246.html?types=dam-vay-lien&amp;tag=3d">
                                    <h3>
                                        <span class="upcase up-case">V&aacute;y Đầm</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-6">
                    <div class="brand-lg styles-box">
                        <div class="item">
                            <a href="giay/index25be.html?types=phu-kien&amp;tag=3d">
                                <img src="upload/files/37-0.jpg" alt="Phụ Kiện" title="Phụ Kiện"/>
                            </a>
                            <div class="description">
                                <a href="giay/index25be.html?types=phu-kien&amp;tag=3d">
                                    <h3>
                                        <span class="upcase up-case">Phụ Kiện</span>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-6">
                    <div class="brand-lg styles-box">
                        <div class="item">
                            <a href="my-pham/index7bd2.html?types=my-pham&amp;tag=3d">
                                <img src="upload/files/31_2.jpg" alt="Mỹ Phẩm" title="Mỹ Phẩm"/>
                            </a>
                            <div class="description">
                                <a href="my-pham/index7bd2.html?types=my-pham&amp;tag=3d">
                                    <h3>
                                        <span class="upcase up-case">Mỹ Phẩm</span>
                                    </h3>
                                </a>
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
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <a href="https://blog.ferosh.vn/tips-mix-do-hang-hieu-voi-gia-sieu-yeu"
                           title="TIPS MIX ĐỒ H&Agrave;NG HIỆU VỚI GI&Aacute; SI&Ecirc;U Y&Ecirc;U" target="_blank">
                            <img data-src="https://blog.ferosh.vn/wp-content/uploads/2020/03/MIX-ĐỒ-H&Agrave;NG-HIỆU-VỚI-GI&Aacute;-CỰC-CHẤT.png"
                                 class="lazyload"
                                 title="TIPS MIX ĐỒ H&Agrave;NG HIỆU VỚI GI&Aacute; SI&Ecirc;U Y&Ecirc;U"/>
                        </a>

                        <div class="text-left">
                            <a href="https://blog.ferosh.vn/tips-mix-do-hang-hieu-voi-gia-sieu-yeu"
                               title="TIPS MIX ĐỒ H&Agrave;NG HIỆU VỚI GI&Aacute; SI&Ecirc;U Y&Ecirc;U" target="_blank">
                                <h3>
                                    <span class="upcase up-case">TIPS MIX ĐỒ H&Agrave;NG HIỆU VỚI GI&Aacute; SI&Ecirc;U Y&Ecirc;U</span>
                                </h3>
                            </a>
                            <h5>
                                <span>H&agrave;ng hiệu gi&aacute; tốt ai m&agrave; chẳng m&ecirc;. Sau đ&acirc;y, RENDER sẽ m&aacute;ch bạn tips phối đồ h&agrave;ng hiệu cao cấp thật thời trang m&agrave;... <a
                                            href="https://blog.ferosh.vn/tips-mix-do-hang-hieu-voi-gia-sieu-yeu"
                                            title="TIPS MIX ĐỒ H&Agrave;NG HIỆU VỚI GI&Aacute; SI&Ecirc;U Y&Ecirc;U"
                                            target="_blank" style="text-decoration:underline;"><strong>XEM THÊM</strong></a></span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <a href="https://blog.ferosh.vn/anh-huong-cua-covid19-den-nganh-thoi-trang"
                           title="ẢNH HƯỞNG CỦA COVID19 ĐẾN NG&Agrave;NH THỜI TRANG B&Aacute;N LẺ." target="_blank">
                            <img data-src="https://blog.ferosh.vn/wp-content/uploads/2020/03/1200x630.jpg"
                                 class="lazyload"
                                 title="ẢNH HƯỞNG CỦA COVID19 ĐẾN NG&Agrave;NH THỜI TRANG B&Aacute;N LẺ."/>
                        </a>

                        <div class="text-left">
                            <a href="https://blog.ferosh.vn/anh-huong-cua-covid19-den-nganh-thoi-trang"
                               title="ẢNH HƯỞNG CỦA COVID19 ĐẾN NG&Agrave;NH THỜI TRANG B&Aacute;N LẺ." target="_blank">
                                <h3>
                                    <span class="upcase up-case">ẢNH HƯỞNG CỦA COVID19 ĐẾN NG&Agrave;NH THỜI TRANG B&Aacute;N LẺ.</span>
                                </h3>
                            </a>
                            <h5>
                                <span>Corvid-19 đ&atilde; lan to&agrave;n cầu, với hơn 98k nhiễm bệnh. Ng&agrave;nh thời trang b&aacute;n lẻ bị ảnh hưởng nặng nề. C&ugrave;ng xem c&aacute;c nh&atilde;n h&agrave;ng... <a
                                            href="https://blog.ferosh.vn/anh-huong-cua-covid19-den-nganh-thoi-trang"
                                            title="ẢNH HƯỞNG CỦA COVID19 ĐẾN NG&Agrave;NH THỜI TRANG B&Aacute;N LẺ."
                                            target="_blank" style="text-decoration:underline;"><strong>XEM THÊM</strong></a></span>
                            </h5>
                        </div>
                    </div>
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
                            <div class="col-sm-3 col-xs-6">
                                <div class="prod-img1">
                                    <a href="san-pham/c-est-la-v-dam-suong-xoe-duoi-ca.html"
                                       class="">
                                        <img data-src="https://ferosh.vn/uploads/09-11-2018/Hey-Cloud-2.jpg"
                                             class="lazyload"/>
                                        <img data-src="https://ferosh.vn/uploads/09-11-2018/Hey-Cloud.PNG"
                                             class="lazyload"/>
                                    </a>
                                </div>
                                <div
                                        class="content ">
                                    <a href="san-pham/c-est-la-v-dam-suong-xoe-duoi-ca.html">
                                        <div class="title"><span>C&#039;est La V</span></div>
                                        <div class="desc">
                                            	<span>
													C&#039;est La V đầm su&ocirc;ng x&ograve;e đu&ocirc;i c&aacute;
													                                                        <br>
                                                                                                                    1.390.000 VND
                                                                                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <!-- <span class="status">Exclusive</span> -->
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="prod-img1">
                                    <a href="san-pham/clara-mare-chan-vay-chong-than-mot-cuc-nau-dat.html"
                                       class="">
                                        <img data-src="https://ferosh.vn/uploads/19-09-2019/BLS1031-2(1).jpg"
                                             class="lazyload"/>
                                        <img data-src="https://ferosh.vn/uploads/19-09-2019/BLS1031-1(1).jpg"
                                             class="lazyload"/>
                                    </a>
                                </div>
                                <div
                                        class="content ">
                                    <a href="san-pham/clara-mare-chan-vay-chong-than-mot-cuc-nau-dat.html">
                                        <div class="title"><span>Clara Mare</span></div>
                                        <div class="desc">
                                            	<span>
													CLARA MARE Ch&acirc;n v&aacute;y chồng th&acirc;n một c&uacute;c n&acirc;u đất
													                                                        <br>
                                                                                                                <strike class="color-red"><span
                                                                                                                            class="color-black">650.000 VND</span></strike>
                                                        <br>
                                                        <span class="color-red">
                                                            299.000 VND | Giảm
                                                            54%</span>
                                                                                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <!-- <span class="status">Exclusive</span> -->
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="prod-img1">
                                    <a href="san-pham/eternite-dam-suong-dai-tay-co-tim-melisa-den.html"
                                       class="">
                                        <img data-src="https://ferosh.vn/uploads/18-01-2019/Enternite1688.jpg"
                                             class="lazyload"/>
                                        <img data-src="https://ferosh.vn/uploads/18-01-2019/Enternite1684.jpg"
                                             class="lazyload"/>
                                    </a>
                                </div>
                                <div
                                        class="content ">
                                    <a href="san-pham/eternite-dam-suong-dai-tay-co-tim-melisa-den.html">
                                        <div class="title"><span>&Eacute;ternit&eacute;</span></div>
                                        <div class="desc">
                                            	<span>
													Eternite Đầm su&ocirc;ng d&agrave;i tay cổ tim Melisa đen
													                                                        <br>
                                                                                                                <strike class="color-red"><span
                                                                                                                            class="color-black">950.000 VND</span></strike>
                                                        <br>
                                                        <span class="color-red">
                                                            665.000 VND | Giảm
                                                            30%</span>
                                                                                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <!-- <span class="status">Exclusive</span> -->
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="prod-img1">
                                    <a href="san-pham/vien-tran-ao-buoc-vat-vai-chom-vang.html"
                                       class="">
                                        <img data-src="https://ferosh.vn/uploads/07-09-2019/V61B19Q011-VOD27--V62T19Q004-RIS14---2-(1)(2).jpg"
                                             class="lazyload"/>
                                        <img data-src="https://ferosh.vn/uploads/07-09-2019/V61B19Q011-VOD27--5-(1).jpg"
                                             class="lazyload"/>
                                    </a>
                                </div>
                                <div
                                        class="content ">
                                    <a href="san-pham/vien-tran-ao-buoc-vat-vai-chom-vang.html">
                                        <div class="title"><span>Vien Tran</span></div>
                                        <div class="desc">
                                            	<span>
													VIEN TRAN &Aacute;o buộc vạt, vai chờm v&agrave;ng
													                                                        <br>
                                                                                                                    369.000 VND
                                                                                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <!-- <span class="status">Exclusive</span> -->
                                </div>
                            </div>
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
