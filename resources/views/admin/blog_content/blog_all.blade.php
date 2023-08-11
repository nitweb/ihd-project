@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">All Blog</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">All Blog</h6>
                        <h6 class="m-0 font-weight-bold text-primary">
                            <a href="{{ route('add.blog') }}">
                                <button class="btn btn-info">Add Blog</button>
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
                                        <th>Slug</th>
                                        <th> Categoy</th>
                                        <th> Content</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th> Categoy</th>
                                        <th> Content</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php($i = 1)
                                    @foreach ($allBlog as $blog)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->slug }}</td>
                                            <td>{{ $blog->category_id }}</td>
                                            <td>{{ $blog->blog_content }}</td>
                                            <td>
                                                <img class="img-profile" width="100"
                                                    src="{{ !empty($blog->featured_image) ? url($blog->featured_image) : url('upload/no-image.jpg') }}"
                                                    id="show_image" alt="Profile Image">
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a href="{{ route('edit.blog', $blog->id) }}" class="btn btn-info">
                                                    <i class="fas fa-edit"></i></a>
                                                <a style="margin-left: 5px;" id="delete"
                                                    href="{{ route('delete.blog', $blog->id) }}" class="btn btn-danger">
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
