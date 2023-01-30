@extends('layouts.admin')

@section('title', 'DropBox CV List')


@section('content')

    <style>
        .modal-body {

            overflow: auto;
        }

    </style>


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">DropBox</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboards</a></li>
                        <li class="breadcrumb-item active">Applicant CV</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Appliers CV List
                    </h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">


                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="data-table">
                                <thead class="table-light">
                                <tr>
                                    <th class="sort" data-sort="Country">#</th>
                                    <th class="sort" data-sort="Country">Applicant Name</th>
                                    <th class="sort" data-sort="Country">Applicant Email</th>
                                    <th class="sort" data-sort="Country">Applicant Phone</th>
                                    <th class="sort" data-sort="Country">Apply Date</th>
                                    <th class="sort" data-sort="Image">CV</th>
                                    <th class="sort" data-sort="Details">Status</th>
                                    <th class="sort" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list form-check-all">

                                @php($i=1)
                                @foreach($results as $item)
                                    <tr>
                                        <td class="institute">{{$i++}}</td>
                                        <td class="institute ">{{$item->name}}</td>
                                        <td class="institute ">{{$item->email}}</td>
                                        <td class="institute ">{{$item->phone}}</td>
                                        <td class="institute">{{date('d-m-Y', strtotime($item->created_at))}}</td>
                                        <td class="institute"><a href="{{$item->cv}}" download="">Download</a></td>
                                        <td class="institute"> <span class="badge badge-soft-success">{{getOrderStatusIdToValue($item->status)}}</span>
                                        <td>
                                            <div class="show">
                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Status
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    @foreach(getOrderStatus() as $key=>$value)
                                                        <a class="dropdown-item" href="/admin/dropbox-applicant-status-update/{{$item->id}}/{{$key}}">{{$value}}</a>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>


                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


    @push('head')

        <!-- prismjs plugin -->
        <script src="/admin-assets/libs/prismjs/prism.js"></script>
        <script src="/admin-assets/libs/list.js/list.min.js"></script>
        <script src="/admin-assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <!-- listjs init -->
        <script src="/admin-assets/js/pages/listjs.init.js"></script>

    @endpush

@endsection
