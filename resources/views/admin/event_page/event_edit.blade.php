@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add Event</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Event</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update.event') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $eventInfo->id }}">
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Event Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $eventInfo->title }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Event Date</label>
                                    <input type="date" name="date" id="date" class="form-control datepicker" value="{{ $eventInfo->date }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Event Time</label>
                                    <input type="text" name="time" id="time" class="form-control" value="{{ $eventInfo->time }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Slider Image</label>
                                    <input type="file" name="event_image" class="form-control" id="event_image" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <img class="img-profile" width="100"
                                            src="{{ !empty($eventInfo->event_image) ? url($eventInfo->event_image) : url('upload/no-image.jpg') }}"
                                            id="show_image" alt="Slider Image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Update Event" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#event_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);

            });
        });
    </script>
@endsection
