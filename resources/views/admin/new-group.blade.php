@extends('layouts.layouts')

@section('content')

<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Groups</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">New Group</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->

    <!-- begin a container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
                
                <form class="mt-3">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Create a Group</h5>
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
                                </div>
                            </div>
                        </div>
                        <!--end of modal body-->
                        <div class="modal-footer">
                            <button role="button" class="btn btn-primary" type="submit">
                                Create
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
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
