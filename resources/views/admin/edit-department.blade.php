@extends('layouts.master')

@section('content')
<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Departments</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Department</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
            @foreach($edit_new_department as $key => $cate_pro)
                <form class="mt-3"method="post" action="{{ url('admin/update-department/'.$cate_pro->id) }}">
                {{csrf_field()}}
                @endforeach
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">Edit a Department</h5> 
                        </div>
                        <!--end of modal head-->
                        <div class="modal-body">
                            
                            <div class="form-group row align-items-center">
                                <label class="col-2">Department</label>
                                @foreach($edit_new_department as $key => $cate_pro)
                               
                                <input class="form-control col" type="text" value="{{$cate_pro->name}}" name="department_name" required />
                                @endforeach
                            </div>
                           
                            <div class="form-group row align-items-center">
                                <label class="col-2">Faculty</label>
                                <select  name="abc" class="form-control col" required>
                               @foreach($manage_faculties as $key => $cate_pro)
                                    <option value="{{$cate_pro->id}}" selected>{{$cate_pro->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="col-2">Description</label>
                                @foreach($edit_new_department as $key => $cate_pro)

                                <textarea class="form-control col" rows="10" name="note_description" required >{{$cate_pro->description}}</textarea>
                                @endforeach
                            </div>
                        
                        </div>
                        <!--end of modal body-->
                        <div class="modal-footer">
                            <button role="button" class="btn btn-primary" type="submit">
                                Done
                            </button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>

</div>





@endsection

