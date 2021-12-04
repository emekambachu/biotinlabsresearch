@extends('layout')

@section('title')
    About
@endsection

@section('content')

    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">About Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ url('/') }}">Home</a>
                                </span>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">

        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-xs-12 order-1">
                        <div class="mb-25 pt-50 mr_40 res-991-pt-0 res-991-mr-0">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>About Us</h5>
                                    <h2 class="title">We Employ The Latest Research Technology &amp; Company</h2>
                                </div>
                                <div class="title-desc"> well-established experience in epitomizing good laboratory medicine practices &amp; treating the patients with utmost diligence.Scientists helping scientists.</div>
                            </div><!-- section title end -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-before-heading">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon-lab-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Medical laboratory<br>Technician</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Equipped &amp; trained to work in hospitals, diagnostic labs &amp; healthcares</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-before-heading">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon-dna"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5> NABL Certificate <br>Management</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>NABL&nbsp;is an autonomous society providing recognition of Technical competence.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-15">
                                        <p>Paramedical healthcare field attracts to save lives &amp; helping people, being a doctor is not your only choice. We how else you can help patients without being a doctor, here we serving awesome opportunity.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-skincolor mt-15" href="{{ url('services') }}">More Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-xs-1 order-lg-2 order-md-3 order-3">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box style1 icon-align-top-content ttm-bgcolor-skincolor">
                            <div class="featured-icon-box-inner-1">
                                <div class="featured-icon-box-inner-2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                            <i class="flaticon-healthcare-and-medical"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>45 Years</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Experiance Of Laboratory</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-xl-5 col-lg-5 col-xs-12 order-sm-2 order-md-2 order-2">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white pt-10 pl-10 pr-10 pb-10 z-index-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper text-center">
                                    <img class="img-fluid" src="{{ asset('images/single-img-one.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>

        <section class="ttm-row services-section-2 bg-layer-equal-height ttm-bgcolor-grey bg-img5 ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-6 col-lg-6">
                        <div class="ttm-bgcolor-white pl-50 pt-50 pb-50 pr-50 res-991-pl-15 res-991-pr-15 res-991-pt-30 res-991-pb-40">
                            <h4>We Are The Trusted Experts Latest Laboratory Technologies.</h4>
                            <p class="pb-10">Our scientists and engineers focus their extreme curiosity on national and global security &amp; health related challenges. Learn more about the Laboratory’s work below segment.</p>
                            <!-- ttm-progress-bar -->
                            <div class="ttm-progress-bar" data-percent="88%">
                                <div class="progressbar-title">Sample Preparation</div>
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor" style="width: 88%;"></div>
                                </div>
                                <div class="progress-bar-percent" data-percentage="88">88%</div>
                            </div><!-- ttm-progress-bar end -->
                            <!-- ttm-progress-bar -->
                            <div class="ttm-progress-bar clearfix" data-percent="96%">
                                <div class="progressbar-title">Environmental Testing</div>
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor" style="width: 96%;"></div>
                                </div>
                                <div class="progress-bar-percent" data-percentage="96">96%</div>
                            </div><!-- ttm-progress-bar end -->
                            <!-- ttm-progress-bar -->
                            <div class="ttm-progress-bar clearfix" data-percent="90%">
                                <div class="progressbar-title">Advanced Microscopy</div>
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor" style="width: 90%;"></div>
                                </div>
                                <div class="progress-bar-percent" data-percentage="90">90%</div>
                            </div><!-- ttm-progress-bar end -->
                            <!-- ttm-progress-bar -->
                            <div class="ttm-progress-bar clearfix" data-percent="90%">
                                <div class="progressbar-title">Advanced Microscopy</div>
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor" style="width: 90%;"></div>
                                </div>
                                <div class="progress-bar-percent" data-percentage="90">90%</div>
                            </div><!-- ttm-progress-bar end -->
                        </div>
                        <div class="ttm-bgcolor-skincolor pt-15 pl-50 pb-10 mb-50 res-991-pl-15">
                            <h4 class="mb-5"> High Technology Laboratory solutions</h4>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="ttm-bgcolor-white">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- ttm_single_image-wrapper -->
                                    <div class="ttm_single_image-wrapper mt-50 mb_50 mr_150 res-991-mr-15 res-991-mt-0 z-index-2 position-relative">
                                        <img class="img-fluid" src="{{ asset('images/single-img-eight.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor pt-50 pr-50 mb-50 ml_150">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--features-section-->
        <section class="ttm-row services-section ttm-bgcolor-skincolor bg-img8 ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container"><!--container-->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>OUR SPECIALTIES</h5>
                                <h2 class="title">Why Choose Us</h2>
                            </div>
                            <div class="title-desc">Our excellent team is ready to be part of your team to work into the different areas of diagnoses. Scientists helping scientists.</div>
                        </div><!-- section-title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style5">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg ttm-icon_element-style-round">
                                    <i class="flaticon-lab"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>High<br>Quality Services</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style5">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg ttm-icon_element-style-round">
                                    <i class="flaticon-laboratory-3"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Fast<br>Working Process</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style5">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg ttm-icon_element-style-round">
                                    <i class="flaticon-24-hours"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>24/7<br>Customer Support</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style5">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg ttm-icon_element-style-round">
                                    <i class="flaticon-scientist-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Expert<br>Lab technician Team</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div>
            </div>
        </section>
        <!--features-section-->

        <!--fid-section-->
        <div class="ttm-row fid-section mt_80 res-991-mt-0 z-index-1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style2">
                                            <div class="ttm-fid-icon-wrapper ttm-textcolor-skincolor">
                                                <i class="ti ti-cup"></i>
                                            </div>
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="143" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate completed">143</span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="ttm-fid-title">Awards Winning</h3>
                                            </div>
                                        </div><!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style2">
                                            <div class="ttm-fid-icon-wrapper ttm-textcolor-skincolor">
                                                <i class="flaticon-healthcare-and-medical-1"></i>
                                            </div>
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="780" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate completed">780</span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="ttm-fid-title">Our Equipments</h3>
                                            </div>
                                        </div><!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style2">
                                            <div class="ttm-fid-icon-wrapper ttm-textcolor-skincolor">
                                                <i class="flaticon-magnifier"></i>
                                            </div>
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="675" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate completed">675</span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="ttm-fid-title">Complete Cases</h3>
                                            </div>
                                        </div><!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style2">
                                            <div class="ttm-fid-icon-wrapper ttm-textcolor-skincolor">
                                                <i class="flaticon-support"></i>
                                            </div>
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="457" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate completed">457</span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="ttm-fid-title">Industry Expertise</h3>
                                            </div>
                                        </div><!-- ttm-fid end -->
                                    </div>
                                </div><!-- row end -->
                            </div><!-- ttm-client end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fid-section end-->

        <!--procedure-section-->
        <section class="ttm-row procedure-section-2 ttm-bgcolor-grey bg-img9 ttm-bg ttm-bgimage-yes z-index_1 mt_100 res-991-mt-0 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>OUR SERVICES</h5>
                                <h2 class="title">Our Working Process</h2>
                            </div>
                            <div class="title-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev</div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <div class="row"><!-- row -->
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content text-center style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                    <i class="flaticon-lab-2"></i>
                                    <span class="fea-number">01</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Data Collection</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>For the accurate diagnoses, perfect information is must require</p>
                                </div>
                            </div>
                            <div class="arrow">
                                <img src="{{ asset('images/arrow-1.png') }}" alt="">
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content text-center style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                    <i class="flaticon-healthcare-and-medical-1"></i>
                                    <span class="fea-number">02</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Diagnose Process</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>The collection goes to the particular department for the tests</p>
                                </div>
                            </div>
                            <div class="arrow flip-arrow">
                                <img src="{{ asset('images/arrow-2.png') }}" alt="">
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content text-center style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                    <i class="flaticon-laboratory-3"></i>
                                    <span class="fea-number">03</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Access To Reports</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>As a result, that arrive one can access their report online or direct  </p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div>
            </div>
        </section>
        <!--procedure-section end-->

    </div>

@endsection
