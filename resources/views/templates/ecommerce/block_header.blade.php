@php
    $rootCategories = $modelCategory->start()->getCategoryRoot()->setSort(['id', 'asc'])->getData();
   
  
@endphp

<div class="container-fluid padding-unset-h">
  <div class="bgcolor-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="owlRespon-2 boxbanner-2">
            <div class="banner-list">
              <div class="item banner-item banner-item-1">
                <a target=&quot;_blank&quot; href="tv-oled-qled-bigsize.html" data-id="3985">

                  <img src="{{ sc_file($sc_templateFile.'/assets/cdn/images/banner/tv-1_d83d76ee.png')}}" alt="tv 1" width="600" height="70" />

                  <span class="banner-item-view banner-item-view-3985" style="display:none;"></span>
                </a>
              </div>
              <div class="item banner-item banner-item-2">
                <a target=&quot;_blank&quot; href="tv-oled-qled-bigsize.html" data-id="3986">

                  <img src="{{ sc_file($sc_templateFile.'/assets/cdn/images/banner/tv2_ebf469d2.png')}}" alt="tv2" width="600" height="70" />

                  <span class="banner-item-view banner-item-view-3986" style="display:none;"></span>
                </a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bgcolor-main">
    <div class="container">
      <div class="row header-body flex flex-content-spacebetween">
        <div class="col-md-3 col-9">
          <div class="box-logo">
            <a class="flex flex-items-center" href="index.html">
              <span></span>
            </a>
          </div>
        </div>
        <div class="col-md-5 col-3 box-utilities">
          <div class="flex flex-content-spacearound">
            <div class="box-contact">
              <a href="tel:0936 756 888">
                <b>0936 756 888</b>
                <span>Tư vấn bán hàng</span>
              </a>
            </div>
            <div class="box-location">
              <a href="he-thong-sieu-thi.html">
                <b>Tìm Siêu Thị ></b>
                <span>Mở cửa: 8:00 - 21:30</span>
              </a>
            </div>
            <div class="box-cart">

              <div class="cart-badge badge-icons pull-right">
                <a href="cart.html"><i class="fa fa-shopping-cart"></i><span>Giỏ hàng</span></a>
                <span class="badge badge-sea rounded-x">0</span>
                <div class="badge-open">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 box-search">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="menuhead-news flex flex-content-right">
                <ul class="login">


                  <li class="nav-item">
                    <a rel="nofollow" class="nav-link" href="login.html">
                      Đăng nhập
                    </a>
                  </li>
                  <li class="nav-item">
                    <a rel="nofollow" class="nav-link" href="register.html">
                      Đăng ký
                    </a>
                  </li>

                </ul>
                <ul class="list-unstyled">
                  <li class="v-menu-item">
                    <a data-id="481" href="tu-van-tieu-dung.html" title="Tư vấn">

                      <span>
                        Tư vấn </span>

                      <span class="menu-item-view menu-item-view-481" style="display:none;"></span>
                    </a>

                  </li>
                  <!-- <li class="v-menu-item">
              <a data-id="480" href="vao-bep.html" title="Vào bếp">

                  <span>
