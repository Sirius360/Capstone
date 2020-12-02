@extends('layouts.master')

@section('content')
<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Announcements</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Announcement</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->
    <?php
         $message= Session ::get('message');
         if($message){
             echo '<span class="test-alert">'.$message.'</span>';
             Session::put('message',null);

            }
    ?>
    <!-- begin a container -->
    <div class="container">
        <div class="row justify-content-center">
        @foreach($edit_new_announcement as $key => $edit_value)
          <div class="col-lg-11 col-xl-10">

            <form class="mt-3" method="POST" action="{{ url('admin/announcement/update-announcement-home/'.$edit_value->id) }}">
            {{csrf_field()}}

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit an Announcement</h5>
                    </div>
                    <!--end of modal head-->
                    <div class="modal-body">
                        <div class="form-group row align-items-center">
                            <label class="col-3">Title</label>
                            <input class="form-control col" type="text" value="{{$edit_value->title}}" placeholder="Title" name="name" />
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Content</label>
                            <textarea class="form-control col" rows="10"  name="description">{{$edit_value->content}}</textarea>
                        </div>
                        <hr>
                        <h6>Visibility</h6>
                        <div class="row">
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="visibility-everyone" name="visibility" class="custom-control-input" checked value="1">
                                    <label class="custom-control-label" for="visibility-everyone">Everyone</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="visibility-members" name="visibility" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="visibility-members">Members</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="visibility-me" name="visibility" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="visibility-me">Just me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of modal body-->
                    <div class="modal-footer">
                        <button role="button" class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
           
          </div>
        </div>
        @endforeach
    </div>
    <!-- end div container -->

</div>
@endsection
