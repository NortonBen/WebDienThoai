<!DOCTYPE HTML>
<html>
<head>
    <title>The Fooseshoes Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--- start-mmmenu-script---->
    <script src="{{ asset('site/js/jquery.min.js') }}" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="{{ asset('site/css/jquery.mmenu.all.css') }}"/>
    <script type="text/javascript" src="{{ asset('site/js/jquery.mmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/productviewgallery.js') }}"></script>
    <script type="text/javascript">
        //	The menu on the left
        jQuery(function ($) {
            $('nav#menu-left').mmenu();
        });
    </script>
    <!-- start slider -->
    <link href="{{ asset('site/css/slider.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{ asset('site/js/jquery.eislideshow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/cloud-zoom.1.0.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 3000,
                titlesFactor: 0
            });
        });
    </script>
    <!-- start top_js_button -->
    <script type="text/javascript" src="{{ asset('site/js/move-top.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });
    </script>
    <style>
        a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
<!-- start header -->
<div class="top_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="{{ route('home') }}"><h1 style="font-size: 20px; color: white;">TH-Mobile</h1></a>
            </div>
            <div class="log_reg">
                <ul>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                        <span class="log"> or </span>
                        <li><a href="{{ route('register') }}">Đăng Kí</a></li>
                        <div class="clear"></div>
                    @else
                        <li>{{ Auth::user()->full_name() }}</li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="web_search">
                <form action="{{ route('home') }}">
                    <input type="text" value="" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = '';}">
                    <input type="submit" value=" "/>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- start header_btm -->
<div class="wrap">
    <div class="header_btm">
        <div class="menu">
            <ul>
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                <li><a href="{{ route('product') }}">Sản Phẩm</a></li>
                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div id="smart_nav">
            <a class="navicon" href="#menu-left"> </a>
        </div>
        <nav id="menu-left">
            <ul>
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                <li><a href="{{ route('product') }}">Sản Phẩm</a></li>
                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                <div class="clear"></div>
            </ul>
        </nav>
        <div class="header_right">
            <ul>
                <li><a href="#"><i class="art"></i><span class="color1">30</span></a></li>
                <li><a href="{{ route('cart') }}"><i class="cart"></i><span>{{ Cart::Count() }}</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="top_bg">
    <div class="wrap">
        <div class="main_top">

        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            @yield('content')

        </div>
    </div>
</div>

<!-- start footer -->
<div class="footer_mid">
    <div class="wrap">
        <div class="footer">
            <div class="f_search">
                <form>
                    <input type="text" value="" placeholder="Enter email for newsletter"/>
                    <input type="submit" value=""/>
                </form>
            </div>
            <div class="soc_icons">
                <ul>
                    <li><a class="icon1" href="#"></a></li>
                    <li><a class="icon2" href="#"></a></li>
                    <li><a class="icon3" href="#"></a></li>
                    <li><a class="icon4" href="#"></a></li>
                    <li><a class="icon5" href="#"></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- start footer -->
<div class="footer_bg">
    <div class="wrap">
        <div class="footer">
            <!-- scroll_top_btn -->
            <script type="text/javascript">
                jQuery(document).ready(function ($) {

                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                    };


                    $().UItoTop({easingType: 'easeOutQuart'});

                });
            </script>
            <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
            <!--end scroll_top_btn -->
            <div class="f_nav1">
                <ul>
                    <li><a href="#">home /</a></li>
                    <li><a href="#">support /</a></li>
                    <li><a href="#">Terms and conditions /</a></li>
                    <li><a href="#">Faqs /</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="copy">
                <p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span>
                </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>