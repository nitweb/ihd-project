@extends('frontend.layout.main_master')
@section('meta')
    <title>Course Details - Institute of Healthcare Development</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
@endsection
@section('user')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize text-lg">Course Details</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white"><i class="icofont-arrow-right"></i></span>
                            </li>
                            <li class="list-inline-item"><a href="{{ route('courses') }}" class="text-white">Our Courses</a>
                            </li>
                            <li class="list-inline-item"><span class="text-white"><i class="icofont-arrow-right"></i></span>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-white-50">{{ $courseDetails->course_name }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-8">
                <div class="course-img">
                    <img src="{{ asset($courseDetails->course_image) }}" alt="Course Single" class="img-fluid w-100">
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="text-center">Course Overview</h4>
                    </div>
                    <div class="card-body text-justify">
                        {!! $courseDetails->course_des !!}
                    </div>
                </div>
                {{-- <div class="course-module mt-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="text-center">Course Module</h4>
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-lg-5">
                                    <ul>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                   </ul>
                                </div>
                                <div class="col-lg-5">
                                    <ul>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                        <li class="mb-2"><i class="icofont-ui-check text-success"></i> Course Topic</li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="col-lg-4">
                <div class="card gray-bg text-center mb-3 shadow">
                    <div class="card-body">
                        <h3 class="text-center  text-success">
                            BDT {{ $courseDetails->course_fee }}
                        </h3>
                        <div class="course-details">
                            <p>Prerequisite: <span class="">MBBS</span></p>
                            <p>Duration: <span class="">{{ $courseDetails->duration }}</span></p>
                            <p>Student Seat: <span class="">20</span></p>
                        </div>

                        <hr>
                        <a href="#" class="btn btn-main align-center">Get Admission</a>
                    </div>
                </div>
                <div class="list-group shadow">

                    @foreach ($courses as $course)
                        <a href="{{ route('course.details', $course->slug) }}"
                            class="list-group-item list-group-item-action {{ $course->course_name == $courseDetails->course_name ? 'active' : '' }}">
                            {{ $course->course_name }}
                        </a>
                    @endforeach


                    {{--
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a>
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a>
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a>
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a>
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a>
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a>
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a>
                    <a href="#" class="list-group-item list-group-item-action">Course Name</a> --}}


                </div>

            </div>
        </div>
    </div>
    <section class="section related_course">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-5">
                    <h3>Related Course</h3>
                    <div class="divider mx-auto my-2"></div>
                </div>
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
                            <a href="{{ url('/course-single') }}" class="btn btn-main">Details</a>
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
                @include('frontend.home_course.home_course')
            </div>
        </div>
    </section>
@endsection
