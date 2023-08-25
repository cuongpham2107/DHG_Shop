@php
/*
$layout_page = home
*/ 

$banner_slide = $modelBanner->start()->setMoreWhere(['type', '=', 'background'])->getData();
$banner_left = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-left'])->getData();
$banner_all_category = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-tat-ca'])->getData();
$banner_slide_sp = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-slide-sp'])->getData();
$banner_do_dien_lanh = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-do-dien-lanh'])->getData();
$banner_tivi = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-tivi'])->getData();
$banner_dien_gia_dung = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-dien-gia-dung'])->getData();
$banner_dien_thoai = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-dien-thoai'])->getData();
$banner_laptop = $modelBanner->start()->setMoreWhere(['type', '=', 'banner-laptop'])->getData();
$banner_thiet_bi =  $modelBanner->start()->setMoreWhere(['type', '=', 'banner-thiet-bi'])->getData();



@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<div class="body-content bg-page">

   <div class="container">
       <div class="page-home">
           <div class="row">
               <div class="col-12">
                   <div id="home-slide" class="row">
                       <div class="col-md-8 col-12">
                           <div class="home-slide">
                               <div class="banner-list">
                                 @foreach ($banner_slide as $key => $item)
                                    <div class="item banner-item banner-item-{{$key}}">
                                       <a target=&quot;_blank&quot; href="#"
                                          data-id="3927">
                                          <picture>
                                             <source
                                                      srcset="{{ sc_file($item->getThumb()) }}"
                                                      type="image/jpeg">

                                             <img src="{{ sc_file($item->getThumb()) }}"
                                                   alt="{{$item->title}}"
                                                   width="640" height="450"/>
                                          </picture>


                                          <span class="banner-item-view banner-item-view-3927"
                                                style="display:none;"></span>
                                       </a>
                                    </div>
                                 @endforeach
                               </div>
                           </div>
                       </div>
                       <div id="home-box1" class="col-md-4 col-0">
                           <div class="home-box1 boxbanner-12">
                               <div class="banner-list">
                                 @foreach ($banner_left as $item)
                                    <div class="item banner-item banner-item-{{$key+1}}">
                                       <a target=&quot;_blank&quot; href="back-to-school-sale.html" data-id="3632">

                                          <img src="{{sc_file($item->getThumb())}}"
                                                alt="{{$item->title}}" width="310" height="145"/>

                                          <span class="banner-item-view banner-item-view-3632"
                                                style="display:none;"></span>
                                       </a>
                                 </div>
                                 @endforeach
                                  
                                   
                               </div>


                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Banner LandingPage-->
           <div class="row">
               <div class="col-12">
                   <div class="boxbanner-66 owlRespon-2">


                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-12">
                   <div class="boxbanner-67 owlRespon-4">


                   </div>
               </div>
           </div>
           <!-- Banner LandingPage-->

           <!-- Combo-->
           <div class="row">
               <div class="col-12">
                   <div class="boxbanner-64">


                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-12">
                   <div class="boxbanner-65 owlRespon-3">


                   </div>
               </div>
           </div>
           <!-- Combo-->

           <div class="row">
               <div class="col-12">
                   <div class="boxbanner-13">


                   </div>
               </div>
           </div>


           <div class="mhome-menu" style="display:none;">
               <ul class="list-unstyled">
               </ul>

           </div>


           <div class="row">
               <div class="col-12">

               </div>
           </div>
           <div class="row">
               <div class="col-12">
                   <div class="product-bestseller">
                       <div class="boxbanner-4">

                        @if($banner_all_category[0])
                            <div class="banner-list">
                                <div class="item banner-item banner-item-1">
                                    <a target=&quot;_blank&quot;
                                    href="#"
                                    data-id="3072">
                                        <picture>
                                            <source
                                                    srcset="{{sc_file($banner_all_category[0]->getThumb())}}"
                                                    type="image/jpeg">

                                            <img src="{{sc_file($banner_all_category[0]->getThumb())}}"
                                                alt="{{$banner_all_category[0]->title}}"
                                                width="1200" height="121"/>
                                        </picture>


                                        <span class="banner-item-view banner-item-view-3072"
                                            style="display:none;"></span>
                                    </a>
                                </div>
                            </div>
                        @endif
                           


                       </div>
                       <div class="product-list pList-olw-4">
                           <div class="card mb-4">
                               <a href="dieu-hoa-nhiet-do/dieu-hoa-samsung-wind-free-1c-inverter-12-000btu-aar13cyhaawknsv.html"
                                  data-id="22466" class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-14"
                                                 style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                               2023</span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-samsung-wind-free-1-chiu-inverter-12000btu-aar13cyhaawknsv_3a2c2b06.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-samsung-wind-free-1-chiu-inverter-12000btu-aar13cyhaawknsv_3a2c2b06.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="{{ sc_file($sc_templateFile.'/assets/cdn/thumb/images/product/diu-hoa-samsung-wind-free-1-chiu-inverter-12000btu-aar13cyhaawknsv_3a2c2b06.jpg')}}"
                                                alt="Điều hòa Samsung Wind-Free 1 chiều Inverter 1.5HP-12.000BTU AR13CYHAAWKNSV">

                                           <span class="product-item-view product-item-view-22466"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="{{ sc_file($sc_templateFile.'/assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png')}}"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-22%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Samsung Wind-Free 1C Inverter 12.000BTU AAR13CYHAAWKNSV </p>
                                       <ul class="list-inline product-attributes">
                                           <li>1 chiều Inverter</li>
                                           <li>1.5HP-12000 BTU</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>14.190.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           10.990.000 ₫
                                       </p>
                                       <div class="product-promotionshort-box">
                                           <p class="product-promotionshort">
                                               Tặng PMH đặc biệt
                                           </p>
                                       </div>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="tu-lanh/tu-lanh-2-cua-inverter-coex-rt-4002bs-185-lit.html" data-id="22889"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-14"
                                             style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                               2023</span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-2-cua-inverter-coex-rt-4002bs-185-lit_479ffb7e.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-2-cua-inverter-coex-rt-4002bs-185-lit_479ffb7e.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/tu-lanh-2-cua-inverter-coex-rt-4002bs-185-lit_479ffb7e.jpg"
                                                alt="Tủ lạnh 2 cửa Inverter Coex RT-4002BS 185 Lít">

                                           <span class="product-item-view product-item-view-22889"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-25%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Coex Inverter 185 Lít RT-4002BS </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Ngăn đá trên</li>
                                           <li>2 cửa</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>6.690.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           4.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-giat/may-giat-long-ngang-electrolux-inverter-8kg-ewf8024p5wb.html"
                                  data-id="19098" class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-8kg-ewf8024p5wb_1b647ffe.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-8kg-ewf8024p5wb_1b647ffe.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-8kg-ewf8024p5wb_1b647ffe.jpg"
                                                alt="Máy giặt lồng ngang Electrolux Inverter 8Kg EWF8024P5WB">

                                           <span class="product-item-view product-item-view-19098"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-35%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Electrolux Inverter 8Kg EWF8024P5WB </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Inverter</li>
                                           <li>8Kg</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>11.700.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           7.490.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="tu-lanh/tu-lanh-2-canh-samsung-rt22farbdsasv.html" data-id="889"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-54"
                                                 style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-samsung-rt22farbdsa---236-lit-inverter_3fdbbe95.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-samsung-rt22farbdsa---236-lit-inverter_3fdbbe95.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/t-lnh-samsung-rt22farbdsa---236-lit-inverter_3fdbbe95.jpg"
                                                alt="Tủ lạnh Samsung RT22FARBDSA - 236 Lít Inverter">

                                           <span class="product-item-view product-item-view-889"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-33%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Samsung Inverter 236L RT22FARBDSA/SV </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Ngăn đá trên</li>
                                           <li>2 cửa</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>7.790.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           5.190.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="tivi/smart-tivi-coex-43-inch-43fh6000x-fhd.html" data-id="19438"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-20"
                                                 style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Độc
                                               quyền</span>
                                       <span class="product-type product-type-11"
                                             style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-43-inch-43fh6000x-fhd_4106e845.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-43-inch-43fh6000x-fhd_4106e845.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/smart-tivi-coex-43-inch-43fh6000x-fhd_4106e845.png"
                                                alt="Smart Tivi Coex 43 inch 43FH6000X FHD">

                                           <span class="product-item-view product-item-view-19438"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-45%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Coex Smart Tivi 43FH6000X </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Full HD</li>
                                           <li>43 inch</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>10.900.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           5.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="tivi/smart-tivi-samsung-4k-55-inch-55au7002-uhd.html" data-id="20107"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-55-inch-55au7002-uhd_61b0b1c4.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-55-inch-55au7002-uhd_61b0b1c4.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/smart-tivi-samsung-4k-55-inch-55au7002-uhd_61b0b1c4.png"
                                                alt="Smart Tivi Samsung 4K 55 inch 55AU7002 UHD">

                                           <span class="product-item-view product-item-view-20107"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-23%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Samsung Smart TV UA55AU7002 </p>
                                       <ul class="list-inline product-attributes">
                                           <li>4K</li>
                                           <li>55 inch</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>13.900.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           10.600.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="tu-lanh/tu-lanh-side-by-side-680l-samsung-rs62r5001m9sv.html" data-id="902"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-54"
                                                 style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-side-by-side-680l-samsung-rs62r5001m9sv-digital-inverter_d99cff8d.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-side-by-side-680l-samsung-rs62r5001m9sv-digital-inverter_d99cff8d.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/t-lnh-side-by-side-680l-samsung-rs62r5001m9sv-digital-inverter_d99cff8d.jpg"
                                                alt="Tủ lạnh Side by side 680L Samsung RS62R5001M9/SV Digital Inverter">

                                           <span class="product-item-view product-item-view-902"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-39%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Samsung Inverter 647L RS62R5001M9/SV </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Side by Side</li>
                                           <li>2 cửa</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>24.900.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           14.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-giat/may-giat-105kg-lg-t2350vs2w-smart-inverter.html" data-id="1822"
                                  class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/-BZ7yum.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/-BZ7yum.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/-BZ7yum.jpg"
                                                alt="Máy giặt LG lồng đứng 10.5kg T2350VS2W Smart Inverter">

                                           <span class="product-item-view product-item-view-1822"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-22%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           LG Inverter 10,5Kg T2350VS2W </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Inverter</li>
                                           <li>10.5Kg</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>8.000.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           6.190.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-giat/may-giat-long-ngang-coex-inverter-8-5kg-fw-80cw1408igb.html"
                                  data-id="20644" class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-49"
                                             style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-coex-inverter-85kg-fw---80cw1408igb_2ab30900.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-coex-inverter-85kg-fw---80cw1408igb_2ab30900.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/may-git-lng-ngang-coex-inverter-85kg-fw---80cw1408igb_2ab30900.jpg"
                                                alt="Máy giặt lồng ngang Coex Inverter 8,5kg FW - 80CW1408IGB">

                                           <span class="product-item-view product-item-view-20644"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-36%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Coex Inverter 8,5kg FW - 80CW1408IGB </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Inverter</li>
                                           <li>8.5Kg</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>9.490.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           5.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="quat-cay/quat-cay-cong-nghiep-senko-dcn1806.html" data-id="6154"
                                  class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-cong-nghip-senko-dcn1806_348aede4.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-cong-nghip-senko-dcn1806_348aede4.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/qut-cay-cong-nghip-senko-dcn1806_348aede4.png"
                                                alt="Quạt cây công nghiệp Senko DCN1806">

                                           <span class="product-item-view product-item-view-6154"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-31%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Quạt cây công nghiệp Senko DCN1806 </p>
                                       <ul class="list-inline product-attributes">
                                           <li>65W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>880.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           599.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="quat-treo-tuong/quat-treo-tuong-co-dieu-khien-coex-cw-7211a.html"
                                  data-id="22592" class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-14"
                                             style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                               2023</span>
                                       <span class="product-type product-type-46"
                                             style="display: block; position: absolute; left: 3px ; top: 3px ; width: 108px; height: 30px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/icon-premium-hang-nk_79ec41bc.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/qut-treo-tung-coex-cw-7211a-co-diu-khin_43acfc58.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/qut-treo-tung-coex-cw-7211a-co-diu-khin_43acfc58.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/qut-treo-tung-coex-cw-7211a-co-diu-khin_43acfc58.png"
                                                alt="Quạt treo tường Coex CW-7211A (Có điều khiển)">

                                           <span class="product-item-view product-item-view-22592"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-47%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Quạt treo tường Coex CW-7211A (Có điều khiển) </p>
                                       <ul class="list-inline product-attributes">
                                           <li>55W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>1.890.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           990.000 ₫
                                       </p>
                                       <div class="product-promotionshort-box">
                                           <p class="product-promotionshort">
                                               Tặng quà 50.000đ
                                           </p>
                                       </div>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="quat/quat-cay-toshiba-f-lsa10-h-vn.html" data-id="6175"
                                  class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dung-toshiba-flsa10hkvn-co-dieu-khien-zoaEhf.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dung-toshiba-flsa10hkvn-co-dieu-khien-zoaEhf.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/quat-dung-toshiba-flsa10hkvn-co-dieu-khien-zoaEhf.png"
                                                alt="Quạt cây Toshiba F-LSA10(H)VN">

                                           <span class="product-item-view product-item-view-6175"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="card-title product-name">
                                           Quạt cây Toshiba F-LSA10(H)VN </p>
                                       <ul class="list-inline product-attributes">
                                           <li>50W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>1.370.000 ₫</span>
                                           <span class="product-price-saving">-29%</span>
                                       </p>
                                       <p class="card-text product-price">
                                           969.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="lo-vi-song-co-20l-roler-rm-3213.html" data-id="22022" class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-50"
                                             style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>
                                       <span class="product-type product-type-49"
                                             style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/lo-vi-song-co-20l-roler-rm-3213_ab1c0775.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/lo-vi-song-co-20l-roler-rm-3213_ab1c0775.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/lo-vi-song-co-20l-roler-rm-3213_ab1c0775.png"
                                                alt="Lò vi sóng cơ 20L Roler RM-3213">

                                           <span class="product-item-view product-item-view-22022"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-48%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Lò vi sóng cơ 20L Roler RM-3213 </p>
                                       <ul class="list-inline product-attributes">
                                           <li>20 Lít</li>
                                           <li>700 W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>2.110.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           1.090.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="noi-com-dien/noi-com-dien-15l-midea-mrcm1531.html" data-id="3183"
                                  class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-15l-midea-mr-cm1531_f0cbfd78.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-15l-midea-mr-cm1531_f0cbfd78.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/ni-com-din-15l-midea-mr-cm1531_f0cbfd78.jpg"
                                                alt="Nồi cơm điện 1.5L Midea MR-CM1531">

                                           <span class="product-item-view product-item-view-3183"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="card-title product-name">
                                           Nồi cơm điện 1.5L Midea MR-CM1531 </p>
                                       <ul class="list-inline product-attributes">
                                           <li>1.5 lít</li>
                                           <li>700W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>560.000 ₫</span>
                                           <span class="product-price-saving">-19%</span>
                                       </p>
                                       <p class="card-text product-price">
                                           449.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="bep-tu-dien-nuong/bep-dien-tu-coex-ci-3302.html" data-id="21837"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-14"
                                                 style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                               2023</span>
                                       <span class="product-type product-type-50"
                                             style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>
                                       <span class="product-type product-type-49"
                                             style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/bp-din-t-coex-ci-3302-kem-ni-lu_c2377c1c.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/bp-din-t-coex-ci-3302-kem-ni-lu_c2377c1c.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/bp-din-t-coex-ci-3302-kem-ni-lu_c2377c1c.png"
                                                alt="Bếp điện từ Coex CI-3302 (Kèm nồi lẩu)">

                                           <span class="product-item-view product-item-view-21837"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-56%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Bếp điện từ Coex CI-3302 (Kèm nồi lẩu) </p>
                                       <ul class="list-inline product-attributes">
                                           <li>1600W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>1.349.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           590.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-ep-vat-trai-cay/may-ep-trai-cay-da-nang-roler-rj4201.html"
                                  data-id="4048" class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-49"
                                                 style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-ep-trai-cay-da-nang-roler-rj-4201_74672a01.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-ep-trai-cay-da-nang-roler-rj-4201_74672a01.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/may-ep-trai-cay-da-nang-roler-rj-4201_74672a01.jpg"
                                                alt="Máy ép trái cây đa năng Roler RJ-4201">

                                           <span class="product-item-view product-item-view-4048"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-46%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Máy ép trái cây đa năng Roler RJ-4201 </p>
                                       <ul class="list-inline product-attributes">
                                           <li>400W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>1.390.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           748.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="noi-chien-khong-dau/noi-chien-khong-dau-da-nang-roler-ra-3115a.html"
                                  data-id="19449" class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-50"
                                             style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-chien-khong-du-din-t-da-nang-6l-roler-ra-3115a_623cd381.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-chien-khong-du-din-t-da-nang-6l-roler-ra-3115a_623cd381.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/ni-chien-khong-du-din-t-da-nang-6l-roler-ra-3115a_623cd381.jpg"
                                                alt="Nồi chiên không dầu điện tử đa năng 6L ROLER RA-3115A">

                                           <span class="product-item-view product-item-view-19449"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-46%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Nồi chiên không dầu điện tử đa năng 6L ROLER RA-3115A </p>
                                       <ul class="list-inline product-attributes">
                                           <li>6.0 Lít</li>
                                           <li>1500W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>2.990.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           1.590.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="noi-com-dien/noi-com-dien-1-8-lit-coex-cr-3425.html" data-id="22594"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-50"
                                                 style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>
                                       <span class="product-type product-type-11"
                                             style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-14"
                                             style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                               2023</span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-co-18-lit-coex-cr-3425_3c531c32.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-co-18-lit-coex-cr-3425_3c531c32.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/ni-com-din-co-18-lit-coex-cr-3425_3c531c32.png"
                                                alt="Nồi cơm điện cơ 1.8 lít Coex CR-3425">

                                           <span class="product-item-view product-item-view-22594"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="card-title product-name">
                                           Nồi cơm điện cơ 1.8 lít Coex CR-3425 </p>
                                       <ul class="list-inline product-attributes">
                                           <li>1.8L</li>
                                           <li>700W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>1.190.000 ₫</span>
                                           <span class="product-price-saving">-41%</span>
                                       </p>
                                       <p class="card-text product-price">
                                           699.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="noi-com-dien/noi-com-dien-cao-tan-15-lit-coex-cr3454a.html" data-id="3167"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-49"
                                             style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-cao-tn-15-lit-coex-cr-3454a_c012702d.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-cao-tn-15-lit-coex-cr-3454a_c012702d.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/ni-com-din-cao-tn-15-lit-coex-cr-3454a_c012702d.jpg"
                                                alt="Nồi cơm điện cao tần 1.5 lít Coex CR-3454A">

                                           <span class="product-item-view product-item-view-3167"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="card-title product-name">
                                           Nồi cơm điện cao tần 1.5 lít Coex CR-3454A </p>
                                       <ul class="list-inline product-attributes">
                                           <li>1.5 lít</li>
                                           <li>1300W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>4.690.000 ₫</span>
                                           <span class="product-price-saving">-49%</span>
                                       </p>
                                       <p class="card-text product-price">
                                           2.390.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="noi-com-dien/noi-com-dien-tu-cuckoo-1-lit-cr-0631f.html" data-id="3357"
                                  class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-t-cuckoo-1-lit-cr-0631f_e7434899.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-t-cuckoo-1-lit-cr-0631f_e7434899.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/ni-com-din-t-cuckoo-1-lit-cr-0631f_e7434899.jpg"
                                                alt="Nồi cơm điện tử Cuckoo 1 lít CR-0631F">

                                           <span class="product-item-view product-item-view-3357"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-43%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Nồi cơm điện tử Cuckoo 1 lít CR-0631F </p>
                                       <ul class="list-inline product-attributes">
                                           <li>1.0 lít</li>
                                           <li>580W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>3.540.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           1.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-xay-sinh-to/may-xay-sinh-to-da-nang-roler-rb4107.html" data-id="3608"
                                  class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-xay-sinh-t-da-nang-roler-rb-4107_c5924e09.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-xay-sinh-t-da-nang-roler-rb-4107_c5924e09.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/may-xay-sinh-t-da-nang-roler-rb-4107_c5924e09.jpg"
                                                alt="Máy xay sinh tố đa năng ROLER RB-4107">

                                           <span class="product-item-view product-item-view-3608"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-30%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Máy xay sinh tố đa năng ROLER RB-4107 </p>
                                       <ul class="list-inline product-attributes">
                                           <li>350W</li>
                                           <li>1.2 lít</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>990.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           690.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-ep-vat-trai-cay/may-ep-trai-cay-panasonic-mj68mwsp.html" data-id="4066"
                                  class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/-4609D8.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/-4609D8.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/-4609D8.png"
                                                alt="Máy ép trái cây Panasonic MJ68M">

                                           <span class="product-item-view product-item-view-4066"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-35%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Máy ép trái cây Panasonic MJ68M </p>
                                       <ul class="list-inline product-attributes">
                                           <li>200W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>1.840.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           1.190.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="bep-tu-dien-nuong/bep-dien-tu-hong-ngoai-kangaroo-kg499i-3100W.html"
                                  data-id="4259" class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/bp-t---hng-ngoi-kangaroo-kg499i-3100-w_e244e82f.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/bp-t---hng-ngoi-kangaroo-kg499i-3100-w_e244e82f.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/bp-t---hng-ngoi-kangaroo-kg499i-3100-w_e244e82f.jpg"
                                                alt="Bếp từ - hồng ngoại Kangaroo KG499I 3100 W">

                                           <span class="product-item-view product-item-view-4259"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-14%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Bếp từ - hồng ngoại Kangaroo KG499I 3100 W </p>
                                       <ul class="list-inline product-attributes">
                                           <li>3100W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>3.510.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           2.990.000 ₫
                                       </p>
                                       <div class="product-promotionshort-box">
                                           <p class="product-promotionshort">
                                               Quà tặng trị giá 1 triệu
                                           </p>
                                       </div>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-loc-nuoc/may-loc-nuoc-7-loi-kangaroo-kg09.html" data-id="3894"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-lc-nuc-kangaroo-7-cp-kg09-kv_4b0b11d0.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/may-lc-nuc-kangaroo-7-cp-kg09-kv_4b0b11d0.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/may-lc-nuc-kangaroo-7-cp-kg09-kv_4b0b11d0.jpg"
                                                alt="Máy lọc nước Kangaroo 7 cấp KG09 KV">

                                           <span class="product-item-view product-item-view-3894"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="card-title product-name">
                                           Máy lọc nước Kangaroo 7 cấp KG09 KV </p>
                                       <ul class="list-inline product-attributes">
                                           <li>15L/h</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>4.920.000 ₫</span>
                                           <span class="product-price-saving">-29%</span>
                                       </p>
                                       <p class="card-text product-price">
                                           3.490.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="cay-nuoc-nong-lanh/cay-nuoc-nong-lanh-coex-cw-7119.html" data-id="22408"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>
                                       <span class="product-type product-type-50"
                                             style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/cay-nuc-nong-lnh-coex-cw-7119-mau-den_d05c2129.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/cay-nuc-nong-lnh-coex-cw-7119-mau-den_d05c2129.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/cay-nuc-nong-lnh-coex-cw-7119-mau-den_d05c2129.png"
                                                alt="Cây nước nóng lạnh Coex CW-7119 (Màu đen)">

                                           <span class="product-item-view product-item-view-22408"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="card-title product-name">
                                           Cây nước nóng lạnh Coex CW-7119 (Màu đen) </p>
                                       <ul class="list-inline product-attributes">
                                           <li>CS Nóng: 500W – CS Lạnh: 90W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>5.690.000 ₫</span>
                                           <span class="product-price-saving">-35%</span>
                                       </p>
                                       <p class="card-text product-price">
                                           3.690.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="may-tinh-bang/apple-ipad-gen-9-102-wifi-64g-gray.html" data-id="9716"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-49"
                                                 style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/apple-ipad-gen-9-102-wifi-64g-gray-1X90yz.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/apple-ipad-gen-9-102-wifi-64g-gray-1X90yz.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/apple-ipad-gen-9-102-wifi-64g-gray-1X90yz.jpg"
                                                alt="Apple iPad Gen 9 10.2" WiFi 64G Gray">

                                           <span class="product-item-view product-item-view-9716"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/online-gia-re_d7df06fb.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-31%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Apple iPad Gen 9 10.2&quot; WiFi 64G </p>
                                       <ul class="list-inline product-attributes">
                                           <li>64 GB</li>
                                           <li>3 GB</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>9.990.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           6.990.000 ₫
                                       </p>
                                       <p class="card-text product-price-type1">
                                           Online Giá Rẻ: 6.890.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="laptop/laptop-acer-aspire-3-a315-58-58es-bac.html" data-id="20329"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-49"
                                                 style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-acer-aspire-3-a315-58-58es-bac_f9195e46.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-acer-aspire-3-a315-58-58es-bac_f9195e46.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/laptop-acer-aspire-3-a315-58-58es-bac_f9195e46.png"
                                                alt="Laptop Acer Aspire 3 A315-58-58ES Bạc">

                                           <span class="product-item-view product-item-view-20329"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-33%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Acer Aspire 3 A315-58-58ES Bạc </p>
                                       <ul class="list-inline product-attributes">
                                           <li>Core i5</li>
                                           <li>256GB SSD</li>
                                           <li>4 GB</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>16.490.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           10.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="loa-keo-loa-one-box/loa-keo-acnos-cbx150g-kem-2-mic-450w-bass-40cm-15.html"
                                  data-id="19319" class="product-item">
                                   <div class="card-img-top">


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-acnos-cbx150g-kem-2-mic-450w-bass-40cm-15_7fa61cc2.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-acnos-cbx150g-kem-2-mic-450w-bass-40cm-15_7fa61cc2.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/loa-keo-acnos-cbx150g-kem-2-mic-450w-bass-40cm-15_7fa61cc2.jpg"
                                                alt="Loa điện Acnos CBX150G (kèm 2 mic) 450W Bass 40cm 15''">

                                           <span class="product-item-view product-item-view-19319"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="card-title product-name">
                                           Acnos CBX150G (kèm 2 mic) 450W Bass 40cm 15&#x27;&#x27; </p>
                                       <ul class="list-inline product-attributes">
                                           <li>450W</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>5.990.000 ₫</span>
                                           <span class="product-price-saving">-16%</span>
                                       </p>
                                       <p class="card-text product-price">
                                           4.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="tivi/smart-tivi-lg-4k-65-inch-65uq7550psf-thinq-ai.html" data-id="20133"
                                  class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-11"
                                                 style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                               góp 0%</span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-65-inch-65uq7550psf-thinq-ai_24e9cdf6.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-65-inch-65uq7550psf-thinq-ai_24e9cdf6.png"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/smart-tivi-lg-4k-65-inch-65uq7550psf-thinq-ai_24e9cdf6.png"
                                                alt="Smart Tivi LG 4K 65 inch 65UQ7550PSF ThinQ AI">

                                           <span class="product-item-view product-item-view-20133"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-37%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           LG Smart TV 65UQ7550PSF </p>
                                       <ul class="list-inline product-attributes">
                                           <li>4K</li>
                                           <li>65 inch</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>22.400.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           13.990.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>


                           <div class="card mb-4">
                               <a href="smartphones/dien-thoai-samsung-galaxy-a14-4g-a145f-4-128g-den-midnight.html"
                                  data-id="22309" class="product-item">
                                   <div class="card-img-top">
                                           <span class="product-type product-type-49"
                                                 style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                       <picture>
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.webp"
                                                   type="image/webp">
                                           <source
                                                   srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.jpg"
                                                   type="image/jpeg">
                                           <img loading="lazy"
                                                src="assets/cdn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.jpg"
                                                alt="Điện thoại Samsung Galaxy A14 4G A145F (4+128G) Đen Midnight">

                                           <span class="product-item-view product-item-view-22309"
                                                 style="display:none;"></span>
                                       </picture>
                                   </div>
                                   <div class="card-body">
                                       <p class="product-specialtype-box">
                                           <img loading="lazy"
                                                src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                width="100%" height="100%" alt="Khuyến mại"/>
                                           <span>-23%</span>
                                       </p>
                                       <p class="card-title product-name">
                                           Samsung Galaxy A14 4G </p>
                                       <ul class="list-inline product-attributes">
                                           <li>4 GB</li>
                                           <li>128 GB</li>
                                       </ul>

                                       <p class="product-price-regular">
                                           <span>4.490.000 ₫</span>
                                       </p>
                                       <p class="card-text product-price">
                                           3.450.000 ₫
                                       </p>

                                   </div>
                               </a>
                           </div>

                       </div>

                   </div>
               </div>
           </div>

           <div class="row">
               <div class="col-12">

                   <div class="wrapbox-pList">

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-1">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-1-0">
                               <div class="owlRespon-1 boxbanner-53">

                                    @if($banner_slide_sp[0])
                                        <div class="banner-list">
                                            <div class="item banner-item banner-item-1">
                                                <a target=&quot;_blank&quot; href="dieu-hoa-sale.html" data-id="2996">


                                                    <picture>
                                                        <source
                                                                srcset="{{sc_file($banner_slide_sp[0]->getThumb())}}"
                                                                type="image/jpeg">

                                                        <img src="{{sc_file($banner_slide_sp[0]->getThumb())}}"
                                                            alt="{{$banner_slide_sp[0]->title}}" width="1200" height="120"/>
                                                    </picture>


                                                    <span class="banner-item-view banner-item-view-2996"
                                                        style="display:none;"></span>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                               </div>
                               <div class="product-list pList-olwMobile">


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-coex-4k-55-inch-55ut8000x-android-10.html"
                                          data-id="19443" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-20"
                                                         style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Độc
                                                       quyền</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-4k-55-inch-55ut8000x-android-10_5b8ac57a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-4k-55-inch-55ut8000x-android-10_5b8ac57a.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-coex-4k-55-inch-55ut8000x-android-10_5b8ac57a.png"
                                                        alt="Smart Tivi Coex 4K 55 inch 55UT8000X Android 10">

                                                   <span class="product-item-view product-item-view-19443"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-48%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex Android TV 55UT8000X </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>55 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>15.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-samsung-4k-50-inch-50au7002-uhd.html"
                                          data-id="20106" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-50-inch-50au7002-uhd_b6d83974.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-50-inch-50au7002-uhd_b6d83974.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-samsung-4k-50-inch-50au7002-uhd_b6d83974.png"
                                                        alt="Smart Tivi Samsung 4K 50 inch 50AU7002 UHD">

                                                   <span class="product-item-view product-item-view-20106"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-18%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Smart TV UA50AU7002 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>50 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>11.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   9.700.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-samsung-4k-65-inch-65au7002-uhd.html"
                                          data-id="20108" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au7002-uhd_69ec5164.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au7002-uhd_69ec5164.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au7002-uhd_69ec5164.png"
                                                        alt="Smart Tivi Samsung 4K 65 inch 65AU7002 UHD">

                                                   <span class="product-item-view product-item-view-20108"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-28%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Smart TV UA65AU7002 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>65 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>18.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.600.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-4k-sony-kd-50x75k-50-inch-google-tv.html"
                                          data-id="19969" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-4k-sony-kd-50x75k-50-inch-google-tv_961b5483.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-4k-sony-kd-50x75k-50-inch-google-tv_961b5483.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-4k-sony-kd-50x75k-50-inch-google-tv_961b5483.png"
                                                        alt="Smart Tivi 4K Sony KD-50X75K 50 inch Google TV">

                                                   <span class="product-item-view product-item-view-19969"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-29%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Sony Google TV KD-50X75K </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>50 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>18.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.400.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-coex-4k-70-inch-70ut7000x-android-10.html"
                                          data-id="20275" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>
                                               <span class="product-type product-type-20"
                                                     style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Độc
                                                       quyền</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-4k-70-inch-70ut7000x-android-10_5498b4f9.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-4k-70-inch-70ut7000x-android-10_5498b4f9.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-coex-4k-70-inch-70ut7000x-android-10_5498b4f9.png"
                                                        alt="Smart Tivi Coex 4K 70 inch 70UT7000X Android 10">

                                                   <span class="product-item-view product-item-view-20275"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-50%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex Android TV 70UT7000X </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>70 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>23.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   11.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-sharp-sjx201esl-196-lit-2-canh-jtech-inverter.html"
                                          data-id="915" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-AQvCR7.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-AQvCR7.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-AQvCR7.png"
                                                        alt="Tủ lạnh Sharp SJ-X201E-SL, 196 Lít, 2 cánh, J-Tech Inverter">

                                                   <span class="product-item-view product-item-view-915"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Sharp Inverter 196L SJ-X201E-SL </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>7.600.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.790.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-side-by-side-680l-samsung-rs62r5001m9sv.html"
                                          data-id="902" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-54"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-side-by-side-680l-samsung-rs62r5001m9sv-digital-inverter_d99cff8d.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-side-by-side-680l-samsung-rs62r5001m9sv-digital-inverter_d99cff8d.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-side-by-side-680l-samsung-rs62r5001m9sv-digital-inverter_d99cff8d.jpg"
                                                        alt="Tủ lạnh Side by side 680L Samsung RS62R5001M9/SV Digital Inverter">

                                                   <span class="product-item-view product-item-view-902"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-39%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Inverter 647L RS62R5001M9/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Side by Side</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>24.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   14.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh-side-by-side-inverter-coex-rs-4004msw-535l.html"
                                          data-id="22180" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-14"
                                                         style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>
                                               <span class="product-type product-type-46"
                                                     style="display: block; position: absolute; left: 3px ; top: 3px ; width: 108px; height: 30px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/icon-premium-hang-nk_79ec41bc.png) no-repeat center center;"></span>
                                               <span class="product-type product-type-11"
                                                     style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-side-by-side-inverter-coex-rs-4004msw-535l_45d31663.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-side-by-side-inverter-coex-rs-4004msw-535l_45d31663.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-side-by-side-inverter-coex-rs-4004msw-535l_45d31663.jpg"
                                                        alt="Tủ lạnh Side by side Inverter COEX RS-4004MSW 535L">

                                                   <span class="product-item-view product-item-view-22180"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-48%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex Side by side Inverter 535L RS-4004MSW </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Side by Side</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>27.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   14.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-4-cua-inverter-coex-rm-4004msw-524l.html"
                                          data-id="21945" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-50"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>
                                               <span class="product-type product-type-11"
                                                     style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-4-ca-inverter-coex-rm-4004msw-524l_7d72cafe.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-4-ca-inverter-coex-rm-4004msw-524l_7d72cafe.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-4-ca-inverter-coex-rm-4004msw-524l_7d72cafe.jpg"
                                                        alt="Tủ lạnh 4 cửa Inverter Coex RM-4004MSW 524L">

                                                   <span class="product-item-view product-item-view-21945"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-39%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex 4 cửa Inverter 524L RM-4004MSW </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Tủ lạnh Multi</li>
                                                   <li>4 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>24.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   14.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-samsung-inverter-488l-4-cua-rf48a4000b4sv.html"
                                          data-id="1176" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-samsung-inverter-488l-4-cua-rf48a4000b4sv-8v3tPP.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-samsung-inverter-488l-4-cua-rf48a4000b4sv-8v3tPP.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/tu-lanh-samsung-inverter-488l-4-cua-rf48a4000b4sv-8v3tPP.png"
                                                        alt="Tủ lạnh Samsung Inverter 488L 4 cửa RF48A4000B4/SV">

                                                   <span class="product-item-view product-item-view-1176"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-29%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Inverter 488L RF48A4000B4/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Tủ lạnh Multi</li>
                                                   <li>4 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>23.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   16.990.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       Tặng PMH 1.000.000đ
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-say-quan-ao-thong-hoi-coex-7-2kg-cd-70avw.html" data-id="22051"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-14"
                                                         style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>
                                               <span class="product-type product-type-50"
                                                     style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>
                                               <span class="product-type product-type-49"
                                                     style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>
                                               <span class="product-type product-type-11"
                                                     style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-sy-qun-ao-thong-hoi-coex-72kg-cd-70avw_763f1910.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-sy-qun-ao-thong-hoi-coex-72kg-cd-70avw_763f1910.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-sy-qun-ao-thong-hoi-coex-72kg-cd-70avw_763f1910.jpg"
                                                        alt="Máy sấy quần áo thông hơi Coex 7,2kg CD-70AVW">

                                                   <span class="product-item-view product-item-view-22051"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-36%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex 7,2kg CD-70AVW </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Sấy thông hơi</li>
                                                   <li>7.2 kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>7.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-105kg-lg-t2350vs2w-smart-inverter.html"
                                          data-id="1822" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-BZ7yum.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-BZ7yum.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-BZ7yum.jpg"
                                                        alt="Máy giặt LG lồng đứng 10.5kg T2350VS2W Smart Inverter">

                                                   <span class="product-item-view product-item-view-1822"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-22%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG Inverter 10,5Kg T2350VS2W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Inverter</li>
                                                   <li>10.5Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.000.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   6.190.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-lg-inverter-8kg-fv1408s4w.html"
                                          data-id="1740" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lg-lng-ngang-thong-minh-85-kg-fv1408s4w-inverter-ai-dd_c9aa5d72.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lg-lng-ngang-thong-minh-85-kg-fv1408s4w-inverter-ai-dd_c9aa5d72.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-lg-lng-ngang-thong-minh-85-kg-fv1408s4w-inverter-ai-dd_c9aa5d72.jpg"
                                                        alt="Máy giặt LG lồng ngang thông minh 8,5 Kg FV1408S4W Inverter AI DD">

                                                   <span class="product-item-view product-item-view-1740"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-31%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG Inverter 8.5Kg FV1408S4W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>AI DD</li>
                                                   <li>8.5Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>11.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-electrolux-inverter-9kg-ewf9024p5wb.html"
                                          data-id="19099" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-9kg-ewf9024p5wb_7dd96923.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-9kg-ewf9024p5wb_7dd96923.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-9kg-ewf9024p5wb_7dd96923.jpg"
                                                        alt="Máy giặt lồng ngang Electrolux Inverter 9Kg EWF9024P5WB">

                                                   <span class="product-item-view product-item-view-19099"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-35%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Electrolux Inverter 9Kg EWF9024P5WB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Inverter</li>
                                                   <li>9Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.600.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.790.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       Tặng PMH 500.000đ
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-samsung-ai-inverter-10kg-ww10tp44dsbsv.html"
                                          data-id="1758" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-54"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-sMhkts.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-sMhkts.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-sMhkts.png"
                                                        alt="Máy giặt lồng ngang Samsung AI Inverter 10Kg WW10TP44DSB/SV">

                                                   <span class="product-item-view product-item-view-1758"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-47%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung AI Inverter 10Kg WW10TP44DSB/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Inverter</li>
                                                   <li>AI</li>
                                                   <li>10Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>20.890.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   10.990.000 ₫
                                               </p>
                                               <p class="card-text product-price-type1">
                                                   Online Giá Rẻ: 10.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-casper-1-chieu-9-000btu-sc-09fs33.html"
                                          data-id="20007" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-casper-1-chiu-9000btu-sc-09fs33_ddb063f7.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-casper-1-chiu-9000btu-sc-09fs33_ddb063f7.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/diu-hoa-casper-1-chiu-9000btu-sc-09fs33_ddb063f7.jpg"
                                                        alt="Điều hòa Casper 1 chiều 1HP-9.000BTU SC-09FS33">

                                                   <span class="product-item-view product-item-view-20007"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-28%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Casper 1C 9.000BTU SC-09FS33 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều thường</li>
                                                   <li>1HP-9000 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>6.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-lg-1-chieu-inverter-11-000btu-v13win.html"
                                          data-id="22175" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-14"
                                                         style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-lg-1-chiu-inverter-11000btu-v13win_d9e2fcfb.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-lg-1-chiu-inverter-11000btu-v13win_d9e2fcfb.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/diu-hoa-lg-1-chiu-inverter-11000btu-v13win_d9e2fcfb.jpg"
                                                        alt="Điều hòa LG 1 chiều Inverter 1.5HP-11.000BTU V13WIN">

                                                   <span class="product-item-view product-item-view-22175"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-21%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG 1 chiều Inverter 11.000BTU V13WIN </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều Inverter</li>
                                                   <li>1.5HP-11000 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.790.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   9.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-casper-1c-inverter-9-500btu-gc-09is35.html"
                                          data-id="22469" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-14"
                                                         style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-casper-1-chiu-inverter-1hp-9500btu-gc-09is35_d27467fd.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-casper-1-chiu-inverter-1hp-9500btu-gc-09is35_d27467fd.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/diu-hoa-casper-1-chiu-inverter-1hp-9500btu-gc-09is35_d27467fd.jpg"
                                                        alt="Điều hòa Casper 1 chiều Inverter 1HP-9.500BTU GC-09IS35">

                                                   <span class="product-item-view product-item-view-22469"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-12%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Casper 1C Inverter 9.500BTU GC-09IS35 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều Inverter</li>
                                                   <li>1HP-9500 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>7.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   6.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat-dieu-hoa/quat-dieu-hoa-coex-ca-7120a.html" data-id="22589"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-50"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>
                                               <span class="product-type product-type-11"
                                                     style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>
                                               <span class="product-type product-type-14"
                                                     style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-diu-hoa-coex-ca-7120a-diu-khin-t-xa_e5483d4b.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-diu-hoa-coex-ca-7120a-diu-khin-t-xa_e5483d4b.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/qut-diu-hoa-coex-ca-7120a-diu-khin-t-xa_e5483d4b.png"
                                                        alt="Quạt điều hòa Coex CA-7120A (Điều khiển từ xa)">

                                                   <span class="product-item-view product-item-view-22589"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-33%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt điều hòa Coex CA-7120A (Điều khiển từ xa) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>20 - 25 m2</li>
                                                   <li>80W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.990.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       Tặng quà 150.000đ
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat/quat-lung-senko-ls103-ls1630-ong-sat.html" data-id="6141"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-lng-senko-ls103ls1630-ng-st_95871c10.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-lng-senko-ls103ls1630-ng-st_95871c10.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/qut-lng-senko-ls103ls1630-ng-st_95871c10.png"
                                                        alt="Quạt lửng Senko LS103/LS1630-ống sắt">

                                                   <span class="product-item-view product-item-view-6141"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-24%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt lửng Senko LS103/LS1630-ống sắt </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>47W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>570.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   429.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat-cay/quat-cay-asia-turbo-one-vy619990.html" data-id="22431"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-asia-turbo-one-vy619990_b0ad46e9.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-asia-turbo-one-vy619990_b0ad46e9.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/qut-cay-asia-turbo-one-vy619990_b0ad46e9.png"
                                                        alt="Quạt cây Asia Turbo One VY619990">

                                                   <span class="product-item-view product-item-view-22431"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-51%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt cây Asia Turbo One VY619990 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>55W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.230.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   599.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat/quat-cay-5-canh-co-dieu-khien-coex-cf-7117a.html"
                                          data-id="19676" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>
                                               <span class="product-type product-type-50"
                                                     style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 35px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/sp-moi-new-arrival_0f569e81.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-5-canh-co-diu-khin-coex-cf-7117a-3-in-1_6b8d488c.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-5-canh-co-diu-khin-coex-cf-7117a-3-in-1_6b8d488c.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/qut-cay-5-canh-co-diu-khin-coex-cf-7117a-3-in-1_6b8d488c.jpg"
                                                        alt="Quạt cây 5 cánh có điều khiển COEX CF-7117A (3 in 1)">

                                                   <span class="product-item-view product-item-view-19676"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-50%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt cây 5 cánh có điều khiển COEX CF-7117A (3 in 1) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>50W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.190.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.090.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat/quat-tran-panasonic-f-60mz2.html" data-id="6166"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/31873_3795_quat-tran-panasonic-f-60mz2.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/31873_3795_quat-tran-panasonic-f-60mz2.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/31873_3795_quat-tran-panasonic-f-60mz2.jpg"
                                                        alt="Quạt trần 3 cánh Panasonic F-60MZ2(18)-ti50-Malaysia">

                                                   <span class="product-item-view product-item-view-6166"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-20%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt trần 3 cánh Panasonic F-60MZ2(18)-ti50-Malaysia </p>

                                               <p class="product-price-regular">
                                                   <span>1.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.180.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="noi-com-dien/noi-com-dien-co-18l-cuckoo-cr1021rdvncv-do-korea.html"
                                          data-id="3299" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-co-18l-cuckoo-cr-1021rdvncv-d-korean_7bd5434f.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-co-18l-cuckoo-cr-1021rdvncv-d-korean_7bd5434f.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/ni-com-din-co-18l-cuckoo-cr-1021rdvncv-d-korean_7bd5434f.jpg"
                                                        alt="Nồi cơm điện cơ 1,8L Cuckoo CR-1021/RDVNCV đỏ-Korean">

                                                   <span class="product-item-view product-item-view-3299"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-42%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Nồi cơm điện cơ 1,8L Cuckoo CR-1021/RDVNCV đỏ-Korean </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1.8 lít</li>
                                                   <li>650W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.260.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="lo-vi-song/lvs-co-20l-electrolux-emm20k22b.html" data-id="21429"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/lo-vi-song-co-20l-electrolux-emm20k22b_010f231a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/lo-vi-song-co-20l-electrolux-emm20k22b_010f231a.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/lo-vi-song-co-20l-electrolux-emm20k22b_010f231a.jpg"
                                                        alt="Lò vi sóng cơ 20L Electrolux EMM20K22B">

                                                   <span class="product-item-view product-item-view-21429"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-48%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Lò vi sóng cơ 20L Electrolux EMM20K22B </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>20L</li>
                                                   <li>800W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.890.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="bep-tu-dien-nuong/bep-tu-doi-sunhouse-shb9122mt.html"
                                          data-id="4365" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bep-t-doi-sunhouse-shb9122mt_7d8fbb08.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bep-t-doi-sunhouse-shb9122mt_7d8fbb08.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/bep-t-doi-sunhouse-shb9122mt_7d8fbb08.jpg"
                                                        alt="Bếp từ đôi Sunhouse SHB9122MT">

                                                   <span class="product-item-view product-item-view-4365"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-24%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Bếp từ đôi Sunhouse SHB9122MT </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>3600W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.290.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.480.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="bep-ga/bep-gas-duong-goldsun-ba2200.html" data-id="4957"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bp-gas-duong-goldsun-ba2200_b20d7388.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bp-gas-duong-goldsun-ba2200_b20d7388.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/bp-gas-duong-goldsun-ba2200_b20d7388.jpg"
                                                        alt="Bếp gas dương Goldsun BA2200">

                                                   <span class="product-item-view product-item-view-4957"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-35%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Bếp gas dương Goldsun BA2200 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Bếp gas dương</li>
                                                   <li>Bếp Gas đôi</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>620.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   399.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="noi-ap-suat/noi-ap-suat-dien-5l-goldsun-gpc5502-m.html"
                                          data-id="22737" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-ap-sut-din-5l-goldsun-gpc5502-m_ed7edac4.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-ap-sut-din-5l-goldsun-gpc5502-m_ed7edac4.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/ni-ap-sut-din-5l-goldsun-gpc5502-m_ed7edac4.jpg"
                                                        alt="Nồi áp suất điện 5L Goldsun GPC5502-M">

                                                   <span class="product-item-view product-item-view-22737"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-42%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Nồi áp suất điện 5L Goldsun GPC5502-M </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>5 Lít</li>
                                                   <li>1000W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.399.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   799.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-hut-bui/may-hut-bui-khong-day-dang-can-philips-fc6721.html"
                                          data-id="7795" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-OH0Oin.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-OH0Oin.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-OH0Oin.png"
                                                        alt="Máy hút bụi cây không dây Philips FC6721/01">

                                                   <span class="product-item-view product-item-view-7795"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-60%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy hút bụi cây không dây Philips FC6721/01 </p>

                                               <p class="product-price-regular">
                                                   <span>7.260.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.900.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-lg-inverter-217l-gv-b212wb.html" data-id="21364"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-lg-inverter-217l-gv-b212wb_8709da1f.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-lg-inverter-217l-gv-b212wb_8709da1f.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-lg-inverter-217l-gv-b212wb_8709da1f.jpg"
                                                        alt="Tủ lạnh LG Inverter 217L GV-B212WB">

                                                   <span class="product-item-view product-item-view-21364"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-44%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG Inverter 217L GV-B212WB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-2-cua-inverter-coex-rt-4003bs-196-lit.html"
                                          data-id="22890" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>
                                               <span class="product-type product-type-14"
                                                     style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-2-cua-inverter-coex-rt-4003bs-196-lit_84266819.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-2-cua-inverter-coex-rt-4003bs-196-lit_84266819.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/tu-lanh-2-cua-inverter-coex-rt-4003bs-196-lit_84266819.jpg"
                                                        alt="Tủ lạnh 2 cửa Inverter Coex RT-4003BS 196 Lít">

                                                   <span class="product-item-view product-item-view-22890"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Coex 2 cửa Inverter 196 Lít RT-4003BS </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>6.990.000 ₫</span>
                                                   <span class="product-price-saving">-24%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-samsung-rt38k5982slsv-382l-bac.html" data-id="898"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-54"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-aS3qL6.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-aS3qL6.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-aS3qL6.png"
                                                        alt="Tủ lạnh Samsung RT38K5982SL/SV - 380 Lít, Inverter, 2 dàn lạnh độc lập">

                                                   <span class="product-item-view product-item-view-898"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Samsung Inverter 380L RT38K5982SL/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>17.490.000 ₫</span>
                                                   <span class="product-price-saving">-42%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   10.090.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-dung-coex-8-5kg-tw-80cw1407igb.html"
                                          data-id="20649" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-dng-coex-85kg-tw-80cw1407igb_1527e1f3.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-dng-coex-85kg-tw-80cw1407igb_1527e1f3.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-lng-dng-coex-85kg-tw-80cw1407igb_1527e1f3.jpg"
                                                        alt="Máy giặt lồng đứng Coex 8,5kg TW-80CW1407IGB">

                                                   <span class="product-item-view product-item-view-20649"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-29%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex 8,5kg TW-80CW1407IGB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Lồng đứng</li>
                                                   <li>8.5Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.690.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-dung-coex-9-5kg-tw-90cw1407igb.html"
                                          data-id="20650" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-dng-coex-95kg-tw-90cw1407igb_17a33b56.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-dng-coex-95kg-tw-90cw1407igb_17a33b56.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-lng-dng-coex-95kg-tw-90cw1407igb_17a33b56.jpg"
                                                        alt="Máy giặt lồng đứng Coex 9,5kg TW-90CW1407IGB">

                                                   <span class="product-item-view product-item-view-20650"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-35%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex 9,5kg TW-90CW1407IGB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Lồng đứng</li>
                                                   <li>9.5Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>6.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-electrolux-inverter-10kg-ewf1024p5sb.html"
                                          data-id="19107" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-10kg-ewf1024p5sb_c20085a4.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-10kg-ewf1024p5sb_c20085a4.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-lng-ngang-electrolux-inverter-10kg-ewf1024p5sb_c20085a4.jpg"
                                                        alt="Máy giặt lồng ngang Electrolux Inverter 10Kg EWF1024P5SB">

                                                   <span class="product-item-view product-item-view-19107"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-34%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Electrolux Inverter 10Kg EWF1024P5SB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Inverter</li>
                                                   <li>10Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>16.700.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   10.990.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       Tặng PMH 500.000đ
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-lenovo-ideapad-3-15itl6-82h803rsvn.html"
                                          data-id="23356" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-lenovo-ideapad-3-15itl6-82h803rsvn_2166083c.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-lenovo-ideapad-3-15itl6-82h803rsvn_2166083c.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-lenovo-ideapad-3-15itl6-82h803rsvn_2166083c.png"
                                                        alt="Laptop Lenovo Ideapad 3 15ITL6 82H803RSVN">

                                                   <span class="product-item-view product-item-view-23356"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-45%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Lenovo Ideapad 3 15ITL6 82H803RSVN </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>256GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>20.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   11.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-acer-aspire-a315-58-35ag.html" data-id="22172"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-acer-aspire-a315-58-35ag_f17989c7.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-acer-aspire-a315-58-35ag_f17989c7.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-acer-aspire-a315-58-35ag_f17989c7.png"
                                                        alt="Laptop Acer Aspire A315-58-35AG">

                                                   <span class="product-item-view product-item-view-22172"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-28%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Acer Aspire A315-58-35AG </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i3</li>
                                                   <li>256GB SSD</li>
                                                   <li>4 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-asus-vivobook-x415ea-ek2043w.html" data-id="23235"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-vivobook-x415ea-ek2043w_2b69b0b1.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-vivobook-x415ea-ek2043w_2b69b0b1.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-asus-vivobook-x415ea-ek2043w_2b69b0b1.png"
                                                        alt="Laptop ASUS Vivobook X415EA-EK2043W">

                                                   <span class="product-item-view product-item-view-23235"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-30%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Asus Vivobook X415EA-EK2043W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i3</li>
                                                   <li>256GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.590.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   9.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/dien-thoai-samsung-galaxy-a14-4g-a145f-4-128g-den-midnight.html"
                                          data-id="22309" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.jpg"
                                                        alt="Điện thoại Samsung Galaxy A14 4G A145F (4+128G) Đen Midnight">

                                                   <span class="product-item-view product-item-view-22309"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Galaxy A14 4G </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4 GB</li>
                                                   <li>128 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>4.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.450.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/apple-iphone-14-pro-max-128gb-gold.html"
                                          data-id="21269" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/apple-iphone-14-pro-max-128gb-gold_63cd8756.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/apple-iphone-14-pro-max-128gb-gold_63cd8756.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/apple-iphone-14-pro-max-128gb-gold_63cd8756.jpg"
                                                        alt="Apple Iphone 14 Pro Max 128GB Gold">

                                                   <span class="product-item-view product-item-view-21269"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-22%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Apple Iphone 14 Pro Max </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>6 GB</li>
                                                   <li>128 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>34.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   26.990.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       TẶNG GIẢM GIÁ 1 TRIỆU
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="3" data-cid="17">
                               <h3>
                                   <a href="javascript:;">Điện lạnh</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="3" data-cid="19">
                               <h3>
                                   <a href="javascript:;">Điều hòa</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="3" data-cid="24">
                               <h3>
                                   <a href="javascript:;">Máy giặt</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="3" data-cid="21">
                               <h3>
                                   <a href="javascript:;">Tủ lạnh</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="3" data-cid="36">
                               <h3>
                                   <a href="javascript:;">Tủ đông</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="3" data-cid="38">
                               <h3>
                                   <a href="javascript:;">Tủ làm mát</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-3">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-3-17">
                               <div class="owlRespon-2-10 boxbanner-14">

                                @if($banner_do_dien_lanh)
                                   <div class="banner-list">
                                    @foreach ($banner_do_dien_lanh as $key => $item)
                                       <div class="item banner-item banner-item-{{$key+1}}">
                                          <a target=&quot;_blank&quot; href="sieu-sale-may-giat-may-say.html"
                                             data-id="3795">


                                             <picture>
                                                <source
                                                         srcset="{{sc_file($item->getThumb())}}"
                                                         type="image/jpeg">

                                                <img src="{{sc_file($item->getThumb())}}"
                                                      alt=""{{$item->title}}"
                                                      width="600" height="180"/>
                                             </picture>


                                             <span class="banner-item-view banner-item-view-3795"
                                                   style="display:none;"></span>
                                          </a>
                                    </div>
                                    @endforeach
                                     
                                      
                                   </div>
