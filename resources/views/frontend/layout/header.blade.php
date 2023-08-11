<header id="header">
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0 top-contact-section">
                        <li class="list-inline-item"><a href="mailto:info@ihdbd.org "><i
                                    class="icofont-envelope mr-2"></i>info@ihdbd.org </a></li>
                        <li class="list-inline-item">
                            <a href="tel:+8801972123000"> <i class="icofont-phone mr-2"></i>+8801 972 123 000</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul
                        class="top-bar-info list-inline-item pl-0 mb-0 d-flex  justify-content-center justify-content-lg-end justify-content-md-end">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/IHDBD/" target="_blank"><i
                                    class="icofont-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i
                                    class="icofont-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i
                                    class="icofont-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i
                                    class="icofont-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="" class="img-fluid" width="100%">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ \Request::route()->getName() == 'home' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item {{ \Request::route()->getName() == 'about.us' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about.us') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ \Request::route()->getName() == 'courses' ? 'active' : (\Request::route()->getName() == 'course.details' ? 'active' : '') }}">
                        <a class="nav-link" href="{{ route('courses') }}">Courses</a>
                    </li>
                    {{-- <li class="nav-item {{ \Request::route()->getName() == 'courses' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('courses') }}">Courses</a>
                    </li> --}}
                    <li class="nav-item {{ \Request::route()->getName() == 'event-page' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('event-page') }}">Event</a>
                    </li>
                    <li class="nav-item {{ \Request::route()->getName() == 'upcoming.course' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('upcoming.course') }}">Upcoming Course</a>
                    </li>
                    <li class="nav-item {{ \Request::route()->getName() == 'contact.us' ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('contact.us') }}">Contact</a></li>
                    <li class="nav-item {{ \Request::route()->getName() == 'blog' ? 'active' : (\Request::route()->getName() == 'blog.details' ? 'active' : '') }}"><a
                            class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </div>
            <a class="navbar-brand authorize-logo" href="#">
                <img src="{{ asset('frontend/images/right-logo.png') }}" alt="" class="img-fluid"
                    width="100%">
            </a>
        </div>
    </nav>
</header>
