@extends('layouts.master')

@section('content')

<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('manage-groups') }}">Groups</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Đợt Capstone 1 MIS 2020</li>
            </ol>
        </nav>

        <div class="dropdown">
            <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="material-icons">settings</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">

                <a class="dropdown-item" href="edit-group.html">Edit Group</a>
                <a class="dropdown-item" href="#">Share</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-chartjs" href="#"><i class="fas fa-lock-alt"></i>Close Group</a>

            </div>
        </div>
    </div>
    <!-- end breadcrumb -->

    <!-- begin a container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">

                <div class="page-header">
                    <h2>Đợt Capstone 1 MIS 2020</h2>
                    <p class="lead">Write something here...</p>
                    <div class="d-flex align-items-center">
                        <ul class="avatars">
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Lý Hiện">
                                    <img alt="Lý Hiện" class="avatar" src="assets/img/avatar-gun.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Ngọc Trinh">
                                    <img alt="Ngọc Trinh" class="avatar" src="assets/img/avatar-ngoc-trinh.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Lý Hiện">
                                    <img alt="Tống Uy Long" class="avatar" src="assets/img/avatar-tong-uy-long.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Lý Hiện">
                                    <img alt="Lý Hiện" class="avatar" src="assets/img/avatar-gun.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Lý Hiện">
                                    <img alt="Sơn Tùng MTP" class="avatar" src="assets/img/avatar-sontung-mtp.jpg" />
                                </a>
                            </li>
                            
                        </ul>
                        <button class="btn btn-round" data-toggle="modal" data-target="#member-add-modal">
                            <i class="material-icons">add</i>
                        </button>
                    </div>
                </div>

                <hr>

                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#projects" role="tab" aria-controls="projects" aria-selected="true">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#members" role="tab" aria-controls="members" aria-selected="false">Members</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="projects" role="tabpanel" data-filter-list="content-list-body">
                        <div class="content-list">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Teams</h3>
                                    <button class="btn btn-round" data-toggle="modal" data-target="#team-new-modal">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                                <form class="col-md-auto">
                                    <div class="input-group input-group-round">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">filter_list</i>
                                            </span>
                                        </div>
                                        <input type="search" class="form-control filter-list-input" placeholder="Filter teams" aria-label="Filter teams">
                                    </div>
                                </form>
                            </div>
                            <!-- end of content list head -->
                            <div class="content-list-body row">
        
                                <div class="col-lg-6">
                                    <div class="card card-project">
            
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
            
                                        <div class="card-body">

                                            <div class="dropdown card-options">
                                                <button class="btn-options" type="button" id="project-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Share</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-chartjs" href="#">Disable Team</a>
                                                </div>
                                            </div>

                                            <div class="card-title">
                                                <a href="#">
                                                    <h5 data-filter-by="text">New Website</h5>
                                                </a>
                                            </div>

                                            <ul class="avatars">

                                                <li>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Lý Hiện">
                                                        <img alt="Lý Hiện" class="avatar" src="assets/img/avatar-gun.jpg" />
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Ngọc Trinh">
                                                        <img alt="Ngọc Trinh" class="avatar" src="assets/img/avatar-ngoc-trinh.jpg" />
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Tống Uy Long">
                                                        <img alt="Tống Uy Long" class="avatar" src="assets/img/avatar-tong-uy-long.jpg" />
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Sơn Tùng MTP">
                                                        <img alt="Sơn Tùng MTP" class="avatar" src="assets/img/avatar-sontung-mtp.jpg" />
                                                    </a>
                                                </li>
                                                
                                            </ul>

                                            <p>Thống kê sẽ đặt chỗ này</p>

                                        </div>
                                    </div>
                                    <!-- end card project -->
                                </div>
                                <!-- end col-lg-6 -->

                                <!-- new card put here -->



                            </div>
                            <!--end of content list body-->
                        </div>
                        <!--end of content list-->
                    </div>
                    <!--end of tab-->

                    <!-- content list member section -->
                    <div class="tab-pane fade" id="members" role="tabpanel" data-filter-list="content-list-body">
                        <div class="content-list">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Members</h3>
                                    <button class="btn btn-round" data-toggle="modal" data-target="#member-add-modal">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                                <form class="col-md-auto">
                                    <div class="input-group input-group-round">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">filter_list</i>
                                            </span>
                                        </div>
                                        <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members">
                                    </div>
                                </form>
                            </div>
                            <!--end of content list head-->
                            <div class="content-list-body row">
        
                                <div class="col-6">
                                    <a class="media media-member" href="#">
                                        <img alt="Tống Uy Long" src="assets/img/avatar-tong-uy-long.jpg" class="avatar avatar-lg" />
                                        <div class="media-body">
                                            <h6 class="mb-0" data-filter-by="text">Tống Uy Long</h6>
                                            <span data-filter-by="text" class="text-body">Administrator</span>
                                        </div>
                                    </a>
                                </div>
            
                                <div class="col-6">
                                    <a class="media media-member" href="#">
                                        <img alt="Lý Hiện" src="assets/img/avatar-gun.jpg" class="avatar avatar-lg" />
                                        <div class="media-body">
                                            <h6 class="mb-0" data-filter-by="text">Lý Hiện</h6>
                                            <span data-filter-by="text" class="text-body">Mentor</span>
                                        </div>
                                    </a>
                                </div>
        
                            
        
                            </div>
                        </div>
                        <!--end of content list-->
                    </div>
                </div>
                
                <!-- Add Member -->
                <form class="modal fade" id="member-add-modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Members</h5>
                                <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            <!--end of modal head-->
                            <div class="modal-body">
                                <div class="form-group row">
                                    <textarea class="form-control col" rows="3" placeholder="Add users by email, each email separated by commas&#10;e.g: matt@example.com, joe@sample.com" name="group-description"></textarea>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-primary"><i class="fad fa-user-plus"></i>Add</button><span> &ensp; or &ensp; </span>
                                        <button type="button" class="btn btn-chartjs"><i class="fad fa-upload"></i>Using CSV</button>
                                    </div>
                                    <div class="d-none d-lg-block col-4 col-lg-5 text-right">
                                            <a href="#"><i class="fad fa-download"></i>Download .CSV Sample</a>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-2">
                                    <div class="d-block d-lg-none d-md-block ml-2">
                                        <a href="#"><i class="fad fa-download"></i>Download .CSV Sample</a>
                                    </div>
                                </div>

                                <hr>
                                <h6>Member info</h6>
                                <div class="row justify-content-center">
                                    <div class="col mt-2">
                                        <ul class="list-inline custom-pointer mb-0">
                                            <li><span class="badge badge-primary check"><i class="fad fa-check"></i>All</span></li>
                                            <li><span class="badge badge-warning uncheck">None</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group input-group-round">
                                            <div class="input-group-prepend">
                                                
                                                <span class="input-group-text">
                                                    <i class="material-icons">filter_list</i>
                                                </span>
                                            </div>
                                            <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-users">
        
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="user-1" checked>
                                        <label class="custom-control-label" for="user-12">
                                            <span class="d-flex align-items-center">
                                                <img alt="Tống Uy Long" src="assets/img/avatar-tong-uy-long.jpg" class="avatar mr-2" />
                                                <span class="h6 mb-0 mr-1" data-filter-by="text">Tống Uy Long</span>
                                                <span class="h6 mb-0 text-secondary" data-filter-by="text">(tonguylong@duytan.edu.vn)</span>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="user-2" checked>
                                        <label class="custom-control-label" for="user-11">
                                            <span class="d-flex align-items-center">
                                                <img alt="Lý Hiện" src="assets/img/avatar-gun.jpg" class="avatar mr-2" />
                                                <span class="h6 mb-0 mr-1" data-filter-by="text">Lý Hiện</span>
                                                <span class="h6 mb-0 text-secondary" data-filter-by="text">(lyhien@gmail.com)</span>

                                            </span>
                                        </label>
                                    </div>

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

                <!-- New Team -->
                <form class="modal fade" id="team-new-modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New Team</h5>
                                <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            <!--end of modal head-->

                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="team-add-details-tab" data-toggle="tab" href="#team-add-details" role="tab" aria-controls="team-add-details" aria-selected="true">Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="team-add-members-tab" data-toggle="tab" href="#team-add-members" role="tab" aria-controls="team-add-members" aria-selected="false">Members</a>
                                </li>
                            </ul>

                            <div class="modal-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="team-add-details" role="tabpanel">
                                        
                                        <h6>General Details</h6>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3">Name</label>
                                            <input class="form-control col" type="text" placeholder="Team name" name="team-name" />
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3">Description</label>
                                            <textarea class="form-control col" rows="3" placeholder="Write something here..." name="team-description"></textarea>
                                        </div>

                                        <hr>

                                        <h6>Timeline</h6>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3">Start Date</label>
                                            <input class="form-control col" type="text" name="project-start" placeholder="Select a date" data-flatpickr data-default-date="2021-04-21" data-alt-input="true" />
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-3">Due Date</label>
                                            <input class="form-control col" type="text" name="project-due" placeholder="Select a date" data-flatpickr data-default-date="2021-09-15" data-alt-input="true" />
                                        </div>
                                        <div class="alert alert-warning text-small" role="alert">
                                            <span>You can change due dates at any time.</span>
                                        </div>

                                        <hr>

                                        <h6>Visibility</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="visibility-everyone" name="visibility" class="custom-control-input" checked>
                                                    <label class="custom-control-label" for="visibility-everyone">Everyone</label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="visibility-members" name="visibility" class="custom-control-input">
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
                                    </div>
                                    <div class="tab-pane fade" id="team-add-members" role="tabpanel">
                                        <div class="users-manage" data-filter-list="form-group-users">
                                            <div class="mb-3">
                                                <ul class="avatars text-center">
                    
                                                    <li>
                                                    <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar" data-toggle="tooltip" data-title="Claire Connors" />
                                                    </li>
                    
                                                    <li>
                                                    <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar" data-toggle="tooltip" data-title="Marcus Simmons" />
                                                    </li>
                    
                                                    <li>
                                                    <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar" data-toggle="tooltip" data-title="Peggy Brown" />
                                                    </li>
                    
                                                    <li>
                                                    <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar" data-toggle="tooltip" data-title="Harry Xai" />
                                                    </li>
                    
                                                </ul>
                                            </div>
                                            <div class="input-group input-group-round">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">filter_list</i>
                                                </span>
                                            </div>
                                            <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members">
                                            </div>
                                            <div class="form-group-users">
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-1" checked>
                                                <label class="custom-control-label" for="project-user-1">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Claire Connors</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-2" checked>
                                                <label class="custom-control-label" for="project-user-2">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Marcus Simmons</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-3" checked>
                                                <label class="custom-control-label" for="project-user-3">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Peggy Brown</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-4" checked>
                                                <label class="custom-control-label" for="project-user-4">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Harry Xai</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-5">
                                                <label class="custom-control-label" for="project-user-5">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Sally Harper" src="assets/img/avatar-female-3.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Sally Harper</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-6">
                                                <label class="custom-control-label" for="project-user-6">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Ravi Singh</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-7">
                                                <label class="custom-control-label" for="project-user-7">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Kristina Van Der Stroem" src="assets/img/avatar-female-4.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Kristina Van Der Stroem</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-8">
                                                <label class="custom-control-label" for="project-user-8">
                                                <span class="d-flex align-items-center">
                                                    <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">David Whittaker</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-9">
                                                <label class="custom-control-label" for="project-user-9">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Kerri-Anne Banks" src="assets/img/avatar-female-5.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Kerri-Anne Banks</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-10">
                                                <label class="custom-control-label" for="project-user-10">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Masimba Sibanda" src="assets/img/avatar-male-5.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Masimba Sibanda</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-11">
                                                <label class="custom-control-label" for="project-user-11">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Krishna Bajaj" src="assets/img/avatar-female-6.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Krishna Bajaj</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="project-user-12">
                                                <label class="custom-control-label" for="project-user-12">
                                                <span class="d-flex align-items-center">
                                                    <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg" class="avatar mr-2" />
                                                    <span class="h6 mb-0" data-filter-by="text">Kenny Tran</span>
                                                </span>
                                                </label>
                                            </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end of modal body-->

                            <div class="modal-footer">
                            <button role="button" class="btn btn-primary" type="submit">
                                Create Project
                            </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end div container -->

</div>
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
$(document).ready(function(){
    $(".check").click(function(){
        $(".custom-control-input").prop("checked", true);
    });
    $(".uncheck").click(function(){
        $(".custom-control-input").prop("checked", false);
    });
});
</script>


@endsection

