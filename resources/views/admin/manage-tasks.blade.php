@extends('layouts.master')

@section('content')

<div class="main-container">
    
    <div class="breadcrumb-bar navbar bg-white sticky-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Documents</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Manage Assignments</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->

    <!-- begin a container -->
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-11 col-xl-10">

            <div class="card mt-2">
                <div class="card-body">
                    <p class="text-center">Coming soon!</p>
                </div>
            </div>
           
          </div>
        </div>
    </div>
    <!-- end div container -->

</div>




@endsection

