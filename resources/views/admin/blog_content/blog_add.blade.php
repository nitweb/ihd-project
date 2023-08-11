@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add Blog</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store.blog') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off" id="blogForm">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Blog Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Blog Title" required data-parsley-required
                                        data-parsley-error-message="Blog Title is Required">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Blog Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        placeholder="Blog Slug" required data-parsley-required
                                        data-parsley-error-message="Blog Slug is Required">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Blog Category</label>
                                    <select name="category_id" id="category_id" class="form-control" required
                                        data-parsley-required data-parsley-error-message="Category is Required">
                                        <option disabled selected>Select Blog Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Blog Content</label>
                                    <textarea name="blog_content" id="tiny" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 text-secondary">
                                    <label for="">Featured Image</label>
                                    <input type="file" name="featured_image" class="form-control" id="featured_image"
                                        required data-parsley-required
                                        data-parsley-error-message="Featured Image is Required" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <img class="img-profile" width="100" src="{{ url('upload/no-image.jpg') }}"
                                            id="show_image" alt="Profile Image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Add Blog" />
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
            $('#featured_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);

            });
        });
    </script>
    <!-- parsley js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script>
        $('#blogForm').parsley();
    </script>
@endsection
