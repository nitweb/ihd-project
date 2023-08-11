@php
    $all_upcomingBatch = App\Models\UpcomingBatch::all();
@endphp

@if (count($all_upcomingBatch) > 0)
    @foreach ($all_upcomingBatch as $upcomingBatch)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="service-block mb-5 br-10">
                <img src="images/service/service-1.jpg" alt="" class="img-fluid br-10">
                <div class="content">
                    <h4 class="mt-4 mb-2 title-color">{{ $upcomingBatch->course_name }}</h4>
                    <hr>
                    <h6 class="mt-4 mb-2 text-success">Duration: {{ $upcomingBatch->duration }}</h6>
                    <hr>
                    <div class="course_price d-block justify-content-end">
                        <span class="h6 ml-2"> <i class="icofont-ui-calendar"></i> Date :
                            {{ $upcomingBatch->date }}</span>
                        <hr>
                        <span class="h6 ml-2"> <i class="icofont-sunny-day-temp"></i> Day :
                            {{ $upcomingBatch->day }}</span>
                        <hr>
                        <span class="h6 ml-2"> <i class="icofont-clock-time"></i> Time :
                            {{ $upcomingBatch->time }}</span>
                    </div>
                    <hr>
                    <a href="#" class="btn btn-main">Details</a>
                </div>
            </div>
        </div>
    @endforeach
@else
@endif
