@extends('layouts.master')
@section('title', 'Announcement Management')
@section('content')

    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Announcements</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Annc. Management</li>
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
                                <h3>Announcement Management</h3>
                            </div>
                        </div>
                        <!--end of content list head-->

                        <div class="table-responsive mt-3">
                            <table id="example" class="stripe" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-left">Title</th>
                                        <th>Privacy</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-left">Almost before we knew it, we had left the ground.</td>
                                        <td><a href="#"><span class="ic-dark"><i class="fad fa-user-friends"></i></span></a></td>
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
                                        <th class="text-left">Title</th>
                                        <th>Privacy</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- end div table responsive -->
                    </div>
                </div>
            </div>
            <!-- end div col -->
        </div>
        <!-- end div row -->
    </div>
    <!-- end div container -->

@endsection

@section('script')
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
                        'targets': 2,
                        'orderable': false
                    },
                    {
                        'targets': 3,
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
@endsection
