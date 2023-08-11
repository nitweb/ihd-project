@php
    $all_event = App\Models\Event::latest()
        ->take(3)
        ->get();
@endphp

@if (count($all_event) > 0)
    @foreach ($all_event as $event)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-block mb-5 br-10">
                <img src="{{ asset($event->event_image) }}" alt="{{ $event->title }}" class="img-fluid br-10">
                <div class="content">
                    <h4 class="mt-4 mb-2 title-color">{{ $event->title }}</h4>
                    <span> <i class="icofont-calendar"></i> {{ $event->date }}</span>
                    <span class="fs-3 ml-3"> <i class="icofont-wall-clock"></i> {{ $event->time }}</span><br>
                    <a href="{{ route('event.registration', $event->slug) }}" class="btn btn-main mt-3">Registration</a>
                </div>
            </div>
        </div>
    @endforeach

@endif
