@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <div class="app-main__inner">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">All About</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;" class="text-light"><i
                                    class="bx bx-home-alt text-light"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">All About</h6>
                        <h6 class="m-0 font-weight-bold text-primary">
                            @if (count($allChoose) > 0)
                            @else
                                <a href="{{ route('add.choose') }}">
                                    <button class="btn btn-info">Add Choose Us</button>
                                </a>
                            @endif
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table style="width: 100%;" id="example"
                                class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Short Info</th>
                                        <th>Video Url</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Short Info</th>
                                        <th>Video Url</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php($i = 1)
                                    @foreach ($allChoose as $choose)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $choose->short_info }}</td>
                                            <td>{{ $choose->video_url }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('edit.choose', $choose->id) }}" class="btn btn-info"><i
                                                        class="fas fa-edit"></i></a> <a style="margin-left: 5px;"
                                                    id="delete" href="{{ route('delete.choose', $choose->id) }}"
                                                    class="btn btn-danger">
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
