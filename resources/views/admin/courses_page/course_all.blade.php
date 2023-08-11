@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">All Course</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Course</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">All Course</h6>
                        <h6 class="m-0 font-weight-bold text-primary">
                            <a href="{{ route('add.course') }}">
                                <button class="btn btn-info">Add Course</button>
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
                                        <th>Course Name</th>
                                        <th>Slug</th>
                                        <th>Duration</th>
                                        <th>Course Fee</th>
                                        <th>Course Image</th>
                                        <th>Course Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Course Name</th>
                                        <th>Slug</th>
                                        <th>Duration</th>
                                        <th>Course Fee</th>
                                        <th>Course Image</th>
                                        <th>Course Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php($i = 1)
                                    @foreach ($allCourses as $course)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $course->course_name }}</td>
                                            <td>{{ $course->slug }}</td>
                                            <td>{{ $course->duration }}</td>
                                            <td>{{ $course->course_fee }}</td>
                                            <td>
                                                <img class="img-profile" width="100"
                                                    src="{{ !empty($course->course_image) ? url($course->course_image) : url('upload/no-image.jpg') }}"
                                                    id="show_image" alt="Profile Image">
                                            </td>
                                            <td>{{ $course->course_des }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('edit.course', $course->id) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i></a>
                                                <a style="margin-left: 5px;" id="delete"
                                                    href="{{ route('delete.course', $course->id) }}" class="btn btn-danger">
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
