@extends('admin.admin_dashboard')

@section('admin')
    <div class="app-main__inner">

        <div class="tabs-animation">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div
                        class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">
                                                    <i class="fa-solid fa-graduation-cap"></i>
                                                </small>
                                                <span>{{ count($courses) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">Total Number of Courses</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div
                        class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">
                                                    <i class="fa-regular fa-calendar"></i>
                                                </small>
                                                <span>{{ count($events) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">Total Number of Events</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div
                        class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">
                                                    <i class="metismenu-icon pe-7s-mail"></i>
                                                </small>
                                                <span>{{ count($contactQuery) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">Total Number of Contact Query</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div
                        class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">
                                                    <i class="metismenu-icon pe-7s-users"></i>
                                                </small>
                                                <span>{{ count($registerStudents) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">Total Number of Event Register Student</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                            class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6 metismenu-icon pe-7s-mail"> </i>Contact Query
                    </div>
                </div>
                <div class="card-body">
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactQuery as $key => $query)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $query->name }}</td>
                                    <td>{{ $query->email }}</td>
                                    <td>{{ $query->phone }}</td>
                                    <td>{{ $query->subject }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="app-main__inner">

    </div>
@endsection
