@extends('layouts.layouts')

@section('content')

<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Topics</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">New Topic</li>
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
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">Create a Topic</h5> 
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
                            Post
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


@endsection


