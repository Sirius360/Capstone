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
          
            <a class="navbar-brand" href="{{URL::to('/login')}}" >
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
                <a href="{{URL::to('/login')}}" ><button type="button" class="btn btn-outline-warning">Login</button></a>
                <a href="{{URL::to('/register')}}" ><button type="button" class="btn btn-outline-info">Register</button></a>
            </div>
          
          
    
        </div>
    
        <div class="main-container fullscreen">
    
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-8">
                        <div class="text-center">
                            <h2>Welcome Back &#x1f44b;</h2>
                            <p class="lead">Log in to your account to continue</p>
                            <form method="POST" action="{{ route('login') }}">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <input class="form-control fs-0" type="email" id="email" placeholder="Email" name="email" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control fs-0" type="password" id="password" placeholder="Password" name="password" />
                                    <div class="text-right">
                                        <a href="{{URL::to('/forgot')}}"><span class="pallette-grey-4">Forgot password?</span></a>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                                    Log in
                                </button>
                                <div class="mt-2">
                                    <span class="fs-0">Don't have an account yet? <a href="{{URL::to('/register')}}"   >Create one</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>            
            </div>

        </div>

        <div class="copyright text-right">
            <small>Copyright 2020 © Capstone Tracking. All Right Reserved. Powered by QL3T Team</small>
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

</body>

</html>