@endif

                               </div>
                               <div class="product-list pList-olw">


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-casper-1-chieu-9-000btu-sc-09fs33.html"
                                          data-id="20007" class="product-item">
                                           <div class="card-img-top">
                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-casper-1-chiu-9000btu-sc-09fs33_ddb063f7.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-casper-1-chiu-9000btu-sc-09fs33_ddb063f7.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/diu-hoa-casper-1-chiu-9000btu-sc-09fs33_ddb063f7.jpg"
                                                        alt="Điều hòa Casper 1 chiều 1HP-9.000BTU SC-09FS33">

                                                   <span class="product-item-view product-item-view-20007"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-28%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Casper 1C 9.000BTU SC-09FS33 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều thường</li>
                                                   <li>1HP-9000 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>6.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-panasonic-1-chieu-inverter-9-040btu-cu-cs-pu9zkh-8m.html"
                                          data-id="22373" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-14"
                                                         style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/dieu-hoa-panasonic-1-chieu-inverter-1hp-9040btu-cs-pu9zkh-8m_b2daf050.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/dieu-hoa-panasonic-1-chieu-inverter-1hp-9040btu-cs-pu9zkh-8m_b2daf050.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/dieu-hoa-panasonic-1-chieu-inverter-1hp-9040btu-cs-pu9zkh-8m_b2daf050.jpg"
                                                        alt="Điều hòa Panasonic 1 chiều Inverter 1HP-9.040BTU CS-PU9ZKH-8M">

                                                   <span class="product-item-view product-item-view-22373"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-13%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   PanasonicC Inverter 9.040BTU CU/CS-PU9ZKH-8M </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều Inverter</li>
                                                   <li>1HP-9040 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.100.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   11.390.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-hitachi-275l-rb330pgv8bbk-275-lit-inverter.html"
                                          data-id="928" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-hitachi-r-b330pgv8bbk---275-lit-inverter_dde19736.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-hitachi-r-b330pgv8bbk---275-lit-inverter_dde19736.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-hitachi-r-b330pgv8bbk---275-lit-inverter_dde19736.jpg"
                                                        alt="Tủ lạnh Hitachi R-B330PGV8(BBK) - 275 lít Inverter">

                                                   <span class="product-item-view product-item-view-928"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Hitachi Inverter 275L R-B330PGV8(BBK) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá dưới</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.700.000 ₫</span>
                                                   <span class="product-price-saving">-26%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   9.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-4-cua-inverter-coex-rm-4006msg-474l.html"
                                          data-id="21943" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>
                                               <span class="product-type product-type-46"
                                                     style="display: block; position: absolute; left: 3px ; top: 3px ; width: 108px; height: 30px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/icon-premium-hang-nk_79ec41bc.png) no-repeat center center;"></span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-4-ca-inverter-coex-rm-4006msg-474l_c44eea9d.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-4-ca-inverter-coex-rm-4006msg-474l_c44eea9d.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-4-ca-inverter-coex-rm-4006msg-474l_c44eea9d.jpg"
                                                        alt="Tủ lạnh 4 cửa Inverter Coex RM-4006MSG 474L">

                                                   <span class="product-item-view product-item-view-21943"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-33%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex 4 cửa Inverter 474L RM-4006MSG </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Tủ lạnh Multi</li>
                                                   <li>4 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>24.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   16.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-hitachi-inverter-399l-rfvx450pgv9-gbk.html"
                                          data-id="1173" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-hitachi-inverter-399l-rfvx450pgv9-gbk-dzzUtK.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-hitachi-inverter-399l-rfvx450pgv9-gbk-dzzUtK.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/tu-lanh-hitachi-inverter-399l-rfvx450pgv9-gbk-dzzUtK.png"
                                                        alt="Tủ lạnh Hitachi Inverter 339L R-FVX450PGV9 (GBK)">

                                                   <span class="product-item-view product-item-view-1173"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Hitachi Inverter 339L R-FVX450PGV9 (GBK) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>15.810.000 ₫</span>
                                                   <span class="product-price-saving">-24%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   11.900.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-daikin-1-chieu-inverter-8-500btu-ftkb25wmvmv.html"
                                          data-id="19559" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-daikin-1-chiu-inverter-8500btu-ftkb25wmvmv_73f62346.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-daikin-1-chiu-inverter-8500btu-ftkb25wmvmv_73f62346.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/diu-hoa-daikin-1-chiu-inverter-8500btu-ftkb25wmvmv_73f62346.jpg"
                                                        alt="Điều hòa Daikin 1 chiều Inverter 1HP-8.500BTU FTKB25WMVMV">

                                                   <span class="product-item-view product-item-view-19559"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-25%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Daikin 1C Inverter 8.500BTU FTKB25WMVMV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều Inverter</li>
                                                   <li>1HP-8500 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.090.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-2-canh-samsung-rt22farbdsasv.html" data-id="889"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-54"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-samsung-rt22farbdsa---236-lit-inverter_3fdbbe95.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-samsung-rt22farbdsa---236-lit-inverter_3fdbbe95.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-samsung-rt22farbdsa---236-lit-inverter_3fdbbe95.jpg"
                                                        alt="Tủ lạnh Samsung RT22FARBDSA - 236 Lít Inverter">

                                                   <span class="product-item-view product-item-view-889"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-33%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Inverter 236L RT22FARBDSA/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>7.790.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.190.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-gree-1c-9000btu-gwc09kbk6n0c4.html"
                                          data-id="2358" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-gree-1-chiu-9000btu-gwc09kb-k6n0c4_9fe03ab9.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-gree-1-chiu-9000btu-gwc09kb-k6n0c4_9fe03ab9.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/diu-hoa-gree-1-chiu-9000btu-gwc09kb-k6n0c4_9fe03ab9.jpg"
                                                        alt="Điều hòa Gree 1 chiều 1HP-9.000BTU GWC09KB-K6N0C4">

                                                   <span class="product-item-view product-item-view-2358"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-33%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Gree 1C 9.000BTU GWC09KB-K6N0C4 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều thường</li>
                                                   <li>1HP-9000 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.590.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="dieu-hoa-nhiet-do/dieu-hoa-midea-1-chieu-inverter-9000btu-msafc10crdn8.html"
                                          data-id="2373" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-midea-1-chiu-inverter-9000btu-msafc-10crdn8_ebafdb10.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/diu-hoa-midea-1-chiu-inverter-9000btu-msafc-10crdn8_ebafdb10.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/diu-hoa-midea-1-chiu-inverter-9000btu-msafc-10crdn8_ebafdb10.jpg"
                                                        alt="Điều hòa Midea 1 chiều Inverter 1HP-9.000BTU MSAFC-10CRDN8">

                                                   <span class="product-item-view product-item-view-2373"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-33%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Midea 1C Inverter 9.000BTU MSAFC-10CRDN8 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1 chiều Inverter</li>
                                                   <li>1HP-9000 BTU</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.290.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-lg-inverter-217l-gv-b212wb.html" data-id="21364"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-lg-inverter-217l-gv-b212wb_8709da1f.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-lg-inverter-217l-gv-b212wb_8709da1f.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-lg-inverter-217l-gv-b212wb_8709da1f.jpg"
                                                        alt="Tủ lạnh LG Inverter 217L GV-B212WB">

                                                   <span class="product-item-view product-item-view-21364"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-44%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG Inverter 217L GV-B212WB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-samsung-inverter-9kg-ww90t634dlesv.html"
                                          data-id="1752" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-54"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-thong-minh-samsung-inverter-9kg-ww90t634dlesv_3c551cb3.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-thong-minh-samsung-inverter-9kg-ww90t634dlesv_3c551cb3.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-thong-minh-samsung-inverter-9kg-ww90t634dlesv_3c551cb3.jpg"
                                                        alt="Máy giặt thông minh Samsung Inverter 9Kg WW90T634DLE/SV">

                                                   <span class="product-item-view product-item-view-1752"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-44%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Inverter 9Kg WW90T634DLE/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Inverter</li>
                                                   <li>9Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>14.290.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-lg-inverter-8kg-fv1408s4w.html"
                                          data-id="1740" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lg-lng-ngang-thong-minh-85-kg-fv1408s4w-inverter-ai-dd_c9aa5d72.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lg-lng-ngang-thong-minh-85-kg-fv1408s4w-inverter-ai-dd_c9aa5d72.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-lg-lng-ngang-thong-minh-85-kg-fv1408s4w-inverter-ai-dd_c9aa5d72.jpg"
                                                        alt="Máy giặt LG lồng ngang thông minh 8,5 Kg FV1408S4W Inverter AI DD">

                                                   <span class="product-item-view product-item-view-1740"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-31%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG Inverter 8.5Kg FV1408S4W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>AI DD</li>
                                                   <li>8.5Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>11.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-inverter-8kg-lg-fv1408s4v.html"
                                          data-id="1747" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-thong-minh-lg-ai-dd-85-kg-fv1408s4v_3190be3d.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-git-lng-ngang-thong-minh-lg-ai-dd-85-kg-fv1408s4v_3190be3d.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-git-lng-ngang-thong-minh-lg-ai-dd-85-kg-fv1408s4v_3190be3d.jpg"
                                                        alt="Máy giặt lồng ngang thông minh LG AI DD 8,5 kg FV1408S4V">

                                                   <span class="product-item-view product-item-view-1747"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   LG Inverter 8.5Kg FV1408S4V </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>AI DD</li>
                                                   <li>8.5Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.490.000 ₫</span>
                                                   <span class="product-price-saving">-30%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-samsung-inverter-8kg-ww85t4040cesv.html"
                                          data-id="1745" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-6ZNG6m.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-6ZNG6m.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-6ZNG6m.png"
                                                        alt="Máy giặt lồng ngang Samsung Inverter 8.5Kg WW85T4040CE/SV">

                                                   <span class="product-item-view product-item-view-1745"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Samsung Inverter 8,5Kg WW85T4040CE/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Inverter</li>
                                                   <li>8.5Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>11.100.000 ₫</span>
                                                   <span class="product-price-saving">-41%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   6.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-4-canh-540-lit-hitachi-rfw690pgv7-gbk-den.html"
                                          data-id="1033" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-4-canh-540-lit-hitachi-rfw690pgv7-gbk-den-NSDbo9.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tu-lanh-4-canh-540-lit-hitachi-rfw690pgv7-gbk-den-NSDbo9.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/tu-lanh-4-canh-540-lit-hitachi-rfw690pgv7-gbk-den-NSDbo9.jpg"
                                                        alt="Tủ lạnh 4 cánh Inverter 540 Lít Hitachi R-FW690PGV7 (GBK) (Đen)">

                                                   <span class="product-item-view product-item-view-1033"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Hitachi Inverter 540L R-FW690PGV7 (GBK) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Tủ lạnh Multi</li>
                                                   <li>4 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>33.700.000 ₫</span>
                                                   <span class="product-price-saving">-32%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   22.900.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-giat/may-giat-long-ngang-lg-inverter-9kg-fv1409s4w.html"
                                          data-id="1814" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-giat-long-ngang-lg-inverter-9kg-fv1409s4w-vtbjV6.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-giat-long-ngang-lg-inverter-9kg-fv1409s4w-vtbjV6.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-giat-long-ngang-lg-inverter-9kg-fv1409s4w-vtbjV6.png"
                                                        alt="Máy giặt lồng ngang thông minh LG AI DD 9kg FV1409S4W">

                                                   <span class="product-item-view product-item-view-1814"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   LG Inverter 9Kg FV1409S4W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>AI DD</li>
                                                   <li>9Kg</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.090.000 ₫</span>
                                                   <span class="product-price-saving">-31%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-2-cua-samsung-digital-inverter-321l-rt32k5932s8sv.html"
                                          data-id="1661" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-54"
                                                         style="display: block; position: absolute; left: 3px ; top: 3px ; width: 60px; height: 50px; background-size: contain; z-index: 22;background: url(assets/cdn/images/catalog/bao-hanh-dong-co-20-nam-samsung_39eaa8b4.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-samsung-rt32k5932s8sv---319l-digital-inverter_3b95d8be.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-lnh-samsung-rt32k5932s8sv---319l-digital-inverter_3b95d8be.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-lnh-samsung-rt32k5932s8sv---319l-digital-inverter_3b95d8be.jpg"
                                                        alt="Tủ lạnh Samsung RT32K5932S8/SV - 319L Digital Inverter">

                                                   <span class="product-item-view product-item-view-1661"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Samsung Inverter 320L RT32K5932S8/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.890.000 ₫</span>
                                                   <span class="product-price-saving">-37%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.090.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-lanh/tu-lanh-sharp-sjx281esl-271-lit.html" data-id="1537"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-QKs992.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-QKs992.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-QKs992.png"
                                                        alt="Tủ lạnh Sharp SJ-X281E-SL - 271 Lít (Bạc thép không gỉ)">

                                                   <span class="product-item-view product-item-view-1537"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Sharp Inverter 271L SJ-X281E-SL </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Ngăn đá trên</li>
                                                   <li>2 cửa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.600.000 ₫</span>
                                                   <span class="product-price-saving">-17%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.090.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-dong/tu-dong-sanaky-vh1199hy-1100l.html" data-id="2988"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-dong-sanaky-vh-1199hy---1100l_60c1839a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-dong-sanaky-vh-1199hy---1100l_60c1839a.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-dong-sanaky-vh-1199hy---1100l_60c1839a.jpg"
                                                        alt="Tủ đông Sanaky VH-1199HY - 900L">

                                                   <span class="product-item-view product-item-view-2988"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Tủ đông Sanaky VH-1199HY - 900L </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>900 lít</li>
                                                   <li>1 ngăn</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>25.990.000 ₫</span>
                                                   <span class="product-price-saving">-5%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   24.450.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tu-dong/tu-dong-sanaky-vh1399hy3-1300l.html" data-id="3049"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-dong-sanaky-dan-dng-11435l-vh-1399hy3_df543b78.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/t-dong-sanaky-dan-dng-11435l-vh-1399hy3_df543b78.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/t-dong-sanaky-dan-dng-11435l-vh-1399hy3_df543b78.jpg"
                                                        alt="Tủ đông Sanaky dàn đồng 1143,5L VH-1399HY3">

                                                   <span class="product-item-view product-item-view-3049"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Tủ đông Sanaky dàn đồng 1143,5L VH-1399HY3 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1144 lít</li>
                                                   <li>1 ngăn</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>35.990.000 ₫</span>
                                                   <span class="product-price-saving">-5%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   34.160.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="dien-lanh.html"><span>Xem tất cả Điện
                                           lạnh</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="2" data-cid="18">
                               <h3>
                                   <a href="javascript:;">Tivi</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="2" data-cid="23">
                               <h3>
                                   <a href="javascript:;">Loa Sound Bar</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="2" data-cid="26">
                               <h3>
                                   <a href="javascript:;">Dàn Karaoke</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-2">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-2-18">
                               <div class="owlRespon-2-10 boxbanner-14">
                                @if($banner_tivi)
                                   <div class="banner-list">
                                    @foreach ($banner_tivi as $key => $item)
                                       <div class="item banner-item banner-item-{{$key+1}}">
                                          <a target=&quot;_blank&quot; href="tv-oled-qled-bigsize.html"
                                             data-id="3984">
                                             <picture>
                                                <source
                                                         srcset="{{sc_file($item->getThumb())}}"
                                                         type="image/jpeg">

                                                <img src="{{sc_file($item->getThumb())}}"
                                                      alt="{{$item->title}}" width="600" height="180"/>
                                             </picture>
                                             <span class="banner-item-view banner-item-view-3984"
                                                   style="display:none;"></span>
                                          </a>
                                       </div>
                                    @endforeach
                                   </div>
                                   @endif
                               </div>
                               <div class="product-list pList-olw">
                                   <div class="card mb-4">
                                       <a href="tivi/qled-tivi-4k-samsung-55q60b-55-inch-smart-tv.html"
                                          data-id="19621" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qled-tivi-4k-samsung-55q60b-55-inch-smart-tv_e053b405.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qled-tivi-4k-samsung-55q60b-55-inch-smart-tv_e053b405.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/qled-tivi-4k-samsung-55q60b-55-inch-smart-tv_e053b405.png"
                                                        alt="QLED Tivi 4K Samsung 55Q60B 55 inch Smart TV">

                                                   <span class="product-item-view product-item-view-19621"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-31%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Smart TV QLED QA55Q60B </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>55 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>22.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   15.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-4k-sony-kd-43x75k-43-inch-google-tv.html"
                                          data-id="19966" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-4k-sony-kd-43x75k-43-inch-google-tv_42ccd712.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-4k-sony-kd-43x75k-43-inch-google-tv_42ccd712.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-4k-sony-kd-43x75k-43-inch-google-tv_42ccd712.png"
                                                        alt="Smart Tivi 4K Sony KD-43X75K 43 inch Google TV">

                                                   <span class="product-item-view product-item-view-19966"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-38%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Sony Google TV KD-43X75K </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>43 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>16.800.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   10.400.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-lg-4k-55-inch-55uq8000psc-thinq-ai.html"
                                          data-id="19864" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-55-inch-55uq8000psc-thinq-ai_e8e0d1c2.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-55-inch-55uq8000psc-thinq-ai_e8e0d1c2.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-lg-4k-55-inch-55uq8000psc-thinq-ai_e8e0d1c2.png"
                                                        alt="Smart Tivi LG 4K 55 inch 55UQ8000PSC ThinQ AI">

                                                   <span class="product-item-view product-item-view-19864"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-47%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG Smart TV 55UQ8000PSC </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>55 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>19.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   10.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-samsung-4k-65-inch-65au8000-crystal-uhd.html"
                                          data-id="26" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au8000-crystal-uhd_7263c44e.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au8000-crystal-uhd_7263c44e.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au8000-crystal-uhd_7263c44e.png"
                                                        alt="Smart Tivi Samsung 4K 65 inch 65AU8000 Crystal UHD">

                                                   <span class="product-item-view product-item-view-26"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Samsung Smart TV Crystal UHD UA65AU8000 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>65 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>34.900.000 ₫</span>
                                                   <span class="product-price-saving">-57%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   14.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-samsung-4k-75-inch-75au7000-crystal-uhd.html"
                                          data-id="262" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-75-inch-75au7000-uhd_2978fc5f.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-75-inch-75au7000-uhd_2978fc5f.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-samsung-4k-75-inch-75au7000-uhd_2978fc5f.png"
                                                        alt="Smart Tivi Samsung 4K 75 inch 75AU7000 UHD">

                                                   <span class="product-item-view product-item-view-262"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-56%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Smart TV UA75AU7000 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>75 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>44.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   19.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-coex-4k-43-inch-43ut7000x-android-10.html"
                                          data-id="20274" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>
                                               <span class="product-type product-type-20"
                                                     style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Độc
                                                       quyền</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-4k-43-inch-43ut7000x-android-10_78b962a4.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-coex-4k-43-inch-43ut7000x-android-10_78b962a4.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-coex-4k-43-inch-43ut7000x-android-10_78b962a4.png"
                                                        alt="Smart Tivi Coex 4K 43 inch 43UT7000X Android 10">

                                                   <span class="product-item-view product-item-view-20274"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-45%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Coex Android TV 43UT7000X </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>43 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>11.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   6.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-tcl-4k-55p638-55-inch-google-tv.html"
                                          data-id="20992" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-tcl-4k-55p638-55-inch-google-tv_ba967b9e.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-tcl-4k-55p638-55-inch-google-tv_ba967b9e.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-tcl-4k-55p638-55-inch-google-tv_ba967b9e.png"
                                                        alt="Smart Tivi TCL 4K 55P638 55 inch Google TV">

                                                   <span class="product-item-view product-item-view-20992"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-38%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   TCL Google TV 55P638 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>55 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-samsung-4k-65-inch-65au7002-uhd.html"
                                          data-id="20108" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au7002-uhd_69ec5164.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au7002-uhd_69ec5164.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-samsung-4k-65-inch-65au7002-uhd_69ec5164.png"
                                                        alt="Smart Tivi Samsung 4K 65 inch 65AU7002 UHD">

                                                   <span class="product-item-view product-item-view-20108"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-28%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Smart TV UA65AU7002 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>65 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>18.900.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.600.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-lg-4k-43-inch-43up7550ptc-thinq-ai.html"
                                          data-id="18" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-43-inch-43up7550ptc-thinq-ai_58cb050f.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-43-inch-43up7550ptc-thinq-ai_58cb050f.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-lg-4k-43-inch-43up7550ptc-thinq-ai_58cb050f.png"
                                                        alt="Smart Tivi LG 4K 43 inch 43UP7550PTC ThinQ AI">

                                                   <span class="product-item-view product-item-view-18"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   LG Smart TV 43UP7550PTC </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>43 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.400.000 ₫</span>
                                                   <span class="product-price-saving">-40%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tivi/smart-tivi-lg-4k-65-inch-65uq8000psc-thinq-ai.html"
                                          data-id="20165" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-65-inch-65uq8000psc-thinq-ai_a441d344.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/smart-tivi-lg-4k-65-inch-65uq8000psc-thinq-ai_a441d344.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/smart-tivi-lg-4k-65-inch-65uq8000psc-thinq-ai_a441d344.png"
                                                        alt="Smart Tivi LG 4K 65 inch 65UQ8000PSC ThinQ AI">

                                                   <span class="product-item-view product-item-view-20165"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-46%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   LG Smart TV 65UQ8000PSC </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4K</li>
                                                   <li>65 inch</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>25.400.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="tivi.html"><span>Xem tất cả Tivi</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="6" data-cid="1">
                               <h3>
                                   <a href="javascript:;">Điện gia dụng</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="6" data-cid="305">
                               <h3>
                                   <a href="javascript:;">Quạt các loại</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="6" data-cid="303">
                               <h3>
                                   <a href="javascript:;">Xay ép, pha chế</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="6" data-cid="141">
                               <h3>
                                   <a href="javascript:;">Máy Lọc Nước</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="6" data-cid="143">
                               <h3>
                                   <a href="javascript:;">Nồi cơm điện</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="6" data-cid="139">
                               <h3>
                                   <a href="javascript:;">Nồi chiên không dầu</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="6" data-cid="145">
                               <h3>
                                   <a href="javascript:;">Bếp từ, hồng ngoại</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="6" data-cid="144">
                               <h3>
                                   <a href="javascript:;">Lò vi sóng</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-6">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-6-1">
                               <div class="owlRespon-2-10 boxbanner-14">

                                @if($banner_dien_gia_dung)
                                   <div class="banner-list">
                                    @foreach ($banner_dien_gia_dung as $key =>  $item)
                                       <div class="item banner-item banner-item-{{$key+1}}">
                                          <a target=&quot;_blank&quot; href="#" data-id="3314">
                                             <picture>
                                                <source
                                                         srcset="{{sc_file( $item->getThumb())}}"
                                                         type="image/jpeg">

                                                <img src="{{sc_file( $item->getThumb())}}"
                                                      alt="{{$item->title}}" width="600" height="180"/>
                                             </picture>
                                             <span class="banner-item-view banner-item-view-3314"
                                                   style="display:none;"></span>
                                          </a>
                                       </div>
                                    @endforeach
                                      
                                       
                                   </div>
                                   @endif

                               </div>
                               <div class="product-list pList-olwMobile">


                                   <div class="card mb-4">
                                       <a href="quat/quat-cay-dien-co-qd450-dm.html" data-id="6148"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dung-dien-co-qd450dm-MAhn2p.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dung-dien-co-qd450dm-MAhn2p.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/quat-dung-dien-co-qd450dm-MAhn2p.jpg"
                                                        alt="Quạt cây Điện cơ QD450-DM">

                                                   <span class="product-item-view product-item-view-6148"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-17%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt cây Điện cơ QD450-DM </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>50W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>600.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   495.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat/quat-cay-mitsubishi-lv16ra-rs-rt-rv-cy-gy-ghi-dieu-khien-thailan.html"
                                          data-id="6161" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/26623_9064_quat-cay-mitsubishi-lv16rqrp.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/26623_9064_quat-cay-mitsubishi-lv16rqrp.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/26623_9064_quat-cay-mitsubishi-lv16rqrp.jpg"
                                                        alt="Quạt cây Mitsubishi LV16RA/RS/RT/RV-CY-GY-ghi-Điều khiển-Thailan">

                                                   <span class="product-item-view product-item-view-6161"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-21%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt cây Mitsubishi LV16RA/RS/RT/RV-CY-GY-ghi-Điều khiển-Thailan
                                               </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>47W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.910.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.290.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       Quà tặng trị giá 400.000đ
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat-cay/quat-cay-senko-dr1608-co-dieu-khien.html" data-id="22102"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-senko-dr1608-co-diu-khin_9f43d690.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/qut-cay-senko-dr1608-co-diu-khin_9f43d690.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/qut-cay-senko-dr1608-co-diu-khin_9f43d690.png"
                                                        alt="Quạt cây Senko DR1608-có điều khiển">

                                                   <span class="product-item-view product-item-view-22102"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Quạt cây Senko DR1608-có điều khiển </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>65W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.390.000 ₫</span>
                                                   <span class="product-price-saving">-43%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   790.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat-dieu-hoa/quat-dieu-hoa-kangaroo-kg50f62.html" data-id="17141"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dieu-hoa-kangaroo-kg50f62-2y3zWB.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dieu-hoa-kangaroo-kg50f62-2y3zWB.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/quat-dieu-hoa-kangaroo-kg50f62-2y3zWB.png"
                                                        alt="Quạt điều hòa cơ Kangaroo KG50F62">

                                                   <span class="product-item-view product-item-view-17141"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-46%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt điều hoà Kangaroo KG50F62 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>25 - 30 m2</li>
                                                   <li>100W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.640.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.950.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="quat-dieu-hoa/quat-dieu-hoa-co-40l-sunhouse-shd7744.html"
                                          data-id="22895" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dieu-hoa-co-40l-sunhouse-shd7744_7df4ba7b.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/quat-dieu-hoa-co-40l-sunhouse-shd7744_7df4ba7b.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/quat-dieu-hoa-co-40l-sunhouse-shd7744_7df4ba7b.png"
                                                        alt="Quạt điều hòa cơ 40L Sunhouse SHD7744">

                                                   <span class="product-item-view product-item-view-22895"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-36%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Quạt điều hòa cơ 40L Sunhouse SHD7744 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Lên đến 40m2</li>
                                                   <li>125W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.740.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.390.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-xay-nau/may-lam-sua-hat-da-nang-tefal-bl967b66.html"
                                          data-id="18827" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-lam-sua-hat-da-nang-tefal-bl967b66-h8v441.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-lam-sua-hat-da-nang-tefal-bl967b66-h8v441.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-lam-sua-hat-da-nang-tefal-bl967b66-h8v441.png"
                                                        alt="Máy làm sữa hạt Tefal  BL967B66">

                                                   <span class="product-item-view product-item-view-18827"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-35%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy làm sữa hạt Tefal BL967B66 </p>

                                               <p class="product-price-regular">
                                                   <span>4.040.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-xay-sinh-to/may-xay-sinh-to-philips-hr2221.html" data-id="3613"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-ne8V36.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-ne8V36.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-ne8V36.png"
                                                        alt="Máy xay đa năng 2 cối Philips HR2221/00">

                                                   <span class="product-item-view product-item-view-3613"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/online-gia-re_d7df06fb.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-35%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy xay đa năng 2 cối Philips HR2221/00 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>700W</li>
                                                   <li>1.5 lít</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.530.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-xay-sinh-to/may-xay-sinh-to-sunhouse-shd5112.html"
                                          data-id="3635" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-xay-sinh-to-sunhouse-shd5112-z2P2j6.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-xay-sinh-to-sunhouse-shd5112-z2P2j6.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-xay-sinh-to-sunhouse-shd5112-z2P2j6.jpg"
                                                        alt="Máy xay đa năng 2 cối Sunhouse SHD5112">

                                                   <span class="product-item-view product-item-view-3635"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-37%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy xay đa năng 2 cối Sunhouse SHD5112 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>350W</li>
                                                   <li>1.0 lít</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>590.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   369.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-ep-vat-trai-cay/ma-y-e-p-cha-m-sunhouse-shd5503.html"
                                          data-id="22768" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-ep-cham-sunhouse-shd5503_86537825.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-ep-cham-sunhouse-shd5503_86537825.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-ep-cham-sunhouse-shd5503_86537825.png"
                                                        alt="Máy ép chậm Sunhouse SHD5503">

                                                   <span class="product-item-view product-item-view-22768"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-35%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy ép chậm Sunhouse SHD5503 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>240W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.370.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.190.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-hut-bui/may-hut-bui-hitachi-cvsf16-24cv.html" data-id="7694"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-hut-bui-hitachi-cvsf16-24cv-DfX0cI.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-hut-bui-hitachi-cvsf16-24cv-DfX0cI.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-hut-bui-hitachi-cvsf16-24cv-DfX0cI.jpg"
                                                        alt="Máy hút bụi Hitachi CV-SF16 24CV- Thailand">

                                                   <span class="product-item-view product-item-view-7694"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-38%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy hút bụi Hitachi CV-SF16 24CV- Thailand </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1600 W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.760.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="noi-com-dien/noi-com-dien-tu-18l-toshiba-rc18ntfvw-thailand.html"
                                          data-id="3435" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-t-18l-toshiba-rc-18ntfvw-thailand_6e235b29.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-t-18l-toshiba-rc-18ntfvw-thailand_6e235b29.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/ni-com-din-t-18l-toshiba-rc-18ntfvw-thailand_6e235b29.jpg"
                                                        alt="Nồi cơm điện tử 1.8L Toshiba RC-18NTFV(W) Thailand">

                                                   <span class="product-item-view product-item-view-3435"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-30%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Nồi cơm điện tử 1.8L Toshiba RC-18NTFV(W) Thailand </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1.8 lít</li>
                                                   <li>800W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.590.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.480.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="noi-com-dien/noi-com-dien-cuckoo-18l-cr-1021.html" data-id="3201"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-co-18l-cuckoo-cr-1021-trng-korean_22b568fc.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-com-din-co-18l-cuckoo-cr-1021-trng-korean_22b568fc.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/ni-com-din-co-18l-cuckoo-cr-1021-trng-korean_22b568fc.jpg"
                                                        alt="Nồi cơm điện cơ 1,8L Cuckoo CR-1021-Trắng-Korean">

                                                   <span class="product-item-view product-item-view-3201"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/online-gia-re_d7df06fb.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-42%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Nồi cơm điện cơ 1,8L Cuckoo CR-1021-Trắng-Korean </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>1.8 lít</li>
                                                   <li>650W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.260.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="bep-tu-dien-nuong/bep-dien-tu-doi-bosch-ppi-82560ms.html"
                                          data-id="4333" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bp-din-t-doi-bosch-ppi82560ms-3500w_b8821718.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bp-din-t-doi-bosch-ppi82560ms-3500w_b8821718.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/bp-din-t-doi-bosch-ppi82560ms-3500w_b8821718.jpg"
                                                        alt="Bếp điện từ đôi Bosch PPI82560MS 3500W">

                                                   <span class="product-item-view product-item-view-4333"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/online-gia-re_d7df06fb.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-45%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Bếp điện từ đôi Bosch PPI82560MS 3500W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>3500W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>18.170.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   9.880.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="noi-chien-khong-dau/noi-chien-khong-dau-41l-philips-hd920090.html"
                                          data-id="18176" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-chien-khong-du-24-lit-philips-hd920090_6623f192.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/ni-chien-khong-du-24-lit-philips-hd920090_6623f192.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/ni-chien-khong-du-24-lit-philips-hd920090_6623f192.jpg"
                                                        alt="Nồi chiên không dầu 4.1 lít Philips HD9200/90">

                                                   <span class="product-item-view product-item-view-18176"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-33%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Nồi chiên không dầu 4.1 lít Philips HD9200/90 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4.1 Lít</li>
                                                   <li>1400W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.690.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.790.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="robot-hut-bui/robot-hut-bui-samsung-vr05r5050wk-sv.html"
                                          data-id="19428" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/robot-hut-bi-samsung-vr05r5050wksv_a8c4b7d2.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/robot-hut-bi-samsung-vr05r5050wksv_a8c4b7d2.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/robot-hut-bi-samsung-vr05r5050wksv_a8c4b7d2.jpg"
                                                        alt="Robot hút bụi Samsung VR05R5050WK/SV">

                                                   <span class="product-item-view product-item-view-19428"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-45%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Robot hút bụi Samsung VR05R5050WK/SV </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4200 Pa</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>9.080.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.980.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="lo-vi-song/lvs-co-20l-electrolux-emm20k22b.html" data-id="21429"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/lo-vi-song-co-20l-electrolux-emm20k22b_010f231a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/lo-vi-song-co-20l-electrolux-emm20k22b_010f231a.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/lo-vi-song-co-20l-electrolux-emm20k22b_010f231a.jpg"
                                                        alt="Lò vi sóng cơ 20L Electrolux EMM20K22B">

                                                   <span class="product-item-view product-item-view-21429"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-48%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Lò vi sóng cơ 20L Electrolux EMM20K22B </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>20L</li>
                                                   <li>800W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.890.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="binh-tam-nong-lanh/binh-nong-lanh-ariston-sl2-20r.html"
                                          data-id="4647" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/binh-nong-lnh-20l-ariston-sl2-20r_70c4d228.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/binh-nong-lnh-20l-ariston-sl2-20r_70c4d228.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/binh-nong-lnh-20l-ariston-sl2-20r_70c4d228.jpg"
                                                        alt="Bình nóng lạnh 20L Ariston SL2 20R">

                                                   <span class="product-item-view product-item-view-4647"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-48%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Bình nóng lạnh 20L Ariston SL2 20R </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>20 lít</li>
                                                   <li>2500(W)</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.250.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-loc-nuoc/may-loc-nuoc-sunhouse-7-cap-sha8868k.html"
                                          data-id="3897" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-lc-nuc-sunhouse-7-cp-sha8868k_b0fb4625.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-lc-nuc-sunhouse-7-cp-sha8868k_b0fb4625.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-lc-nuc-sunhouse-7-cp-sha8868k_b0fb4625.jpg"
                                                        alt="Máy lọc nước Sunhouse 7 cấp SHA8868K">

                                                   <span class="product-item-view product-item-view-3897"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-38%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy lọc nước Sunhouse 7 cấp SHA8868K </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>15L/h</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.370.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-loc-nuoc/may-loc-nuoc-nong-lanh-kangaroo-10-cap-infinity-kg10a2i.html"
                                          data-id="22464" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-lc-nuc-nong-lnh-kangaroo-10-cp-infinity-kg10a2i_bd4bbdd6.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-lc-nuc-nong-lnh-kangaroo-10-cp-infinity-kg10a2i_bd4bbdd6.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-lc-nuc-nong-lnh-kangaroo-10-cp-infinity-kg10a2i_bd4bbdd6.png"
                                                        alt="Máy lọc nước nóng lạnh Kangaroo 10 cấp infinity KG10A2I">

                                                   <span class="product-item-view product-item-view-22464"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-43%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy lọc nước nóng lạnh Kangaroo 10 cấp infinity KG10A2I </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>10L/h</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.300.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   6.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-rua-bat/may-rua-bat-12-bo-bosch-sms46gi01p-turkey.html"
                                          data-id="21368" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-ra-bat-12-b-bosch-sms46gi01p---turkey_c44036ce.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-ra-bat-12-b-bosch-sms46gi01p---turkey_c44036ce.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-ra-bat-12-b-bosch-sms46gi01p---turkey_c44036ce.jpg"
                                                        alt="Máy rửa bát 12 bộ Bosch SMS46GI01P - Turkey">

                                                   <span class="product-item-view product-item-view-21368"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-44%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy rửa bát 12 bộ Bosch SMS46GI01P - Turkey </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Có sấy</li>
                                                   <li>2400W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>21.240.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   11.800.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="gia-dung.html"><span>Xem tất cả Điện gia
                                           dụng</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="7" data-cid="47">
                               <h3>
                                   <a href="javascript:;">Smartphones</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="7" data-cid="48">
                               <h3>
                                   <a href="javascript:;">Máy tính bảng</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-7">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-7-47">
                               <div class="owlRespon-2-10 boxbanner-14">

                                @if($banner_dien_thoai)
                                   <div class="banner-list">
                                    @foreach ($banner_dien_thoai as $key => $item)
                                        <div class="item banner-item banner-item-{{$key+1}}">
                                            <a target=&quot;_blank&quot; href="apple-iphone-14-series.html"
                                            data-id="3806">
                                                <picture>
                                                    <source
                                                            srcset="{{sc_file($item->getThumb())}}"
                                                            type="image/jpeg">
                                                    <img src="{{sc_file($item->getThumb())}}"
                                                        alt="{{$item->title}}" width="600" height="180"/>
                                                </picture>
                                                <span class="banner-item-view banner-item-view-3806"
                                                    style="display:none;"></span>
                                            </a>
                                        </div>
                                    @endforeach
                                   </div>
                                @endif
                               </div>
                               <div class="product-list pList-olw">


                                   <div class="card mb-4">
                                       <a href="smartphones/iphone-11-2019.html" data-id="8155"
                                          class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-71QcvY.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-71QcvY.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-71QcvY.jpg"
                                                        alt="Apple Iphone 11 64G Black">

                                                   <span class="product-item-view product-item-view-8155"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-21%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Apple Iphone 11 64GB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4 GB</li>
                                                   <li>64 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   10.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/apple-iphone-11-128g-black.html" data-id="8157"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-kx3E3U.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/-kx3E3U.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/-kx3E3U.jpg"
                                                        alt="Apple iphone 11 128G Black">

                                                   <span class="product-item-view product-item-view-8157"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-20%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Apple iphone 11 128GB </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4 GB</li>
                                                   <li>128 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>14.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   11.988.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/apple-iphone-14-pro-max-128gb-gold.html"
                                          data-id="21269" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/apple-iphone-14-pro-max-128gb-gold_63cd8756.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/apple-iphone-14-pro-max-128gb-gold_63cd8756.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/apple-iphone-14-pro-max-128gb-gold_63cd8756.jpg"
                                                        alt="Apple Iphone 14 Pro Max 128GB Gold">

                                                   <span class="product-item-view product-item-view-21269"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-22%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Apple Iphone 14 Pro Max </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>6 GB</li>
                                                   <li>128 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>34.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   26.990.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       TẶNG GIẢM GIÁ 1 TRIỆU
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/dien-thoai-galaxy-a13-4g-128g-a135f-den.html"
                                          data-id="19766" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-galaxy-a13-4g128g-a135f-den_2b9b765c.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-galaxy-a13-4g128g-a135f-den_2b9b765c.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/din-thoi-galaxy-a13-4g128g-a135f-den_2b9b765c.jpg"
                                                        alt="Điện thoại Samsung Galaxy A13 (4G+128G) A135F Đen">

                                                   <span class="product-item-view product-item-view-19766"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-21%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Galaxy A13 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4 GB</li>
                                                   <li>128 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>4.190.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/dien-thoai-vivo-v2203-y02s-3-32gb-den.html"
                                          data-id="21108" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-vivo-v2203---y02s-332gb-den_c8db60bd.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-vivo-v2203---y02s-332gb-den_c8db60bd.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/din-thoi-vivo-v2203---y02s-332gb-den_c8db60bd.jpg"
                                                        alt="Điện thoại Vivo V2203 - Y02s (3+32GB) Đen">

                                                   <span class="product-item-view product-item-view-21108"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Vivo Y02s </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>3 GB</li>
                                                   <li>32 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.490.000 ₫</span>
                                                   <span class="product-price-saving">-25%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/dien-thoai-oppo-cph2349-a16k-xanh-thoi-thuong.html"
                                          data-id="19245" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-57"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-tuan-le-vang_7da41d78.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-oppo-cph2349---a16k-xanh-thi-thung_c868db6b.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-oppo-cph2349---a16k-xanh-thi-thung_c868db6b.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/din-thoi-oppo-cph2349---a16k-xanh-thi-thung_c868db6b.jpg"
                                                        alt="Điện thoại OPPO CPH2349 - A16k Xanh thời thượng">

                                                   <span class="product-item-view product-item-view-19245"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-27%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   OPPO A16k </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>3 GB</li>
                                                   <li>32 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.690.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/dien-thoai-samsung-galaxy-a14-4g-a145f-4-128g-den-midnight.html"
                                          data-id="22309" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/din-thoi-samsung-galaxy-a14-4g-a145f-4128g-den-midnight_8b209140.jpg"
                                                        alt="Điện thoại Samsung Galaxy A14 4G A145F (4+128G) Đen Midnight">

                                                   <span class="product-item-view product-item-view-22309"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Galaxy A14 4G </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>4 GB</li>
                                                   <li>128 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>4.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.450.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/dien-thoai-samsung-galaxy-a04-3g-32g-sm-a045f-den.html"
                                          data-id="21664" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a04-3g32g-sm-a045f-den_85bfb49e.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-samsung-galaxy-a04-3g32g-sm-a045f-den_85bfb49e.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/din-thoi-samsung-galaxy-a04-3g32g-sm-a045f-den_85bfb49e.jpg"
                                                        alt="Điện thoại Samsung Galaxy A04 (3G+32G) SM-A045F Đen">

                                                   <span class="product-item-view product-item-view-21664"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-20%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung Galaxy A04 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>3 GB</li>
                                                   <li>32 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.390.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="smartphones/dien-thoai-xiaomi-redmi-9a-2-32-xanh-la.html"
                                          data-id="8185" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-xiaomi-redmi-9a-232-xanh-la_20bda9f7.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/din-thoi-xiaomi-redmi-9a-232-xanh-la_20bda9f7.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/din-thoi-xiaomi-redmi-9a-232-xanh-la_20bda9f7.jpg"
                                                        alt="Điện thoại Xiaomi REDMI 9A (2+32) Xanh lá">

                                                   <span class="product-item-view product-item-view-8185"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Xiaomi Redmi 9A </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>2 GB</li>
                                                   <li>32 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>2.990.000 ₫</span>
                                                   <span class="product-price-saving">-26%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.190.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="smartphones.html"><span>Xem tất cả
                                           Smartphones</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="8" data-cid="52">
                               <h3>
                                   <a href="javascript:;">Laptop</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-8">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-8-52">
                               <div class="owlRespon-2-10 boxbanner-14">

                                    @if($banner_laptop)
                                        <div class="banner-list">
                                            @foreach ($banner_laptop as $key => $item)
                                                <div class="item banner-item banner-item-{{$key+1}}">
                                                    <a target=&quot;_blank&quot; href="laptop-sale-cuoi-thang.html"
                                                    data-id="3979">
                                                        <picture>
                                                            <source
                                                                    srcset="{{sc_file($item->getThumb())}}"
                                                                    type="image/jpeg">

                                                            <img src="{{sc_file($item->getThumb())}}"
                                                                alt="{{$item->title}}" width="600" height="180"/>
                                                        </picture>
                                                        <span class="banner-item-view banner-item-view-3979"
                                                            style="display:none;"></span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                   @endif


                               </div>
                               <div class="product-list pList-olwMobile">


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-lenovo-v15-igl-82c3005fvn.html" data-id="22544"
                                          class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-lenovo-v15-igl-82c3005fvn_d3a62458.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-lenovo-v15-igl-82c3005fvn_d3a62458.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-lenovo-v15-igl-82c3005fvn_d3a62458.jpg"
                                                        alt="Laptop Lenovo V15 IGL 82C3005FVN">

                                                   <span class="product-item-view product-item-view-22544"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-40%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Lenovo V15 IGL 82C3005FVN </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Pentium</li>
                                                   <li>256GB SSD</li>
                                                   <li>4 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>9.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-asus-vivobook-x415ea-ek2043w.html" data-id="23235"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-vivobook-x415ea-ek2043w_2b69b0b1.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-vivobook-x415ea-ek2043w_2b69b0b1.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-asus-vivobook-x415ea-ek2043w_2b69b0b1.png"
                                                        alt="Laptop ASUS Vivobook X415EA-EK2043W">

                                                   <span class="product-item-view product-item-view-23235"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-30%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Asus Vivobook X415EA-EK2043W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i3</li>
                                                   <li>256GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>13.590.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   9.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-hp-15s-fq5163tu-7c135pa.html" data-id="22735"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-hp-15s-fq5163tu-7c135pa_a3bfd754.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-hp-15s-fq5163tu-7c135pa_a3bfd754.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-hp-15s-fq5163tu-7c135pa_a3bfd754.jpg"
                                                        alt="Laptop HP 15s-fq5163TU 7C135PA">

                                                   <span class="product-item-view product-item-view-22735"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-33%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   HP 15s-fq5163TU 7C135PA </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>256GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>20.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-acer-aspire-7-a715-76-57cy.html" data-id="23515"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-acer-aspire-7-a715-76-57cy_dcffcaaa.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-acer-aspire-7-a715-76-57cy_dcffcaaa.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-acer-aspire-7-a715-76-57cy_dcffcaaa.jpg"
                                                        alt="Laptop Acer Aspire 7 Gaming A715-76-57CY">

                                                   <span class="product-item-view product-item-view-23515"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-30%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Acer Aspire 7 Gaming A715-76-57CY </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>512GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>19.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-asus-b1502cba-nj1137w.html" data-id="23055"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-expertbook-b1502cba-nj1137w_01db13e1.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-expertbook-b1502cba-nj1137w_01db13e1.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-asus-expertbook-b1502cba-nj1137w_01db13e1.png"
                                                        alt="Laptop Asus ExpertBook B1502CBA-NJ1137W">

                                                   <span class="product-item-view product-item-view-23055"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Asus ExpertBook B1502CBA-NJ1137W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>512GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>18.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   14.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-asus-tuf-gaming-f15-fx506lhb-hn188w.html"
                                          data-id="21538" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-tuf-gaming-f15-fx506lhb-hn188w_fbf07546.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-tuf-gaming-f15-fx506lhb-hn188w_fbf07546.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-asus-tuf-gaming-f15-fx506lhb-hn188w_fbf07546.jpg"
                                                        alt="Laptop Asus TUF Gaming F15 FX506LHB-HN188W">

                                                   <span class="product-item-view product-item-view-21538"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-40%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Asus TUF Gaming F15 FX506LHB-HN188W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>512GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>24.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   14.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-dell-inspiron-3520-n5i5122w1.html" data-id="21438"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>
                                               <span class="product-type product-type-11"
                                                     style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-dell-inspiron-3520-n5i5122w1_fb45f377.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-dell-inspiron-3520-n5i5122w1_fb45f377.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-dell-inspiron-3520-n5i5122w1_fb45f377.png"
                                                        alt="Laptop Dell Inspiron 3520 N5I5122W1">

                                                   <span class="product-item-view product-item-view-21438"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-30%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Dell Inspiron 3520 N5I5122W1 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>256GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>21.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   15.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-asus-tuf-gaming-fx506hf-hn014w.html" data-id="22484"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-14"
                                                         style="display: block; position: absolute; left: 10px; bottom: 0; z-index: 2;background-color: #f1f1f1;     color: #333;     padding: 2px  5px ;     border-radius: 3px ;font-size:11px;">Mới
                                                       2023</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-tuf-gaming-fx506hf-hn014w_91f41fc1.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-asus-tuf-gaming-fx506hf-hn014w_91f41fc1.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-asus-tuf-gaming-fx506hf-hn014w_91f41fc1.jpg"
                                                        alt="Laptop Asus TUF Gaming FX506HF-HN014W">

                                                   <span class="product-item-view product-item-view-22484"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-32%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Asus TUF Gaming FX506HF-HN014W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>512GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>24.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   16.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/laptop-msi-gf63-thin-11uc-1228vn.html" data-id="23529"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-msi-gf63-thin-11uc-1228vn_04001122.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/laptop-msi-gf63-thin-11uc-1228vn_04001122.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/laptop-msi-gf63-thin-11uc-1228vn_04001122.jpg"
                                                        alt="Laptop MSI GF63 Thin 11UC-1228VN">

                                                   <span class="product-item-view product-item-view-23529"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-20%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   MSI GF63 Thin 11UC-1228VN </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i7</li>
                                                   <li>512GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>23.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   18.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="laptop/apple-macbook-air-2020-m1-mgnd3.html" data-id="8723"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/apple-macbook-air-m1-mgnd3-gold_a18bb7dd.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/apple-macbook-air-m1-mgnd3-gold_a18bb7dd.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/apple-macbook-air-m1-mgnd3-gold_a18bb7dd.jpg"
                                                        alt="Apple Macbook Air M1 (MGND3) Gold">

                                                   <span class="product-item-view product-item-view-8723"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-34%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Apple Macbook Air M1 (MGND3) Gold </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Apple M1</li>
                                                   <li>256GB SSD</li>
                                                   <li>8 GB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>28.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   18.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="laptop.html"><span>Xem tất cả
                                           Laptop</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="9" data-cid="59">
                               <h3>
                                   <a href="javascript:;">Thiết bị văn phòng</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="9" data-cid="60">
                               <h3>
                                   <a href="javascript:;">Máy tính để bàn</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="9" data-cid="61">
                               <h3>
                                   <a href="javascript:;">Màn hình máy tính</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="9" data-cid="62">
                               <h3>
                                   <a href="javascript:;">Máy in</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="9" data-cid="63">
                               <h3>
                                   <a href="javascript:;">Máy chiếu</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="9" data-cid="75">
                               <h3>
                                   <a href="javascript:;">Máy photocopy</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="9" data-cid="73">
                               <h3>
                                   <a href="javascript:;">Máy đếm tiền</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="9" data-cid="68">
                               <h3>
                                   <a href="javascript:;">Máy hủy tài liệu</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-9">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-9-59">
                               <div class="owlRespon-2-10 boxbanner-14">
                                    @if($banner_thiet_bi)
                                        <div class="banner-list">
                                            @foreach ($banner_thiet_bi as $key => $item)
                                                <div class="item banner-item banner-item-{{$key+1}}">
                                                    <a target=&quot;_blank&quot; href="laptop-sale-cuoi-thang.html"
                                                    data-id="3979">
                                                        <picture>
                                                            <source
                                                                    srcset="{{sc_file($item->getThumb())}}"
                                                                    type="image/jpeg">

                                                            <img src="{{sc_file($item->getThumb())}}"
                                                                alt="{{$item->title}}" width="600" height="180"/>
                                                        </picture>
                                                        <span class="banner-item-view banner-item-view-3979"
                                                            style="display:none;"></span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                               </div>
                               <div class="product-list pList-olw">


                                   <div class="card mb-4">
                                       <a href="may-tinh-de-ban/pc-singpc-hi510482-w-i5-10400-8gb-256gb-ssd-win11-pro.html"
                                          data-id="22486" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-singpc-hi510482-wi5-104008gb256gb-ssdwin11-pro_d909fd2c.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-singpc-hi510482-wi5-104008gb256gb-ssdwin11-pro_d909fd2c.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/pc-singpc-hi510482-wi5-104008gb256gb-ssdwin11-pro_d909fd2c.jpg"
                                                        alt="PC SingPC Hi510482-W(i5-10400/8GB/256GB SSD/Win11 Pro)">

                                                   <span class="product-item-view product-item-view-22486"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-24%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   PC SingPC Hi510482-W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>8GB</li>
                                                   <li>256GB SSD</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>10.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="man-hinh-may-tinh/man-hinh-led-singpc-q24f75-ips.html"
                                          data-id="22573" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-led-singpc-q24f75-ips238-inchfhdips75hz5ms250-nitshdmivgaaudioloatran-vin_ef3a235b.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-led-singpc-q24f75-ips238-inchfhdips75hz5ms250-nitshdmivgaaudioloatran-vin_ef3a235b.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/man-hinh-led-singpc-q24f75-ips238-inchfhdips75hz5ms250-nitshdmivgaaudioloatran-vin_ef3a235b.jpg"
                                                        alt="Màn hình LED SingPC Q24F75 IPS((23.8 inch/FHD/IPS/75Hz/5ms/250 nits/HDMI+VGA+Audio/Loa)_tràn viền">

                                                   <span class="product-item-view product-item-view-22573"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-42%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Màn hình LED SingPC Q24F75 IPS </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>≤ 23.8 inch</li>
                                                   <li>1920 x 1080</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.999.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-tinh-de-ban/pc-hp-m01-f2029d-77b55pa-i3-12100-8gb-256gb-ssd-win11-k-m-wifi-ac-black.html"
                                          data-id="21794" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-hp-m01-f2029d77b55pa-i3-121008gb256gb-ssdwin11kmwifi-acblack_2d133ea0.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-hp-m01-f2029d77b55pa-i3-121008gb256gb-ssdwin11kmwifi-acblack_2d133ea0.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/pc-hp-m01-f2029d77b55pa-i3-121008gb256gb-ssdwin11kmwifi-acblack_2d133ea0.jpg"
                                                        alt="PC HP M01-F2029d(77B55PA) i3-12100/8GB/256GB SSD/Win11/K+M/Wifi ac,black">

                                                   <span class="product-item-view product-item-view-21794"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   PC HP M01-F2029d(77B55PA) i3-12100/8GB/256GB SSD </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i3</li>
                                                   <li>8GB</li>
                                                   <li>256GB SSD</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   9.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="man-hinh-may-tinh/man-hinh-samsung-ls27c310eaexxv-27-fhd-ips-75hz-5ms-250-nits-hdmi-vga-vien-mong.html"
                                          data-id="22267" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-samsung-ls27c310eaexxv27fhdips75hz5ms250-nitshdmivga-vin-mng_ba727c90.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-samsung-ls27c310eaexxv27fhdips75hz5ms250-nitshdmivga-vin-mng_ba727c90.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/man-hinh-samsung-ls27c310eaexxv27fhdips75hz5ms250-nitshdmivga-vin-mng_ba727c90.jpg"
                                                        alt="Màn hình Samsung LS27C310EAEXXV(27"
                                                   /FHD/IPS/75Hz/5ms/250 nits/HDMI+VGA, viền mỏng)">

                                                   <span class="product-item-view product-item-view-22267"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-45%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Samsung LS27C310EAEXXV(27&quot;/FHD/IPS) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>27 inch</li>
                                                   <li>1920 x 1080</li>
                                                   <li>IPS</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.890.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.190.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-in/may-in-laser-den-trang-canon-lbp-2900.html" data-id="10486"
                                          class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-laser-den-trng-canon-lbp-2900---hang-chinh-hang-phi-co-phiu-bo-hanh-chinh-hang_255d153a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-laser-den-trng-canon-lbp-2900---hang-chinh-hang-phi-co-phiu-bo-hanh-chinh-hang_255d153a.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-in-laser-den-trng-canon-lbp-2900---hang-chinh-hang-phi-co-phiu-bo-hanh-chinh-hang_255d153a.jpg"
                                                        alt="Máy in Laser đen trắng Canon LBP 2900">

                                                   <span class="product-item-view product-item-view-10486"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-21%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy in Laser đen trắng Canon LBP 2900 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>In laser đen trắng đơn năng</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.000.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.949.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-chieu/may-chieu-epson-ebe500-3300-ansi.html" data-id="11837"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chieu-epson-ebe500-3300-ansi-E49u40.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chieu-epson-ebe500-3300-ansi-E49u40.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-chieu-epson-ebe500-3300-ansi-E49u40.png"
                                                        alt="Máy chiếu EPSON EB-E500 -3300 Ansi">

                                                   <span class="product-item-view product-item-view-11837"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-31%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy chiếu EPSON EB-E500 -3300 Ansi </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>3300 Ansi Lumen</li>
                                                   <li>1024 x 768px</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>15.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   10.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-in/may-in-don-chuc-nang-pantum-p2505w-wifi-.html"
                                          data-id="20251" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-don-chc-nang-pantum-p2505wwifi_8eace1e3.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-don-chc-nang-pantum-p2505wwifi_8eace1e3.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-in-don-chc-nang-pantum-p2505wwifi_8eace1e3.jpg"
                                                        alt="Máy in đơn chức năng Pantum P2505W(wifi)">

                                                   <span class="product-item-view product-item-view-20251"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Máy in đơn chức năng Pantum P2505W(wifi) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>In laser đen trắng đơn năng</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.590.000 ₫</span>
                                                   <span class="product-price-saving">-27%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-tinh-de-ban/pc-dell-vos-3710-42vt370001-i5-12400-8gb-256gb-ssd-win11-office2021-wifi-ac-1yw.html"
                                          data-id="21320" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-dell-vos-371042vt370001-i5-124008gb256gb-ssdwin11office2021wifi-ac1yw_681bf2ac.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-dell-vos-371042vt370001-i5-124008gb256gb-ssdwin11office2021wifi-ac1yw_681bf2ac.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/pc-dell-vos-371042vt370001-i5-124008gb256gb-ssdwin11office2021wifi-ac1yw_681bf2ac.jpg"
                                                        alt="PC Dell Vos 3710(42VT370001) i5-12400/8GB/256GB SSD/Win11/Office2021/Wifi ac,1YW">

                                                   <span class="product-item-view product-item-view-21320"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-22%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   PC Dell Vos 3710(42VT370001) i5-12400/8GB/256GB SSD </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>8GB</li>
                                                   <li>256GB SSD</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>17.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="man-hinh-may-tinh/man-hinh-dell-d2020h.html" data-id="22665"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-dell-d2020h-195-inchhdtn60hz5ms_19d6ab1d.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-dell-d2020h-195-inchhdtn60hz5ms_19d6ab1d.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/man-hinh-dell-d2020h-195-inchhdtn60hz5ms_19d6ab1d.jpg"
                                                        alt="Màn hình Dell D2020H (19.5 inch/HD+/TN/60Hz/5ms)">

                                                   <span class="product-item-view product-item-view-22665"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Màn hình Dell D2020H </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>≤ 20 inch</li>
                                                   <li>1600 x 900</li>
                                                   <li>TN</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.390.000 ₫</span>
                                                   <span class="product-price-saving">-29%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.390.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="man-hinh-may-tinh/ma-n-hi-nh-asus-va24ehe-23-8inch-ips-75hz.html"
                                          data-id="20241" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-asus-va24ehe-238inch-ips-75hz_7fe59819.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-asus-va24ehe-238inch-ips-75hz_7fe59819.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/man-hinh-asus-va24ehe-238inch-ips-75hz_7fe59819.jpg"
                                                        alt="Màn hình Asus VA24EHE 23.8Inch IPS 75Hz">

                                                   <span class="product-item-view product-item-view-20241"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Màn hình Asus VA24EHE 23.8Inch IPS 75Hz </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>≤ 23,8 inch</li>
                                                   <li>1920 x 1080</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.990.000 ₫</span>
                                                   <span class="product-price-saving">-32%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-in/may-in-laser-brother-hll2366dw-induplexlanwifi.html"
                                          data-id="10501" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-laser-brother-hl-l2366dw---induplexnetworkwifi_daab0156.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-laser-brother-hl-l2366dw---induplexnetworkwifi_daab0156.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-in-laser-brother-hl-l2366dw---induplexnetworkwifi_daab0156.jpg"
                                                        alt="Máy in Laser BROTHER HL-L2366DW - In,Duplex,Network,Wifi">

                                                   <span class="product-item-view product-item-view-10501"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Máy in Laser BROTHER HL-L2366DW - In,Duplex,Network,Wifi </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>In laser đen trắng đơn năng</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.490.000 ₫</span>
                                                   <span class="product-price-saving">-18%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-chieu/may-chieu-yaber-v10-full-hd-android-wifi.html"
                                          data-id="22356" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chiu-yaber-v10-full-hd-android-wifi_d0134212.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chiu-yaber-v10-full-hd-android-wifi_d0134212.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-chiu-yaber-v10-full-hd-android-wifi_d0134212.jpg"
                                                        alt="Máy chiếu Yaber V10 Full-HD Android, Wifi">

                                                   <span class="product-item-view product-item-view-22356"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Máy chiếu Yaber V10 Full-HD Android, Wifi </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>7500 Led Lumen</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>7.990.000 ₫</span>
                                                   <span class="product-price-saving">-28%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-in/may-in-don-chuc-nang-pantum-p2516-laser-a4.html"
                                          data-id="20250" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-don-chc-nang-pantum-p2516-laser-a4_708be911.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-don-chc-nang-pantum-p2516-laser-a4_708be911.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-in-don-chc-nang-pantum-p2516-laser-a4_708be911.jpg"
                                                        alt="Máy in đơn chức năng Pantum P2516 (laser A4)">

                                                   <span class="product-item-view product-item-view-20250"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-37%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy in đơn chức năng Pantum P2516 (laser A4) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>In laser đen trắng đơn năng</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>3.190.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-chieu/may-chieu-vankyo-leisure-495w-full-hd-1080p-wifi.html"
                                          data-id="20296" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chiu-vankyo-leisure-495w-full-hd-1080p-wifi_ca90fd88.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chiu-vankyo-leisure-495w-full-hd-1080p-wifi_ca90fd88.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-chiu-vankyo-leisure-495w-full-hd-1080p-wifi_ca90fd88.jpg"
                                                        alt="Máy chiếu  Vankyo Leisure 495W Full-HD 1080p Wifi">

                                                   <span class="product-item-view product-item-view-20296"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-31%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy chiếu Vankyo Leisure 495W Full-HD 1080p Wifi </p>

                                               <p class="product-price-regular">
                                                   <span>6.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.790.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="man-hinh-may-tinh/ma-n-hi-nh-dell-se2222h-21-5inch-va.html"
                                          data-id="21821" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-dell-se2222h-215inch-va_10046e3d.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-dell-se2222h-215inch-va_10046e3d.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/man-hinh-dell-se2222h-215inch-va_10046e3d.jpg"
                                                        alt="Màn hình Dell SE2222H 21.5Inch VA">

                                                   <span class="product-item-view product-item-view-21821"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Màn hình Dell SE2222H 21.5Inch VA </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>≤ 21.5 inch</li>
                                                   <li>1920 x 1080</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>4.690.000 ₫</span>
                                                   <span class="product-price-saving">-42%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.690.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-chieu/may-chieu-panasonic-pt-lb386-3800-ansi-xga.html"
                                          data-id="20403" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chiu-panasonic-pt-lb386-3800-ansi-xga_cd21e30b.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-chiu-panasonic-pt-lb386-3800-ansi-xga_cd21e30b.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-chiu-panasonic-pt-lb386-3800-ansi-xga_cd21e30b.jpg"
                                                        alt="Máy chiếu Panasonic PT-LB386 3800 Ansi (XGA)">

                                                   <span class="product-item-view product-item-view-20403"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Máy chiếu Panasonic PT-LB386 3800 Ansi (XGA) </p>

                                               <p class="product-price-regular">
                                                   <span>17.290.000 ₫</span>
                                                   <span class="product-price-saving">-19%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   13.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-tinh-de-ban/pc-dell-ins-3910-sti56020w1-8g-512g-i5-12400-8gb-512gb-ssd-win11-office2021-wifi-ac-1yw.html"
                                          data-id="21313" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-dell-ins-3910sti56020w1-8g-512g-i5-124008gb512gb-ssdwin11office2021wifi-ac1yw_8c74ed8e.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/pc-dell-ins-3910sti56020w1-8g-512g-i5-124008gb512gb-ssdwin11office2021wifi-ac1yw_8c74ed8e.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/pc-dell-ins-3910sti56020w1-8g-512g-i5-124008gb512gb-ssdwin11office2021wifi-ac1yw_8c74ed8e.jpg"
                                                        alt="PC Dell INS 3910(STI56020W1-8G-512G) i5-12400/8GB/512GB SSD/Win11/Office2021/Wifi ac,1YW">

                                                   <span class="product-item-view product-item-view-21313"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   PC Dell INS 3910(STI56020W1-8G-512G) i5-12400/8GB/512GB SSD </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Core i5</li>
                                                   <li>8GB</li>
                                                   <li>512GB SSD</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>17.990.000 ₫</span>
                                                   <span class="product-price-saving">-18%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   14.590.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="man-hinh-may-tinh/man-hinh-dell-u2422h238inchfhdips60hz8ms250nitshdmi-dp-usb-usbc-audio.html"
                                          data-id="11204" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>
                                               <span class="product-type product-type-49"
                                                     style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-dell-u2422h238inchfhdips60hz8ms250nitshdmidpusbusbcaudio_ab126e93.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/man-hinh-dell-u2422h238inchfhdips60hz8ms250nitshdmidpusbusbcaudio_ab126e93.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/man-hinh-dell-u2422h238inchfhdips60hz8ms250nitshdmidpusbusbcaudio_ab126e93.jpg"
                                                        alt="Màn hình Dell U2422H(23.8inch/FHD/IPS/60Hz/8ms/250nits/HDMI+DP+USB+USBC+Audio)">

                                                   <span class="product-item-view product-item-view-11204"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Màn hình Dell
                                                   U2422H(23.8inch/FHD/IPS/60Hz/8ms/250nits/HDMI&#x2B;DP&#x2B;USB&#x2B;USBC&#x2B;Audio)
                                               </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>≤ 23,8 inch</li>
                                                   <li>1920 x 1080</li>
                                                   <li>IPS</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>7.990.000 ₫</span>
                                                   <span class="product-price-saving">-22%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   6.190.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-in/may-in-brother-laser-dcpl2520d-inscancopydulex.html"
                                          data-id="10521" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-11"
                                                         style="display: block; position: absolute; right: 6px ; top: 8px ; font-size: 11px; z-index: 3; background-color: #f1f1f1; color: #333; padding: 2px 5px ; border-radius: 3px ;">Trả
                                                       góp 0%</span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-brother-laser-dcp-l2520d-inscancopydulex_b814fdd3.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-brother-laser-dcp-l2520d-inscancopydulex_b814fdd3.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-in-brother-laser-dcp-l2520d-inscancopydulex_b814fdd3.jpg"
                                                        alt="Máy in Brother Laser DCP-L2520D (In,Scan,Copy,Dulex)">

                                                   <span class="product-item-view product-item-view-10521"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Máy in Brother Laser DCP-L2520D (In,Scan,Copy,Dulex) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>In laser đen trắng đa năng</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>6.790.000 ₫</span>
                                                   <span class="product-price-saving">-36%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.290.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="may-in/may-in-brother-hl-l2321d-induplex.html" data-id="10491"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-laser-brother-hl-l2321d-in-duplex---in-do-mt-t-dng_6eda3e84.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-in-laser-brother-hl-l2321d-in-duplex---in-do-mt-t-dng_6eda3e84.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-in-laser-brother-hl-l2321d-in-duplex---in-do-mt-t-dng_6eda3e84.jpg"
                                                        alt="Máy in Laser BROTHER HL-L2321D (In Duplex) - In đảo mặt tự động">

                                                   <span class="product-item-view product-item-view-10491"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-48%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Máy in Laser BROTHER HL-L2321D (In Duplex) - In đảo mặt tự động
                                               </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>In laser đen trắng đơn năng</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.559.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.849.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="tin-hoc.html"><span>Xem tất cả Thiết bị văn
                                           phòng</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="10" data-cid="341">
                               <h3>
                                   <a href="javascript:;">Loa kéo Loa One Box</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-10">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-10-341">
                               <div class="owlRespon-2-10 boxbanner-14">


                               </div>
                               <div class="product-list pList-olw">


                                   <div class="card mb-4">
                                       <a href="loa-xach-tay-karaoke/loa-xach-tay-mini-karaoke-acnos-cs450-kem-2-mic-150w.html"
                                          data-id="18084" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-cs450-kem-2-mic-150w_6bbb2d52.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-cs450-kem-2-mic-150w_6bbb2d52.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-cs450-kem-2-mic-150w_6bbb2d52.jpg"
                                                        alt="Loa xách tay mini Karaoke Acnos CS450 (kèm 2 mic) 150W">

                                                   <span class="product-item-view product-item-view-18084"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-46%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Acnos CS450 (kèm 2 mic) 150W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>150W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>12.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   6.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-xach-tay-karaoke/loa-xach-tay-mini-karaoke-acnos-ksnet450-kem-2-mic-165w.html"
                                          data-id="18054" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-ksnet450-kem-2-mic-165w_9ec1a6b1.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-ksnet450-kem-2-mic-165w_9ec1a6b1.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-ksnet450-kem-2-mic-165w_9ec1a6b1.jpg"
                                                        alt="Loa xách tay mini Karaoke ACNOS KSNet450 (kèm 2 mic) 300W">

                                                   <span class="product-item-view product-item-view-18054"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-46%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   ACNOS KSNet450 (kèm 2 mic) 300W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>150W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>14.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-xach-tay-karaoke/loa-xach-tay-mini-karaoke-acnos-cs550-kem-2-mic-300w.html"
                                          data-id="18058" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-cs550-kem-2-mic-300w_f68f124b.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-cs550-kem-2-mic-300w_f68f124b.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-xach-tay-mini-karaoke-acnos-cs550-kem-2-mic-300w_f68f124b.jpg"
                                                        alt="Loa xách tay mini karaoke Acnos CS550 (kèm 2 mic) 300W">

                                                   <span class="product-item-view product-item-view-18058"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-40%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Acnos CS550 (kèm 2 mic) 300W </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>300W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>14.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-keo-loa-one-box/loa-keo-di-dong-mitsunal-m35-520w-bass-40cm-kem-2-micro-khong-day.html"
                                          data-id="20829" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-di-dong-mitsunal-m35-520w-bass-40cm-kem-2-micro-khong-day_dee09471.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-di-dong-mitsunal-m35-520w-bass-40cm-kem-2-micro-khong-day_dee09471.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-keo-di-dong-mitsunal-m35-520w-bass-40cm-kem-2-micro-khong-day_dee09471.jpg"
                                                        alt="Loa điện di động Mitsunal M35 520w Bass 40cm (kèm 2 micro không dây)">

                                                   <span class="product-item-view product-item-view-20829"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-49%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Mitsunal M35 520w Bass 40cm (kèm 2 micro không dây) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>520W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>5.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   2.999.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-keo-loa-one-box/loa-keo-di-dong-best-6830-500w-plus-bass40-kem-2-mic-17.html"
                                          data-id="22313" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-di-dong-best-6830-500w-plus-bass40-kem-2-mic-17_1db80016.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-di-dong-best-6830-500w-plus-bass40-kem-2-mic-17_1db80016.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-keo-di-dong-best-6830-500w-plus-bass40-kem-2-mic-17_1db80016.jpg"
                                                        alt="Loa điện di động Best 6830 500W Plus-Bass40 (kèm 2 mic) 17''">

                                                   <span class="product-item-view product-item-view-22313"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-47%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Best 6830 500W Plus-Bass40 (kèm 2 mic) 17&#x27;&#x27; </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>500W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>9.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-keo-loa-one-box/loa-keo-dalton-ts-12g380n-kem-2-mic-400w-bass-30cm-12.html"
                                          data-id="20110" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-12g380n-kem-2-mic-400w-bass-30cm-12_dde7095a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-12g380n-kem-2-mic-400w-bass-30cm-12_dde7095a.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-keo-dalton-ts-12g380n-kem-2-mic-400w-bass-30cm-12_dde7095a.jpg"
                                                        alt="Loa điện Dalton TS-12G380N (Kèm 2 mic) 400W Bass 30cm 12''">

                                                   <span class="product-item-view product-item-view-20110"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-45%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Dalton TS-12G380N (Kèm 2 mic) 400W Bass 30cm 12&#x27;&#x27; </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>400W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>7.290.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   3.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-keo-loa-one-box/loa-keo-di-dong-dalton-ts12g400x.html"
                                          data-id="18051" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-12g400x-kem-2-mic-500w-bass-30cm-15_4c3d842d.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-12g400x-kem-2-mic-500w-bass-30cm-15_4c3d842d.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-keo-dalton-ts-12g400x-kem-2-mic-500w-bass-30cm-15_4c3d842d.jpg"
                                                        alt="Loa điện Dalton TS-12G400X (Kèm 2 mic) 500W Bass 30cm 15''">

                                                   <span class="product-item-view product-item-view-18051"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-29%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Dalton TS-12G400X (Kèm 2 mic) 500W Bass 30cm 15&#x27;&#x27; </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>500W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.400.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   5.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-keo-loa-one-box/loa-keo-dalton-ts15g550n-kem-2-mic-ko-day-550w-bass-40cm-15.html"
                                          data-id="18061" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-15g550n-kem-2-mic-550w-bass-40cm-15_23633feb.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-15g550n-kem-2-mic-550w-bass-40cm-15_23633feb.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-keo-dalton-ts-15g550n-kem-2-mic-550w-bass-40cm-15_23633feb.jpg"
                                                        alt="Loa điện Dalton TS-15G550N (kèm 2 mic) 550W Bass 40cm 15''">

                                                   <span class="product-item-view product-item-view-18061"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-41%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Dalton TS-15G550N (kèm 2 mic) 550W Bass 40cm 15&#x27;&#x27; </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>550W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>8.490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   4.990.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-keo-loa-one-box/loa-keo-di-dong-dalton-ts15g500x.html"
                                          data-id="18062" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-15g500x-kem-2-mi-600w-bass-40cm-15_a963e33d.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-15g500x-kem-2-mi-600w-bass-40cm-15_a963e33d.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-keo-dalton-ts-15g500x-kem-2-mi-600w-bass-40cm-15_a963e33d.jpg"
                                                        alt="Loa điện Dalton TS-15G500X (Kèm 2 mi) 600W Bass 50cm 15''">

                                                   <span class="product-item-view product-item-view-18062"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-17%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Dalton TS-15G500X (Kèm 2 mi) 600W Bass 50cm 15&#x27;&#x27; </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>600W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>9.590.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   7.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="loa-keo-loa-one-box/loa-keo-dalton-ts15g700x-kem-2-mic-ko-day-700w-bass-40cm-15.html"
                                          data-id="18078" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-15g700x-kem-2-mic-700w-bass-40cm-15_daf1b190.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/loa-keo-dalton-ts-15g700x-kem-2-mic-700w-bass-40cm-15_daf1b190.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/loa-keo-dalton-ts-15g700x-kem-2-mic-700w-bass-40cm-15_daf1b190.jpg"
                                                        alt="Loa điện Dalton TS-15G700X (kèm 2 mic) 700W Bass 40cm 15''">

                                                   <span class="product-item-view product-item-view-18078"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-25%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Dalton TS-15G700X (kèm 2 mic) 700W Bass 40cm 15&#x27;&#x27; </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>700W</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>11.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   8.890.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="loa-keo-loa-one-box.html"><span>Xem tất cả
                                           Loa kéo Loa One Box</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>
                   <div class="wrapbox-pList">
                       <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                           <li class="wrapbox-getProducts active" data-w="11" data-cid="76">
                               <h3>
                                   <a href="javascript:;">Phụ kiện</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="11" data-cid="2">
                               <h3>
                                   <a href="javascript:;">Loa Bluetooth</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="11" data-cid="3">
                               <h3>
                                   <a href="javascript:;">Loa Máy Tính</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="11" data-cid="4">
                               <h3>
                                   <a href="javascript:;">Thiết bị mạng</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="11" data-cid="81">
                               <h3>
                                   <a href="javascript:;">Chuột máy tinh</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="11" data-cid="172">
                               <h3>
                                   <a href="javascript:;">Camera quan sát</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="11" data-cid="97">
                               <h3>
                                   <a href="javascript:;">Sạc / Cáp nối</a>
                               </h3>
                           </li>
                           <li class="wrapbox-getProducts " data-w="11" data-cid="93">
                               <h3>
                                   <a href="javascript:;">Pin, Sạc dự phòng</a>
                               </h3>
                           </li>
                       </ul>

                       <div class="wrapbox-loadProducts wrapbox-loadProducts-11">
                           <div class="wrapbox-loadProduct wrapbox-loadProduct-11-76">
                               <div class="owlRespon-2-10 boxbanner-14">


                               </div>
                               <div class="product-list pList-olw">


                                   <div class="card mb-4">
                                       <a href="sac-capnoi/cap-sac-dien-thoai-wopow-lightning-h08-100-cm.html"
                                          data-id="14386" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/cap-sac-dien-thoai-wopow-lightning-h08-100-cm-kumQKx.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/cap-sac-dien-thoai-wopow-lightning-h08-100-cm-kumQKx.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/cap-sac-dien-thoai-wopow-lightning-h08-100-cm-kumQKx.png"
                                                        alt="Cáp sạc điện thoại Wopow Lightning H08 1.2m">

                                                   <span class="product-item-view product-item-view-14386"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-42%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Cáp sạc điện thoại Wopow Lightning H08 100 cm </p>

                                               <p class="product-price-regular">
                                                   <span>119.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   69.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="usb-flash/usb-kingston-datatraveler-exodia-dtx-usb3-2-32gb.html"
                                          data-id="19868" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/usb-kingston-datatraveler-exodia-dtx-usb32-32gb_214f0b87.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/usb-kingston-datatraveler-exodia-dtx-usb32-32gb_214f0b87.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/usb-kingston-datatraveler-exodia-dtx-usb32-32gb_214f0b87.jpg"
                                                        alt="USB Kingston DataTraveler Exodia DTX USB3.2 32GB">

                                                   <span class="product-item-view product-item-view-19868"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-47%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   USB Kingston DataTraveler Exodia DTX USB3.2 32GB </p>

                                               <p class="product-price-regular">
                                                   <span>150.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   79.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="ip-camera/camera-imou-ranger-2-ipc-ta22cp-d-2mp.html"
                                          data-id="20169" class="product-item">
                                           <div class="card-img-top">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/camera-imou-ranger-2-ipc-ta22cp-d-2mp_26b39efe.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/camera-imou-ranger-2-ipc-ta22cp-d-2mp_26b39efe.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/camera-imou-ranger-2-ipc-ta22cp-d-2mp_26b39efe.jpg"
                                                        alt=" Camera iMou Ranger 2C TA22CP (2MP, đàm thoại 2 chiều, quay quét PTZ, video Full HD) ">

                                                   <span class="product-item-view product-item-view-20169"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-41%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Camera Imou Ranger 2 IPC-TA22CP (2MP) </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>2MP</li>
                                                   <li>Đàm thoại</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>890.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   519.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       Giảm 50% giá thẻ nhớ khi mua cùng Camera
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="pk-denban/den-ban-sac-led-bao-ve-thi-luc-dien-quang-dq-ldl12b-6br.html"
                                          data-id="23229" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/den-ban-sac-led-bao-ve-thi-luc-dien-quang-dq-ldl12b-6br-pin-lithium-6w-mau-nau-vo-gia-go_94843c93.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/den-ban-sac-led-bao-ve-thi-luc-dien-quang-dq-ldl12b-6br-pin-lithium-6w-mau-nau-vo-gia-go_94843c93.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/den-ban-sac-led-bao-ve-thi-luc-dien-quang-dq-ldl12b-6br-pin-lithium-6w-mau-nau-vo-gia-go_94843c93.png"
                                                        alt="Đèn bàn sạc LED Bảo vệ thị lực Điện Quang ĐQ LDL12B 6BR (Pin Lithium, 6W, màu nâu, vỏ giả gỗ)">

                                                   <span class="product-item-view product-item-view-23229"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-35%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   ĐQ LDL12B 6BR (Pin Lithium, 6W, màu nâu, vỏ giả gỗ) </p>

                                               <p class="product-price-regular">
                                                   <span>523.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   339.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="thiet-bi-mang/bo-phat-wifi-tplink-tlwr845n-300-mbps-3-ang-ten-roi.html"
                                          data-id="11340" class="product-item">
                                           <div class="card-img-top">


                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/b-phat-wifi-tp-link-tl-wr845n-300-mbps-3-ang-ten-ri_5fa0e92a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/b-phat-wifi-tp-link-tl-wr845n-300-mbps-3-ang-ten-ri_5fa0e92a.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/b-phat-wifi-tp-link-tl-wr845n-300-mbps-3-ang-ten-ri_5fa0e92a.jpg"
                                                        alt="Bộ phát Wifi TP-LINK TL-WR845N 300 Mbps, 3 ăng ten rời">

                                                   <span class="product-item-view product-item-view-11340"
                                                         style="display:none;"></span>
                                               </picture>
                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-30%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Bộ phát Wifi TP-LINK TL-WR845N 300 Mbps, 3 ăng ten rời </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Bộ thu phát Wifi</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>490.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   339.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="ip-camera/camera-imou-bullet-2e-ipc-f22fp-d-2mp-ip67-vo-nhua-cong-lan-video-dem-mau.html"
                                          data-id="20173" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/camera-imou-bullet-2e-ipc-f22fp-d-2mp-ip67-v-nha-cng-lan-video-dem-mau_ceaf3f23.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/camera-imou-bullet-2e-ipc-f22fp-d-2mp-ip67-v-nha-cng-lan-video-dem-mau_ceaf3f23.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/camera-imou-bullet-2e-ipc-f22fp-d-2mp-ip67-v-nha-cng-lan-video-dem-mau_ceaf3f23.jpg"
                                                        alt="Camera Imou Bullet 2E IPC-F22FP (2MP, IP67, vỏ nhựa, cổng LAN, video đêm màu)">

                                                   <span class="product-item-view product-item-view-20173"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-42%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Camera Imou Bullet 2E IPC-F22FP </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>2MP</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.390.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   799.000 ₫
                                               </p>
                                               <div class="product-promotionshort-box">
                                                   <p class="product-promotionshort">
                                                       Giảm 50% giá thẻ nhớ khi mua cùng Camera
                                                   </p>
                                               </div>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="sac-capnoi/cu-sac-2-cong-usb-wk-wp-u119.html" data-id="20666"
                                          class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/c-sc-2-cng-usb-wk-wp-u119_f3550710.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/c-sc-2-cng-usb-wk-wp-u119_f3550710.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/c-sc-2-cng-usb-wk-wp-u119_f3550710.jpg"
                                                        alt="Củ sạc 2 cổng USB WK WP-U119">

                                                   <span class="product-item-view product-item-view-20666"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-44%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Củ sạc 2 cổng USB WK WP-U119 </p>

                                               <p class="product-price-regular">
                                                   <span>159.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   89.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="sac-capnoi/cu-sac-wopow-q33-pro-20w-pd-sac-nhanh-output-type-c.html"
                                          data-id="14388" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/cu-sac-wopow-q33-pro-20w-pd-sac-nhanh-output-type-c-79rA56.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/cu-sac-wopow-q33-pro-20w-pd-sac-nhanh-output-type-c-79rA56.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/cu-sac-wopow-q33-pro-20w-pd-sac-nhanh-output-type-c-79rA56.png"
                                                        alt="Củ sạc Wopow Q33 Pro 20W PD sạc nhanh Output Type C">

                                                   <span class="product-item-view product-item-view-14388"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-44%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Củ sạc Wopow Q33 Pro 20W PD sạc nhanh Output Type C </p>

                                               <p class="product-price-regular">
                                                   <span>359.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   199.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tai-nghe-earphone/tai-nghe-nhet-tai-wopow-em205-cong-3-5.html"
                                          data-id="19678" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tai-nghe-nhet-tai-wopow-em205-cng-35_e6cc3878.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tai-nghe-nhet-tai-wopow-em205-cng-35_e6cc3878.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/tai-nghe-nhet-tai-wopow-em205-cng-35_e6cc3878.jpg"
                                                        alt="Tai nghe nhét tai Wopow EM205 cổng 3.5">

                                                   <span class="product-item-view product-item-view-19678"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-29%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Tai nghe nhét tai Wopow EM205 cổng 3.5 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Earphone</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>239.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   169.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="tai-nghe-bluetooth/tai-nghe-bluetooth-true-wireless-fenda-e2-hong.html"
                                          data-id="20431" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tai-nghe-bluetooth-true-wireless-fenda-e2-hng_7a596f3a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/tai-nghe-bluetooth-true-wireless-fenda-e2-hng_7a596f3a.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/tai-nghe-bluetooth-true-wireless-fenda-e2-hng_7a596f3a.png"
                                                        alt="Tai nghe bluetooth true wireless Fenda E2 Hồng">

                                                   <span class="product-item-view product-item-view-20431"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-50%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Tai nghe bluetooth true wireless Fenda E2 Hồng </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Bluetooth</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>980.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   490.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="pin-sacduphong/sac-du-phong-pisen-quick-powerfo-10500mah-22-5w.html"
                                          data-id="23247" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/sac-du-phong-pisen-quick-powerfo-10500mah-225w_70bb1206.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/sac-du-phong-pisen-quick-powerfo-10500mah-225w_70bb1206.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/sac-du-phong-pisen-quick-powerfo-10500mah-225w_70bb1206.png"
                                                        alt="Sạc dự phòng PISEN QUICK PowerFo 10500mAh 22.5W">

                                                   <span class="product-item-view product-item-view-23247"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-40%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   PISEN QUICK PowerFo 10500mAh 22.5W </p>

                                               <p class="product-price-regular">
                                                   <span>999.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   599.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="am-thanh-tro-giang/may-tro-giang-co-day-camac-unizone-cmk-9088s.html"
                                          data-id="17709" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-tro-giang-co-day-camac-unizone-cmk-9088s-1V1ueX.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/may-tro-giang-co-day-camac-unizone-cmk-9088s-1V1ueX.png"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/may-tro-giang-co-day-camac-unizone-cmk-9088s-1V1ueX.png"
                                                        alt="Máy trợ giảng có dây Unizone UZ-9088s new 2023 (10W)">

                                                   <span class="product-item-view product-item-view-17709"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-16%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Unizone UZ-9088s new 2023 (10W) </p>

                                               <p class="product-price-regular">
                                                   <span>999.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   839.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="hdd-gan-ngoai/hdd-seagate-expansion-portable-1tb-2-5-usb-3-0-stkm1000400.html"
                                          data-id="20192" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-expansion-portable-1tb-25-usb-30---stkm1000400_04705fc6.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-expansion-portable-1tb-25-usb-30---stkm1000400_04705fc6.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/hdd-seagate-expansion-portable-1tb-25-usb-30---stkm1000400_04705fc6.jpg"
                                                        alt="HDD Seagate Expansion Portable 1TB 2.5" USB 3.0 -
                                                        STKM1000400">

                                                   <span class="product-item-view product-item-view-20192"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-18%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   HDD Seagate Expansion Portable 1TB 2.5&quot; USB 3.0 -
                                                   STKM1000400 </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>HDD 1TB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.850.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.499.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="usb-flash/usb-kingston-datatraveler-exodia-m-dtxm-usb-3-2-32gb.html"
                                          data-id="20684" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/usb-kingston-datatraveler-exodia-mdtxm-usb-32-32gb_ad96274b.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/usb-kingston-datatraveler-exodia-mdtxm-usb-32-32gb_ad96274b.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/usb-kingston-datatraveler-exodia-mdtxm-usb-32-32gb_ad96274b.jpg"
                                                        alt="USB Kingston DataTraveler Exodia M_DTXM USB 3.2 32GB">

                                                   <span class="product-item-view product-item-view-20684"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/sale-dp-11-188_8e2d0039.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-47%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   USB Kingston DataTraveler Exodia M_DTXM USB 3.2 32GB </p>

                                               <p class="product-price-regular">
                                                   <span>150.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   79.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="thiet-bi-mang/bo-phat-wifi-tplink-tlwr840n-300-mbps.html"
                                          data-id="11359" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bo-phat-wifi-tplink-tlwr840n-300-mbps-z3JPDF.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/bo-phat-wifi-tplink-tlwr840n-300-mbps-z3JPDF.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/bo-phat-wifi-tplink-tlwr840n-300-mbps-z3JPDF.jpg"
                                                        alt="Bộ phát Wifi TP-LINK TL-WR840N 300 Mbps">

                                                   <span class="product-item-view product-item-view-11359"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="card-title product-name">
                                                   Bộ phát Wifi TP-LINK TL-WR840N 300 Mbps </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Bộ thu phát Wifi</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>384.000 ₫</span>
                                                   <span class="product-price-saving">-9%</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   349.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="thiet-bi-mang/bo-phat-wifi-tplink-chuan-ac1200-archer-c64-giga.html"
                                          data-id="22567" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/b-phat-wifi-tplink-chun-ac1200-archer-c64-giga_e515083a.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/b-phat-wifi-tplink-chun-ac1200-archer-c64-giga_e515083a.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/b-phat-wifi-tplink-chun-ac1200-archer-c64-giga_e515083a.jpg"
                                                        alt="Bộ phát Wifi TPLink chuẩn AC1200 Archer C64 Giga">

                                                   <span class="product-item-view product-item-view-22567"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-29%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   Bộ phát Wifi TPLink chuẩn AC1200 Archer C64 Giga </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>Bộ thu phát Wifi</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   699.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="hdd-gan-ngoai/hdd-transcend-d3-1tb-25-usb-30.html" data-id="12246"
                                          class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/22442_12054_hdd-transcend-d3-1tb-25-usb-30.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/22442_12054_hdd-transcend-d3-1tb-25-usb-30.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/22442_12054_hdd-transcend-d3-1tb-25-usb-30.jpg"
                                                        alt="HDD Western Elements 1TB 2,5'' USB 3.0 (WDBUZG0010BBK)">

                                                   <span class="product-item-view product-item-view-12246"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-24%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   HDD Western Elements 1TB 2,5&#x27;&#x27; USB 3.0 (WDBUZG0010BBK)
                                               </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>HDD 1TB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.990.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.499.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="hdd-gan-ngoai/hdd-seagate-one-touch-1tb-2-5-usb-3-0-den-stky1000400.html"
                                          data-id="20196" class="product-item">
                                           <div class="card-img-top ">
                                                   <span class="product-type product-type-49"
                                                         style="display: block; position: absolute; left: 5px ; top: 3px ; width: 73px; height: 56px; background-size: contain; z-index: 65;background: url(assets/cdn/images/catalog/icon-hot-sale-top_21109a92.png) no-repeat center center;"></span>

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-den---stky1000400_61334c2e.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-den---stky1000400_61334c2e.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-den---stky1000400_61334c2e.jpg"
                                                        alt="HDD Seagate One Touch 1TB 2.5" USB 3.0 (Đen) -
                                                        STKY1000400">

                                                   <span class="product-item-view product-item-view-20196"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   HDD Seagate One Touch 1TB 2.5&quot; USB 3.0 (Đen) - STKY1000400
                                               </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>HDD 1TB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.950.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.499.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="hdd-gan-ngoai/hdd-seagate-one-touch-1tb-2-5-usb-3-0-do-stky1000403.html"
                                          data-id="20199" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-d---stky1000403_5a62a1cd.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-d---stky1000403_5a62a1cd.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-d---stky1000403_5a62a1cd.jpg"
                                                        alt="HDD Seagate One Touch 1TB 2.5" USB 3.0 (Đỏ) -
                                                        STKY1000403">

                                                   <span class="product-item-view product-item-view-20199"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   HDD Seagate One Touch 1TB 2.5&quot; USB 3.0 (Đỏ) - STKY1000403
                                               </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>HDD 1TB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.950.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.499.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>


                                   <div class="card mb-4">
                                       <a href="hdd-gan-ngoai/hdd-seagate-one-touch-1tb-2-5-usb-3-0-xam-stky1000404.html"
                                          data-id="20200" class="product-item">
                                           <div class="card-img-top ">

                                               <picture>
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-xam---stky1000404_317c1146.webp"
                                                           type="image/webp">
                                                   <source
                                                           srcset="https://cdn.mediamart.vn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-xam---stky1000404_317c1146.jpg"
                                                           type="image/jpeg">
                                                   <img loading="lazy"
                                                        src="assets/cdn/thumb/images/product/hdd-seagate-one-touch-1tb-25-usb-30-xam---stky1000404_317c1146.jpg"
                                                        alt="HDD Seagate One Touch 1TB 2.5" USB 3.0 (Xám) -
                                                        STKY1000404">

                                                   <span class="product-item-view product-item-view-20200"
                                                         style="display:none;"></span>
                                               </picture>

                                           </div>
                                           <div class="card-body">
                                               <p class="product-specialtype-box">
                                                   <img loading="lazy"
                                                        src="assets/cdn/images/catalog/kmt-t8_827d0c63.png"
                                                        width="100%" height="100%" alt="Khuyến mại"/>
                                                   <span>-23%</span>
                                               </p>
                                               <p class="card-title product-name">
                                                   HDD Seagate One Touch 1TB 2.5&quot; USB 3.0 (Xám) - STKY1000404
                                               </p>
                                               <ul class="list-inline product-attributes">
                                                   <li>HDD 1TB</li>
                                               </ul>

                                               <p class="product-price-regular">
                                                   <span>1.950.000 ₫</span>
                                               </p>
                                               <p class="card-text product-price">
                                                   1.499.000 ₫
                                               </p>

                                           </div>
                                       </a>
                                   </div>

                               </div>
                               <a class="viewmore viewmorecate" href="nhom-phu-kien.html"><span>Xem tất cả Phụ
                                           kiện</span></a>
                           </div>
                       </div>
                   </div>

                   <div class="clearfix"></div>

               </div>
           </div>


           <div class="clearfix pt-3"></div>
           <div class="row home-newsfeatured">
               <div class="col-md-9">
                   <h4 class="home-news-head">TIN KHUYẾN MẠI <a href="khuyen-mai.html" target="_blank">Xem thêm</a>
                   </h4>
                   <div class="home-news1">


                       <div class="item news-item news-item-1">
                           <div class="img">
                               <a href="tin-khuyen-mai/dai-tiec-sale-dot-pha-giam-sap-san-den-50.html"
                                  title="Đại tiệc sale đột phá: Giảm sập sàn đến 50%" data-id="17530">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/images/news/dai-tiec-sale-dot-pha-giam-sap-san-den-50_34b6d458.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/images/news/dai-tiec-sale-dot-pha-giam-sap-san-den-50_34b6d458.png"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/images/news/dai-tiec-sale-dot-pha-giam-sap-san-den-50_34b6d458.png"
                                            alt="Đại tiệc sale đột phá: Giảm sập sàn đến 50%">
                                       <span class="news-item-view news-item-view-17530"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="tin-khuyen-mai/dai-tiec-sale-dot-pha-giam-sap-san-den-50.html"
                                  title="Đại tiệc sale đột phá: Giảm sập sàn đến 50%">
                                   Đại tiệc sale đột phá: Giảm sập sàn đến 50%
                               </a>
                           </div>
                       </div>
                       <div class="item news-item news-item-2">
                           <div class="img">
                               <a href="tin-khuyen-mai/sale-dot-pha.html"
                                  title="Luôn luôn giá rẻ, Sale đột phá- Giảm đến 50% toàn bộ mặt hàng"
                                  data-id="17432">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/luon-luon-gia-re-sale-dot-pha--giam-den-50-toan-bo-mat-hang_713b540f.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/luon-luon-gia-re-sale-dot-pha--giam-den-50-toan-bo-mat-hang_713b540f.png"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/thumb/images/news/luon-luon-gia-re-sale-dot-pha--giam-den-50-toan-bo-mat-hang_713b540f.png"
                                            alt="Luôn luôn giá rẻ, Sale đột phá- Giảm đến 50% toàn bộ mặt hàng">
                                       <span class="news-item-view news-item-view-17432"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="tin-khuyen-mai/sale-dot-pha.html"
                                  title="Luôn luôn giá rẻ, Sale đột phá- Giảm đến 50% toàn bộ mặt hàng">
                                   Luôn luôn giá rẻ, Sale đột phá- Giảm đến 50% toàn bộ mặt hàng
                               </a>
                           </div>
                       </div>
                       <div class="item news-item news-item-3">
                           <div class="img">
                               <a href="tin-khuyen-mai/ngoai-hang-khoi-tranh-tv-gia-banh-noc.html"
                                  title="Ngoại hạng khởi tranh – TV giá banh nóc (-50%)" data-id="17534">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/ngoai-hang-khoi-tranh-tv-gia-banh-noc--50_60b4727f.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/ngoai-hang-khoi-tranh-tv-gia-banh-noc--50_60b4727f.png"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/thumb/images/news/ngoai-hang-khoi-tranh-tv-gia-banh-noc--50_60b4727f.png"
                                            alt="Ngoại hạng khởi tranh – TV giá banh nóc (-50%)">
                                       <span class="news-item-view news-item-view-17534"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="tin-khuyen-mai/ngoai-hang-khoi-tranh-tv-gia-banh-noc.html"
                                  title="Ngoại hạng khởi tranh – TV giá banh nóc (-50%)">
                                   Ngoại hạng khởi tranh – TV giá banh nóc (-50%)
                               </a>
                           </div>
                       </div>
                       <div class="item news-item news-item-4">
                           <div class="img">
                               <a href="tu-van-may-tinh/top-laptop-lenovo-ideapad-dang-mua-nhat.html"
                                  title="Top 5 laptop Lenovo Ideapad đáng mua nhất năm 2023" data-id="17562">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/top-5-laptop-lenovo-ideapad-dang-mua-nhat-nam-2023_479f4da8.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/top-5-laptop-lenovo-ideapad-dang-mua-nhat-nam-2023_479f4da8.png"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/thumb/images/news/top-5-laptop-lenovo-ideapad-dang-mua-nhat-nam-2023_479f4da8.png"
                                            alt="Top 5 laptop Lenovo Ideapad đáng mua nhất năm 2023">
                                       <span class="news-item-view news-item-view-17562"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="tu-van-may-tinh/top-laptop-lenovo-ideapad-dang-mua-nhat.html"
                                  title="Top 5 laptop Lenovo Ideapad đáng mua nhất năm 2023">
                                   Top 5 laptop Lenovo Ideapad đáng mua nhất năm 2023
                               </a>
                           </div>
                       </div>
                       <div class="item news-item news-item-5">
                           <div class="img">
                               <a href="tu-van-may-tinh/laptop-acer-aspire-duoi-15-trieu.html"
                                  title="Top 3 laptop Acer Aspire dưới 15 triệu phù hợp để học tập, làm việc"
                                  data-id="17556">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/top-3-laptop-acer-aspire-duoi-15-trieu-phu-hop-de-hoc-tap-lam-viec_f1ba6fa5.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/top-3-laptop-acer-aspire-duoi-15-trieu-phu-hop-de-hoc-tap-lam-viec_f1ba6fa5.png"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/thumb/images/news/top-3-laptop-acer-aspire-duoi-15-trieu-phu-hop-de-hoc-tap-lam-viec_f1ba6fa5.png"
                                            alt="Top 3 laptop Acer Aspire dưới 15 triệu phù hợp để học tập, làm việc">
                                       <span class="news-item-view news-item-view-17556"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="tu-van-may-tinh/laptop-acer-aspire-duoi-15-trieu.html"
                                  title="Top 3 laptop Acer Aspire dưới 15 triệu phù hợp để học tập, làm việc">
                                   Top 3 laptop Acer Aspire dưới 15 triệu phù hợp để học tập, làm việc
                               </a>
                           </div>
                       </div>


                   </div>
               </div>
               <div class="col-md-3">
                   <h4 class="home-news-head home-news-head2">VIDEO REVIEW <a href="video-review.html"
                                                                              target="_blank">Xem thêm</a></h4>
                   <div class="home-news2">


                       <div class="item news-item news-item-1">
                           <div class="img">
                               <a href="video-tivi/nang-chuan-tivi-voi-smart-tv-lg-55-inch-55uq8000psc.html"
                                  title="Nâng chuẩn Tivi với Smart TV LG 55 inch 55UQ8000PSC" data-id="17356">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/images/news/nang-chuan-tivi-voi-smart-tv-lg-55-inch-55uq8000psc_969de904.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/images/news/nang-chuan-tivi-voi-smart-tv-lg-55-inch-55uq8000psc_969de904.png"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/images/news/nang-chuan-tivi-voi-smart-tv-lg-55-inch-55uq8000psc_969de904.png"
                                            alt="Nâng chuẩn Tivi với Smart TV LG 55 inch 55UQ8000PSC">
                                       <span class="news-item-view news-item-view-17356"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="video-tivi/nang-chuan-tivi-voi-smart-tv-lg-55-inch-55uq8000psc.html"
                                  title="Nâng chuẩn Tivi với Smart TV LG 55 inch 55UQ8000PSC">
                                   Nâng chuẩn Tivi với Smart TV LG 55 inch 55UQ8000PSC
                               </a>
                           </div>
                       </div>
                       <div class="item news-item news-item-2">
                           <div class="img">
                               <a href="video-gia-dung/quat-treo-tuong-coex-cw-7211a-mat-me-thoang-dang-ca-he.html"
                                  title="Quạt treo tường Coex CW-7211A: Mát mẻ, thoáng đãng cả hè"
                                  data-id="16991">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/quat-treo-tuong-coex-cw-7211a-mat-me-thoang-dang-ca-he_1c51d6d6.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/quat-treo-tuong-coex-cw-7211a-mat-me-thoang-dang-ca-he_1c51d6d6.jpg"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/thumb/images/news/quat-treo-tuong-coex-cw-7211a-mat-me-thoang-dang-ca-he_1c51d6d6.jpg"
                                            alt="Quạt treo tường Coex CW-7211A: Mát mẻ, thoáng đãng cả hè">
                                       <span class="news-item-view news-item-view-16991"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="video-gia-dung/quat-treo-tuong-coex-cw-7211a-mat-me-thoang-dang-ca-he.html"
                                  title="Quạt treo tường Coex CW-7211A: Mát mẻ, thoáng đãng cả hè">
                                   Quạt treo tường Coex CW-7211A: Mát mẻ, thoáng đãng cả hè
                               </a>
                           </div>
                       </div>
                       <div class="item news-item news-item-3">
                           <div class="img">
                               <a href="video-may-giat/may-giat-long-ngang-coex-inverter-10-5kg-fw-10cw1408igb-thiet-ke-thoi-thuong-giat-da-che-do.html"
                                  title="Máy giặt lồng ngang Coex Inverter 10,5kg FW-10CW1408IGB: Thiết kế thời thượng, giặt đa chế độ"
                                  data-id="15547">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/may-git-lng-ngang-coex-inverter-105kg-fw-10cw1408igb-thit-k-thi-thung-git-da-ch-d_d761f859.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/may-git-lng-ngang-coex-inverter-105kg-fw-10cw1408igb-thit-k-thi-thung-git-da-ch-d_d761f859.jpg"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/thumb/images/news/may-git-lng-ngang-coex-inverter-105kg-fw-10cw1408igb-thit-k-thi-thung-git-da-ch-d_d761f859.jpg"
                                            alt="Máy giặt lồng ngang Coex Inverter 10,5kg FW-10CW1408IGB: Thiết kế thời thượng, giặt đa chế độ">
                                       <span class="news-item-view news-item-view-15547"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="video-may-giat/may-giat-long-ngang-coex-inverter-10-5kg-fw-10cw1408igb-thiet-ke-thoi-thuong-giat-da-che-do.html"
                                  title="Máy giặt lồng ngang Coex Inverter 10,5kg FW-10CW1408IGB: Thiết kế thời thượng, giặt đa chế độ">
                                   Máy giặt lồng ngang Coex Inverter 10,5kg FW-10CW1408IGB: Thiết kế thời thượng,
                                   giặt đa chế độ
                               </a>
                           </div>
                       </div>
                       <div class="item news-item news-item-4">
                           <div class="img">
                               <a href="video-gia-dung/chuan-vi-com-nha-voi-noi-com-dien-co-coex-cr-3421.html"
                                  title="Chuẩn vị cơm nhà với nồi cơm điện cơ Coex CR-3421" data-id="15991">


                                   <picture>
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/chun-v-com-nha-vi-ni-com-din-co-coex-cr-3421_b3d7f4d8.webp"
                                               type="image/webp">
                                       <source
                                               srcset="https://cdn.mediamart.vn/thumb/images/news/chun-v-com-nha-vi-ni-com-din-co-coex-cr-3421_b3d7f4d8.jpg"
                                               type="image/jpeg">
                                       <img loading="lazy"
                                            src="assets/cdn/thumb/images/news/chun-v-com-nha-vi-ni-com-din-co-coex-cr-3421_b3d7f4d8.jpg"
                                            alt="Chuẩn vị cơm nhà với nồi cơm điện cơ Coex CR-3421">
                                       <span class="news-item-view news-item-view-15991"
                                             style="display:none;"></span>
                                   </picture>
                               </a>
                           </div>
                           <div class="name">
                               <a href="video-gia-dung/chuan-vi-com-nha-voi-noi-com-dien-co-coex-cr-3421.html"
                                  title="Chuẩn vị cơm nhà với nồi cơm điện cơ Coex CR-3421">
                                   Chuẩn vị cơm nhà với nồi cơm điện cơ Coex CR-3421
                               </a>
                           </div>
                       </div>


                   </div>
               </div>
           </div>

           <div class="clearfix pt-3"></div>
           <div class="row home-newsfeatured">
               <div class="col-md-12">
                   <h4 class="home-news-head">CHỨNG NHẬN ĐẠI LÝ</h4>
                   <div class="home-news1">
                       <div class="product-list pList-olw-4">
                           <div class="card mb-4" style="height: auto;">
                               <img src="https://media.istockphoto.com/id/1131968152/vi/vec-to/giấy-chứng-nhận-hoặc-mẫu-thiết-kế-hoàn-thành-với-viền-vector-minh-họa-giấy-chứng-nhận-thành.jpg?s=1024x1024&w=is&k=20&c=p4Hf73Ej2DkdRtCV-K5vcH0Nu3OeDwgt7WM1IAjokp8="
                                    alt="">
                           </div>
                           <div class="card mb-4" style="height: auto;">
                               <img src="https://media.istockphoto.com/id/1131968152/vi/vec-to/giấy-chứng-nhận-hoặc-mẫu-thiết-kế-hoàn-thành-với-viền-vector-minh-họa-giấy-chứng-nhận-thành.jpg?s=1024x1024&w=is&k=20&c=p4Hf73Ej2DkdRtCV-K5vcH0Nu3OeDwgt7WM1IAjokp8="
                                    alt="">
                           </div>
                           <div class="card mb-4" style="height: auto;">
                               <img src="https://media.istockphoto.com/id/1131968152/vi/vec-to/giấy-chứng-nhận-hoặc-mẫu-thiết-kế-hoàn-thành-với-viền-vector-minh-họa-giấy-chứng-nhận-thành.jpg?s=1024x1024&w=is&k=20&c=p4Hf73Ej2DkdRtCV-K5vcH0Nu3OeDwgt7WM1IAjokp8="
                                    alt="">
                           </div>
                           <div class="card mb-4" style="height: auto;">
                               <img src="https://media.istockphoto.com/id/1131968152/vi/vec-to/giấy-chứng-nhận-hoặc-mẫu-thiết-kế-hoàn-thành-với-viền-vector-minh-họa-giấy-chứng-nhận-thành.jpg?s=1024x1024&w=is&k=20&c=p4Hf73Ej2DkdRtCV-K5vcH0Nu3OeDwgt7WM1IAjokp8="
                                    alt="">
                           </div>
                           <div class="card mb-4" style="height: auto;">
                               <img src="https://media.istockphoto.com/id/1131968152/vi/vec-to/giấy-chứng-nhận-hoặc-mẫu-thiết-kế-hoàn-thành-với-viền-vector-minh-họa-giấy-chứng-nhận-thành.jpg?s=1024x1024&w=is&k=20&c=p4Hf73Ej2DkdRtCV-K5vcH0Nu3OeDwgt7WM1IAjokp8="
                                    alt="">
                           </div>
                           <div class="card mb-4" style="height: auto;">
                               <img src="https://media.istockphoto.com/id/1131968152/vi/vec-to/giấy-chứng-nhận-hoặc-mẫu-thiết-kế-hoàn-thành-với-viền-vector-minh-họa-giấy-chứng-nhận-thành.jpg?s=1024x1024&w=is&k=20&c=p4Hf73Ej2DkdRtCV-K5vcH0Nu3OeDwgt7WM1IAjokp8="
                                    alt="">
                           </div>

                       </div>
                   </div>
               </div>
           </div>

           <div class="clearfix pt-3"></div>
           <div class="row home-newsfeatured">
               <div class="col-md-12">
                   <h4 class="home-news-head">THƯƠNG HIỆU</h4>
                   <div class="home-news1">
                       <div class="product-list pList-olw-4">
                           <div class="card mb-4" style="height: auto;">
                               <img src="https://images.mein-mmo.de/medien/2022/10/sony-logo-header-780x438.jpg"
                                    alt="">
                           </div>

                       </div>
                   </div>
               </div>
           </div>
       </div>

   </div>

   <div class="clearfix"></div>
</div>
@endsection

@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
