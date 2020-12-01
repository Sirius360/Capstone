@extends('layouts.master')
@section('title', 'Group Management')
@section('content')

    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('manage-groups') }}">Groups</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Group Management</li>
            </ol>
        </nav>

        <a href="#"><button class="btn btn-chartjs btn-sm"><i class="far fa-lock-alt"></i>Close All Groups</button></a>
    </div>
    <!-- end breadcrumb -->

    <!-- begin a container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="tasks" role="tabpanel" data-filter-list="card-list-body">
                        <div class="row content-list-head">
                            <div class="col-auto">
                                <h3>Group Management</h3>
                            </div>
                        </div>
                        <!--end of content list head-->

                        <div class="table-responsive mt-3">

                            <table id="example" class="stripe" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-left">Group Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-left">Almost before we knew it, we had left the ground. #6C757D</td>
                                        <td>05/10/2020</td>
                                        <td>05/11/2021</td>
                                        <td><a href="#"><span class="ic-dark"><i class="fad fa-check"></i></span></a></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#group-edit-modal"><span class="ic-dark"><i class="fad fa-pencil"></i></span></a>
                                            <a href="#"><span class="ic-dark"><i class="fad fa-trash-alt"></i></span></a>
                                            <a href="{{ url('admin/group-details') }}"><span class="ic-dark"><i class="fad fa-eye"></i></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="text-left">Almost before we knew it, we had left the ground. #6C757D</td>
                                        <td>05/10/2020</td>
                                        <td>05/11/2021</td>
                                        <td><a href="#"><span class="ic-dark"><i class="fad fa-lock"></i></span></a></td>
                                        <td>
                                            <a href="#"><span class="ic-dark"><i class="fad fa-pencil"></i></span></a>
                                            <a href="#"><span class="ic-dark"><i class="fad fa-trash-alt"></i></span></a>
                                            <a href="#"><span class="ic-dark"><i class="fad fa-eye"></i></span></a>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th class="text-left">Group Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- end div table responsive -->

                        <!-- member -->
                        {{-- <div class="card card-team mb-2">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-body">
                                <div class="dropdown card-options">
                                    <button class="btn-options" type="button" id="..." data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#group-edit-modal">Edit Group</a>
                                        <a class="dropdown-item" href="#">Share</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-chartjs" href="#"><i class="fas fa-lock-alt"></i>Close Group</a>
                                    </div>
                                </div>
                                <div class="card-title">
                                    <a href="{{ url('admin/group-details') }}">
                                        <h5>Đợt Capstone 1 MIS 2020</h5>
                                    </a>
                                    <span>37 Teams, 148 Members</span>
                                </div>
                                <ul class="avatars">
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lý Hiện">
                                            <img alt="Lý Hiện" class="avatar" src="{{ url('assets/img/avatar-gun.jpg') }}" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Ngọc Trinh">
                                            <img alt="Ngọc Trinh" class="avatar" src="{{ url('assets/img/avatar-ngoc-trinh.jpg') }}" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Tống Uy Long">
                                            <img alt="Tống Uy Long" class="avatar" src="{{ url('assets/img/avatar-tong-uy-long.jpg') }}" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Lý Hiện">
                                            <img alt="Lý Hiện" class="avatar" src="{{ url('assets/img/avatar-gun.jpg') }}" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Sơn Tùng MTP">
                                            <img alt="Sơn Tùng MTP" class="avatar" src="{{ url('assets/img/avatar-sontung-mtp.jpg') }}" />
                                        </a>
                                    </li>

                                </ul>
                                <div class="card-meta d-flex justify-content-between mt-2">
                                    <div class="d-flex align-self-end">
                                        <i class="fad fa-calendar"></i>
                                        <span class="text-small">24/08/2020 - 05/12/2020</span>
                                    </div>
                                    <span class="text-small">Due 81 days</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Edit Group -->
                        <form class="modal fade" id="group-edit-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Group</h5>
                                    </div>

                                    <!--end of modal head-->
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="group-create-details-tab" data-toggle="tab" href="#group-create-details" role="tab" aria-controls="group-create-details" aria-selected="true">Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="group-add-members-tab" data-toggle="tab" href="#group-add-members" role="tab" aria-controls="group-add-members" aria-selected="false">Add Member</a>
                                        </li>
                                    </ul>

                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="group-create-details" role="tabpanel">

                                                <h6>General Details</h6>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Name</label>
                                                    <input class="form-control col" type="text" placeholder="Group name" name="group-name" required/>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-3">Description</label>
                                                    <textarea class="form-control col" rows="3" placeholder="Group description" name="group-description"></textarea>
                                                </div>

                                                <hr>

                                                <h6>Timeline</h6>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Start Date</label>
                                                    <input class="form-control col" id="startDate" type="text" name="group-start" placeholder="Select a date" data-alt-input="true" />
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Due Date</label>
                                                    <input class="form-control col" id="dueDate" type="text" name="group-due" placeholder="Select a date" data-alt-input="true" />
                                                </div>

                                                <div class="alert alert-warning text-small" role="alert">
                                                    <span>You can change due dates at any time.</span>
                                                </div>

                                                <hr>

                                                <h6>Visibility</h6>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="visibility-everyone" name="visibility" class="custom-control-input">
                                                            <label class="custom-control-label" for="visibility-everyone">Everyone</label>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="visibility-members" name="visibility" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="visibility-members">Members</label>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="visibility-me" name="visibility" class="custom-control-input">
                                                            <label class="custom-control-label" for="visibility-me">Just me</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <h6>Status</h6>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="status-open" name="status" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="status-open">Open</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="status-close" name="status" class="custom-control-input">
                                                            <label class="custom-control-label" for="status-close">Close</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="group-add-members" role="tabpanel">
                                                <div class="users-manage" data-filter-list="form-group-users">

                                                    <div class="mb-3">

                                                        <div class="form-group row">
                                                            <textarea class="form-control col" rows="3" placeholder="Add users by email, each email separated by commas&#10;e.g: matt@example.com, joe@sample.com" name="group-description"></textarea>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <button type="button" class="btn btn-outline-primary"><i class="fad fa-user-plus"></i>Add</button><span> &ensp; or &ensp; </span>
                                                                <button type="button" class="btn btn-chartjs"><i class="fad fa-upload"></i>Using CSV</button>
                                                            </div>
                                                            <div class="d-none d-md-block col-4 col-lg-5 text-right">
                                                                    <a href="#"><i class="fad fa-download"></i>Download .CSV Sample</a>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center mt-2">
                                                            <div class="d-block d-md-none d-sm-block ml-2">
                                                                <a href="#"><i class="fad fa-download"></i>Download .CSV Sample</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <h6>Member info</h6>
                                                    <div class="row justify-content-center">
                                                        <div class="table-responsive mt-3">

                                                            <table id="popup" class="stripe" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th class="text-left">Full name</th>
                                                                        <th class="text-left">Email</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td class="text-left">Nguyễn Văn Quỳnh</td>
                                                                        <td class="text-left">qnv164@gmail.com</td>
                                                                        <td>
                                                                            <a href="#"><span class="ic-dark"><i class="fad fa-trash-alt"></i></span></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th class="text-left">Full name</th>
                                                                        <th class="text-left">Email</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>

                                                        </div>
                                                        <!-- end div table responsive -->
                                                    </div>
                                                    <!-- end div row -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of modal body-->
                                    <div class="modal-footer justify-content-between">
                                        <button role="button" class="btn btn-outline-primary" type="button">
                                            <i class="fad fa-times"></i>Delete Forever
                                        </button>
                                        <button role="button" class="btn btn-primary" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- end div row -->
            </div>
            <!-- end div col -->
        </div>
        <!-- end div row -->
    </div>
    <!-- end div container -->

@endsection

@section('script')

    <script>
        $("#startDate").flatpickr({
            defaultDate: "today",
        });

        $("#dueDate").flatpickr({
            defaultDate: new Date().fp_incr(91)
        });

    </script>

    <script>

        $(document).ready(function() {
            var table = $('#example').DataTable({
                'columnDefs': [
                    {
                        'targets': 0,
                        'checkboxes': {
                            'selectRow': true
                        }
                    },
                    {
                        'targets': 4,
                        'orderable': false
                    },
                    {
                        'targets': 5,
                        'orderable': false
                    },
                ],
                'select': {
                    'style': 'multi'
                },
                'order': [[1, 'asc']]
            });

        });
    </script>

    <script>

        $(document).ready(function() {
            var table = $('#popup').DataTable({
                'columnDefs': [
                    {
                        'targets': 0,
                        'checkboxes': {
                            'selectRow': true
                        }
                    }
                ],
                'select': {
                    'style': 'multi'
                },
                'order': [[1, 'asc']]
            });

        });
    </script>

@endsection
