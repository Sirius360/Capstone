@extends('layouts.layouts')

@section('content')
<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="index.html">Topics</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Pending Topics</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->

    <!-- begin a container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">

                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="tasks" role="tabpanel" data-filter-list="card-list-body">
                        <div class="row content-list-head">
                            <div class="col-auto">
                                <h3>Pending Topics</h3>
                            </div>
                            <form class="col-md-auto">
                                <div class="input-group input-group-round">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">filter_list</i>
                                        </span>
                                    </div>
                                    <input type="search" class="form-control filter-list-input" placeholder="Filter topics" aria-label="Filter Topics">
                                </div>
                            </form>
                        </div>
                        <!--end of content list head-->
                        
                        <div class="card card-task">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="#"><h5>Capstone Tracking Project</h5></a>
                                    <span class="badge badge-primary">Group: 2</span>
                                    <span class="badge badge-warning">Team: -/-</span>
                                </div>
                                <div class="card-meta">
                                    <ul class="avatars">
                                        <li>
                                            <img alt="Tống Uy Long" class="avatar" src="assets/img/avatar-tong-uy-long.jpg" />
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm ml-2">Decline</button>
                                    </div>
                                    <div class="dropdown card-options">
                                        <button class="btn-options" type="button" id="task-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#topic-edit-modal">Edit</a>
                                            <a class="dropdown-item" href="#">Share</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-chartjs" href="#" data-dz-remove>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end of content list-->

                        <div class="card card-task">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="#"><h5>Capstone Tracking Project</h5></a>
                                    <span class="badge badge-primary">Group: 2</span>
                                    <span class="badge badge-warning">Team: 10</span>
                                </div>
                                <div class="card-meta">
                                    <ul class="avatars">
                                        <li>
                                            <img alt="Ngọc Trinh" class="avatar" src="assets/img/avatar-ngoc-trinh.jpg" />
                                        </li>
                                        
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm ml-2">Decline</button>
                                    </div>
                                    <div class="dropdown card-options">
                                        <button class="btn-options" type="button" id="task-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#topic-edit-modal">Edit</a>
                                            <a class="dropdown-item" href="#">Share</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-chartjs" href="#" data-dz-remove>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end of content list-->


                    </div>
                    <!--end of tab-->

                    <!-- Upload -->
                    <div class="tab-pane fade" id="files" role="tabpanel" data-filter-list="dropzone-previews">
                        <div class="content-list">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Files</h3>
                                </div>
                                <form class="col-md-auto">
                                    <div class="input-group input-group-round">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">filter_list</i>
                                            </span>
                                        </div>
                                        <input type="search" class="form-control filter-list-input" placeholder="Filter files" aria-label="Filter Tasks">
                                    </div>
                                </form>
                            </div>
                            <!--end of content list head-->
                            <div class="content-list-body row">
                                <div class="col">
                                    <ul class="d-none dz-template">
                                        <li class="list-group-item dz-preview dz-file-preview">
                                            <div class="media align-items-center dz-details">
                                                <ul class="avatars">
                                                    <li>
                                                        <div class="avatar bg-primary dz-file-representation">
                                                            <i class="material-icons">attach_file</i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar" data-title="David Whittaker" data-toggle="tooltip" />
                                                    </li>
                                                </ul>

                                                <div class="media-body d-flex justify-content-between align-items-center">
                                                    <div class="dz-file-details">
                                                        <a href="#" class="dz-filename">
                                                            <span data-dz-name></span>
                                                        </a>
                                                        <br>
                                                        <span class="text-small dz-size" data-dz-size></span>
                                                    </div>
                                                    <img alt="Loader" src="assets/img/loader.svg" class="dz-loading" />
                                                    <div class="dropdown">
                                                        <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Download</a>
                                                            <a class="dropdown-item" href="#">Share</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#" data-dz-remove>Delete</a>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-danger btn-sm dz-remove" data-dz-remove>
                                                    Cancel
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="progress dz-progress">
                                                <div class="progress-bar dz-upload" data-dz-uploadprogress></div>
                                            </div>
                                        </li>
                                    </ul>

                                    <form class="dropzone" action="upload.php">
                                        <span class="dz-message">Drop files here or click here to upload</span>
                                    </form>
            
                                    <ul class="list-group list-group-activity dropzone-previews flex-column-reverse">
            
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">insert_drive_file</i>
                                                </div>
                                                </li>
                                                <li>
                                                <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar" data-title="Peggy Brown" data-toggle="tooltip" data-filter-by="data-title" />
                                                </li>
                                            </ul>
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                <a href="#" data-filter-by="text">client-questionnaire</a>
                                                <br>
                                                <span class="text-small" data-filter-by="text">48kb Text Doc</span>
                                                </div>
                                                <div class="dropdown">
                                                <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Download</a>
                                                    <a class="dropdown-item" href="#">Share</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
            
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">folder</i>
                                                </div>
                                                </li>
                                                <li>
                                                <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar" data-title="Harry Xai" data-toggle="tooltip" data-filter-by="data-title" />
                                                </li>
                                            </ul>
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                <a href="#" data-filter-by="text">moodboard_images</a>
                                                <br>
                                                <span class="text-small" data-filter-by="text">748kb ZIP</span>
                                                </div>
                                                <div class="dropdown">
                                                <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Download</a>
                                                    <a class="dropdown-item" href="#">Share</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
            
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">image</i>
                                                </div>
                                                </li>
                                                <li>
                                                <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar" data-title="Ravi Singh" data-toggle="tooltip" data-filter-by="data-title" />
                                                </li>
                                            </ul>
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                <a href="#" data-filter-by="text">possible-hero-image</a>
                                                <br>
                                                <span class="text-small" data-filter-by="text">1.2mb JPEG image</span>
                                                </div>
                                                <div class="dropdown">
                                                <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Download</a>
                                                    <a class="dropdown-item" href="#">Share</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
            
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">insert_drive_file</i>
                                                </div>
                                                </li>
                                                <li>
                                                <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar" data-title="Claire Connors" data-toggle="tooltip" data-filter-by="data-title" />
                                                </li>
                                            </ul>
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                <a href="#" data-filter-by="text">LandingPrototypes</a>
                                                <br>
                                                <span class="text-small" data-filter-by="text">415kb Sketch Doc</span>
                                                </div>
                                                <div class="dropdown">
                                                <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Download</a>
                                                    <a class="dropdown-item" href="#">Share</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
            
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">insert_drive_file</i>
                                                </div>
                                                </li>
                                                <li>
                                                <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title" />
                                                </li>
                                            </ul>
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                <a href="#" data-filter-by="text">Branding-Proforma</a>
                                                <br>
                                                <span class="text-small" data-filter-by="text">15kb Text Document</span>
                                                </div>
                                                <div class="dropdown">
                                                <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Download</a>
                                                    <a class="dropdown-item" href="#">Share</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
            
                                    </ul>
                                </div>
                            </div>
                        </div>
                      <!--end of content list-->
                    </div>

                    <!-- History -->
                    <div class="tab-pane fade" id="activity" role="tabpanel" data-filter-list="list-group-activity">
                        <div class="content-list">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Activity</h3>
                                </div>
                                <form class="col-md-auto">
                                    <div class="input-group input-group-round">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">filter_list</i>
                                        </span>
                                    </div>
                                    <input type="search" class="form-control filter-list-input" placeholder="Filter activity" aria-label="Filter activity">
                                    </div>
                                </form>
                            </div>
                            <!--end of content list head-->
                            <div class="content-list-body">
                                <ol class="list-group list-group-activity">
            
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                    <div class="avatar bg-primary">
                                                    <i class="material-icons">playlist_add_check</i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar" data-filter-by="alt" />
                                                </li>
                                            </ul>
                                            <div class="media-body">
                                                <div>
                                                    <span class="h6" data-filter-by="text">Claire</span>
                                                    <span data-filter-by="text">completed the task</span><a href="#" data-filter-by="text">Set up client chat channel</a>
                                                </div>
                                                <span class="text-small" data-filter-by="text">Just now</span>
                                            </div>
                                        </div>
                                    </li>
            
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                    <div class="avatar bg-primary">
                                                    <i class="material-icons">person_add</i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img alt="Ravi" src="assets/img/avatar-male-3.jpg" class="avatar" data-filter-by="alt" />
                                                </li>
                                            </ul>
                                            <div class="media-body">
                                                <div>
                                                    <span class="h6" data-filter-by="text">Ravi</span>
                                                    <span data-filter-by="text">joined the project</span>
                                                </div>
                                                <span class="text-small" data-filter-by="text">5 hours ago</span>
                                            </div>
                                        </div>
                                    </li>
            
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                <i class="material-icons">playlist_add</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="Kristina" src="assets/img/avatar-female-4.jpg" class="avatar" data-filter-by="alt" />
                                            </li>
                                            </ul>
                                            <div class="media-body">
                                            <div>
                                                <span class="h6" data-filter-by="text">Kristina</span>
                                                <span data-filter-by="text">added the task</span><a href="#" data-filter-by="text">Produce broad concept directions</a>
                                            </div>
                                            <span class="text-small" data-filter-by="text">Yesterday</span>
                                            </div>
                                        </div>
                                    </li>
            
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                    <div class="avatar bg-primary">
                                                    <i class="material-icons">playlist_add</i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img alt="Marcus" src="assets/img/avatar-male-1.jpg" class="avatar" data-filter-by="alt" />
                                                </li>
                                            </ul>
                                            <div class="media-body">
                                                <div>
                                                    <span class="h6" data-filter-by="text">Marcus</span>
                                                    <span data-filter-by="text">added the task</span><a href="#" data-filter-by="text">Present concepts and establish direction</a>
                                                </div>
                                                <span class="text-small" data-filter-by="text">Yesterday</span>
                                            </div>
                                        </div>
                                    </li>
            
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                <i class="material-icons">person_add</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="Sally" src="assets/img/avatar-female-3.jpg" class="avatar" data-filter-by="alt" />
                                            </li>
                                            </ul>
                                            <div class="media-body">
                                            <div>
                                                <span class="h6" data-filter-by="text">Sally</span>
                                                <span data-filter-by="text">joined the project</span>
                                            </div>
                                            <span class="text-small" data-filter-by="text">2 days ago</span>
                                            </div>
                                        </div>
                                    </li>
            
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                    <div class="avatar bg-primary">
                                                    <i class="material-icons">date_range</i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar" data-filter-by="alt" />
                                                </li>
                                            </ul>
                                            <div class="media-body">
                                                <div>
                                                    <span class="h6" data-filter-by="text">Claire</span>
                                                    <span data-filter-by="text">rescheduled the task</span><a href="#" data-filter-by="text">Target market trend analysis</a>
                                                </div>
                                                <span class="text-small" data-filter-by="text">2 days ago</span>
                                            </div>
                                        </div>
                                    </li>
            
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <ul class="avatars">
                                                <li>
                                                    <div class="avatar bg-primary">
                                                        <i class="material-icons">add</i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img alt="David" src="assets/img/avatar-male-4.jpg" class="avatar" data-filter-by="alt" />
                                                </li>
                                            </ul>
                                            <div class="media-body">
                                                <div>
                                                    <span class="h6" data-filter-by="text">David</span>
                                                    <span data-filter-by="text">started the project</span>
                                                </div>
                                                <span class="text-small" data-filter-by="text">12 days ago</span>
                                            </div>
                                        </div>
                                    </li>
            
                                </ol>
                            </div>
                        </div>
                      <!--end of content list-->
                    </div>
                    <!-- End History -->

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
        </div>
        <!-- end div row -->
    </div>
    <!-- end div container -->

