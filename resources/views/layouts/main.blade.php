<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>
        Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive
        Website Template | Home :: w3layouts
    </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="{{ url('/css/pignose.layerslider.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- //pignose css -->
    <link href="{{ url('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{ url('/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="{{ url('/js/simpleCart.min.js') }}"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ url('/js/bootstrap-3.1.1.min.js') }}"></script>
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link
        href="//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic"
        rel="stylesheet" type="text/css" />
    <script src="{{ url('/js/jquery.easing.min.js') }}"></script>
</head>

<body>
    <!-- header -->
    {{-- <div class="header">
        <div class="container">
            <ul>
                <li>
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery
                </li>
                <li>
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all
                    orders
                </li>
                <li>
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                        href="mailto:info@example.com">info@example.com</a>
                </li>
            </ul>
        </div>
    </div> --}}
    <!-- //header -->
    <!-- header-bot -->
    <div class="header-bot">
        <div class="container">
            <div class="col-md-3 header-left">
                <h1>
                    <a href="index.html"><img
                            src="{{ url('images/pethub_owler_20170315_150503_original.png') }}" /></a>
                </h1>
            </div>
            <div class="col-md-6 header-middle">
                <form>
                    <div class="search">
                        <input type="search" value="T??m ki???m" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'T??m ki???m';}" required="" />
                    </div>
                    <!-- <div class="section_room">
              <select
                id="country"
                onchange="change_country(this.value)"
                class="frm-field required"
              >
                <option value="null">All categories</option>
                <option value="null">Electronics</option>
                <option value="AX">kids Wear</option>
                <option value="AX">Men's Wear</option>
                <option value="AX">Women's Wear</option>
                <option value="AX">Watches</option>
              </select>
            </div> -->
                    <div class="sear-sub">
                        <input type="submit" value=" " />
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 header-right footer-bottom">
                <ul>
                    <li>
                        <a href="/home" class="use1" data-toggle="modal" style="    margin-left: -8rem;"><span
                                style="left: 120px">Login</span></a>
                    </li>
                    <li>
                        <div class="cart box_1" style="height: 3.2rem;
                        width: 4rem;
                        position: absolute;
                        top: 0.7rem;
                        left: 2rem;">
                            <a href="/checkout" style="    height: 100%;
                            width: 100%;">
                                <h3 style="
                                margin-left: 0.5rem;">
                                    <div class="total">
                                        <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    </div>

                                </h3>
                            </a>
                            <p>
                                <a href="javascript:;" class="simpleCart_empty"></a>
                            </p>
                        </div>
                    </li>
                    {{-- <li><a class="fb" href="#"></a></li>
                    <li><a class="twi" href="#"></a></li>
                    <li><a class="insta" href="#"></a></li>
                    <li><a class="you" href="#"></a></li> --}}
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //header-bot -->
    <!-- banner -->
    <div class="ban-top">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list" style="margin-left: 15rem">
                            <li class="active menu__item menu__item--current">
                                <a class="menu__link" href="/">Trang ch??? <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Ch?? <span
                                        class="caret"></span></a>
                                {{-- <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text">
                                            <a href="mens.html"><img src="images/woo1.jpg" alt=" " /></a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Clothing</a></li>
                                                <li><a href="mens.html">Wallets</a></li>
                                                <li><a href="mens.html">Footwear</a></li>
                                                <li><a href="mens.html">Watches</a></li>
                                                <li><a href="mens.html">Accessories</a></li>
                                                <li><a href="mens.html">Bags</a></li>
                                                <li><a href="mens.html">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Jewellery</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Perfumes</a></li>
                                                <li><a href="mens.html">Beauty</a></li>
                                                <li><a href="mens.html">Shirts</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul> --}}
                            </li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">M??o <span
                                        class="caret"></span></a>
                                {{-- <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Clothing</a></li>
                                                <li><a href="womens.html">Wallets</a></li>
                                                <li><a href="womens.html">Footwear</a></li>
                                                <li><a href="womens.html">Watches</a></li>
                                                <li><a href="womens.html">Accessories</a></li>
                                                <li><a href="womens.html">Bags</a></li>
                                                <li><a href="womens.html">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Jewellery</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Perfumes</a></li>
                                                <li><a href="womens.html">Beauty</a></li>
                                                <li><a href="womens.html">Shirts</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img multi-gd-text">
                                            <a href="womens.html"><img src="images/woo.jpg" alt=" " /></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul> --}}
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#">Th???c ??n </a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#">????? ch??i</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#">Li??n h???</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="top_nav_left"></div>
            {{-- <div class="top_nav_right">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3>
                            <div class="total">
                                <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
                                    class="simpleCart_quantity"></span>
                                items)
                            </div>
                        </h3>
                    </a>
                    <p>
                        <a href="javascript:;" class="simpleCart_empty">Empty Cart</a>
                    </p>
                </div>
            </div> --}}
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //banner-top -->
    <!-- banner -->
    @yield('content')
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-left">
                <h2>
                    <a href="index.html"><img style="width: 12rem"
                            src="{{ url('images/pethub_owler_20170315_150503_original.png') }}" alt=" " /></a>
                </h2>

            </div>
            <div class="col-md-9 footer-right">
                <div class="col-sm-6 newsleft">
                    <h3>????ng k?? ????? nh???n b???n tin!</h3>
                </div>
                <div class="col-sm-6 newsright">
                    <form>
                        <input type="text" value="Email" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Email';}" required="" />
                        <input type="submit" value="G???i" />
                    </form>
                </div>
                <div class="clearfix"></div>
                <div class="sign-grds">
                    <div class="col-md-4 sign-gd">
                        <h4>Th??ng tin</h4>
                        <ul>
                            <li><a href="index.html">Trang ch???</a></li>
                            <li><a href="mens.html">Ch??</a></li>
                            <li><a href="womens.html">M??o</a></li>
                            <li><a href="electronics.html">Th???c ??n</a></li>
                            <li><a href="codes.html">????? ch??i</a></li>
                            <li><a href="contact.html">Li??n h???</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 sign-gd-two">
                        <h4>Th??ng tin c???a h??ng</h4>
                        <ul>
                            <li>
                                <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>?????a ch??? : 236b L?? V??n
                                S?? ph?????ng 9 qu???n T??n B??nh <span>TP HCM.</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>S??T : +841234 567 567
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="col-md-4 sign-gd flickr-post">
                        <h4>Flickr Posts</h4>
                        <ul>
                            <li>
                                <a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- //footer -->
    <!-- login -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-bottom">
                                <h3>Sign up for free</h3>
                                <form>
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Type here';}" required="" />
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required="" />
                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required="" />
                                    </div>
                                    <div class="sign-up">
                                        <input type="submit" value="REGISTER NOW" />
                                    </div>
                                </form>
                            </div>
                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                <form>
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Type here';}" required="" />
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required="" />
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="single-bottom">
                                        <input type="checkbox" id="brand" value="" />
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <div class="sign-in">
                                        <input type="submit" value="SIGNIN" />
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>
                            By logging in you agree to our
                            <a href="#">Terms and Conditions</a> and
                            <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
</body>

</html>
