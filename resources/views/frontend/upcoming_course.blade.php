@php
    $all_upcomingBatch = App\Models\UpcomingBatch::all();
@endphp
@extends('frontend.layout.main_master')
@section('meta')
    <title>Upcoming Courses - Institute of Healthcare Development</title>
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
                        <h1 class="text-capitalize text-lg">Upcoming Courses</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white"><i class="icofont-arrow-right"></i></span>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Upcoming Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section upcoming-course">
        <div class="container">
            <div class="row text-center">
                @if (count($all_upcomingBatch) > 0)
                    @foreach ($all_upcomingBatch as $upcomingBatch)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service-block mb-5 br-10">
                                <img src="images/service/service-1.jpg" alt="" class="img-fluid br-10">
                                <div class="content">
                                    <h4 class="mt-4 mb-2 title-color">{{ $upcomingBatch->course_name }}</h4>
                                    <hr>
                                    <h6 class="mt-4 mb-2 text-success">Duration: {{ $upcomingBatch->duration }}</h6>
                                    <hr>
                                    <div class="course_price d-block justify-content-end">
                                        <span class="h6 ml-2"> <i class="icofont-calendar"></i> Date :
                                            {{ $upcomingBatch->date }}</span>
                                        <hr>
                                        <span class="h6 ml-2"> <i class="icofont-sunny-day-temp"></i> Day :
                                            {{ $upcomingBatch->day }}</span>
                                        <hr>
                                        <span class="h6 ml-2"> <i class="icofont-wall-clock"></i> Time :
                                            {{ $upcomingBatch->time }}</span>
                                    </div>
                                    <hr>
                                    <a href="#" class="btn btn-main">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                @endif
            </div>
        </div>
    </section>
@endsection
