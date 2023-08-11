@php
    $all_blog = App\Models\Blog::latest()->get();
@endphp
@extends('frontend.layout.main_master')
@section('meta')
    <title>Blog - Institute of Healthcare Development</title>
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
                        <h1 class="text-capitalize text-lg">Our Blog</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white"><i class="icofont-arrow-right"></i></span>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial">
        <div class="container">
            <div class="row text-center">
                @if (count($all_blog) > 0)
                    @foreach ($all_blog as $blog)
                        <div class="col-lg-4 col-md-4 mb-5">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
                                                class="img-fluid ">
                                        </div>

                                        <div class="blog-item-content">
                                            <div class="blog-item-meta mb-3 mt-4">
                                                <span class="text-muted text-capitalize mr-3"><i
                                                        class="icofont-comment mr-2"></i>5 Comments</span>
                                                <span class="text-black text-capitalize mr-3"><i
                                                        class="icofont-calendar mr-1"></i>
                                                    {{ date('j \\ F Y', strtotime($blog->created_at)) }}
                                                </span>
                                            </div>

                                            <h3 class="mt-3 mb-3 text-justify">
                                                <a href="{{ route('blog.details',$blog->slug)}}"> {{ $blog->title }}</a>
                                            </h3>
                                            @php
                                                $truncated = Str::of($blog->blog_content)->limit(110);
                                            @endphp

                                            <div class="mb-4 text-justify">
                                                {{-- {!! $truncated !!} --}}
                                                {!! Str::of($blog->blog_content)->limit(110) !!}
                                            </div>
                                            <a href="{{ route('blog.details', $blog->slug) }}"
                                                class="btn btn-main btn-icon btn-round-full">Read More </a>
                                        </div>
                                    </div>
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
