@php
    $all_choose = App\Models\chooseUs::all();
@endphp


<div class="row align-items-center">
    @if (count($all_choose) > 0)
        @foreach ($all_choose as $choose)
            <div class="col-lg-6 align-items-center text-justify">
                {!! $choose->short_info !!}
            </div>
            <div class="col-lg-6">
                <iframe width="560" height="315" src="{{ asset($choose->video_url) }}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        @endforeach
    @else
    @endif
</div>
