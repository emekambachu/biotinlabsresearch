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
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
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
                                <i class="fa fa-phone"></i></div>+123 456 7890</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div><a href="mailto:inquiry@biotinlabsresearch.com">
                                inquiry@biotinlabsresearch.com</a></div>
                        <div class="top_bar_contact_item ml-auto"><div class="top_bar_icon"><i class="fa fa-clock-o"></i></div>Working Hours - Mon - Fri: 9:30 - 18:30</div>
                        <div class="top_bar_contact_item">
                            <div class="top_bar_social">
                                <ul class="social-icons">
                                    <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Facebook" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Twitter" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Flickr" tabindex="-1"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Linkedin" tabindex="-1"><i class="fa fa-linkedin"></i></a>
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
                                        <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
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


    <div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">
        <!-- START REVOLUTION SLIDER -->
        <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" data-version="5.4.8">
            <ul>
                <li data-index="rs-6" data-transition="slotzoom-horizontal" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/slides/slider-mainbg-006.jpg') }}"
                         alt=""  data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-105','-105','-114','-74']"

                         data-fontsize="['65','65','60','44']"
                         data-lineheight="['70','70','65','44']"
                         data-fontweight="['700','700','700','700']"
                         data-color="#031b4e"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                         data-start="800"

                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         data-type="text"
                         data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">Proffessional
                    </div>


                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" id="slide-6-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-28','-28','-38','-18']"

                         data-fontsize="['65','65','60','44']"
                         data-lineheight="['70','70','65','44']"
                         data-fontweight="['700','700','700','700']"
                         data-color="#031b4e"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                         data-start="800"

                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         data-type="text"
                         data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">Medical <span class="ttm-textcolor-skincolor">Research </span>
                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" id="slide-6-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','40','30','-520']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['34','34','24','-92']"

                         data-fontsize="['22','22','22','22']"
                         data-lineheight="['28','28','28','28']"
                         data-fontweight="['400','400','400','400']"
                         data-color="#8a91ac"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-transform_idle="o:1;"
                         data-transform_in="y:50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                         data-start="1100"

                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         data-type="text"
                         data-responsive_offset="on">Biotin labs Research is Ulatramodern Laboratory Services
                    </div>

                    <!-- LAYER NR. 4 -->
                    <a href="#" class="tp-caption tp-resizeme ttm-icon ttm-btn-size-md ttm-icon_element-border ttm-icon_element-color-skincolor ttm-icon_element-style-rounded" id="slide-6-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']"  data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','100','67']"

                       data-fontsize="['32','32','32','27']"
                       data-lineheight="['65','65','65','55']"
                       data-width="['65','65','65','55']"
                       data-height="['65','65','65','55']"
                       data-whitespace="nowrap"

                       data-transform_idle="o:1;"
                       data-transform_in="y:[50px];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power3.easeInOut;"
                       data-transform_out="y:[50px];s:300;e:Power3.easeInOut;"
                       data-mask_in="x:0px;y:[100%];"
                       data-mask_out="x:inherit;y:inherit;"
                       data-start="1200"

                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]">

                        <i class="flaticon-placeholder"></i>
                    </a>


                    <!-- LAYER NR. 5 -->
                    <a href="#" class="tp-caption tp-resizeme ttm-icon ttm-btn-size-md ttm-icon_element-border ttm-icon_element-color-skincolor ttm-icon_element-style-rounded" id="slide-6-layer-5" data-x="['left','left','left','left']" data-hoffset="['135','125','115','95']"  data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','100','67']"

                       data-fontsize="['32','32','32','27']"
                       data-lineheight="['65','65','65','55']"
                       data-width="['65','65','65','55']"
                       data-height="['65','65','65','55']"
                       data-whitespace="nowrap"

                       data-transform_idle="o:1;"
                       data-transform_in="y:[50px];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power3.easeInOut;"
                       data-transform_out="y:[50px];s:300;e:Power3.easeInOut;"
                       data-mask_in="x:0px;y:[100%];"
                       data-mask_out="x:inherit;y:inherit;"
                       data-start="1300"

                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]">

                        <i class="flaticon-support"></i>
                    </a>

                    <!-- LAYER NR. 6 -->
                    <a href="#" class="tp-caption tp-resizeme ttm-icon ttm-btn-size-md ttm-icon_element-border ttm-icon_element-color-skincolor ttm-icon_element-style-rounded" id="slide-6-layer-6" data-x="['left','left','left','left']" data-hoffset="['220','210','200','170']"  data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','100','67']"

                       data-fontsize="['32','32','32','27']"
                       data-lineheight="['65','65','65','55']"
                       data-width="['65','65','65','55']"
                       data-height="['65','65','65','55']"
                       data-whitespace="nowrap"

                       data-transform_idle="o:1;"
                       data-transform_in="y:[50px];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power3.easeInOut;"
                       data-transform_out="y:[50px];s:300;e:Power3.easeInOut;"
                       data-mask_in="x:0px;y:[100%];"
                       data-mask_out="x:inherit;y:inherit;"
                       data-start="1400"

                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]">

                        <i class="flaticon-24-hours"></i>
                    </a>


                    <!-- LAYER NR. 7 -->
                    <a href="#" class="tp-caption tp-resizeme ttm-icon ttm-btn-size-md ttm-icon_element-border ttm-icon_element-color-skincolor ttm-icon_element-style-rounded" id="slide-6-layer-7" data-x="['left','left','left','left']" data-hoffset="['305','295','285','245']"  data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','100','67']"

                       data-fontsize="['32','32','32','27']"
                       data-lineheight="['65','65','65','55']"
                       data-width="['65','65','65','55']"
                       data-height="['65','65','65','55']"
                       data-whitespace="nowrap"

                       data-transform_idle="o:1;"
                       data-transform_in="y:[50px];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power3.easeInOut;"
                       data-transform_out="y:[50px];s:300;e:Power3.easeInOut;"
                       data-mask_in="x:0px;y:[100%];"
                       data-mask_out="x:inherit;y:inherit;"
                       data-start="1500"

                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]">

                        <i class="flaticon-laboratory"></i>
                    </a>


                </li>


                <!-- SLIDE  -->
                <li data-index="rs-7" data-transition="slotzoom-horizontal" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/slides/slider-mainbg-005.jpg') }}"
                         alt=""  data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" id="slide-7-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-125','-61']"

                         data-fontsize="['65','65','60','41']"
                         data-lineheight="['70','70','65','41']"
                         data-fontweight="['700','700','700','700']"
                         data-color="#031b4e"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                         data-start="800"

                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         data-type="text"
                         data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">
                        Research & Verify
                    </div>


                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" id="slide-7-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-44','-44','-44','-4']"

                         data-fontsize="['65','65','60','41']"
                         data-lineheight="['70','70','65','41']"
                         data-fontweight="['700','700','700','700']"
                         data-color="#031b4e"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                         data-start="800"

                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         data-type="text"
                         data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">A Medical Research <span class="ttm-textcolor-skincolor">Laboratory</span>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" id="slide-7-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','40','30','-520']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['35','35','35','12']"

                         data-fontsize="['20','20','20','15']"
                         data-lineheight="['30','30','30','22']"
                         data-fontweight="['400','400','400','400']"
                         data-color="#8a91ac"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-transform_idle="o:1;"
                         data-transform_in="y:50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                         data-start="1100"

                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         data-type="text"
                         data-responsive_offset="on">Biotin Labs Research is ultramodern laboratory services. Delivering newer <br>molecules from our sate of the art laboratories
                    </div>

                    <!-- LAYER NR. 4 -->
                    <a class="tp-caption ttm-btn ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="#" target="_self" id="slide-7-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['176','176','89','70']"

                       data-fontsize="['15','15','15','15']"
                       data-lineheight="['20','20','18','18']"
                       data-fontweight="['800','800','800','800']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-transform_idle="o:1;"
                       data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                       data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                       data-start="1400"
                       data-splitin="none"
                       data-splitout="none"

                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[14,14,11,11]"
                       data-paddingright="[35,35,30,30]"
                       data-paddingbottom="[13,13,10,10]"
                       data-paddingleft="[35,35,30,30]"
                       data-type="button"
                       data-responsive_offset="on" >Learn More<i class="ti ti-angle-double-right"></i>
                    </a>

                    <!-- LAYER NR. 5 -->
                    <a class="tp-caption tp-resizeme ttm-icon ttm-btn-size-sm ttm-icon_element-border ttm-icon_element-color-darkgrey ttm-icon_element-style-rounded ttm_prettyphoto" href="https://youtu.be/e13TGGccvT4" target="_self" id="slide-7-layer-5" data-x="['left','left','left','center']" data-hoffset="['258','258','226','0']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['176','176','89','70']"

                       data-fontsize="['15','15','15','15']"
                       data-lineheight="['46','46','38','38']"
                       data-width="['46','46','38','38']"
                       data-height="['46','46','38','38']"
                       data-whitespace="nowrap"

                       data-transform_idle="o:1;"
                       data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                       data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                       data-start="1400"

                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]">

                        <i class="fa fa-play pl-1"></i>
                    </a>


                    <!-- LAYER NR. 6 -->
                    <a class="tp-caption ttm_prettyphoto" href="https://youtu.be/e13TGGccvT4" target="_self" id="slide-7-layer-6" data-x="['left','left','left','left']" data-hoffset="['319','319','278','278']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['192','192','102','80']"

                       data-fontsize="['15','15','15','15']"
                       data-lineheight="['15','15','15','15']"
                       data-fontweight="['800','800','800','800']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-transform_idle="o:1;"
                       data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                       data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                       data-start="1400"

                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]">View Video
                    </a>

                </li>

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->


    <!--site-main start-->
    <div class="site-main">

        <!--introduction-section-->
        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-6 col-lg-5 col-xs-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-30">
                            <img class="img-fluid" src="images/single-img-three.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-xs-12">
                        <div class="pt-5 res-991-pt-0">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>About Us</h5>
                                    <h2 class="title">We Employ The Latest Research Technology & Company</h2>
                                </div>
                                <div class="title-desc">Our scientists and engineers focus their extreme curiosity on national and global security & health related challenges. Learn more about the Laboratory’s R&D work below segment.</div>
                            </div><!-- section title end -->
                            <div class="featuredbox-number">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                            <i class="ttm-num ti-info"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Central Forensic Science</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Forensic science is a discipline that applies scientific analysis to the justice system, help prove the events of crime</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                            <i class="ttm-num ti-info"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Clinical & Medical Laboratory</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Conducts lab tests ordered by doctors. Working with laboratory machines as we examine human tissue samples & diagnose</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                            <i class="ttm-num ti-info"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Analytical & Quality Laboratory</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>The Various techniques that we are used to identifying the chemical makeup and characteristics of a particular samples</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
                <div class="row ttm-boxes-spacing-5px mt-20">
                    <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                        <!-- ttm-fid -->
                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style1">
                            <div class="ttm-fid-icon-wrapper">
                                <i class="ti ti-cup"></i>
                            </div>
                            <div class="ttm-fid-contents">
                                <h4 class="ttm-fid-inner">
                                    <span   data-appear-animation="animateDigits"
                                            data-from="0"
                                            data-to="143"
                                            data-interval="15"
                                            data-before=""
                                            data-before-style="sup"
                                            data-after=""
                                            data-after-style="sub"
                                            class="numinate">143
                                    </span>
                                    <sub>+</sub>
                                </h4>
                                <h3 class="ttm-fid-title">Awards Winning</h3>
                            </div>
                        </div><!-- ttm-fid end -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                        <!-- ttm-fid -->
                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style1">
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon-healthcare-and-medical-1"></i>
                            </div>
                            <div class="ttm-fid-contents">
                                <h4 class="ttm-fid-inner">
                                    <span   data-appear-animation="animateDigits"
                                            data-from="0"
                                            data-to="780"
                                            data-interval="15"
                                            data-before=""
                                            data-before-style="sup"
                                            data-after=""
                                            data-after-style="sub"
                                            class="numinate">780
                                    </span>
                                    <sub>+</sub>
                                </h4>
                                <h3 class="ttm-fid-title">Our Equipments</h3>
                            </div>
                        </div><!-- ttm-fid end -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                        <!-- ttm-fid -->
                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style1">
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon-magnifier"></i>
                            </div>
                            <div class="ttm-fid-contents">
                                <h4 class="ttm-fid-inner">
                                    <span   data-appear-animation="animateDigits"
                                            data-from="0"
                                            data-to="675"
                                            data-interval="15"
                                            data-before=""
                                            data-before-style="sup"
                                            data-after=""
                                            data-after-style="sub"
                                            class="numinate">675
                                    </span>
                                    <sub>+</sub>
                                </h4>
                                <h3 class="ttm-fid-title">Complete Cases</h3>
                            </div>
                        </div><!-- ttm-fid end -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper">
                        <!-- ttm-fid -->
                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style1">
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="ttm-fid-contents">
                                <h4 class="ttm-fid-inner">
                                    <span   data-appear-animation="animateDigits"
                                            data-from="0"
                                            data-to="457"
                                            data-interval="15"
                                            data-before=""
                                            data-before-style="sup"
                                            data-after=""
                                            data-after-style="sub"
                                            class="numinate">457
                                    </span>
                                    <sub>+</sub>
                                </h4>
                                <h3 class="ttm-fid-title">Industry Expertise</h3>
                            </div>
                        </div><!-- ttm-fid end -->
                    </div>
                </div>
            </div>
        </section>
        <!--introduction-section end-->


        <!--features-section-->
        <section class="ttm-row features-section ttm-bgcolor-skincolor bg-img4 ttm-bg ttm-bgimage-yes z-index-1 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content text-center style2">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                    <i class="flaticon-research-8"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>The Introductory step</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>It focuses on issues involving family relationships. Like adoption, divorce, child custody etc.</p>
                                </div>
                            </div>
                            <div class="ttm-di_links">
                                <a href="#" class="di_link">
                                    <i class="ti ti-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-lg-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content text-center style2 active">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                    <i class="flaticon-lab-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>A Safer Health System</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We are expand funding of the research, training, and the education of safe practices as appropriate</p>
                                </div>
                            </div>
                            <div class="ttm-di_links">
                                <a href="#" class="di_link">
                                    <i class="ti ti-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-lg-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content text-center style2">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                    <i class="flaticon-scientist"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Follow NABL regulations</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Autonomous society providing technical competence of testing, accreditation, medical laboratory.</p>
                                </div>
                            </div>
                            <div class="ttm-di_links">
                                <a href="#" class="di_link">
                                    <i class="ti ti-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--features-section end-->


        <!--services-section-->
        <section class="ttm-row services-section ttm-bgcolor-grey bg-img5 ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>OUR SERVICES</h5>
                                <h2 class="title">Explore Our Main Services</h2>
                            </div>
                            <div class="title-desc">Our excellent team is ready to be part of your team to work into the different areas of diagnoses. Scientists helping scientists.</div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-box">
                            <div class="row align-items-center no-gutters">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="mt_5 pb-30">
                                        <h4>We Are Laboratory Technologies</h4>
                                        <p class="pb-10">Our scientists and engineers focus their extreme curiosity on national & health related challenges. Learn more about the Laboratory’s work below segment.</p>
                                        <ul class="ttm-list ttm-list-style-icon">
                                            <li><i class="fa fa-minus"></i><div class="ttm-list-li-content">Analytical Balances and Proper Weighing Practices</div></li>
                                            <li><i class="fa fa-minus"></i><div class="ttm-list-li-content">Solutions for Cannabis Sample Preparation and Analysis</div></li>
                                            <li><i class="fa fa-minus"></i><div class="ttm-list-li-content">Three Steps to Better Reproducibility in Research Labs</div></li>
                                            <li><i class="fa fa-minus"></i><div class="ttm-list-li-content">Analytical Balances and Proper Weighing Practices</div></li>
                                        </ul>
                                        <div class="d-flex align-items-center border-top mt-20 mr-10">
                                            <!--featured-icon-box-->
                                            <div class="featured-icon-box icon-align-before-content pt-20 pr-25">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                        <i class="flaticon-support"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>20 Years</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Of Lab Experience</p>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end-->
                                            <div class="pl-25 border-left">
                                                <!--featured-icon-box-->
                                                <div class="featured-icon-box pt-20">
                                                    <div class="featured-content">
                                                        <div class="featured-desc">
                                                            <p>Call To Ask Any Questions</p>
                                                        </div>
                                                        <div class="featured-title">
                                                            <h5>+123-456-7890</h5>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6">
                                    <!-- ttm_single_image-wrapper -->
                                    <div class="ttm_single_image-wrapper text-right pb-30">
                                        <img class="img-fluid" src="images/single-img-four.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center no-gutters">
                                <div class="col-xl-7 col-lg-6">
                                    <!-- ttm_single_image-wrapper -->
                                    <div class="ttm_single_image-wrapper">
                                        <img class="img-fluid" src="images/single-img-five.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="mt_5 ml_20 res-991-ml-0 res-991-pt-30 res-991-pb-15">
                                        <h4>The Lab Trusted Experts</h4>
                                        <p class="pb-10">We know how to bring the security you need. With an experience in a wide range of fields and devices.</p>
                                        <!-- ttm-progress-bar -->
                                        <div class="ttm-progress-bar" data-percent="78%">
                                            <div class="progressbar-title">Sample Preparation</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                            </div>
                                            <div class="progress-bar-percent" data-percentage="78"></div>
                                        </div><!-- ttm-progress-bar end -->
                                        <!-- ttm-progress-bar -->
                                        <div class="ttm-progress-bar clearfix" data-percent="92%">
                                            <div class="progressbar-title">Environmental Testing</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                            </div>
                                            <div class="progress-bar-percent" data-percentage="92"></div>
                                        </div><!-- ttm-progress-bar end -->
                                        <!-- ttm-progress-bar -->
                                        <div class="ttm-progress-bar clearfix" data-percent="70%">
                                            <div class="progressbar-title">Advanced Microscopy</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                            </div>
                                            <div class="progress-bar-percent" data-percentage="70"></div>
                                        </div><!-- ttm-progress-bar end -->
                                        <!-- ttm-progress-bar -->
                                        <div class="ttm-progress-bar clearfix" data-percent="92%">
                                            <div class="progressbar-title">Environmental Testing</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                            </div>
                                            <div class="progress-bar-percent" data-percentage="92"></div>
                                        </div><!-- ttm-progress-bar end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services-section-->


        <!--portfolio-section-->
        <section class="ttm-row portfolio-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>WHAT WE DO</h5>
                                <h2 class="title">Our Latest Case Studies</h2>
                            </div>
                            <div class="title-desc">Our collaboration projects between the public sector, industry and academia bring a real impact for the our health and lab firms.</div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-tabs tabs-style-01">
                            <ul class="tabs d-md-flex portfolio-filter">
                                <li class="tab active"><a href="#" data-filter="*">All</a></li>
                                <li class="tab"><a href="#" data-filter=".cardiology">Cardiology</a></li>
                                <li class="tab"><a href="#" data-filter=".orthopedics">Orthopedics</a></li>
                                <li class="tab"><a href="#" data-filter=".pharmacy">Pharmacy</a></li>
                                <li class="tab"><a href="#" data-filter=".anestheslology">Anestheslology</a></li>
                                <li class="tab"><a href="#" data-filter=".pediatric">Pediatric</a></li>
                            </ul>
                            <div class="content-tab">
                                <!-- content-inner -->
                                <div class="row multi-columns-row ttm-boxes-spacing-15px isotope-project">
                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 cardiology anestheslology">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view1">
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/01.jpg" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Rehabilitation Center" data-rel="prettyPhoto" href="images/portfolio/04.jpg">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                                    <a href="single-style-1.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                </div>
                                                <div class="ttm-box-view-content-inner">
                                                    <div class="featured-content featured-content-portfolio">
                                                        <div class="featured-title">
                                                            <h5><a href="single-style-1.html">Rehabilitation Center</a></h5>
                                                        </div>
                                                        <span class="category">Cardiology, Anestheslology</span>
                                                    </div>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox -->
                                    </div>
                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 pediatric orthopedics">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view1">
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/02.jpg" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Diagnostic Imagine" data-rel="prettyPhoto" href="images/portfolio/02.jpg">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                                    <a href="single-style-2.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                </div>
                                                <div class="ttm-box-view-content-inner">
                                                    <div class="featured-content featured-content-portfolio">
                                                        <div class="featured-title">
                                                            <h5><a href="single-style-2.html">Diagnostic Imagine</a></h5>
                                                        </div>
                                                        <span class="category">Orthopedics, Pediatric</span>
                                                    </div>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox -->
                                    </div>
                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 pharmacy pediatric orthopedics">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view1">
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/03.jpg" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Orthodontics Surgery" data-rel="prettyPhoto" href="images/portfolio/03.jpg">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                                    <a href="single-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                </div>
                                                <div class="ttm-box-view-content-inner">
                                                    <div class="featured-content featured-content-portfolio">
                                                        <div class="featured-title">
                                                            <h5><a href="single-style-3.html">Orthodontics Surgery</a></h5>
                                                        </div>
                                                        <span class="category">Orthopedics, Pediatric</span>
                                                    </div>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox -->
                                    </div>
                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 cardiology anestheslology">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view1">
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/04.jpg" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Rehabilitation Center" data-rel="prettyPhoto" href="images/portfolio/04.jpg">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                                    <a href="single-style-1.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                </div>
                                                <div class="ttm-box-view-content-inner">
                                                    <div class="featured-content featured-content-portfolio">
                                                        <div class="featured-title">
                                                            <h5><a href="single-style-1.html">Rehabilitation Center</a></h5>
                                                        </div>
                                                        <span class="category">Cardiology, Anestheslology</span>
                                                    </div>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox -->
                                    </div>
                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 pharmacy pediatric orthopedics">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view1">
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/05.jpg" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Blood Pressure Checkup" data-rel="prettyPhoto" href="images/portfolio/05.jpg">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                                    <a href="single-style-2.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                </div>
                                                <div class="ttm-box-view-content-inner">
                                                    <div class="featured-content featured-content-portfolio">
                                                        <div class="featured-title">
                                                            <h5><a href="single-style-2.html">Blood Pressure Checkup</a></h5>
                                                        </div>
                                                        <span class="category">Pediatric, Orthopedics</span>
                                                    </div>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox -->
                                    </div>
                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 cardiology anestheslology">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view1">
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay"><!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/06.jpg" alt="image"></a>
                                                </div><!-- featured-thumbnail end -->
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="Dentures / Partial Dentures" data-rel="prettyPhoto" href="images/portfolio/06.jpg">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                                    <a href="single-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                </div>
                                                <div class="ttm-box-view-content-inner">
                                                    <div class="featured-content featured-content-portfolio">
                                                        <div class="featured-title">
                                                            <h5><a href="single-style-3.html">Dentures / Partial Dentures</a></h5>
                                                        </div>
                                                        <span class="category">Cardiology, Anestheslology</span>
                                                    </div>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-section-->


        <!--testimonial-section-->
        <section class="ttm-row testimonial-section ttm-bgcolor-skincolor bg-img6 ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>TESTIMONALS</h5>
                                <h2 class="title">“Best Clinic Services Provide”</h2>
                            </div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <div class="row slick_slider slick-arrows-style1 mb-60" data-slick='{"slidesToShow": 1, "slidesToScroll": 1 , "dots":false, "arrows":true, "autoplay":true, "infinite":true, "centerMode":false, "responsive": [{"breakpoint":500,"settings":{"slidesToShow": 1}}]}' >

                    <div class="col-lg-7">
                        <!-- testimonials -->
                        <div class="testimonials style2">
                            <div class="testimonial-content">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="images/testimonial/01.jpg" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <blockquote class="testimonial-text"><h5>“Best Clinic Services Provide”</h5> A great place to work because of the opportunities for moving between centres and trying something new within your area of expertise. The laboratory is also an open and flexible workplace & great place to work with.</blockquote>
                                <div class="testimonial-caption">
                                    <h5>ALexanra May Cruz</h5>
                                    <label>CEO At Laboratory</label>
                                </div>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                    <div class="col-lg-7">
                        <!-- testimonials -->
                        <div class="testimonials style2">
                            <div class="testimonial-content">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="images/testimonial/02.jpg" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <blockquote class="testimonial-text"><h5>“Best Clinic Services Provide”</h5> The laboratory is also an open and flexible workplace & great place to work with. The detail is also important, I like to ensure that I always pay attention to detail on anything that I work on. </blockquote>
                                <div class="testimonial-caption">
                                    <h5>ALexanra May Cruz</h5>
                                    <label>CEO At Laboratory</label>
                                </div>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                    <div class="col-lg-7">
                        <!-- testimonials -->
                        <div class="testimonials style2">
                            <div class="testimonial-content">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="images/testimonial/02.jpg" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <blockquote class="testimonial-text"><h5>“Best Clinic Services Provide”</h5> I always pay attention to detail on anything that I work on to make sure, complete the task successfully.With my skill set, knowledge & work ethics I could be a great addition to the team to deliver the best result.</blockquote>
                                <div class="testimonial-caption">
                                    <h5>ALexanra May Cruz</h5>
                                    <label>CEO At Laboratory</label>
                                </div>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial-section-->


        <!--client-section-->
        <div class="ttm-row client-section-4 mt_70 mb_70 z-index-1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-white pl-25 res-991-ml_15">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- slick_slider -->
                                <div class="slick_slider" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true}'>
                                    <div class="client-box">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                            <div class="ttm-client-logo-tooltip-inner">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid" src="images/client/client-01.png" alt="image">
                                                </div>
                                                <div class="client-thumbnail_hover">
                                                    <img src="images/client/hover-client-01.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                            <div class="ttm-client-logo-tooltip-inner">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid" src="images/client/client-02.png" alt="image">
                                                </div>
                                                <div class="client-thumbnail_hover">
                                                    <img src="images/client/hover-client-02.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                            <div class="ttm-client-logo-tooltip-inner">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid" src="images/client/client-03.png" alt="image">
                                                </div>
                                                <div class="client-thumbnail_hover">
                                                    <img src="images/client/hover-client-03.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-04">
                                            <div class="ttm-client-logo-tooltip-inner">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid" src="images/client/client-04.png" alt="image">
                                                </div>
                                                <div class="client-thumbnail_hover">
                                                    <img src="images/client/hover-client-04.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-05">
                                            <div class="ttm-client-logo-tooltip-inner">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid" src="images/client/client-05.png" alt="image">
                                                </div>
                                                <div class="client-thumbnail_hover">
                                                    <img src="images/client/hover-client-05.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-06">
                                            <div class="ttm-client-logo-tooltip-inner">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid" src="images/client/client-06.png" alt="image">
                                                </div>
                                                <div class="client-thumbnail_hover">
                                                    <img src="images/client/hover-client-06.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-07">
                                            <div class="ttm-client-logo-tooltip-inner">
                                                <div class="client-thumbnail">
                                                    <img src="images/client/client-03.png" alt="image">
                                                </div>
                                                <div class="client-thumbnail_hover">
                                                    <img src="images/client/hover-client-03.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- ttm-client end -->
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!--client-section end-->


        <!--technology-section-->
        <section class="ttm-row technology-section bg-img7 bg-layer z-index_1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 ml-auto">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white spacing-7">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h5>A GREAT Technology</h5>
                                        <h2 class="title">We Are The Trusted Experts Lab Technician</h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="accordion clearfix">
                                    <!-- toggle -->
                                    <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">How should i beleive about your services?</a></div>
                                        <div class="toggle-content">
                                            <div class="d-sm-flex align-items-center">
                                                <div class="toggle-figure">
                                                    <img src="images/blog/blog-three-100x95.jpg" alt="image">
                                                </div>
                                                <div class="toggle-text ml-15 res-575-ml-0 res-575-mt-10">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                                            </div>
                                        </div>
                                    </div><!-- toggle end -->
                                    <!-- toggle -->
                                    <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">What are laboratory tests?</a></div>
                                        <div class="toggle-content">
                                            <div class="d-sm-flex align-items-center">
                                                <div class="toggle-figure">
                                                    <img src="{{ asset('images/blog/blog-three-100x95.jpg') }}" alt="image">
                                                </div>
                                                <div class="toggle-text ml-15 res-575-ml-0 res-575-mt-10">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                                            </div>
                                        </div>
                                    </div><!-- toggle end -->
                                    <!-- toggle -->
                                    <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Who performs the testing on laboratory specimens?</a></div>
                                        <div class="toggle-content">
                                            <div class="d-sm-flex align-items-center">
                                                <div class="toggle-figure">
                                                    <img src="{{ asset('images/blog/blog-three-100x95.jpg') }}" alt="image">
                                                </div>
                                                <div class="toggle-text ml-15 res-575-ml-0 res-575-mt-10">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                                            </div>
                                        </div>
                                    </div><!-- toggle end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--technology-section end-->


        <!--blog-section-->
        <section class="ttm-row blog-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>OUR NEWS & BLOG</h5>
                                <h2 class="title">Publish What You Think</h2>
                            </div>
                            <div class="title-desc">Read & get educated & knowledge over versatile laboratory technology.We how else you can help patients without being a doctor.</div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider ttm-boxes-spacing-0px pt-10 pb-10 pl-10 pr-10 box-shadow" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style2">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/blog-one-740x504.jpg') }}" alt="image">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>July 24 2109</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="">Equipping Researchers Lab in the Developing.</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Clinical laboratory tests are taken up for the branch of healthcare deals.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between ttm-post-link">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">Read more!</a>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style2">
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>June 28 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="">Do You Want To Fast Track your Lab Operations</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Given the extremely competitive environment; So, fast track your operation.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between ttm-post-link">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">Read more!</a>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/blog-two-740x504.jpg') }}" alt="image">
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style2">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/blog-three-740x504.jpg') }}" alt="image">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>June 12 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="">Learn: Blood bank operations and management</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Blood bank inventory management identify challenges that are peculiar to banks.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between ttm-post-link">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">Read more!</a>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style2">
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>May 30 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="">Equipping Researchers Lab in the Developing.</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Clinical laboratory tests are taken up for the branch of healthcare deals.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between ttm-post-link">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">Read more!</a>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/blog-four-740x504.jpg') }}"
                                     alt="image">
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style2">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/blog-five-740x504.jpg') }}"
                                     alt="image">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>April 16 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="">Do You Want To Fast Track your Lab Operations</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Given the extremely competitive environment; So, fast track your operation.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between ttm-post-link">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">Read more!</a>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style2">
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>April 20 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="">Learn: Blood bank operations and management</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Blood bank inventory management identify challenges that are peculiar to banks.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between ttm-post-link">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">Read more!</a>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/blog-six-740x504.jpg') }}" alt="image">
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-40 res-991-mt-30 text-center">
                            <strong>Don’t hesitate, contact us for better help and blog. <u><a href="#">Explore all latest News.</a></u></strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog-section end-->


    </div><!--site-main end-->


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
                                        <p>Front Desk: +123-456-7890 & 78</p>
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
                                     src="{{ asset('images/footer-logo.png') }}" alt="">
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
                                    <a href="blog-single.html">
                                        <img src="{{ asset('images/blog/blog-one-100x95.jpg') }}" alt="post-img"></a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>Oct 06, 2019</span>
                                    <a href="blog-single.html">Tests with Nursing Implicat Laboratory Technician</a>
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

<!-- Javascript end-->

</body>

</html>