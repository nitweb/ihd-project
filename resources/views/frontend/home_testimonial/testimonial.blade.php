@php
    $all_testimonial = App\Models\Testimonial::all();
@endphp

@if (count($all_testimonial) > 0)
    @foreach ($all_testimonial as $testimonial)
        <div class="testimonial-block style-2  gray-bg">
            <i class="icofont-quote-right"></i>

            <div class="testimonial-thumb">
                <img src="{{ asset($testimonial->image) }}" alt="" class="img-fluid">
            </div>

            <div class="client-info ">
                <h4>{{ $testimonial->short_comment }}</h4>
                <span>{{ $testimonial->customer_name }}</span>
                <p>
                    {!! $testimonial->long_comment !!}
                </p>
            </div>
        </div>
    @endforeach
@else
@endif
