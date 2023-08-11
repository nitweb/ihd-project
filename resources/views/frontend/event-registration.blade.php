@extends('frontend.layout.main_master')
@section('user')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize text-lg">Event Registation</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white"><i class="icofont-arrow-right"></i></span>
                            </li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-white-50">{{ $singleEvent->title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form start -->



    <section id="registration" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 mx-auto shadow p-5">
                    <form id="event-form" class="event-form " method="post" action="{{ route('store.event.form') }}"
                        autocomplete="off">
                        @csrf
                        <!-- form message -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your Full Name" required data-parsley-required
                                        data-parsley-error-message="Name is Required">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Your Email Address" required data-parsley-required
                                        data-parsley-error-message="Email is Required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="text" class="form-control"
                                        placeholder="Your Phone Number" required data-parsley-required
                                        data-parsley-error-message="Phone is Required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="event_topic" id="event_topic" class="form-control">
                                        <option selected disabled>Select Your Topic</option>
                                        @foreach ($events as $event)
                                            <option value="{{ $event->title }}"
                                                {{ $event->slug === $singleEvent->slug ? 'selected' : '' }}>{{ $event->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div>
                            <input class="btn btn-main" name="submit" type="submit" value="Registration">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
