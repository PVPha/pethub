@extends('layouts.main')
@section('content')
    <div class="banner-grid">
        <div id="visual">
            <div class="slide-visual">
                <!-- Slide Image Area (1000 x 424) -->
                <ul class="slide-group">
                    <li>
                        <img class="img-responsive" src="images/karsten-winegeart-5PVXkqt2s9k-unsplash.jpg" alt="Dummy Image"
                            width="1000" height="400" />
                    </li>
                    <li>
                        <img class="img-responsive" src="images/manja-vitolic-gKXKBY-C-Dk-unsplash.jpg" alt="Dummy Image"
                            width="1000" height="400" />
                    </li>
                    <li>
                        <img class="img-responsive" src="images/yan-laurichesse-3qZnN_M45Ds-unsplash.jpg" alt="Dummy Image"
                            width="1000" height="400" />
                    </li>
                </ul>

                <!-- Slide Description Image Area (316 x 328) -->
                <!-- <div class="script-wrap">
                                                                                                                        <ul class="script-group">
                                                                                                                          <li>
                                                                                                                            <div class="inner-script">
                                                                                                                              <img
                                                                                                                                class="img-responsive"
                                                                                                                                src="images/karsten-winegeart-5PVXkqt2s9k-unsplash.jpg"
                                                                                                                                alt="Dummy Image"
                                                                                                                              />
                                                                                                                            </div>
                                                                                                                          </li>
                                                                                                                          <li>
                                                                                                                            <div class="inner-script">
                                                                                                                              <img
                                                                                                                                class="img-responsive"
                                                                                                                                src="images/baa2.jpg"
                                                                                                                                alt="Dummy Image"
                                                                                                                              />
                                                                                                                            </div>
                                                                                                                          </li>
                                                                                                                          <li>
                                                                                                                            <div class="inner-script">
                                                                                                                              <img
                                                                                                                                class="img-responsive"
                                                                                                                                src="images/baa3.jpg"
                                                                                                                                alt="Dummy Image"
                                                                                                                              />
                                                                                                                            </div>
                                                                                                                          </li>
                                                                                                                        </ul>
                                                                                                                        <div class="slide-controller">
                                                                                                                          <a href="#" class="btn-prev"
                                                                                                                            ><img src="images/btn_prev.png" alt="Prev Slide"
                                                                                                                          /></a>
                                                                                                                          <a href="#" class="btn-play"
                                                                                                                            ><img src="images/btn_play.png" alt="Start Slide"
                                                                                                                          /></a>
                                                                                                                          <a href="#" class="btn-pause"
                                                                                                                            ><img src="images/btn_pause.png" alt="Pause Slide"
                                                                                                                          /></a>
                                                                                                                          <a href="#" class="btn-next"
                                                                                                                            ><img src="images/btn_next.png" alt="Next Slide"
                                                                                                                          /></a>
                                                                                                                        </div>
                                                                                                                      </div> -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script type="text/javascript" src="js/pignose.layerslider.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() {
                $("#visual").pignoseLayerSlider({
                    play: ".btn-play",
                    pause: ".btn-pause",
                    next: ".btn-next",
                    prev: ".btn-prev",
                });
            });
            //]]>
        </script>
    </div>
    <!-- //banner -->
    <!-- content -->

    <div class="product-easy">
        <div class="container">
            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#horizontalTab").easyResponsiveTabs({
                        type: "default", //Types: default, vertical, accordion
                        width: "auto", //auto or any width like 600px
                        fit: true, // 100% fit in a container
                    });
                });
            </script>
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                            <span>Chó</span>
                        </li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">
                            <span>Mèo</span>
                        </li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">
                            <span>Thức ăn</span>
                        </li>
                        <li class="resp-tab-item" aria-controls="tab_item-3" role="tab">
                            <span>Đồ chơi</span>
                        </li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            @foreach ($dataDogs as $item)
                                <div class="col-md-3 product-men" style="margin-top: 1.9rem">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div style="height: 15.5rem">
                                            <img src="{{ url('images') . '/' . $item->img }}" alt=""
                                                class="img-fluid pro-image-front" style="object-fit: cover; height: 100%" />
                                        </div>

                                        <div class="item-info-product">
                                            <h4><a href="{{ url('pets/' . $item->id) }}">{{ $item->name }}</a></h4>
                                            <div class="info-product-price">
                                                <span class="item_price">{{ $item->price }} VNĐ</span>
                                                {{-- <del>$69.71</del> --}}
                                            </div>
                                            <a href="{{ url('pets/' . $item->id) }}"
                                                class="item_add single-item hvr-outline-out button2">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                            @foreach ($dataCats as $item)
                                <div class="col-md-3 product-men" style="margin-top: 1.9rem">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div style="height: 15.5rem">
                                            <img src="{{ url('images') . '/' . $item->img }}" alt=""
                                                class="img-fluid pro-image-front" style="object-fit: cover; height: 100%" />
                                        </div>

                                        <div class="item-info-product">
                                            <h4><a href="{{ url('pets/' . $item->id) }}">{{ $item->name }}</a></h4>
                                            <div class="info-product-price">
                                                <span class="item_price">{{ $item->price }} VNĐ</span>
                                                {{-- <del>$69.71</del> --}}
                                            </div>
                                            <a href="{{ url('pets/' . $item->id) }}"
                                                class="item_add single-item hvr-outline-out button2">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                            @foreach ($dataFoods as $item)
                                <div class="col-md-3 product-men" style="margin-top: 1.9rem">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div style="height: 15.5rem">
                                            <img src="{{ url('images') . '/' . $item->img }}" alt=""
                                                class="img-fluid pro-image-front" style="object-fit: cover; height: 100%" />
                                        </div>

                                        <div class="item-info-product">
                                            <h4><a href="{{ url('supplies/' . $item->id) }}">{{ $item->name }}</a>
                                            </h4>
                                            <div class="info-product-price">
                                                <span class="item_price">{{ $item->price }}VNĐ</span>
                                                {{-- <del>$69.71</del> --}}
                                            </div>
                                            <a href="{{ url('supplies/' . $item->id) }}"
                                                class="item_add single-item hvr-outline-out button2">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                            @foreach ($dataToys as $item)
                                <div class="col-md-3 product-men" style="margin-top: 1.9rem">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div style="height: 15.5rem">
                                            <img src="{{ url('images') . '/' . $item->img }}" alt=""
                                                class="img-fluid pro-image-front" style="object-fit: cover; height: 100%" />
                                        </div>

                                        <div class="item-info-product">
                                            <h4><a href="{{ url('pets/' . $item->id) }}">{{ $item->name }}</a></h4>
                                            <div class="info-product-price">
                                                <span class="item_price">{{ $item->price }}VNĐ</span>
                                                {{-- <del>$69.71</del> --}}
                                            </div>
                                            <a href="{{ url('supplies/' . $item->id) }}"
                                                class="item_add single-item hvr-outline-out button2">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //product-nav -->

    {{-- <div class="coupons">
    <div class="container">
        <div class="coupons-grids text-center">
            <div class="col-md-3 coupons-gd">
                <h3>Buy your product in a simple way</h3>
            </div>
            <div class="col-md-3 coupons-gd">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <h4>LOGIN TO YOUR ACCOUNT</h4>
                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                    consectetur.
                </p>
            </div>
            <div class="col-md-3 coupons-gd">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                <h4>SELECT YOUR ITEM</h4>
                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                    consectetur.
                </p>
            </div>
            <div class="col-md-3 coupons-gd">
                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                <h4>MAKE PAYMENT</h4>
                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                    consectetur.
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div> --}}
@endsection
