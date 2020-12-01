@extends('layouts.master')

@section('content')

<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Faculties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Faculty</li>
            </ol>
        </nav>
    </div>
    <?php
         $messages= Session ::get('messages');
         if($messages){
             echo '<span class="test-alert">'.$messages.'</span>';
             Session::put('messages',null);

            }
    ?>

    <div class="container">
        <div class="row justify-content-center">
        @foreach($edit_new_faculty as $key => $edit_value)

            <div class="col-lg-11 col-xl-10">
    
                <form class="mt-3"method="POST" action="{{ url('admin/update-faculty/'.$edit_value->id) }}">
                      {{csrf_field()}}
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">Edit a Faculty</h5> 
                        </div>
                        <!--end of modal head-->
                        <div class="modal-body">
                            <div class="form-group row align-items-center">
                                <label class="col-2">Faculty</label>
                                <input class="form-control col" type="text" value="{{$edit_value->name}}" name="faculty_name" required />
                            </div>
                            <div class="form-group row">
                                <label class="col-2">Description</label>
                                <textarea class="form-control col" rows="10"  name="note_description" required >{{$edit_value->description}}</textarea>
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
         @endforeach

        </div>
    </div>

</div>
</div>





@endsection
