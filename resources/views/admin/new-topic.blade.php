@extends('layouts.master')

@section('content')

<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Topics</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">New Topic</li>
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
            <div class="col-lg-11 col-xl-10">
                
            <form class="mt-3"method="post" action="{{ url('admin/save-new-topic') }}">
                {{csrf_field()}}
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">Create a Topic</h5> 
                        </div>
                        <!--end of modal head-->
                        <div class="modal-body">
                            <div class="form-group row align-items-center">
                                <label class="col-2">Title</label>
                                <input class="form-control col" type="text" placeholder="Title in English" name="english_title" required />
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-2"></label>
                                <input class="form-control col" type="text" placeholder="Title in Vietnamese" name="vietnamese_title" required />
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-2"></label>
                                <input class="form-control col" type="text" placeholder="Initial Title" name="initial_title" required />
                            </div>
                            <div class="form-group row">
                                <label class="col-2">Description</label>
                                <textarea class="form-control col" rows="10" placeholder="Write something here..." name="note_description" required ></textarea>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-2">Group</label>
                                <select name="groups" class="form-control col" required>
                                @foreach($group_topic as $key => $cate_pro)

                                    <option value="{{$cate_pro->id}}" >{{$cate_pro->name}}</option>
                                    @endforeach    
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-2">Team</label>
                                <select name="teams" class="form-control col">

                                <!-- cái này là team cái trên là group -->
                                @foreach($team_topic as $key => $cate_pro)
                                    <!-- <option selected>-- Select One (Optional) --</option> -->
                                    <option value="{{$cate_pro->id}}" >{{$cate_pro->name}}</option>
                                    @endforeach
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

@endsection


