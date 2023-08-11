@php
    $all_about = App\Models\About::all();
@endphp

<div class="row">
    @if (count($all_about) > 0)
        @foreach ($all_about as $about)
            <div class="col-lg-6">
                <div class="testimonial-block">
                    <img src="{{ asset($about->about_image) }}" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-justify align-items-center mt-5">
                    {!! $about->short_info !!}
                </div>
            </div>
        @endforeach
    @else
    @endif

</div>
