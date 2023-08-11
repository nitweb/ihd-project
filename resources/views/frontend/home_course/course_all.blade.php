@php
    $all_course = App\Models\Course::get();
@endphp

@if (count($all_course) > 0)
    @foreach ($all_course as $course)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-block mb-5 br-10">
                <img src="{{ asset($course->course_image) }}" alt="" class="img-fluid br-10">
                <div class="content">
                    <h4 class="mt-4 mb-2 title-color">{{ $course->course_name }}</h4>
                    <hr>
                    <h6 class="mt-4 mb-2 text-success">Duration: {{ $course->duration }}</h6>
                    <hr>
                    <div class="price d-block justify-content-end">
                        <span class="text-muted"><i class="icofont-taka"></i>{{ $course->course_fee }}</span>
                    </div>
                    <hr>
                    <a href="#" class="btn btn-main">Details</a>
                </div>
            </div>
        </div>
    @endforeach
@else
@endif
