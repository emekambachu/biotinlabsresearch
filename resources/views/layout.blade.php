<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="Biotin Labs Research" />
    <meta name="description" content="Biotin Labs Research" />

    <meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title') - Biotin Laboratories and research </title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('biotinlabs_logoonly.png') }}" />
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>
    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}"/>
    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>
    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/megamenu.css') }}"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.css') }}"/>
</head>

<body>

<!--page start-->
<div class="page">
    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-01">
        <!-- top_bar -->
        <div class="top_bar ttm-bgcolor-skincolor clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 d-flex flex-row align-items-center">
                        <div class="top_bar_contact_item"><div class="top_bar_icon">
                                <i class="fa fa-phone"></i></div>+441675816058</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div><a href="mailto:inquiry@biotinlabsresearch.com">
                                inquiry@biotinlabsresearch.com</a></div>
                        <div class="top_bar_contact_item ml-auto"><div class="top_bar_icon"><i class="fa fa-clock-o"></i></div>Working Hours - Mon - Fri: 9:30 - 18:30</div>
                        <div class="top_bar_contact_item">
                            <div class="top_bar_social">
                                <ul class="social-icons">
                                    <li><a class="tooltip-bottom" target="_blank" href="#"
                                           data-tooltip="Facebook" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a class="tooltip-bottom" target="_blank" href="#"
                                           data-tooltip="Twitter" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a class="tooltip-bottom" target="_blank" href="#"
                                           data-tooltip="Linkedin" tabindex="-1"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- top_bar end-->
        <!-- site-header-menu -->
        <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
            <div class="site-header-menu-inner ttm-stickable-header">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!--site-navigation -->
                            <div class="site-navigation d-flex flex-row">
                                <!-- site-branding -->
                                <div class="site-branding mr-auto">
                                    <a class="home-link" href="{{ url('/') }}" title="Labostica" rel="home">
                                        <img id="logo-img" class="img-center"
                                             src="{{ asset('biotinlabs_logo.png') }}" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu">
                                        <li class="mega-menu-item">
                                            <a href="{{ url('/') }}" class="mega-menu-link">Home</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{ url('about') }}" class="mega-menu-link">About</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{ url('services') }}" class="mega-menu-link">Services</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{ url('contact') }}" class="mega-menu-link">Contact</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{ url('appointment') }}" class="mega-menu-link">Appointment</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                    <div class="header_btn">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-left ttm-btn-color-grey" href="#"> <i class="fa fa-calendar"></i>Appointment</a>
                                        <div id="appointment">
                                            <h3>Keep in touch!</h3>
                                            <form class="wrap-form appointment_form clearfix" method="post" action="#">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-group">
                                                                <span class="text-input">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    <input name="name" type="text" value="" placeholder="Your Name" required="required">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-group">
                                                                <span class="text-input">
                                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                                    <input name="phone" type="tel" value="" placeholder="Phone Number" required="required">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-group">
                                                                <span class="text-input">
                                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                    <input name="email" type="email" value="" placeholder="Email">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group date">
                                                                <span class="text-input">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <input type="text" value="" id="datetimepicker1">
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-group">
                                                                <span class="text-input">
                                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    <input name="Note" type="text" value="" placeholder="Note">
                                                                </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Book appointment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header_cart">
                                        <a href="#" class="button-cart">
                                            <div class="cart_icon"><i class="ti ti-shopping-cart"></i></div>
                                            <div class="cart_count">10</div>
                                        </a>
                                    </div>
                                    <div class="header_search">
                                        <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                        <div class="header_search_content">
                                            <form id="searchbox" method="get" action="#">
                                                <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                                <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-header-menu end-->
    </header><!--header end-->

    @yield('content')

    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="first-footer ttm-bgcolor-skincolor">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                        <div class="featured-icon-box icon-align-before-content style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-mail"></i>
                                </div>
                            </div>

                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Subscribe To Our Newsletter</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Stay in touch with us to get latest news and discount coupons</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 widget-area">
                        <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                            <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                <p><input type="email" name="email" placeholder="Enter Your Email Address..." required=""></p>
                                <p><button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-grey" type="submit">Subscribe Now!</button></p>
                            </div>
                            <div id="subscribe-msg"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <div class="row">
                    <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Address</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>457,Gourandai Los Angeles, USA</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Call Us On</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Front Desk: +441675816058</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-3 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                        <i class="flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Email Us</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p><a href="mailto:inquiry@biotinlabsresearch.com">
                                                inquiry@biotinlabsresearch.com</a></p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="third-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                        <div class="widget widget_text clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center"
                                     src="{{ asset('biotinlabs_logo.png') }}" alt="">
                            </div>
                            <div class="textwidget widget-text">
                                <p class="pb-10 pr-30">A Blue Bowl, premium html5 template is the perfect solution for all kind of laboratories & laboratory based management websites. A complete package for the best online lab services.</p>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-skincolor" href="#" title="">Read More!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Usefull Links</h3>
                            <ul id="menu-footer-quick-links">
                                <li><a href="#">About Company</a></li>
                                <li><a href="#">Scientific</a></li>
                                <li><a href="#">Customer Insights</a></li>
                                <li><a href="#">Chemistry</a></li>
                                <li><a href="#">Free Consultation</a></li>
                                <li><a href="#">Gemological</a></li>
                                <li><a href="#">Meet Our Team</a></li>
                                <li><a href="#">Forensic science</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                        <div class="widget style2 widget-out-link clearfix">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post ttm-recent-post-list pr-5">
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/blog/blog-one-100x95.jpg') }}" alt="post-img"></a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>Oct 06, 2019</span>
                                    <a href="">Tests with Nursing Implicat Laboratory Technician</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/blog/blog-two-100x95.jpg') }}" alt="post-img"></a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>Oct 24, 2019</span>
                                    <a href="">Tests with Nursing Implicat Laboratory Technician</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text">
            <div class="container">
                <div class="row copyright">
                    <div class="col-sm-9">
                        <span>Copyright © {{ date('Y') }} Biotin Lab Research </span>
                    </div>
                    <div class="col-sm-3">
                        <div class="d-flex flex-row align-items-center justify-content-end social-icons">
                            <ul class="social-icons list-inline">
                                <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Linkedin"><i class="ti ti-linkedin"></i></a></li>
                                <li class="social-instagram"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Google"><i class="ti ti-google"></i></a></li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="twitter"><i class="ti ti-twitter-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

<!-- Javascript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('js/jquery-validate.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/numinate.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/jquery-isotope.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('revolution/js/slider.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

@yield('bottom-assets')

<!-- Javascript end-->

</body>

</html>
