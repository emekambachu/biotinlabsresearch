@extends('layout')

@section('title')
    Appointment
@endsection

@section('content')

    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Appointment</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ url('/') }}">Home</a>
                                </span>
                            <span>Appointment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">

        <section class="ttm-row broken-section-2 bg-layer bg-layer-equal-height clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-left-span">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content"></div>
                            <img src="{{ asset('images/bg-image/col-bgimage-2.jpg') }}"
                                 class="ttm-equal-height-image" alt="bg-image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-bg ttm-right-span spacing-3 z-index-2 res-1199-pr-15">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="ttm-col-bgcolor-yes ttm-bgcolor-white ttm-col-bgimage-yes col-bg-img-six ttm-bg ttm-right-span spacing-8">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                    </div>
                                    <div class="layer-content">
                                        <!-- section-title -->
                                        <div class="section-title pr-20">
                                            <div class="title-header">
                                                <h5>READY TO HELP</h5>
                                                <h2 class="title">
                                                    Let us help you get the right lab technician</h2>
                                            </div>
                                        </div><!-- section-title end -->

                                        <form id="ttm-contactform-1"
                                              class="contact-form ttm-contactform-1 wrap-form clearfix"
                                              method="post" data-route="{{ route('appointment.submit') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>
                                                    <span class="text-input">
                                                        <input name="name" type="text" value=""
                                                               placeholder="Your Name" required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>
                                                    <span class="text-input">
                                                        <input name="email" type="email" value=""
                                                               placeholder="Your Email" required="required"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>
                                                    <span class="text-input">
                                                    <input name="mobile" type="tel" placeholder="Phone Number"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>
                                                    <span class="text-input">
                                                        <input name="subject" type="text" value="" placeholder="Subject"
                                                               required="required">
                                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>
                                                    <span class="text-input">
                                                        <input name="date" type="date" placeholder="Date">
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>
                                                    <span class="text-input">
                                                        <input name="time" type="time" placeholder="Time">
                                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <label>
                                                <span class="text-input">
                                                <textarea name="description" rows="5" placeholder="Description"
                                                          required="required"></textarea>
                                                </span>
                                            </label>
                                            <button id="submit-contact-btn" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Submit</button>
                                        </form>
                                        <div id="form-message"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>

    </div>
@endsection

@section('bottom-assets')
    <script src="{{ asset('js/submissions.js') }}"></script>
@endsection
