@extends('frontend.layout.main_master')
@section('meta')
    <title>About - Institute of Healthcare Development</title>
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
                        <h1 class="text-capitalize text-lg">About Us</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white"><i class="icofont-arrow-right"></i></span>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About start -->

    <section class="section about">
        <div class="container">
            @include('frontend.home_about.home_about')
        </div>
    </section>

    <section class="section why-choose-us gray-bg">
        <div class="container">
            @include('frontend.home_choose_us.home_choose_us')
        </div>
    </section>

    <section class="section testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">
                    @include('frontend.home_testimonial.testimonial')
                    </ </div>
                </div>
            </div>
        </div>
    </section>
@endsection
