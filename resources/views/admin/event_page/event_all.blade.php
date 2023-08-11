@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">All Event</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Event</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">All Event</h6>
                        <h6 class="m-0 font-weight-bold text-primary">
                            <a href="{{ route('add.event') }}">
                                <button class="btn btn-info">Add Event</button>
                            </a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table style="width: 100%;" id="example"
                                class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Event Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Event Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php($i = 1)
                                    @foreach ($allEvent as $event)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->date }}</td>
                                            <td>{{ $event->time }}</td>
                                            <td>
                                                <img class="img-profile" width="100"
                                                    src="{{ !empty($event->event_image) ? url($event->event_image) : url('upload/no-image.jpg') }}"
                                                    id="show_image" alt="Profile Image">
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.event', $event->id) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i></a>
                                                <a style="margin-left: 5px;" id="delete"
                                                    href="{{ route('delete.event', $event->id) }}" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
