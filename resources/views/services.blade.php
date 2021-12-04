@extends('layout')

@section('title')
    Services
@endsection

@section('content')

    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Services</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ url('/') }}">Home</a>
                                </span>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">

        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row multi-columns-row ttm-boxes-spacing-15px">
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-services">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset('images/services/services-01.jpg') }}"
                                                  alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="fea_con_left">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-grey ttm-icon_element-size-xs ttm-icon_element-style-round">
                                        <i class="flaticon-flask-3"></i>
                                    </div>
                                </div>
                                <div class="fea_con_right">
                                    <div class="featured-title">
                                        <h5><a href="#">Pathologycam Testing</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>The medical specialty that determines the cause of diseases by examining body tissues.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-services">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset('images/services/services-02.jpg') }}" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="fea_con_left">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-grey ttm-icon_element-size-xs ttm-icon_element-style-round">
                                        <i class="flaticon-lab-5"></i>
                                    </div>
                                </div>
                                <div class="fea_con_right">
                                    <div class="featured-title">
                                        <h5><a href="#">Environmental Testing</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Environmental testing for water, soil, air, sludge, petroleum, chemicals, and other samples</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-services">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset('images/services/services-03.jpg') }}" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="fea_con_left">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-grey ttm-icon_element-size-xs ttm-icon_element-style-round">
                                        <i class="flaticon-microscope-4"></i>
                                    </div>
                                </div>
                                <div class="fea_con_right">
                                    <div class="featured-title">
                                        <h5><a href="#">Anatomical Pathology</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Diagnosing disease through the examiner of tissue samples by using biomedical equipment</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-services">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset('images/services/services-04.jpg') }}" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="fea_con_left">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-grey ttm-icon_element-size-xs ttm-icon_element-style-round">
                                        <i class="flaticon-dna"></i>
                                    </div>
                                </div>
                                <div class="fea_con_right">
                                    <div class="featured-title">
                                        <h5><a href="#">Drug Discovery</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>The service from discovery drives accelerated delivery of your preclinical candidate</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-services">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset('images/services/services-05.jpg') }}" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="fea_con_left">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-grey ttm-icon_element-size-xs ttm-icon_element-style-round">
                                        <i class="flaticon-research-1"></i>
                                    </div>
                                </div>
                                <div class="fea_con_right">
                                    <div class="featured-title">
                                        <h5><a href="#">Medicinal Chemistry</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Solve problems in biology, pharmacology, and medicine, with the ultimate robust result.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-services">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset('images/services/services-06.jpg') }}" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <div class="featured-content">
                                <div class="fea_con_left">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-grey ttm-icon_element-size-xs ttm-icon_element-style-round">
                                        <i class="flaticon-healthcare-and-medical"></i>
                                    </div>
                                </div>
                                <div class="fea_con_right">
                                    <div class="featured-title">
                                        <h5><a href="#">Anatomical Pathology</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Diagnosing disease through the examiner of tissue samples by using biomedical equipment</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
    </div>

@endsection
