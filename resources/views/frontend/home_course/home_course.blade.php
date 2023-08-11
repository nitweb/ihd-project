@php
    $all_course = App\Models\Course::latest()
        ->take(3)
        ->get();
@endphp

@if (count($all_course) > 0)
    @foreach ($all_course as $course)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-block mb-5 br-10">
                <a href="{{ route('course.details', $course->slug) }}">
                    <img src="{{ asset($course->course_image) }}" alt="{{ $course->course_name }}" class="img-fluid br-10">
                </a>
                <div class="content">
                    <h4 class="mt-4 mb-2 title-color">
                        <a href="{{ route('course.details', $course->slug) }}">{{ $course->course_name }}</a>
                    </h4>
                    <hr>
                    <h6 class="mt-4 mb-2 text-success">Duration: {{ $course->duration }}</h6>
                    <hr>
                    <div class="price d-block justify-content-end">
                        <span class="text-muted"><i class="icofont-taka"></i>{{ $course->course_fee }}</span>
                    </div>
                    <hr>
                    <a href="{{ route('course.details', $course->slug) }}" class="btn btn-main">Details</a>
                </div>
            </div>
        </div>
    @endforeach
@else
@endif
