@extends('layouts.master')
@section('title', 'Department Management')
@section('content')

    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Departments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Department Management</li>
            </ol>
        </nav>
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
                                <h3>Department Management</h3>
                                <button class="btn btn-round" data-toggle="modal" data-target="#department-add-modal">
                                    <i class="material-icons">add</i>
                                </button>
                            </div>

                        </div>
                        <!--end of content list head-->

                        <div class="table-responsive mt-3">

                            <table id="example" class="stripe" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-left">Department Name</th>
                                        <th class="text-left">Faculty Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-left">Almost before we knew it, we had left the ground.</td>
                                        <td class="text-left">Almost before we knew it, we had left the ground.</td>

                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#department-edit-modal"><span class="ic-dark"><i class="fad fa-pencil"></i></span></a>
                                            <a href="#"><span class="ic-dark"><i class="fad fa-trash-alt"></i></span></a>
                                            <a href="#"><span class="ic-dark"><i class="fad fa-eye"></i></span></a>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th class="text-left">Department Name</th>
                                        <th class="text-left">Faculty Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- end div table responsive -->

                    </div>
                    <!--end of tab-->

                </div>
                <!-- End tab content -->

                <!-- Edit Topic -->
                <form class="modal fade" id="topic-edit-modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title">Edit Topic</h5>
                                <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            <!--end of modal head-->
                            <div class="modal-body">
                                <div class="form-group row align-items-center">
                                    <label class="col-2">Title</label>
                                    <input class="form-control col" type="text" placeholder="Title in English" name="english-title" required />
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-2"></label>
                                    <input class="form-control col" type="text" placeholder="Title in Vietnamese" name="vietnamese-title" required />
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-2"></label>
                                    <input class="form-control col" type="text" placeholder="Initial Title" name="initial-title" required />
                                </div>
                                <div class="form-group row">
                                    <label class="col-2">Description</label>
                                    <textarea class="form-control col" rows="10" placeholder="Write something here..." name="note-description" required ></textarea>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-2">Group</label>
                                    <select name="groups" class="form-control col" required>
                                        <option selected>Group 2</option>
                                        <option>Group 1</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2">Team</label>
                                    <select name="groups" class="form-control col">
                                        <option selected>-- Select One (Optional) --</option>
                                        <option>Team 7</option>
                                        <option>Team 8</option>
                                        <option>Team 9</option>
                                    </select>
                                </div>

                            </div>
                            <!--end of modal body-->
                            <div class="modal-footer">
                                <button role="button" class="btn btn-primary" type="submit">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End Edit Topic -->

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
        // $(document).ready(function() {
        //     $('#example').DataTable({

        //     });
        // });

        $(document).ready(function() {
            var table = $('#example').DataTable({
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

