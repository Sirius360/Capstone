<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content=" csrf_token() ">

    <title>Title</title>
    <link href="assets/img/DTU.ico" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

    <div class="layout layout-nav-side">
        <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
          
            <a class="navbar-brand" href="{{URL::to('/login')}}">
                <img alt="dtu" src="assets/img/duytan-university.svg" />
            </a>
          
            <div class="d-flex align-items-center">
        
                <!-- For guest only -->
                <div class="d-block d-lg-none">
                <a href="{{URL::to('/login')}}"><button type="button" class="btn btn-outline-warning">Login</button></a>
                </div>
        
                <div class="d-block d-lg-none mx-2">
                <a href="{{URL::to('/register')}}"><button type="button" class="btn btn-outline-info">Register</button></a>
                </div>
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
                <ul class="navbar-nav d-lg-block">
        
                <li class="nav-item">
                    
                    <a class="nav-link" href="#">About us</a>
        
                </li>
        
                <li class="nav-item">
                    
                    <a class="nav-link" href="#">Contact</a>
        
                </li>
                
        
                </ul>
                <hr>

                <div class="d-none d-lg-block help-box">
                    <h5 class="text-muted mt-0">For help?</h5>
                    <p class="text-break"><span class="text-custom text-word-break">Email:</span> <br/>help@capstonetracking.vn</p>
                </div>

            </div>

            <div class="d-none d-lg-block">
                <!-- For guest only -->
                <a href="{{URL::to('/login')}}"><button type="button" class="btn btn-outline-warning">Login</button></a>
                <a href="{{URL::to('/register')}}" ><button type="button" class="btn btn-outline-info">Register</button></a>
            </div>
          
          
    
        </div>
    
        <div class="main-container fullscreen">
            <div class="container">
                <div class="row justify-content-center mt-2">
@yield('content2')
                    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-8">
                        <div class="text-center mt-3">

        <main class="py-4">
            @yield('content')
        </main>
        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright text-right">
            <small>Copyright 2020 © Capstone Tracking. All Right Reserved. Powered by QL3T Team</small>
        </div>

    </div>
</body>
</html>