</div>
</div>


<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

<!-- Autosize - resizes textarea inputs as user types -->
<script type="text/javascript" src="assets/js/autosize.min.js"></script>
<!-- Flatpickr (calendar/date/time picker UI) -->
<script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
<!-- Prism - displays formatted code boxes -->
<script type="text/javascript" src="assets/js/prism.js"></script>
<!-- Shopify Draggable - drag, drop and sort items on page -->
<script type="text/javascript" src="assets/js/draggable.bundle.legacy.js"></script>
<script type="text/javascript" src="assets/js/swap-animation.js"></script>
<!-- Dropzone - drag and drop files onto the page for uploading -->
<script type="text/javascript" src="assets/js/dropzone.min.js"></script>
<!-- List.js - filter list elements -->
<script type="text/javascript" src="assets/js/list.min.js"></script>

<!-- Required theme scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/theme.js"></script>

<script>
;(function($) {
$.fn.fixMe = function() {
    return this.each(function() {
        var $this = $(this),
            $t_fixed;
        function init() {
            $this.wrap('<div class="container" />');
            $t_fixed = $this.clone();
            $t_fixed.find("tbody").remove().end().addClass("fixed").insertAfter($this);
            resizeFixed();
        }
        function resizeFixed() {
            $t_fixed.find("th").each(function(index) {
            $(this).css("width",$this.find("th").eq(index).outerWidth()+"px");
            });
        }
        function scrollFixed() {
            var offset = $(this).scrollTop(),
            tableOffsetTop = $this.offset().top,
            tableOffsetBottom = tableOffsetTop + $this.height() - $this.find("thead").height();
            if(offset < tableOffsetTop || offset > tableOffsetBottom)
            $t_fixed.hide();
            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && $t_fixed.is(":hidden"))
            $t_fixed.show();
        }
        $(window).resize(resizeFixed);
        $(window).scroll(scrollFixed);
        init();
    });
};
})(jQuery);

$(document).ready(function(){
    $("table").fixMe();
    $(".up").click(function() {
        $('html, body').animate({
        scrollTop: 0
    }, 2000);
    });
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

