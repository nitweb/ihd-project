<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('frontend/images/authorized_logo.png') }}" alt="" class="img-fluid">
                    </div>
                    <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur
                        veritatis eveniet distinctio possimus.</p>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item">
                            <a href="#"><i class="icofont-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="icofont-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="icofont-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Courses</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        @php
                            $courses = App\Models\Course::latest()
                                ->take(4)
                                ->get();
                        @endphp
                        @foreach ($courses as $course)
                            <li><a href="{{ route('course.details', $course->slug) }}">{{ $course->course_name }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Quick Link</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#!">Terms & Conditions</a></li>
                        <li><a href="#!">Privacy Policy</a></li>
                        <li><a href="#!">Company Support </a></li>
                        <li><a href="#!">FAQ</a></li>
                        <li><a href="#!">Company Licence</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Get in Touch</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <h4 class="mt-2"><a href="mailto:info@ihdbd.org">info@ihdbd.org</a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+8801972123000">+8801 972 123 000</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        Copyright &copy; 2023, Designed &amp; Developed by <a href="https://nebulaitbd.com/">Nebula IT
                            Bangladesh</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop scroll-top-to" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
