@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add Upcoming Course</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Upcoming Course</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update.upcoming-course') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $upcouseInfo->id }}">
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Name</label>
                                    <input type="text" name="course_name" id="course_name" class="form-control"
                                        value="{{ $upcouseInfo->course_name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Duration</label>
                                    <input type="text" name="duration" id="duration" class="form-control"
                                        value="{{ $upcouseInfo->duration }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Date</label>
                                    <input type="date" name="date" id="date" class="form-control datepicker"
                                        value="{{ $upcouseInfo->date }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Day</label>
                                    <input type="text" name="day" class="form-control" id="day" value="{{ $upcouseInfo->day }}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Time</label>
                                    <input type="text" name="time" class="form-control" id="time" value="{{ $upcouseInfo->time }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Update Upcoming Course" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
