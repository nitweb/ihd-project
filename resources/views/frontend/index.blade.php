@extends('frontend.layout.main_master')
@section('meta')
    <title>Home - Institute of Healthcare Development</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
@endsection
@section('user')
    <!-- Start Home Slide  -->
    @include('frontend.home_slider.home_slider')
    <!-- End Home Slide  -->
    <section class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="mb-2"> About Us</h2>
                        <div class="divider  my-4 m-auto"></div>
                    </div>
                </div>
            </div>
            @include('frontend.home_about.home_about')
        </div>
    </section>
    <section class="section course gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="mb-2"> Our Courses</h2>
                        <div class="divider  my-4 m-auto"></div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @include('frontend.home_course.home_course')
                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 br-10">
                        <img src="{{ asset('frontend/images/service/service-1.jpg') }}" alt=""
                            class="img-fluid br-10">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">CT scan</h4>
                            <hr>
                            <h6 class="mt-4 mb-2 text-success">Duration: 5 Month</h6>
                            <hr>
                            <div class="course_price d-block justify-content-end">
                                <del><span class="text-muted"><i class="icofont-taka"></i>6000</span></del>
                                <span class="h4 ml-2"><i class="icofont-taka"></i>5000</span>
                            </div>
                            <hr>
                            <a href="{{ route('courses.single') }}" class="btn btn-main">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 br-10">
                        <img src="{{ asset('frontend/images/service/service-2.jpg') }}" alt=""
                            class="img-fluid br-10">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">CT scan</h4>
                            <hr>
                            <h6 class="mt-4 mb-2 text-success">Duration: 5 Month</h6>
                            <hr>
                            <div class="course_price d-block justify-content-end">
                                <del><span class="text-muted"><i class="icofont-taka"></i>6000</span></del>
                                <span class="h4 ml-2"><i class="icofont-taka"></i>5000</span>
                            </div>
                            <hr>
                            <a href="{{ url('/course-single') }}" class="btn btn-main">Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 br-10">
                        <img src="{{ asset('frontend/images/service/service-3.jpg') }}" alt=""
                            class="img-fluid br-10">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">CT scan</h4>
                            <hr>
                            <h6 class="mt-4 mb-2 text-success">Duration: 5 Month</h6>
                            <hr>
                            <div class="course_price d-block justify-content-end">
                                <del><span class="text-muted"><i class="icofont-taka"></i>6000</span></del>
                                <span class="h4 ml-2"><i class="icofont-taka"></i>5000</span>
                            </div>
                            <hr>
                            <a href="{{ url('/course-single') }}" class="btn btn-main">Details</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="section why-choose-us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Why Choose Us</h2>
                        <div class="divider mx-auto my-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @include('frontend.home_choose_us.home_choose_us')
        </div>
    </section>

    <section class="section event gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="mb-2"> Our Event</h2>
                        <div class="divider  my-4 m-auto"></div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @include('frontend.home_event.home_event')
                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 br-10">
                        <img src="{{ asset('frontend/images/event/event-1.jpg') }}" alt="" class="img-fluid br-10">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Event Name</h4>
                            <span> <i class="icofont-calendar"></i> 15 July 2023</span>
                            <span class="fs-3 ml-3"> <i class="icofont-wall-clock"></i> 9 PM - 10 PM</span><br>
                            <a href="#" class="btn btn-main mt-3">Registration</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 br-10">
                        <img src="{{ asset('frontend/images/event/event-2.jpg') }}" alt="" class="img-fluid br-10">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Event Name</h4>
                            <span> <i class="icofont-calendar"></i> 15 July 2023</span>
                            <span class="fs-3 ml-3"> <i class="icofont-wall-clock"></i> 9 PM - 10 PM</span><br>
                            <a href="#" class="btn btn-main mt-3">Registration</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 br-10">
                        <img src="{{ asset('frontend/images/event/event-3.jpg') }}" alt=""
                            class="img-fluid br-10">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Event Name</h4>
                            <span> <i class="icofont-calendar"></i> 15 July 2023</span>
                            <span class="fs-3 ml-3"> <i class="icofont-wall-clock"></i> 9 PM - 10 PM</span><br>
                            <a href="#" class="btn btn-main mt-3">Registration</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="section testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Testimonials</h2>
                        <div class="divider mx-auto my-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">
                    @include('frontend.home_testimonial.testimonial')
                    {{-- <div class="testimonial-block style-2  gray-bg">
                        <i class="icofont-quote-right"></i>

                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb1.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Amazing service!</h4>
                            <span>John Partho</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb2.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Expert doctors!</h4>
                            <span>Mullar Sarth</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb3.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Good Support!</h4>
                            <span>Kolis Mullar</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb4.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Nice Environment!</h4>
                            <span>Partho Sarothi</span>
                            <p class="mt-4">
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb1.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Modern Service!</h4>
                            <span>Kolis Mullar</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
