@extends('frontend.layout.main_master')
@section('meta')
    <title>Contact - Institute of Healthcare Development</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
@endsection
<style>
    ul.parsley-errors-list {
        padding: 0;
    }

    li.parsley-custom-error-message {
        color: red;
        list-style: none;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
@section('user')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize text-lg">Contact Us</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white"><i class="icofont-arrow-right"></i></span>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form start -->

    <section class="section contact-info pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-live-support"></i>
                        <h5>Call Us</h5>
                        <a href="tel:+8801972123000">+8801972123000</a><br>
                        <a href="tel:+8801972123000">+8801972123000</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-support-faq"></i>
                        <h5>Email Us</h5>
                        <a href="mailto:info@ihdbd.org">info@ihdbd.org</a><br>
                        <a href="mailto:info@ihdbd.org">contact@ihdbd.org</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-location-pin"></i>
                        <h5>Location</h5>
                        184, Razia Plaza, Senpara Parbata, Rokeya Saroni, Mirpur -10
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="text-md mb-2">Get In Touch</h2>
                        <div class="divider mx-auto my-2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form id="contact-form" class="contact__form " method="post" action="{{ route('store.contact') }}"
                        autocomplete="off">
                        @csrf
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your Full Name" required data-parsley-required
                                        data-parsley-error-message="Name is Required">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Your Email Address" required data-parsley-required
                                        data-parsley-error-message="Email is Required">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="subject" id="subject" type="text" class="form-control"
                                        placeholder="Your Query Topic" required data-parsley-required
                                        data-parsley-error-message="Subject is Required">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="text" class="form-control"
                                        placeholder="Your Phone Number" required data-parsley-required
                                        data-parsley-error-message="Phone is Required">
                                </div>
                            </div>
                        </div>

                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message"></textarea>
                        </div>

                        <div>
                            <input class="btn btn-main" name="submit" type="submit" value="Send Messege">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="google-map ">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3999348939874!2d90.36748207535268!3d23.80437348670219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4e2617d1c7%3A0xff532ff93b2e7dac!2sInstitution%20of%20Healthcare%20Development!5e0!3m2!1sen!2sbd!4v1689677705208!5m2!1sen!2sbd"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <!-- parsley js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script>
        $('#contact-form').parsley();
    </script>
@endsection
