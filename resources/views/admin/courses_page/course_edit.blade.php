@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Update Course</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Course</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update.course') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            <input type="text" name="id" value="{{ $courseInfo->id }}">
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Name</label>
                                    <input type="text" name="course_name" id="course_name" class="form-control"
                                        placeholder="Course Name" value="{{ $courseInfo->course_name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        placeholder="Course Slug" value="{{ $courseInfo->slug }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Fee</label>
                                    <input type="text" name="course_fee" class="form-control" id="course_fee"
                                        placeholder="Course Fee" value="{{ $courseInfo->course_fee }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Duration</label>
                                    <input type="text" name="duration" class="form-control" id="duration"
                                        placeholder="Course Duration" value="{{ $courseInfo->duration }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Description</label>
                                    <textarea name="course_des" id="tiny" cols="30" rows="10">
                                        {{ $courseInfo->course_des }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Course Image</label>
                                    <input type="file" name="course_image" class="form-control" id="course_image" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <img class="img-profile" width="100"
                                            src="{{ !empty($courseInfo->course_image) ? url($courseInfo->course_image) : url('upload/no-image.jpg') }}"
                                            id="show_image" alt="Profile Image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Update Course" />
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
            $('#course_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);

            });
        });
    </script>
@endsection
