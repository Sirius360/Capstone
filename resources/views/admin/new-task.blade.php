@extends('layouts.layouts')

@section('content')

<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Documents</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">New Assignment</li>
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
                            <h5 class="modal-title">New Assignment</h5>
                        </div>
                    
                        <div class="modal-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="document-request" role="tabpanel">
                                    
                                    <h6>General Details</h6>
                                    <div class="form-group row align-items-center">
                                        <label class="col-3">Title</label>
                                        <input class="form-control col" type="text" placeholder="Title" name="title" required/>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">Description</label>
                                        <textarea class="form-control col" rows="10" placeholder="Write something here..." name="request-description"></textarea>
                                    </div>

                                    <hr>
                                    <h6>Timeline</h6>
                                    <div class="form-group row align-items-center">
                                        <label class="col-3">Start Date</label>
                                        <input class="form-control col" id="startDate" type="text" name="request-start" placeholder="Select a date" data-alt-input="true" data-enable-time="true"/>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <label class="col-3">Due Date</label>
                                        <input class="form-control col" id="dueDate" type="text" name="request-due" placeholder="Select a date" data-alt-input="true" data-enable-time="true" />
                                    </div>

                                    <div class="alert alert-warning text-small" role="alert">
                                        <span>You can change due dates at any time.</span>
                                    </div>

                                    <hr>

                                    <h6>Attachments</h6>

                                    <div class="d-none dz-template">
                                        <li class="list-group-item dz-preview dz-file-preview">
                                            <div class="media align-items-center dz-details">
                                                <ul class="avatars">
                                                    <li>
                                                        <div class="avatar bg-primary dz-file-representation">
                                                            <img class="avatar" data-dz-thumbnail />
                                                            <i class="material-icons">attach_file</i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <img alt="..." src="..." class="avatar" data-title="..." data-toggle="tooltip" />
                                                    </li>
                                                </ul>
                                                <div class="media-body d-flex justify-content-between align-items-center">
                                                    <div class="dz-file-details">
                                                        <a href="#" class="dz-filename"><span data-dz-name></span></a><br>
                                                        <span class="text-small dz-size" data-dz-size></span>
                                                    </div>
                                                    <img alt="Loader" src="assets/img/loader.svg" class="dz-loading" />
                                                    <div class="dropdown">
                                                        <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Download</a>
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
                                    </div>
                                    <form class="dropzone" action="">
                                        <span class="dz-message">Drop files or click here to upload</span>
                                    </form>
                                    <ul class="list-group list-group-activity dropzone-previews flex-column-reverse">
                                        
                                    </ul>

                                   
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

<!-- This appears in the demo only - demonstrates different layouts -->
<style type="text/css">
.layout-switcher{ position: fixed; bottom: 0; left: 50%; transform: translateX(-50%) translateY(73px); color: #fff; transition: all .35s ease; background: #343a40; border-radius: .25rem .25rem 0 0; padding: .75rem; z-index: 999; }
      .layout-switcher:not(:hover){ opacity: .95; }
      .layout-switcher:not(:focus){ cursor: pointer; }
      .layout-switcher-head{ font-size: .75rem; font-weight: 600; text-transform: uppercase; }
      .layout-switcher-head i{ font-size: 1.25rem; transition: all .35s ease; }
      .layout-switcher-body{ transition: all .55s ease; opacity: 0; padding-top: .75rem; transform: translateY(24px); text-align: center; }
      .layout-switcher:focus{ opacity: 1; outline: none; transform: translateX(-50%) translateY(0); }
      .layout-switcher:focus .layout-switcher-head i{ transform: rotateZ(180deg); opacity: 0; }
      .layout-switcher:focus .layout-switcher-body{ opacity: 1; transform: translateY(0); }
      .layout-switcher-option{ width: 72px; padding: .25rem; border: 2px solid rgba(255,255,255,0); display: inline-block; border-radius: 4px; transition: all .35s ease; }
      .layout-switcher-option.active{ border-color: #007bff; }
      .layout-switcher-icon{ width: 100%; border-radius: 4px; }
      .layout-switcher-body:hover .layout-switcher-option:not(:hover){ opacity: .5; transform: scale(0.9); }
      @media all and (max-width: 990px){ .layout-switcher{ min-width: 250px; } }
      @media all and (max-width: 767px){ .layout-switcher{ display: none; } }
</style>

<script>


$("#startDate").flatpickr({
    defaultDate: "today",
    time_24hr: true
});

$("#dueDate").flatpickr({
    defaultDate: new Date().fp_incr(7)
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
