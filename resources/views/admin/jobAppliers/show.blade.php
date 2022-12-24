@extends('layouts.admin')

@section('title', 'Job Appliers')


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
                <h4 class="mb-sm-0">Job Appliers</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboards</a></li>
                        <li class="breadcrumb-item active">Job Appliers</li>
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
                    <h4 class="card-title mb-0">Job Appliers List
                    </h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">


                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="data-table">
                                <thead class="table-light">
                                <tr>
                                    <th class="sort" data-sort="Country">#</th>
                                    <th class="sort" data-sort="Country">Job Title</th>
                                    <th class="sort" data-sort="Details">Job Details</th>
                                    <th class="sort" data-sort="Country">Applicant Name</th>
                                    <th class="sort" data-sort="Country">Applicant Email</th>
                                    <th class="sort" data-sort="Country">Applicant Phone</th>
                                    <th class="sort" data-sort="Country">Last Apply Date</th>
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
                                        <td class="institute">{{$item->job->title}}</td>
                                        <td class="logo">
                                            <div class="edit">
                                                <button class="btn btn-sm btn-info edit-item-btn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailsModal{{$item->job->id}}">
                                                    Details
                                                </button>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade zoomIn" id="detailsModal{{$item->job->id}}"
                                                 tabindex="-1"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    id="btn-close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mt-2 text-center">
                                                                <p>{!! $item->job->details  !!}</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end modal -->

                                        </td>
                                        <td class="institute ">{{$item->applicant->name}}</td>
                                        <td class="institute ">{{$item->applicant->email}}</td>
                                        <td class="institute ">{{$item->applicant->phone}}</td>
                                        <td class="institute">{{date('d-m-Y', strtotime($item->job->last_apply_date))}}</td>
                                        <td class="institute">Download</td>
                                        <td class="institute"> <span class="badge badge-soft-success">{{getOrderStatusIdToValue($item->status)}}</span>
                                        <td>
                                            <div class="show">
                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Status
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    @foreach(getOrderStatus() as $key=>$value)
                                                        <a class="dropdown-item" href="/admin/applicant-status-update/{{$item->id}}/{{$key}}">{{$value}}</a>
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
