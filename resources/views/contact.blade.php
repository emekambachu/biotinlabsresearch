@extends('layout')

@section('title')
    Contact
@endsection

@section('content')

    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Contact</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ url('/') }}">Home</a>
                                </span>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">

        <section class="ttm-row pt-0 pb-50 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- testimonial-box -->
                        <div class="pt-45 res-991-pt-0 res-991-pb-30">
                            <div class="mb-30">
                                <h4>Our Office Information</h4>
                            </div>
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Location</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>1010 Avenue of the Moon, 12 New York, NY 10018 US.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                            <div class="sep_holder_box width-100 mt-20 mb-20">
                                <span class="sep_holder"><span class="sep_line"></span></span>
                            </div>
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon-call"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Call Us</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>24/7 Support<br>+441675816058</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                            <div class="sep_holder_box width-100 mt-20 mb-20">
                                <span class="sep_holder"><span class="sep_line"></span></span>
                            </div>
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Email</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <a href="mailto:inquiry@biotinlabsresearch.com">inquiry@biotinlabsresearch.com</a>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                            <ul class="social-icons circle social-hover mt-20">
                                <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-white z-index-2 spacing-5 box-shadow">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>GET IN TOUCH</h5>
                                    <h2 class="title">Do not Use This Form To Communicate Personal Data.</h2>
                                </div>
                            </div><!-- section title end -->

                            <form id="ttm-contactform-2" class="ttm-contactform-2 wrap-form clearfix"
                                  method="post" data-route="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="name" type="text" value="" placeholder="Your Name"
                                                       required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="address" type="text" value="" placeholder="Your Email"
                                                       required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="phone" type="text" value="" placeholder="Phone Number"
                                                       required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="phone" type="text" value="" placeholder="Subject"
                                                       required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="text-input">
                                        <textarea name="message" rows="3" placeholder="Message"
                                                  required="required"></textarea></span>
                                </label>
                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>

    </div>

@endsection
