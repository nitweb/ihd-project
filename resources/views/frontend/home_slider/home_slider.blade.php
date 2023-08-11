@php
    $all_slider = App\Models\Slider::all();
@endphp

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @if (count($all_slider) > 0)
            @foreach ($all_slider as $slide)
                <div class="swiper-slide">
                    <img src="{{ asset($slide->slider_image) }}" alt="">
                </div>
            @endforeach
        @endif
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