Vào bếp                    </span>

                  <span class="menu-item-view menu-item-view-480" style="display:none;"></span>
              </a>

          </li> -->
                </ul>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-1 col-md-0"></div>
            <div class="col-11 col-md-12">

              <form class="form-inline" method="get" action="https://mediamart.vn/tag">
                <div class="form-group search-input">
                  <input type="text" name="key" class="form-control" placeholder="Bạn tìm gì..." id="Key" value="">
                </div>
                <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bgheader-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-0">
          <div class="box-nav">
            <div class="main-nav navbar navbar-expand-lg navbar-default navbar-inverse">
              <button class="navbar-toggler navbar-toggler-always" type="button" data-toggle="collapse"
                data-target="#navbarMain" aria-controls="navbarSupportedContent" aria-expanded="true"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span><b>Danh Mục<span> Sản
                    Phẩm</span></b><i></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav">
                  @foreach ($rootCategories as $item)
                    <li class="nav-item dropdown">
                      <span class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                        <img loading="lazy" src="{{ sc_file($item->getThumb()) }}"
                          alt="Điều hòa nhiệt độ" />
                        <span class="nav-link-text">
                          <span>
                            <span style='color:#ff0000'><a href='{{$item->getUrl()}}'>{{$item->title}}</a></span> </span>
                        </span>
                      </span>
                      <ul class="dropdown-menu dropdown-menu-1">
                        <li class="v-menu-item nav-item-1 dropdown-submenu">
                          <a data-id="258" class="nav-link-1 dropdown-toggle" data-toggle="dropdown"
                            href="dieu-hoa-nhiet-do.html">

                            <span>
                              Thương Hiệu </span>
                            <i></i>
                            <span class="menu-item-view menu-item-view-258" style="display:none;"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-2">
                            <li class="v-menu-item">
                              <a data-id="243" class="nav-link-2" href="dieu-hoa-nhiet-do-panasonic.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Panasonic
                                <span class="menu-item-view menu-item-view-243" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="244" class="nav-link-2" href="dieu-hoa-nhiet-do-daikin.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Daikin
                                <span class="menu-item-view menu-item-view-244" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="245" class="nav-link-2" href="dieu-hoa-nhiet-do-casper.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Casper
                                <span class="menu-item-view menu-item-view-245" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="246" class="nav-link-2" href="dieu-hoa-nhiet-do-lg.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa LG
                                <span class="menu-item-view menu-item-view-246" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="247" class="nav-link-2" href="dieu-hoa-nhiet-do-samsung.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Samsung
                                <span class="menu-item-view menu-item-view-247" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="248" class="nav-link-2" href="dieu-hoa-nhiet-do-midea.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Midea
                                <span class="menu-item-view menu-item-view-248" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="914" class="nav-link-2" href="dieu-hoa-nhiet-do-comfee.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Comfee
                                <span class="menu-item-view menu-item-view-914" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="255" class="nav-link-2" href="dieu-hoa-nhiet-do-aqua.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa AQUA
                                <span class="menu-item-view menu-item-view-255" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="249" class="nav-link-2" href="dieu-hoa-nhiet-do-gree.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Gree
                                <span class="menu-item-view menu-item-view-249" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="250" class="nav-link-2" href="dieu-hoa-nhiet-do-sharp.html">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa Sharp
                                <span class="menu-item-view menu-item-view-250" style="display:none;"></span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="v-menu-item nav-item-1 dropdown-submenu">
                          <a data-id="406" class="nav-link-1 dropdown-toggle" data-toggle="dropdown"
                            href="{{$item->getUrl()}}">
                            <span>
                             Loại </span>
                            <i></i>
                            <span class="menu-item-view menu-item-view-406" style="display:none;"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-2">
                            @php
                                $parentCategories = $modelCategory->start()->setParent($item->id)->getData();
                            @endphp
                            @foreach ($parentCategories as $category)
                              <li class="v-menu-item">
                                <a data-id="409" class="nav-link-2" href="{{$category->getUrl()}}">
                                  <i class="nav-link-2-icon"></i>
                                  {{ $category->title }}
                                  <span class="menu-item-view menu-item-view-409" style="display:none;"></span>
                                </a>
                              </li>
                            @endforeach
                           
                           
                          </ul>
                        </li>
                        {{-- <li class="v-menu-item nav-item-1 dropdown-submenu">
                          <a data-id="727" class="nav-link-1 dropdown-toggle" data-toggle="dropdown"
                            href="dieu-hoa-nhiet-do.html">

                            <span>
                              Điều Hòa </span>
                            <i></i>
                            <span class="menu-item-view menu-item-view-727" style="display:none;"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-2">
                            <li class="v-menu-item">
                              <a data-id="728" class="nav-link-2" href="dieu-hoa-nhiet-do8238.html?e=tra-gop-0">
                                <i class="nav-link-2-icon"></i>
                                Trả góp 0 - 0.5%
                                <span class="menu-item-view menu-item-view-728" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="729" class="nav-link-2" href="dieu-hoa-nhiet-do0bac.html?e=model-moi&amp;t=14">
                                <i class="nav-link-2-icon"></i>
                                Đời mới 2023
                                <span class="menu-item-view menu-item-view-729" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="730" class="nav-link-2" href="dieu-hoa-nhiet-do38ec.html?f=%E2%89%A4-9000-btu">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa 9000BTU
                                <span class="menu-item-view menu-item-view-730" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="731" class="nav-link-2" href="dieu-hoa-nhiet-dobe7b.html?f=%E2%89%A4-12000-btu">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa 12000BTU
                                <span class="menu-item-view menu-item-view-731" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="732" class="nav-link-2"
                                href="dieu-hoa-nhiet-do7632.html?f=1-chieu-inverter&amp;a=9975">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa 1 chiều Inverter
                                <span class="menu-item-view menu-item-view-732" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="733" class="nav-link-2" href="dieu-hoa-nhiet-doc12f.html?f=2-chieu-inverter">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa 2 chiều Inverter
                                <span class="menu-item-view menu-item-view-733" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="734" class="nav-link-2" href="dieu-hoa-nhiet-dofa23.html?p=duoi-7-trieu">
                                <i class="nav-link-2-icon"></i>
                                Điều hòa dưới 7 triệu
                                <span class="menu-item-view menu-item-view-734" style="display:none;"></span>
                              </a>
                            </li>
                            <li class="v-menu-item">
                              <a data-id="897" class="nav-link-2"
                                href="tin-tuc/ho-tro-mua-hang/bang-bao-gia-vat-tu-cong-lap-dat-dieu-hoa.html">
                                <i class="nav-link-2-icon"></i>
                                Phụ kiện điều hòa
                                <span class="menu-item-view menu-item-view-897" style="display:none;"></span>
                              </a>
                            </li>
                          </ul>
                        </li> --}}
                      </ul>
                    </li>
                  @endforeach
                 
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-0">
          <div class="box-nav-promotion">
            <ul class="list-unstyled">
              <li class="v-menu-item">
                <a data-id="779" href="tivi.html" title="Tivi">

                  <span>
                    Tivi </span>

                  <span class="menu-item-view menu-item-view-779" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="787" href="dieu-hoa-nhiet-do.html" title="Điều hòa">

                  <span>
                    <span style='color:#ff0000'>Điều hòa</span> </span>

                  <span class="menu-item-view menu-item-view-787" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="780" href="tu-lanh.html" title="Tủ lạnh">

                  <span>
                    Tủ lạnh </span>

                  <span class="menu-item-view menu-item-view-780" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="783" href="sieu-sale-may-giat-may-say.html" title="Máy giặt, sấy">

                  <span>
                    Máy giặt, sấy </span>

                  <span class="menu-item-view menu-item-view-783" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="899" href="may-loc-nuoc.html" title="Máy lọc nước">

                  <span>
                    Máy lọc nước </span>

                  <span class="menu-item-view menu-item-view-899" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="790" href="binh-tam-nong-lanh.html" title="Bình nóng lạnh">

                  <span>
                    Bình nóng lạnh </span>

                  <span class="menu-item-view menu-item-view-790" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="784" href="laptop.html" title="Laptop">

                  <span>
                    <span style='color:#ff0000'>Laptop</span> </span>

                  <span class="menu-item-view menu-item-view-784" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="791" href="tong-hop-khuyen-mai.html" title="Tổng hợp khuyến mại">

                  <span>
                    <span style='color:#ff0000'>Tổng hợp khuyến mại</span> </span>

                  <span class="menu-item-view menu-item-view-791" style="display:none;"></span>
                </a>

              </li>
              <li class="v-menu-item">
                <a data-id="788" href="noithat.html" title="Nội thất">

                  <span>
                    Nội thất </span>

                  <span class="menu-item-view menu-item-view-788" style="display:none;"></span>
                </a>

              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>